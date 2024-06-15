<!DOCTYPE html>
<html lang="en">

<head>
@include('home.css')
<style type="text/css">

.div_deg{
    display:flex;
    justify-content:center;
    align-items:center;
    margin:60px;
}

.cart_value{
    text-align:center;
    margin-bottom: 70px;
    padding: 18px;
}
.order_deg{
  padding-right: 150px;
  margin-top: -50px;
}

.label-container {
    position: relative;
    margin-bottom: 20px;
    font-family: Arial, sans-serif;
}

.label-container label {
    position: absolute;
    top: 10px;
    left: 10px;
    color: #999;
    font-size: 16px;
    transition: all 0.2s ease-in-out;
    pointer-events: none;
}

.label-container input {
    width: 100%;
    padding: 10px 10px 10px 40px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    transition: border-color 0.2s ease-in-out;
}

.label-container input:focus {
    border-color: #007BFF;
    outline: none;
}

.label-container input:focus + label,
.label-container input:not(:placeholder-shown) + label {
    top: -10px;
    left: 10px;
    font-size: 12px;
    color: #007BFF;
    background: #fff;
    padding: 0 5px;
}

.label-container input::placeholder {
    color: transparent;
}
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
        <form action="{{url('confirm_order')}}" method="Post">
            @csrf
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Billing Address</h5>
                    <h1 class="mb-5">User Information</h1>
                </div>
            <div class="label-container">
                <input type="text" name="name" id="name" required placeholder=" " value="{{Auth::user()->name}}">
                <label for="name">Receiver Name</label>
            </div>
            <div class="label-container">
                <input type="text" name="address" id="address" required placeholder=" " value="{{Auth::user()->address}}">
                <label for="address">Receiver Address</label>
            </div>
            <div class="label-container">
                <input type="text" name="phone" id="phone" required placeholder=" " value="{{Auth::user()->phone}}">
                <label for="phone">Receiver Phone</label>
            </div>
            <div class="div_gap">    
                <input class="btn btn-primary mt-4" type="submit" value="Place Order">
            </div>
        </form>

    
        <table class="styled-table">
        <thead>
            <tr>
                <th>Painting Title</th>
                <th>Painting Price</th>
                <th>Painting Image</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            @php
                $value = 0;
            @endphp
            @foreach($cart as $item)
                @if($item->product)
                    <tr>
                        <td>{{ $item->product->title }}</td>
                        <td>{{ $item->product->price }}</td>
                        <td>
                            <img width="150" src="/foods/{{ $item->product->image }}">
                        </td>
                        <td>
                            <a class="btn btn-danger" onClick="confirmation(event)" href="{{ url('delete_cart', $item->id) }}">Remove</a>
                        </td>
                    </tr>
                    @php
                        $value += $item->product->price;
                    @endphp
                @else
                    <tr>
                        <td colspan="4">Product not found</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    
<div class="cart_value">
    <h3>Total Value of items in the Cart: ₱ {{ $value }}</h3>
</div>
        @include('home.team')
        @include('home.footer')
     
</div>

    
</body>

</html>
