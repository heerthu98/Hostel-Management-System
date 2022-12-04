@extends('layouts.app')

@section('content')

    <!-- ======= Add Student Section ======= -->
    <section id="book-a-table" class="book-a-table  mt-5">
        <div class="container">
  
          <div class="section-title">
            <h2>Add a <span> New Student</span></h2>
            <p>New Student can be added here.</p>
          </div>

          <a href="/students"><button type="button" class="btn btn-outline-secondary btn -sm mt-3 mb-3">&larr;	 Back </button> </a> 

  
          <form action="/students" method="post" role="form" class="php-email-form2">
            @csrf
            <div class="row">
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="first_name" pattern="^[A-Za-z \s*]+$" class="form-control" id="first_name" placeholder="First Name"  title="Please enter alphabet chars" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="last_name" pattern="^[A-Za-z \s*]+$" class="form-control" id="last_name" placeholder="Last Name"  title="Please enter alphabet chars" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="enroll_no" class="form-control" id="enroll_no" placeholder="Enrollment No" minlength="14"  maxlength="15" title="Please enter min 14 chars" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3 ">
                <input type="text" name="course" pattern="^[A-Za-z \s*]+$" class="form-control" id="course" placeholder="Course Code" data-rule="minlen:3" minlength="3" maxlength="4" title="Please enter alphabet chars & enter min 3 chars" required>
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

              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="batch" id="batch" min="2006" max={{ date('Y') }} placeholder="Batch" data-rule="maxlen:4" title="Please enter atmost 4 char" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-floting form-group mt-3">
                <select class="form-select" name="gender" id="floatingSelect" aria-label="Floating label select"  required>
                    <option value="" selected disabled>Select Gender...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="phone" pattern="[0-9]{10}" id="phone" placeholder="Phone No" data-rule="minlen:10" size="10" title="Please enter atleast 10 char" required>
                <div class="validate"></div>
                <div class="invalid-feedback">Please enter valid phone no. </div> 
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="town" pattern="^[A-Za-z \s*]+$" class="form-control" id="town" placeholder="Home Town" data-rule="minlen:3"  title="Please enter alphabet chars"  required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="town_distance" id="town_distance" placeholder="Distance between home and town (km)" data-rule="minlen:1" title="Please enter numeric number" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="uni_distance" id="uni_distance" placeholder="Distance between town and university (km)" data-rule="minlen:1" title="Please enter numeric number" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="father_name" pattern="^[A-Za-z \s*]+$" class="form-control" id="father_name" placeholder="Father Name" data-rule="minlen:3"  title="Please enter alphabet char" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="father_income" id="father_income" placeholder="Father's Income" data-rule="minlen:1" title="Please enter numeric number">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="mother_name" pattern="^[A-Za-z \s*]+$" class="form-control" id="mother_name" placeholder="Mother Name" data-rule="minlen:3"  title="Please enter alphabet char" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="mother_income" id="mother_income" placeholder="Mother's Income" data-rule="minlen:1" title="Please enter numeric number">
                <div class="validate"></div>
              </div>
              <!--div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" name="disease" class="form-control" id="disease" placeholder="Suffering from any diseases/disabilities..." data-rule="minlen:3"  data-msg="Please enter alphabet char">
                <div class="validate"></div>
              </div-->
              <div class="col-lg-4 col-md-12 form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" data-rule="email" title="Please enter a valid email"  required>
                <div class="validate"></div>
              </div>

            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="address" rows="5" placeholder="Address"  required></textarea>
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

            <div class="text-center mt-5"><button type="submit" class="btn btn-success btn-user">Add Student</button></div>
          </form>
  
        </div>

    </section>
@endsection
<!-- End Add Student Section -->