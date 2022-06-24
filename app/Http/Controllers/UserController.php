<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\Exports\UsersExport;
use Illuminate\Support\Facades\Artisan;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exitCode = Artisan::call('storage:link', []);
        //echo $exitCode; // 0 exit code for no errors.

        return view('users.index', [
            "title" => "Data Users",
            "users" => User::latest()->user(request(['table_search']))->paginate(25),
            "image" => $exitCode
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nik' => 'required|numeric|digits:16|unique:users',
            'level' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'image' => 'image|file|max:2048|mimes:jpg,bmp,png,jpeg'
        ], [
            'image.max' => 'Ukuran foto maksimal 2MB'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('user-image');
        }

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/users')->with('success', 'Data user telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('users.show', [
            "users" => User::latest()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nik)
    {
        $user = User::where('nik', $nik)->first();
        // dd($user);
        return view('users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $nik)
    {
        $user = User::where('nik', $nik)->first();
        $rules = [
            'nama' => 'required|max:255',
            'nik' => "required|numeric|digits:16|unique:users,nik," . $user->id,
            'level' => 'required',
            'email' => "required|email|unique:users,email," . $user->id,
            // 'password' => 'min:8',
            'image' => 'image|file|max:2048|mimes:jpg,bmp,png,jpeg'
        ];

        // // if($request->paswword != $user->password){
        // //     $rules['password'] = 'required|min:8|max:20';
        // // }

        // $validatedData['password'] = Hash::make($rules['password']);
        // $validatedData = $request->validate($rules);
        // if ($request->email != $user->email) {
        //     $rules['email'] = 'required|email|unique:users';
        // }


        // $rules['password'] = bcrypt($rules['password']);


        // $request->validate([
        //     'nama' => 'required|max:255',
        //     'nik' => "required|max:16|min:16|unique:users,nik,".$user->id,
        //     'level' => 'required',
        //     'email' => "required|email:dns|unique:users,email,".$user->id,
        //     'password' => 'required|min:8',
        //     'image' => 'image|file|max:2048|mimes:jpg,bmp,png,jpeg'
        // ]);

        $validatedData = $request->validate($rules);
        // $validatedData['password'] = Hash::make($rules['password']);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('user-image');
        }


        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/users')->with('success', 'Data User telah berhasil diupdate');
    }

    public function password($nik)
    {

        $user = User::where('nik', $nik)->first();
        $user->password = bcrypt('password');
        $user->save();

        return redirect('/users')->with('success', 'Password User telah berhasil direset');

        // return view('users.password', [
        //     'user' => $user
        // ]);
    }

    // public function changePassword(Request $request, User $user, $nik)
    // {
    //     $user = User::where('nik', $nik)->first();
    //     $request->validate([
    //         'password' => 'min:8|confirmed',
    //         'password_confirmation' => 'required|min:8'
    //     ]);

    //     $password_enkripsi = password_hash($request->password, PASSWORD_BCRYPT);

    //     $request->merge([
    //         'password' => $password_enkripsi
    //     ]);

    //     $user->update($request->only('password'));

    //     return redirect('/users')->with('success', 'Data user telah berhasil dihapus');

    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $nik)
    {
        // dd();
        $user = User::where('nik', $nik)->first();
        if ($user->image) {
            Storage::destroy($user->image);
        };

        User::destroy($user->id);

        return redirect('/users')->with('success', 'Data user telah berhasil dihapus');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
