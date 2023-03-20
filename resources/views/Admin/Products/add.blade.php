@extends('Admin.layout.app')

@section('content')
<h2 class="h3 mb-5">إضافة منتج جديد</h2>

<form action="{{route('admin.addproduct')}}" method="post" enctype="multipart/form-data" class="mb-5">
 @csrf
 <div class="p-3 bg-white primary_shadow b_radius_8 mb-4">
  <input type="text" name="productname" id="productname" placeholder="إسم المنتج"
   class="search_input product_input mb-4" required>
  <div class="d-flex align-items-sm-center flex-sm-row flex-column mb-4" dir="ltr">
   <label for="input_permalink" class="me-2 h5 mb-sm-0 mb-2 fs_14_sm">https://store.crom.com/products/</label>
   <input type="text" name="permalink" id="input_permalink" placeholder="PERMALINK" class="search_input product_input" required>
  </div>
  <!-- text-editor -->
  <div class="mb-4">
   <textarea class="textEditor" placeholder="قم بكتابة وصف المنتج" name="des" required></textarea>
  </div>
  <!--  -->
  <div class="row">
   <div class="col-md-6 mb-4">
    <h4 class="mb-3">التصنيفات</h4>
    <select class="nice_select_1 product_input txt_gray" name="categoriesid" required>
     <option data-display="اختر التصنيفات التي يندرج تحتها المنتج">اختر التصنيفات التي يندرج
      تحتها المنتج</option>
     @foreach($category as $datacategory)
     <option value="{{ $datacategory->id }}">{{ $datacategory->name }}</option>
     @endforeach
    </select>
   </div>
   <div class="col-md-6 mb-4">
    <h4 class="mb-3">العلامة التجارية</h4>
    <select class="nice_select_1 product_input txt_gray" name="brandid" required>
     <option data-display="اختر العلامة التجارية">اختر العلامة التجارية</option>
     @foreach($brand as $databrand)
     <option value="{{ $databrand->id }}">{{ $databrand->name }}</option>
     @endforeach
    </select>
   </div>
  </div>

  <div class="d-flex align-items-center mb-3">
   <p class="h5 mb-0">منتجات ذات صلة : </p>
   <input type="checkbox" name="toggle_btn" id="toggle_btn" class="input_checkbox_toggle me-3 c_pointer">
  </div>
 </div>

 <div class="p-3 bg-white primary_shadow b_radius_8 mb-4">
  <label for="drag_file" class="drag_file_wrapper">
   <div class="text-center">
    <img src="{{ asset('Asset/admin/images/drag-file-img.svg') }}" class="user-select-none user_drag_none mb-3" alt="">
    <p class="fs_18_sm">إضغط هنا لتقوم برفع صور المنتج</p>
   </div>
   <input type="file" name="product_image" class="d-none" id="drag_file">
  </label>
 </div>
 <div class="p-3 bg-white primary_shadow b_radius_8">
  <div class="form-group">
   <div class="col-md-12">
    <div class="mt-1 text-center">
     <div class="images-preview-div">

     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="p-3 bg-white primary_shadow b_radius_8">
  <h2 class="h4 mb-3">إعدادات السعر</h2>
  <div class="row mb-3">
   <div class="col-md-4">
    <input type="number" name="sellingprice" id="sellingprice" placeholder="سعر البيع" 
    class="search_input product_input mb-4" required>
   </div>
   <div class="col-md-4">
    <input type="number" name="purchasingprice" id="purchasingprice" placeholder="سعر الشراء" 
    class="search_input product_input mb-4" required>
   </div>
   <div class="col-md-4">
    <input type="number" name="previousprice" id="previousprice" placeholder="السعر السابق" 
    class="search_input product_input mb-4" required>
   </div>
  </div>

  <h2 class="h4 mb-3">المتغيرات</h2>
  <div class="d-flex align-items-center mb-4">
   <p class="h5 mb-0">تفعيل المتغيرات : </p>
   <input type="checkbox" name="toggle_btn" id="toggle_btn" class="input_checkbox_toggle me-3" checked>
  </div>
  <div class="row mb-3">
   <div class="col-md-4">
    <input type="text" name="variables_size" id="variables_size" placeholder="الحجم، المادة أو اللون" 
    class="search_input product_input mb-4">
   </div>
   <div class="col-md-4">
    <input type="text" name="variables_type" id="variables_type" placeholder="النوع" 
    class="search_input product_input mb-4" required>
   </div>
   <div class="col-md-4">
    <input type="number" name="variables_value" id="variables_value" placeholder="القيمة" 
    class="search_input product_input mb-4" required>
   </div>
  </div>

  <h2 class="h4 mb-3">تحسين محركات البحث</h2>
  <div class="row mb-2">
   <div class="col-md-6">
    <input type="text" name="seo_address" id="seo_address" placeholder="seo_addressالعنوان" 
    class="search_input product_input mb-4" >
   </div>
   <div class="col-md-6">
    <input type="text" name="seo_slug" id="seo_slug" placeholder="Slug" class="search_input product_input mb-4">
   </div>
   <div class="col-md-12 mb-4">
    <textarea name="seo_des" id="seo_des" cols="" rows="7" class="search_input product_input h-auto" placeholder="الوصف" ></textarea>
    <div class="text-start">
     <p class="mb-0">160 كلمة / 0</p>
    </div>
   </div>
   <div class="col-12 mb-4">
    <label for="drag_file" class="drag_file_wrapper">
     <div class="text-center">
      <img src="{{ asset('Asset/admin/images/drag-file-img.svg') }}" class="user-select-none user_drag_none mb-3" alt="">
      <p class="fs_18_sm">إضغط هنا لتقوم برفع صورة المعاينة التي تظهر على محركات البحث</p>
     </div>
     <!--  <input type="file" name="seo_image" class="d-none drag_filetwo" id="drag_filetwo" />  -->
     <input type="file" id="seo_image" name="seo_image"> 
    </label>
   </div>
   <div class="col-12 mb-4">
  <div class="form-group">
   <div class="col-md-12">
    <div class="mt-1 text-center">
     <div class="images-preview-divtwo">
    <!--  <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
    alt="preview image" style="max-height: 250px;"> -->
     </div>
    </div>
   </div>
  </div>
 </div>

   <div class="text-start">
    <button class="dashboard_btn">نشر</button>
   </div>
  </div>
 </div>
