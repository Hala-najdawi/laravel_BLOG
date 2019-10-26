@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <title>Add New Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body> 
<h1>Add New Post</h1>
<div class="col-sm-8 col-sm-offset-2">
<form action="{{route('posts.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title"class="form-control" id="exampleInputtitle"  placeholder="Enter Title"require>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea rows="10" cols="50" name="body" class="form-control" id="exampleInputbody" require>
    </textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('posts.index')}}" class="btn btn-light pull-right">GO back</a>
</form>

</div>



@endsection
</body>
</html>