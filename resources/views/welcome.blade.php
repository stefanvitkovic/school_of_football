@extends('layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<!-- game scripts -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.8.24/jquery-ui.min.js" type="text/javascript"></script>
<link type="text/css" href="http://code.jquery.com/ui/1.8.24/themes/blitzer/jquery-ui.css" rel="stylesheet"
 />

<!-- timer -->

<!-- timer end -->
<style>
html,body
{
  background-color: white !important;
  background-image: none;
}

</style>
<!-- end game -->

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Our Club</h1>        
            <h2>Our City</h2>
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>Football</h1>        
            <h2>More Than A Game</h2>
        </hgroup>       
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>School of Football</h1>        
            <h2>Family</h2>
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
  </div> 
</div>
<div class="container">

  <div class="row text-justify" style="margin-bottom: 20px">
    <div class="row" style="width: 100%">
      <a href="#"><div class="col-md-12" style="background-image: url({{asset('fb.jpg')}});background-size: contain;background-position: center center;background-repeat: no-repeat;min-height: 50px;margin-bottom: 15px">
      </div></a>
    </div>
    <div class="col-md-6">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed lacus ac augue sodales congue nec et elit. Morbi lacinia tellus ac urna fermentum, nec tincidunt lacus rhoncus. Vivamus egestas odio sem, non tempus turpis mollis ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur gravida dui non aliquet scelerisque. Aliquam ac lacus felis. Curabitur condimentum lacus nec ante ultricies, eu tempor felis condimentum. Morbi quis turpis elit. Quisque in tincidunt sapien. Sed consectetur suscipit lectus interdum convallis. Nunc ornare elit vitae libero dapibus, id rutrum mauris ornare. Pellentesque aliquam ac magna vitae eleifend. Pellentesque pellentesque nibh id tellus tristique hendrerit. Fusce pharetra ligula metus, quis euismod massa fringilla facilisis.
      </p>
    </div>
    <div class="col-md-6">
      <p>
      Nunc accumsan eleifend ligula id varius. Aliquam pretium ultrices ultricies. Praesent convallis aliquam semper. Proin quam magna, vulputate quis malesuada at, convallis id risus. Nullam condimentum diam quis risus malesuada sodales. Vestibulum sollicitudin ultrices volutpat. Proin suscipit sapien in ornare elementum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse pharetra eros ac nibh scelerisque suscipit. Duis malesuada ultricies nunc eget laoreet.
      </p>
    </div>
  </div>
</div>
@endsection()
