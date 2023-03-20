
@extends('Admin.layout.app')

@section('content')
<div>
                    <h2 class="h3 mb-5 txt_dark_blue">إحصائيات عامة</h2>
                    <div class="row mx_n6">
                        <div class="col-xl-3 col-6 mb-5">
                            <div class="general_statics_grid yellow">
                                <h5 class="fs_18_sm lh-sm">حصيلة الطلبيات اليومية</h5>
                                <p class="fs_18_sm">7.413.18</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-6 mb-5">
                            <div class="general_statics_grid darkblue">
                                <h5 class="fs_18_sm lh-sm">إجمالي الطلبات</h5>
                                <p class="fs_18_sm">7.413.18</p>
                            </div>
                            <div class="general_sg_icon bg_1">
                                <img src="{{ asset('Asset/admin/images/top-arrow.svg') }}" class="user-select-none user_drag_none" alt="">
                            </div>
                        </div>
        
                        <div class="col-12 append_on_mobile d-md-none d-block"></div>
        
                        <div class="col-xl-3 col-6 mb-5">
                            <div class="general_statics_grid purple">
                                <h5 class="fs_18_sm lh-sm">إجمالي المسوقون</h5>
                                <p class="fs_18_sm">7.413.18</p>
                            </div>
                            <div class="general_sg_icon bg_2">
                                <img src="{{ asset('Asset/admin/images/top-arrow.svg') }}" class="user-select-none user_drag_none" alt="">
                            </div>
                        </div>

                        <div class="col-xl-3 col-6 mb-5">
                            <div class="general_statics_grid aqua">
                                <h5 class="fs_18_sm lh-sm">إجمالي الموردون</h5>
                                <p class="fs_18_sm">7.413.18</p>
                            </div>
                            <div class="general_sg_icon bg_3">
                                <img src="{{ asset('Asset/admin/images/down-arrow.svg') }}" class="user-select-none user_drag_none" alt="">
                            </div>
                        </div>

                        <div class="col-12 append_on_desktop">
                            <div class="bg-white b_radius_8 p-3 px-4 mb-5 primary_shadow general_statics_grid5">
                                <div dir="ltr" class="row justify-content-center flex-sm-row flex-column-reverse">
                                    <div class="col-md-4 col-sm-6 d-flex flex-column justify-content-center align-items-center">
                                        <div class="d_progress_bar1 primary_shadow">
                                            <h3 dir="rtl" class="h5 txt_green mt-2">987.654 دج</h3>
                                            <img src="{{ asset('Asset/admin/images/money-bag 1.png') }}" alt="icon">
                                        </div>
                                        <h3 class="h5 text-center mt-3">إيرادات آخر شهر</h3>
                                    </div>
            
                                    <div class="col-md-4 col-sm-6 d-flex flex-column justify-content-center align-items-center mb-md-0 mb-4">
                                        <div class="d_progress_bar primary_shadow">
                                            <div id="d_progress1" class="d_progress"></div>
                                        </div>
                                        <h3 class="h5 text-center mt-3">نسبة التوصيل</h3>
                                    </div>
            
                                    <div class="col-md-4 col-sm-6 d-flex flex-column justify-content-center align-items-center mb-md-0 mb-4">
                                        <div class="d_progress_bar primary_shadow">
                                            <div id="d_progress2" class="d_progress"></div>
                                        </div>
                                        <h3 class="h5 text-center mt-3">نسبة التأكيد</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mb-2">
                    <h2 class="h3 mb-3">إحصائيات ترتيب الشهر</h2>
                    <div class="row mx_n6 justify-content-center">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="b_radius_10 primary_shadow bg-white p-3">
                                <h4 class="fs_18_sm txt_dark_blue mb-3">أكثر المنتجات مبيعًا</h4>
                                <ul class="p-0 list-unstyled text-black">
                                    <li class="lh-lg">1 - إسم المنتج</li>
                                    <li class="lh-lg">2 - إسم المنتج</li>
                                    <li class="lh-lg">3 - إسم المنتج</li>
                                    <li class="lh-lg">4 - إسم المنتج</li>
                                    <li class="lh-lg">5 - إسم المنتج</li>
                                    <li class="lh-lg">6 - إسم المنتج</li>
                                    <li class="lh-lg">7 - إسم المنتج</li>
                                    <li class="lh-lg">8 - إسم المنتج</li>
                                    <li class="lh-lg">9 - إسم المنتج</li>
                                    <li class="lh-lg">10 - إسم المنتج</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="b_radius_10 primary_shadow bg-white p-3">
                                <h4 class="fs_18_sm txt_dark_blue mb-3">أكثر المسوقين بيعًا</h4>
                                <ul class="p-0 list-unstyled text-black">
                                    <li class="lh-lg">1 - إسم المسوق</li>
                                    <li class="lh-lg">2 - إسم المسوق</li>
                                    <li class="lh-lg">3 - إسم المسوق</li>
                                    <li class="lh-lg">4 - إسم المسوق</li>
                                    <li class="lh-lg">5 - إسم المسوق</li>
                                    <li class="lh-lg">6 - إسم المسوق</li>
                                    <li class="lh-lg">7 - إسم المسوق</li>
                                    <li class="lh-lg">8 - إسم المسوق</li>
                                    <li class="lh-lg">9 - إسم المسوق</li>
                                    <li class="lh-lg">10 - إسم المسوق</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="b_radius_10 primary_shadow bg-white p-3">
                                <h4 class="fs_18_sm txt_dark_blue mb-3">أكبر المتاجر من حيث المبيعات</h4>
                                <ul class="p-0 list-unstyled text-black">
                                    <li class="lh-lg">1 - إسم المتجر</li>
                                    <li class="lh-lg">2 - إسم المتجر</li>
                                    <li class="lh-lg">3 - إسم المتجر</li>
                                    <li class="lh-lg">4 - إسم المتجر</li>
                                    <li class="lh-lg">5 - إسم المتجر</li>
                                    <li class="lh-lg">6 - إسم المتجر</li>
                                    <li class="lh-lg">7 - إسم المتجر</li>
                                    <li class="lh-lg">8 - إسم المتجر</li>
                                    <li class="lh-lg">9 - إسم المتجر</li>
                                    <li class="lh-lg">10 - إسم المتجر</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


@endsection