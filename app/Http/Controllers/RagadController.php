<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Ragad;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class RagadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pasien(Pasien $pasien)
    {
        return view('rgd.pasien', [
            "title" => "Data Pasien",
            "pasiens" => $pasien->latest()->filter(request(['table_search']))->paginate(20)
        ]);
    }

    public function index(Pasien $pasien, User $user, Request $request)
    {

        return view('rgd.index', [
            "title" => "Data Ruang Gawat Darurat",
            "pasien" => $pasien,
            "ragads" => Ragad::latest()->where("pasien_id", $pasien->id)->ragad(request(['table_search']))->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pasien $pasien)
    {
        return view('rgd.create', [
            'users' => User::where("level", 1)->latest()->get(),
            'no_rm' => $pasien->no_rm
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
        $request->validate([
            'pasien_id' => 'required',
            'user1' => 'required',
            'user3' => 'nullable',
            'user2' => 'nullable',
            'tgl_masuk' => 'required|date',
            'jaminan' => 'required|max:25',
            'tekanan' => 'nullable|max:50',
            'bb' => 'nullable|numeric|digits_between:2,5',
            'keluhan' => 'required|max:255',
            'diagnosa' => 'nullable|max:255',
            'terapi' => 'nullable|max:255',
            'ic' => 'nullable',
            'tindakan' => 'nullable',
            'rujuk' => 'nullable',
            'rs_rujuk' => 'nullable|max:50',
            'monitoring_rujuk' => 'nullable|max:255',
        ]);

        // dd($request->all());

        Ragad::create($request->all());

        return redirect()->route('ragad', $pasien->no_rm)->with('success', 'Data riwayat ruang gawat darurat pasien berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ragad  $ragad
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $pasien = Pasien::all();
        $ragads = Ragad::latest()->get();

        // dd($request->start_date);
        if ($request->start_date || $request->end_date) {
            $startDate = Carbon::createFromFormat('Y-m-d', $request->start_date);
            $endDate = Carbon::createFromFormat('Y-m-d', $request->end_date);

            $ragads = Ragad::whereBetween('tgl_masuk', [$startDate, $endDate])->get();
        } else {
            $ragads = Ragad::latest()->get();
        }

        // dd($ragads[0]->pasien->nama);
        return view('rgd.show', [
            "pasien" => $pasien,
            "ragads" => $ragads,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ragad  $ragad
     * @return \Illuminate\Http\Response
     */
    public function edit($ragad_id, $pasien_id)
    {
        $ragad = Ragad::find($ragad_id);
        $pasien = Pasien::find($pasien_id);
        return view('rgd.edit', [
            "ragad" =>  $ragad,
            "pasien" =>  $pasien,
            'users' => User::where("level", 1)->latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ragad  $ragad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ragad_id, $pasien_id)
    {
        $pasien = Pasien::find($pasien_id);
        $request->validate([
            'user1' => 'required',
            'user3' => 'nullable',
            'user2' => 'nullable',
            'tgl_masuk' => 'required|date',
            'jaminan' => 'required|max:25',
            'tekanan' => 'nullable|max:50',
            'bb' => 'nullable|numeric|digits_between:2,5',
            'keluhan' => 'required|max:255',
            'diagnosa' => 'required|max:255',
            'terapi' => 'required|max:255',
            'ic' => 'nullable',
            'tindakan' => 'nullable',
            'rujuk' => 'nullable',
            'rs_rujuk' => 'nullable|max:50',
            'monitoring_rujuk' => 'nullable|max:255',
        ]);

        Ragad::where('id', $ragad_id)
            ->update($request->except(['_token']));

        return redirect()->route('ragad', $pasien->no_rm)->with('success', 'Data riwayat ruang gawat darurat pasien berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ragad  $ragad
     * @return \Illuminate\Http\Response
     */
    public function destroy($ragad_id, $pasien_id)
    {
        $pasien = Pasien::find($pasien_id);
        Ragad::destroy($ragad_id);

        return redirect()->route('ragad', $pasien->no_rm)->with('success', 'Data riwayat ruang gawat darurat pasien berhasil dihapus');
    }

    // public function cari(Request $request, $ragad_id, $pasien_id)
    // {
    //     $pasien = Pasien::find($pasien_id);
    //     $cari = $request->table_search;
    //     $ragad= Ragad::join('users','ragads.user_id','=','users.id')
    //     ->where('users.nama','like', '%' . $cari . '%')
    //     ->paginate();

    //     return view('index',['']);

    //     // // $ragad = DB::select("SELECT * FROM ragads JOIN users ON ragads.user_id = users.id WHERE users.nama LIKE '%$cari%' ;");
    //     // // // dd($ragad);
    //     // // // return redirect('ragad', ['ragad' => 1]);
    //     // // return view('rgd.index', [
    //     // //     "title" => "Data Ruang Gawat Darurat",
    //     // //     "pasien" => $pasien,
    //     // //     "ragads" => $ragad,
    //     // //     // "pasien" => $pasien->latest()->paginate()

    //     // ]);
    // }
}
