@extends('layouts.app')

@section('content')
<section id="menu" class="menu mt-5">
    <div class="container">
        <div class="section-title">
            <h2><span>Hostel </span>  Appeal Requests</h2>
        </div>

        <h3>Pending Hostel-forms</h3>
    
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">REG-No</th>
                    <th scope="col">Hostelname</th>
                    <th scope="col">Roomno</th>
                    <th scope="col">Reason</th>
                    <th scope="col">AppealReason</th>
                    <th scope="col">Diease</th>

                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    
                    @foreach ($pending_requests as $pending_request)           
                        <tr>
                            <th scope="row">{{ $pending_request->asid }}</th>
                           
                           <td>{{  $pending_request->enroll_no }} </td>
                            <td>{{ $pending_request->hostelname }}</td>
                            <td>{{ $pending_request->roomno }}</td>
                            <td>{{ $pending_request->reason }}</td>
                            <td>{{ $pending_request->appealreason }}</td>
                            <td>{{ $pending_request->disease }}</td>

                            <td>
                                {{-- <form method="POST" >
                   
                                    {{-- <a class="btn btn-info" href="{{ route('hostelforms.show',$hostelform->id) }}">Show</a> --> --}}
                    
                                    {{-- <a class="btn btn-warning" href="/assign-hostel " >Assign hostel & Room</a>  --}}
                   
                                   
                                {{-- </form> --}} 

                                <a class="btn btn-warning" href="/appealsapproved/{{ $pending_request->id }} " >Approved</a>
                                {{-- <a class="btn btn-danger" href="/appeals/{{ $pending_request->id }} " >Reject</a> --}}
                                <form action="/appeals/{{ $pending_request->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('Are you sure to delete this student?')"class="ms-3 btn btn-danger">Reject</button>
                                </form>
                                {{-- <a class="btn btn-secondary" href="/hostel-form/{{ $pending_request->id }} " >Show</a> --}}
                                {{-- <a class="btn btn-danger" href="/hostel-form/{{ $pending_request->id }} " >Delete</a> --}}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</section>
@endsection




