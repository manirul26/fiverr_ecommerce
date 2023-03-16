@extends('admin.layout.app')

@section('content')
<div class="px-2 py-3 primary_shadow bg-white border_radius_5 mb-5">
                    <select class="nice_select_1 mb-4">
                        <option data-display="إختيار إجراء">إختيار إجراء</option>
                        <option value="1">إختيار إجراء 1</option>
                        <option value="2">إختيار إجراء 2</option>
                        <option value="3">إختيار إجراء 3</option>
                        <option value="4">إختيار إجراء 4</option>
                    </select>
    
                    <div class="products_table_wrapper">
                        <table class="table products_table products_table2">
                            <thead class="products_table_head">
                                <tr>
                                    <th class="table_w_10 text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input id="thead_checkbox_input" type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_head">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </th>
                                    <th class="table_w_25 text-center">الإسم الكامل</th>
                                    <th class="table_w_25 text-center">البريد الإلكتروني</th>
                                    <th class="table_w_20 text-center">الدور</th>
                                    <th class="table_w_20 text-center">الإجراء</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="content_table_row fw-bold">
                                    <td class="text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_content">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="text-center">الإسم</td>
                                    <td class="text-center">email@email.com</td>
                                    <td class="text-center">عنوان الدور</td>
                                    <td class="text-center">
                                        <select class="nice_select_1 nice_select_2 nice_select_3">
                                            <option data-display="الخيارات">الخيارات</option>
                                            <option value="1">إختيار إجراء 1</option>
                                            <option value="2">إختيار إجراء 2</option>
                                            <option value="3">إختيار إجراء 3</option>
                                            <option value="4">إختيار إجراء 4</option>
                                        </select>
                                    </td>
                                </tr>                                
                                                 
                         
                            </tbody>
                        </table>
                    </div>
                </div>

@endsection