@extends('Admin.layout.app')

@section('content')


<h2 class="h3 mb-5 txt_dark_blue">إعدادات الطلبيات</h2>

<div class="mb-4">
 <select class="nice_select_1" id="selectalldel">
  <option data-display="إختيار إجراء">إختيار إجراء</option>
  <option value="Delete">يمسح</option>
 </select>

</div>
@csrf
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="products_table_wrapper">
 <table class="table products_table products_table2">
  <thead class="products_table_head">
   <tr>
    <th class="table_w_15 px-3">
     <label class="d-flex align-items-center justify-content-center">
      <input id="thead_checkbox_input" type="checkbox" class="opacity-0 visually-hidden table_checkbox_input">
      <span class="table_checkbox checkbox_head">
       <i class="fa-solid fa-check"></i>
      </span>
     </label>
    </th>
    <th class="table_w_15 text-center"> الرقم التسلسلي</th>
    <th class="table_w_15 text-center">الشعار</th>
    <th class="table_w_25 text-center">إسم العلامة</th>
    <th class="table_w_20 text-center">عدد المنتجات</th>
    <!--                             <th class="table_w_20 text-center">Edit</th>
                            <th class="table_w_20 text-center">Delete</th> -->
    <th class="table_w_25 text-center">الخيارات</th>
   </tr>
  </thead>
  <tbody>
   @foreach ($brand as $data)
   <tr class="content_table_row fw-bold" id="sid{{$data->id}}">
    <td class="px-3">
     <label class="d-flex align-items-center justify-content-center">
      <!--   <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input"> -->
      <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input emp_checkbox"
       data-emp-id="<?php echo $data->id; ?>">
      <span class="table_checkbox checkbox_content">
       <i class="fa-solid fa-check"></i>
      </span>
     </label>
    </td>
    <td class="text-center">{{ $data->id }}</td>
    <td class="text-center">
     <img src="{{ asset('upload/brand/' . $data->brand_image) }}" class="table_brand_logo" alt="" />
    </td>
    <td class="text-center">{{ $data->name }}</td>
    <td class="text-center">987.641</td>

    <td class="text-center">
     <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
       Action
      </button>
      <ul class="dropdown-menu">
       <li>
        <!-- href="{{ url('admin/brand/edit/'.$data->id) }}" -->
        <a class="dropdown-item" id="edit-brand" href="javascript:void(0)" data-id="{{ $data->id }}">Edit</a>
       </li>
       <li><a class="dropdown-item" href="{{ url('admin/brand/delete/'.$data->id) }}">Delete</a></li>
      </ul>
     </div>

    </td>
   </tr>
   @endforeach
  </tbody>
 </table>

</div>
<!-- Modal -->
<!-- Button trigger modal -->
<button id="dummyBtn" type="button" class="btn btn-primary d-none" data-bs-toggle="modal"
 data-bs-target="#exampleModal">
 Launch demo modal
</button>
<!--  <script>
        window.addEventListener("load", () => {
            dummyBtn.click();
        });
    </script> -->
<div class="modal fade px-sm-4 px-3" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog modal_dialog popup_xl">
  <div class="modal-content">
   <form>
    <div class="p-3 bg-white primary_shadow b_radius_8 position-relative">
     <h4 class="h5 mb-4">تعديل العلامة</h4>
     <input type="text" name="editbrandname" id="editbrandname" placeholder="تعديل إسم العلامة"
      class="search_input product_input mb-4">
     <label for="drag_file" class="drag_file_wrapper drag_file_wrapper_h180">
      <div class="text-center">
       <img src="images/drag-file-img.svg" class="user-select-none user_drag_none mb-3" alt="">
       <p class="fs_18_sm">إضغط هنا لتحديث لوغو العلامة</p>
      </div>
      <input type="file" name="" class="d-none" id="drag_file">
     <!--  <img src="{{ asset('upload/brand/' . $data->brand_image) }}" class="table_brand_logo" alt="" /> -->
     </label>
     <div class="p-3 bg-white primary_shadow b_radius_8 position-relative">
      <div class="form-group">
       <div class="col-md-12">
        <div class="mt-1 text-center">
         <div class="images-preview-div">

         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="text-start mt-4">
      <button type="submit" class="dashboard_btn dashboard_btn_sm">تحديث</button>
      <button type="button" class="dashboard_btn dashboard_btn_sm dashboard_btn_link d-inline-block me-2"
       data-bs-dismiss="modal">إلغاء</button>
     </div>
    </div>
   </form>
  </div>
 </div>
</div>

<script type="text/javascript">
$(document).ready(function() {

 $('body').on('click', '#edit-brand', function() {
  var customer_id = $(this).data('id');
  // url: "{{ route('brand.delete') }}",
  // alert(customer_id);
  $('#exampleModal').modal('show');
  var _token = $('input[name="_token"]').val();

  $.ajax({
   type: "POST",
   headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   },
   url: "{{ route('brand.getbrandid') }}",
   cache: false,
   data: {
    ids: customer_id
   },
   success: function(response) {
    console.log(response)
    $('#editbrandname').val(response.name);
   }
  });

  /*                 $.get('admin/brand/edit/'+customer_id, function (data) {
                      $('#customerCrudModal').html("Edit customer");
                      $('#btn-update').val("Update");
                      $('#btn-save').prop('disabled',false);
                  
                      $('#cust_id').val(data.id);
                      $('#name').val(data.name);
                      $('#email').val(data.email);
                      $('#address').val(data.address);
                      })  */
 });



 $('.emp_checkbox').on('click', function() {
  //  alert();
 })
 $('#thead_checkbox_input').on('click', function() {
  //  alert();
  $(".emp_checkbox").prop("checked", this.checked);
  // $('input:checkbox').not(this).prop('checked', this.checked);
  $("#select_count").html($("input.emp_checkbox:checked").length + " Selected");
 })
 $('#selectalldel').on('change', function() {
  var data = $('#selectalldel').val();
  if (data == 'Delete') {
   /*  */

   var employee = [];
   $(".emp_checkbox:checked").each(function() {
    employee.push($(this).data('emp-id'));
   });
   if (employee.length <= 0) {
    alert("Please select records.");
   } else {
    WRN_PROFILE_DELETE = "Are you sure you want to delete " + (employee.length > 1 ? "these" : "this") + " row?";
    var checked = confirm(WRN_PROFILE_DELETE);
    if (checked == true) {
     // var selected_values = employee.join(","); 
     var _token = $('input[name="_token"]').val();

     $.ajax({
      type: "POST",
      headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ route('brand.delete') }}",
      cache: false,
      data: {
       ids: employee
      },
      success: function(response) {
       $.each(employee, function(key, val) {
        $("#sid" + val).remove();
       })
      }
     });
    }
   }
   /*  */
  } else {

  }
 })
})
</script>
<script>
$(document).ready(function() {
 if (window.File && window.FileList && window.FileReader) {
  $("#drag_file").on("change", function(e) {
   var files = e.target.files,
    filesLength = files.length;
   for (var i = 0; i < filesLength; i++) {
    var f = files[i]
    var fileReader = new FileReader();
    fileReader.onload = (function(e) {
     var file = e.target;
     $("<span class=\"pip\">" +
      "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
      "<br/><span class=\"remove\">Remove image</span>" +
      "</span>").insertAfter(".images-preview-div");
     $(".remove").click(function() {
      $(this).parent(".pip").remove();
     });

    });
    fileReader.readAsDataURL(f);
   }
   console.log(files);
  });
 } else {
  alert("Your browser doesn't support to File API")
 }
});
</script>
<style>
    input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>
@endsection