
@extends('layouts.master')
@section('content')
<style type="text/css">
	.klasa{}
	hr{
		border-top:1px solid #51D2B7;
	}
	.modal-header{
		border-bottom: 1px solid #51D2B7;
	}
	.modal-footer{
		border-top: 1px solid #51D2B7;
	}
	.vcenter {
    display: inline-block;
    vertical-align: middle;
    float: none;
	}

</style>

<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<div class="container">
	<div class="row">
        <div class="profile-header-container">   
        	<div class="row" id="top_div">
    		<div class="profile-header-img col-md-3 vcenter">
                <img class="img-circle" src="{{url('images/'.$full_info->image.'.png')}}" />
                <!-- badge -->
                <div class="rank-label-container">
                    <span class="label label-default rank-label">{{$full_info->shirt_number}}</span>
                </div>
            </div>
            <div class="col-md-8 vcenter">
            	<div class='row'>
		        	<div class="profile-header-container2 text-center" style="text-align:center !important">   
		        	@foreach($positions as $position)
			    		<div class="profile-header-img">
			    			<a data-toggle='modal' href="#{{$position->id}}">
			    				@if(file_exists(public_path('skills/'.$position->id.'.png')))
			                		<img class="img-skills" src="{{url('skills/'. $position->id .'.png')}}" />
			                	@else
			                		<img class="img-skills" src="{{url('skills/default.png')}}" />
			                	@endif
			                </a>
			                	<div class="rank-label-container2 text-center">
				                    <span class="label label-default rank-label2">{{substr($position->position_name,0,13)}}</span>
				                </div>

			                
			            </div>
			        
			        
					<div class='modal fade' id="{{$position->id}}" tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
					    <div class='modal-dialog'>
					      <div class='modal-content' style="background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));/*background: linear-gradient(#e74c3c,#000000);*/color:white">
					        <div class='modal-header'>
					          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					          <h4 class='modal-title text-center'>{{$position->position_name}}</h4>
					        </div>
					        <div class='modal-body'>
					        <div class="profile-header-container" style="margin-top: 0px">   
					    		<div class="profile-header-img">
					                <img class="img-circle" src="{{url('images/'.$full_info->image.'.png')}}" />
					                <!-- badge -->
					                <div class="rank-label-container">
					                    <span class="label label-default rank-label">{{$full_info->shirt_number}}</span>
					                </div>
					            </div>
					            <div class="profile-header-img">
					            	@if(file_exists(public_path('skills/'.$position->id.'.png')))
					                	<img class="img-circle" src="{{url('skills/players/'. $position->id .'.png')}}" />
					                @else
					                	<img class="img-circle" src="{{url('skills/players/default.png')}}" />
					                @endif
					                <!-- badge -->
					                <div class="rank-label-container">
					                    <span class="label label-default rank-label">{{$position->position_name}}</span>
					                </div>
					            </div>
					        </div> 
					        <div class="row">
					        	<div class="col-md-12">
					        		<em><p>{{$full_info->comment}}</p></em>
					        	</div>
					        </div>
					        <hr>
					          <div style="text-align:left">
					          <p>Player to watch</p>
					          <ul>
					          	<li>{{$position->ptv}}</li>
					          </ul>
					          <p class="text-justify">{{$position->position_desc}}</p>
					          </div>
					        </div>
					        <div class='modal-footer'>
					          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
					        </div>
					      </div><!-- /.modal-content -->
					    </div><!-- /.modal-dialog -->
					  </div><!-- /.modal -->
					@endforeach
					</div>
		    	</div>
            </div>
        </div>
        </div> 
        <div class='row' style="border: 0.2px solid rgb(81, 210, 183); box-shadow: 0 4px 8px 0 rgba(44, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.49);width: 100%;margin-right: 0px;margin-left: 0px;margin-top: 20px  ">
        	<div class='col-md-3 white text-center'>
        	  <h3 class="whitesh">Info</h3><hr>
        	  	<p><span class='whitesh'>Name:</span> {{$full_info->name}}</p>
        	  	<p><span class='whitesh'>Last name:</span> {{$full_info->last_name}}</p>
        	  	<p><span class='whitesh'>Date of Birth:</span> {{$full_info->date}}</p>
        	  	<p><span class='whitesh'>Shirt Number:</span> {{$full_info->shirt_number}}</p>
        	  	@if($abilities)
        	  	<p><span class='whitesh'>Age group:</span> {{$abilities->name}}</p>
        	  	@endif
        	  	<p><span class='whitesh'>Height:</span> {{$full_info->height}} cm</p>
        	  	<p><span class='whitesh'>Weight:</span> {{$full_info->weight}} kg</p>
        	</div>

        	<div class='col-md-9'>
        	<!-- {{print_r($full_info)}} -->
        	<br>
        	<!-- {{print_r($abilities)}} -->
        	
		        <div class="progress progress-striped" id='prvi'> 
		            <div class="progress-bar progress-bar-success" style=""></div>
		        </div>

				<div class="progress progress-striped" id='drugi'> 
		            <div class="progress-bar progress-bar-success" style=""></div>
		        </div>

		        <div class="progress progress-striped" id='treci'> 
		            <div class="progress-bar progress-bar-success" style=""></div>
		        </div>

				<div class="progress progress-striped" id='cetvrti'> 
		            <div class="progress-bar progress-bar-success" style=""></div>
		        </div>

		        <div class="progress progress-striped" id='peti'> 
		            <div class="progress-bar progress-bar-success" style=""></div>
		        </div>

				<div class="progress progress-striped" id='sesti'> 
		            <div class="progress-bar progress-bar-success" style=""></div>
		        </div>

		        <div class="progress progress-striped" id='sedmi'> 
		            <div class="progress-bar progress-bar-success" style=""></div>
		        </div>

		        <div class="progress progress-striped" id='osmi'> 
		            <div class="progress-bar progress-bar-success" style=""></div>
		        </div> 

		        <div class="panel panel-default">
				  <div class="panel-body">
				  	{{ $full_info->name }} {{ $full_info->last_name }} <br><br>
				    {{ $full_info->comment ? $full_info->comment : 'Player' }}
				  </div>
				</div>
        	</div>
		</div>
		
    </div>
</div>
   
<script>
	$(document).ready( function(){
	    window.percent1 = 0;
	    window.percent2 = 0;
	    window.percent3 = 0;
	    window.percent4 = 0;
	    window.percent5 = 0;
	    window.percent6 = 0;
	    window.percent7 = 0;
	    window.percent8 = 0;
	    window.progressInterval = window.setInterval( function(){
			vrednost = "{{$full_info->ability->speed *5}}";
			id = '#prvi';
	        if(window.percent1 < vrednost) {
	            window.percent1++;
	            $(id).addClass('progress-striped').addClass('active');
	            $(id +' .progress-bar:first').removeClass().addClass('progress-bar')
	            .addClass ( (window.percent1++ < 40) ? 'progress-bar-success' : ( (window.percent1++ < 80) ? 'progress-bar-warning' : 'progress-bar-danger' ) ) ;
	            $(id +' .progress-bar:first').width(window.percent1+'%');
	            $(id +' .progress-bar:first').text('speed');
	        } else {
	            window.clearInterval(window.progressInterval);
	        }
	    } , 100 );
		
		window.progressInterval2 = window.setInterval( function(){
			vrednost = "{{$full_info->ability->power *5}}";
			id = '#drugi';
	        if(window.percent2 < vrednost) {
	            window.percent2++;
	            $(id).addClass('progress-striped').addClass('active');
	            $(id +' .progress-bar:first').removeClass().addClass('progress-bar')
	            .addClass ( (window.percent2++ < 40) ? 'progress-bar-success' : ( (window.percent2++ < 80) ? 'progress-bar-warning' : 'progress-bar-danger' ) ) ;
	            $(id +' .progress-bar:first').width(window.percent2+'%');
	            $(id +' .progress-bar:first').text('power');
	        } else {
	            window.clearInterval(window.progressInterval2);
	        }
	    } , 100 );

	    window.progressInterval3 = window.setInterval( function(){
			vrednost = "{{$full_info->ability->creativity * 5}}";
			id = '#treci';
	        if(window.percent3 < vrednost) {
	            window.percent3++;
	            $(id).addClass('progress-striped').addClass('active');
	            $(id +' .progress-bar:first').removeClass().addClass('progress-bar')
	            .addClass ( (window.percent3++ < 40) ? 'progress-bar-success' : ( (window.percent3++ < 80) ? 'progress-bar-warning' : 'progress-bar-danger' ) ) ;
	            $(id +' .progress-bar:first').width(window.window.percent3+'%');
	            $(id +' .progress-bar:first').text("creativity");
	        } else {
	            window.clearInterval(window.progressInterval3);
	        }
	    } , 100 );

	    window.progressInterval4 = window.setInterval( function(){
			vrednost = "{{$full_info->ability->dribbling * 5}}";
			id = '#cetvrti';
	        if(window.percent4 < vrednost) {
	            window.percent4++;
	            $(id).addClass('progress-striped').addClass('active');
	            $(id +' .progress-bar:first').removeClass().addClass('progress-bar')
	            .addClass ( (window.percent4++ < 40) ? 'progress-bar-success' : ( (window.percent4++ < 80) ? 'progress-bar-warning' : 'progress-bar-danger' ) ) ;
	            $(id +' .progress-bar:first').width(window.percent4+'%');
	            $(id +' .progress-bar:first').text("dribbling");
	        } else {
	            window.clearInterval(window.progressInterval4);
	        }
	    } , 100 );

	    window.progressInterval5 = window.setInterval( function(){
			vrednost = "{{$full_info->ability->passing * 5}}";
			id = '#peti';
	        if(window.percent5 < vrednost) {
	            window.percent5++;
	            $(id).addClass('progress-striped').addClass('active');
	            $(id +' .progress-bar:first').removeClass().addClass('progress-bar')
	            .addClass ( (window.percent5++ < 40) ? 'progress-bar-success' : ( (window.percent5++ < 80) ? 'progress-bar-warning' : 'progress-bar-danger' ) ) ;
	            $(id +' .progress-bar:first').width(window.percent5+'%');
	            $(id +' .progress-bar:first').text("passing");
	        } else {
	            window.clearInterval(window.progressInterval5);
	        }
	    } , 100 );

	    window.progressInterval6 = window.setInterval( function(){
			vrednost = "{{$full_info->ability->finishing * 5}}";
			id = '#sesti';
	        if(window.percent6 < vrednost) {
	            window.percent6++;
	            $(id).addClass('progress-striped').addClass('active');
	            $(id +' .progress-bar:first').removeClass().addClass('progress-bar')
	            .addClass ( (window.percent6++ < 40) ? 'progress-bar-success' : ( (window.percent6++ < 80) ? 'progress-bar-warning' : 'progress-bar-danger' ) ) ;
	            $(id +' .progress-bar:first').width(window.percent6+'%');
	            $(id +' .progress-bar:first').text("finishing");
	        } else {
	            window.clearInterval(window.progressInterval6);
	        }
	    } , 100 );

	    window.progressInterval7 = window.setInterval( function(){
			vrednost = "{{$full_info->ability->defending * 5}}";
			id = '#sedmi';
	        if(window.percent7 < vrednost) {
	            window.percent7++;
	            $(id).addClass('progress-striped').addClass('active');
	            $(id +' .progress-bar:first').removeClass().addClass('progress-bar')
	            .addClass ( (window.percent7++ < 40) ? 'progress-bar-success' : ( (window.percent7++ < 80) ? 'progress-bar-warning' : 'progress-bar-danger' ) ) ;
	            $(id +' .progress-bar:first').width(window.percent7+'%');
	            $(id +' .progress-bar:first').text("defending");
	        } else {
	            window.clearInterval(window.progressInterval7);
	        }
	    } , 100 );

	    window.progressInterval8 = window.setInterval( function(){
			vrednost = "{{$full_info->ability->heading * 5}}";
			id = '#osmi';
	        if(window.percent8 < vrednost) {
	            window.percent8++;
	            $(id).addClass('progress-striped').addClass('active');
	           $(id +' .progress-bar:first').removeClass().addClass('progress-bar')
	            .addClass ( (window.percent8++ < 40) ? 'progress-bar-success' : ( (window.percent8++ < 80) ? 'progress-bar-warning' : 'progress-bar-danger' ) ) ;
	            $(id +' .progress-bar:first').width(window.percent8+'%');
	            $(id +' .progress-bar:first').text("heading");
	        } else {
	            window.clearInterval(window.progressInterval8);
	        }
	    } , 100 );
	});
</script> 
@endsection