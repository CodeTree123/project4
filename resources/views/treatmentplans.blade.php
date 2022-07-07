@include('include.header')
<title>Treatment Plans</title>
    <!-- main start -->
    <div class="container-fluid">
        <div class="row">
            <!-- Profile start -->
            <div class="col-md-3 pe-0">
                <div class="profile  blue-grey-border-thin ">
                    <div class="complete">
                        <div class="p-header">
                            <!-- <img src="img/banner.jpg" class="cover"> -->
                            @if($patient->image == null)
                            <img src="{{ asset('assets/img/profile.png')}}" class="doctor-profile my-4">
                            @else
                            <img src="{{url('/uploads/patient/'.$patient->image)}}" class="doctor-profile my-4">
                            @endif
                            
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
                                <div class="col-12 text-start d-flex justify-content-center p-edit mt-2">

                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="profile  blue-grey-border-thin  py-2">
                    <!-- <h3>Treatment Plans</h3> -->
                    <div class="complete">

                        <!-- <a href="#" class="btns btn-outline-blue-grey my-2">
                            Treatment Plans
                        </a> -->
                        <a href="{{route('view_patient',[$doctor_info->id,$patient->id])}}" class="btns btn-outline-blue-grey my-2">
                            Patient Information
                        </a>
                        <a href="{{route('appointment_list',[$doctor_info->id])}}" class="btns btn-outline-blue-grey my-2">
                            Appointment
                        </a>
                        <a href="{{route('prescription',[$doctor_info->id,$patient->id])}}" class="btns  btn-outline-blue-grey my-2">
                            Prescription
                        </a>
                        <a href="{{route('invoice',[$doctor_info->id,$patient->id])}}" class="btns btn-outline-blue-grey my-2">
                            Billing
                        </a>
                    </div>

                    <!-- <a href="">setting</a>
              <a href="" class="lgout-a">Logout</a> -->
                </div>
            </div>
            <!-- Profile end -->
            <!-- Mid Section start -->
            <div class="col-md-6 pe-0">
                <div class="blank-sec ps-4 pe-2 pt-2">
                    <!-- treatmentplans start -->
                    <div class="row">
                        <div class="col-md-6 treatment-info">
                            <div class=" text-center">
                                <h4 class="">Tooth Information</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="container">
                                            <div class="treatment-info mb-2 ">
                                                <img class="tooth-img" src="{{ asset('assets/img/teeths/Upper-right/1TMR.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <h4>{{$treatment_info->tooth_side}}</h4>
                                        <h4>Tooth No: {{$treatment_info->tooth_no}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-dark">
                            <h4 class="text-center">
                                Tooth Restoration
                            </h4>

                            <form action="{{route('treatment_steps',[$doctor_info->id,$patient->id,$treatment_info->id])}}" method="post">
                            @csrf
                            <div class="d-flex justify-content-between bg-blue-grey custom-border-radius p-2">
                                <h6 class="float-start">Classification</h6>
                                <h6 class="float-end">Class II</h6>
                            </div>

                            <div class="treatment-box text-center d-flex flex-wrap justify-content-between p-2"> 

                                <input type="radio" class="btn-check " name="btnradio" id="classI" autocomplete="off" value="Class I">
                                <label class="btn btn-outline-dark m-1" for="classI">Class I</label>

                                <input type="radio" class="btn-check " name="btnradio" id="classII" autocomplete="off" value="Class II">
                                <label class="btn btn-outline-dark m-1" for="classII">Class II</label>

                                <input type="radio" class="btn-check " name="btnradio" id="classIII" autocomplete="off" value="Class III">
                                <label class="btn btn-outline-dark m-1" for="classIII">Class III</label>

                                <input type="radio" class="btn-check " name="btnradio" id="classIV" autocomplete="off" value="classIV">
                                <label class="btn btn-outline-dark m-1" for="classIV">Class IV</label>

                                <input type="radio" class="btn-check " name="btnradio" id="classV" autocomplete="off" value="Class V">
                                <label class="btn btn-outline-dark m-1" for="classV">Class V</label>

                                <input type="radio" class="btn-check " name="btnradio" id="classVI" autocomplete="off" value="classVI">
                                <label class="btn btn-outline-dark m-1" for="classVI">Class VI</label>

                            </div>
                            <div class="mt-2">
                                <div class="d-flex justify-content-between bg-blue-grey custom-border-radius p-2">
                                    <h6 class="float-start">Restorative Material</h6>
                                    <h6 class="float-end">Composite</h6>
                                </div>
                                <table class="table table-bordered bg-success  text-dark bg-opacity-25 border-white">
                                    <tbody>
                                        <tr>
                                            <td>Composition</td>
                                            <td>Amalgum</td>
                                            <td>Veneer</td>
                                            <td>Gl</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Gl</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between bg-blue-grey custom-border-radius p-2">
                                <h6 class="float-start">Treatment Status</h6>
                                <h6 class="float-end text-danger">Not Done</h6>
                            </div>
                            <div class="p-2">
                                <input type="radio" class="btn-check " name="status" id="notDone" autocomplete="off" value="Not Done">
                                <label class="btn btn-outline-dark m-1" for="notDone">Not Done</label>

                                <input type="radio" class="btn-check " name="status" id="onGoing" autocomplete="off" value="On Going">
                                <label class="btn btn-outline-dark m-1" for="onGoing">On Going</label>

                                <input type="radio" class="btn-check " name="status" id="done" autocomplete="off" value="Done">
                                <label class="btn btn-outline-dark m-1" for="done">Done</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded-3 border-1 border-dark">
                                <h4 class="text-center">OT Notes</h4>
                                <div class="p-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Enter Steps :</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="22" name="steps"></textarea>
                                </div>
                                <!-- <ol class="border border-1 border-dark m-2">
                                    <li class="border-bottom">Preparation</li>
                                    <li class="border-bottom">Isolations</li>
                                    <li class="border-bottom">Isolations</li>

                                    <li class="border-bottom">Pulp Protection</li>
                                    <li class="border-bottom">Eching & Bonding</li>
                                    <li class="border-bottom">Composite Application</li>
                                    <li class="border-bottom">Curing Time</li>
                                    <li class="border-bottom">Polishing</li>
                                    <li class="border-bottom">Bite CheckingS</li>
                                    <br><br><br><br><br><br><br><br><br><br><br><br>
                                </ol> -->
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-success px-3 text-white bg-opacity-75 mt-2">Submit</button>
                        </div>
                        </form>
                    </div>
                    <!-- treatmentplans end -->
                </div>
            </div>
            <!-- Mid Section end -->

            <!-- Prescription,Ad & Events start -->
            <div class="col-md-3 page-home">

                <!-- We have info-box-col-1 for not fixed height -->
                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-center bg-blue-grey custom-border-radius">Previous OT Notes</h4>
                    @if($t_steps->isNotEmpty())
                    @foreach($t_steps as $key=>$t)
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne{{$key +1}}" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <p>{{$key + 1}}. {{$t->date}}</p>
                                </button>
                            </h2>
                            <div id="flush-collapseOne{{$key +1}}" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><span>Class Name:</span> {{$t->class}}</li>
                                    
                                        <li><span>Steps:</span> {{$t->steps}}</li>
                                    </ul>                                
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Previous Treatment OT Note #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li>There was no previous steps information.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-center bg-blue-grey custom-border-radius">Report</h4>
                    <div class="d-flex flex-row justify-content-around align-items-center py-1">
                        <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Report_Add" >
                            <i class="bi bi-plus-circle"></i>
                        </a>
                        <h6>Remaining: {{$total_report}}</h6>
                    </div>
                    <hr class="m-0">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        
                        <div class="accordion-item mb-0">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed d-flex py-2" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <p class="me-5">Reports</p>
                                </button>
                            </h2>
                            
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                @if($reports->isNotEmpty())
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th class="">#</th>
                                            <th class="">Images</th>
                                            <th class="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($reports as $key=>$report)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>
                                                    <img src="{{url('/uploads/report/'.$report->image)}}" >
                                                </td>
                                                <td>
                                                <button class="btn crud-btns delete-cc" href="#" value="{{$report->id}}">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <h6>There was no report of this patient.</h6>
                                @endif
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-center bg-blue-grey custom-border-radius">Post to Furums</h4>
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
    <!-- Modal For Delete Medicine -->
        <div class="modal fade " id="del-Prescription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <!-- Modal Header & Close btn -->
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel">
                            Delete Prescription
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Modal Header & Close btn end -->
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="{{route('prescription_delete')}}" method="POST" >
                            @csrf
                            @method('delete')
                            <div class="mb-3 text-center">
                                <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                            </div>
                            <input type="hidden" id="del-Prescription-id" name="deletingId">
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

     <!-- Modal For Report_Add Add -->
 <div class="modal fade " id="Report_Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add Report
                </h5>
                <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#exampleModal_1" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('report',[$doctor_info->id,$patient->id,$treatment_info->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <label for="formFile" name="r_image" class="form-label text-dark">Drop Image</label>
                            <input class="form-control" name="r_image" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_1">Discard</button>
                        <button type="submit" class="btn btn-sm btn btn-sm btn-outline-blue-grey">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

@include('include.footer')
