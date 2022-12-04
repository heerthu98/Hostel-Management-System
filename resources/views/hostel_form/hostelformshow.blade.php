@extends('layouts.app')

@section('content')

    <!-- ======= Add Student Section ======= -->
    <section id="book-a-table" class="book-a-table  mt-5">
        <div class="container">
  
          <div class="section-title">
            <h2>View  <span> Hostel and Room</span></h2>
          </div>

          <a href="/hostel-form"><button type="button" class="btn btn-outline-secondary btn -sm mt-3 mb-3">&larr;	 Back </button> </a> 

  
          <form action="/hostel-form/{{ $applied_student->id }}" method="get" role="form" class="php-email-form2">
            <div class="row">
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="first_name" pattern="^[A-Za-z \s*]+$" class="form-control" id="first_name" placeholder="First Name"  value="{{ $applied_student->first_name}}"title="Please enter alphabet chars" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="enroll_no" class="form-control" id="enroll_no" placeholder="Enrollment No" minlength="14"  maxlength="15"  value="{{ $applied_student->enroll_no}}"title="Please enter min 14 chars" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="year"  class="form-control" id="year" placeholder="Year"  value="{{ $applied_student->year}}"title="Please enter alphabet chars" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="semester"  class="form-control" id="semester" placeholder="semester"  value="{{ $applied_student->semester}}"title="Please enter semester" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="gender"  class="form-control" id="gender" placeholder="gender"  value="{{ $applied_student->gender}}"title="Please enter gender" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="disease"  class="form-control" id="disease" placeholder="disease"  value="{{ $applied_student->disease}}"title="Please enter disease" >
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="reason"  class="form-control" id="reason" placeholder="reason"  value="{{ $applied_student->reason}}"title="Please enter reason" >
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="town"  class="form-control" id="town" placeholder="disease"  value="{{ $applied_student->town}}"title="Please enter town" required>
                <div class="validate"></div>
              </div>
              
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="uni_distance"  class="form-control" id="uni_distance" placeholder="uni_distance"  value="{{ $applied_student->uni_distance}}"title="Please enter uni_distance" required>
                <div class="validate"></div>
              </div>
              
              
              <div class="col-lg-4 col-md-6 form-group mt-3 ">
                {{-- <input type="text" name="hostelname"  class="form-control" id="hostelname" placeholder="hostelname"  title="hostelname" required> --}}
                <select class="form-control" name="hostelname" placeholder="hostelname"  title="hostelname" required>
                  <option value="" selected disabled>Select Hostel...</option>
                  <option value="Galaxy-B" {{$applied_student->hostelname == 'Galaxy-B'  ? 'selected' : '' }} >Galaxy-B</option>
                  <option value="Kadalla" {{$applied_student->hostelname == 'Kadalla'  ? 'selected' : '' }}>Kadalla</option>
              </select>
                <div class="validate"></div>
              </div>
              <!--div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="year" id="year" min="1" max="4" placeholder="Academic Year" data-rule="maxlen:1" data-msg="Please enter atmost 1 char">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="semester" id="semester" min="1" max="2" placeholder="Academic Semester" data-rule="minlen:1" data-msg="Please enter atmost 1 char">
                <div class="validate"></div>
              </div-->

              <div class="col-lg-4 col-md-6 form-group mt-3 ">
                <input type="text" name="roomno"  class="form-control" id="roomno" placeholder="roomno"  title="roomno"value="{{ $applied_student->roomno}}" required>
                <div class="validate"></div>
              </div>
              
              
              <div class="col-lg-4 col-md-6 form-group mt-3 ">
                <input type="text" name="bedno"  class="form-control" id="bedno" placeholder="bedno"  title="bedno" value="{{ $applied_student->bedno}}" required>
                <div class="validate"></div>
              </div>
              
              
              
              
              <!--div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="disease" class="form-control" id="disease" placeholder="Suffering from any diseases/disabilities..." data-rule="minlen:3"  data-msg="Please enter alphabet char">
                <div class="validate"></div>
              </div-->
             

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

            {{-- <div class="text-center mt-5"><button type="submit" class="btn btn-success btn-user">Assign Hostel</button></div> --}}
          </form>
  
        </div>

    </section>
@endsection
<!-- End Add Student Section -->