@extends('layouts.app')

@section('content')

    <!-- ======= Hostel Form Section ======= -->
    <section id="book-a-table" class="book-a-table mt-5">
        <div class="container">
  
          <div class="section-title">
            <h2>Hostel <span>Form</span></h2>
            <p>Request to hostel facility.</p>
          </div>
  
          <form action="/hostel-form" method="post"  name="hostel-form" role="form">
            @csrf
            <div class="row">

              <!--div class="col-lg-4 col-md-12 form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div-->
              <div class="col-lg-4 col-md-12 form-group mt-3">
                <input type="text" class="form-control" name="stu_id" id="stu_id" placeholder="Student-ID" value="{{  $current_student->enroll_no  }}" readonly>
                <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-floting form-group mt-3">
                <select class="form-select" name="year" id="floatingSelect" aria-label="Floating label select example"  required>
                    <option value="" selected disabled>Choose Academic Year...</option>
                    <option value="1">1st Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6 form-floting form-group mt-3">
                <select class="form-select" name="semester" id="floatingSelect" aria-label="Floating label select example"  required>
                    <option value="" selected disabled>Choose Semester...</option>
                    <option value="1">1st Semester</option>
                    <option value="2">2nd Semester</option>
                </select>
              </div>
              
              <div class="col-12 form-group mt-3">
                <input type="text" name="disease" class="form-control" id="disease" placeholder="Whether you are suffering from any diseases/disabilities..." data-rule="minlen:3"  data-msg="Please enter alphabet char">
                <div class="validate"></div>
              </div>
              

            </div>
            <div class="col-12 form-group mt-3">
              <textarea class="form-control" name="reason" rows="5" placeholder="Any other special reasons for you to be given hostels"></textarea>
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

            <div class="text-center mt-5"><button type="submit" class="btn btn-success btn-hostelform">Request Hostel</button></div>
          </form>
  
        </div>


    </section>
@endsection
<!-- End Hostel Form Section -->