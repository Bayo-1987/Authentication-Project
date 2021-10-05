@extends('main')

@section('content')
<main>
            <div class="container-fluid px-4">
                 <h1 class="mt-4">Manage Classes</h1>
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
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right;">Add Class +</button>

                        <!--Modal Class-->
                        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register Class</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body">
                                    <!--Form inserted here-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                   
                                <div class="card-body">
                                    <form action="{{ route('class.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                           <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="classes" id="inputFirstName" type="text" placeholder="Enter class" />
                                                        <label for="inputFirstName">Class</label>
                                                    </div>
                                                </div>
                                           </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Add Class</button></div>
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
                                    <button type="button" class="btn btn-primary" type="submit">Add Class</button>
                                </div>
                                </div>
                            </div>
                            </div>

                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Class table</li>
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
                                                <th scope="col">Class</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Updated At</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($classData as $key => $classDatas)
                                            <tbody>
                                    
                                                <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
    
                                                <td>{{ $classDatas->classes }}</td>
                                                <td>{{ $classDatas->created_at->diffforHumans() }}</td>
                                                <td>{{ $classDatas->updated_at->diffforHumans() }}</td>

                         <td><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal3{{ $classDatas->id }}"><i class="fas fa-edit"></i></a> &nbsp;
                                                <!--Modal for Edit Button-->
                                                    <!-- Modal -->
                            <div class="modal fade" id="exampleModal3{{ $classDatas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Class</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                            <div class="modal-body">
                                                                <!--Form should be pasted here-->

                                                 <form action="{{ route('class.update', $classDatas->id)  }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <div class="form-floating mb-3 mb-md-0">
                                                                <input class="form-control" value="{{ $classDatas->classes }}" name="classes" id="inputFirstName" type="text" placeholder="Enter class" />
                                                                <label for="inputFirstName">Class</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-4 mb-0">
                                                        <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Update Class</button></div>
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



                                                    <button href="" type = "button" onclick = "deleteClass({{$classDatas->id}})"><span style="color: red;"><i class="fas fa-trash"></i></span></button>&nbsp;
                                                    <!--Delete Functionality-->
                                                    <form id = "delete-form-{{$classDatas->id}}" action="{{ route('class.destroy', $classDatas->id ) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>





                                                    
                                                    <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal2{{ $classDatas->id }}"><span style="color:green;"><i class="fas fa-eye"></i></span></a>&nbsp;
                                                    <!--Modal code here-->
                                                    <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal2{{ $classDatas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Class Profile</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <h6>CLASS</h6>
                                                                        {{$classDatas->classes}}
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6>CREATED AT</h6>
                                                                        {{$classDatas->created_at}}
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h6>UPDATED AT</h6>
                                                                        {{$classDatas->updated_at}}
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

<!---Sweetalert2-->
<script>
function deleteClass(id){
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
      'Your class has been deleted.',
      'success'
    )
  }
})
}


</script>