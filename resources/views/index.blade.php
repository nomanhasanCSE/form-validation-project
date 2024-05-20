<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
  @if (session()->has('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif

  <h1>Welcome to Student Panel!</h1>

  <div class="card-header mt-4">
    <a href="{{ route('student.create') }}" class="btn btn-primary float-end">Add Student</a>
  </div>

  <div class="mt-5">
        <table class="table w-75 mx-auto table-border border-primary">
            <thead class="table-dark fs-4 text-center align-middle ">
            <tr class="">
                <td>Name</td>
                <td>Email</td>
                <td>Age</td>
                <td>Phone</td>
                <td>City</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            </thead>
            <tbody class="text-center ">
        @foreach($results as $result)
            <tr>
                <td> {{$result->name}}</td>
                <td> {{$result->email}} </td>
                <td> {{$result->age}} </td>
                <td> {{$result->phone_number}} </td>
                <td> {{$result->city}} </td>
                <td> <a href="{{route('student.update', $result->id)}}" class="btn btn-info">Edit</a> </td>
                <td> <a href="{{route('student.delete', $result->id)}}" class="btn btn-danger">Delete</a> </td>
            </tr>
        @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
