@extends('Admin.layout.app')
@section('content')
<h2 class="h3 mb-4">الإعدادات</h2>
@foreach($query as $data)
<form class="p-4 primary_shadow bg-white border_radius_5 mb-5" 
method="post" action="{{route('updateProfile')}}" enctype="multipart/form-data">
 @csrf
 <div class="text-center">
  <div class="mb-4 mt-3">
  <input type="file" name="profile_input_file" accept="image/*" class="d-none" id="profile_input_file" 
   onchange="loadFile(event)">
   <?php 
   if($data->image == '')
   {
    ?>
    <img src="{{ asset('Asset/admin/images/man-image-profile.png') }}" 
   class="settings_profile_img primary_shadow" id="profileimagepreview" alt="">
   <?php 
   }
   else
   {
    ?>
   <img src="{{ asset('upload/profile/' . $data->image) }}" alt="{{ $data->name}}" 
    class="settings_profile_img primary_shadow" id="profileimagepreview" >
  <?php 
  }
   ?>
 
</div>
  <label for="profile_input_file" class="mb-3 c_pointer">
  <!--  <input type="file" name="profile_input_file" class="opacity-0 visually-hidden" id="profile_input_file"
   onchange="loadFile(event)"/> -->
  
   <p class="dashboard_btn dashboard_btn_link">رفع صورة جديدة</p>
  </label>

 </div>

 <div class="row">
  <div class="col-md-6">
   <input type="text" name="name" id="name" placeholder="admin_99" value="{{$data->name}}"
    class="search_input product_input input_number mb-5">
  </div>
  <div class="col-md-6">
   <input type="email" name="email" id="email" placeholder="contact@imedboumaraf.com" value="{{$data->email}}"
    class="search_input product_input input_number mb-5" ReadOnly >
  </div>
 </div>
 <div class="submit_btn_wrapper_1 justify-content-center pb-md-5">
  <div class="text-center">
   <button class="dashboard_btn">حفظ</button>
  </div>
 </div>
</form>
 <form class="p-4 primary_shadow bg-white border_radius_5 mb-5" method="post" action="{{route('updatePassword')}}">
 @csrf
 <h2 class="h3 mb-5">تغيير كلمة السر</h2>

 <div class="row align-items-center mb-4">
  <div class="col-md-3">
   <label for="current_pwd" class="fw-semibold fs_18_sm settings_input_label">كلمة المرور الحالية </label>
  </div>
  <div class="col-md-9">
   <input type="password" name="current_password" id="current_pwd" placeholder="كلمة المرور الحالية"
    class="search_input product_input input_number settings_input_pwd" required >
  </div>
 </div>
 <div class="row align-items-center mb-4">
  <div class="col-md-3">
   <label for="current_pwd" class="fw-semibold fs_18_sm settings_input_label">كلمة المرور الجديدة </label>
  </div>
  <div class="col-md-9">
   <input type="password" name="new_password" id="new_password" placeholder="كلمة المرور الجديدة"
    class="search_input product_input input_number settings_input_pwd" required >
  </div>
 </div>
 <div class="row align-items-center mb-4">
  <div class="col-md-3">
   <label for="current_pwd" class="fw-semibold fs_18_sm settings_input_label">تأكيد كلمة المرور </label>
  </div>
  <div class="col-md-9">
   <input type="password" name="new_confirm_password" id="new_confirm_password" placeholder="تأكيد كلمة المرور"
    class="search_input product_input input_number settings_input_pwd" required >
  </div>
 </div>

 <div class="submit_btn_wrapper_1 justify-content-center pb-md-5">
  <div class="text-center">
   <button class="dashboard_btn">حفظ</button>
  </div>
 </div>
</form>
@endforeach

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
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('profileimagepreview');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
@endsection