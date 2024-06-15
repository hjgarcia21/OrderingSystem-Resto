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
    <br></br>
<br></br>

   
      <!--  Header End -->
      @include('admin.script')

 

    

            <div class="div_css">


            <table class="table_css">
                <tr>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Price</th>
                <th>Title</th>
                <th>Image</th>
                <th>Status</th>
                <th> Change Status</th>
                </tr>
                
         
                @foreach ($data as $data)

            <tr>
            <td>{{$data->name}} </td>
                <td>{{$data->rec_address}} </td>
                <td>{{$data->phone}} </td>
                <td>{{$data->product->price}} </td>
                <td>{{$data->product->title}} </td>
                    
                    <td>
                        <img  height="120" width="120"src="foods/{{$data->product->image}}">
                    </td>
                       
                  <td>
                
                @if($data->status == 'in progress')

                <span style= "color:red">{{$data->status}}</span>

                @elseif($data->status == 'On the way')
                <span style="color:skyblue;">{{$data->status}}</span>
                @else
                <span style="color:green;">{{$data->status}}</span>
                @endif
                
                 </td>
                <td>
                <a class="btn btn-primary" href="{{url('on_the_way', $data->id)}}">On the Way</a>
                    <a class="btn btn-success" href="{{url('delivered', $data->id)}}">Delivered</a>
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