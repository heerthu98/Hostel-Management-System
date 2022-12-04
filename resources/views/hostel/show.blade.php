@extends('layouts.app')

@section('content')
 <!-- ======= Menu Section ======= -->
 <section id="menu" class="menu mt-5">
    <div class="container">

      <div class="section-title">
        <h2>View <span>Hostel</span></h2>
      </div>

      <a href="/hostels"><button type="button" class="btn btn-outline-secondary btn -sm mt-3 mb-3">&larr;	 Back </button> </a> 


      <div class="row menu-container">
        
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Hostel Name: </a><span>{{ $hostel->hostel_name }}</span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>No_of_Rooms: </a><span>{{ $hostel->no_of_rooms}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>No_of_Beds: </a><span>{{ $hostel->no_of_beds}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Gender: </a><span>{{ $hostel->gender_type}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Student's year: </a><span>{{ $hostel->student_year}} </span>
          </div>
        </div> 
      </div>

      <div class="row">
        <div class="col-lg-12 ms-3 mb-3 mt-5 align-items-center text-center">
          <div class="btn-group">        
            <a href="/hostels/{{ $hostel->id }}/edit"><button type="button" class="btn btn-success btn-student">Update </button></a>
            <form action="/hostels/{{ $hostel->id }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" onclick="return confirm('Are you sure to delete this Hostel details?')"class="ms-3 btn btn-danger">Delete</button>
          </form>
        </div>
      </div>


    


    </div>
  </section><!-- End Menu Section -->

@endsection