@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<style type="text/css">
  body, html {
    height: auto;
    width:auto;
    /*padding-bottom: 50px;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
    margin:0;
    padding:0px;*/
}
</style>
<div class="container">
	<div class='row' style="margin-top: 80px; background-color: #ffffff; font-family:Arial;">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12 text-left">
					<h3>{{$id->title}}</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2" style="background: #3d4042;color: white;">
					<h5><i>{{$id->created_at}}</i></h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<hr>
					<img class="center-block img-responsive" src="{{url('article_images/'.$id->image)}}" width="780px" height="533px">
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-justify">
					<p>{{$id->body}}</p>
					<br>
					
				</div>
			</div>
		</div>
		<div class="col-md-2">
		<div class="row">
				<div class='col-md-12'>
				<br><a href="http://apartmanizlatibor.rs/">
					<em><strong><h4 class="text-center">Apartments Zlatibor T&P</h4></strong></em>
					<img class="img-responsive" src="{{url('baneri/z.jpg')}}">
					<p class="text-center">If you want to spend your holidays with your family on Zlatibor Apartments T&P are the right place for you!</p>
				</div></a>
				<br><hr>
			</div>
			<div class="row">
				<div class='col-md-12'>
				<hr><a href="http://stefanvitkovic.tk/">
					<em><strong><h4 class="text-center">Stefan Vitkovic</h4></strong></em>
					<br>
					<img class="img-responsive" src="{{url('baneri/dc2.jpg')}}">
					<p class="text-center">You need Web Developer</p></a>
				</div>

			</div>
		</div>
		<!-- OSTALE VESTI -->			
				<div class="col-md-12">
				<hr>
				<h4>Read :</h4>
					@foreach($last as $news)
					<a href="{{route('articles.show',['id'=>$news->id])}}">
						<div class="col-md-2" style="padding:5px;border: 0.7px solid rgba(189, 183, 183, 0.2);margin-bottom: 40px;margin-left: 30px">
							<img src="{{url('article_images/'.$news->image)}}" width="160px" height="120px">
							<p>{{substr($news->title,0,20)}} ..</p>
						</div>
					</a>
					@endforeach
				</div>
	</div>
</div>

@endsection