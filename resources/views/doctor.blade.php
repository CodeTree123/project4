
@include('include.header')
<title>Doctor blade</title>
    <!-- main start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 pe-0">
                <div class="profile blue-grey-border-thin">
                    
                <h6 class="   p-2 mb-1 d-flex justify-content-center bg-blue-grey custom-border-radius">Doctor's Profile</h6>
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
                        @if($subscription->status == 1)
                        <a href="{{route('patient_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Patient List</a>
                        <a href="{{route('appointment_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Appointment</a>
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
                <div class="blank-sec ">
            <h6 class="   p-2 mb-1 d-flex justify-content-center bg-blue-grey custom-border-radius">Exclusives</h6>
                    <!-- slider -->
                    <div id="carouselExampleSlidesOnly" class="carousel slide mx-3 mb-3" data-bs-ride="carousel">
                    
                        <div class="carousel-inner  blue-grey-border "> 

                            <div class="carousel-item active">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                     
                                        <div class="card slider-card-body blue-grey-border-thin">
                                            
                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 1</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body blue-grey-border-thin">
                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 2</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body blue-grey-border-thin">
                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 3</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card slider-card-body blue-grey-border-thin">
                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 4</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body blue-grey-border-thin">
                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 5</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body blue-grey-border-thin">
                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 6</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card slider-card-body blue-grey-border-thin">
                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 7</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body blue-grey-border-thin">
                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 8</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body blue-grey-border-thin">
                                            <div class="card-body">
                                                <h5 class="card-title text-bg-blue-grey">Card title 9</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider end -->
                    <!-- Search & New Patient Start -->
                    @if($subscription->status == 1)
                    <div class="row m-0 justify-content-around">
                    <h6 class="   p-2 mb-1 d-flex justify-content-center bg-blue-grey  ">Search</h6>
                         <span class="text-danger no-paitent-error">@error('search') {{$message}} @enderror</span>
                        <div class="col-md-5 blue-grey-border py-4">
                            <form action="{{route('search',[$doctor_info->id])}}" method="POST">
                                @csrf
                                <!-- <input type="text" placeholder="Search Old Patient" name="search" class="search-input"> -->
                            <div class="d-flex my-auto">

                                <input class="form-control me-2 custom-form-control blue-grey-border-thin " type="text" placeholder="Search Old Patient" aria-label="default input example" name="search">
                                <button class="btn btn-outline-blue-grey ">Search</button>

                                
                            </div>
                               
                                

                            </form>
                        </div>
                        <div class="col-md-5 blue-grey-border ">
                        
                            <div class="new-gen-pat">
                                <!--  a tag trigger modal -->
                                <a href="" class="btn btn-outline-blue-grey text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">New Patient Registration
                                </a>
                                <!-- Modal -->
                                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <!-- Modal Header & Close btn -->
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark mb-0" id="exampleModalLabel">
                                                    New Patient Registration
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <!-- Modal Header & Close btn end -->
                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <form action="{{route('patient_info',[$doctor_info->id])}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Mobile no.</label> -->
                                                        <input type="number" name="mobile" class="form-control" placeholder="Mobile No">
                                                        <!-- <div class="form-text"></div> -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                        <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Name</label> -->
                                                        <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                                                        <!-- <div id="emailHelp" class="form-text"></div> -->
                                                    </div>
                                                        </div>
                                                        <div class="col-3">
                                                        <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Name</label> -->
                                                        <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Age">
                                                        <!-- <div id="emailHelp" class="form-text"></div> -->
                                                    </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!-- <label for="mName" class="form-label text-dark">Gender</label> -->
                                                                <select class="form-select" name="gender" aria-label="Gender">
                                                                    <option selected value="">Select gender</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                    <option value="Other">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!-- <label for="mName" class="form-label text-dark">Blood Group</label> -->
                                                                <select class="form-select" name="Blood_group" aria-label="Blood Group">
                                                                    <option selected value="">Blood Group
                                                                    </option>
                                                                    <option value="A+">A+</option>
                                                                    <option value="A-">A-</option>
                                                                    <option value="B+">B+</option>
                                                                    <option value="B-">B-</option>
                                                                    <option value="AB-">AB+</option>
                                                                    <option value="AB-">AB-</option>
                                                                    <option value="O+">O+</option>
                                                                    <option value="O-">O-</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!-- <label for="mName" class="form-label text-dark">Date of Birth</label> -->
                                                                <!-- <br> class="msform"-->
                                                                <input class="form-control" name="date" type="text" placeholder="Date of Birth">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!-- <label for="exampleInputEmail1" class="form-label text-dark">Occupation</label> -->
                                                                <input type="text" class="form-control" name="occupation" placeholder="Occupation">
                                                                <!-- <div class="form-text"></div> -->
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Address</label> -->
                                                        <input type="address" class="form-control" name="address" placeholder="Address">
                                                        <!-- <div class="form-text"></div> -->
                                                    </div>
                                                    <div class="">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Email address</label> -->
                                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                                                        <!-- <div id="emailHelp" class="form-text">We'll never share your
                                                            email with anyone else.</div> -->
                                                    </div>
                                                    <div class="mt-2">
                                                        <label for="formFile" name="image" class="form-label text-dark">Drop your
                                                            image</label>
                                                        <input class="form-control" name="image" type="file" id="formFile">
                                                    </div>
                                                    <!-- Modal Footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                        <button class="btn btn-outline-blue-grey  btn-sm">Save</button>
                                                        <!-- Modal Footer end -->
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Modal Body end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row m-0 justify-content-around">
                    </div>
                    @endif
                    <!-- Search & New Patient end-->
                    <!--Appointment Start  -->
                    <div class="Appointment-sec my-3 mx-3 blue-grey-border ">
                        <div class="Appointment-h p-2 bg-blue-grey custom-border-radius">
                            <h6 class="m-0">Today we have 6 Appointment</h6>
                        </div>
                        <!-- Appointment Status -->
                        <div class="row p-1">
                            <div class="col-md-3">
                                <div class="Appointment-details blue-grey-border-thin  d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h6 class="m-0">Hasan Mahud</h6>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-success">Done</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="Appointment-details blue-grey-border-thin  d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h6 class="m-0">Hasan Mahud</h6>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-info">Pending</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="Appointment-details blue-grey-border-thin  d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h6 class="m-0">Hasan Mahud</h6>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-info">Pending</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="Appointment-details blue-grey-border-thin  d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h6 class="m-0">Hasan Mahud</h6>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-info">Pending</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Appointment end  -->
                    <!--Patient list Start  -->
                    <!-- <div class="patient-list-col  blue-grey-border">
                        <div class="patient-list-h p-2 bg-blue-grey custom-border-radius">
                            <h6 class="m-0">Patient List</h6>
                        </div>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Day</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Saturday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sunday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                </tr>
                                <tr>
                                    <th scope="row">Monday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                    <td>Shafi</td>
                                </tr>
                                <tr>
                                    <th scope="row">tuesday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                </tr>
                                <tr>
                                    <th scope="row">Wednesday</th>
                                </tr>
                                <tr>
                                    <th scope="row">Thursday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                </tr>
                                <tr>
                                    <th scope="row">Friday</th>
                                    <td>Tom</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                    <!-- Appointment list end -->
                </div>
            </div>

            <!-- Admin Notice,Ad & Events start -->
            <div class="col-md-3 page-home">

                <div class="info-box-col mb-3 pb-1">
                    <h6 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Admin Notice Board</h6>
                    <!-- accordion -->
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Notice #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, deserunt alias distinctio provident consequuntur quos nam aliquam earum necessitatibus a soluta, aliquid quis sapiente porro ipsam nisi fugiat ducimus quia!</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Notice #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam quibusdam, nihil et magnam sunt odio quasi dolores modi ex id porro doloribus? Facilis perferendis numquam odio? Laboriosam, et? Voluptates, possimus?</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Notice #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod doloremque reiciendis laboriosam labore magnam. Voluptatum pariatur delectus, eligendi omnis incidunt quibusdam vitae accusamus maiores iusto modi ratione eum. Sit, excepturi?</div>
                            </div>
                        </div>
                    </div>
                    <!-- accordion end -->
                </div>
                <div class="info-box-col info-box-col-ad mb-3"> 
                    <h6 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Ad</h6>



                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/ad_slider_img/ad_slider_1.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/ad_slider_img/ad_slider_2.png')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/ad_slider_img/ad_slider_3.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- <div class="info-box-col mb-3">
                    <h6 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Upcoming Events</h6>

                </div> -->
            </div>
        </div>
    </div>
    <!-- Admin Notice,Ad & Events end -->

    <!-- main end -->

    @include('include.footer')
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