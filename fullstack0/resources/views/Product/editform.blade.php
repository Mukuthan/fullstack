<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create Employee</title>
  </head>
  <body>

    <div class="container">
        <form action="{{ route('Product.updateform',$form->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                <input type="text" class="form-control" name="stu_name" id="exampleFormControlInput1" value="{{ $form->stu_name }}" placeholder=" Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Student Email</label>
                <input type="text" class="form-control" name="stu_email" id="exampleFormControlInput1" value="{{ $form->stu_email }}" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Student Age</label>
                <input type="number" class="form-control" name="stu_age" id="exampleFormControlInput1" value="{{ $form->stu_age }}" placeholder="Age">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Student Grade</label>
                <input type="number" class="form-control" name="stu_grade" id="exampleFormControlInput1" value="{{ $form->stu_grade }}" placeholder="Grade">
            </div>
            <button type="submit" class="btn btn-success" >Submit</button>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
