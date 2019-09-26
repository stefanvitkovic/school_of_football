@extends('layouts.master')
@section('content')
<div class='col-md-10 col-md-offset-1'>
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<div style="margin-top: 80px;margin-bottom: 110px;" class="whitesh">

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

  <form method="POST" action="{{route('sponsorships.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Name</label>
      <input type="text" class="form-control" id="title" name='name' placeholder="name">
    </div>
    <div class="form-group">
      <label for="body">Description</label>
      <input type="text" class="form-control" id="body" name="desc" placeholder="description">
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Select Image</label>
      <input type="file" name="image" id="exampleInputFile">
    </div>
    <button type="submit" class="btn btn-default">Send</button>
    <br><br>
  </form>
</div>
</div>
@endsection