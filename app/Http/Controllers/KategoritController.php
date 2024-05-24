<?php

namespace App\Http\Controllers;

// use App\Models\Category;
use App\Models\Kategorit;
use Illuminate\Http\Request;

class KategoritController extends Controller
{
    // Method untuk mengambil semua kategori dan menampilkannya di view
    public function index()
    {
        return view('admin_dashboard.be_dashboard.category.index',[
            'title' => 'Data Categories',
            'title_halaman' => 'Halaman Categories',

            'data_category'  => Kategorit::paginate(10),

        ]); 
    }
}
