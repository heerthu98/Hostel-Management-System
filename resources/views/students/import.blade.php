@extends('layouts.app')

@section('content')

    <!-- ======= Import Section ======= -->
<section id="import" class="import mt-5">
    <div class="container">
  
      <div class="section-title">
        <h2><span>Import</span> students</h2>
        <p>New students can be imported here by using CSV or Excel files...</p>
      </div>

      <a href="/students"><button type="button" class="btn btn-outline-secondary btn -sm mt-3 mb-3">&larr;	 Back </button> </a> 

  
      <!--form action="/import-students" method="POST" enctype="multipart/form-data" role="form" class="php-email-form">
          @csrf
          <div class="col-lg-12 col-md-12 form-group">
            <input 
                type="file" 
                name="student_details" 
                id="student_details"
                class="form-control" required />
            <div class="validate"></div>
          </div>
          
      
          <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Successfully Imported. Thank you!</div>
          </div>
          <div class="text-center">
              <button type="submit">Login</button-->
              <!--input type="submit" value="Import" name="import" class="btn btn-block btn-primary">
  
          </div>
      </form-->

      <form method="POST" action="/import-students" enctype="multipart/form-data" class=".import .stu-import-form">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                
                <div class="col-md-12 mb-3 mt-3">
                    <p>Please Upload Details in Excel / CSV Format</p>
                </div>
                {{-- File Input --}}
                <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                    <span style="color:red;">*</span>File Input (Datasheet)</label>
                    <input 
                        type="file" 
                        class="form-control form-control-user @error('file') is-invalid @enderror" 
                        id="exampleFile"
                        name="file" 
                        value="{{ old('file') }}" required>
                        
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

                        @error('file')
                            <div class="error-message"> 
                                <span class="text-danger">{{$message}}</span>
                            </div>
                        @enderror
                </div>

            </div>
        </div>

        <div class="mt-3 card-footer">
            <button type="submit" class="btn btn-success btn-user float-right mb-3">Upload Users</button>
            <a class="btn btn-primary float-right mr-3 mb-3" href="">Cancel</a>
        </div>
    </form>
  
    </div>
  </section><!-- End Import Students Section -->
@endsection