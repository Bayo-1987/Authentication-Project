@extends('main')

@section('title', 'Manage Student')
@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Students</h1>
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
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right;">Add Student +</button>

                        <!--Modal Class-->
                        <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Register Student</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!--Form inserted here-->
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                   
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
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" type="submit">Add Student</button>
                                </div>
                                </div>
                            </div>
                            </div>

                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Student's table</li>
                        </ol>
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
                                                <th scope="col">Reg No.</th>
                                                
                                                <th scope="col">Date of Birth</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($studentData as $key => $studentDatas)
                                            <tbody>
                                    
                                                <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td><img src="{{ url('upload/studentphoto/'.$studentDatas->image) }}" width="100px" height="90px" alt=""></td>
                                                <td>{{ $studentDatas->name }}</td>
                                                <td>{{ $studentDatas->lastname }}</td>
                                                <td>{{ $studentDatas->admission_num }}</td>
                                               
                                                <td>{{ $studentDatas->date_of_birth }}</td>
                                                <td>{{ $studentDatas->gender }}</td>
                                                <td>{{ $studentDatas->role }}</td>
                                                <td>
                                                <a href="{{ route('result_download', $studentDatas->admission_num) }}"><i class="fas fa-print"></i></a>
                                                <a href="{{ route('result_senior', $studentDatas->admission_num) }}"><i class="fas fa-book"></i></a>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal3{{ $studentDatas->id }}"><i class="fas fa-edit"></i></a> &nbsp;
                                                <!--Modal for Edit Button-->
                                                    <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal3{{ $studentDatas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Student's Profile</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!--Form should be pasted here-->

                                                                <form action="{{ route('student.update', $studentDatas->id)  }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-3 mb-md-0">
                                                                                    <input class="form-control" value="{{ $studentDatas->name }}" name="name" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                                                    <label for="inputFirstName">First Name</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-floating">
                                                                                    <input class="form-control" value="{{ $studentDatas->lastname }}" name="lastname" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                                                    <label for="inputLastName">Last name</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6" style="padding-top: 10px;">
                                                                                <div class="form-floating mb-3 mb-md-0">
                                                                                    <input class="form-control" value="{{ $studentDatas->phone }}" name="phone" id="inputFirstName" type="number" placeholder="Enter your phone number" />
                                                                                    <label for="inputFirstName">Phone</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6"  style="padding-top: 10px;">
                                                                                <div class="form-floating mb-3 mb-md-0">
                                                                                    <select class="form-select" name="gender" aria-label="Default select example">
                                                                                        <option value="male" {{($studentDatas->gender == 'male')?'selected':''}}>Male</option>
                                                                                        <option value="female" {{($studentDatas->gender == 'female')?'selected':''}}>Female</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6"  style="padding-top: 10px;">
                                                                                <div class="form-floating mb-3 mb-md-0">
                                                                                    <input class="form-control" value="{{ $studentDatas->date_of_birth }}" name="date_of_birth" id="inputFirstName" type="date" placeholder="Enter your date of birth" />
                                                                                    <label for="inputFirstName">Date of Birth</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control" value="{{ $studentDatas->email }}" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                                            <label for="inputEmail">Email address</label>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-3 mb-md-0">
                                                                                    <label for="formFile" class="form-label"></label>
                                                                                    <input class="form-control" name="image" type="file" id="formFile">
                                                                                </div>
                                                                                <img src="{{ url('upload/studentphoto/'.$studentDatas->image) }}" width="200px" height="180px" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                                                            <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="4" placeholder="Address">{{ $studentDatas->address }}</textarea>
                                                                        </div>
                                                                        <div class="mt-4 mb-0">
                                                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" href="login.html">Update Profile</button></div>
                                                                        </div>
                                                                    </form>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" type="submit" class="btn btn-primary">Update</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>

                                                <!--All for edit button-->




                                                    <button href="" type = "button" onclick = "deleteStudent({{$studentDatas->id}})"><span style="color: red;"><i class="fas fa-trash"></i></span></button>&nbsp;
                                                    <!--Delete Functionality-->
                                                    <form id = "delete-form-{{$studentDatas->id}}" action="{{ route('student.destroy', $studentDatas->id ) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>

                                                    
                                                    <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal2{{ $studentDatas->id }}"><span style="color:green;"><i class="fas fa-eye"></i></span></a>&nbsp;
                                                    <!--Modal code here-->
                                                    <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal2{{ $studentDatas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Student's Profile</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <h6>FIRSTNAME</h6>
                                                                        {{$studentDatas->name}}
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6>LASTNAME</h6>
                                                                        {{$studentDatas->lastname}}
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6>DATE OF BIRTH</h6>
                                                                        {{$studentDatas->date_of_birth}}
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6>REG NUMBER</h6>
                                                                        {{$studentDatas->admission_num}}
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6>GENDER</h6>
                                                                        {{$studentDatas->gender}}
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6>PHONE</h6>
                                                                        {{$studentDatas->phone}}
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6>EMAIL</h6>
                                                                        {{$studentDatas->email}}
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6>ADDRESS</h6>
                                                                        {{$studentDatas->address}}
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6>PHOTO</h6>
                                                                        <img src="{{ url('upload/studentphoto/'.$studentDatas->image) }}" width="200px" height="185px" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
<!--ASSIGN CLASS TO STUDENT ICON AND LINK-->
<a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal5{{ $studentDatas->id }}"><span style="color:grey;"><i class="fas fa-user"></i></span></a>&nbsp;
<!--Modal class-->
                                                    <!--Modal code here-->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal5{{ $studentDatas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Student's Profile</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="{{ route('assignclass') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                                <div class="row mb-3">

                                                                    <div class="col-md-12" style="padding-top: 10px;">
                                                                        <div class="form-floating mb-3 mb-md-0">
                                                                            <input class="form-control" value="{{ $studentDatas->admission_num }}" name="admission_num" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                                            <label for="inputFirstName">Admission Number</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12" style="padding-top: 10px;">
                                                                        <div class="form-floating mb-3 mb-md-0">
                                                                            <select class="form-select" name="classes" aria-label="Default select example">
                                                                                <option selected>Select Class</option>
                                                                                @foreach($classAssign as $classAssigns)
                                                                                <option value="{{ $classAssigns->classes }}">{{ $classAssigns->classes }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                            <div class="mt-4 mb-0">
                                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Assign Class</button></div>
                                                            </div>
                                                        </form>
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
                                        {{$studentData->links()}}
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

<!---Sweetalert2-->
<script>
function deleteStudent(id){
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    event.preventDefault();
    document.getElementById('delete-form-'+id).submit();

    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
}


</script>