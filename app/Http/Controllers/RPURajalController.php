<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Rajal;
use App\Models\User;
use App\Models\Poli;
use App\Models\Pasien;
use Illuminate\Http\Request;

class RPURajalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pasien()
    {
        return view('rj.rpu.rpuPasien',[
            "title" => "Data Pasien",
            "pasiens" => Pasien::latest()->filter(request(['table_search']))->paginate(20)
        ]);
    }

    public function index(Pasien $pasien, Rajal $rajal)
    {

        return view('rj.rpu.indexRPU',[
            "pasien" => $pasien,
            "title" => "Data Rawat Inap",
            "rajals" => Rajal::latest()->where("pasien_id", $pasien->id)->where("poli_id", 1)->cari(request(['table_search']))->paginate(20),
            // "rjl" => $rajal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pasien $pasien)
    {
        return view('rj.rpu.createRPU', [
            'users' => User::where("level", 1)->latest()->get(),
            'no_rm' => $pasien->no_rm,
            'polis' => Poli::where("id", 1)->get(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pasien $pasien)
    {
        $pasien = Pasien::where('no_rm', $pasien->no_rm)->first();
        $request->request->add(['pasien_id' => $pasien->id]);
        $request->request->add(['poli_id' => 1]);
        $request->validate([
            'pasien_id' => 'required',
            'user1' => 'required',
            'user2' => 'nullable',
            'user3' => 'nullable',
            'poli_id' => 'required',
            'tgl_masuk' => 'required|date',
            'jaminan' => 'required|max:25',
            'tekanan' => 'nullable|max:50',
            'bb' => 'nullable|numeric|digits_between:2,4',
            'tb' => 'nullable|numeric|digits_between:2,3',
            'lp' => 'nullable|numeric|digits_between:2,5',
            'keluhan' => 'required|max:255',
            'diagnosa' => 'nullable|max:255',
            'terapi' => 'nullable|max:255',
            'kode' => 'nullable|max:10',
            'lab' => 'nullable|max:255',
            'rokok' => 'nullable',
        ]);

        // dd($request->all());

        Rajal::create($request->all());

        return redirect()->route('rpu', $pasien->no_rm)->with('success', 'Data riwayat rawat jalan rpu pasien berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rajal  $rajal
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $pasien = Pasien::all();
        $rajals = Rajal::latest()->where("poli_id", 1)->get();

        // dd($request->start_date);
        if ($request->start_date || $request->end_date) {
            $startDate = Carbon::createFromFormat('Y-m-d', $request->start_date);
            $endDate = Carbon::createFromFormat('Y-m-d', $request->end_date);

            $rajals = Rajal::where("poli_id", 1)->whereBetween('tgl_masuk', [$startDate, $endDate])->get();
        } else {
            $rajals = Rajal::latest()->where("poli_id", 1)->get();
        }

        // dd($rajals[0]->pasien->nama);
        return view('rj.rpu.show', [
            "pasien" => $pasien,
            "rajals" => $rajals,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rajal  $rajal
     * @return \Illuminate\Http\Response
     */
    public function edit($rajal_id, $pasien_id)
    {
        $rajal = Rajal::find($rajal_id);
        $pasien = Pasien::find($pasien_id);
        return view('rj.rpu.editRPU', [
            "rajal" =>  $rajal,
            "pasien" =>  $pasien,
            'users' => User::where("level", 1)->latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rajal  $rajal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rajal_id, $pasien_id)
    {
        $pasien = Pasien::find($pasien_id);
        $request->validate([
            'user1' => 'required',
            'user2' => 'nullable|',
            'user3' => 'nullable|',
            'tgl_masuk' => 'required|date',
            'jaminan' => 'required|max:25',
            'tekanan' => 'nullable|max:50',
            'bb' => 'nullable|numeric|digits_between:2,4',
            'tb' => 'nullable|numeric|digits_between:2,3',
            'lp' => 'nullable|numeric|digits_between:2,5',
            'keluhan' => 'required|max:255',
            'diagnosa' => 'nullable|max:255',
            'terapi' => 'nullable|max:255',
            'kode' => 'nullable|max:10',
            'lab' => 'nullable|max:255',
            'rokok' => 'nullable|',
        ]);

        

        Rajal::where('id', $rajal_id)
        ->update($request->except(['_token']));

        return redirect()->route('rpu', $pasien->no_rm)->with('success', 'Data riwayat rawat jalan rpu pasien berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rajal  $rajal
     * @return \Illuminate\Http\Response
     */
    public function destroy($rajal_id, $pasien_id)
    {
        $pasien = Pasien::find($pasien_id);
        Rajal::destroy($rajal_id);

        return redirect()->route('rpu', $pasien->no_rm)->with('success', 'Data riwayat rawat jalan rpu pasien berhasil dihapus');
    }
}
