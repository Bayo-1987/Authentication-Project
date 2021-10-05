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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Result</h3></div>
                                    <div class="card-body">
                                        <form action="{{route('store_result')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="english" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">English</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="mathematics" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Mathematics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="basic_science" id="inputFirstName" type="number" placeholder="Enter your phone number" />
                                                        <label for="inputFirstName">Basic Science</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="home_economics" id="inputFirstName" type="number" placeholder="Enter your phone number" />
                                                        <label for="inputFirstName">Home Economics</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="basic tech" id="inputFirstName" type="number" placeholder="Enter your phone number" />
                                                        <label for="inputFirstName">Basic Technology</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="computer" id="inputFirstName" type="number" placeholder="Enter your phone number" />
                                                        <label for="inputFirstName">Computer Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="french" id="inputFirstName" type="number" placeholder="Enter your phone number" />
                                                        <label for="inputFirstName">French</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="social studies" id="inputFirstName" type="text" placeholder="Enter your date of birth" />
                                                        <label for="inputFirstName">Social Studies</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="civic_education" id="inputFirstName" type="text" placeholder="Enter your date of birth" />
                                                        <label for="inputFirstName">Civic Education</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-select" name="admission_num" aria-label="Default select example">                                                           
                                                            <option selected>Select Admission number</option>
                                                            @foreach($admission as $admissions)
                                                            <option value="{{ $admissions->admission_num }}">{{ $admissions->admission_num }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Add Result</button></div>
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