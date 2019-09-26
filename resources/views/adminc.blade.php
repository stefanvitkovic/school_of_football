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

.hr_black{
  border-top: 1px solid black;
}
.table>tbody>tr>td{
  vertical-align: middle !important;
}
.table>tbody>tr:hover{
  background-color: #9eb19b5e;
  color: white;
}
.btn-green{
  background-color: #3f7d3f !important;
    color: white;
}
.btn-green:hover{
  background-color: #9eb19b5e !important;
    color: white;
}

</style>
<div class='row' style="margin-top: 80px;">
<div class="col-md-10 col-md-offset-1 text-left">
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

<div class="container white" style="min-height:500px">
  <div class='text-left'>
    <a href="{{route('coaches.create')}}"><button class='btn btn-green'>New Coach</button></a>
  </div>
  <hr>
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Name</th>
        <th>Last name</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($coaches))
    @foreach($coaches as $coach)
      <tr>
        <td>{{$coach->name}}</a></td>
        <td>{{$coach->last_name}}</td>
        <td class=''><a href="{{route('coaches.show',['id'=>$coach->id])}}"><button class='btn btn-default'>View</button></a> <a href="{{route('coaches.edit',['id'=>$coach->id])}}"><button class='btn btn-warning'>Edit</button></a> <button class='btn btn-danger' data-toggle="modal" data-target="#{{$coach->id}}">Delete</button></td>
      </tr>

         <!--co Modal -->
        <div class="modal fade modalText" id="{{$coach->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$coach->id}}">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="{{$coach->id}}">Are you sure ?</h4>
              </div>
              <div class="modal-body">
                Coach will be permanently deleted!
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <form hidden="true" method="POST" action="{{route('coaches.destroy',[$coach->id])}}">
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
<br><hr class="hr_black"><br>

<div class='text-left'>
  <a href="{{route('categories.create')}}"><button class='btn btn-green'>New category</button></a>
</div>
<hr>
<div class="">
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Category</th>
        <th>From year</th>
        <th>To year</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($categories))
      @foreach($categories as $category)
        <tr>
          <td>{{$category->name}}</a></td>
          <td>{{$category->starting_age}}</td>
          <td>{{$category->ending_age}}</td>
          <td class=''><a href="{{route('categories.show',['id'=>$category->id])}}"><button class='btn btn-default'>View</button></a> <a href="{{route('categories.edit',['id'=>$category->id])}}"><button class='btn btn-warning'>Edit</button></a> <button class='btn btn-danger' data-toggle="modal" data-target="#cat{{$category->id}}">Delete</button></td>
        </tr>

        <div class="modal fade modalText" id="cat{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$category->id}}">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="{{$category->id}}">Are you sure ?</h4>
              </div>
              <div class="modal-body">
                Category will be permanently deleted!
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <form hidden="true" method="POST" action="{{route('categories.destroy',[$category->id])}}">
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
  <br><hr class="hr_black"><br>
</div>


<div class="">
  <div class="text-left">
    <a href="{{route('positions.create')}}"><button class='btn btn-green'>New position</button></a>
  </div>
  <hr>
</div>

<div class="">
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Name</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
      @if(isset($positions))
  @foreach($positions as $position)
    <tr>
      <td>{{$position->position_name}}</a></td>
      <td class=''>
        <a href="{{route('positions.show',['id'=>$position->id])}}"><button class='btn btn-default'>View</button></a> <a href="{{route('positions.edit',['id'=>$position->id])}}"><button class='btn btn-warning'>Edit</button></a>
        <button class='btn btn-danger' data-toggle="modal" data-target="#p{{$position->id}}">Delete</button>
      </td>
    </tr>
     <!--sponzor Modal -->
      <div class="modal fade modalText" id="p{{$position->id}}" tabindex="-1" role="dialog" aria-labelledby="p{{$position->id}}">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="p{{$position->id}}">Are you sure ?</h4>
            </div>
            <div class="modal-body">
              Position will be permanently deleted!
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <form hidden="true" method="POST" action="{{route('positions.destroy',[$position->id])}}">
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
  <br><hr class="hr_black"><br>
</div>

<div class='text-left'>
  <a href="{{route('sponsorships.create')}}"><button class='btn btn-green'>New sponsorship</button></a>
</div>
<hr>
<div class="">
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Name</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($sponsors))
    @foreach($sponsors as $sponsor)
      <tr>
        <td>{{$sponsor->name}}</a></td>
        <td class=''>
          <button class='btn btn-danger' data-toggle="modal" data-target="#{{$sponsor->id}}{{$sponsor->name}}">Delete</button>
        </td>
      </tr>

         <!--sponzor Modal -->
        <div class="modal fade modalText" id="{{$sponsor->id}}{{$sponsor->name}}" tabindex="-1" role="dialog" aria-labelledby="{{$sponsor->id}}{{$sponsor->name}}">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="{{$sponsor->id}}{{$sponsor->name}}">Are you sure ?</h4>
              </div>
              <div class="modal-body">
                Sponsor will be permanently deleted!
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <form hidden="true" method="POST" action="{{route('sponsorships.destroy',[$sponsor->id])}}">
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
  <br><hr class="hr_black"><br>
</div>

</div>


 

   
@endsection