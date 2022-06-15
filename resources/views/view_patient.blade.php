<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>

    <link rel="icon" type="image/x-icon" href="{{asset ('assets/img/reflex_logo.png')}}"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
   
    <!-- Bootstrap 5.1.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

 <!-- Style CSS -->
 <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
</head>

<body>
    <!-- Header Start -->
    <div class="header py-2 mb-3">
        <div class="container-fluid my-2">
            <div class="row align-items-center">
                <!--logo & title start-->
                <div class="col-md-5">
                    <a class="d-flex align-items-center logo" href="{{route('doctor')}}">
                    <img class="logo" src="{{asset ('assets/img/reflex_logo.png')}}" alt="Logo">

                        <!-- <h2 class="ms-3 mb-0 logo-title">
                            Dental Office Management System
                        </h2> -->
                    </a>
                </div>
                <!--logo & title end-->

                <!--nav start-->
                <div class="col-md-4">
                    <nav class="navbar navbar-expand-lg navbar-light p-0 ">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav fs-4 pe-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{route('doctor')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Inventory</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Forum</a>
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
                                <ul class="navbar-nav fs-5 pe-auto ms-5">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">My Profile
                                        <i class="fa-solid fa-gear"></i></a>
                                        <ul class="dropdown-menu">

                                            <li><a class="dropdown-item" href="{{route('profile_edit',[$doctor_info->id])}}">Edit Profile</a></li>
                                            <li><a class="dropdown-item" href="{{route('logout')}}">Log Out</a></li>

                                        </ul>
                                        </a>

                                    </li>

                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-solid fa-gear"></i></a>
                                        <ul class="dropdown-menu">

                                            <li><a class="dropdown-item" href="{{route('profile_edit',[$doctor_info->id])}}">Edit Profile</a></li>
                                            <li><a class="dropdown-item" href="#">Log Out</a></li>

                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--info Bar end-->
            </div>
        </div>
    </div>
    <!-- Header end -->
    <!-- main start -->
    <div class="container-fluid">
        <div class="row">
            <!-- Profile start -->
            <div class="col-md-3 pe-0">
                <div class="profile blue-grey-border-thin   ">
                    <div class="complete">
                        <div class="p-header">
                            <!-- <img src="img/banner.jpg" class="cover"> -->
                            <img src="{{ asset('assets/img/profile.png')}}" class="doctor-profile my-4">
                            <!-- <img src="{{url('/uploads/patient/'.$patient->image)}}" class="doctor-profile my-4"> -->
                            <!-- <i class="fa-solid fa-pen-to-square"></i> -->
                            <h2 class="mb-2">{{$patient->name}}</h2>
                        </div>
                        <div class="Patient-personal-info">
                            <div class="row">
                                <div class="col-8 text-start">Patient ID: {{$patient->id}}</div>
                                <div class="col-4 text-start">Age: {{$patient->age}}</div>
                                <div class="col-6 text-start pe-0">Gender: {{$patient->gender}}</div>
                                <div class="col-6 text-start ps-0">Blood Group: {{$patient->Blood_group}}</div>
                                <div class="col-12 text-start">Date of Birth: {{$patient->date}}</div>


                                <div class="col-12 text-start">Mobile: {{$patient->mobile}}</div>

                                <div class="col-12 text-start">Occupation: {{$patient->occupation}}</div>
                                <div class="col-12 text-start">Address: {{$patient->address}}</div>
                                <div class="col-12 text-start">Email: {{$patient->email}}</div>

                            </div>
                        </div>
                        <div class="Patient-info">
                            <div class="row">
                                <div class="col-12 text-start">BP :{{$patient->bp_high}} / {{$patient->bp_low}}</div>
                                <div class="col-12 text-start">Heart Disease: {{$patient->Heart_Disease}}</div>
                                <div class="col-12 text-start">Diabetic: {{$patient->Diabetic}}</div>
                                <div class="col-12 text-start">Helpatics: {{$patient->Helpatics}}</div>
                                <div class="col-12 text-start">Bleeding disorder: {{$patient->Bleeding_disorder}}</div>
                                <div class="col-12 text-start">Allergy: {{$patient->Allergy}}</div>
                                <div class="col-12 text-start">Pregnant/Lactating: {{$patient->Pregnant}}</div>
                                <div class="col-12 text-start">Other: {{$patient->other}}</div>
                                <!-- <button type="button" class="btn btn-secondary btn-sm">Small button</button> -->
                                    <!--  a tag trigger modal -->
                                <a href="" class="btns btn-outline-blue-grey" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Add/Edit
                                    </a>
                                <div class="col-12 text-start d-flex justify-content-center p-edit mt-2">
                                   
                                    
                                    <!-- Modal -->
                                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content ">
                                                <!--bg-opacity-50-->
                                                <!-- Modal Header & Close btn -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title " id="exampleModalLabel">
                                                        Edit Patient Info.
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <!-- Modal Header & Close btn end -->
                                                <!-- Modal Body -->

                                                <div class="modal-body">
                                                    <form action="{{url('/update/patient',$patient->id)}}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="row">
                                                            <!-- 1 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="exampleInputEmail1" class="form-label ">BP</label>
                                                                <div class="d-flex">
                                                                    <input type="number" name="bp_high" class="form-control custom-form-control me-3">
                                                                    <h3 class="m-0">/</h3>
                                                                    <input type="number" name="bp_low" class="form-control custom-form-control ms-3">
                                                                </div>

                                                                <!-- <div class="form-text"></div> -->
                                                            </div>
                                                            <!-- 2 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label  ">Bleeding discorder</label>
                                                                <select class="form-select" name="Bleeding_disorder" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 3 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label  ">Heart Disease</label>
                                                                <select class="form-select" name="Heart_Disease" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 4 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label ">Allergy</label>
                                                                <select class="form-select" name="Allergy" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 5 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label ">Diabetic</label>
                                                                <select class="form-select" name="Diabetic" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 6 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label ">Pregnant/Lactating</label>
                                                                <select class="form-select" name="Pregnant" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 7 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label ">Helpatics</label>
                                                                <select class="form-select" name="Helpatics" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 8 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="exampleInputEmail1" class="form-label ">Other</label>
                                                                <input type="text" name="other" class="form-control custom-form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                                            <button class="btn btn-outline-blue-grey ">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- Modal Body end -->
                                                <!-- Modal Footer -->

                                                <!-- Modal Footer end -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal end -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="profile blue-grey-border-thin py-2">
                    <!-- <h3>Treatment Plans</h3> -->
                    <div class="complete">

                        <a href="#" class="btns btn-outline-blue-grey my-2">Treatment Plans</a>
                        <a href="{{route('appointment')}}" class="btns btn-outline-blue-grey my-2">Appointment</a>
                        <a href="#" class="btns btn-outline-blue-grey my-2">Prescription</a>
                        <a href="#" class="btns btn-outline-blue-grey my-2">Billing</a>
                    </div>

                    <!-- <a href="">setting</a>
              <a href="" class="lgout-a">Logout</a> -->
                </div>
            </div>
            <!-- Profile end -->
            <!-- Mid Section start -->
            <div class="col-md-6 pe-0">
                <div class="blank-sec">
                    <!-- teeth chart start -->
                    <div class="chart-teeth">
                        <div class="row mx-0">
                            <div class="col-md-6 p-0">
                                <div class="top-area1" id="top-area-top">
                                    <input type="radio" name="tooth-selector" id="radio1">
                                    <label for="radio1">Permanent Teeth</label>
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="top-area2" id="sec-col-top">
                                    <input type="radio" name="tooth-selector" id="radio2">
                                    <label for="radio2">Deciduous Teeth</label>
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-12 px-0">
                                <div class="row mx-0" id="permanent">
                                    <!-- Upper Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Right</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>1</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/1TMR.png')}}" alt="" id="18">
                                                        <p>18</p>
                                                    </li>
                                                    <li>
                                                        <p>2</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/2SMR.png')}}" alt="" id="17">
                                                        <p>17</p>
                                                    </li>
                                                    <li>
                                                        <p>3</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/3FMR.png')}}" alt="" id="16">
                                                        <p>16</p>
                                                    </li>
                                                    <li>
                                                        <p>4</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/4SPMR.png')}}" alt="" id="15">
                                                        <p>15</p>
                                                    </li>
                                                    <li>
                                                        <p>5</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/5FPMR.png')}}" alt="" id="14">
                                                        <p>14</p>
                                                    </li>
                                                    <li>
                                                        <p>6</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/6CR.png')}}" alt="" id="13">
                                                        <p>13</p>
                                                    </li>
                                                    <li>
                                                        <p>7</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/7LIR.png')}}" alt="" id="12">
                                                        <p>12</p>
                                                    </li>
                                                    <li>
                                                        <p>8</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/8CIR.png')}}" alt="" id="11">
                                                        <p>11</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Upper Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>9</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/9CIL.png')}}" alt="" id="21">
                                                        <p>21</p>
                                                    </li>
                                                    <li>
                                                        <p>10</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/10LIL.png')}}" alt="" id="22">
                                                        <p>22</p>
                                                    </li>
                                                    <li>
                                                        <p>11</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/11CL.png')}}" alt="" id="23">
                                                        <p>23</p>
                                                    </li>
                                                    <li>
                                                        <p>12</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/12FPML.png')}}" alt="" id="24">
                                                        <p>24</p>
                                                    </li>
                                                    <li>
                                                        <p>13</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/13SPML.png')}}" alt="" id="25">
                                                        <p>25</p>
                                                    </li>
                                                    <li>
                                                        <p>14</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/14FML.png')}}" alt="" id="26">
                                                        <p>26</p>
                                                    </li>
                                                    <li>
                                                        <p>15</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/15SML.png')}}" alt="" id="27">
                                                        <p>27</p>
                                                    </li>
                                                    <li>
                                                        <p>16</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/16TML.png')}}" alt="" id="28">
                                                        <p>28</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right">
                                            <h4>Lower Right</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>48</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/48TMR.png')}}" alt="" id="48">
                                                        <p>32</p>
                                                    </li>
                                                    <li>
                                                        <p>47</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/47SMR.png')}}" alt="" id="47">
                                                        <p>31</p>
                                                    </li>
                                                    <li>
                                                        <p>46</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/46FMR.png')}}" alt="" id="46">
                                                        <p>30</p>
                                                    </li>
                                                    <li>
                                                        <p>45</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/45SPMR.png')}}" alt="" id="45">
                                                        <p>29</p>
                                                    </li>
                                                    <li>
                                                        <p>44</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/44FPMR.png')}}" alt="" id="44">
                                                        <p>28</p>
                                                    </li>
                                                    <li>
                                                        <p>43</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/43CR.png')}}" alt="" id="43">
                                                        <p>27</p>
                                                    </li>
                                                    <li>
                                                        <p>42</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/42LIR.png')}}" alt="" id="42">
                                                        <p>26</p>
                                                    </li>
                                                    <li>
                                                        <p>41</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/41CIR.png')}}" alt="" id="41">
                                                        <p>25</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right">
                                            <h4>Lower Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>31</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/31CIL.png')}}" alt="" id="31">
                                                        <p>24</p>
                                                    </li>
                                                    <li>
                                                        <p>32</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/32LIL.png')}}" alt="" id="32">
                                                        <p>23</p>
                                                    </li>
                                                    <li>
                                                        <p>33</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/33CL.png')}}" alt="" id="33">
                                                        <p>22</p>
                                                    </li>
                                                    <li>
                                                        <p>34</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/34FPML.png')}}" alt="" id="34">
                                                        <p>21</p>
                                                    </li>
                                                    <li>
                                                        <p>35</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/35SPML.png')}}" alt="" id="35">
                                                        <p>20</p>
                                                    </li>
                                                    <li>
                                                        <p>36</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/36FML.png')}}" alt="" id="36">
                                                        <p>19</p>
                                                    </li>
                                                    <li>
                                                        <p>37</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/37SML.png')}}" alt="" id="37">
                                                        <p>18</p>
                                                    </li>
                                                    <li>
                                                        <p>38</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/38TML.png')}}" alt="" id="38">
                                                        <p>17</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                </div>
                                <div class="row mx-0" id="deciduous">
                                    <!-- Upper Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Right</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>A</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/4SPMR.png')}}" alt="" id="A">
                                                        <p>15</p>
                                                    </li>
                                                    <li>
                                                        <p>B</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/5FPMR.png')}}" alt="" id="B">
                                                        <p>14</p>
                                                    </li>
                                                    <li>
                                                        <p>C</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/6CR.png')}}" alt="" id="C">
                                                        <p>13</p>
                                                    </li>
                                                    <li>
                                                        <p>D</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/7LIR.png')}}" alt="" id="D">
                                                        <p>12</p>
                                                    </li>
                                                    <li>
                                                        <p>E</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/8CIR.png')}}" alt="" id="E">
                                                        <p>11</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Upper Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>F</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/9CIL.png')}}" alt="" id="F">
                                                        <p>21</p>
                                                    </li>
                                                    <li>
                                                        <p>G</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/10LIL.png')}}" alt="" id="G">
                                                        <p>22</p>
                                                    </li>
                                                    <li>
                                                        <p>H</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/11CL.png')}}" alt="" id="H">
                                                        <p>23</p>
                                                    </li>
                                                    <li>
                                                        <p>I</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/12FPML.png')}}" alt="" id="I">
                                                        <p>24</p>
                                                    </li>
                                                    <li>
                                                        <p>J</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/13SPML.png')}}" alt="" id="J">
                                                        <p>25</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right">
                                            <h4>Lower Right</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>45</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/45SPMR.png')}}" alt="" id="T">
                                                        <p>T</p>
                                                    </li>
                                                    <li>
                                                        <p>44</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/44FPMR.png')}}" alt="" id="S">
                                                        <p>S</p>
                                                    </li>
                                                    <li>
                                                        <p>43</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/43CR.png')}}" alt="" id="R">
                                                        <p>R</p>
                                                    </li>
                                                    <li>
                                                        <p>42</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/42LIR.png')}}" alt="" id="Q">
                                                        <p>Q</p>
                                                    </li>
                                                    <li>
                                                        <p>41</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/41CIR.png')}}" alt="" id="P">
                                                        <p>P</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right">
                                            <h4>Lower Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>31</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/31CIL.png')}}" alt="" id="O">
                                                        <p>O</p>
                                                    </li>
                                                    <li>
                                                        <p>32</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/32LIL.png')}}" alt="" id="N">
                                                        <p>N</p>
                                                    </li>
                                                    <li>
                                                        <p>33</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/33CL.png')}}" alt="" id="M">
                                                        <p>M</p>
                                                    </li>
                                                    <li>
                                                        <p>34</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/34FPML.png')}}" alt="" id="L">
                                                        <p>L</p>
                                                    </li>
                                                    <li>
                                                        <p>35</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/35SPML.png')}}" alt="" id="K">
                                                        <p>K</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                </div>
                                <!-- Tooth Tools Function Start -->
                                <div class="tool-out">
                                    <form action="{{url('/view/patient',$patient->id)}}" method="post">
                                        @csrf
                                        <div class="tools-h">
                                            <div class="row align-items-center">
                                                <div class="col-5 d-flex align-items-center">
                                                    <h3 class="pe-0">Tooth No.</h3>
                                                    <input type="text" id="tooth_no" name="tooth_no" value="" readonly/>
                                                </div>
                                                <div class="col-5">
                                                    <!-- <h3 name="tooth_side">Upper Right</h3> -->
                                                    <input type="text" id="tooth_side" name="tooth_side" value="" readonly/>
                                                </div>
                                                <div class="col-2 text-end">
                                                    <i class="fa-solid fa-xmark" id="close-btn"></i>
                                                </div>
                                            </div>
                                        </div> 
                                        <h5 class="d-flex justify-content-between">C/C Chife Complaint 
                                            <div>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#chife_Complaint_Add" >
                                                    <i class="bi bi-plus-circle"></i>
                                                </a>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#chife_Complaint" >
                                                    <i class="bi bi-card-list"></i>
                                                </a>
                                            </div>
                                        </h5>
                                        <select class="form-control custom-form-control multi" name="pc_c[]" aria-label="Default select example" multiple style="width:100%;">
                                            @foreach($c_cs as $c_c)
                                            <option value="{{$c_c -> name}}">{{$c_c -> name}}</option>
                                            @endforeach
                                        </select>
                                        <ul>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                        </ul>
                                        <h5 class="d-flex justify-content-between">C/F Clinical Findings
                                            <div>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Clinical_Finding_Add" >
                                                    <i class="bi bi-plus-circle"></i>
                                                </a>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Clinical_Findings" >
                                                    <i class="bi bi-card-list"></i>
                                                </a>
                                            </div>
                                        </h5>
                                        <select class="form-control custom-form-control multi" name="pc_f[]" aria-label="Default select example" multiple style="width:100%;">
                                            @foreach($c_fs as $c_f)
                                            <option value="{{$c_f -> name}}">{{$c_f -> name}}</option>
                                            @endforeach
                                        </select>
                                        <ul>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                        </ul>
                                        <h5 class="d-flex justify-content-between">Investigation
                                            <div>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Investigation_Add" >
                                                    <i class="bi bi-plus-circle"></i>
                                                </a>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Investigation" >
                                                    <i class="bi bi-card-list"></i>
                                                </a>
                                            </div>
                                        </h5>
                                        <select class="form-control custom-form-control multi" name="p_investigation[]" aria-label="Default select example" multiple style="width:100%;">
                                            @foreach($investigations as $investigation)
                                            <option value="X-ray">{{$investigation->name}}</option>
                                            @endforeach
                                        </select>
                                        <ul>
                                            <li>X-ray</li>
                                            <li>OPG</li>
                                            <li>CBCT</li>
                                        </ul>

                                        <h5 class="d-flex justify-content-between">T/P Treatment Plans
                                            <div>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Treatment_Plan_Add" >
                                                    <i class="bi bi-plus-circle"></i>
                                                </a>
                                                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Treatment_Plans" >
                                                    <i class="bi bi-card-list"></i>
                                                </a>
                                            </div>
                                        </h5>
                                        <select class="form-control custom-form-control multi" name="pt_p[]" aria-label="Default select example" style="width:100%;">
                                            @foreach($t_ps as $t_p)
                                            <option value="{{$t_p -> name}}">{{$t_p -> name}}</option>
                                            @endforeach
                                        </select>
                                        <ul>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                            <li>Pain</li>
                                            <li>Check-up</li>
                                        </ul>
                                        <div class="d-flex">
                                            <button class="btn btn-primary">Submit</button>
                                            <input type="text" id="tooth_type" name="tooth_type" value="" readonly/>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                            <!-- Tooth Tools Function Start -->

                            <!-- Teeth Button -->
                            <div class="col-md-12 teeth-bottom px-0">
                                <div class="teeth-btn">
                                    <a>Full Mouth</a>
                                    <a>Multi Teeth</a>
                                </div>
                                <!-- <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck1">Full Mouth</label>

                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck2">Multi Teeth</label> -->

                                <!-- <button>Multi Teeth</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- teeth chart end -->
                    <!-- Treatment Card start -->
                    <div class="treatment-cards my-3">
                        <div class="treatment-cards-h bg-blue-grey custom-border-radius p-2">
                            <h4 class="m-0 ">Treatment Plans For {{$patient->name}}</h4>
                        </div>
                        <!-- Treatment Plans Status -->
                        <div class="row mx-0">
                            @foreach($treatment_infos as $treatment_info)
                            <div class="col-md-4 p-0 pt-3 pe-1">
                                <div class="treatment-card d-flex flex-column flex-wrap">
                                    <div class="treatment-card-details">
                                        <h4 class="m-0">{{$treatment_info->tooth_side}} Tooth No: {{$treatment_info->tooth_no}}</h4>
                                        
                                       
                                        <p class="fw-bold m-0 ms-1 mt-1">{{$treatment_info->treatment_plans}}</p>
                                        <p class="m-0 ms-1">Start : 04/03/2021</p>
                                        <p class="m-0 ms-1">Status : <span class="text-success">Pending</span></p>
                                    </div>
                                    <div class="treatment-card-btn">
                                        <a href="{{route('treatments',[$doctor_info,$patient->id,$treatment_info->id,$treatment_info->treatment_plans])}}" class="py-1" style="font-size: 20px;color: #000;">Enter</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Treatment Card end -->

                </div>
            </div>
            <!-- Mid Section end -->

            <!-- Prescription,Ad & Events start -->
            <div class="col-md-3 page-home">

                <!-- We have info-box-col-1 for not fixed height -->
                <div class="info-box-col text-center p-2 mb-3">
                    <h4 class="text-center bg-blue-grey custom-border-radius py-2">Previous Steps List</h4>
                    <div class="accordion accordion-flush mt-2" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Notice #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-box-col p-2 mb-3">
                    <h4 class="text-center bg-blue-grey custom-border-radius py-2">Previous Prescription</h4>
                    <div class="accordion accordion-flush mt-2" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Notice #1
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-box-col p-2 mb-3 d-flex flex-column">
                    <h4 class=" text-center bg-blue-grey custom-border-radius py-2">Post to Forums</h4>
                    <button type="button" class="btn btn-outline-info text-dark mt-2 mb-2 btn-lg  ">Post</button>
                    <!-- <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse1" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Notice #1
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
    </div>
    <!-- Admin Notice,Ad & Events end -->

    <!-- main end -->
    <!-- footer -->
    <div class="footer p-3">
        <div class="row container-fluid">
            <p class="text-center my-auto">
                © Developed By CODETREE
            </p>
        </div>
    </div>
    <!-- footer end-->

 <!-- Modal For C/C Chife Complaint List -->
 <div class="modal fade " id="chife_Complaint" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    C/C Chife Complaint List
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- C/C Chife Complaint List-->
                <table class="table table-bordered mt-4 text-center">
                    <thead>
                        <tr>
                            <th class="">Serial No</th>
                            <th class="">chife Complaints</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lc_cs as $key=>$lcc)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$lcc->name}}</td>
                            <td class="d-flex justify-content-around">
                                <button type="button" class="crud-btns CC_editbtn" href="" value="{{$lcc->id}}" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="crud-btns delete-cc" href="#" value="{{$lcc->id}}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--C/C Chife Complaint list end -->
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
 <!-- Modal For C/C Chife Complaint Add -->
 <div class="modal fade " id="chife_Complaint_Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add chife Complaint 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('chife_complaint')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" placeholder="Enter New chife Complaint" name="cc_name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-black">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
 <!-- Modal For C/C Chife Complaint update -->
 <div class="modal fade " id="chife_Complaint_Update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Edit chife Complaint 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('update_chife_complaint')}}" method="post">
                    @csrf
                    @method('PUT')

                    <input type="hidden" id="CCId" name="c_c_id"/>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" id="c_c_name" placeholder="Enter New chife Complaint" name="cc_name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-black">Update</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
 <!-- Modal For Delete C/C Chife Complaint -->
    <div class="modal fade " id="del-CC" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete C/C Chife Complaint
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{route('delete_chife_complaint')}}" method="POST" >
                        @csrf
                        @method('delete')
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-cc-id" name="deletingId">
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

 <!-- Modal For C/F Clinical Findings List -->
 <div class="modal fade " id="Clinical_Findings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    C/F Clinical Findings List
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- C/C Chife Complaint List-->
                <table class="table table-bordered mt-4 text-center">
                    <thead>
                        <tr>
                            <th class="">Serial No</th>
                            <th class="">Clinical Findings</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lc_fs as $key=>$lcf)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$lcf->name}}</td>
                            <td class="d-flex justify-content-around">
                                <button class="crud-btns CF_editbtn" href="" value= "{{$lcf->id}}" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="crud-btns delete-cf" href="#" value= "{{$lcf->id}}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--C/C Chife Complaint list end -->
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
  <!-- Modal For C/F Clinical Findings Add -->
  <div class="modal fade " id="Clinical_Finding_Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add Clinical Finding 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('clinical_finding')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" placeholder="Enter New Clinical Finding" name="cf_name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-black">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
  <!-- Modal For C/F Clinical Findings update -->
  <div class="modal fade " id="Clinical_Finding_Update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form action="{{route('update_clinical_finding')}}" method="post">
                    @csrf
                    @method('PUT')

                    <input type="hidden" id="CFId" name="c_f_id"/>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" id="c_f_name" placeholder="Enter New Clinical Finding" name="cf_name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-black">Update</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
 <!-- Modal For Delete C/F Clinical Findings -->
 <div class="modal fade " id="del-CF" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete C/F Clinical Findings
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{route('delete_clinical_finding')}}" method="POST" >
                        @csrf
                        @method('delete')
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-cf-id" name="deletingId">
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

 <!-- Modal For Investigation List -->
 <div class="modal fade " id="Investigation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Investigation List
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- C/C Chife Complaint List-->
                <table class="table table-bordered mt-4 text-center">
                    <thead>
                        <tr>
                            <th class="">Serial No</th>
                            <th class="">Investigations</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($investigation_lists as $key=>$investigation_list)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$investigation_list->name}}</td>
                            <td class="d-flex justify-content-around">
                                <button class="crud-btns Investigation_editbtn" href="" value= "{{$investigation_list->id}}" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="crud-btns delete-Investigation" href="#" value= "{{$investigation_list->id}}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--C/C Chife Complaint list end -->
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

 <!-- Modal For Investigation Add -->
  <div class="modal fade " id="Investigation_Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add Investigation 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('investigation')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" placeholder="Enter New Investigation" name="investigation_name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-black">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
  </div>
 <!-- Modal end -->
 <!-- Modal For Investigation update -->
    <div class="modal fade " id="Investigation_Update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Edit  Investigation 
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{route('update_investigation')}}" method="post">
                        @csrf
                        @method('PUT')

                        <input type="hidden" id="InvestigationId" name="investigation_id"/>
                        <div class="modal-body">
                            <div class="mb-3 drug-name">
                                <input class="form-control" list="list" id="Investigation_name" placeholder="Enter Investigation" name="investigation_name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                            <button type="submit" class="btn btn-sm btn-black">Update</button>
                        </div>
                    </form>
                </div>
                <!-- Modal Body end -->
            </div>
        </div>
    </div>
 <!-- Modal end -->
