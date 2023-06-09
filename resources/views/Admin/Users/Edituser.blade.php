@extends('Admin.layout.app')

@section('content')
<h2 class="h3 mb-4">إضافة مستخدم جديد</h2>
@foreach($query as $data)
            <form role="form" method="post" action="{{route('Edituser', $data->id)}}"
            class="p-4 primary_shadow bg-white border_radius_5 mb-5">
            @csrf  
            <div class="row">
                    <div class="col-md-6 mb-4">
                        <input type="text" name="name" id="name" placeholder="الإسم" 
                        class="search_input product_input input_number"  
                        value="{{ $data->name }}" required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <input type="number" name="phoneno" id="phoneno" value="{{ $data->phoneno }}"
                        placeholder="رقم الهاتف" class="search_input product_input input_number" required>  
                    </div>
                    <div class="col-md-12 mb-4">
                        <input type="email" name="email" id="email" value="{{ $data->email }}" placeholder="البريد الإلكتروني" class="search_input product_input input_number" required>        
                    </div>
                   <!--  <div class="col-md-6 mb-4">
                        <input type="password" name="password" id="password" placeholder="كلمة السر" class="search_input product_input input_number">        
                    </div>
                    <div class="col-md-6 mb-4">
                        <input type="password" name="re-password" id="" placeholder="تأكيد كلمة السر" class="search_input product_input input_number">        
                    </div> -->
                    <div class="col-md-12 mb-4">
                        <select class="nice_select_1 product_input txt_gray txt_start_imp" name="roleid" required>
                        <option value="{{$data->roleid}}">{{$data->rolesname}}</option>
                        @foreach($roles as $row)
                      <!--   <option data-display="إختيار الدور">إختيار الدور</option> -->
                            <option value="{{$row->id}}">{{$row->rolesname}}</option>
                     
                        @endforeach
                        </select>
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