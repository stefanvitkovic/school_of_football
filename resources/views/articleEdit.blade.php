@extends('layouts.master')
@section('content')

<div class='col-md-10 col-md-offset-1'>
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<div style="margin-top: 80px;margin-bottom: 110px;min-height: 300px" class="whitesh">

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

	<form method="POST" action="{{route('articles.update',['id'=>$article->id])}}">
	  <input type="hidden" name="_method" value="PUT">
	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" name='title' value="{{$article->title}}">
	  </div>
	  <div class="form-group">
	    <label for="body">Body</label>
	    <input type="text" class="form-control" id="body" name="body" value="{{$article->body}}">
	  </div>
	  <button type="submit" class="btn btn-default">Send</button>
	  <br><br>
	</form>

</div>
</div>
@endsection