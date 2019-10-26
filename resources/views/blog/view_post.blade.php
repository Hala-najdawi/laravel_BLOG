@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <title>view post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <div class="fb-comments" data-href="http://127.0.0.1:8000/posts/1" data-width="800" data-numposts="10"></div>
</head>
<body>


<div class="col-sm-8 col-sm-offset-2">
<form action="{{route('comment.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" value="{{$post->id}}"    name="post_id"  class="form-control" id="exampleInputtitle"  placeholder="Enter Title"require>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea rows="10" cols="50" name="body" class="form-control" id="exampleInputbody" require>
    </textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="" class="btn btn-light pull-right">GO back</a>
</form>
</div>

@endsection
</body>
</html>