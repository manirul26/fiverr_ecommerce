@extends('Admin.layout.app')

@section('content')
<div class="d-flex align-items-center">
                    <h2 class="h3 mb-sm-5 mb-4 txt_dark_blue">المخزن</h2>
                    <a href="{{ route('admin.addstock') }}" class="b_radius_8 add_products_btn mb-sm-5 mb-4 me-sm-4 me-auto">
                     <span class="d-sm-inline d-none">إضافة مخزون</span> 
                     <span class="p_icon d-sm-none d-inline"><i class="fa-solid fa-plus"></i></span>
                    </a>
                </div>

                <div class="px-2 py-3 primary_shadow bg-white border_radius_5 mb-5">
                    <form class="search_bar mb-4">
                        <input type="text" name="" id="" placeholder="بحث عن أسماء منتجات" class="search_input product_input">
                        <button><img src="images/search-submit-icon.svg" class="user-select-none user_drag_none"
                                alt=""></button>
                    </form>
    
                    <div class="products_table_wrapper">
                        <table class="table products_table">
                            <thead class="products_table_head">
                                <tr>
                                    <th class="table_w_10 text-center">الرمز</th>
                                    <th class="table_w_10 text-center">الإسم</th>
                                    <th class="table_w_15 text-center">الخيارات</th>
                                    <th class="table_w_10 text-center">العلامة</th>
                                    <th class="table_w_10 text-center">المورد</th>
                                    <th class="table_w_15 text-center">ملاحظات</th>
                                    <th class="table_w_10 text-center">الكمية</th>
                                    <th class="table_w_10 text-center">التاريخ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($query as $stockdata)
                                <tr class="content_table_row fw-bold">
                                    <td class="text-center">{{ $stockdata->id }}x97</td>
                                    <td class="text-center">الإسم {{ $stockdata->id }}</td>
                                    <td class="text-center">
                                    <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ url('Addroleedit/'.$stockdata->id.'/edit') }}">Edit</a></li>
                                    </ul>
                                    </div>
                                    </td>
                                    <td class="text-center">
                                    {{ $stockdata->brandid }}

                                    </td>
                                    <td class="text-center">Supplier</td>
                                    <td class="text-center">/</td>
                                    <td class="text-center">{{ $stockdata->stock }} </td>
                                    <td class="text-center">{{ $stockdata->date }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection