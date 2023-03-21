@extends('Admin.layout.app')

@section('content')
<h2 class="h3 mb-4">إضافة دور جديد</h2>
@foreach($query as $data)
            <form role="form" method="post" action="{{ route('roles.add') }}" class="p-4 primary_shadow bg-white border_radius_5 mb-5">
            @csrf  
                <input type="text" name="rolesname" id="rolesname" placeholder="عنوان الدور"
                    class="search_input product_input input_number mb-5" value="{{$data->rolesname}}" required >

                <h3 class="mb-3 mb-5">الصلاحيات</h3>

                <div class="row mb-5">
                    <div class="col-md-3">




                         <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="البائعون"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted"
                                checked>
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">البائعون</p>
                        </label>
                        <label class="d-flex align-items-center mb-4"> 
                            <input type="checkbox" name="modulename[]" value="الموردون"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">الموردون</p>
                        </label>
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="المنتجات"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">المنتجات</p>
                        </label>
                        <label class="d-flex align-items-center mb-4"> 
                            <input type="checkbox" name="modulename[]" value="إدارة المخزون"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">إدارة المخزون</p>
                        </label>
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="الطلبيات"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">الطلبيات</p>
                        </label> 
                    </div>

                    <div class="col-md-3">
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="الشحنات"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">الشحنات</p>
                        </label>
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="إعدادات التوصيل"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">إعدادات التوصيل</p>
                        </label>
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="الضرائب"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">الضرائب</p>
                        </label>
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="الإعلانات والوسائط"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">الإعلانات والوسائط</p>
                        </label>
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="الإحصائيات والتقارير"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">الإحصائيات والتقارير</p>
                        </label>
                    </div>

                    <div class="col-md-3">
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="العلامات"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">العلامات</p>
                        </label>
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="إعدادات المنتجات"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">إعدادات المنتجات</p>
                        </label>
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="قائمة الإعدادات"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">قائمة الإعدادات</p>
                        </label>
                    </div>
                </div>

                <h3 class="mb-3 mb-4">صلاحيات التسيير</h3>
                <div class="row">
                    <div class="col-md-3">
                        <label class="d-flex align-items-center mb-4">
                            <input type="radio" name="input_radio_1" class="opacity-0 visually-hidden input_radio_1" 
                            id="" value="تعيين مدير مصلحة Appointment of a general manager">
                            <span class="input_radio_wrapper">
                                <span class="input_radio_active"></span>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">تعيين مدير مصلحة</p>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label class="d-flex align-items-center mb-4">
                            <input type="radio" name="input_radio_1" class="opacity-0 visually-hidden input_radio_1" id=""
                            value="تعيين مدير عام">
                            <span class="input_radio_wrapper">
                                <span class="input_radio_active"></span>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">تعيين مدير عام</p>
                        </label>
                    </div>
                    <div class="col-12 px-5">
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted"
                                name="teamstats" value="إحصائيات الفريق">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">إحصائيات الفريق</p>
                        </label>
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted"
                                name="followtheteam" value="متابعة الفريق">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">متابعة الفريق</p>
                        </label>
                    </div>
                </div>


                <div class="submit_btn_wrapper_1 pb-md-5">
                    <div class="text-start">
                        <button class="dashboard_btn">إضافة</button>
                    </div>
                </div>
            </form>
@endforeach
@endsection