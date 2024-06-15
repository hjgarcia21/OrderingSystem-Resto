
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="row">
                    @foreach($product as $products)
                        <div  class="tab-pane fade show p-0 active col-sm-6 col-md-3 col-lg-3">
                            <div class="col-sm-6 col-md-3 col-lg-5">
                     
                                <div class="">
                                
                                    <div class="d-flex align-items-center">
                                 
                                        <img class="flex-shrink-0 img-fluid rounded" src="foods/{{$products->image}}" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                           <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{$products->title}}</span>
                                                <span class="text-primary">${{$products->price}}</span>
                                               
                                               
                                            </h5>
                                           
                                            
                                            <p class="text-primary">${{$products->description}}</p>

              <a  class="btn btn-secondary" href="{{url('add_cart',$products->id)}}">Add to Cart</a>
          

   
                                        </div>


                                    </div>
                                </div>
                                

</div>
</div>
@endforeach
</div>
