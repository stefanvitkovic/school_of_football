@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<style type="text/css">
  body, html {
    height: auto;
    width:auto;
}
#prijatelj{
    height: 500px;
}
</style>
<div id='prijatelj' class="container">
    @if(isset($sponsors))
        @foreach($sponsors as $sponsor)
            <div class='row' style="border: 0.2px solid rgb(81, 210, 183); box-shadow: 0 4px 8px 0 rgba(44, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.49); margin-top: 80px">
                <div class='col-md-3 white text-center'>
                  <h3 class="whitesh">{{$sponsor->name}}</h3><hr>
                    <p>{{$sponsor->desc}}</p>
                </div>
                <div class='col-md-9' style="margin-bottom: 15px">
                <br>
                    <img class="img-responsive" src="{{url('sponzori/'.$sponsor->image)}}" height="500px" width="845px">
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection