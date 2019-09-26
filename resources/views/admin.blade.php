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
<div class='row' style="margin-top: 80px;min-height: 500px">
  <div class="row text-center">
    @if (session('message'))
      <div class="alert alert-success col-md-10 col-md-offset-1">
          {{ session('message') }}
      </div>
    @endif
    @if (count($errors) > 0)
      <div class="alert alert-danger col-md-10 col-md-offset-1">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
  </div>

  <div class='col-md-10 col-md-offset-1' >
    <a href="{{route('players.create')}}">
      <button class='btn btn-green'>New Player</button>
    </a>
    <div class="form-group col-md-2 pull-right">
      <input type="text" class="form-control" id="search" placeholder="Search">
    </div>
    <hr>
  </div>
  


<div>
<div class='col-md-10 col-md-offset-1 whitesh'>

<table class="table"  style="color: white;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Last name</th>
        <th>Shirt number</th>
        <th>Age group</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
    @if(!empty($players))
    @foreach($players as $player)
      <tr>
        <td>{{$player->name}}</a></td>
        <td>{{$player->last_name}}</td>
        <td>{{$player->ability->shirt_number}}</td>
        <?php
        $category_id = $player->ability->category;
        $category_name = $categories->first(function($val,$key) use($category_id){
          return $val->id == $category_id;
        });
        ?>
        <td>{{ $category_name['name'] }}</td>
        <td class=''><a href="{{url('players',[$player->id])}}"><button class='btn btn-default'>View</button></a> <a href="{{url('players/'.$player->id.'/edit')}}"><button class='btn btn-warning'>Edit</button></a> <button data-button='{{$player->id}}' id="delete-button" class='btn btn-danger' data-toggle="modal" data-target="#{{$player->id}}">Delete</button></td>
      </tr>

        <!-- Modal -->
          <div class="modal fade modalText" id="{{$player->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$player->id}}">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="{{$player->id}}">Are you sure ?</h4>
                </div>
                <div class="modal-body">
                  The player will be permanently deleted !
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <form hidden="true" method="POST" action="{{route('players.destroy',[$player->id])}}">
                    @method("DELETE")
                    @csrf
                    <button type="submit" class="btn btn-primary">Delete</button>
                  </form>
                  </a>
                </div>
              </div>
            </div>
          </div>

    @endforeach
    @endif
    @section('tableData')
    @endsection

    </tbody>
  </table>
  </div>
  </div>
  
</div>
@endsection
<script type="text/javascript" src="{{ URL::asset('js/playerPanel.js') }}"></script>
