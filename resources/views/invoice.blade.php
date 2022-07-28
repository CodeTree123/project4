<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license --> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="{{asset ('assets/img/reflex_logo.png')}}"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
 

    <!--Main Style CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">

</head>
<title>ReflexDN</title>
<!-- Print Style -->
<style> 

    @page { 
        size: auto; 
    margin: 1cm 0mm 0mm 0mm; 
    padding: 0mm;
    }
    @media print {
        body { 
            page-break-inside: avoid;
            -webkit-print-color-adjust: exact; 
        }
        .bottom-part{
            margin-top: 30%;
            position: fixed;
            bottom: 0;
        }
        
    
        }
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .doctor_signeture{
            border-top: 1px solid #b5b5b5;
            padding: 1em 30px 0em 30px;
            margin-top: 100px;

        }
        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0,0,0,.1);
        } 
        .pb-25, .py-25 {
            padding-bottom: .75rem!important;
        }

        .pt-25, .py-25 {
            padding-top: .75rem!important;
        }     
        .text-blue-m2 {
            color: #4e6f8a!important;
        } 
         
</style>
<!-- Print Style End -->
<body>

<div class="page-content  px-5 "> 
    <div class="page-header d-flex justify-content-between align-items-center text-blue-d2">
      
        <a href="{{route('view_patient',[$doctor_info->id,$patient->id])}}" class="btn btn-outline-blue-grey d-print-none" id="backBTN">
         Back
        </a>

        <div class="page-tools align-self-end">
            <div class="action-buttons">
                <a class="btn btn-outline-blue-grey mx-1px text-95 d-print-none" href="#" data-title="Print"  data-bs-toggle="modal" data-bs-target="#Treatment_Payment" id="add_payment">
                    <!-- <i class="mr-1 fa fa-print text-dark-m1 text-120 w-2"></i> -->
                    Add Paymet
                </a> 

                <button class="btn btn-outline-blue-grey mx-1px text-95 print-btn d-print-none" onclick="printInvoicepage()" id="printInvoicepagebutton"> 
                     <i class="mr-1 fa fa-print text-dark-m1 text-120 w-2"></i> 
                        Print
                </button>  
                <a class="btn btn-outline-blue-grey mx-1px text-95 d-print-none" href="#" data-title="PDF" id="savePDF">
                <i class="fa-solid fa-floppy-disk"></i>
                   Save as PDF
                </a>
            </div>
        </div>
    </div>

    <div class="   px-0 mt-5">
                    <div class=" d-flex justify-content-center">
                                <a class="navbar-brand" href="#">
                                <img src="{{asset ('assets/img/reflex_logo.png')}}" alt="" width="120" height="50" class="d-inline-block align-text-top">
                                <!-- Reflex -->
                                </a>
                    </div>

            <hr class=" brc-default-l1 mx-n1 mb-4" /> 
            <div class="row d-print-inline-flex ">
                <div class="col-sm-6">
                    <div>
                        <span class="fw-bold">To:</span>{{$doctor_info->name}}
                    </div>
                    <div class="text-grey-m2">
                        <div class="my-1">
                            <span class="fw-bold">Patient's Name :</span>{{$patient->name}} 
                        </div>
                        <div class="my-1">
                        <span class="fw-bold"> Patient's Phone Number : </span>{{$patient->mobile}}  
                        </div> 
                    </div>
                </div> 

                <div class="col-sm-6 text-95  align-self-start d-sm-flex justify-content-end">
                    <hr class="d-sm-none" />
                    <div class="text-grey-m2">
                        <div class="my-2">  
                            <span class="fw-bold"> Invoice ID : </span> {{$view}} 
                        </div> 

                        <div class="my-2">
                            <span class="fw-bold">Chamber Name:</span> asdqweq
                        </div>

                        <div class="my-2">
                        <span class="fw-bold">Issue Date:</span> {{ date('d-m-Y') }}
                        </div>
                    </div>
                </div> 
            </div>
        <div class="row mt-4">
            <div class="col-12 col-lg-12">  
               

                <div class="mt-4">
                    <div class="row text-600 text-white  bg-blue-grey py-25">
                        <div class=" d-sm-block col-1">#</div>
                        <div class="col-9 col-sm-3">Treatment Name</div> 
                        <div class=" d-sm-block col-sm-2">Treatment Cost</div>
                        <div class="col-2">Paid</div>
                        <div class="col-2">Due</div>
                        <div class="col-2">Status</div>
                    </div>

                    <div class="text-95 text-secondary-d3">
                        @foreach($treatment_infos as $key=>$treatment_info)
                        <div class="row mb-2 mb-sm-0 py-25">
                            <div class="d-none d-sm-block col-1">{{$key + 1}}</div>
                            <div class="col-9 col-sm-3">{{$treatment_info->treatment_plans}}</div> 
                            <div class="d-none d-sm-block col-2 text-95">৳ {{$treatment_info->cost}}</div>
                            <div class="col-2 text-secondary-d2">৳ {{$treatment_info->paid}}</div>
                            <div class="col-2 text-secondary-d2">৳ {{$treatment_info->due}}</div>
                            <div class="col-2 text-secondary-d2">
                                @if($treatment_info->payment_status == 1)
                                    Paid
                                @else
                                    Due
                                @endif
                            </div>
                        </div>
                        @endforeach
                        <hr/>
                     
                        <div class="row mb-2 mb-sm-0 py-25  ">
                            <div class="d-none d-sm-block col-1">*</div>
                            <div class="col-9 col-sm-3">Total </div> 
                            <div class="d-none d-sm-block col-2 text-95">
                                Total Treatment Cost <br> ৳ {{$total_cost}}
                            </div>
                            <div class="col-2 text-secondary-d2">Total Paid <br> ৳ {{$total_paid}}</div>
                            <div class="col-2 text-secondary-d2">Total Due <br> ৳ {{$total_due}}</div>
                            <div class="col-2 text-secondary-d2"></div>
                        </div> 
 
                    </div>


                    <!-- <div class="row border-b-2 brc-default-l2 mt-5"></div>  -->
                    <div class="row   mt-3">
                    <hr class="row brc-default-l1 mx-n1 mb-4" />
                        <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0 h-100">
                            <br><br><br><br><br>
                            <span class="doctor_signeture mt-5">
                                 Doctor Name & Date
                            </span>
                        </div>

                        <div class="col-5 col-sm-5 text-grey text-90 order-first order-sm-last align-self-end">
                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    SubTotal
                                </div>
                                <div class="col-5">
                                    <span class="text-120 text-secondary-d1">৳ {{$total_cost}}</span>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    Tax (10%)
                                </div>
                                <div class="col-5">
                                    <span class="text-110 text-secondary-d1">৳ {{$tex}}</span>
                                </div>
                            </div>

                            <div class="row my-2 align-items-center bgc-primary-l3 ">
                                <div class="col-7 text-right">
                                    Total Amount
                                </div>
                                <div class="col-5">
                                    <span class="text-150 text-success-d3 opacity-2">৳ {{$total_Amount}}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr />
 
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal For T/P Treatment Cost Add -->
  <div class="modal fade " id="Treatment_Payment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Add Treatment Payment 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('treatment_payment')}}" method="post">
                    @csrf
                    @method('PUT')
                        <!-- <input type="text" name="p_id" value="{{$patient->id}}"/> -->
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="t_plan_id">
                                <option value=""></option>
                                @foreach($treatment_invoice_infos as $treatment_invoice_info)
                                <option value="{{$treatment_invoice_info -> id}}">{{$treatment_invoice_info -> treatment_plans}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" list="list" placeholder="Enter Amount" name="tp_amount">
                        </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-sm btn-outline-blue-grey">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- Modal Body end -->
        </div>
    </div>
 </div>
 <!-- Modal end -->

 
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <!-- Custom Js -->
<script src="{{asset ('assets/js/custom.js')}}"></script>
</body>
</html>