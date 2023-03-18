<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories; 
use App\Models\Addroles;
use App\Models\Brand;
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
    public function add()
    {
        $category = Categories::all();
        $brand = Brand::all();
        $Product = Product::all();
        return view('Admin.Products.add')->with([
            'Product' => $Product,
            'brand' => $brand,
            'category' => $category
        ]);
    }
    public function storeProduct(Request $request)
    {
        $input = $request->all();
        $input['productname'] = $request->input('productname');
        $input['permalink'] = $request->input('permalink');
        $input['brandid'] = $request->input('brandid');
        $input['categoriesid'] = $request->input('categoriesid');

        $input['relatedproduct'] = $request->input('relatedproduct');
        $input['sellingprice'] = $request->input('sellingprice');
        $input['purchasingprice'] = $request->input('purchasingprice');
        $input['previousprice'] = $request->input('previousprice'); 

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move('upload/product', $fileName);
        }
        $input['productimage'] = $fileName;

        if ($request->hasFile('seo_image')) {
            $fileseo = $request->file('seo_image');
            $ext = $fileseo->getClientOriginalExtension();
            $filenameseo = time() . '.' . $ext;
            $fileseo->move('upload/seoimage', $filenameseo);
        }
        $input['seo_image'] = 'x';
        

        $input['variablesstatus'] = $request->input('variablesstatus');
        $input['variables_size'] = $request->input('variables_size');
        $input['variables_type'] = $request->input('variables_type');
        $input['variables_value'] = $request->input('variables_value');


        $input['seo_address'] = $request->input('seo_address');
        $input['seo_slug'] = $request->input('seo_slug');
        $input['seo_des'] = $request->input('seo_des');
        $input['seo_image'] = $request->input('seo_image');


        $input['created_at'] = date('Y-m-d');        
        $input['updated_at'] = date('Y-m-d');   
        Product::create($input);
       // return redirect()->route("Rolelist")->with('message','Data added Successfully');

    }
}