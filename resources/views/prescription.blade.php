<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- Bootstrap 5.1.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Style CSS --> 
    <link rel="stylesheet" href="{{ asset ('assets/css/prescription_style.css')}}"> 
    <link rel="stylesheet" href="{{ asset ('assets/css/tab.css')}}"> 
    <link rel="stylesheet" href="{{ asset ('assets/css/multiselect.css')}}"> 


</head>

<body class="bg-dark">
 
<!-- ========= main ========= -->
<main>
    <div class="container main">
        <section class="prescription-header">
            <div class="container">
                <div class="d-flex justify-content-between">
                        <div class="mb-3"> 
                            <button class="btn btn-dark" onclick="printpage()" id="printpagebutton"> 
                                <i class="fa-solid fa-print"></i>
                                Print
                            </button> 
                        </div>
                    <!-- <div class="mb-3">
                        <h2 class="docname"></h2>
                        <ul class="list-unstyled">
                            <li>
                                <p class="bmdcnum"></p>
                            </li>
                            <li>
                                <h4 class="deg1"></h4>
                            </li>
                            <li>
                                <p class="deg2"></p>
                            </li>
                            <li>
                                <p class="DGR"></p>
                            </li>
                            <li>
                                <h3></h3>
                            </li>
                        </ul>
                    </div> -->
                    <div class="mb-3">
                        <div class="mb-2 qrcode" >

                        </div> 
                       <img src="{{asset ('assets/img/qr.png')}}" alt="Qr" class="img-fluid">
                    </div>
                    <div class="date"> 
                        <!-- <select class="form-select form-select-sm mb-2 doc_chembars">

                        </select> -->
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Chamber</option>
                            <option value="1">Chamber 1</option>
                            <option value="2">Chamber 2</option> 
                          </select>
                        <h2 class="chem_name"></h2>

                            <p class="chem_phone"></p>
                            <p>06/06/2022</p>

                        <input type="hidden" class="doc_uid">
                        <input type="hidden" class="doc_uid_profile">
                        <p>06/06/2022</p>

                    </div>

                </div>
            </div>
        </section>

        <section class="prescription-subheader">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-sm table-borderless">
                        <tr class=" ">
                            <td class=""><span class="title">Name : {{$patient->name}}</span> <span class="value pres_pt_name"></span></td>
                            <td class=""><span class="title">Age : {{$patient->age}}</span> <span class="value pres_pt_age"></span></td>
                            <td class=""><span class="title">Date :</span> <span class="value pres_pt_date"></span></td>
                        </tr>
                        <tr class="">
                            <td class="  "><span class="title">Mobile : {{$patient->mobile}}</span> <span class="value pres_pt_mobile"></span></td>
                        
                            <td class=" "><span class="title">Address : {{$patient->address}}</span> <span class="value pres_pt_address"></span></td>
                           
                        </tr>
                    </table>
                </div> 
            </div>
        </section>

        <section class="prescription-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 left-col">
                        <div class="left">
                            <div class="single cc">
                                <h2>C/C:</h2>
                                <div class="complain">
                                    <ol class="ms-5">
                                        @foreach($pc_c as $c_c)
                                                <li>{{$c_c}}</li>
                                        @endforeach
                                    </ol>
                                </div> 
                            </div>
                            <div class="single oe">
                                <h2>O/E:</h2>
                                <div class="complain">
                                    <ol class="ms-5">
                                        @foreach($pc_f as $c_f)
                                            <li>{{$c_f}}</li>
                                        @endforeach
                                    </ol>
                                </div> 
                            </div>
                            <div class="single tp">
                                <h2>T/P:</h2>
                                <div class="complain">
                                    <ol class="ms-5">
                                        @foreach($pt_p as $t_p)
                                            <li>{{$t_p}}</li>
                                        @endforeach
                                    </ol>
                                </div> 
                            </div>
                            <div class="single investigation">
                                <h2>Investigation:</h2>
                                <div class="complain">
                                    <ol class="ms-5">
                                        <li>pain</li>
                                        <li>more pain</li>
                                    </ol>
                                </div> 
                            </div>
                            <div class="single advice">
                                <h2>Advice:</h2>
                                <!-- <div class="complain">
                                </div> -->
                                <button type="button" class="btn btn-sm rounded-pill prescription-btn"
                                        data-bs-toggle="modal" data-bs-target="#advice">Add
                                    Investigation Advice</button>
                                <textarea type="text" name="" id="" class="complain m-0 ms-5" value="" rows="3" style="width:80%" readonly></textarea>
                            </div>
                        </div>
                        <div class="timing my-3">
                            <h6>Schedule Time</h6>
                            <div class="table-responsive">
                                <table class="table-sm table-bordered">
                                    <thead>
                                    <tr class="text-center">
                                        <th>Day</th>
                                        <th>Morning</th>
                                        <th>Evening</th>
                                    </tr>
                                    </thead>
                                    <tbody class="doc_time_shc">
                                    <tr>
                                        <td>SAT</td>
                                        <td class="sat_mon"></td>
                                        <td class="sat_eve"></td>
                                    </tr>
                                    <tr>
                                        <td>SUN</td>
                                        <td class="sun_mon"></td>
                                        <td class="sun_eve"></td>
                                    </tr>
                                    <tr>
                                        <td>MON</td>
                                        <td class="mon_mor"></td>
                                        <td class="mon_eve"></td>
                                    </tr>
                                    <tr>
                                        <td>TUE</td>
                                        <td class="tue_mor"></td>
                                        <td class="tue_eve"></td>
                                    </tr>
                                    <tr>
                                        <td>WED</td>
                                        <td class="wed_mor"></td>
                                        <td class="wed_eve"></td>
                                    </tr>
                                    <tr>
                                        <td>THU</td>
                                        <td class="thu_mor"></td>
                                        <td class="thu_eve"></td>
                                    </tr>
                                    <tr>
                                        <td>FRI</td>
                                        <td class="fri_mor"></td>
                                        <td class="fri_eve"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="right">
                            <div class="single">

                                <div class="mb-3"> 


                                  <img src="{{ asset ('assets/img/rx.png')}}" class="img-fluid" alt="">
                                </div>
                                <div class="drug-list">
                                    <ol>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="align-self-center">
                                                    <p class="drug-name">ALATROL 10MG TAB</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <button type="button" class="btn btn-sm p-o edit-drug"><i class="bi bi-pencil-square text-primary"></i></button>
                                                </div>
                                            </div>
                                            <P class="qty">1+0+1 [ 5 day(s)] After Meal (Qty. 10)</P>
                                        </li>
                                    </ol>
                                </div>
                                
                                <div class="drug-list">
                                    <ol>
                                     @foreach($drugs as $drug)
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="align-self-center">
                                                    <p class="drug-name">{{$drug->drug}}</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <button type="button" class="btn btn-sm p-o edit-drug"><i class="bi bi-pencil-square text-primary"></i></button>
                                                </div>
                                            </div>
                                            <P class="qty">{{$drug->drug_time}} [ {{$drug->duration}} day(s) ] {{$drug->meal_time}} </P>
                                        </li>
                                        @endforeach
                                    </ol>
                                </div>
                               
                                <button type="button" class="btn btn-sm btn-primary addDrug" data-bs-toggle="modal"
                                        data-bs-target="#drug" id="drugBtn">Add
                                    Drug</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <button type="button" class="btn btn-primary back-btn " id=" ">
           <a href="{{route('treatments',[$doctor_info->id,$patient->id,$t_id,$t_plans])}}" class="text-white">
            <i class="fa-solid fa-arrow-left-long"></i>
                Back
           </a>
        </button>
        <button type="button" class="btn btn-primary preview-btn " id="previewBtn">
        
            Preview
        </button>
        <!-- <div class="logout"><a href="#" class="btn btn-sm btn-danger">Logout</a></div>  -->

    </div>
