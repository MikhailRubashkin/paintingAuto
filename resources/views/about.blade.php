@extends('layouts.app')

@section('title-block')
  О нас
@endsection

@section('content')
  <h1>О нас</h1>
  <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container" style="width:100%;">
    <h2>Наши работы</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>
        <li data-target="#myCarousel" data-slide-to="10"></li>
        <li data-target="#myCarousel" data-slide-to="11"></li>
        <li data-target="#myCarousel" data-slide-to="12"></li>
        <li data-target="#myCarousel" data-slide-to="13"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="{{asset('images/60.jpg')}}" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/48.jpg')}}" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/50.jpg')}}" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/51.jpg')}}" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/52.jpg')}}" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/53.jpg')}}" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/54.jpg')}}" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/55.jpg')}}" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/56.jpg')}}" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/57.jpg')}}" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/58.jpg')}}" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/59.jpg')}}" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="{{asset('images/49.jpg')}}" alt="New york" style="width:100%;">
        </div>
      </div>
      </body>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
@endsection
