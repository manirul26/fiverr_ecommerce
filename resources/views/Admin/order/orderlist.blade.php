@extends('admin.layout.app')

@section('content')
<h2 class="h3 mb-5 txt_dark_blue">إعدادات الطلبيات</h2>

<form class="search_bar mb-4">
 <input type="text" name="" id="" placeholder="بحث" class="search_input">
 <button><img src="images/search-submit-icon.svg" class="user-select-none user_drag_none" alt=""></button>
</form>

<div class="mb-4">
 <select class="nice_select_1">
  <option data-display="إختيار إجراء">إختيار إجراء</option>
  <option value="1">إختيار إجراء 1</option>
  <option value="2">إختيار إجراء 2</option>
  <option value="3">إختيار إجراء 3</option>
  <option value="4">إختيار إجراء 4</option>
 </select>
</div>

<div class="products_table_wrapper">
 <table class="table products_table">
  <thead class="products_table_head">
   <tr>
    <th class="table_w_6 px-3">
     <label class="d-flex align-items-center justify-content-center">
      <input id="thead_checkbox_input" type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
      <span class="table_checkbox checkbox_head">
       <i class="fa-solid fa-check"></i>
      </span>
     </label>
    </th>
    <th class="table_w_13 text-center">عدد المنتجات</th>
    <th class="table_w_13 text-center">رقم التتبع</th>
    <th class="table_w_13 text-center">الإسم الكامل</th>
    <th class="table_w_13 text-center">رقم الهاتف</th>
    <th class="table_w_13 text-center">التاريخ</th>
    <th class="table_w_15 text-center">الحالة</th>
    <th class="table_w_13 text-center">الخيارات</th>
   </tr>
  </thead>
  <tbody>
   <tr class="content_table_row fw-bold">
    <td class="px-3">
     <label class="d-flex align-items-center justify-content-center">
      <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
      <span class="table_checkbox checkbox_content">
       <i class="fa-solid fa-check"></i>
      </span>
     </label>
    </td>
    <td class="text-center">25</td>
    <td class="text-center">Yall-9420520</td>
    <td class="text-center">عماد بومعراف</td>
    <td class="text-center">0559000000</td>
    <td class="text-center">1/9/2023</td>
    <td class="text-center">قيد التأكيد</td>
    <td class="text-center">
     <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
       Action
      </button>
      <ul class="dropdown-menu">
       <li><a class="dropdown-item" href="">Order Details</a></li>
      </ul>
     </div>
    </td>
   </tr>


  </tbody>
 </table>
</div>
@endsection