<!-- Modal For Delete Investigation -->
 <div class="modal fade " id="del-Investigation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete Investigation
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{route('delete_investigation')}}" method="POST" >
                        @csrf
                        @method('delete')
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-Investigation-id" name="deletingId">
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

 <!-- Modal For T/P Treatment Plans List -->
 <div class="modal fade " id="Treatment_Plans" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    T/P Treatment Plans List
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- C/C Chife Complaint List-->
                <table class="table table-bordered mt-4 text-center">
                    <thead>
                        <tr>
                            <th class="">Serial No</th>
                            <th class="">Treatment Plans</th>
                            <th class="">Cost</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lt_ps as $key=>$ltp)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$ltp->name}}</td>
                            <td>{{$ltp->cost}}</td>
                            <td class="d-flex justify-content-around">
                                <button class="crud-btns TP_editbtn" href="" value="{{$ltp->id}}" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="crud-btns delete-tp" href="#" value="{{$ltp->id}}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--C/C Chife Complaint list end -->
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
 <!-- Modal For T/P Treatment Plans Add -->
 <div class="modal fade " id="Treatment_Plan_Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add Treatment Plan 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('treatment_plan')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" placeholder="Enter New Treatment Plan" name="tp_name">
                        </div>
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" placeholder="Enter Cost" name="tp_cost">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-black">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
   <!-- Modal For T/P Treatment Plans update -->
 <div class="modal fade " id="Treatment_Plan_Update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Edit  Treatment Plan 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('update_treatment_plan')}}" method="post">
                    @csrf
                    @method('PUT')

                    <input type="hidden" id="TPId" name="t_p_id"/>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" id="t_p_name" placeholder="Enter New Clinical Finding" name="tp_name">
                        </div>
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" id="t_p_cost" placeholder="Enter Cost" name="tp_cost">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-black">Update</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->
 <!-- Modal For Delete T/P Treatment Plans -->
 <div class="modal fade " id="del-TP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete T/P Treatment Plans
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{route('delete_treatment_plan')}}" method="POST" >
                        @csrf
                        @method('delete')
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-TP-id" name="deletingId">
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



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset ('assets/js/app.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset ('assets/js/chosen.jquery.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(".multi").select2({
            // maximumSelectionLength: 2
        });
    </script>

    <script>
        // script for C/C Chife Complaint update
        $(document).ready(function(){
            $(document).on('click', '.CC_editbtn',function(){
                var cc_id = $(this).val();
                // alert(edit);
                $("#chife_Complaint_Update").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit_chife_complaint/"+cc_id,
                    success: function(response){
                        // console.log(response.cc.name);
                        $('#CCId').val(cc_id);
                        $('#c_c_name').val(response.cc.name);
                    }
                });
            });

            $(document).on('click', '.delete-cc',function(){
                var deleteCCId = $(this).val();
                // alert(deleteCCId);
                $("#del-CC").modal('show');
                $('#del-cc-id').val(deleteCCId);
            });

            // script for C/F Clinical Findings
            $(document).on('click', '.CF_editbtn',function(){
                var cf_id = $(this).val();
                // alert(cf_id);
                $("#Clinical_Finding_Update").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit_clinical_finding/"+cf_id,
                    success: function(response){
                        // console.log(response);
                        $('#CFId').val(cf_id);
                        $('#c_f_name').val(response.cf.name);
                    }
                });
            });

            $(document).on('click', '.delete-cf',function(){
                var deleteCFId = $(this).val();
                // alert(deleteCFId);
                $("#del-CF").modal('show');
                $('#del-cf-id').val(deleteCFId);
            });

       
            // script for Investigation

            $(document).on('click', '.Investigation_editbtn',function(){
                var Investigation_id = $(this).val();
                // alert(Investigation_id);
                $("#Investigation_Update").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit_investigation/"+Investigation_id,
                    success: function(response){
                        console.log(response);
                        $('#InvestigationId').val(Investigation_id);
                        $('#Investigation_name').val(response.inves.name);
                    }
                });
            });

            $(document).on('click', '.delete-Investigation',function(){
                var deleteInvestigationId = $(this).val();
                // alert(deleteInvestigationId);
                $("#del-Investigation").modal('show');
                $('#del-Investigation-id').val(deleteInvestigationId);
            });


            // script for T/P Treatment Plans

            $(document).on('click', '.TP_editbtn',function(){
                var tp_id = $(this).val();
                // alert(tp_id);
                $("#Treatment_Plan_Update").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit_treatment_plan/"+tp_id,
                    success: function(response){
                        // console.log(response);
                        $('#TPId').val(tp_id);
                        $('#t_p_name').val(response.tp.name);
                        $('#t_p_cost').val(response.tp.cost);
                    }
                });
            });

            $(document).on('click', '.delete-tp',function(){
                var deleteTPId = $(this).val();
                // alert(deleteTPId);
                $("#del-TP").modal('show');
                $('#del-TP-id').val(deleteTPId);
            });

        });
    </script>




</body>

</html>
