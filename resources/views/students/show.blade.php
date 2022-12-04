@extends('layouts.app')

@section('content')
 <!-- ======= Menu Section ======= -->
 <section id="menu" class="menu mt-5">
    <div class="container">

      <div class="section-title">
        <h2>View <span>Student</span></h2>
      </div>

      <a href="/students"><button type="button" class="btn btn-outline-secondary btn -sm mt-3 mb-3">&larr;	 Back </button> </a> 


      <div class="row menu-container">
        
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Full Name: </a><span>{{ $student->first_name }} {{ $student->last_name }}</span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Enrollment-No: </a><span>{{ $student->enroll_no}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Course: </a><span>{{ $student->course}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Batch: </a><span>{{ $student->batch}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Gender: </a><span>{{ $student->gender}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Phone No: </a><span>{{ $student->phone}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Address: </a><span>{{ $student->address}} </span>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Home Town: </a><span>{{ $student->town}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Distance between home and town: </a><span>{{ $student->town_distance}}km </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Distance between home-town and university: </a><span>{{ $student->uni_distance}}km </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Father Name: </a><span>{{ $student->father_name}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Father's Income: </a><span>Rs. {{ $student->father_income}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Mother's Name: </a><span>{{ $student->mother_name}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Mother's Income: </a><span>Rs. {{ $student->mother_income}} </span>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 menu-item">
          <div class="field">
            <a>Email: </a><span>{{ $student->email}} </span>
          </div>
        </div>    
      </div>

      <div class="row">
        <div class="col-lg-12 ms-3 mb-3 mt-5 align-items-center text-center">
          <div class="btn-group">        
            <a href="/students/{{ $student->id }}/edit"><button type="button" class="btn btn-success btn-student">Update </button></a>
            <form action="/students/{{ $student->id }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" onclick="return confirm('Are you sure to delete this student?')"class="ms-3 btn btn-danger">Delete</button>
          </form>
        </div>
      </div>


    


    </div>
  </section><!-- End Menu Section -->

@endsection