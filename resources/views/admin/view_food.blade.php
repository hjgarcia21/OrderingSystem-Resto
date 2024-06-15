<!doctype html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resto-Admin</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <style type="text/css">
    .div_css{
        display:flex;
        justify-content: center;
        align-items: center;
        margin-top:60px;
    }
    .table_css{
        border: 2px solid grey;
    }
    th{
        background-color:skyblue;
        color:black;
        font-size: 19px;
        font-weight:bold;
        padding: 15px;

        }
        td{
            border:1px solid skyblue;
            text-align:center;
            color:black;

        }
        input[type="search"]{
          width:400px;
          height:43px;
          margin-top: 90px;
          align-items: center;;
        }
    </style>
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

 

      <form action="{{url('food_search')}}" method="get">
            <input type="search" name="search">
            <input type="submit" class="btn btn-outline-primary mx-3 mt-2 d-block shadow-none" value="Search">
          </form>

            <div class="div_css">

            <table class="table_css">
                <tr>
                    <th>Food Title</th>
                    <th>Food Description</th>
                    <th>Food Category</th>
                    <th>Food Price</th>
                 
                    <th>Food Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                   

                </tr>
                
         
            @foreach($product as $products)

            <tr>
                    <td>{{$products->title}}</td>
                    <td>{{!!Str::limit($products->description,50)!!}}</td>
                    <td>{{$products->category}}</td>
                    <td>{{$products->price}}</td>
              
                   
                    
                    <td>
                        <img  height="120" width="120"src="foods/{{$products->image}}">
                    </td>
                       
                    <td>
                        <a class="btn btn-outline-success mx-3 mt-2 d-block shadow-none" onClick="confirmation(event)" href="{{url('update_food',$products->id)}}"> 
                          Edit</a>
                     </td>

                    <td>
                        <a class="btn btn-outline-danger mx-3 mt-2 d-block shadow-none" onClick="confirmation(event)" href="{{url('delete_food',$products->id)}}"> Delete</a>
                     </td>


            </tr>
            @endforeach
           
            </table>

         

        </div>
    
          </div>
 
           </div>
    </div>
   
</body>



</html>