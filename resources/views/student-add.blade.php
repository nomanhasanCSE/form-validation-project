<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Hide the validation indicator (!) when the input field is focused */
        /*.form-control.is-invalid:focus+.invalid-feedback::before {*/
        /*    display: none;*/
        /*}*/

        /* Hide validation messages when corresponding input fields are focused */
        .form-control:focus + .invalid-feedback {
            display: none;
        }
    </style>

</head>
<body>

{{-- <pre>--}}
{{--        @php--}}
{{--            print_r($errors->all())--}}
{{--        @endphp--}}
{{--    </pre>--}}


<h1 class="text-center my-3"> Wecome are stundent panel!</h1>

{{--@if($errors->any())--}}
{{--<ul class="alert alert-danger">--}}
{{--    @foreach( $errors->all() as $error)--}}
{{--       <li> {{$error}} </li>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--@endif--}}

<div class="mt-5 container w-50 mx-auto">
    <form class="row" method="post" action="{{route('student.add')}}">
        @csrf
        <div class="col-md-6 mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            <span id="name-error" class="invalid-feedback">
                @error('name')
                {{ $message }}
                @enderror
            </span>
        </div>
  <div class="col-md-6 mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid
          @enderror" id="email" name="email" value="{{ old('email') }}">
      <span id="name-error" class="invalid-feedback">
          @error('email')
          {{$message}}
          @enderror
      </span>
  </div>
  <div class="col-md-6 mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control @error('age') is-invalid
          @enderror" id="age" name="age" value="{{ old('age') }}">
      <span id="name-error" class="invalid-feedback">
          @error('age')
          {{$message}}
          @enderror
      </span>
  </div>
  <div class="col-md-6 mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="tel" class="form-control @error('phone') is-invalid
          @enderror " id="phone" name="phone" value="{{ old('phone') }}">
      <span id="name-error" class="invalid-feedback">
          @error('phone')
          {{$message}}
          @enderror
      </span>
  </div>
  <div class="col-md-6 mb-3">
    <label for="city" class="form-label">City</label>
      <select class="form-select @error('city') is-invalid
          @enderror" id="city" name="city">
          <option value="">Select City</option>
          <option value="Cumilla" {{ old('city') == 'Cumilla' ? 'selected' : '' }}>Cumilla</option>
          <option value="Dhaka" {{ old('city') == 'Dhaka' ? 'selected' : '' }}>Dhaka</option>
          <option value="Chittagong" {{ old('city') == 'Chittagong' ? 'selected' : '' }}>Chittagong</option>
          <option value="Sylhet" {{ old('city') == 'Sylhet' ? 'sele   cted' : '' }}>Sylhet</option>
      </select>
      <span id="name-error" class="invalid-feedback">
          @error('city')
          {{$message}}
          @enderror
      </span>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

</body>
</html>
