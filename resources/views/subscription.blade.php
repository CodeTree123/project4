@include('include.header')
 
    <!-- main start -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-2 pe-0">
                <div class="profile blue-grey-border-thin">
                    <div class="complete">
                        <div class="p-header">
                            <!-- <img src="img/banner.jpg" class="cover"> -->
                            <img src="{{ asset('assets/img/profile.png')}}" class="doctor-profile my-4">

                            <h2 class="mb-2">{{$doctor_info->fname." ".$doctor_info->lname}}</h2>
                            <p class="mb-2">Dental Consulatant of the Royal <br>Dental</p>
                            <!-- <a href="#_" class="btns btn-outline-blue-grey  mb-2">This Month</a> -->
                            <p class="mb-2">SMS Remaining : 50</p>
                            <p class="mb-2">Buy SMS : 50</p>

                        </div>
                    </div>
                </div>
                <div class="profile blue-grey-border-thin py-2">
                    <!-- <h3>Treatment Plans</h3> -->
                    <div class="complete">
                        <a href="{{route('patient_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Patient List</a>
                        <a href="{{route('appointment_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Appointment</a>
                        <!-- <a href="#" class="btns btn-outline-blue-grey my-2">Income/Expence</a> -->
                        <a href="{{route('subscription',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Subscription</a>
                    </div>

                    <!-- <a href="">setting</a>
              <a href="" class="lgout-a">Logout</a> -->
                </div>
            </div>
            <div class="col-md-7 pe-0">
                <div class="blank-sec">
                <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      
                <h1 class="  fw-normal">Pricing of Reflex Subscription</h1>
      <p class="fs-5 text-muted">Here Client will give us a brief detail content about subscription</p>
    </div>
                <main>
                    
                    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    @foreach($subscription_plans as $subscription_plan)
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 bg-dark border-dark text-white">
                            <h4 class="my-0 fw-normal">{{$subscription_plan->package_name}}</h4>
                        </div>
                        <div class="card-body  ">
                            <h1 class="card-title pricing-card-title">{{$subscription_plan->package_price}}৳ </h1>
                            <h4 class="text-muted fw-light">/ {{$subscription_plan->duration}} month</h4>

                            <ul class="list-unstyled list-group mt-3 mb-1 justify-content-left">
                            <li class="list-group-item text-left "><i class="fa-solid fa-check pe-3"></i>asd aeqwe afbfdgh</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>qweqw laskd qweqw asd</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>pocvx mzqwe zxcuopasd</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>asdmqlw isgreat asdoqipwe</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-dark PackageID" value="{{$subscription_plan->id}}">
                                Buy This
                            </button>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 bg-dark border-dark text-white">
                            <h4 class="my-0 fw-normal">Package - 02</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                2000৳ 
                            </h1>
                            <h4 class="text-muted fw-light">/ 3 month</h4>
                            <ul class="list-unstyled list-group mt-3 mb-1 justify-content-left">
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>asd aeqwe afbfdgh</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>qweqw laskd qweqw asd</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>pocvx mzqwe zxcuopasd</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>asdmqlw isgreat asdoqipwe</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-dark">Buy This</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 bg-dark border-dark text-white">
                            <h4 class="my-0 fw-normal">Package - 03</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                4000৳ 
                            </h1>
                            <h4 class="text-muted fw-light">/ 6 month</h4>
                            <ul class="list-unstyled list-group mt-3 mb-1 justify-content-left">
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>asd aeqwe afbfdgh</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>qweqw laskd qweqw asd</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>pocvx mzqwe zxcuopasd</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>asdmqlw isgreat asdoqipwe</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-dark">Buy This</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 bg-dark border-dark text-white">
                            <h4 class="my-0 fw-normal">Package - 04</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">
                                6000৳ 
                            </h1>
                            <h4 class="text-muted fw-light">/ 12 month</h4>
                            <ul class="list-unstyled list-group mt-3 mb-1 justify-content-left">
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>asd aeqwe afbfdgh</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>qweqw laskd qweqw asd</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>pocvx mzqwe zxcuopasd</li>
                            <li class="list-group-item text-left"><i class="fa-solid fa-check pe-3"></i>asdmqlw isgreat asdoqipwe</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-dark">Buy This</button>
                        </div>
                        </div>
                    </div> -->
                   
                    </div>
                </main>   
                </div>
            </div>

            <!-- Admin Notice,Ad & Events start -->
            <div class="col-md-3 page-home">

                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Admin Notice Board</h4>
                    <!-- accordion -->
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Notice #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Notice #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Notice #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                    <!-- accordion end -->
                </div>
                <div class="info-box-col info-box-col-ad p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Ad</h4>


                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/ad_slider_img/ad_slider_1.jpg')}}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/ad_slider_img/ad_slider_2.png')}}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/ad_slider_img/ad_slider_3.jpg')}}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Upcoming Events</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Admin Notice,Ad & Events end -->

    <!-- Modal For C/C Chief Complaint Add -->
 <div class="modal fade " id="package" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Subscription Information 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                @if($subscription_check->d_id == $doctor_info->id)
                <form action="{{route('subscription_add')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 subscription-drug-name">
                             <input type="text" class="p-2" id="status" name="doctor_id" value="{{$doctor_info->id}}" readonly>
                            <input type="text" class="p-2" id="package_name" name="package_name" readonly>
                            <input type="text" class="p-2" id="package_price" name="package_price" readonly>
                            <input type="text" class="p-2" id="package_duration" name="package_duration" readonly>
                            <!-- <input type="text" id="status" name="status" value="0"> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn btn-sm btn-outline-blue-grey">Update</button>
                    </div>
                </form>
                
                @else
                <form action="{{route('subscription_add')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                        <input type="text" id="status" name="doctor_id" value="{{$doctor_info->id}}">
                            <input type="text" id="package_name" name="package_name">
                            <input type="text" id="package_price" name="package_price">
                            <input type="text" id="package_duration" name="package_duration">
                            <!-- <input type="text" id="status" name="status" value="0"> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn btn-sm btn-outline-blue-grey">Confirm</button>
                    </div>
                </form>
                @endif
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

    <!-- main end -->
    @include('include.footer')
    <script>
        $(document).ready(function(){
            $(document).on('click', '.PackageID',function(){
                var packageId = $(this).val();
                alert(packageId);
                $("#package").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/subscription_info/"+packageId,
                    success: function(response){
                        console.log(response.subscription_info);
                        $('#package_name').val(response.subscription_info.package_name);
                        $('#package_price').val(response.subscription_info.package_price);
                        $('#package_duration').val(response.subscription_info.duration);
                    }
                });
            });
        });

    </script>
