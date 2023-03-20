@extends('Admin.layout.app')

@section('content')

<div class="d-flex align-items-center">
                    <h2 class="h3 mb-sm-5 mb-4 txt_dark_blue">المنتجات</h2>
                    <a href="{{ route('admin.addproductpage') }}" class="b_radius_8 add_products_btn mb-sm-5 mb-4 me-sm-4 me-auto">
                     <span class="d-sm-inline d-none">إضافة منتج جديد</span> 
                     <span class="p_icon d-sm-none d-inline"><i class="fa-solid fa-plus"></i></span>
                    </a>
                </div>

                <div class="parent_product_fillter mb-4">
                    <div class="wrap_product_fillter">
                        <div class="product_fillter2">
                            <button data-toggle="datepicker">
                                <span>تاريخ الإضافة</span>
                            </button>
                            <div data-toggle="datepicker"></div>
                        </div>
                        <select class="product_fillter">
                            <option  data-display="مبيعًا">مبيعًا</option>
                            <option value="1">19</option>
                            <option value="2">190</option>
                            <option value="3">120</option>
                            <option value="4">220</option>
                        </select>
                        <select class="product_fillter">
                            <option  data-display="الكمية">الكمية</option>
                            <option value="1">19</option>
                            <option value="2">190</option>
                            <option value="3">120</option>
                            <option value="4">220</option>
                        </select>
                        <select class="product_fillter">
                            <option  data-display="السعر">السعر</option>
                            <option value="1">1900 دج</option>
                            <option value="2">190 دج</option>
                            <option value="3">1200 دج</option>
                            <option value="4">2200 دج</option>
                        </select>
                        
                    </div>

                    <button class="btn_open_p_fillter border-0 shadow-none bg-transparent d-sm-none d-block">
                        <img class="ms-2" src="images/product_fillter_icon.png" alt="icon">
                        <span>صنف حسب</span>
                    </button>
                </div>

                <div class="d_product_grids pb-5">

                   @foreach($Product as $data)
                    <div class="d_product_box primary_shadow b_radius_8 bg-white pb-3">
                        <div class="wrap_product_grid_img">
                            <p class="d_product_badge">جديد</p>
                            <img class="d_product_img" src="{{ asset('upload/product/' . $data->productimage) }}" alt="{{ $data->productname}}"  /> 

                        </div>
                        <div class="py-sm-3 py-2 px-2 pb-0">
                            <h3 class="h5 fw-bold">{{ $data->productname}}</h3>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0 fs_18_sm fw-semibold ms-2">السعر :</p>
                                <p class="mb-0 fw-semibold">{{ $data->sellingprice}} </p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0 fs_18_sm fw-semibold ms-2">
                                    سعر البيع المقترح :</p>
                                <p class="mb-0 fw-bold txt_green fs_18_sm"> {{ $data->purchasingprice}}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <p class="mb-0 fs_18_sm fw-semibold ms-2">
                                     التقييم : </p>
                                <div class="txt_gold">
                                    <i class="fs_14 me-1 fa-solid fa-star"></i>
                                    <i class="fs_14 me-1 fa-solid fa-star"></i>
                                    <i class="fs_14 me-1 fa-solid fa-star"></i>
                                    <i class="fs_14 me-1 fa-regular fa-star"></i>
                                    <i class="fs_14 me-1 fa-regular fa-star"></i>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="d-block d_product_btn">عرض المنتج</a>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>

@endsection