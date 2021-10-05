@extends('main')

@section('title', 'Dashboard')
@section('content')
<main>
                    <div class="container-fluid px-4">
               <div class="mb-6">
                   <h1>Dashboard</h1>
                </div>
                        <div class="row mt-3">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><span style="font-size: 48px;"><i class="fas fa-users" style="float: right;"></i> 
                                    {{ $student->count() }}</span><br><h4>Students</h4></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><span style="font-size: 48px;"><i class="fas fa-users" style="float: right;"></i> 
                                    {{ $teacher->count() }}</span><br><h4>Teachers</h4></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><span style="font-size: 48px;"><i class="fas fa-home" style="float: right;"></i> 
                                    {{ $classes->count() }}</span><br><h4>Classes</h4></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><span style="font-size: 48px;"><i class="fas fa-book" style="float: right;"></i> 
                                    {{ $junior_subject ->count() }}</span><br><h4>Junior Subjects</h4></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><span style="font-size: 48px;"><i class="fas fa-book" style="float: right;"></i> 
                                    {{ $senior_subject ->count() }}</span><br><h4>Senior Subjects</h4></div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </main>
@endsection