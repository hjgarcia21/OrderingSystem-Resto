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
    h1{
        color:black;
    }
    label{
        display:inline-block;
        width:250px;
        font-size:18px!important;
        color:black!important;
    }
    input[type='text']{
        width: 300px;
        height:50px;
    }
    textarea{
        width:300px;
        height:50px;
    }
    .input_css{
        padding:15px;

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

 

          <h1> Add Food</h1>
          <div class="div_css">

            <form action="{{url('upload_food')}}" method="Post" 
                enctype="multipart/form-data">

                @csrf
                
                <div class="input_css">
                    <label> Food Name</label>
                    <input type="text" name="title" required>
                </div>

                <div class="input_css">
                    <label> Food Description</label>
                    <textarea name="description" required></textarea>
                </div>

                <div class="input_css">
                    <label> Food Price</label>
                    <input type="text" name="price">
                </div>

              

                <div class="input_css">
                    <label>Food Category</label>
                    <select style="   width: 300px;
                         height:50px;" name="category" required>
                        <option>Selection Option</option>

                       @foreach($category as $category)
                       <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                       @endforeach

                    </select>
                </div>

                <div class="input_css">
                    <label> Food Image</label>
                    <input style="   width: 300px;
        height:50px;" type="file" name="image">
                </div>


                <div class="input_css">
                   <input class="btn btn-outline-primary mx-3 mt-2 d-block shadow-none" type="submit" value="Add Food">
                    
                </div>

            </form>
            
          </div>
 
          
   
</body>



</html>