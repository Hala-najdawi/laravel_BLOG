@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <title>Bolg Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
  <h2>Welcome to the blog</h2>
  <div class="well">
  <nav class="navbar navbar-defualt">
  <div class="container-fluid">
  <ul class="nav navbar-nav" >
  <li class="dropdown"><a class="dropdown-toggle"data-toggle="dropdown" href="#">sort post by <span class="create"></span></a>
      <ul class="dropdown-menu">
      <li><a href="#" class="active">Top 10 Most Recent post</a></li>
      </ul>
      </li>
    </ul>
   @if(Auth::check())
     <ul class="nav navbar-nav navbar-right">
    <li><a href="{{route('posts.index')}}">Manage blog posts</a></li></ul> 
    @endif
  </div>
  </nav>
</div>
  <div>
  <h1>Top 10 Most Recent blog</h1>
  @foreach($posts as $post)
  <div class="well well-lg">
  <h3> {{$post-> title}}</h3>
  <p>{{$post->body}} </p>
  <a href="{{route('posts.show',['id'=>$post->id])}}" class="btn btn-primary pull-right">view post</a>
  &nbsp;
  </div>
  @endforeach
  <div class="row text-center">
  {{$posts->links()}}
  </div>
  </div>

@endsection
</body>
</html>