@include('include.header') 
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
                <div class="d-flex justify-content-between align-items-center p-2">
                    <h4>Patient List</h4>
                </div>
                <table class="table table-bordered mt-2 text-center">
                        <thead>
                            <tr>
                                <th class="">#</th>
                                <th class="">name</th>
                                <th class="">mobile</th>
                                <th class="">Due</th>
                                <th class="" style="width:50px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patient_list as $key=>$patient)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$patient->name}}</td>
                                <td>{{$patient->mobile}}</td>
                                <td>
                                    @php
                                        $id = $patient->id;
                                        $cost = \App\Models\treatment_info::where('p_id','=',$id)->sum('cost');
                                        $paid = \App\Models\treatment_info::where('p_id','=',$id)->sum('paid');
                                        $due = $cost - $paid;
                                        echo $due;
                                    @endphp
                                    @if($due>0)
                                    Taka
                                    @endif
                                </td>
                                <td class="d-flex justify-content-around">
                                    <button type="button" class="btn crud-btns Patient_viewbtn" href="" value="{{$patient->id}}" >
                                         <i class="fa-solid fa-file-lines"></i>
                                    </button>
                                    <button type="button" class="btn crud-btns Patient_editbtn" href="" value="{{$patient->id}}" >
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn crud-btns delete-patient" href="#" value="{{$patient->id}}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <!-- <button class="btn crud-btns Patient_Edit" href="" value="{{$patient->id}}" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    </button> -->
                                    <!--  -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                </div>

            </div>

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
                </div>
                <div class="info-box-col info-box-col-ad mb-3"> 
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
                <div class="info-box-col mb-3">
                    <h4 class="p-2 d-flex justify-content-center bg-blue-grey custom-border-radius">Upcoming Events</h4>

                </div>
            </div>
        </div>
    </div>
    <!-- Admin Notice,Ad & Events end -->

    <!-- main end -->

    @include('include.footer')

     <!-- Modal For Patient VIEW -->
 <div class="modal fade " id="Patient_View" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    View Doctor Information 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body" id="view_patient_info">
                <p>Name: <span id="doctor_view_name"></span></p>
                <p>Email: <span id="doctor_view_email"></span></p>
                <p>Phone: <span id="doctor_view_phone"></span></p>
                <p>BMDC No:<span id="doctor_view_bmdc"></span> </p>
                <p>NID No: <span id="doctor_view_nid"></span></p>
                <p>Profile Picture:<img src="" id="doctor_view_profile_pic"></img> </p>
                <p>BMDC Registration:<img src="" id="doctor_view_bmdc_reg"></img> </p>
                <p>Post Graduate Degree: <img src="" id="doctor_view_post_grad"></img></p>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

 <!-- Modal For Patient update -->
 <div class="modal fade " id="Patient_Update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header my-auto  align-items-center justify-content-between">
                <h5 class="modal-title text-dark mb-0" id="exampleModalLabel">
                    Edit Patient Information 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('update_patient_list')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden"  name="doctor_id" value="{{$doctor_info->id}}"/>
                    <input type="hidden"  name="patient_id" id="patient_id" value=""/>
                    <div class="modal-body py-0">
                        <div class="mb-2">
                            <label for="mobile"> Mobile No.</label>
                            <input type="number" name="mobile" class="form-control custom-form-control" placeholder="Mobile No" id="mobile" value="">
                        </div>
                        
                        <div class="row">
                            <div class="col-9">
                                <div class="mb-2">
                                    <label for="name"> Name</label> 
                                    <input type="name" name="name" id="name" class="form-control custom-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-2">
                                        <label for="age"> Age</label> 
                                        <input type="number" name="age" id="age" class="form-control custom-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Age" value="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="gender"> Gender</label> 
                                    <input type="text" name="gender" class="form-control custom-form-control" id="gender" aria-describedby="emailHelp" placeholder="Gender" value="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-2">

                                    <label for="Blood_group"> Blood Group</label>  
                                    <input type="text" name="Blood_group" id="Blood_group" class="form-control custom-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Blood Group" value="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-2">
                                    <label for="date"> Date</label>  
                                    <input class="form-control custom-form-control" name="date" type="text" placeholder="Date of Birth" value="" id="date">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-2">
                                    <label for="occupation"> Occupation</label>  
                                    <input type="text" class="form-control custom-form-control" name="occupation" id="occupation" placeholder="Occupation" value="">
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="address"> Address</label>   
                            <input type="address" class="form-control custom-form-control" name="address" placeholder="Address" value="" id="address">
                        </div>

                        <div class="">
                            <label for="email"> Email</label>   
                            <input type="email" name="email" class="form-control custom-form-control" id="email" aria-describedby="emailHelp" placeholder="Email address" value="">
                        </div>


                        <div class="my-2">
                            <label for="formFile" name="image" class="form-label text-dark">
                                Drop your image <span class="text-danger" style="font-size:12px ;">*If You Want To Change Profile Picture</span>
                            </label>
                            <input class="form-control" name="image" type="file" id="formFile">                                        
                        </div>
                        <div id="img_show" class="mt-2">
                            <img src="" class="mt-2" style="width: 70px; height: 70px;">
                        </div>
                    </div>
                    <div class="modal-footer py-0">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-outline-blue-grey">Update</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

    <!-- Modal For Delete Patient -->
    <div class="modal fade " id="del-Patient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete Patient Information
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{route('delete_patient_list')}}" method="POST" >
                        @csrf
                        @method('delete')
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-patient-id" name="deletingId">
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

    <script>
    $(document).ready(function(){

        $(document).on('click', '.Patient_viewbtn',function(){
                var Patient_id = $(this).val();
                // alert(Patient_id);
                $("#Patient_View").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit_patient/"+Patient_id,
                    success: function(response){
                        // console.log(response.patient_infos); 
                        $('#view_patient_info').html("");
                        $('#view_patient_info').append('\
                        <p>Name: <span>'+response.patient_infos.name+'</span></p>\
                        <p>Name: <span>'+response.patient_infos.age+'</span></p>\
                        <p>Email: <span>'+response.patient_infos.email+'</span></p>\
                        <p>Mobile: <span>'+response.patient_infos.mobile+'</span></p>\
                        <p>Gender: <span>'+response.patient_infos.gender+'</span></p>\
                        <p>Blood Group: <span>'+response.patient_infos.Blood_group+'</span></p>\
                        <p>Birth Date: <span>'+response.patient_infos.date+'</span></p>\
                        <p>Occupation: <span>'+response.patient_infos.occupation+'</span></p>\
                        <p>Address: <span>'+response.patient_infos.address+'</span></p>\
                        <p>Profile Picture: <img src="/uploads/patient/'+response.patient_infos.image+'" id="doctor_view_profile_pic" style="width:100px; height:"50px;"></img> </p>\
                        ');  
                    }
                }); 

      });

      $(document).on('click', '.Patient_editbtn',function(){
                var Patient_id = $(this).val();
                // alert(Patient_id);
                $("#Patient_Update").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit_patient/"+Patient_id,
                    success: function(response){
                        // console.log(response.patient_infos);
                        $('#patient_id').val(Patient_id);
                        $('#mobile').val(response.patient_infos.mobile);
                        $('#name').val(response.patient_infos.name);
                        $('#age').val(response.patient_infos.age);
                        $('#gender').val(response.patient_infos.gender);
                        $('#Blood_group').val(response.patient_infos.Blood_group);
                        $('#date').val(response.patient_infos.date);
                        $('#occupation').val(response.patient_infos.occupation);
                        $('#address').val(response.patient_infos.address);
                        $('#email').val(response.patient_infos.email);
                        $('#img_show').html("");
                        $('#img_show').append('\
                        <p>Profile Picture: <img src="/uploads/patient/'+response.patient_infos.image+'" style="width:100px; height:"50px;"></img> </p>\
                        ');
                    }
                });
      });

      $(document).on('click', '.delete-patient',function(){
                var deletePatientId = $(this).val();
                // alert(deletePatientId);
                $("#del-Patient").modal('show');
                $('#del-patient-id').val(deletePatientId);
      });

    });
    </script>
