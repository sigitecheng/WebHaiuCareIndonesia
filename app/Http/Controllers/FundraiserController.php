<?php

namespace App\Http\Controllers;

use App\Models\Fundraiser;
use App\Http\Requests\StoreFundraiserRequest;
use App\Http\Requests\UpdateFundraiserRequest;

class FundraiserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin_dashboard.be_dashboard.fundraisers.index',[
            'title' => 'Manage Fundraiser',
            'title_halaman' => 'Halaman Fundraiser',

            'data_fundraiser'  => Fundraiser::paginate(10),

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
    public function store(StoreFundraiserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fundraiser $fundraiser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fundraiser $fundraiser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFundraiserRequest $request, Fundraiser $fundraiser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fundraiser $fundraiser)
    {
        //
    }
}
