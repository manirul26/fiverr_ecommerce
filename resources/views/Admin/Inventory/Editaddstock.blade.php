@extends('Admin.layout.app')
@section('content')
<script src="{{ asset('Asset/admin/js/trumbowyg.min.js') }}" defer></script>
<script src="{{ asset('Asset/admin/js/jquery.nice-select.js') }}"></script>
<link rel="stylesheet" href="{{ asset('Asset/admin/js/ui/trumbowyg.min.css') }}">
<link rel="stylesheet" href="{{ asset('Asset/admin/css/nice-select.css') }}">


<h2 class="h3 mb-4">إضافة مخزون</h2>
@foreach($query as $data)
<form role="form" method="post" 
action="{{route('updateStock')}}"
class="p-4 primary_shadow bg-white border_radius_5">
@csrf
 <select class="nice_select_1 product_input txt_gray txt_start_imp mb-4" name="productid" required>
  <option data-display="{{$data->productname}}">{{$data->productname}}</option>
  @foreach($Product as $productdata)
  <option value="{{$productdata->id}}">{{$productdata->productname}}</option>
  @endforeach
 </select>
 <input type="number" name="stock" id="stock" value="{{$data->stock}}"
 placeholder="الكمية" class="search_input product_input input_number mb-4" required >
 <input type="hidden" name="id" value="{{$data->id}}"/>
 <!-- text-editor -->
 <div>
  <textarea class="textEditor" placeholder="قم بكتابة وصف المنتج" name="stockdescription" 
  required style="width: 100%">{{$data->stockdescription}}</textarea>
 </div>
 <div class="submit_btn_wrapper_1 pb-md-5">
  <div class="text-start">
   <button class="dashboard_btn">إضافة</button>
  </div>
 </div>
</form>
@endforeach

<script>
        $(document).ready(function () {
            $('.nice_select_1').niceSelect();

            // text-editor
            $('.textEditor').trumbowyg({
                btns: [
                    ['fullscreen']
                    ['undo', 'redo'], // Only supported in Blink browsers
                    ['formatting'],
                    ['superscript', 'subscript'],
                    ['link'],
                    ['unorderedList', 'orderedList'],
                    ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ['em', 'strong',],
                ],
            });
        });
    </script>
@endsection