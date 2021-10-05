@extends('main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="col-lg-12" style="display: flex; justify-content:center">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">My Result</h3></div>
                    <div class="card-body">
                        <!--Result content place here-->
                        <div class="row">
                            <div class="col-md-5">
                            <img src="{{ url('upload/studentphoto/'.$user->image) }}" width=" 200px" height="170px" alt=""> <br><br>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6" style="font-weight: bold;">
                            NAME: {{$user->lastname}}&nbsp;{{$user->name}} <br><br>
                            GENDER: {{ucfirst ($user->gender)}}&nbsp;<br><br>
                            SESSION: {{$user->year}}&nbsp;<br><br>
                            CLASS: {{$classes->classes}}&nbsp;<br><br>
                            </div>
                        </div>
                        <hr>
                        <h5 style="color: green; text-align:center">RESULT</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            ENGLISH STUDIES: {{$junior->english}} <br><br>
                            MATHEMATICS: {{$junior->mathematics}} <br><br>
                            BASIC SCIENCE: {{$junior->basic_science}} <br><br>
                            BASIC TECHNOLOGY: {{$junior->basic_tech}} <br><br>
                            FRENCH: {{$junior->french}} <br><br>
                            </div>
                            <div class="col-md-6">
                            COMPUTER STUDIES: {{$junior->computer}} <br><br>
                            CIVIC EDUCATION: {{$junior->civic_education}} <br><br>
                            SOCIAL STUDIES: {{$junior->social_studies}} <br><br>
            
                            HOME ECONOMICS: {{$junior->home_economics}} <br><br>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a href="{{ route('result_download', $user->admission_num) }}"><button type="button" class="btn btn-primary">Download Result</button></a>
                    </div>
        </div>
    </div>
</main>
@endsection