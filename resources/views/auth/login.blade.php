@extends('layouts.app')

@section('content')

<!-- ======= Login Section ======= -->
<section id="login" class="login mt-5">
  <div class="container">

    <div class="section-title">
      <h2><span>Login</span> to our system</h2>
      <p>Welcome To UWU-Hostel.<br> You can access to our system by login to this page...</p>
    </div>

    <form action="/login" method="POST" enctype="multipart/form-data" role="form" class="php-email-form3">
        @csrf
        <div class="col-lg-12 col-md-12 form-group">
          <input type="email" name="email" class="form-control" id="email" placeholder="Your Email  (Ex: abc@gmail.com)" data-rule="email" data-msg="Please enter valid email" required>
          <div class="validate"></div>
        </div>
        <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-2">
          <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" data-rule="" data-msg="Please enter valid passwords">
          <div class="validate"></div>
        </div>

        @if (isset ($message))
        <div class="mt-3 error-message"> 
            <span class="text-danger  text-center">{{$message}}</span>
        </div>
    @endif

    @if (isset ($success))
        <div class="mt-3 sent-message"> 
            <span class="text-success text-center">{{$success}}</span>
        </div>
    @endif
        <div class="text-center mt-3">
            <!--button type="submit">Login</button-->
            <input type="submit" value="Log In" name="login" class="btn btn-block btn-primary">

        </div>
    </form>

  </div>
</section><!-- End Login Section -->