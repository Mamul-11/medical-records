<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function index(User $user, $nik)
    {
        $user = User::where('nik', $nik)->first();
        return view('profile.profile', [
            "user" => $user
        ]);
    }

    public function update(Request $request, User $user, $nik)
    {
        $user = User::where('nik', $nik)->first();
        $rules = [
            'nama' => 'required|max:255',
            'nik' => "required|max:16|min:16|unique:users,nik," . $user->id,
            'email' => "required|email|unique:users,email," . $user->id,
            'image' => 'image|file|max:2048|mimes:jpg,bmp,png,jpeg'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['id'] = auth()->user()->id;

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('user-image');
        }


        User::where('id', $user->id)
            ->update($validatedData);

        return redirect()->route('profile', $nik)->with('success', 'Data User telah berhasil diupdate');
    }

    public function password( User $user, $nik){
        // $user = User::where('nik', $nik)->first();
        // return view('users.changePassword', [
        //     "user" => $user
        // ]);

        $user = User::find(Auth::user()->nik);
        return view('profile.changePassword', [
                "user" => $user
            ]);
    }

    public function changePassword(Request $request, User $user, $nik)
    {
        // $user = User::where('nik', $nik)->first();
        // $request->validate([
        //     'password' => 'required|min:8|confirmed',
        //     'password_confirmation' => 'required|min:8'
        // ]);

        // if (empty($request->password)) {
        //     $user->update();
        // } else {
        //     $password_enkripsi = password_hash($request->password, PASSWORD_BCRYPT);

        //     $request->merge([
        //         'password' => $password_enkripsi
        //     ]);

        //     $user->update($request->only('password'));
        // }

        // return redirect()->route('profile', $nik)->with('success', 'Data User telah berhasil diupdate');

        $users = User::find(Auth::user()->nik);
        $request->validate([ 
            'oldpassword' => 'required',
            'newpassword' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:newpassword'
            
        ],[
            'password_confirmation.same' =>'Password harus sama dengan Password Baru'
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword , $hashedPassword)) {
            if (!Hash::check($request->newpassword , $hashedPassword)) {
 
                $users = User::find(Auth::user()->id);
                $users->password = bcrypt($request->newpassword);
                $users->save();

                return redirect()->back()->with('success','Kata sandi berhasil diupdate');
            }
            else{
                return redirect()->back()->with('warning','Kata sandi baru harus berbeda dengan kata sandi lama!');
            } 
        }
        else{
            return redirect()->back()->with('danger','Kata sandi lama tidak cocok');
        }
    }
}
