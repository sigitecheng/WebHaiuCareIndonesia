<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fe_makangratis;


class FeMakangratisController extends Controller
{
    //
    public function index()
    {
        //
        return view('fe_dashboard.makangratis.halamanmakangratis.index',[
            'title' => 'Makan Gratis',
            // 'title_halaman' => 'Halaman Fundraiser',

            // ''  => Fundraiser::paginate(10),

        ]); 
        
    }

}
