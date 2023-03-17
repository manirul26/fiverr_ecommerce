@extends('admin.layout.app')

@section('content')

<div class="d-flex align-items-center">
                    <h2 class="h3 mb-sm-5 mb-4 txt_dark_blue">الأدوار</h2>
                    <a href="{{ route('Addrole') }}" class="b_radius_8 add_products_btn mb-sm-5 mb-4 me-sm-4 me-auto"><span class="d-sm-inline d-none">إضافة دور جديد</span> <span class="p_icon d-sm-none d-inline"><i class="fa-solid fa-plus"></i></span></a>
                </div>
<!-- @if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif -->

@csrf
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<h2 class="h3 mb-4">قائمة الإنتظار</h2>
                <div class="px-2 py-5 primary_shadow bg-white border_radius_5 mb-5">
               
                   <select class="nice_select_1 mb-4 " id="selectalldel">
                        <option data-display="إختيار إجراء">إختيار إجراء</option>
                        <option value="Delete">يمسح</option>
                      
                    </select> 
                    <span class="rows_selected" id="select_count" style="margin-right: 10px"></span>

    
                    <div class="products_table_wrapper">
                        <table class="table products_table products_table2 fs_13">
                            <thead class="products_table_head">
                                <tr>
                                    <th class="table_w_15 text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                            <input id="thead_checkbox_input" type="checkbox" 
                                            class="opacity-0 visually-hidden table_checkbox_input">


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
                            @foreach($query as $data)
                                <tr class="content_table_row fw-bold" id="<?php echo $data->id; ?>">
                                    <td class="text-center">
                                        <label class="d-flex align-items-center justify-content-center">
                                      <!--       <input type="checkbox" class="opacity-0 visually-hidden table_checkbox_input"> -->
                                            <input type="checkbox" 
                                            class="opacity-0 visually-hidden table_checkbox_input emp_checkbox" 
                                            data-emp-id="<?php echo $data->id; ?>">
                                            <span class="table_checkbox checkbox_content">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="text-center"> {{$data->rolesname}}</td>
                                    <td class="text-center">{{$data->id}} </td>
                                    <td class="text-center">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="{{ url('Addroleedit/'.$data->id.'/edit') }}">Edit</a></li>
  </ul>
</div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>


<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
<script type="text/javascript">

    $(document).ready(function() {
        $('.emp_checkbox').on('click', function() {
                alert();
        })
        $('#thead_checkbox_input').on('click', function() {
            alert();
            $(".emp_checkbox").prop("checked", this.checked);
            $("#select_count").html($("input.emp_checkbox:checked").length+" Selected");
        })
        $('#selectalldel').on('change', function() {
              var data = $('#selectalldel').val();
              alert(data)
              if(data == 'Delete')
              {
/*  */

var employee = [];  
	$(".emp_checkbox:checked").each(function() {  
		employee.push($(this).data('emp-id'));
	});	
	if(employee.length <=0)  {  
		alert("Please select records.");  
	}  
	else { 	
		WRN_PROFILE_DELETE = "Are you sure you want to delete "+(employee.length>1?"these":"this")+" row?";  
		var checked = confirm(WRN_PROFILE_DELETE);  
		if(checked == true) {			
			var selected_values = employee.join(","); 
            var _token = $('input[name="_token"]').val();

			$.ajax({ 
				type: "POST",  
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, 
                url: "{{ route('roles.delete') }}",
				cache:false,  
				data: 'emp_id='+selected_values,  
				success: function(response) {	
                   // alert(response);
                   location.reload();
					// remove deleted employee rows
					/* var emp_ids = response.split(",");
					for (var i=0; i < emp_ids.length; i++ ) {						
						$("#"+emp_ids[i]).remove();
					}		 */							
				}   
			});				
		}  
	}  
/*  */
              }
              else
              {

              }
        })
    })

 </script>

@endsection                