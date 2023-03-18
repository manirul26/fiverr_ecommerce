<?php

namespace App\Http\Controllers\admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\updateBrandRequest;
use Redirect,Response;
class BrandController extends Controller
{
    public function index()
    {
        // $brand = Brand::with('category')->get();
        $brand = Brand::all();
        return view('admin/brand/brandlist', compact('brand'));
    }

    public function indexAddBrand()
    {
        $brand = Brand::all(); 
        return view('admin/brand/add-brand',compact('brand'));
    }

    public function storeBrand(BrandRequest $request)
    {
        DB::beginTransaction();
        try {
            // $adminInfo = Auth::user();
            $brand = new Brand();
            $brand->name = $request->name;
            $brand->category_id = 1;
      
    
            if ($request->hasFile('brand_image')) {
                $file = $request->file('brand_image');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $ext;
                $file->move('upload/brand', $fileName);
            }
            $brand->brand_image = $fileName;
            
            $brand->created_at = Carbon::now()->timestamp;
            // $brand->created_by = $adminInfo->username;
            // $brand->updated_by = $adminInfo->username;
            if ($brand->save()) {
                DB::commit();
                return redirect('admin/brand/brandlist');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }

    public function EditBrand($id)
    {
   
        $brand = Brand::where('id', $id)->first();
        // $data['category'] = Category::all();
        return view('admin/brand/edit-brand',['brand' => $brand]);
    }
    public function edit(Request $request)
    {
     $where = array('id' => $request->ids);
     $customer = Brand::where($where)->first();
     return Response::json($customer);
    }
    public function updateBrand(updateBrandRequest $request)
    {
        DB::beginTransaction();
        // $adminInfo = Auth::user();
    
        try{
            $brand =Brand::find($request->id);
            if($request->hasFile('brand_image')){
                $path ='upload/brand'.$brand->brand_image;
                if(File::exists($path)){
                    File::delete($path);
                } 
            }
          
            //for brand image
            $file =$request->file('brand_image');
            $ext =$file->getClientOriginalExtension();
            $brand_image =time().'.'.$ext; 
            $file->move('upload/brand',$brand_image);
      
       
        Brand::where('id', $request->id)->update([
        'name' => $request->name,
        'brand_image'=>$brand_image,

        // 'updated_by' => $adminInfo->username,
        ]); 
            DB::commit();
            return redirect('admin/brand/brandlist');
        }catch(\Exception $e){
            DB::rollback();
            return $e;
        }
    }
   
    public function brandDelete($id)
    {
        Brand::findOrFail($id)->delete();
        return redirect('admin/brand/brandlist');
    }
    public function deleteBrand(Request $request)
    {
        $id = $request->ids;

            $id = Brand::whereIn('id',$id)->delete();

            if($id > 0)
            {
                echo "delete";
            }
            else
            {
                echo "failed";
    
            }
       
    }
}