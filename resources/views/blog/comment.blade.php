
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

  @foreach($comment as $comment)
  <div class="well well-lg">
   <h3> {{$comment->body}}</h3> 
  <p>hfcfgd</p>
  &nbsp;
  </div>
  @endforeach 


@endsection
</body>
</html>