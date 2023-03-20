@extends('Admin.layout.app')

@section('content')


<h2 class="h3 mb-5">إضافة علامة</h2>
<form action="{{route('storeBrand')}}" method="post" enctype="multipart/form-data">
 @csrf
 <div class="p-3 bg-white primary_shadow b_radius_8 position-relative">
  <input type="text" name="name" id="" placeholder="إسم العلامة" class="search_input product_input mb-4" />
  <label for="drag_file" class="drag_file_wrapper">
   <div class="text-center">
    <img src="images/drag-file-img.svg" class="user-select-none user_drag_none mb-3" alt="" />
    <p class="fs_18_sm">إضغط هنا لتقوم برفع لوغو العلامة</p>
   </div>
   <input type="file" name="brand_image" class="d-none" id="drag_file" />
  </label>
 </div>

 <div class="p-3 bg-white primary_shadow b_radius_8 position-relative">
  <div class="form-group">
   <div class="col-md-12">
    <div class="mt-1 text-center">
     <div class="images-preview-div">

     </div>
    </div>
   </div>
  </div>
 </div>



 <div class="p-3 bg-white primary_shadow b_radius_8 b_radius_t_0 mb-4 submit_btn_wrapper_1">
  <div class="text-start">
   <button type="submit" class="dashboard_btn">نشر</button>
  </div>
 </div>
</form>

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
 } else {
  alert("Your browser doesn't support to File API")
 }
});
</script>
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
@endsection