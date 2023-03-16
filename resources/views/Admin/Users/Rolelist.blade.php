@extends('admin.layout.app')

@section('content')
<div class="d-flex align-items-center">
                    <h2 class="h3 mb-sm-5 mb-4 txt_dark_blue">الأدوار</h2>
                    <button class="b_radius_8 add_products_btn mb-sm-5 mb-4 me-sm-4 me-auto"><span class="d-sm-inline d-none">إضافة دور جديد</span> <span class="p_icon d-sm-none d-inline"><i class="fa-solid fa-plus"></i></span></button>
                </div>

                <h2 class="h3 mb-4">قائمة الإنتظار</h2>
                <div class="px-2 py-5 primary_shadow bg-white border_radius_5 mb-5">
                    <select class="nice_select_1 mb-4">
                        <option data-display="إختيار إجراء">إختيار إجراء</option>
                        <option value="1">إختيار إجراء 1</option>
                        <option value="2">إختيار إجراء 2</option>
                        <option value="3">إختيار إجراء 3</option>
                        <option value="4">إختيار إجراء 4</option>
                    </select>
    
                    <div class="products_table_wrapper">
                        <table class="table products_table products_table2 fs_13">
                            <thead class="products_table_head">
                                <tr>
                                    <th class="table_w_15 text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input id="thead_checkbox_input" type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_head">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </th>
                                    <th class="table_w_25 text-center">الدور</th>
                                    <th class="table_w_30 text-center">العدد</th>
                                    <th class="table_w_30 text-center">الإجراء</th>
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
                                    <td class="text-center">عنوان الدور</td>
                                    <td class="text-center">25</td>
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
                                <tr class="content_table_row fw-bold">
                                    <td class="text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_content">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="text-center">عنوان الدور</td>
                                    <td class="text-center">25</td>
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
                                <tr class="content_table_row fw-bold">
                                    <td class="text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_content">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="text-center">عنوان الدور</td>
                                    <td class="text-center">25</td>
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
                                <tr class="content_table_row fw-bold">
                                    <td class="text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_content">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="text-center">عنوان الدور</td>
                                    <td class="text-center">25</td>
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
                                <tr class="content_table_row fw-bold">
                                    <td class="text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_content">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="text-center">عنوان الدور</td>
                                    <td class="text-center">25</td>
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
                                <tr class="content_table_row fw-bold">
                                    <td class="text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_content">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="text-center">عنوان الدور</td>
                                    <td class="text-center">25</td>
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
                                <tr class="content_table_row fw-bold">
                                    <td class="text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_content">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="text-center">عنوان الدور</td>
                                    <td class="text-center">25</td>
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
                                <tr class="content_table_row fw-bold">
                                    <td class="text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_content">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="text-center">عنوان الدور</td>
                                    <td class="text-center">25</td>
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
                                <tr class="content_table_row fw-bold">
                                    <td class="text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_content">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="text-center">عنوان الدور</td>
                                    <td class="text-center">25</td>
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
                                <tr class="content_table_row fw-bold">
                                    <td class="text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
                                            <span class="table_checkbox checkbox_content">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="text-center">عنوان الدور</td>
                                    <td class="text-center">25</td>
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