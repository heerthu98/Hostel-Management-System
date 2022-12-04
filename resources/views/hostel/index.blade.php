@extends('layouts.app')

@section('content')
 <!-- ======= Menu Section ======= -->
 <section id="menu" class="menu mt-5">
    <div class="container">

      <div class="section-title">
        <h2>View All <span>Hostel details</span></h2>
      </div>

      <div class="row" style="text-align: right">
        <ul>
          <li style="display: inline;"> <span>Do You want add hostel? </span></li>
          <li style="display: inline;"> <a href="/add-hostels">Add</a></li>
        </ul>
      </div>

      
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <li data-filter="*" class="filter-active">Show All</li>
            <li data-filter=".filter-male">Male</li>
            <li data-filter=".filter-female">Female</li>
          </ul>
        </div>
      </div>

     

      <div class="row menu-container">

        @foreach ($male_students as $male_student)           
        <div class="col-lg-6 col-md-12 menu-item filter-male">
          <div class="menu-content">
            <a href="/hostels/{{ $male_student->id }}">{{ $male_student->hostel_name }}</a><div class="vr"></div>
          </div>
        </div>
        @endforeach
      
        <div class="col-lg-12 mt-4 menu-item filter-male">
          <hr>
        </div>

        @foreach ($female_students as $female_student) 
                  
        <div class="col-lg-6 col-md-12 menu-item filter-female">
          <div class="menu-content">
            <a href="/hostels/{{ $female_student->id }}"> {{ $female_student->hostel_name }} </a><div class="vr"></div>
          </div>
        </div>
        @endforeach


      </div>


    </div>
  </section><!-- End Menu Section -->

@endsection