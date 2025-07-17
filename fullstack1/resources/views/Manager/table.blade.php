<html>
    <head>
        <title>DB Manager Table</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
      <div class='Container'>
      <a href="{{ route('Manager.insert') }}" class="btn btn-success">Create</a>
    <table class='table'>
      <thead>
  <tr>
    <th>id</th>
    <th>man name</th>
    <th>man mobile</th>
    <th>man dept</th>
    <th>Image</th>
    <th>created time</th>
    <th>updated time</th>
  </tr>
</thead>
<tbody>
  @foreach($info as $managers)
  <tr>
  <td>{{$managers->id}}</td>
    <td>{{$managers->man_name}}</td>
    <td>{{$managers->man_mobile_num}}</td>
    <td>{{$managers->man_dept}}</td>
    <td><img src="{{asset('Uploads/'.$managers->image)}}" alt="Image not found" width="100" height="100"></td>
    <td>{{$managers->update_date}}</td>
    <td>{{$managers->create_date}}</td>
    <td>
      <a href="{{ route('Manager.edit', $managers->id) }}" class="btn btn-warning">Edit</a>
      <a href="{{ route('Manager.destroy', $managers->id) }}" class="btn btn-danger">Delete</a>
    </td>

  </tr>
@endforeach
</tbody>
</table>
</div>
    </body>
</html>