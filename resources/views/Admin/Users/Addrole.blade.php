@extends('Admin.layout.app')

@section('content')
<h2 class="h3 mb-4">إضافة دور جديد</h2>

            <form role="form" method="post" action="{{ route('roles.add') }}" 
            class="p-4 primary_shadow bg-white border_radius_5 mb-5">
            @csrf  
                <input type="text" name="rolesname" id="rolesname" placeholder="عنوان الدور"
                    class="search_input product_input input_number mb-5" required >

                <h3 class="mb-3 mb-5">الصلاحيات</h3>

                <div class="row mb-5">


                @foreach($allmodule as $modulename)
                    <div class="col-md-3">
                        <label class="d-flex align-items-center mb-4">
                            <input type="checkbox" name="modulename[]" value="{{$modulename->id}}"
                                class="opacity-0 visually-hidden table_checkbox_input table_checkbox_highlighted">
                            <span class="table_checkbox checkbox_content">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">{{$modulename->name}}</p>
                        </label>

                    </div>
                @endforeach

                </div>

                <h3 class="mb-3 mb-4">صلاحيات التسيير</h3>
                <div class="row">
                    <div class="col-md-3">
                        <label class="d-flex align-items-center mb-4">
                            <input type="radio" name="input_radio_1" class="opacity-0 visually-hidden input_radio_1" 
                            id="" value="Appointment of a department manager">
                            <span class="input_radio_wrapper">
                                <span class="input_radio_active"></span>
                            </span>
                            <p class="mb-0 table_checkbox_highlighted me-2">تعيين مدير مصلحة</p>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label class="d-flex align-items-center mb-4">
                            <input type="radio" name="input_radio_1" 
                            class="opacity-0 visually-hidden input_radio_1" id=""
                            value="Appointment of a general manager">
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

@endsection