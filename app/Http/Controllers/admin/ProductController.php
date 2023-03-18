<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Addroles;
use Hash;
use Session;
use DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function index()
    {
        // $brand = Brand::with('category')->get();
        $Product = Product::all();
        return view('admin/Products/list', compact('Product'));
    }
}
