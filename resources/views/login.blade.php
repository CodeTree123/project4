@include('include.header')

    <!-- main start -->
    <div class="container-fluid">
 <div class="row justify-content-center align-items-center">
     <div class="col-lg-5 mt-5">
     <form action="{{route('login_user')}}" method="post">
         @if(Session::has('success'))
         <div class="alert alert-success">{{Session::get('success')}}</div>
         @endif
         @if(Session::has('fail'))
         <div class="alert alert-danger">{{Session::get('fail')}}</div>
         @endif
         @csrf
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="h3 mb-3 fw-normal">Please log in</h1>

        <div class="form-floating ">
            <input type="email" name="email" class="form-control custom-form-control mb-2" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
            <label for="floatingInput">Email address</label>
        </div>
        <span class="text-danger">@error('email') {{$message}} @enderror</span>
        <div class="form-floating">
            <input type="password" name="password" class="form-control custom-form-control mb-2" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <span class="text-danger">@error('password') {{$message}} @enderror</span>

        <!-- <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div> -->
        
        <button class="w-100 btn btn-lg btn-outline-dark btn-outline-blue-grey mb-2" type="submit">Login</button> 
        <button class="w-100 btn btn-lg btn-outline-dark btn-outline-blue-grey p-1" type="submit">
            <img src="{{ asset('assets/img/google.png')}}" class="sign-in-with-google img-fluid">
            Sign up With Google
        </button> 
            <div class=" my-3">
           <a href="{{route('registration')}}"> <span class="text-dark"> Don't have an account ?</span> Register</a>
        </div>
  </form>
     </div>
 </div>
    </div>
    
    <!-- Admin Notice,Ad & Events end -->

    <!-- main end -->
    @include('include.footer')
