@include('include.header')

    <!-- main start -->
    <div class="container-fluid">
 <div class="row justify-content-center align-items-center">
     <div class="col-lg-5 mt-5">
     <form action="{{route('update.doctor',[$doctor_info->id])}}" method="post">
     @method('PUT')
     @csrf
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h3 class="mb-3 fw-normal text-center">Edit Your Profile</h3>
        <div class="d-flex justify-content-between mx-2">
            <h4 class="mb-3 fw-normal">Your BMDC ID: {{$doctor_info->BMDC}}</h4>
            <h4 class="mb-3 fw-normal">Your ID:{{$doctor_info->id}}</h4>
        </div>

        <div class="form-floating ">
            <input type="text" name="mobile"  class="form-control mb-2" id="floatingInput" placeholder="Name" value="{{$doctor_info->chemner_mobile}}">
            <label for="floatingInput">Mobile Number</label>
        </div>
        <!-- <div class="form-floating">
            <input type="text" name="BMDC" class="form-control mb-2" id="bmdcID" placeholder="BMDC Registration No.">
            <label for="bmdcID">BMDC Registration No.</label>
        </div> -->
        <div class="form-floating">
            <input type="text" name="chember_name" class="form-control mb-2" id="chamberName" placeholder="chamberName" value="{{$doctor_info->chemner_name}}">
            <label for="chamberName">Chamber Name</label>
        </div>
        <div class="form-floating">
            <input type="text" name="chember_add" class="form-control mb-2" id="chamberAddress" placeholder="chamberAddress" value="{{$doctor_info->chemner_add}}">
            <label for="chamberAddress">Chamber Address</label>
        </div>
 
        
        <button class="w-100 btn btn-lg btn-outline-dark mb-2" type="submit">Update</button> 
      
             
  </form>
     </div>
 </div>
    </div>
    <!-- Admin Notice,Ad & Events end -->

    <!-- main end -->
   
  @include('include.footer')