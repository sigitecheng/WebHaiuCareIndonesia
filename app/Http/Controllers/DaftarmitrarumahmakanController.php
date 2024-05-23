<?php

namespace App\Http\Controllers;

use App\Models\Daftarmitrarumahmakan;
use Illuminate\Http\Request;

class DaftarmitrarumahmakanController extends Controller
{
    //

      //
      public function index()
      {
  
          return view('fe_dashboard.daftarmitrarumahmakan.index',[
              'title' => 'Mitra UMKM',
              // 'title_halaman' => 'Halaman Fundraising',
      
              'data_daftarmitrarumahmakan'  => Daftarmitrarumahmakan::paginate(5),
      
          ]); 
  
      }
}
