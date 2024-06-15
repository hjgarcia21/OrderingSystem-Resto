<!doctype html>
<html lang="en">

<head>

<style type="text/css">
    .div_css{
        display: flex;
            justify-content: center;
            align text: center;
            margin-top: 60px;

    }

    input[type='text']{
        width: 300px;
        height:50px;
    }

    input[type='number']{
        width: 300px;
        height:50px;
    }


    label{
        display:inline-block;
        width:250px;
      padding:20px;
    }
    textarea{
        width: 450px;
        height:80px;
       
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

 
      <h2>Update Food</h2>

<div class="div_css">

  <form action="{{url('edit_food',$data->id)}}" method="post"enctype="multipart/form-data">

  @csrf
      <div>
          <label>Title</label>
          <input type="text" name="title" value="{{$data->title}}">
      </div>

      <div>
          <label>Description</label>
       <textarea name="description">{{$data->description}}</textarea>
      </div>

      <div>
          <label>Price</label>
          <input type="text" name="price" value="{{$data->price}}">
      </div>

      <div>
          <label>Quantity</label>
          <input type="number" name="quantity" value="{{$data->quantity}}">
      </div>

      <div>
          <label>Category</label>
       <select name="category" style=" width:300px; height:50px;">

       <option   value="{{$data->category}}">{{$data->category}}</option>
       @foreach($category as $category)
       <option valu="{{$category->category_name}}">{{$category->category_name}}</option>
       @endforeach
      </select>
      </div>

      <div>
          <label>Current Image</label>

          <img width="250"src="/foods/{{$data->image}}">

          </div>

          <div>
              <label>New Image</label>
              <input type="file" name="image">
          </div>

          
      <div>
      <input class="btn btn-success" type="submit" value="Update Food Details">

          </div>

  </form>
            
          </div>
 
          
   
</body>



</html>