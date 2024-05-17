<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Method untuk mengambil semua kategori dan menampilkannya di view
    public function index()
    {
        $categories = Category::all(); // Mengambil semua data kategori
        return view('categories.index', compact('categories')); // Mengirim data ke view 'categories.index'
    }
}
