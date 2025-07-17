<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Product List</title>
  </head>
  <body>

    <div class="container">
        <a href="{{ route('Product.form') }}" class="btn btn-success">Create</a>
        <table class="table">
            <thead>
              <tr>
              <th scope="col">ID</th>
                <th scope="col">Student_Name</th>
                <th scope="col">Student_Email</th>
                <th scope="col">Student_Age</th>
                <th scope="col">Student_Grade</th>
              </tr>
            </thead>
            <tbody>
            @foreach($info as $Student)
              <tr>
              <th scope="row">{{ $Student->id}}</th>
                <th scope="row">{{ $Student->stu_name }}</th>
                <td>{{ $Student->stu_email }}</td>
                <td>{{ $Student->stu_age }}</td>
                <td>{{ $Student->stu_grade}}</td>
                <td>
                    <a href="{{ route('Product.editform', $Student->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('Product.deleteform', $Student->id) }}" class="btn btn-danger">Delete</a>
                </td>
              
    
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>


