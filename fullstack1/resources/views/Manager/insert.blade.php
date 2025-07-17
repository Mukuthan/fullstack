<!DOCTYP html>
<html>
    <head>
        <title>Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
      
    <div class='container'>
    <form action="{{route('Manager.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row g-3">
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Manager Name</label>
                <input type="text" class="form-control" name="Man_name" id="exampleFormControlInput1" placeholder="Manager Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Manager Mobile Number</label>
                <input type="number" class="form-control" name="Man_mobile_num" id="exampleFormControlInput1" placeholder="Mobile Number">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Manager Department</label>
                <input type="text" class="form-control" name="Man_dept" id="exampleFormControlInput1" placeholder="Department">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                <input type="file" class="form-control" name="Image" id="exampleFormControlInput1" placeholder="Image">
            </div>

    </div>
    <button type="submit" class="btn btn-success" >Submit</button>
</form>
    </div>
    
    </body>
</html>