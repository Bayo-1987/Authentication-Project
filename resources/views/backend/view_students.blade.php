@extends('main')

@section('title', 'View Student')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h2>Our Students</h2>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-body">
                        <!--Table content-->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Photo</th>
                                <th scope="col">FirstName</th>
                                <th scope="col">LastName</th>
                                <th scope="col">Registration No.</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Role</th>
                                <th  scope="col">View Photo</th>

                            
                                </tr>

                                
                            </thead>
                            @foreach($student as $key => $students)
                            <tbody>
                    
                                <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td><img src="{{ url('upload/studentphoto/'.$students->image) }}" width="100px" height="90px" alt=""></td>
                                <td>{{ $students->name }}</td>
                                <td>{{ $students->lastname }}</td>
                                <td>{{ $students->admission_num }}</td>
                                <td>{{ $students->gender }}</td>
                                <td>{{ $students->role }}</td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal2{{ $students->id }}"><span><i class="fas fa-eye"></i> View</span></button>&nbsp;
                                                                                        <!--Modal code here-->
                                                    <!-- Modal -->
                                                <div class="modal fade" id="exampleModal2{{ $students->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">{{ $students->name }} {{ $students->lastname }} Photo</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        
                                                                        <img src="{{ url('upload/studentphoto/'.$students->image) }}" width="450px" height="400px" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                </td>

                                </tr>
                                
                            </tbody>
                            @endforeach
                        </table>
                            
                    </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"></div>
                        </div>
                </div>
            </div>
        </div>

                       
    </div>
 </main>
@endsection