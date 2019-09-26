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
.vesti:hover {
	background-color: rgba(62, 50, 50, 0.38);
	box-shadow: 0 0 8px rgb(33, 31, 31);
}
a:hover{
	text-decoration: none;
}
</style>
<div class="container">
	<div class='row' style="margin-top: 80px; background-color: #ffffff; font-family:Arial;">
		<div class="col-md-10">
			<h2>News</h2>
			@foreach($articles as $article)
			<div class="row">
			<a href="{{route('articles.show',['id'=>$article->id])}}">
				<div class="col-md-10 col-md-offset-1 vesti" style="border: 1px solid rgba(33, 31, 31, 0.3);padding-bottom: 10px;margin-bottom: 15px;">
					<h3>{{$article->title}}</h3>
					<br>
					<div class="col-md-2" style="background: #3d4042;color: white;">
						<h5><i>{{$article->created_at}}</i></h5>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<img width="500" height="350" src={{url('article_images/'.$article->image)}}>
					</div>
					<div class="col-md-5">
						<h4>{{substr($article->body,0,30)}} ..</h4>
						<br>
						<h4>Detaljnije.. &#8594</h4>
					</div>
				</div>
			</div>
			</a>
			@endforeach
			<div class="row">
				<div class="col-md-12 text-center">
				 {{ $articles->links() }}
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
					<p class="text-center">You need Web Developer ?</p></a>
				</div>

			</div>
		</div>
	</div>
</div>

@endsection