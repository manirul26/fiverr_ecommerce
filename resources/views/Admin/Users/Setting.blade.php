@extends('admin.layout.app')

@section('content')
<h2 class="h3 mb-4">الإعدادات</h2>
            <form class="p-4 primary_shadow bg-white border_radius_5 mb-5">
                <div class="text-center">
                    <div class="mb-4 mt-3">
                        <img src="images/man-image-profile.png" class="settings_profile_img primary_shadow" alt="">
                    </div>
                    <label for="profile_input_file" class="mb-3 c_pointer">
                        <input type="file" name="profile_input_file" class="opacity-0 visually-hidden" id="profile_input_file">
                        <p class="dashboard_btn dashboard_btn_link">رفع صورة جديدة</p>
                    </label>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="" id="" placeholder="admin_99"
                        class="search_input product_input input_number mb-5">    
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="" id="" placeholder="contact@imedboumaraf.com"
                        class="search_input product_input input_number mb-5">    
                    </div>
                </div>
                <h2 class="h3 mb-5">تغيير كلمة السر</h2>

                <div class="row align-items-center mb-4">
                    <div class="col-md-3">
                        <label for="current_pwd" class="fw-semibold fs_18_sm settings_input_label">كلمة المرور الحالية </label>
                    </div>
                    <div class="col-md-9">
                        <input type="password" name="" id="current_pwd" placeholder="كلمة المرور الحالية"
                        class="search_input product_input input_number settings_input_pwd">
                    </div>
                </div>
                <div class="row align-items-center mb-4">
                    <div class="col-md-3">
                        <label for="current_pwd" class="fw-semibold fs_18_sm settings_input_label">كلمة المرور الجديدة </label>
                    </div>
                    <div class="col-md-9">
                        <input type="password" name="" id="current_pwd" placeholder="كلمة المرور الجديدة"
                        class="search_input product_input input_number settings_input_pwd">
                    </div>
                </div>
                <div class="row align-items-center mb-4">
                    <div class="col-md-3">
                        <label for="current_pwd" class="fw-semibold fs_18_sm settings_input_label">تأكيد كلمة المرور </label>
                    </div>
                    <div class="col-md-9">
                        <input type="password" name="" id="current_pwd" placeholder="تأكيد كلمة المرور"
                        class="search_input product_input input_number settings_input_pwd">
                    </div>
                </div>

                <div class="submit_btn_wrapper_1 justify-content-center pb-md-5">
                    <div class="text-center">
                        <button class="dashboard_btn">حفظ</button>
                    </div>
                </div>
            </form>


@endsection