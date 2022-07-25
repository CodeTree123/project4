<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <link rel="icon" type="image/x-icon" href="{{asset ('assets/img/reflex_logo.png')}}"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- Bootstrap 5.1.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    
    
    
    <!--Main Style CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Prescription CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/prescription_style.css')}}"> 
    <link rel="stylesheet" href="{{ asset ('assets/css/tab.css')}}"> 
    <link rel="stylesheet" href="{{ asset ('assets/css/multiselect.css')}}">  
    <title>ReflexDN</title>


</head>

<body>
    <!-- Header Start -->
    <div class="header  mb-3 shadow">
        <div class="container-fluid pt-1">
            <div class="row align-items-center">
                <!--logo & title start-->
                
                <div class="col-md-5">
                    <a class="d-flex align-items-center logo" href="{{route('doctor')}}">
                        <!-- <img class="logo" src="img/Logo.png" alt="Logo"> -->
                        <div class="logo_container">
                          <img class="img-fluid" src="{{asset ('assets/img/reflex_logo.png')}}" alt="Logo">
                        </div>

                        <!-- <h2 class="ms-3 mb-0 logo-title">
                            Dental Office Management System
                        </h2> -->
                    </a>
                </div>
                <!--logo & title end-->

                <!--nav start-->
                @if(Session::has('loginId'))
                <div class="col-md-4">
                    <nav class="navbar navbar-expand-lg  p-0 ">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav fs-5 pe-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active text-bg-blue-grey" aria-current="page" href="{{route('doctor')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <!-- <a class="nav-link text-bg-blue-grey " href="#">Inventory</a> -->
                                        <a class="nav-link text-bg-blue-grey" href="#" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Coming Soon" data-bs-custom-class="beautifier text-danger">Inventory</a>

                                    </li>
                                    <li class="nav-item">
                                        <!-- <a class="nav-link text-bg-blue-grey" href="#">Shop</a> -->
                                        <a class="nav-link text-bg-blue-grey" href="#" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Coming Soon" data-bs-custom-class="beautifier text-danger">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-bg-blue-grey" href="#">Forum</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--nav end-->

                <!--info Bar start-->
               
                @endif
                <!--info Bar end-->
            </div>
        </div>
    </div>
    <!-- Header end -->

  <!-- body -->
  <!-- body part 1 -->
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
              <!-- <a href="#_" class="btns btn-outline-blue-grey mb-2">This Month</a> -->
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
            <a  href="{{route('patient_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Patient List</a>
            <a href="{{route('appointment_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Appointment</a>
            <!-- <a href="#" class="btns btn-outline-blue-grey my-2">Income/Expence</a> -->
            <a href="{{route('subscription',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">Subscription</a>
          </div>
          
          <!-- <a href="">setting</a>
          <a href="" class="lgout-a">Logout</a> -->
        </div>
      </div>

        <!-- body part 1 end-->
  <!-- body part 2 -->

      <div class="col-md-7 pe-0">
        <div class="blank-sec">
            <div class="d-flex justify-content-between align-items-center p-2">
                <h4>Appointment List</h4>
                <button class="btn btn-outline-blue-grey crud-btns Appointment" value="" data-bs-toggle="modal" data-bs-target="#Appointment_form">
                    <!-- <i class="fa-solid fa-pen-to-square"></i> -->
                     Set Appointment
                </button>
            </div>
        <table class="table table-bordered mt-2 text-center">
                        <thead>
                            <tr>
                                <th class="">#</th>
                                <th class="">Name</th>
                                <th class="">Mobile</th>
                                <th class="">Appointment Date</th>
                                <th class="">Appointment Time</th>
                                <th class="">Status</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointment as $key=>$a)
                            <tr>
                                <td>{{$key +1}}</td>
                                <td>{{$a->name}}</td>
                                <td>{{$a->mobile}}</td>
                                <td>{{$a->date}}</td>
                                <td>{{$a->time}}</td>
                                <td>
                                  @if($a->status == 1)
                                        <a href="#" class="btn btn-sm btn-danger my-0">Done</a>
                                    @else
                                        <a href="#" class="btn btn-sm btn-success my-0">Pending</a>
                                    @endif
                                </td>
                                <td class="d-flex justify-content-around">
                                    <button class="btn crud-btns delete-appointment" href="#" value="{{$a->id}}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
        </div>
     </div>
      <!-- body part 2 end -->
  <!-- body part 3 -->

    <!-- Admin Notice,Ad & Events start -->
     <div class="col-md-3 page-home">
      
     <div class="info-box-col mb-3">
                    <h4 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Admin Notice Board</h4>
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
                </div>       <div class="info-box-col p-2 mb-3">
        <h4 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Ad</h4>
        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/slider_img/ad_slider_1.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider_img/ad_slider_2.png')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/slider_img/ad_slider_3.jpg')}}" class="d-block w-100" alt="...">
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
       <div class="info-box-col p-2 mb-3">
          <h4 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Upcoming Events</h4>
       </div>
     </div>
       <!-- body part 3 end -->

    </div>
  </div>
  <!-- body end-->

        <!-- Modal For Appointment -->
        <div class="modal fade " id="Appointment_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Edit  Clinical Finding 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('appointment')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <input type="text" id="d_id" value = "{{$doctor_info->id}}" name="d_id">
                        <input type="text" id="p_id" value = "" name="p_id">
                        <label for="phone" class="form-label">Phone Number</label>
                        <select class="form-control custom-form-control multi" id="phone" name="" aria-label="Default select example" style="width:100%;">
                                <option value="">Nothing To Select</option>
                                @foreach($patient_list as $t_p)
                                    <option value="{{$t_p->mobile}}">{{$t_p->mobile}}</option>
                                @endforeach
                        </select>
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" >
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" class="form-control" id="time" name="time">
                        <label for="patient_id" class="form-label">Patient ID</label>
                        <input type="text" class="form-control" id="patient_id" name="p_id_later">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-outline-blue-grey">Appointment</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

     <!-- Modal For Delete Appointment -->
     <div class="modal fade " id="del-Appointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete Appointment Information
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{route('delete_appointment')}}" method="POST" >
                        @csrf
                        @method('delete')
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-Appointment-id" name="deletingId">
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-blue-grey  btn-sm">Yes,Delete</button>
                        <!-- Modal Footer end -->
                        </div>
                    </form>
                </div>
                <!-- Modal Body end -->
            </div>
        </div>
    </div>
 <!-- Modal end -->

 
  @include('include.footer')

   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script>
    $(".multi").select2({
        dropdownParent: $("#Appointment_form")
    });
    $(document).ready(function(){

    $('#phone').change(function(){
        var mobile = $(this).val();
        var d_id = $('#d_id').val();
        //  alert(d_id);
         $.ajax({
            type:"GET",
            url: "/action/"+d_id+"/"+mobile,
            success: function(response){
                // console.log(response.p_info);
                $('#p_id').val(response.p_info.id)
                // $('#patient_id').val(response.p_info.patient_id);
                $('#name').val(response.p_info.name);
                // $('#phone').val(response.p_info.mobile);
            }
        });

    });
    $(document).on('click', '.delete-appointment',function(){
                var deleteDoctorId = $(this).val();
                // alert(deleteCCId);
                $("#del-Appointment").modal('show');
                $('#del-Appointment-id').val(deleteDoctorId);
      });
});

</script>