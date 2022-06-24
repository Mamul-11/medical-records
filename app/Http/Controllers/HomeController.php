<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pasien;
use App\Models\Rajal;
use App\Models\Ranap;
use App\Models\Ragad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pasien $pasien, User $user, Rajal $rajal, Ranap $ranap, Ragad $ragad)
    {
        return view('home',[
            "title" => "Home",
            "pasiens" => Pasien::all(),
            "rajals" => Rajal::all(),
            "ranaps" => Ranap::all(),
            "ragads" => Ragad::all(),
            "users" => User::all(),
            
            "januarirajal" => Rajal::WhereMonth('tgl_masuk','1')->whereYear('tgl_masuk', now())->get(),
            "febuarirajal" => Rajal::WhereMonth('tgl_masuk','2')->whereYear('tgl_masuk', now())->get(),
            "maretrajal" => Rajal::WhereMonth('tgl_masuk','3')->whereYear('tgl_masuk', now())->get(),
            "aprilrajal" => Rajal::WhereMonth('tgl_masuk','4')->whereYear('tgl_masuk', now())->get(),
            "meirajal" => Rajal::WhereMonth('tgl_masuk','5')->whereYear('tgl_masuk', now())->get(),
            "junirajal" => Rajal::WhereMonth('tgl_masuk','6')->whereYear('tgl_masuk', now())->get(),
            "julirajal" => Rajal::WhereMonth('tgl_masuk','7')->whereYear('tgl_masuk', now())->get(),
            "agustusrajal" => Rajal::WhereMonth('tgl_masuk','8')->whereYear('tgl_masuk', now())->get(),
            "septemberrajal" => Rajal::WhereMonth('tgl_masuk','9')->whereYear('tgl_masuk', now())->get(),
            "oktoberrajal" => Rajal::WhereMonth('tgl_masuk','10')->whereYear('tgl_masuk', now())->get(),
            "novemberrajal" => Rajal::WhereMonth('tgl_masuk','11')->whereYear('tgl_masuk', now())->get(),
            "desemberrajal" => Rajal::WhereMonth('tgl_masuk','12')->whereYear('tgl_masuk', now())->get(),

            "januariRanap" => Ranap::WhereMonth('tgl_masuk','1')->whereYear('tgl_masuk', now())->get(),
            "febuariRanap" => Ranap::WhereMonth('tgl_masuk','2')->whereYear('tgl_masuk', now())->get(),
            "maretRanap" => Ranap::WhereMonth('tgl_masuk','3')->whereYear('tgl_masuk', now())->get(),
            "aprilRanap" => Ranap::WhereMonth('tgl_masuk','4')->whereYear('tgl_masuk', now())->get(),
            "meiRanap" => Ranap::WhereMonth('tgl_masuk','5')->whereYear('tgl_masuk', now())->get(),
            "juniRanap" => Ranap::WhereMonth('tgl_masuk','6')->whereYear('tgl_masuk', now())->get(),
            "juliRanap" => Ranap::WhereMonth('tgl_masuk','7')->whereYear('tgl_masuk', now())->get(),
            "agustusRanap" => Ranap::WhereMonth('tgl_masuk','8')->whereYear('tgl_masuk', now())->get(),
            "septemberRanap" => Ranap::WhereMonth('tgl_masuk','9')->whereYear('tgl_masuk', now())->get(),
            "oktoberRanap" => Ranap::WhereMonth('tgl_masuk','10')->whereYear('tgl_masuk', now())->get(),
            "novemberRanap" => Ranap::WhereMonth('tgl_masuk','11')->whereYear('tgl_masuk', now())->get(),
            "desemberRanap" => Ranap::WhereMonth('tgl_masuk','12')->whereYear('tgl_masuk', now())->get(),

            "januariRagad" => Ragad::WhereMonth('tgl_masuk','1')->whereYear('tgl_masuk', now())->get(),
            "febuariRagad" => Ragad::WhereMonth('tgl_masuk','2')->whereYear('tgl_masuk', now())->get(),
            "maretRagad" => Ragad::WhereMonth('tgl_masuk','3')->whereYear('tgl_masuk', now())->get(),
            "aprilRagad" => Ragad::WhereMonth('tgl_masuk','4')->whereYear('tgl_masuk', now())->get(),
            "meiRagad" => Ragad::WhereMonth('tgl_masuk','5')->whereYear('tgl_masuk', now())->get(),
            "juniRagad" => Ragad::WhereMonth('tgl_masuk','6')->whereYear('tgl_masuk', now())->get(),
            "juliRagad" => Ragad::WhereMonth('tgl_masuk','7')->whereYear('tgl_masuk', now())->get(),
            "agustusRagad" => Ragad::WhereMonth('tgl_masuk','8')->whereYear('tgl_masuk', now())->get(),
            "septemberRagad" => Ragad::WhereMonth('tgl_masuk','9')->whereYear('tgl_masuk', now())->get(),
            "oktoberRagad" => Ragad::WhereMonth('tgl_masuk','10')->whereYear('tgl_masuk', now())->get(),
            "novemberRagad" => Ragad::WhereMonth('tgl_masuk','11')->whereYear('tgl_masuk', now())->get(),
            "desemberRagad" => Ragad::WhereMonth('tgl_masuk','12')->whereYear('tgl_masuk', now())->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
