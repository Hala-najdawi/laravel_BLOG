@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <title>Edit Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body> 
<h1>Edit Post</h1>
<div class="col-sm-8 col-sm-offset-2">
<form action="{{route('posts.update',['id'=>$post->id])}}" method="post">
@csrf
<input type="hidden" name="_method" value="PUT">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text"value="{{$post->title}}" name="title"class="form-control" id="exampleInputtitle"  placeholder="Enter Title"require>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea rows="10"cols="50" name="body" class="form-control" id="exampleInputbody" require>
    {{$post->body}} </textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('posts.index')}}" class="btn btn-light pull-right">GO back</a>
</form>

</div>



@endsection
</body>
</html>