<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<h1 class="text-center my-3"> Welcome to student panel!</h1>

<div class="card-header ">

        </div>

        <div class="mt-5 container w-50 mx-auto">
    <form class="row" method="post" action="{{route('student.update', $results->id)}}">
        @csrf
  <div class="col-md-6 mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$results->name}}" required>
  </div>
  <div class="col-md-6 mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$results->email}}" required>
  </div>
  <div class="col-md-6 mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" id="age" name="age" value="{{$results->age}}" required>
  </div>
  <div class="col-md-6 mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="tel" class="form-control" id="phone" name="phone" value="{{$results->phone_number}}" required>
  </div>
        <div class="col-md-6 mb-3">
            <label for="city" class="form-label">City</label>
            <select class="form-select" id="city" name="city" required>
                <option value="">Select City</option>
                <option value="Cumilla" {{ $results->city == 'Cumilla' ? 'selected' : '' }}>Cumilla</option>
                <option value="Dhaka" {{ $results->city == 'Dhaka' ? 'selected' : '' }}>Dhaka</option>
                <option value="Chittagong" {{ $results->city == 'Chittagong' ? 'selected' : '' }}>Chittagong</option>
                <option value="Sylhet" {{ $results->city == 'Sylhet' ? 'selected' : '' }}>Sylhet</option>
            </select>
        </div>

        <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

</body>
</html>
