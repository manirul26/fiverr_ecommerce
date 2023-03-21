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
        return view('Admin/brand/brandlist', compact('brand'));
    }

    public function indexAddBrand()
    {
        $brand = Brand::all(); 
        return view('Admin/brand/add-brand',compact('brand'));
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
        return view('Admin/brand/edit-brand',['brand' => $brand]);
    }
    public function edit(Request $request)
    {
     $where = array('id' => $request->ids);
     $customer = Brand::where($where)->first();
     return Response::json($customer);
    }
    public function Updatebrand(Request $request)
    {
       /*   $request->validate([
            'editbrandid' => 'required',
            'editbrandname' => 'required',
            'brand_image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);  */
        if($request->editbrandname == "")
        {
             
                    return redirect()->route("indexBrand")->with('success','Insert the Brand Name');
        }
        else if($request->brand_image == "")
        {
                $data = array(
                'name'    =>  $request->editbrandname
                );
                $id = DB::table('tbl_brand')->where('id',$request->editbrandid)->update($data);
                if($id > 0)
                {
                   
                    return redirect()->route("indexBrand")->with('success','update Successfully');
                }
                else
                {
                    return redirect()->route("indexBrand")->with('error','failed to update');
                }
        }
        else
        {

              //for brand image
              $file =$request->file('brand_image');
              $ext =$file->getClientOriginalExtension();
              $brand_image =time().'.'.$ext; 
              $file->move('upload/brand',$brand_image);
                $data = array(
                'name'    =>  $request->editbrandname,
                'brand_image' => $brand_image
                );
                $id = DB::table('tbl_brand')->where('id',$request->editbrandid)->update($data);
                if($id > 0)
                {
                    return redirect()->route("indexBrand")->with('success','update Successfully');
                }
                else
                {
                    return redirect()->route("indexBrand")->with('error','failed to update');
                }
        }

/*         echo $request->editbrandid;
         DB::beginTransaction();
        // $adminInfo = Auth::user();
    
        try{
            $brand =Brand::find($request->editbrandid);
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
      
       
        Brand::where('id', $request->editbrandid)->update([
        'name' => $request->name,
        'brand_image'=>$brand_image,

        // 'updated_by' => $adminInfo->username,
        ]); 
            DB::commit();
            return redirect('admin/brand/brandlist');
        }catch(\Exception $e){
            DB::rollback();
            return $e;
        }  */
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
