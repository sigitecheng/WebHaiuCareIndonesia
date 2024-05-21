<?php

namespace App\Http\Controllers;

use App\Models\Fundraising_phase;
use App\Http\Requests\StoreFundraising_phasRequest;
use App\Http\Requests\UpdateFundraising_phasRequest;

class FundraisingPhasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin_dashboard.be_dashboard.fundraisings.index',[
            'title' => 'Manage Fundraising Phase',
            'title_halaman' => 'Halaman Fundraising Phase',

            'data_fundraisingphas'  => Fundraising_phase::paginate(10),

        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFundraising_phasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $fundraising_phas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $fundraising_phas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFundraising_phasRequest $request,  $fundraising_phas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $fundraising_phas)
    {
        //
    }
}
