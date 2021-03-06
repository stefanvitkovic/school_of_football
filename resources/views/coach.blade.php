@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<div class="container">
	<div class="row">
        <div class="profile-header-container">   
    		<div class="profile-header-img">
                <img class="img-circle" src="{{url('imagesc/'.$coach->image.'.png')}}" />
                <!-- badge -->
                <div class="rank-label-container">
                    <span class="label label-default rank-label">{{$coach->name}} {{$coach->last_name}}</span>
                </div>
            </div>
        </div> 
        <div class='row' style="border: 0.2px solid rgb(81, 210, 183); box-shadow: 0 4px 8px 0 rgba(44, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.49);margin-bottom: 40px; ">
        	<div class='col-md-3 white text-center'>
        	  <h3 class="whitesh">Info</h3><hr>
        	  	<p><span class='whitesh'>Name:</span> {{$coach->name}}</p>
        	  	<p><span class='whitesh'>Last name:</span> {{$coach->last_name}}</p>
                <p><span class='whitesh'>Date of Birth:</span> {{$coach->date}}</p>
        	  	<p><span class='whitesh'>Height:</span> {{$coach->height}} cm</p>
        	  	<p><span class='whitesh'>Weight:</span> {{$coach->weight}} kg</p>
        	</div>
        	<div class='col-md-9 text-justify whitesh' style='padding-bottom: 15px;'>
        	<br>
        	<h3 class='text-center'>Bio</h3>
        	<p>{{$coach->bio}}</p>
        	</div>
		</div>
    </div>
</div>

@endsection