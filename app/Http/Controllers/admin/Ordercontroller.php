<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use DB;
use App\Models\Product;
use App\Models\Categories; 
use App\Models\Addroles;
use App\Models\Brand;
use App\Models\Stock;
use App\Models\Orders;

class Ordercontroller extends Controller
{
    //
    public function orderlist()
    {
        // $brand = Brand::with('category')->get();
        $Orders = Orders::all();
        return view('Admin/order/orderlist', compact('Orders'));
    }
}
