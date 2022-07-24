@include('include.header') 
    <!-- main start -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-2 pe-0">
                <div class="profile blue-grey-border-thin">
                    <div class="complete">
                        <div class="p-header">
                            <!-- <img src="img/banner.jpg" class="cover"> -->
                            @if($doctor_info->p_image == null)
                            <img src="{{ asset('assets/img/profile.png')}}" class="doctor-profile my-4">
                            @else
                            <img src="{{url('/uploads/doctor/'.$doctor_info->p_image)}}" class="doctor-profile my-4">
                            @endif

                            <h2 class="mb-2">{{$doctor_info->fname." ".$doctor_info->lname}}</h2>
                            <p class="mb-2">Dental Consulatant of the Royal <br>Dental</p>
                            <!-- <a href="#_" class="btns btn-outline-blue-grey  mb-2">This Month</a> -->
                            <p class="mb-2">SMS Remaining : 50</p>
                            <p class="mb-2">Buy SMS : 50</p>

                        </div>
                    </div>
                </div>
                <div class="profile blue-grey-border-thin">
                    <div class="d-flex justify-content-evenly my-2   ">
                        <a href="{{route('doctor_profile_setting',[$doctor_info->id])}}" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Setting">
                            <i class="fa-solid fa-gear fa-xl"  ></i>
                        </a>
                        <a  href="{{route('profile_edit',[$doctor_info->id ?? 0])}}" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Profile">
                            <i class="fa-solid fa-user fa-xl"></i>
                        </a>
                        <a  href="{{route('logout')}}" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout">
                            <i class="fa-solid fa-power-off fa-xl"></i>
                        </a>
                    </div>
                </div>
                <div class="profile blue-grey-border-thin py-2">
                    <!-- <h3>Treatment Plans</h3> -->
                    <div class="complete">
                    @if($subscription_check->status == 1)
                        <a href="{{route('patient_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Patient List</a>
                        <a href="{{route('appointment_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Appointment</a>
                        <!-- <a href="#" class="btns btn-outline-blue-grey my-2">Income/Expence</a> -->
                        <a href="{{route('subscription',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Subscription</a>
                    @else
                    <!-- <a href="#" class="btns btn-outline-blue-grey my-2">Patient List</a> -->
                        <button type="button" class="btns btn-outline-blue-grey my-2 border-0" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Need To Subscribe" data-bs-custom-class="beautifier text-danger">Patient List</button>
                        <!-- <a href="#" class="btns btn-outline-blue-grey my-2">Appointment</a> -->
                        <button type="button" class="btns btn-outline-blue-grey my-2 border-0" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Need To Subscribe" data-bs-custom-class="beautifier text-danger">Appointment</button>
                        <!-- <a href="#" class="btns btn-outline-blue-grey my-2">Income/Expence</a> -->
                        <a href="{{route('subscription',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Subscription</a>
                    @endif
                    </div>

                    <!-- <a href="">setting</a>
              <a href="" class="lgout-a">Logout</a> -->
                </div>
            </div>
            <div class="col-md-7 pe-0">
                <div class="blank-sec dental_bg">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      
                <h1 class="  fw-bold">ReflexDN</h1>
                <h1 class="text-bg-blue-grey">Choose a plan</h1> 
    </div>
                <main>

                <form action="{{route('subscription_add_redeem')}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="d-flex justify-content-center mb-3">
                        <input type="hidden" id="status" name="doctor_id" value="{{$doctor_info->id}}">
                        
                        <input type="hidden" name="package_name" class="subscription_info ms-2" value="Redeem Code">
                        
                        
                            <!-- <input type="text" id="package_duration" name="package_duration" class="subscription_info ms-2" style="width: 20px;" readonly>
                                <input type="text" id="package_duration_types" name="package_duration_types" class="subscription_info" readonly> -->
                       
                        <input type="hidden" name="package_price" class="subscription_info ms-2" value="0">
                    
                        <div class="d-flex  bg-blue-grey rounded-pill p-2 m-2 ">

                            <input class="form-control " list="list" id="redeem_code" placeholder="Redeem Code" name="redeem_code" style="width:100%;">
                            
                            <button type="submit" class="btn btn-sm btn btn-sm btn-light rounded-pill">Activate</button>
                        </div>
                        
                    </div>
                </form>
                    <div class="container p-0">
                    <div class="row   mb-3 text-center mx-1 px-1 ">
                    @foreach($subscription_plans as $subscription_plan)
                    <div class="col-xxl-3 col-xl-3 col-lg-3 px-1">
                        <div class=" bg-blue-grey card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 blue-grey-border text-white">
                            <h4 class="">Save {{$subscription_plan->descount}}%</h4>
                        </div>
                        <div class="card-body bg-white mx-1 p-0 py-3"> 
                        <h6 class="my-0 fw-normal">{{$subscription_plan->package_name}}</h6>

                            <h3 class="text-dark fw-bold"> {{$subscription_plan->duration." ".$subscription_plan->duration_types}}</h3>
                            <p class="fw-bold text-dark   pricing-card-title py-3">Basic Price - {{$subscription_plan->basic_price}} ৳ </p>

                            <h5 class="fw-bold text-bg-blue-grey  pricing-card-title py-3">Discounted Price  <br>
                                 <span class="fw-bolder  fs-3 ">
                                 ৳ {{$subscription_plan->package_price}}
                            </span>  
                        </h5>

                            <p class=" fw-bold text-dark  pricing-card-title">Save
                            {{$subscription_plan->saved_price}}৳ </p>
                            
                        </div> 
                            <div class="d-flex">
                                <button type="button" class="w-100 btn btn-lg   PackageID me-1" value="{{$subscription_plan->id}}">
                                    <span class="fw-bolder text-white fs-3">Buy Now</span>
                                </button>
                                <!-- <button type="button" class="w-100 btn btn-lg btn-outline-dark PackageID ms-1" value="{{$subscription_plan->id}}">
                                    Try This
                                </button> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                       <div class="d-flex justify-content-end align-items-center  ">
                       <p class=" bg-white py-3 ps-2">We Accept Only
                        </p>
                        <img class=" logo" src="{{asset ('assets/img/bkash_logo.png')}}" alt="Logo">
                        
                       </div>
                   
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
                @if($subscription_check->status == 1)
                <!-- <form action="{{route('subscription_add')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 subscription-drug-name">
                             <input type="text" class="p-2" id="status" name="doctor_id" value="{{$doctor_info->id}}" readonly>
                            <input type="text" class="p-2" id="package_name" name="package_name" readonly>
                            <input type="text" class="p-2" id="package_price" name="package_price" readonly>
                            <input type="text" class="p-2" id="package_duration" name="package_duration" readonly>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn btn-sm btn-outline-blue-grey">Update</button>
                    </div>
                </form> -->
                <h4>You have already Subscribe {{$subscription_check->package_name}}.</h4> 
                
                @else
                <form action="{{route('subscription_add')}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input type="hidden" id="status" name="doctor_id" value="{{$doctor_info->id}}">
                            <div class="d-flex mb-2">
                                <h6>Package:</h6>
                                <input type="text" id="package_name" name="package_name" class="subscription_info ms-2" readonly>
                            </div>
                            <div class="d-flex mb-2">
                                <h6>Duration:</h6>
                                <input type="text" id="package_duration" name="package_duration" class="subscription_info ms-2" style="width: 20px;" readonly>
                                <input type="text" id="package_duration_types" name="package_duration_types" class="subscription_info" readonly>
                            </div>
                            <div class="d-flex mb-2">
                                <h6>Price:</h6>
                                <input type="text" id="package_price" name="package_price" class="subscription_info ms-2" readonly>
                            </div>

                            <!-- <input class="form-control" list="list" id="redeem_code" placeholder="Please Enter redeem code" name="redeem_code"> -->
                            
                            
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
                // alert(packageId);
                $("#package").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/subscription_info/"+packageId,
                    success: function(response){
                        console.log(response.subscription_info);
                        $('#package_name').val(response.subscription_info.package_name);
                        $('#package_price').val(response.subscription_info.package_price);
                        $('#package_duration').val(response.subscription_info.duration);
                        $('#package_duration_types').val(response.subscription_info.duration_types);
                    }
                });
            });
        });

    </script>
    <script>
        // var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        // var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        // return new bootstrap.Tooltip(tooltipTriggerEl)
        // })

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
