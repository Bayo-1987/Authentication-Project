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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Subject</h3></div>
                                    <div class="card-body">
                                        <form action="{{ route('senior_subject.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="subjects" id="inputFirstName" type="text" placeholder="Enter class" />
                                                        <label for="inputFirstName">Subject</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" >Add Subject</button></div>
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