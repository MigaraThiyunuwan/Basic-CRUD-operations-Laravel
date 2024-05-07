<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: rgb(235, 252, 239)">

    <div class="container mt-5">
      <div style="display:flex; justify-content: center">
      <h1 class="m-5" ><b>Student's Details</b></h1>
      </div>

      <div style="display:flex; justify-content: flex-start">
        <a href="{{route('student.create')}}" type="submit" class="btn btn-primary" style="margin: 20px;">Add New Student</a>
      </div>

        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">Birth Day</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
              <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->dateOfBirth}}</td>
                <td ><a href="{{route('student.edit', $student->id)}}" type="submit" class="btn btn-primary" style="margin-left: 30px;">Edit</a>
                  <a href="{{route('student.delete', $student->id)}}" type="submit" class="btn btn-danger" style="margin-left: 30px;">Delete</a>
                </td>
               
              </tr>
              @endforeach
              
              
            </tbody>
          </table>
          
    </div>
    
</body>
</html>