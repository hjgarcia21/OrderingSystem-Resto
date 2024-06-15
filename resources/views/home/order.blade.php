<!DOCTYPE html>
<html lang="en">

<head>
@include('home.css')
<style type="text/css">
        /* Basic reset */
body {
    font-family: Arial, sans-serif;
}

table {
    border-collapse: collapse;
    width: 100%;
    margin: 20px 0;
    font-size: 18px;
    text-align: left;
}

th, td {
    padding: 12px 15px;
}

thead tr {
    background-color: #292929;
    color: #fff;
    text-align: left;
}

tbody tr {
    border-bottom: 1px solid #0d0d0d;
}

tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

tbody tr:last-of-type {
    border-bottom: 2px solid #080909;
}

tbody tr:hover {
    background-color: #f1f1f1;
}

        </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('home.header')
 

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Order Details</h5>
                    <h1 class="mb-5">User Order History</h1>
                </div>
        
<table class="styled-table">
 <thead>
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Delivery Status</th>
        <th>Images</th>
</tr>
</thead>

        @foreach($order as $order)
        <tbody>
<tr>
    <td>{{$order->product->title}}</td>
    <td>{{$order->product->price}}</td>
    <td>{{$order->status}}</td>
       <td>
        <img height ="200" width ="300" src="foods/{{$order->product->image}}">
</td>
</tr>
@endforeach
</tbody>
</table>




    

        @include('home.team')
        @include('home.footer')
     


    
</body>

</html>
