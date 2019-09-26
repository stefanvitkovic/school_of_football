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
<form method="POST" action="{{route('positions.update',['id'=>$position->id])}}" enctype="multipart/form-data">
  {{ csrf_field() }}
  @method('PATCH')
  <div class="form-group">
    <label for="name">Position Name</label>
    <input type="text" class="form-control" id="name" name='name' value="{{$position->position_name}}" placeholder="{{$position->position_name}}">
  </div>
  <div class="form-group">
    <label for="description">Position Description</label>
    <input type="text" class="form-control" id="description" name='description' value="{{$position->position_desc}}" placeholder="{{$position->position_desc}}">
  </div>
  <div class="form-group">
    <label for="ptv">Player to watch</label>
    <input type="text" class="form-control" id="ptv" name='ptv' value="{{$position->ptv}}" placeholder="{{$position->ptv}}">
  </div>
  <div class="form-group">
    <label for="positionInputFile">Position Image</label>
    <input type="file" name="positionImage" id="positionInputFile">
  </div>
  <div class="form-group">
    <label for="ptvInputFile">Player Image</label>
    <input type="file" name="ptvImage" id="ptvInputFile">
  </div>
  <button type="submit" class="btn btn-success">Send</button>
  <br>
  
</form>
</div>
</div>


@endsection