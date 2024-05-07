<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: rgb(218, 241, 245)">
    <div class="container mt-5" >
        <form action="{{route('student.save')}}" method="POST">
            @csrf
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                        
                    @endforeach
                </ul>
            </div>
            @endif

            <div style="display:flex; justify-content: center">
            <h1 class="m-5" ><b>Enter Student Details</b></h1>
            </div>

            <div class="form-group" style="margin-top: 20px">
            <label for="exampleInputEmail1"><b>First Name</b></label>
            <input type="text" class="form-control" name="first_name" id="first_name" aria-describedby="emailHelp" placeholder="First Name">
            </div>

            <div class="form-group" style="margin-top: 20px">
            <label for="exampleInputPassword1"><b>Last Name</b></label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
            </div>

            <div class="form-group" style="margin-top: 20px">
                <label for="exampleInputPassword1"><b>Contact_No</b></label>
                <input type="number" class="form-control" name="contact_no" id="contact_no" placeholder="Contact_No">
            </div>

            <div class="form-group" style="margin-top: 20px">
                <label for="exampleInputPassword1"><b>Address</b></label>
                <input type="address" class="form-control" name="address" id="address" placeholder="Address">
            </div>

            <div class="form-group" style="margin-top: 20px">
                <label for="exampleInputPassword1"><b>Date of Birth</b></label>
                <input type="text" class="form-control" name="dateOfBirth" id="dateOfBirth" placeholder="Date of Birth">
            </div>

            

            <div style="display:flex; justify-content: center">
                <a href="{{route('student.index')}}" type="submit" class="btn btn-danger" style="margin: 20px;">Back</a>
                <button type="submit" class="btn btn-success" style="margin: 20px;">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>