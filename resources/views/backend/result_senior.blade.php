<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
        font-weight: bold;
        font-size: 45px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: purple;
        margin-top: -20px;
    }
    h4{
        text-align: center;
        font-weight: bold;
        font-size: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: red;
    }
    .biodata{
        font-size: 17px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        line-height: 15px;
        font-weight: bold;
    }
    .subj{
        font-size: 15px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        line-height: 15px;
    }
</style>
<body>
<div class="container-fluid">
    <h1>ERNZOSPACE HIGH SCHOOL</h1>
    <h4>STUDENT'S RESULT</h4>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ public_path('upload/studentphoto/'.$user->image) }}" width=" 200px" height="170px" alt=""> <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="biodata">
                    NAME: {{$user->lastname}}&nbsp;{{$user->name}} <br><br>
                    GENDER: {{ucfirst ($user->gender)}}&nbsp;<br><br>
                    SESSION: {{$user->year}}&nbsp;<br><br>
                    CLASS: {{$classes->classes}}&nbsp;<br><br>
                  
                </div>
                <hr>
                <h4>RESULT</h4>
                <div class="subj">
                    ENGLISH LANGUAGE: {{$senior->english}} <br><br>
                    MATHEMATICS: {{$senior->mathematics}} <br><br>
                    CHEMISTRY: {{$senior->chemistry}} <br><br>
                    PHYSICS: {{$senior->physics}} <br><br>
                    BIOLOGY: {{$senior->biology}} <br><br>
                    COMPUTER STUDIES: {{$senior->computer}} <br><br>
                    CIVIC EDUCATION: {{$senior->civic_education}} <br><br>
                    LITERATURE: {{$senior->literature}} <br><br>
                    GOVERNMENT: {{$senior->government}} <br><br>
                    ECONOMICS: {{$senior->economics}} <br><br>
                    TOTAL: <br><br>
                   
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>