</main>
<!-- ========= M O D A L ========= -->
<!-- Add Chief --> 
<div class="modal fade" id="chief">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <form action="#">
            <div class="modal-content">
                <div class="modal-body">
                    <textarea class="form-control border-0" placeholder="Type Here.." rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-black">Update</button>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                </div>
            </div>
        </form>
    </div>
</div>

 



<!-- Examination Finding -->
<div class="modal fade" id="exam">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="#">
                <div class="modal-content">
                    <div class="modal-body">
                        <textarea class="form-control border-0" placeholder="Type Here.." rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-black">Update</button>
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Investigation Advice -->
<div class="modal fade" id="advice">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="#">
                <div class="modal-content">
                    <div class="modal-body">
                        <textarea class="form-control border-0" placeholder="Type Here.." rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-black">Update</button>
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Prescription Modal--> 
<div class="modal fade" id="drug">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{route('add_drug',[$doctor_info->id,$patient->id])}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 drug-name">
                        <input class="form-control" list="list" placeholder="Drug name-brand/generic" name="drug">
                        <datalist id="list" class="allGrugList">

                        </datalist>
                    </div>
                    <div class="mb-3 drug-time">
                        <input type="text" class="form-control" placeholder="Timing" value="1+0+1" name="drug_time">
                    </div>
                    <div class="mb-3 drug-meal-time" >
                        <select class="form-select" name="meal_time">
                            <option>Before Meal</option>
                            <option>After Meal</option>
                        </select>
                    </div>
                    <div class="mb-3 drug-duration">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Duration/Days" value="1" name="duration">
                            </div>
                            <div class="col">
                                <select class="form-select" >
                                    <option>Day(s)</option>
                                    <option>Duration</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                    <button type="submit" class="btn btn-sm btn-black">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Prescription update Modal--> 
<div class="modal fade" id="prescriptionModal">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="#">
                <div class="modal-body">
                    <div class="mb-3 drug-name">
                        <input class="form-control" list="list" placeholder="Drug name-brand/generic">
                        <datalist id="list" class="allGrugList">

                        </datalist>
                    </div>
                    <div class="mb-3 drug-time">
                        <input type="text" class="form-control" placeholder="Timing" value="1+0+1">
                    </div>
                    <div class="mb-3 drug-meal-time">
                        <select class="form-select">
                            <option>Before Meal</option>
                            <option>After Meal</option>
                        </select>
                    </div>
                    <div class="mb-3 drug-duration">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Duration/Days" value="1">
                            </div>
                            <div class="col">
                                <select class="form-select">
                                    <option>Day(s)</option>
                                    <option>Duration</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">sDiscard</button>
                    <button type="submit" class="btn btn-sm btn-black">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div> 
<script src="{{asset ('assets/js/jquery-1.12.4.js')}}"></script>
<script src="{{asset ('assets/js/popper.min.js')}}"></script>
<script src="{{asset ('assets/js/bootstrap.min.js')}}"></script>
 
 

 

<script src="{{asset ('assets/js/scroll-up.min.js')}}"></script> 
<!-- Custom Js -->
<script src="{{asset ('assets/js/custom.js')}}"></script>

<script src="{{asset ('assets/js/multiselect.js')}}"></script> 
<script src="{{asset ('assets/js/prescription_app.js')}}"></script>

<script src="{{asset ('assets/js/prescription.js')}}"></script>
 

</body>

</html>