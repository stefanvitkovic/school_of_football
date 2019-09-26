<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="School of football,sof,football,shool"/>
    <meta name="description" content='School of football'>
    <title>School of Football</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- /*******
  ******
  *** -->
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!--***
  *****
  **********
  -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <style type="text/css">
    .navbar-inner {
    background:rgba(0, 0, 0, 0.4);
    /*background-color: rgba(0, 0, 0, 0.76);*/
  }

  body{
    font-family: 'Raleway', sans-serif;
    /*padding-bottom: 70px;*/
    /*margin-top: 70px;*/
    /*font-family: 'Lora', serif;*/
    width: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
  }
  .nav.navbar-nav a{
    color:white !important;
    /*font-family: 'Raleway', sans-serif;*/
    /*font-family: 'Lora', serif;*/
  }
  .nav.navbar-nav a:hover{
    color: #3f7d3f !important;
    font-weight: 900;
    background-color: rgba(0, 0, 0, 0.82) !important;

  }
  .meni{
    color:white !important;
    background-color: #080808;
  }
  .meni:hover{
    color: rgb(123, 196, 238) !important;
    background-color: rgba(0, 0, 0, 0.82) !important;
  }
  .meni:active{
    color: rgb(123, 196, 238) !important;
    background-color: rgba(0, 0, 0, 0.82) !important;
  }
  .back{
background: #000000; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #000000 , #434343); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #000000 , #434343); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        
  }


/*footer*/
footer{
  background-color:black;color: #AEAEAC;
  background-image: url({{url('fans.png')}});
  background-size:contain;
  margin-top: 40px;
  /*background-image: linear-gradient(rgba(240, 227, 78, 0.85), #337ab7);*/
}
footer.spacer{padding: 3em 0;}
footer h4{color: #DCDCDC;}
footer a,footer p{line-height: 1.5em;font-size: 0.85em;color: #AEAEAC;}
footer a:hover{color: #fff;}
footer .subscribe .form-control{height: 30px;padding: 4px 12px;border: none;}
footer .subscribe .input-group-btn:last-child>.btn{margin: 0;}
footer .subscribe .input-group{margin-bottom: 1em;}
footer .subscribe .social a{font-size: 1.5em;margin-right: 0.25em;}
.copyright{background-color: #252423;padding: 0.6em 0;font-size: 0.85em;color: #7F7F7F;border-top: 0.5px solid white}
.copyright a{color: #AEAEAC;}
/*footer*/

@media screen and (max-width: 640px){
  footer{
  background-color:black;color: #AEAEAC;
  background-image: url({{url('fans.png')}});
  background-size:cover;
  margin-top: 0px;
  /*background-image: linear-gradient(rgba(240, 227, 78, 0.85), #337ab7);*/
} 
}
  </style>
  </head>
  <nav class="navbar navbar-inverse navbar-inner navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">

      <!-- added -->
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('logo.png')}}" style="margin-top: -15px;max-height: 50px; max-width: 50px;"></a>
    </div>
    <!-- end of added -->
        
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="color: white !important;font-size: 15px;">
        <ul class="nav navbar-nav">
          <li><a href="{{url('/')}}">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle meni" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teams <span class="caret"></span></a>
            <ul class="dropdown-menu meni">
              @foreach(App\Category::all() as $category)
                <li><a href="{{route('categories.show',['id'=>$category->id])}}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="{{route('coaches.index')}}">Coaches</a></li>
          <li><a href="{{route('players.index')}}">Players</a></li>
          <li><a href="{{route('articles.index')}}">Articles</a></li>
          <li><a href="{{route('sponsorships.index')}}">Friends</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::check())
                            <li><a href="{{url('players_panel')}}">Player panel</a></li>
                            <li><a href="{{url('coaches_panel')}}">Coach panel</a></li>
                            <li><a href="{{url('articles_panel')}}">Article panel</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a style = 'color: black !important;'href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
      </div>
    </div>
  </nav>
  <body>
    <div class='container-fluid' style="padding:0;overflow: hidden">
      @yield('content')
   
      
    </div>
    <footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>SCHOOL OF FOOTBALL</h4>
                    
                </div>              
                 
                 <div class="col-sm-3">
                    <h4>Links</h4>
                    <ul class="list-unstyled">
                     <li><a href="{{route('coaches.index')}}">Coaches</a></li>
                    <li><a href="{{route('players.index')}}">Players</a></li>
                    <li><a href="{{route('articles.index')}}">News</a></li>
                    <li><a href="{{route('sponsorships.index')}}">Friends</a></li>
                    </ul>
                </div>
                 <div class="col-sm-3 subscribe pull-right">
                    <!-- <div class="social">
                    <a href="https://www.facebook.com/apartmanizlatibortip/"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                    </div> -->
                    <h4>Street Test I 169/1</h4>
                    <h4>Phone : 065/ 555-333</h4>
                    <h4>Email : sof@gmail.com</h4>
                </div>
            </div>
            <!--/.row--> 
            
        </div>
        <!--/.container-->    
    
    <!--/.footer-bottom--> 
</footer>

<div class="text-center copyright">Powered by <a href="http://www.stefanvitkovic.tk">stefanvitkovic.com</a></div>

<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>








    </div>
  </body>
</html>