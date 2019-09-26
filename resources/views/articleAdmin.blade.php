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
.modalText{
  color:black;
}
</style>
<div class='row' style="margin-top: 80px;">
<div class="col-md-10 col-md-offset-1 text-center">
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
</div>
</div>

<div>
<div class='col-md-10 col-md-offset-1 whitesh' style="min-height:500px;">

<div>
  <a href="{{route('articles.create')}}"><button class='btn btn-green'>New article</button></a>
  <hr>
</div>

<div>
<table class="table" style="color: white;">
    <thead>
      <tr>
        <th>Title</th>
        <th>Date</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($articles))
    @foreach($articles as $article)
      <tr>
        <td>{{substr($article->title,0,55)}} ...</a></td>
        <td>{{$article->created_at}}</td>
        <td class=''><a href="{{route('articles.show',['id'=>$article->id])}}"><button class='btn btn-default'>View</button></a> <a href="{{route('articles.edit',['id'=>$article->id])}}"><button class='btn btn-warning'>Edit</button></a> <button id="delete-button" class='btn btn-danger' data-toggle="modal" data-target="#{{$article->id}}" data-button="{{$article->id}}">Delete</button></td>
      </tr>

        <!-- Modal -->
        <div class="modal fade modalText" id="{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$article->id}}">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="{{$article->id}}">Are you sure ?</h4>
              </div>
              <div class="modal-body">
                The article will be permanently deleted !
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <form hidden="true" method="POST" action="{{route('articles.destroy',[$article->id])}}">
                  @method("DELETE")
                  @csrf
                  <button type="submit" class="btn btn-primary">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    @endforeach
    @endif
    </tbody>
  </table>
</div>
  </div>
  </div>


@endsection