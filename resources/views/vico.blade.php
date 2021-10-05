<td><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal3{{ $studentDatas->id }}"><i class="fas fa-edit"></i></a> &nbsp;
                                                <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal3{{ $studentDatas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!--Form here--->
                                                        <form action="{{route('student.update', $studentDatas->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="name" value="{{ $studentDatas->name }}" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">First Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="lastname" value="{{ $studentDatas->lastname }}" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-top: 10px;">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="phone" value="{{ $studentDatas->phone }}" id="inputFirstName" type="number" placeholder="Enter your phone number" />
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
                                                    <div class="form-floating">
                                                    <select class="form-select" value="{{ $studentDatas->role }}" name="role" aria-label="Default select example">
                                                        <option value="student" selected>Student Role</option>
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
                                                        <select class="form-select"  name="year" aria-label="Default select example">
                                                            <option selected >Year of Session</option>
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
                                                    <img src="{{ url('upload/studentphoto/'.$studentDatas->image) }}" width="200px" height="185px" alt="">
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                                <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="4" placeholder="Address">{{ $studentDatas->address }}</textarea>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" href="login.html">Add Student</button></div>
                                            </div>
                                        </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>



                                                    ///////////////////////


                                                    $validatedData = $request->validate([
            'name' => ['max:25'],
            'lastname' => ['max:25'],
            'image' => ['mimes:jpg, jpeg, png'],
        ]);

        $student = User::find($id);
        if($request->file('image')){
            $file  = $request->file('image');
            unlink(public_path('upload/studentphoto/').$student->image);
            $filename = date('YmdHi').uniqid(). $file->getClientOriginalName();
            $file->move(public_path('upload/studentphoto'), $filename );
        }
        else{
            $filename = $student->image;
        }

        $student->name = $request->name;
        $student->lastname = $request->lastname;
        $student->gender = $request->gender;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->image = $filename;
        $student->save();
        return redirect()->back()->with('SuccessMsg', 'Students profile updated successfully');