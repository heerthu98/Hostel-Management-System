@extends('layouts.app')

@section('content')

    <!-- ======= Edit Student Section ======= -->
    <section id="book-a-table" class="book-a-table mt-3">
        <div class="container">
  
          <div class="section-title">
            <h2>Update <span>Student</span></h2>
            <p>Student can be updated here.</p>
          </div>

          <a href="/students/{{ $student->id }}"><button type="button" class="btn btn-outline-secondary btn -sm mt-3 mb-3">&larr;	 Back </button> </a> 

  
          <form action="/students/{{ $student->id }}" method="post" role="form" class="form">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="text" name="first_name" class="form-control" id="form-floating" placeholder="First Name" value="{{ $student->first_name}}" data-msg="Please enter alphabet chars" readonly>
                <label for="floatingInput"> First Name</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" value="{{ $student->last_name}}"  data-msg="Please enter alphabet chars" readonly >
                <label for="floatingInput"> Last Name</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="text" name="enroll_no" class="form-control" id="enroll_no" placeholder="Enrollment No"  value="{{ $student->enroll_no}}" data-rule="minlen:14"  data-msg="Please enter 14 chars" readonly>
                <label for="floatingInput"> Enrollment No</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3 ">
                <input type="text" name="course" class="form-control" id="course" placeholder="Course Code"   value="{{ $student->course}}" data-rule="minlen:3"  data-msg="Please enter min 3 chars" readonly>
                <label for="floatingInput"> Course Code</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="number" class="form-control" name="batch" id="batch" min="2006" max={{ date('Y') }} placeholder="Batch"   value="{{ (int)$student->batch}}" data-rule="maxlen:4" data-msg="Please enter atmost 4 char" required>
                <label for="floatingInput"> Batch</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-floting form-group mt-3">
                <label for="floatingSelect">Gender</label>
                <select class="form-select" name="gender" id="floatingSelect" aria-label="Floating label select"  required>
                    <option value="" selected disabled>Select Gender...</option>
                    <option value="Male" {{$student->gender == 'Male'  ? 'selected' : '' }} >Male</option>
                    <option value="Female" {{$student->gender == 'Female'  ? 'selected' : '' }} >Female</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="number" class="form-control" name="phone" id="phone" pattern="[0-9]{10}" placeholder="Phone No" value="{{ (int)$student->phone}}" data-rule="minlen:10" title="Please enter atleast 10 char"  required>
                <label for="floatingInput"> Phone No</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="text" name="town" pattern="^[A-Za-z \s*]+$" class="form-control" id="town" placeholder="Home Town" value="{{ $student->town}}" data-rule="minlen:3"  data-msg="Please enter alphabet chars"  required>
                <label for="floatingInput"> Home Town</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="number" class="form-control" name="town_distance" id="town_distance" placeholder="Distance between home and town"  value="{{ (int)$student->town_distance}}" data-rule="minlen:1" title="Please enter numeric number" required>
                <label for="floatingInput"> Distance between home and town</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="number" class="form-control" name="uni_distance" id="uni_distance" placeholder="Distance between town and university"  value="{{ (int)$student->uni_distance}}" data-rule="minlen:1" title="Please enter numeric number" required>
                <label for="floatingInput"> Distance between town and university</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="text" name="father_name" pattern="^[A-Za-z \s*]+$" class="form-control" id="father_name" placeholder="Father Name"  value="{{ $student->father_name}}" data-rule="minlen:3"  title="Please enter alphabet char" required>
                <label for="floatingInput">Father Name</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="number" class="form-control" name="father_income" id="father_income" placeholder="Father's Income"  value="{{(int) $student->father_income}}" data-rule="minlen:1" title="Please enter numeric number">
                <label for="floatingInput"> Father Income</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="text" name="mother_name" pattern="^[A-Za-z \s*]+$" class="form-control" id="mother_name" placeholder="Mother Name"  value="{{ $student->mother_name}}" data-rule="minlen:3"  title="Please enter alphabet char" required>
                <label for="floatingInput"> Mother Name</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="number" class="form-control" name="mother_income" id="mother_income" placeholder="Mother's Income" value="{{ (int)$student->mother_income}}"  data-rule="minlen:1" title="Please enter numeric number">
                <label for="floatingInput"> Mother Income</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-12 form-group form-floating mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $student->email}}"data-rule="email"  data-msg="Please enter a valid email" readonly>
                <label for="floatingInput"> Email</label>
                <div class="validate"></div>
              </div>

            </div>
            <div class="form-group  form-floating mt-3">
              <textarea class="form-control" name="address" rows="5" placeholder="Address"  required>{{ $student->address}}</textarea>
              <label for="floatingInput"> Address</label>
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

            <div class="text-center mt-5"><button type="submit" class="btn btn-success btn-user">Update Student</button></div>
          </form>
  
        </div>


    </section>
@endsection
<!-- End Add Student Section -->