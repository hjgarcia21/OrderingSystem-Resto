<!doctype html>
<html lang="en">

<head>
<style type="text/css">
    .div_css{
        display:flex;
        justify-content: center;
        align-items:center;
        margin:60px;
    }
    input[type='text']{
        width: 400px;
        height: 40px;
    }
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resto-Admin</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar" data-simplebar>
        <div class="d-flex mb-4 align-items-center justify-content-between">
            <a href="index.html" class="text-nowrap logo-img ms-0 ms-md-1">
       <!--logo here-->
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        @include('admin.slider')
      </div>
    </aside>
    <div class="body-wrapper">
    @include('admin.header')
   
      <!--  Header End -->
      @include('admin.script')

      <!-- edit for category-->

      <h1 style="color:black;">Edit Category</h1>

<div class="div_css">

  <form  action="{{url('update_category', $data->id)}}" method="post">
      @csrf
      <input type="text" name="category" value="{{$data->category_name}}">
      <input class="btn btn-outline-primary mx-3 mt-2 d-block shadow-none"type="submit" value="Update Category">
  </form>


</body>

</html>