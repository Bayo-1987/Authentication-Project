@extends('main')

@section('content')
<main>
        <div class="container-fluid px-4">
            <div class="container">
                        <div class="row justify-content-center">
                            <!--ErrorMsg-->
                            @if ($errors->any())
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!--SuccessMsg-->
                            @if(session('SuccessMsg'))
                                <div class="alert alert-success mt-2" role="alert">
                                    {{session('SuccessMsg')}}
                                </div>
                            @endif
                            <div class="col-lg-9">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Student</h3></div>
                                    <div class="card-body">
                                        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="name" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">First Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="lastname" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="phone" id="inputFirstName" type="number" placeholder="Enter your phone number" />
                                                        <label for="inputFirstName">Phone</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select" name="gender" aria-label="Default select example">
                                                            <option selected>Select Gender</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  style="padding-top: 10px;">
                                                    <div class="form-floating">
                                                    <select class="form-select" name="role" aria-label="Default select example">
                                                        <option value="student" selected>Student Role</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="date_of_birth" id="inputFirstName" type="date" placeholder="Enter your date of birth" />
                                                        <label for="inputFirstName">Date of Birth</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select" name="year" aria-label="Default select example">
                                                            <option selected>Year of Session</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <label for="formFile" class="form-label"></label>
                                                        <input class="form-control" name="image" type="file" id="formFile">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                                <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="4" placeholder="Address"></textarea>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" href="login.html">Add Student</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
</main>
@endsection