</form>
<style>
    input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.pipname
{
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>

<script>
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) { 

  $("#drag_file").on("change", function(e) {
   var files = e.target.files,
    filesLength = files.length;
   for (var i = 0; i < filesLength; i++) {
    var f = files[i]
    var fileReader = new FileReader();
    fileReader.onload = (function(e) {
     var file = e.target;
     $("<span class=\"pip\">" +
      "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
      "<br/><span class=\"remove\">Remove image</span>" +
      "</span>").insertAfter(".images-preview-div");
     $(".remove").click(function() {
      $(this).parent(".pip").remove();
     });

    });
    fileReader.readAsDataURL(f);
   }
   console.log(files);
  });

  $("#seo_image").on("change", function(e) {
    //alert('');
   var files = e.target.files,
    filesLength = files.length;
   for (var i = 0; i < filesLength; i++) {
    var f = files[i]
    var fileReader = new FileReader();
    fileReader.onload = (function(e) {
     var file = e.target;
     $("<span class=\"pipname\">" +
      "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
      "<br/><span class=\"remove\">Remove image</span>" +
      "</span>").insertAfter(".images-preview-divtwo");
     $(".remove").click(function() {
      $(this).parent(".pipname").remove();
     });

    });
    fileReader.readAsDataURL(f);
   }
   console.log(files);
  });

 } else {
  alert("Your browser doesn't support to File API")
 } 
});
</script> 

<!--  <script type="text/javascript">
$(document).ready(function (e) {
  alert()
    $('#drag_filetwo').change(function(){
      alert()
    let reader = new FileReader();
    reader.onload = (e) => { 
    $('#preview-image-before-upload').attr('src', e.target.result); 
    }
    reader.readAsDataURL(this.files[0]); 
    });
})
</script>  -->

@endsection