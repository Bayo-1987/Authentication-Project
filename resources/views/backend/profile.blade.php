@extends('main')

@section('content')
    <main>
            <div class="container-fluid px-4">
            <div class="row justify-content-center">
            <div class="col-lg-10">
                   <div class="card mt-4 ">
                        <div class="card-header"><h3 class="text-center font-weight-light">My Profile</h3></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                @if(Auth::user()->role == 'student')
                                <img src="{{ url('upload/studentphoto/'.$user->image) }}" width="200px" height="185px" alt=""><br><br>
                                @endif
                                @if(Auth::user()->role == 'teacher')
                                <img src="{{ url('upload/teacherphoto/'.$user->image) }}" width="200px" height="185px" alt=""><br><br>
                                @endif
                                FIRSTNAME: <span style="font-size: 18px; font-weight:bold;">{{$user->name}} </span><br><br>
                                DATE OF BIRTH: <span style="font-size: 18px; font-weight:bold;">{{$user->date_of_birth}} </span><br><br>
                                @if(Auth::user()->role == 'student')
                                YEAR OF SESSION: <span style="font-size: 18px; font-weight:bold;">{{$user->year}} </span><br><br>
                                @endif
                                @if(Auth::user()->role == 'teacher')
                                YEAR OF EMPLOYMENT: <span style="font-size: 18px; font-weight:bold;">{{$user->year}} </span><br><br>
                                @endif
                                ROLE: <span style="font-size: 18px; font-weight:bold;">{{$user->role}} </span><br><br>
                                </div>
                                <div class="col-md-6">
                                LASTNAME: <span style="font-size: 18px; font-weight:bold;">{{$user->lastname}} </span><br><br>
                                @if(Auth::user()->role == 'student')
                                ADMISSION NUM: <span style="font-size: 18px; font-weight:bold;">{{$user->admission_num}} </span><br><br>
                                @endif
                                @if(Auth::user()->role == 'teacher')
                                STAFF ID: <span style="font-size: 18px; font-weight:bold;">{{$user->staff_id}} </span><br><br>
                                @endif
                                PHONE: <span style="font-size: 18px; font-weight:bold;">{{$user->phone}} </span><br><br>
                                ADDRESS: <span style="font-size: 18px; font-weight:bold;">{{$user->address}} </span><br><br><br>
                                <a href="{{ route('editprofile') }}" class="btn btn-primary">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                </div>
            </div>
    </main>
@endsection



<!---OUR CODE 
 USERNAME: <span style="font-size: 20px; font-weight:bold;">{{$user->name}} </span> <br><br>
               EMAIL: <span style="font-size: 20px; font-weight:bold;">{{$user->email}} </span> <br><br>
               <a href="{{ route('editprofile') }}" class="btn btn-primary">Edit Profile</a>
-->