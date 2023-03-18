@php
$segment1 = Request::segment(1);
$pages = array('dashboard', 'CreateUser', 'Settingpage','Userlist');
@endphp
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <!-- Swiper CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
 <!-- Font Awesome CDN -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <!-- Main CSS -->
 <link href="{{ asset('Asset/admin/css/dashboard.css') }}" rel="stylesheet">
 <link href="{{ asset('Asset/admin/css/dashboard-responsive.css') }}" rel="stylesheet">
 <meta name="csrf-token" content="{{ csrf_token() }}" />

 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 -->


 <!-- trost -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
alpha/css/bootstrap.css" rel="stylesheet">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body>


 <div class="dashboard_main">
  <div class="dashboar_sidebar_backdrop"></div>
  <!-- dashboard_content -->
  <div dir="" class="dashboard_content_wrapper pt-5 px-sm-4 px-3">
   <div class="d-lg-none d-flex justify-content-start mb-4">
    <button class="dashbaord_toggle"><img src="{{ asset('Asset/admin/images/dashbaord_mobile_toggle.svg') }}"
      alt="toggle"></button>
   </div>
   @if ($message = Session::get('success'))
   <div class="alert alert-success" role="alert">
    {{ $message }}
   </div>
   @endif


   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif


   @if ($message = Session::get('warning'))
   <div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif


   @if ($message = Session::get('info'))
   <div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif


   @if ($errors->any())
   <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Please check the form below for errors
   </div>
   @endif
   @yield('content')

  </div>

  <!-- dashbaord_sidebar -->
  <div class="dashboard_sidebar">
   <div class="top d-flex flex-row-reverse justify-content-between pt-5 p-4">
    <button class="dashbaord_toggle d-lg-flex d-none"><img src="{{ asset('Asset/admin/images/dashboard_toggle.svg') }}"
      alt="toggle"></button>
    <a class="dashboard_logo" href="#"><img src="{{ asset('Asset/admin/images/dashboard_white_logo.svg') }}"
      alt="site logo"></a>
   </div>

   <!-- dashboard-ul -->
   <ul class="dashboard_sidebar_ul">
    <li>
     <a href="{{ route('admin.dashboard') }}" class="@if($segment1=='dashboard') active @endif">
      <span>لوحة التحكم </span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6185)">
        <path
         d="M16.6667 16.6666C16.6667 16.8877 16.5789 17.0996 16.4226 17.2559C16.2663 17.4122 16.0544 17.5 15.8333 17.5H4.16668C3.94566 17.5 3.7337 17.4122 3.57742 17.2559C3.42114 17.0996 3.33334 16.8877 3.33334 16.6666V9.16664H0.833344L9.43918 1.34331C9.5926 1.20371 9.79258 1.12634 10 1.12634C10.2074 1.12634 10.4074 1.20371 10.5608 1.34331L19.1667 9.16664H16.6667V16.6666ZM9.16668 10.8333V15.8333H10.8333V10.8333H9.16668Z"
         fill="" />
       </g>
       <defs>
        <clipPath id="clip0_9_6185">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
     </a>
    </li>
    <li>
     <a href="#">
      <span>الإحصائيات</span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6186)">
        <path
         d="M2.5 9.99996H5.83333V17.5H2.5V9.99996ZM14.1667 6.66663H17.5V17.5H14.1667V6.66663ZM8.33333 1.66663H11.6667V17.5H8.33333V1.66663Z"
         fill="#" />
       </g>
       <defs>
        <clipPath id="clip0_9_6186">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
     </a>
    </li>
    <li class="sub-menu">
     <a href="#">
      <span>الطلبيات Order </span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6187)">
        <path
         d="M16.7358 12.6666L17.7375 13.2675C17.7993 13.3045 17.8504 13.3569 17.886 13.4195C17.9215 13.4822 17.9401 13.553 17.9401 13.625C17.9401 13.697 17.9215 13.7678 17.886 13.8304C17.8504 13.8931 17.7993 13.9455 17.7375 13.9825L10.4292 18.3675C10.2995 18.4453 10.1512 18.4865 9.99999 18.4865C9.84879 18.4865 9.70043 18.4453 9.57082 18.3675L2.26249 13.9825C2.2007 13.9455 2.14955 13.8931 2.11403 13.8304C2.07851 13.7678 2.05984 13.697 2.05984 13.625C2.05984 13.553 2.07851 13.4822 2.11403 13.4195C2.14955 13.3569 2.2007 13.3045 2.26249 13.2675L3.26416 12.6666L9.99999 16.7083L16.7358 12.6666V12.6666ZM16.7358 8.74998L17.7375 9.35081C17.7993 9.3878 17.8504 9.44018 17.886 9.50284C17.9215 9.5655 17.9401 9.63629 17.9401 9.70831C17.9401 9.78033 17.9215 9.85112 17.886 9.91378C17.8504 9.97644 17.7993 10.0288 17.7375 10.0658L9.99999 14.7083L2.26249 10.0658C2.2007 10.0288 2.14955 9.97644 2.11403 9.91378C2.07851 9.85112 2.05984 9.78033 2.05984 9.70831C2.05984 9.63629 2.07851 9.5655 2.11403 9.50284C2.14955 9.44018 2.2007 9.3878 2.26249 9.35081L3.26416 8.74998L9.99999 12.7916L16.7358 8.74998ZM10.4283 1.09081L17.7375 5.47581C17.7993 5.5128 17.8504 5.56518 17.886 5.62784C17.9215 5.6905 17.9401 5.76129 17.9401 5.83331C17.9401 5.90533 17.9215 5.97612 17.886 6.03878C17.8504 6.10144 17.7993 6.15382 17.7375 6.19081L9.99999 10.8333L2.26249 6.19081C2.2007 6.15382 2.14955 6.10144 2.11403 6.03878C2.07851 5.97612 2.05984 5.90533 2.05984 5.83331C2.05984 5.76129 2.07851 5.6905 2.11403 5.62784C2.14955 5.56518 2.2007 5.5128 2.26249 5.47581L9.57082 1.09081C9.70043 1.01294 9.84879 0.971802 9.99999 0.971802C10.1512 0.971802 10.2995 1.01294 10.4292 1.09081H10.4283ZM9.99999 2.77664L4.90582 5.83331L9.99999 8.88998L15.0942 5.83331L9.99999 2.77664Z"
         fill="" />
       </g>
       <defs>
        <clipPath id="clip0_9_6187">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
      <ul>
       <li><a class="dropdown-item" href="{{route('admin.orderlist')}}">في مرحلة التأكيد in the confirmation stage</a></li>
       <li><a class="dropdown-item" href="{{route('admin.orderlist')}}">في مرحلة التحضير in the preparation stage</a></li>
       <li><a class="dropdown-item" href="{{route('admin.orderlist')}}">في مرحلة الإرسال in the transmission phase</a></li>
       <li><a class="dropdown-item" href="{{route('admin.orderlist')}}">في مرحلة التوصيل at the delivery stage</a></li>
       <li><a class="dropdown-item" href="{{route('admin.orderlist')}}">تم التوصيل Delivered</a></li>
       <li><a class="dropdown-item" href="{{route('admin.orderlist')}}">قيد الإرجاع being returned </a></li>
       <li><a class="dropdown-item" href="{{route('admin.orderlist')}}">طلبيات مرجعة Return orders</a></li>
      </ul>
     </a>
    </li>
    <li class="sub-menu">
     <a href="#">
      <span>Product المنتجات</span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6188)">
        <path
         d="M17.5 10.8333V16.6667C17.5 16.8877 17.4122 17.0996 17.2559 17.2559C17.0996 17.4122 16.8877 17.5 16.6667 17.5H3.33332C3.11231 17.5 2.90035 17.4122 2.74407 17.2559C2.58779 17.0996 2.49999 16.8877 2.49999 16.6667V10.8333H1.66666V9.16667L2.49999 5H17.5L18.3333 9.16667V10.8333H17.5ZM4.16666 10.8333V15.8333H15.8333V10.8333H4.16666ZM3.36666 9.16667H16.6333L16.1333 6.66667H3.86666L3.36666 9.16667ZM4.99999 11.6667H11.6667V14.1667H4.99999V11.6667ZM2.49999 2.5H17.5V4.16667H2.49999V2.5Z"
         fill="" />
       </g>
       <defs>
        <clipPath id="clip0_9_6188">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
      <ul>
       <li><a class="dropdown-item" href="{{ route('admin.productlist') }}">إضافة منتج جديد Add New Product</a></li>
       <li><a class="dropdown-item" href="{{ route('indexBrand') }}">قائمة العلامات Tag List</a></li>
       <li><a class="dropdown-item" href="{{ route('indexAddBrand') }}">إضافة علامة جديدة Add New Tag</a></li>
       <li><a class="dropdown-item" href="#">إعدادات المنتجات Product Setting</a></li>
      </ul>
     </a>
    </li>
    <li class="sub-menu">
     <a href="#">
      <span>المخزن the store</span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6189)">
        <path
         d="M2.49999 8.33334H1.66666V3.33583C1.66666 2.87417 2.04582 2.5 2.49332 2.5H17.5067C17.6161 2.49977 17.7244 2.5213 17.8254 2.56334C17.9264 2.60538 18.018 2.66708 18.095 2.74486C18.1719 2.82264 18.2326 2.91495 18.2735 3.01641C18.3144 3.11786 18.3348 3.22645 18.3333 3.33583V8.33334H17.5V16.6675C17.5003 16.7765 17.4792 16.8845 17.4378 16.9853C17.3964 17.0861 17.3355 17.1778 17.2587 17.2551C17.1818 17.3324 17.0905 17.3939 16.9899 17.4359C16.8894 17.4779 16.7815 17.4997 16.6725 17.5H3.32749C3.21849 17.4997 3.11063 17.4779 3.01005 17.4359C2.90948 17.3939 2.81816 17.3324 2.74132 17.2551C2.66448 17.1778 2.60362 17.0861 2.56221 16.9853C2.5208 16.8845 2.49966 16.7765 2.49999 16.6675V8.33334ZM15.8333 8.33334H4.16666V15.8333H15.8333V8.33334ZM3.33332 4.16667V6.66667H16.6667V4.16667H3.33332ZM7.49999 10H12.5V11.6667H7.49999V10Z"
         fill="" />
       </g>
       <defs>
        <clipPath id="clip0_9_6189">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
      <ul>
       <li><a class="dropdown-item" href="{{ route('admin.stocklist') }}">إضافة مخزون Stock List </a></li>
       <li><a class="dropdown-item" href="{{ route('admin.addstock') }}">إضافة مخزون Add Stock</a></li>
      </ul>
     </a>
    </li>
    <li class="sub-menu">
     <a href="#">
      <span>الشحن</span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6190)">
        <path
         d="M7.47084 15C7.37178 15.6952 7.02519 16.3314 6.49474 16.7916C5.9643 17.2518 5.28561 17.5052 4.58334 17.5052C3.88108 17.5052 3.20239 17.2518 2.67194 16.7916C2.1415 16.3314 1.79491 15.6952 1.69584 15H0.833344V4.99996C0.833344 4.77895 0.921141 4.56698 1.07742 4.4107C1.2337 4.25442 1.44566 4.16663 1.66668 4.16663H13.3333C13.5544 4.16663 13.7663 4.25442 13.9226 4.4107C14.0789 4.56698 14.1667 4.77895 14.1667 4.99996V6.66663H16.6667L19.1667 10.0466V15H17.4708C17.3718 15.6952 17.0252 16.3314 16.4947 16.7916C15.9643 17.2518 15.2856 17.5052 14.5833 17.5052C13.8811 17.5052 13.2024 17.2518 12.6719 16.7916C12.1415 16.3314 11.7949 15.6952 11.6958 15H7.47084ZM12.5 5.83329H2.50001V12.5416C2.82881 12.206 3.23384 11.9547 3.68064 11.8092C4.12743 11.6638 4.60275 11.6284 5.06616 11.7061C5.52956 11.7839 5.96732 11.9724 6.34218 12.2557C6.71705 12.539 7.01791 12.9087 7.21918 13.3333H11.9475C12.0875 13.0391 12.275 12.7716 12.5 12.5416V5.83329ZM14.1667 10.8333H17.5V10.5958L15.8267 8.33329H14.1667V10.8333ZM14.5833 15.8333C14.915 15.8333 15.233 15.7016 15.4675 15.4671C15.702 15.2326 15.8338 14.9145 15.8338 14.5829C15.8338 14.2512 15.702 13.9332 15.4675 13.6987C15.233 13.4642 14.915 13.3325 14.5833 13.3325C14.2517 13.3325 13.9337 13.4642 13.6992 13.6987C13.4647 13.9332 13.3329 14.2512 13.3329 14.5829C13.3329 14.9145 13.4647 15.2326 13.6992 15.4671C13.9337 15.7016 14.2517 15.8333 14.5833 15.8333V15.8333ZM5.83334 14.5833C5.83334 14.4191 5.80101 14.2566 5.73819 14.1049C5.67537 13.9533 5.5833 13.8155 5.46723 13.6994C5.35115 13.5833 5.21335 13.4913 5.0617 13.4284C4.91004 13.3656 4.7475 13.3333 4.58334 13.3333C4.41919 13.3333 4.25665 13.3656 4.10499 13.4284C3.95333 13.4913 3.81553 13.5833 3.69946 13.6994C3.58339 13.8155 3.49131 13.9533 3.42849 14.1049C3.36568 14.2566 3.33334 14.4191 3.33334 14.5833C3.33334 14.9148 3.46504 15.2328 3.69946 15.4672C3.93388 15.7016 4.25182 15.8333 4.58334 15.8333C4.91486 15.8333 5.23281 15.7016 5.46723 15.4672C5.70165 15.2328 5.83334 14.9148 5.83334 14.5833V14.5833Z"
         fill="" />
       </g>
       <defs>
        <clipPath id="clip0_9_6190">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
      <ul>
       <li><a class="dropdown-item" href="#">إضافة جهة توصيل</a></li>
       <li><a class="dropdown-item" href="#">رسوم التوصيل</a></li>
      </ul>
     </a>
    </li>
    <li class="sub-menu">
     <a href="#">
      <span>المسوقون</span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6191)">
        <path
         d="M9.99999 9.16663C11.1051 9.16663 12.1649 9.60561 12.9463 10.387C13.7277 11.1684 14.1667 12.2282 14.1667 13.3333V18.3333H12.5V13.3333C12.5 12.6956 12.2564 12.082 11.8189 11.6181C11.3815 11.1541 10.7832 10.8749 10.1467 10.8375L9.99999 10.8333C9.36231 10.8333 8.74873 11.0769 8.28477 11.5144C7.82082 11.9518 7.54157 12.55 7.50416 13.1866L7.49999 13.3333V18.3333H5.83332V13.3333C5.83332 12.2282 6.27231 11.1684 7.05371 10.387C7.83511 9.60561 8.89492 9.16663 9.99999 9.16663ZM4.58332 11.6666C4.81582 11.6666 5.04166 11.6941 5.25832 11.745C5.11584 12.1691 5.03146 12.6106 5.00749 13.0575L4.99999 13.3333V13.405C4.9042 13.3707 4.80457 13.3483 4.70332 13.3383L4.58332 13.3333C4.27259 13.3333 3.973 13.4491 3.74297 13.658C3.51295 13.8669 3.36899 14.154 3.33916 14.4633L3.33332 14.5833V18.3333H1.66666V14.5833C1.66666 13.8097 1.97395 13.0679 2.52093 12.5209C3.06791 11.9739 3.80978 11.6666 4.58332 11.6666V11.6666ZM15.4167 11.6666C16.1902 11.6666 16.9321 11.9739 17.4791 12.5209C18.026 13.0679 18.3333 13.8097 18.3333 14.5833V18.3333H16.6667V14.5833C16.6666 14.2726 16.5509 13.973 16.342 13.7429C16.1331 13.5129 15.846 13.369 15.5367 13.3391L15.4167 13.3333C15.2708 13.3333 15.1308 13.3583 15 13.4041V13.3333C15 12.7783 14.91 12.245 14.7425 11.7466C14.9583 11.6941 15.1842 11.6666 15.4167 11.6666ZM4.58332 6.66663C5.13586 6.66663 5.66576 6.88612 6.05646 7.27682C6.44716 7.66752 6.66666 8.19743 6.66666 8.74996C6.66666 9.30249 6.44716 9.8324 6.05646 10.2231C5.66576 10.6138 5.13586 10.8333 4.58332 10.8333C4.03079 10.8333 3.50088 10.6138 3.11018 10.2231C2.71948 9.8324 2.49999 9.30249 2.49999 8.74996C2.49999 8.19743 2.71948 7.66752 3.11018 7.27682C3.50088 6.88612 4.03079 6.66663 4.58332 6.66663V6.66663ZM15.4167 6.66663C15.9692 6.66663 16.4991 6.88612 16.8898 7.27682C17.2805 7.66752 17.5 8.19743 17.5 8.74996C17.5 9.30249 17.2805 9.8324 16.8898 10.2231C16.4991 10.6138 15.9692 10.8333 15.4167 10.8333C14.8641 10.8333 14.3342 10.6138 13.9435 10.2231C13.5528 9.8324 13.3333 9.30249 13.3333 8.74996C13.3333 8.19743 13.5528 7.66752 13.9435 7.27682C14.3342 6.88612 14.8641 6.66663 15.4167 6.66663V6.66663ZM4.58332 8.33329C4.47282 8.33329 4.36684 8.37719 4.2887 8.45533C4.21056 8.53347 4.16666 8.63945 4.16666 8.74996C4.16666 8.86047 4.21056 8.96645 4.2887 9.04459C4.36684 9.12273 4.47282 9.16663 4.58332 9.16663C4.69383 9.16663 4.79981 9.12273 4.87795 9.04459C4.95609 8.96645 4.99999 8.86047 4.99999 8.74996C4.99999 8.63945 4.95609 8.53347 4.87795 8.45533C4.79981 8.37719 4.69383 8.33329 4.58332 8.33329ZM15.4167 8.33329C15.3062 8.33329 15.2002 8.37719 15.122 8.45533C15.0439 8.53347 15 8.63945 15 8.74996C15 8.86047 15.0439 8.96645 15.122 9.04459C15.2002 9.12273 15.3062 9.16663 15.4167 9.16663C15.5272 9.16663 15.6331 9.12273 15.7113 9.04459C15.7894 8.96645 15.8333 8.86047 15.8333 8.74996C15.8333 8.63945 15.7894 8.53347 15.7113 8.45533C15.6331 8.37719 15.5272 8.33329 15.4167 8.33329ZM9.99999 1.66663C10.884 1.66663 11.7319 2.01782 12.357 2.64294C12.9821 3.26806 13.3333 4.1159 13.3333 4.99996C13.3333 5.88401 12.9821 6.73186 12.357 7.35698C11.7319 7.9821 10.884 8.33329 9.99999 8.33329C9.11594 8.33329 8.26809 7.9821 7.64297 7.35698C7.01785 6.73186 6.66666 5.88401 6.66666 4.99996C6.66666 4.1159 7.01785 3.26806 7.64297 2.64294C8.26809 2.01782 9.11594 1.66663 9.99999 1.66663V1.66663ZM9.99999 3.33329C9.55796 3.33329 9.13404 3.50889 8.82148 3.82145C8.50892 4.13401 8.33332 4.55793 8.33332 4.99996C8.33332 5.44199 8.50892 5.86591 8.82148 6.17847C9.13404 6.49103 9.55796 6.66663 9.99999 6.66663C10.442 6.66663 10.8659 6.49103 11.1785 6.17847C11.4911 5.86591 11.6667 5.44199 11.6667 4.99996C11.6667 4.55793 11.4911 4.13401 11.1785 3.82145C10.8659 3.50889 10.442 3.33329 9.99999 3.33329V3.33329Z"
         fill="" />
       </g>
       <defs>
        <clipPath id="clip0_9_6191">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
      <ul>
       <li><a class="dropdown-item" href="#">قائمة الإنتظار</a></li>
      </ul>
     </a>
    </li>
    <li>
     <a href="#">
      <span>الموردون</span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6192)">
        <path
         d="M5.83332 7.49996C6.38586 7.49996 6.91576 7.28047 7.30646 6.88976C7.69716 6.49906 7.91666 5.96916 7.91666 5.41663C7.91666 4.86409 7.69716 4.33419 7.30646 3.94349C6.91576 3.55279 6.38586 3.33329 5.83332 3.33329C5.28079 3.33329 4.75088 3.55279 4.36018 3.94349C3.96948 4.33419 3.74999 4.86409 3.74999 5.41663C3.74999 5.96916 3.96948 6.49906 4.36018 6.88976C4.75088 7.28047 5.28079 7.49996 5.83332 7.49996ZM5.83332 9.16663C5.34087 9.16663 4.85323 9.06963 4.39826 8.88117C3.94329 8.69272 3.52989 8.4165 3.18167 8.06828C2.83345 7.72006 2.55723 7.30666 2.36877 6.85169C2.18032 6.39672 2.08332 5.90908 2.08332 5.41663C2.08332 4.92417 2.18032 4.43653 2.36877 3.98156C2.55723 3.52659 2.83345 3.1132 3.18167 2.76498C3.52989 2.41676 3.94329 2.14053 4.39826 1.95208C4.85323 1.76362 5.34087 1.66663 5.83332 1.66663C6.82789 1.66663 7.78171 2.06171 8.48497 2.76498C9.18824 3.46824 9.58332 4.42206 9.58332 5.41663C9.58332 6.41119 9.18824 7.36501 8.48497 8.06828C7.78171 8.77154 6.82789 9.16663 5.83332 9.16663V9.16663ZM14.5833 10.8333C15.0254 10.8333 15.4493 10.6577 15.7618 10.3451C16.0744 10.0326 16.25 9.60865 16.25 9.16663C16.25 8.7246 16.0744 8.30068 15.7618 7.98811C15.4493 7.67555 15.0254 7.49996 14.5833 7.49996C14.1413 7.49996 13.7174 7.67555 13.4048 7.98811C13.0923 8.30068 12.9167 8.7246 12.9167 9.16663C12.9167 9.60865 13.0923 10.0326 13.4048 10.3451C13.7174 10.6577 14.1413 10.8333 14.5833 10.8333V10.8333ZM14.5833 12.5C13.6993 12.5 12.8514 12.1488 12.2263 11.5236C11.6012 10.8985 11.25 10.0507 11.25 9.16663C11.25 8.28257 11.6012 7.43472 12.2263 6.8096C12.8514 6.18448 13.6993 5.83329 14.5833 5.83329C15.4674 5.83329 16.3152 6.18448 16.9403 6.8096C17.5655 7.43472 17.9167 8.28257 17.9167 9.16663C17.9167 10.0507 17.5655 10.8985 16.9403 11.5236C16.3152 12.1488 15.4674 12.5 14.5833 12.5ZM16.6667 17.5V17.0833C16.6667 16.5308 16.4472 16.0009 16.0565 15.6102C15.6658 15.2195 15.1359 15 14.5833 15C14.0308 15 13.5009 15.2195 13.1102 15.6102C12.7195 16.0009 12.5 16.5308 12.5 17.0833V17.5H10.8333V17.0833C10.8333 16.5908 10.9303 16.1032 11.1188 15.6482C11.3072 15.1933 11.5835 14.7799 11.9317 14.4316C12.2799 14.0834 12.6933 13.8072 13.1483 13.6187C13.6032 13.4303 14.0909 13.3333 14.5833 13.3333C15.0758 13.3333 15.5634 13.4303 16.0184 13.6187C16.4734 13.8072 16.8868 14.0834 17.235 14.4316C17.5832 14.7799 17.8594 15.1933 18.0479 15.6482C18.2363 16.1032 18.3333 16.5908 18.3333 17.0833V17.5H16.6667ZM8.33332 17.5V14.1666C8.33332 13.5036 8.06993 12.8677 7.60109 12.3989C7.13225 11.93 6.49636 11.6666 5.83332 11.6666C5.17028 11.6666 4.5344 11.93 4.06556 12.3989C3.59672 12.8677 3.33332 13.5036 3.33332 14.1666V17.5H1.66666V14.1666C1.66666 13.0616 2.10564 12.0017 2.88704 11.2203C3.66845 10.4389 4.72825 9.99996 5.83332 9.99996C6.93839 9.99996 7.9982 10.4389 8.7796 11.2203C9.561 12.0017 9.99999 13.0616 9.99999 14.1666V17.5H8.33332Z"
         fill="" />
       </g>
       <defs>
        <clipPath id="clip0_9_6192">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
     </a>
    </li>
    <li>
     <a href="#">
      <span>المحاسبة والميزانية</span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6193)">
        <path
         d="M3.33333 1.66669H16.6667C16.8877 1.66669 17.0996 1.75448 17.2559 1.91076C17.4122 2.06704 17.5 2.27901 17.5 2.50002V17.5C17.5 17.721 17.4122 17.933 17.2559 18.0893C17.0996 18.2456 16.8877 18.3334 16.6667 18.3334H3.33333C3.11232 18.3334 2.90036 18.2456 2.74408 18.0893C2.5878 17.933 2.5 17.721 2.5 17.5V2.50002C2.5 2.27901 2.5878 2.06704 2.74408 1.91076C2.90036 1.75448 3.11232 1.66669 3.33333 1.66669V1.66669ZM4.16667 3.33335V16.6667H15.8333V3.33335H4.16667ZM5.83333 5.00002H14.1667V8.33335H5.83333V5.00002ZM5.83333 10H7.5V11.6667H5.83333V10ZM5.83333 13.3334H7.5V15H5.83333V13.3334ZM9.16667 10H10.8333V11.6667H9.16667V10ZM9.16667 13.3334H10.8333V15H9.16667V13.3334ZM12.5 10H14.1667V15H12.5V10Z"
         fill="" />
       </g>
       <defs>
        <clipPath id="clip0_9_6193">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
     </a>
    </li>
    <li class="sub-menu">
     <!-- {{ route('Userlist') }} -->
     <a href="#"
      class="@if($segment1=='Userlist' || $segment1=='CreateUser'|| $segment1=='Addrole' || $segment1=='Rolelist') active @endif">
      <span>الأدوار Role</span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6194)">
        <path
         d="M10 11.6666V13.3333C8.67393 13.3333 7.40216 13.8601 6.46448 14.7978C5.52679 15.7355 5.00001 17.0072 5.00001 18.3333H3.33334C3.33334 16.5652 4.03572 14.8695 5.28596 13.6193C6.53621 12.369 8.2319 11.6666 10 11.6666V11.6666ZM10 10.8333C7.23751 10.8333 5.00001 8.59581 5.00001 5.83331C5.00001 3.07081 7.23751 0.833313 10 0.833313C12.7625 0.833313 15 3.07081 15 5.83331C15 8.59581 12.7625 10.8333 10 10.8333ZM10 9.16665C11.8417 9.16665 13.3333 7.67498 13.3333 5.83331C13.3333 3.99165 11.8417 2.49998 10 2.49998C8.15834 2.49998 6.66668 3.99165 6.66668 5.83331C6.66668 7.67498 8.15834 9.16665 10 9.16665ZM12.1625 15.6766C12.0568 15.232 12.0568 14.7688 12.1625 14.3241L11.3358 13.8466L12.1692 12.4033L12.9958 12.8808C13.3276 12.5665 13.7287 12.3347 14.1667 12.2041V11.25H15.8333V12.2041C16.2767 12.3358 16.6767 12.5708 17.0042 12.8808L17.8308 12.4033L18.6642 13.8466L17.8375 14.3241C17.943 14.7685 17.943 15.2314 17.8375 15.6758L18.6642 16.1533L17.8308 17.5966L17.0042 17.1191C16.6724 17.4334 16.2713 17.6652 15.8333 17.7958V18.75H14.1667V17.7958C13.7287 17.6652 13.3276 17.4334 12.9958 17.1191L12.1692 17.5966L11.3358 16.1533L12.1625 15.6766V15.6766ZM15 16.25C15.3315 16.25 15.6495 16.1183 15.8839 15.8839C16.1183 15.6494 16.25 15.3315 16.25 15C16.25 14.6685 16.1183 14.3505 15.8839 14.1161C15.6495 13.8817 15.3315 13.75 15 13.75C14.6685 13.75 14.3505 13.8817 14.1161 14.1161C13.8817 14.3505 13.75 14.6685 13.75 15C13.75 15.3315 13.8817 15.6494 14.1161 15.8839C14.3505 16.1183 14.6685 16.25 15 16.25Z"
         fill="" />
       </g>
       <defs>
        <clipPath id="clip0_9_6194">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
      <ul>
       <li><a class="dropdown-item" href="{{ route('admin.CreateUser') }}"> Add a user إضافة مستخدم</a></li>
       <li><a class="dropdown-item" href="{{ route('Userlist') }}">User list قائمة المستخدمين</a></li>
       <li><a class="dropdown-item" href="{{ route('Rolelist') }}">إضافة دور add role</a></li>
      </ul>
     </a>
    </li>
    <li>
     <a href="{{ route('admin.Settingpage') }}" class="@if($segment1=='Settingpage') active @endif">
      <span>الإعدادات setting </span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6195)">
        <path
         d="M7.23833 3.33336L9.41083 1.16086C9.5671 1.00463 9.77902 0.91687 9.99999 0.91687C10.221 0.91687 10.4329 1.00463 10.5892 1.16086L12.7617 3.33336H15.8333C16.0543 3.33336 16.2663 3.42116 16.4226 3.57744C16.5789 3.73372 16.6667 3.94568 16.6667 4.16669V7.23836L18.8392 9.41086C18.9954 9.56713 19.0831 9.77905 19.0831 10C19.0831 10.221 18.9954 10.4329 18.8392 10.5892L16.6667 12.7617V15.8334C16.6667 16.0544 16.5789 16.2663 16.4226 16.4226C16.2663 16.5789 16.0543 16.6667 15.8333 16.6667H12.7617L10.5892 18.8392C10.4329 18.9954 10.221 19.0832 9.99999 19.0832C9.77902 19.0832 9.5671 18.9954 9.41083 18.8392L7.23833 16.6667H4.16666C3.94565 16.6667 3.73369 16.5789 3.57741 16.4226C3.42113 16.2663 3.33333 16.0544 3.33333 15.8334V12.7617L1.16083 10.5892C1.0046 10.4329 0.91684 10.221 0.91684 10C0.91684 9.77905 1.0046 9.56713 1.16083 9.41086L3.33333 7.23836V4.16669C3.33333 3.94568 3.42113 3.73372 3.57741 3.57744C3.73369 3.42116 3.94565 3.33336 4.16666 3.33336H7.23833ZM4.99999 5.00003V7.92919L2.92916 10L4.99999 12.0709V15H7.92916L9.99999 17.0709L12.0708 15H15V12.0709L17.0708 10L15 7.92919V5.00003H12.0708L9.99999 2.92919L7.92916 5.00003H4.99999ZM9.99999 13.3334C9.11594 13.3334 8.26809 12.9822 7.64297 12.357C7.01785 11.7319 6.66666 10.8841 6.66666 10C6.66666 9.11597 7.01785 8.26812 7.64297 7.643C8.26809 7.01788 9.11594 6.66669 9.99999 6.66669C10.884 6.66669 11.7319 7.01788 12.357 7.643C12.9821 8.26812 13.3333 9.11597 13.3333 10C13.3333 10.8841 12.9821 11.7319 12.357 12.357C11.7319 12.9822 10.884 13.3334 9.99999 13.3334ZM9.99999 11.6667C10.442 11.6667 10.8659 11.4911 11.1785 11.1785C11.4911 10.866 11.6667 10.4421 11.6667 10C11.6667 9.558 11.4911 9.13407 11.1785 8.82151C10.8659 8.50895 10.442 8.33336 9.99999 8.33336C9.55797 8.33336 9.13404 8.50895 8.82148 8.82151C8.50892 9.13407 8.33333 9.558 8.33333 10C8.33333 10.4421 8.50892 10.866 8.82148 11.1785C9.13404 11.4911 9.55797 11.6667 9.99999 11.6667Z"
         fill="" />
       </g>
       <defs>
        <clipPath id="clip0_9_6195">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
     </a>
    </li>
    <li>
     <a href="{{ route('signout') }}" > <!-- class="@if($segment1=='Settingpage') active @endif" -->
      <span>LogOut </span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g clip-path="url(#clip0_9_6195)">
        <path
         d="M7.23833 3.33336L9.41083 1.16086C9.5671 1.00463 9.77902 0.91687 9.99999 0.91687C10.221 0.91687 10.4329 1.00463 10.5892 1.16086L12.7617 3.33336H15.8333C16.0543 3.33336 16.2663 3.42116 16.4226 3.57744C16.5789 3.73372 16.6667 3.94568 16.6667 4.16669V7.23836L18.8392 9.41086C18.9954 9.56713 19.0831 9.77905 19.0831 10C19.0831 10.221 18.9954 10.4329 18.8392 10.5892L16.6667 12.7617V15.8334C16.6667 16.0544 16.5789 16.2663 16.4226 16.4226C16.2663 16.5789 16.0543 16.6667 15.8333 16.6667H12.7617L10.5892 18.8392C10.4329 18.9954 10.221 19.0832 9.99999 19.0832C9.77902 19.0832 9.5671 18.9954 9.41083 18.8392L7.23833 16.6667H4.16666C3.94565 16.6667 3.73369 16.5789 3.57741 16.4226C3.42113 16.2663 3.33333 16.0544 3.33333 15.8334V12.7617L1.16083 10.5892C1.0046 10.4329 0.91684 10.221 0.91684 10C0.91684 9.77905 1.0046 9.56713 1.16083 9.41086L3.33333 7.23836V4.16669C3.33333 3.94568 3.42113 3.73372 3.57741 3.57744C3.73369 3.42116 3.94565 3.33336 4.16666 3.33336H7.23833ZM4.99999 5.00003V7.92919L2.92916 10L4.99999 12.0709V15H7.92916L9.99999 17.0709L12.0708 15H15V12.0709L17.0708 10L15 7.92919V5.00003H12.0708L9.99999 2.92919L7.92916 5.00003H4.99999ZM9.99999 13.3334C9.11594 13.3334 8.26809 12.9822 7.64297 12.357C7.01785 11.7319 6.66666 10.8841 6.66666 10C6.66666 9.11597 7.01785 8.26812 7.64297 7.643C8.26809 7.01788 9.11594 6.66669 9.99999 6.66669C10.884 6.66669 11.7319 7.01788 12.357 7.643C12.9821 8.26812 13.3333 9.11597 13.3333 10C13.3333 10.8841 12.9821 11.7319 12.357 12.357C11.7319 12.9822 10.884 13.3334 9.99999 13.3334ZM9.99999 11.6667C10.442 11.6667 10.8659 11.4911 11.1785 11.1785C11.4911 10.866 11.6667 10.4421 11.6667 10C11.6667 9.558 11.4911 9.13407 11.1785 8.82151C10.8659 8.50895 10.442 8.33336 9.99999 8.33336C9.55797 8.33336 9.13404 8.50895 8.82148 8.82151C8.50892 9.13407 8.33333 9.558 8.33333 10C8.33333 10.4421 8.50892 10.866 8.82148 11.1785C9.13404 11.4911 9.55797 11.6667 9.99999 11.6667Z"
         fill="" />
       </g>
       <defs>
        <clipPath id="clip0_9_6195">
         <rect width="20" height="20" fill="white" />
        </clipPath>
       </defs>
      </svg>
     </a>
    </li>

   </ul>
  </div>
 </div>

 <!-- jQuery CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
  integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <!-- pie-js -->
 <script src="{{ asset('Asset/admin/js/radial-progress-bar.js') }}"></script>
 <script src="{{ asset('Asset/admin/js/app.js') }}" defer></script>
 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <!-- Custom JS -->




 <script>
 $('.sub-menu ul').hide();
 $('.sub-menu a').click(function() {
  $(this).parent('.sub-menu').children('ul').slideToggle("100");
  $(this).find('.right').toggleClass('');
 })


 jQuery("#d_progress1").radialProgress("init", {
  'size': 130,
  'fill': 8,
  'color': "#fff",
  'color2': "transparent",
 }).radialProgress("to", {
  'perc': 75,
  'time': 100,
 });

 jQuery("#d_progress2").radialProgress("init", {
  'size': 130,
  'fill': 8,
  'color': "#fff",
  'color2': "transparent",
 }).radialProgress("to", {
  'perc': 75,
  'time': 100,
 });
 </script>
</body>

</html>