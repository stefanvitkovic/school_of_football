@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<div class="container">
	<div class="row">
        <div class="profile-header-container">   
    		<div class="profile-header-img">
                @if(file_exists(public_path('skills/'.$position->id.'.png')))
                    <img class="img-circle" src="{{url('skills/'.$position->id.'.png')}}" />
                @else
                    <img class="img-circle" src="{{url('skills/default.png')}}" />
                @endif
                <!-- badge -->
                <div class="rank-label-container">
                    <span class="label label-default rank-label">{{$position->position_name}}</span>
                </div>
            </div>
        </div> 
        <div class='row' style="border: 0.2px solid rgb(81, 210, 183); box-shadow: 0 4px 8px 0 rgba(44, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.49);margin-bottom: 40px; ">
        	<div class='col-md-3 white text-center'>
        	  <h3 class="whitesh">Info</h3><hr>
        	  	<p><span class='whitesh'>Name:</span> {{$position->position_name}}</p>
        	  	<p><span class='whitesh'>Player to watch:</span> {{$position->ptv}}</p>
        	</div>
        	<div class='col-md-9 text-justify whitesh' style='padding-bottom: 15px;'>
        	<br>
        	<h3 class='text-center'>Description</h3>
        	<p>{{$position->position_desc}}</p>
        	</div>
		</div>
    </div>
</div>

@endsection