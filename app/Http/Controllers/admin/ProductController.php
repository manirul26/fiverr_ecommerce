<?php
namespace App\Http\Controllers\admin;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories; 
use App\Models\Addroles;
use App\Models\Brand;
use App\Models\Stock;
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
        return view('Admin/Products/list', compact('Product'));
    }
    public function stocklist()
    {

        $query = DB::table('products')
        ->select('products.id','products.productname','stocks.stock','stocks.date',
        'products.brandid')
        ->join('stocks', 'stocks.productid', '=', 'products.id')
        ->get();
        return view('Admin.Inventory.list')->with([
            'query' => $query
        ]);
    }
    public function addstock()
    {
          // $brand = Brand::with('category')->get();
          $Product = Product::all();
          return view('Admin/Inventory/Addstock', compact('Product'));
    }
    //Addstockedit
    public function Addstockedit($id)
    {
        $Product = Product::all();
        $query = DB::table('stocks')->where('id',$id)->get();
        $query = DB::table('products')
        ->select('products.id','products.productname','stocks.stock','stocks.date','stocks.id',
        'products.brandid','stocks.stockdescription')
        ->join('stocks', 'stocks.productid', '=', 'products.id')
        ->where('stocks.id',$id)
        ->get();
        return view('Admin.Inventory.Editaddstock')->with([
            'query' => $query,
            'Product' => $Product
        ]);

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
    //storeStock
    public function storeStock(Request $request)
    {

        $input = $request->all();
        $input['productid'] = $request->input('productid');
        $input['stock'] = $request->input('stock');
        $input['date'] = date('Y-m-d');
        $input['stockdescription'] = $request->input('stockdescription');
        $input['created_at'] = Carbon::now()->timestamp;      
        $input['updated_at'] = Carbon::now()->timestamp;  
        Stock::create($input);
       return redirect()->route("admin.stocklist")->with('success','Data added Successfully');

    }
    //updateStock
    public function updateStock(Request $request)
    {
       $request->validate([
        'productid' => 'required',
        'stock' => 'required',
        'stockdescription' => 'required'
        ]);

            $data = array(
            'stock'    =>  $request->stock,
            'stockdescription'    =>  $request->stockdescription
            
            );
            $id = DB::table('stocks')->where('id',$request->id)->update($data);
            if($id > 0)
            {
               
                return redirect()->route("admin.stocklist")->with('success','update Successfully');
            }
            else
            {
                return redirect()->route("admin.stocklist")->with('error','failed to update');
            }

    }
    public function storeProduct(Request $request)
    {
        $request->validate([
            'productname' => 'required'
        ]);
        if($request->product_image == "")
        {
            return redirect()->route("admin.addproductpage")->with('error','Insert the Product Image');

        }
        else if($request->seo_image == "")
        {
            return redirect()->route("admin.addproductpage")->with('error','Insert the SEO Image');

        }
        else
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
            $input['seo_image'] = $filenameseo;
            
    
            $input['variablesstatus'] = $request->input('variablesstatus');
            $input['variables_size'] = $request->input('variables_size');
            $input['variables_type'] = $request->input('variables_type');
            $input['variables_value'] = $request->input('variables_value');
    
    
            $input['seo_address'] = $request->input('seo_address');
            $input['seo_slug'] = $request->input('seo_slug');
            $input['seo_des'] = $request->input('seo_des');
    
    
    
            $input['created_at'] = Carbon::now()->timestamp;      
            $input['updated_at'] = Carbon::now()->timestamp;  
            Product::create($input);
           return redirect()->route("admin.productlist")->with('success','Data added Successfully');
        }

        

    }
}