<!doctype html>
<html lang="en">


<head>

<style type="text/css">
    input[type='text']
    {
        width: 300px;
        margin-top: 50px;
        height:35px
    }
    .div_css
    {
        display:flex;
        justify-content: center;
        align-items: center;
        margin: 30px;

    }
    .table_css{
        text-align: center;
        margin: auto;
        border: 2px solid black;
        margin-top:50px;
    }
    th{
        background-color: black;
        padding:15px;
        font-size:20px;
        font-weight:bold;
        color:white;

    }

    td{
        color: black;
        padding:10px;
        border: 1px solid grey;
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

 

      <h1 >Add Category</h1>


<div class="div_css">



  <form action="{{url('add_category')}}" method="post">

      @csrf


      <div>
          <input type="text" name="category">
      
      <input class="btn btn-outline-primary mx-3 mt-2 d-block shadow-none" type="submit" value="Add Category">
      </div>
  </form>
  </div>


  <div>

      <table class="table_css">

    
          <tr>
              <th>Category Name</th>
              <th>Edit</th>
              <th>Delete</th>
            
          </tr>
         
              @foreach($data as $data)

          <tr>
          <td>{{$data->category_name}}</td>

              <td>
                  <a class=" btn btn-outline-success mx-3 mt-2 d-block shadow-none" href= "{{url('edit_category',$data->id)}}">Edit</a>

              <td>
              <a class=" btn btn-outline-danger mx-3 mt-2 d-block shadow-none" onClick="confirmation(event)"
              href="{{url('delete_category',$data->id)}}">Delete</a>
              </td>
          </tr>
          @endforeach
         
      </table>            

  </div>

 
          
   
</body>



</html>