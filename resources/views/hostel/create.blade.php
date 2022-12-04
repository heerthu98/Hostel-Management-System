@extends('layouts.app')

@section('content')

    <!-- ======= Add Hostel Section ======= -->
    <section id="book-a-table" class="book-a-table  mt-5">
        <div class="container">
  
          <div class="section-title">
            <h2>Add <span> New Hostel</span></h2>
            <p>New Hostel details can be added here.</p>
          </div>
          <a href="/hostels"><button type="button" class="btn btn-outline-secondary btn -sm mt-3 mb-3">&larr;	 Back </button> </a> 
          <form action="/hostels" method="post" role="form" class="php-email-form2">
            @csrf
            <div class="row">
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="hname" class="form-control" id="hname" placeholder="Hostel Name"  data-msg="Please enter alphabet chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="roomno" id="roomno" placeholder="No_of_Rooms" data-rule="minlen:1" data-msg="Please enter numeric number">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="bedno" id="bedno" placeholder="No_of_Beds" data-rule="minlen:1" data-msg="Please enter numeric number">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-floting form-group mt-3">
                <select class="form-select" name="gender" id="floatingSelect" aria-label="Floating label select"  required>
                    <option value="" selected disabled>Select Gender...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6 form-floting form-group mt-3">
                <select class="form-select" name="stuyear" id="floatingSelect" aria-label="Floating label select"  required>
                    <option value="" selected disabled>Select Year...</option>
                    <option value="1">First year</option>
                    <option value="3">Third year</option>
                    <option value="4">Fourth year</option>
                    
                </select>
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

            <div class="text-center mt-5"><button type="submit" class="btn btn-success btn-user">Add Hostel</button></div>
          </form>
  
        </div>


    </section>
@endsection
<!-- End Add Hostel Section -->