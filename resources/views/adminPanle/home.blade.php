@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <title>Bolg</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body> 
<h1>Admin Panle</h1>
<a href="{{route('posts.create')}}" class="btn btn-primary pull-right">Add new blog post</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">body</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
    <tr>

      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td><a href="{{route('posts.edit',['id'=>$post->id])}}" class="btn btn-primary pull-right">Edit</td>
      <td>
      <form action="{{ route('posts.destroy', ['id'=>$post->id]) }}" method="POST">
               @csrf
              <input type="hidden" name="_method" value="DELETE">

              <input type="submit" value='Delete' class="btn btn-danger">
      </form>
      
      </td>
    </tr>
    @endforeach
  </tbody>
</table>














@endsection
</body>
</html>