@extends('layouts.app')

@section('content')

    <!-- ======= Edit Hostel Section ======= -->
    <section id="book-a-table" class="book-a-table mt-3">
        <div class="container">
  
          <div class="section-title">
            <h2>Update <span>Hostel Details</span></h2>
            <p>Hostel details can be updated here.</p>
          </div>

          <a href="/hostels/{{ $hostel->id }}"><button type="button" class="btn btn-outline-secondary btn -sm mt-3 mb-3">&larr;	 Back </button> </a> 

          <form action="/hostels/{{ $hostel->id }}" method="post" role="form" class="form">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="text" name="hname" class="form-control" id="hname" placeholder="Hostel Name" value="{{ $hostel->hostel_name}}" data-msg="Please enter alphabet chars" readonly>
                <label for="floatingInput"> Hostel Name</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="number" class="form-control" name="roomno" id="roomno" placeholder="No_of_Rooms"  value="{{(int) $hostel->no_of_rooms}}" data-rule="minlen:1" data-msg="Please enter numeric number">
                <label for="floatingInput"> No_of_Rooms</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group form-floating mt-3">
                <input type="number" class="form-control" name="bedno" id="bedno" placeholder="No_of_Beds" value="{{ (int)$hostel->no_of_beds}}"  data-rule="minlen:1" data-msg="Please enter numeric number">
                <label for="floatingInput"> No_of_Beds</label>
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-floting form-group mt-3">
                <label for="floatingSelect">Gender</label>
                <select class="form-select" name="gender" id="floatingSelect" aria-label="Floating label select"  required>
                    <option value="" selected disabled>Select Gender...</option>
                    <option value="Male" {{$hostel->gender_type == 'Male'  ? 'selected' : '' }} >Male</option>
                    <option value="Female" {{$hostel->gender_type == 'Female'  ? 'selected' : '' }} >Female</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6 form-floting form-group mt-3">
                <label for="floatingSelect">Student's Year</label>
                <select class="form-select" name="stuyear" id="floatingSelect" aria-label="Floating label select"  required>
                    <option value="" selected disabled>Select Year...</option>
                    <option value="1" {{$hostel->student_year == '1'  ? 'selected' : '' }} >First year</option>
                    <option value="2" {{$hostel->student_year == '2'  ? 'selected' : '' }} >Second year</option>
                    <option value="3" {{$hostel->student_year == '3'  ? 'selected' : '' }} >Third year</option>
                </select>
              </div>
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

            <div class="text-center mt-5"><button type="submit" class="btn btn-success btn-user">Update Hostel details</button></div>
          </form>
  
        </div>


    </section>
@endsection
<!-- End Edit hostel Section -->