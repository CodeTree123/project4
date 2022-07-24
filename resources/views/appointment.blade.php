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
    <div class="header py-2 mb-3 shadow">
        <div class="container-fluid my-2">
            <div class="row align-items-center">
                <!--logo & title start-->
                <div class="col-md-5">
                    <a class="d-flex align-items-center logo" href="{{route('doctor')}}">
                        <!-- <img class="logo" src="img/Logo.png" alt="Logo"> -->
                        <img class="logo" src="{{asset ('assets/img/reflex_logo.png')}}" alt="Logo">

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
                                <ul class="navbar-nav fs-4 pe-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active text-bg-blue-grey" aria-current="page" href="{{route('doctor')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-bg-blue-grey " href="#">Inventory</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-bg-blue-grey" href="#">Shop</a>
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
                <div class="col-md-3">
                    <nav class="navbar navbar-expand-lg navbar-light p-0 ">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">  
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-outline-blue-grey dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                              My Profile 
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dropdown-item" href="{{route('profile_edit',[$doctor_info->id ?? 0])}}">
                                                    Edit Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{route('logout')}}">
                                                 Log Out
                                                </a>
                                            </li> 
                                        </ul>
                                    </div> 
                            </div>
                        </div>
                    </nav>
                </div>
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
        <table class="table table-bordered mt-4 text-center">
                        <thead>
                            <tr>
                                <th class="">Patient Id</th>
                                <th class="">Appointment Date</th>
                                <th class="">Appointment Time</th>
                                <th class="">Status</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointment as $a)
                            <tr>
                                <td>{{$a->p_id}}</td>
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
                                    <a class="crud-btns" href="#" data-bs-toggle="modal" data-bs-target="#patitentDelete">
                                         <i class="fa-solid fa-trash"></i>
                                    </a>
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
      
       <div class="info-box-col p-2 mb-3">
          <h4 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Admin Notice Board</h4>
       </div>
       <div class="info-box-col p-2 mb-3">
        <h4 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Ad</h4>
       </div>
       <div class="info-box-col p-2 mb-3">
          <h4 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Upcoming Events</h4>
       </div>
     </div>
       <!-- body part 3 end -->

    </div>
  </div>
  <!-- body end-->

 
  @include('include.footer')