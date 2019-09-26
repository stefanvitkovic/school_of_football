@extends("layouts.master")
@section('content')
<div class='col-md-10 col-md-offset-1'>
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<div style="margin-top: 80px;" class="whitesh">

@if (session('message'))
  <div class="alert alert-success">
      {{ session('message') }}
  </div>
@endif
@if (count($errors) > 0)
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
      
<form method="POST" action="{{route('players.store')}}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name='name' placeholder="Name">
  </div>
  <div class="form-group">
    <label for="last_name">Last name</label>
    <input type="text" class="form-control" id="last_name" name='last_name' placeholder="Last name">
  </div>
  <div class="form-group">
    <label for="date">Date of birth <i>( day - month - year )</i></label>
    <input type="date" class="form-control" id="date" name='date' placeholder="Date of birth">
  </div>
  
  <div class="form-group">
    <label for="height">Height</label>
    <input type="number" class="form-control" min="1" id="height" name="height" placeholder="Height">
  </div>
  <div class="form-group">
    <label for="weight">Weight</label>
    <input type="number" class="form-control" min="1" id="weight" name="weight" placeholder="Weight">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Image</label>
    <input type="file" name="image" id="exampleInputFile">
    <p class="help-block">Profile Image</p>
  </div>
  <button type="submit" class="btn btn-success">Send</button>
  <br><hr>
  
</form>
</div>
</div>


@endsection