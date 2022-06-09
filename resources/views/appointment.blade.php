@include('include.header')

  <!-- body -->
  <!-- body part 1 -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 pe-0">
        <div class="profile">
          <div class="complete">
            <div class="p-header">
              <!-- <img src="img/banner.jpg" class="cover"> -->
              <img src="{{ asset('assets/img/profile.png')}}"  class="doctor-profile my-4">
              
              <h2 class="mb-2">Dr Abduallah Bin Sayeed</h2>
              <p class="mb-2">Dental Consulatant of the Royal <br>Dental</p>
              <a href="#_" class="btns mb-2">This Month</a>
              <p class="mb-2">SMS Remaining : 50</p>
              <p class="mb-2">Buy SMS : 50</p>

            </div>
          </div>
        </div>
        <div class="profile py-2">
          <!-- <h3>Treatment Plans</h3> -->
          <div class="complete">
            <a  href="{{route('patient')}}" class="btns my-2">Patient</a>
            <a href="{{route('appointment')}}" class="btns my-2">Appointment</a>
            <a href="#" class="btns my-2">Income/Expence</a>
            <a href="#" class="btns my-2">Subscription</a>
          </div>
          
          <!-- <a href="">setting</a>
          <a href="" class="lgout-a">Logout</a> -->
        </div>
      </div>

        <!-- body part 1 end-->
  <!-- body part 2 -->

      <div class="col-md-7 pe-0">
        <!-- <div class="blank-sec"> -->

        <table class="table table-striped">
          <thead>
              <tr>
                <th class="action-btns" scope="col"> <a href="#">SL</a></th>
                <th class="action-btns" scope="col"><a href="#">First</a></th>
                <th class="action-btns" scope="col"><a href="#">Last</a></th>
                <th class="action-btns" scope="col"><a href="#">Add Appoinment</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><div class="btn btns">Set Appointment</div></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><div class="btn btns">Set Appointment</div></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td><div class="btn btns">Set Appointment</div></td>
              </tr>
              <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td><div class="btn btns">Set Appointment</div></td>
                </tr>
            </tbody>
        </table>
<!-- </div> -->
     </div>
      <!-- body part 2 end -->
  <!-- body part 3 -->

    <!-- Admin Notice,Ad & Events start -->
     <div class="col-md-3 page-home">
      
       <div class="info-box-col p-2 mb-3">
          <h4 class="d-flex justify-content-end">Admin Notice Board</h4>
       </div>
       <div class="info-box-col p-2 mb-3">
        <h4 class="d-flex justify-content-end">Ad</h4>
       </div>
       <div class="info-box-col p-2 mb-3">
          <h4 class="d-flex justify-content-end">Upcoming Events</h4>
       </div>
     </div>
       <!-- body part 3 end -->

    </div>
  </div>
  <!-- body end-->

 
  @include('include.footer')