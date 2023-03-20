@extends('Admin.layout.app')

@section('content')
    <div class="dashboard_main">
        <div class="dashboar_sidebar_backdrop"></div>
        <!-- dashboard_content -->
        <div dir="" class="dashboard_content_wrapper pt-5 px-sm-4 px-3">
            <div class="d-lg-none d-flex justify-content-start mb-4">
                <button class="dashbaord_toggle">
                    <img src="images/dashbaord_mobile_toggle.svg" alt="toggle" />
                </button>
            </div>

            <h2 class="h3 mb-5">تحرير العلامة التجارية</h2>
            <form action="{{route('updateBrand')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="p-3 bg-white primary_shadow b_radius_8 position-relative">
                    <input type="text" name="name"  value="{{$brand->brand_name }}"  placeholder="إسم العلامة"
                        class="search_input product_input mb-4" />
                    <label for="drag_file" class="drag_file_wrapper">
                        <div class="text-center">
                            <img src="images/drag-file-img.svg" class="user-select-none user_drag_none mb-3"
                                alt="" />
                            <p class="fs_18_sm">إضغط هنا لتقوم برفع لوغو العلامة</p>
                        </div>
                        <input type="file" name="brand_image" class="d-none" id="drag_file" />
                    </label>
                </div>
                <div class="p-3 bg-white primary_shadow b_radius_8 b_radius_t_0 mb-4 submit_btn_wrapper_1">
                    <div class="text-start">
                        <button type="submit" class="dashboard_btn">نشر</button>
                        <input type="hidden" name="id" value="{{ $brand->id }}">

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
