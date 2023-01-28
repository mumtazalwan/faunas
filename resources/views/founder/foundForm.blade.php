@extends('layout.main')

@section('content')
<form action="/add" method="post" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input required type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="full_name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Animal Id</label>
    <!-- <input required type="number" class="form-control" id="exampleInputPassword1" name="animal_id"> -->
    <select class="form-control" name="animal_id">
        @foreach ($foundForm as $foundForm)
           <option name="animal_id" value="{{$foundForm->id}}">{{$foundForm->name}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Birth Date</label>
    <input required type="name" class="form-control" id="exampleInputPassword1" name="birth_date">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nationality</label>
    <input required type="name" class="form-control" id="exampleInputPassword1" name="nationality">
  </div>
  <div class="mb-3 form-check">
    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I agree to the Term of Use and Privacy Polis</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection