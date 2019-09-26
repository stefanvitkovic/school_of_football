@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<link rel="stylesheet" href="{{asset('jq/css/feature-carousel.css')}}" charset="utf-8" />
    <script src="{{asset('jq/js/jquery-1.7.min.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('jq/js/jquery.featureCarousel.js')}}" type="text/javascript" charset="utf-8"></script>
<style type="text/css">
  body,html{
    /*height:100%;*/
  }
  a{
    color: white;
  }
</style>

<div class="container">
    <div class='row' style="margin-top: 150px;height: 400px;">

    <div class="carousel-container">
    
      <div id="carousel">
      @foreach($all_players as $player)
        <div class="carousel-feature" id="car{{$player->id}}" style="border:2px solid #51D2B7;border-radius: 100px">
          <a href="{{route('players.show',['id'=>$player->id])}}">
            <img class="carousel-image" alt="Image Caption" src="{{url('images/'.$player->image.'.png')}}">
              <div class="carousel-caption">
                <p>{{$player->name}} {{$player->last_name}}</p>
              </div>
          </a>
        </div>
      @endforeach
      </div>
    
      <div id="carousel-left"><img src="{{url('jq/images/arrow-left.png')}}" /></div>
      <div id="carousel-right"><img src="{{url('jq/images/arrow-right.png')}}" /></div>
      <div class='col-md-12 text-center'>
        <a id="but_prev" href="#">PREV</a> | <a id="but_pause" href="#">PAUSE</a> | <a id="but_start" href="#">START</a> | <a id="but_next" href="#">NEXT</a> 
      </div>
    </div>

    </div>
    </div>
</div>
<script type="text/javascript">
      $(document).ready(function() {
        var carousel = $("#carousel").featureCarousel({
          // include options like this:
          // (use quotes only for string values, and no trailing comma after last option)
          // option: value,
          // option: value
        });

        $("#but_prev").click(function () {
          carousel.prev();
        });
        $("#but_pause").click(function () {
          carousel.pause();
        });
        $("#but_start").click(function () {
          carousel.start();
        });
        $("#but_next").click(function () {
          carousel.next();
        });
      });
    </script>
@endsection