@include('include.header')

    <!-- main start -->
    <div class="container-fluid">
 <div class="row justify-content-center align-items-center">
     <div class="col-lg-12 mt-1">
     <ul class="nav nav-tabs doctor_profile_setting" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="Treatment_cost-tab" data-bs-toggle="tab" data-bs-target="#Treatment_cost" type="button" role="tab" aria-controls="Treatment_cost" aria-selected="true">Treatment Cost</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="Chember_info-tab" data-bs-toggle="tab" data-bs-target="#Chember_info" type="button" role="tab" aria-controls="Chember_info" aria-selected="false">Chember Info</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="Chember_schedule-tab" data-bs-toggle="tab" data-bs-target="#Chember_schedule" type="button" role="tab" aria-controls="Chember_schedule" aria-selected="false">Chember Schedule</button>
        </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Treatment_cost" role="tabpanel" aria-labelledby="Treatment_cost-tab">
            <div class="d-flex justify-content-evenly mt-2">
                <h4>Treatment Cost</h4>
                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Treatment_Cost_Add">
                    <i class="bi bi-plus-circle"></i>
                </a>
                <!-- <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Treatment_Cost">
                    <i class="bi bi-card-list"></i>
                </a> -->
            </div>
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
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
                        @foreach($t_p_costs as $key=>$t_p_cost)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$t_p_cost->name}}</td>
                            <td>{{$t_p_cost->price}}</td>
                            <td class="d-flex justify-content-around">
                                <button class="btn crud-btns TP_Cost_editbtn" href="" value="{{$t_p_cost->id}}" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn crud-btns delete-tp_Cost" href="#" value="{{$t_p_cost->id}}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        <div class="tab-pane fade" id="Chember_info" role="tabpanel" aria-labelledby="Chember_info-tab">
        <div class="tab-pane fade show active" id="Treatment_cost" role="tabpanel" aria-labelledby="Treatment_cost-tab">
            <div class="d-flex justify-content-evenly mt-2">
                <h4>Chember List</h4>
                <a class="crud-btns" href="" data-bs-toggle="modal" data-bs-target="#Treatment_Cost_Add">
                    <i class="bi bi-plus-circle"></i>
                </a>
            </div>
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
            <table class="table table-bordered mt-4 text-center">
                    <thead>
                        <tr>
                            <th class="">Serial No</th>
                            <th class="">Chember Name</th>
                            <th class="">Chember Address</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="d-flex justify-content-around">
                                <button class="btn crud-btns TP_Cost_editbtn" href="" value="" >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn crud-btns delete-tp_Cost" href="#" value="">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
        </div>
        </div>
        <div class="tab-pane fade" id="Chember_schedule" role="tabpanel" aria-labelledby="Chember_schedule-tab">
        This is some placeholder content the Contact tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.
        </div>
        </div>
     </div>
 </div>
    </div>
    <!-- Admin Notice,Ad & Events end -->

    <!-- main end -->

  <!-- Modal For T/P Treatment Cost Add -->
  <div class="modal fade " id="Treatment_Cost_Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form action="{{route('treatment_cost')}}" method="post">
                    @csrf
                    <input type="hidden" name="d_id" value="{{$doctor_info->id}}"/>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="tp_name">
                                <option value=""></option>
                                @foreach($t_ps as $t_p)
                                <option value="{{$t_p -> name}}">{{$t_p -> name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" list="list" placeholder="Enter Cost" name="tp_price">
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
    <!-- Modal For T/P Treatment Cost update -->
    <div class="modal fade " id="Treatment_Cost_Update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Header & Close btn -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">
                    Edit Treatment Cost 
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Header & Close btn end -->
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('update_treatment_cost')}}" method="post">
                    @csrf
                    @method('PUT')

                    <input type="hidden" id="TPCostId" name="tp_cost_id"/>
                    <div class="modal-body">
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" id="tp_cost_name" placeholder="Enter New Clinical Finding" name="tp_cost_name">
                        </div>
                        <div class="mb-3 drug-name">
                            <input class="form-control" list="list" id="tp_cost" placeholder="Enter Cost" name="tp_cost">
                        </div>
                    </div>
                    <div class="modal-footer">
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

 <!-- Modal For Delete T/P Treatment Cost -->
 <div class="modal fade " id="del-Cost-TP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete Treatment Cost
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{route('delete_treatment_cost')}}" method="POST" >
                        @csrf
                        @method('delete')
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-TP-cost-id" name="deletingId">
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
   
<div class="fixed-bottom">
    @include('include.footer')
</div>
<script>
        
    $(document).ready(function(){
        // script for T/P Treatment Costs

        $(document).on('click', '.TP_Cost_editbtn',function(){
            var tp_Cost_id = $(this).val();
            $("#Treatment_Cost").modal('hide');
            // alert(tp_Cost_id);
            $("#Treatment_Cost_Update").modal('show');
            $.ajax({
                type:"GET",
                url: "/edit_treatment_cost/"+tp_Cost_id,
                success: function(response){
                    // console.log(response);
                    $('#TPCostId').val(tp_Cost_id);
                    $('#tp_cost_name').val(response.tp_cost.name);
                    $('#tp_cost').val(response.tp_cost.price);
                }
            });
        });

        $(document).on('click', '.delete-tp_Cost',function(){
            var deleteTPCostId = $(this).val();
            $("#Treatment_Cost").modal('hide');
            // alert(deleteTPCostId);
            $("#del-Cost-TP").modal('show');
            $('#del-TP-cost-id').val(deleteTPCostId);
        });

    });
</script>