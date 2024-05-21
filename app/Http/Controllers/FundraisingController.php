<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fundraising;
use App\Http\Requests\StoreDonaturRequest;
use App\Http\Requests\UpdateDonaturRequest;


class FundraisingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin_dashboard.be_dashboard.fundraisings.index',[
            'title' => 'Manage Fundraising',
            'title_halaman' => 'Halaman Fundraising',

            'data_fundraising'  => Fundraising::paginate(10),

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
