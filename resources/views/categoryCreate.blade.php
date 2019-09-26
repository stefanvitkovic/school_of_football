@extends("layouts.master")
@section('content')
<div class='col-md-10 col-md-offset-1'>
<link rel="stylesheet" href="{{asset('css/profil.css')}}" type="text/css"> 
<div style="margin-top: 80px;margin-bottom: 110px;" class="whitesh">

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
<form method="POST" action="{{route('categories.store')}}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" id="name" name='name' placeholder="Category Name">
  </div>
  <div class="form-group">
    <label for="sel1">From Year:</label>
    <select name='starting_age' class="form-control" id="sel1">
      <option value="" selected disabled>Year</option>
      @for($i=2000;$i<=2020;$i++)
      <option value= {{$i}} >{{$i}}</option>
      @endfor
    </select>
  </div>
  <div class="form-group">
    <label for="sel2">To Year:</label>
    <select name='ending_age' class="form-control" id="sel2">
      <option value="" selected disabled>Year</option>
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