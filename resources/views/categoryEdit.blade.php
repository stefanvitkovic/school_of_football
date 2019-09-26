@extends("layouts.master")
@section('content')
<div class='col-md-10 col-md-offset-1'>
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<div style="margin-top: 80px;min-height: 500px" class="whitesh">

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

<form method="POST" action="{{route('categories.update',['id'=>$category->id])}}">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" id="name" name='name' value="{{$category->name}}">
  </div>
  <div class="form-group">
    <label for="sel1">From Year:</label>
    <select name='starting_age' class="form-control" id="sel1">
      <option value="{{$category->starting_age}}" selected>{{$category->starting_age}}</option>
      @for($i=2000;$i<=2020;$i++)
      <option value= {{$i}} >{{$i}}</option>
      @endfor
    </select>
  </div>
  <div class="form-group">
    <label for="sel2">To Year:</label>
    <select name='ending_age' class="form-control" id="sel2">
      <option value="{{$category->ending_age}}" selected>{{$category->ending_age}}</option>
      @for($i=2000;$i<=2020;$i++)
      <option value= {{$i}} >{{$i}}</option>
      @endfor
    </select>
  </div>
  <button type="submit" class="btn btn-success">Send</button>
  <br>
</form>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){

  $('#sel1').change(function($d){
    var min_sel1 = $(this).val();
    $('#sel2 option').each(function(i,v){

      val = $(this).val();
      if(val < min_sel1){
          $(this).prop('disabled',true);
      }else{
      $(this).prop('disabled',false);
      }

      })
  })

  })
</script>
@endsection