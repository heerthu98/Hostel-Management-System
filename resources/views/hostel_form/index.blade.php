@extends('layouts.app')

@section('content')
<section id="menu" class="menu mt-5">
    <div class="container">
        <div class="section-title">
            <h2><span>Hostel Form</span> Requests</h2>
        </div>

        <h3>Pending Hostel-forms</h3>
    
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Reg-No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Year</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Disease</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    
                    @foreach ($pending_requests as $pending_request)           
                        <tr>
                            <th scope="row">{{ $pending_request->hfid }}</th>
                            <td>{{ $pending_request->enroll_no }}</td>
                            <td>{{ $pending_request->first_name }} {{ $pending_request->last_name }}</td>
                            <td>{{ $pending_request->year }}</td>
                            <td>{{ $pending_request->semester }}</td>
                            <td>{{ $pending_request->disease }}</td>
                            <td>{{ $pending_request->reason }}</td>
                            <td>
                                {{-- <form method="POST" >
                   
                                    {{-- <a class="btn btn-info" href="{{ route('hostelforms.show',$hostelform->id) }}">Show</a> --> --}}
                    
                                    {{-- <a class="btn btn-warning" href="/assign-hostel " >Assign hostel & Room</a>  --}}
                   
                                   
                                {{-- </form> --}} 

                                <a class="btn btn-warning" href="/hostel-form/{{ $pending_request->id }}/edit " >Assign hostel & Room</a>
                                {{-- <a class="btn btn-secondary" href="/hostel-form/{{ $pending_request->id }} " >Show</a> --}}
                                {{-- <a class="btn btn-danger" href="/hostel-form/{{ $pending_request->id }} " >Delete</a> --}}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>


            <br><br><br>
            <h3>Approved Hostel-forms</h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Reg-No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Year</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Disease</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    
                    

                    @foreach ($approved_requests as $approved_request)           
                        <tr>
                            <th scope="row">{{ $approved_request->hfid }}</th>
                            <td>{{ $approved_request->enroll_no }}</td>
                            <td>{{ $approved_request->first_name }} {{ $approved_request->last_name }}</td>
                            <td>{{ $approved_request->year }}</td>
                            <td>{{ $approved_request->semester }}</td>
                            <td>{{ $approved_request->disease }}</td>
                            <td>{{ $approved_request->reason }}</td>
                            <td>
                                {{-- <form method="POST" >
                   
                                    {{-- <a class="btn btn-info" href="{{ route('hostelforms.show',$hostelform->id) }}">Show</a> --> --}}
                    
                                    {{-- <a class="btn btn-warning" href="/assign-hostel " >Assign hostel & Room</a>  --}}
                   
                                   
                                {{-- </form> --}} 

                                {{-- <a class="btn btn-warning" href="/hostel-form/{{ $approved_request->id }}/edit " >Assign hostel & Room</a> --}}
                                <a class="btn btn-secondary" href="/hostel-form/{{ $approved_request->id }} " >Show</a>
                                {{-- <a class="btn btn-danger" href="/hostel-form/{{ $approved_request->id }} " >Delete</a> --}}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</section>
@endsection




