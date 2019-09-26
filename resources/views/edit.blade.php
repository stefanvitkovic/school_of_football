


@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
@if(isset($player))

<div class="container">
	<div class="row">

		<div class='col-md-12'>
	        <div class="profile-header-container">   
	    		<div class="profile-header-img">
	                <img class="img-circle" src="{{url('images/'.$player->image.'.png')}}" />
	                <!-- badge -->

	                <div class="rank-label-container">
	                    <span class="label label-default rank-label">{{$player->ability->shirt_number}}</span>
	                </div>

	            </div>
	        </div> 
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
	        <div class='row' style="border: 0.2px solid rgb(81, 210, 183); box-shadow: 0 4px 8px 0 rgba(44, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.49); margin-bottom: 40px;">
	        	<div class='col-md-3 white text-center'>
	        	  <h3 class="whitesh">Info</h3><hr>
	        	  	<p><span class='whitesh'>Name:</span> {{$player->name}}</p>
	        	  	<p><span class='whitesh'>Last name:</span> {{$player->last_name}}</p>
	        	  	<p><span class='whitesh'>Shirt number:</span> {{$player->ability->shirt_number}}</p>
	        	  	<!-- <p>&nbsp&nbsp Position: MC / AMC / RW</p> -->
	        	  	<p><span class='whitesh'>Height:</span> {{$player->height}} cm</p>
	        	  	<p><span class='whitesh'>Weight:</span> {{$player->weight}} kg</p>
	        	  	<hr>
	        	  	<em><h4>Positions:</h4></em>
	        	  	@foreach($positions as $position)
	        	  		{{$position->position_name}}<br>
	        	  	@endforeach
	        	  	<br>
	        	  	<div class="panel panel-default">
					  <div class="panel-heading">Last Comment</div>
					  <div class="panel-body" style="color:black">{{$player->ability->comment}}</div>
					</div>
	        	</div>
	        	<div class='col-md-9 whitesh' style="padding:15px">
					<form method="POST" action="{{url('players',[$player->id])}}">
			   		 <input type="hidden" name="_method" value="PATCH">
					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					 <input type="hidden" name='id' value="{{$player->id}}">
					 <div class="form-group col-md-4">
					    <label for="shirt_number">Shirt Number</label>
					    <input type="number" min='1' class="form-control" id="shirt_number" name='shirt_number' placeholder="{{$player->ability->shirt_number}}" value="{{$player->ability->shirt_number}}">
					  </div>
					  <div class="form-group col-md-4">
					    <label for="height">Height</label>
					    <input type="number" min='1' class="form-control" id="height" name='height' placeholder="{{$player->height}}" value="{{$player->height}}">
					  </div>
					  <div class="form-group col-md-4">
					    <label for="weight">Weight</label>
					    <input type="number" min='1' class="form-control" id="weight" name='weight' placeholder="{{$player->weight}}" value="{{$player->weight}}">
					  </div>


					  <div class="form-group col-md-6">
					    <label for="speed">Speed</label>
					    <input type="number" min='1' max='20' class="form-control" id="speed" name='speed' placeholder="{{$player->ability->speed}}" value="{{$player->ability->speed}}">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="power">Strength</label>
					    <input type="number" min='1' max='20' class="form-control" id="power" name='power' placeholder="{{$player->ability->power}}"  value="{{$player->ability->power}}">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="creativity">Creativity</label>
					    <input type="number" min='1' max='20' class="form-control" id="creativity" name='creativity' placeholder="{{$player->ability->creativity}}"  value="{{$player->ability->creativity}}">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="dribbling">Dribling</label>
					    <input type="number" min='1' max='20' class="form-control" id="dribbling" name='dribbling' placeholder="{{$player->ability->dribbling}}"  value="{{$player->ability->dribbling}}">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="passing">Passing</label>
					    <input type="number" min='1' max='20' class="form-control" id="passing" name='passing' placeholder="{{$player->ability->passing}}"  value="{{$player->ability->passing}}">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="finishing">Finishing</label>
					    <input type="number" min='1' max='20' class="form-control" id="finishing" name='finishing' placeholder="{{$player->ability->finishing}}"  value="{{$player->ability->finishing}}">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="defending">Defending</label>
					    <input type="number" min='1' max='20' class="form-control" id="defending" name='defending' placeholder="{{$player->ability->defending}}"  value="{{$player->ability->defending}}">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="heading">Heading</label>
					    <input type="number" min='1' max='20' class="form-control" id="heading" name='heading' placeholder="{{$player->ability->heading}}"  value="{{$player->ability->heading}}">
					  </div> 
					  	<div class="form-group">
						  <label for="sel1">Select age group:</label>
						  <select name='age_group' class="form-control" id="sel1">

						  @if(isset($player_category->name))
						  	<option value={{$player_category->category}} selected>{{$player_category->name}}</option>
						  @else
						  	<option value="" selected disabled>age group</option>	  
						  @endif

						    @foreach($categories as $category)
						    <option value={{$category->id}}>{{$category->name}} (<i>{{$category->starting_age}} - {{$category->ending_age}}<i>)</option>
						    @endforeach
						  </select>
						</div>
					  <div class="form-group">
					    <label for="comment">Comment</label>
					    <textarea class="form-control" rows="5" name='comment' id="comment">{{ $player->ability->comment ? $player->ability->comment : 'Player' }}</textarea>
					  </div>
					  <hr>
					<div class='col-md-12'>
						@foreach($all_positions as $position)
						<label class="checkbox-inline"><input type="checkbox" name='cb[]' value="{{$position->id}}">{{$position->position_name}}</label>
							<!-- <label class="checkbox-inline"><input type="checkbox" name='cb[]' value="1">Goalkeeper</label>
							<label class="checkbox-inline"><input type="checkbox" name='cb[]' value="2">Central defender</label>
							<label class="checkbox-inline"><input type="checkbox" name="cb[]" value="3">Full back</label>
							<label class="checkbox-inline"><input type="checkbox" name="cb[]" value="4">Defansive midfielder
	</label>
							<label class="checkbox-inline"><input type="checkbox" name="cb[]" value="5">Playmaker</label>
							<label class="checkbox-inline"><input type="checkbox" name="cb[]" value="6">Advanced midfielder</label>
							<label class="checkbox-inline"><input type="checkbox" name="cb[]" value="7">Winger</label>
							<label class="checkbox-inline"><input type="checkbox" name="cb[]" value="8">Forward</label> -->
						@endforeach
					</div>
					<div class='col-md-12' style="margin-top: 10px;">
					  <button type="submit" class="btn btn-success center-block">Send</button>
					</div>
					  <hr>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@endsection