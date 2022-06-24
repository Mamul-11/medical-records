<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Ranap;
use App\Models\Ragad;
use App\Models\Rajal;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

use App\Exports\PasiensExport;
use Maatwebsite\Excel\Facades\Excel;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pasien.index', [
            "title" => "Data Pasien",
            "pasiens" => Pasien::latest()->filter(request(['table_search']))->paginate(25)
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pasien $pasien)
    {
        $c = Pasien::latest('id')->get();
        $count = $c[0]->id ?? 0;
        $s_number = str_pad($count + 1, 6, "0", STR_PAD_LEFT);
        return view('pasien.create', [
            "title" => "Tambah Data Pasien",
            "no_rm" => $s_number
        ]);
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
            'no_rm' => 'required|max:6|unique:pasiens',
            'nik' => 'required|numeric|digits:16|unique:pasiens',
            'nama' => 'required|max:150',
            'tgl_lahir' => 'required|date',
            'kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'faskes' => 'nullable|max:255',
            'no_kis' => 'nullable|numeric|digits_between:13,13|unique:pasiens',
            'status_kis' => 'nullable',
            'pendidikan' => 'nullable|max:100',
            'pekerjaan' => 'nullable|max:100',
            'kk' => 'nullable|max:150',
            'telp' => 'nullable|numeric|digits_between:11,14',
            'penyakit_sendiri' => 'nullable|',
            'penyakit_keluarga' => 'nullable|',
            'alergi' => 'nullable|',
            'pengobatan' => 'nullable|'
        ]);


        Pasien::create($validatedData);

        return redirect('/pasiens')->with('success', 'Data pasien berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        $pasien = Pasien::latest()->get();
        return view('pasien.show', [
            'pasiens' => $pasien
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', [
            'pasien' => $pasien
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $rules = [
            'no_rm' => "required|max:6|unique:pasiens,no_rm," . $pasien->id,
            'nik' => "required|numeric|digits:16|unique:pasiens,nik," . $pasien->id,
            'nama' => 'required|max:150',
            'tgl_lahir' => 'required|date',
            'kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'faskes' => 'nullable|max:255',
            'no_kis' => "nullable|numeric|digits:13|unique:pasiens,no_kis," . $pasien->id,
            'status_kis' => 'nullable|',
            'pendidikan' => 'nullable|max:100',
            'pekerjaan' => 'nullable|max:100',
            'kk' => 'nullable|max:150',
            'telp' => 'nullable|numeric|digits_between:11,14',
            'penyakit_sendiri' => 'nullable|max:255',
            'penyakit_keluarga' => 'nullable|max:255',
            'alergi' => 'nullable|max:255',
            'pengobatan' => 'nullable|max:255'
        ];

        // if ($request->no_rm != $pasien->no_rm) {
        //     $rules['no_rm'] = 'required|max:6|unique:pasiens,no_rm,except,'.$pasien->id;
        // }

        // if ($request->nik != $pasien->nik){
        //     $rules['nik'] = 'required|max:16|min:16|unique:pasiens';
        // }
        // if ($request->no_kis != $pasien->no_kis){
        //     $rules['no_kis'] = 'max:13|min:13|unique:pasiens';
        // }

        $validatedData = $request->validate($rules);



        Pasien::where('id', $pasien->id)
            ->update($validatedData);

        return redirect('/pasiens')->with('success', 'Data pasien berhasil diubah');
    }

    public function destroy(Pasien $pasien)
    {
        Pasien::destroy($pasien->id);

        $ranap = Ranap::where('pasien_id', $pasien->id);
        $ranap->delete();

        $ranap = Ragad::where('pasien_id', $pasien->id);
        $ranap->delete();

        $ranap = Rajal::where('pasien_id', $pasien->id);
        $ranap->delete();

        return redirect('/pasiens')->with('success', 'Data Pasien Berhasil dihapus');
    }

    public function export()
    {
        return Excel::download(new PasiensExport, 'pasiens.xlsx');
    }
}
