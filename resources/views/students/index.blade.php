@extends('layouts.app')

@section('content')
 <!-- ======= Menu Section ======= -->
 <section id="menu" class="menu mt-5">
    <div class="container">

      <div class="section-title">
        <h2>View All <span>Students</span></h2>
      </div>

      <div class="row" style="text-align: right">
        <ul>
          <li style="display: inline;"> <span>Do You want add new students? </span></li>
          <li style="display: inline;"> <a href="/add-student">Add</a></li>
          <li style="display: inline;"><div class="vr"></div> </li>
          <li style="display: inline;"> <a href="/import-students">Import</a> </li>
        </ul>
      </div>

      <form action="/students/search" method="GET">
        <!--input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search" required-->   
        
        <div class="col-lg-12 col-md-12 form-floting form-group mt-3">
          <select class="form-select" name="search" id="floatingSelect" aria-label="Floating label select"  required>
              <option value="" selected disabled>Select Course...</option>
              <option value="CST">CST</option>
              <option value="IIT">IIT</option>
              <option value="MRT">MRT</option>
              <option value="SCT">SCT</option>
              <option value="ANS">ANS</option>
              <option value="AQT">AQT</option>
              <option value="BBST">BBST</option>
              <option value="BETA">BETA</option>
              <option value="HTE">HTE</option>
              <option value="ENM">ENM</option>
              <option value="EAG">EAG</option>
              <option value="PLT">PLT</option>
              <option value="TEA">TEA</option>
          </select>
        </div-->      
          
        <button type="submit" class="btn btn-dark btn -sm mt-4"> Search </button>
        <a href="/students"><button type="button" class="btn btn-outline-secondary btn -sm mt-4"> All </button> </a> 
    </form> <br>

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
            <a href="/students/{{ $male_student->id }}">{{ $male_student->first_name }} {{ $male_student->last_name }}</a><span>{{ $male_student->enroll_no }} </span><div class="vr"></div>
          </div>
          <div class="menu-ingredients">
              <i class="bi bi-telephone-fill"></i> <a href="tel:{{ $male_student->phone }}">{{ $male_student->phone }} </a>
              <i class="bi bi-geo-alt-fill"></i> {{ $male_student->address }} 
              <i class="bi bi-envelope-fill"></i> <a href="mailto:{{ $male_student->email }}"> {{ $male_student->email }} </a>
          </div>
        </div>
        @endforeach
      
        <div class="col-lg-12 mt-4 menu-item filter-male">
          <hr>
        </div>

        @foreach ($female_students as $female_student) 
                  
        <div class="col-lg-6 col-md-12 menu-item filter-female">
          <div class="menu-content">
            <a href="/students/{{ $female_student->id }}"> {{ $female_student->first_name }} {{ $female_student->last_name }}</a><span>{{ $female_student->enroll_no }}</span><div class="vr"></div>
          </div>
          <div class="menu-ingredients">
            <i class="bi bi-telephone-fill"></i> <a href="tel:{{ $female_student->phone }}">{{ $female_student->phone }} </a>
            <i class="bi bi-geo-alt-fill"></i> {{ $female_student->address }} 
            <i class="bi bi-envelope-fill"></i> <a href="mailto:{{ $female_student->email }}"> {{ $female_student->email }} </a>
        </div>
        </div>
        @endforeach


      </div>


    </div>
  </section><!-- End Menu Section -->

@endsection