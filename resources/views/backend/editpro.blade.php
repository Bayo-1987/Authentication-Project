@extends('main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                @if(session('SuccessMsg'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('SuccessMsg')}}
                                    </div>
                                @endif
                                    <div class="card-header"><h3 class="text-center font-weight-light">Edit Profile</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('updateprofile') }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name="name" type="text" value="{{ $editprofile->name }}" />
                                                <label for="inputEmail">FirstName</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name="lastname" type="text" value="{{ $editprofile->lastname }}" />
                                                <label for="inputEmail">LastName</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name="phone" type="number" value="{{ $editprofile->phone }}" />
                                                <label for="inputEmail">Phone</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="4" placeholder="Address">{{ $editprofile->address }}</textarea>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                                <button class="btn btn-primary" type="submit">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                    
                                    </div>
                                </div>

    </div>
</main>
@endsection