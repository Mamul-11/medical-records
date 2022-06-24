<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Ranap;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RanapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pasien()
    {
        return view('ri.pasien', [
            "title" => "Data Pasien",
            "pasiens" => Pasien::latest()->filter(request(['table_search']))->paginate(20)
        ]);
    }

    public function index(Pasien $pasien, Ranap $ranap)
    {
        return view('ri.index', [
            "pasien" => $pasien,
            "title" => "Data Rawat Inap",
            "ranaps" => Ranap::latest()->where("pasien_id", $pasien->id)->ranap(request(['table_search']))->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pasien $pasien)
    {
        return view('ri.create', [
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
            'user1' => 'required|max:100',
            'user2' => 'nullable|max:100',
            'user3' => 'nullable|max:100',
            'jaminan' => 'required|max:25',
            'keluhan' => 'required|max:255',
            'diagnosa' => 'nullable|max:255',
            'terapi' => 'nullable|max:255',
            'tgl_masuk' => 'required|date',
            'tgl_keluar' => 'nullable|date',
            'biaya' => 'nullable|numeric|digits_between:4,10',
            'ket' => 'required'
        ]);

        Ranap::create($request->all());

        return redirect()->route('ranap', $pasien->no_rm)->with('success', 'Data riwayat rawat inap pasien berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ranap  $ranap
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $pasien = Pasien::all();
        $ranaps = Ranap::latest()->get();

        // dd($request->start_date);
        if ($request->start_date || $request->end_date) {
            $startDate = Carbon::createFromFormat('Y-m-d', $request->start_date);
            $endDate = Carbon::createFromFormat('Y-m-d', $request->end_date);

            $ranaps = Ranap::whereBetween('tgl_masuk', [$startDate, $endDate])->get();
        } else {
            $ranaps = Ranap::latest()->get();
        }

        // dd($ranaps[0]->pasien->nama);
        return view('ri.show', [
            "pasien" => $pasien,
            "ranaps" => $ranaps,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ranap  $ranap
     * @return \Illuminate\Http\Response
     */
    public function edit($ranap_id, $pasien_id)
    {
        $ranap = Ranap::find($ranap_id);
        $pasien = Pasien::find($pasien_id);
        return view('ri.edit', [
            'ranap' => $ranap,
            'pasien' => $pasien,
            'users' => User::where("level", 1)->latest()->get(),
            'no_rm' => $pasien->no_rm
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ranap  $ranap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ranap_id, $pasien_id)
    {
        $pasien = Pasien::find($pasien_id);
        $request->validate([
            'user1' => 'required|max:100',
            'user2' => 'nullable|max:100',
            'user3' => 'nullable|max:100',
            'jaminan' => 'required|max:25',
            'keluhan' => 'required|max:255',
            'diagnosa' => 'required|max:255',
            'terapi' => 'required|max:255',
            'tgl_masuk' => 'nullable|date',
            'tgl_keluar' => 'required|date',
            'biaya' => 'nullable|numeric|digits_between:4,10',
            'ket' => 'required'
        ]);

        Ranap::where('id', $ranap_id)
            ->update($request->except(['_token']));

        return redirect()->route('ranap', $pasien->no_rm)->with('success', 'Data riwayat rawat inap pasien berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ranap  $ranap
     * @return \Illuminate\Http\Response
     */
    public function destroy($ranap_id, $pasien_id)
    {
        $pasien = Pasien::find($pasien_id);
        Ranap::destroy($ranap_id);

        return redirect()->route('ranap', $pasien->no_rm)->with('success', 'Data riwayat rawat inap pasien berhasil dihapus');
    }
}
