
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="#">Test</a>
          <a class="nav-link" href="#">Test</a>
          <a class="nav-link" href="#">Test</a>
          <a class="nav-link" href="#">Test</a>
          <a class="nav-link" href="#">Test</a>
          <a class="nav-link ml-auto" href="#">Test</a>
        </nav>
      </div>
    </div> 

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Comment Demo</h1>
        <p class="lead blog-description">A Demo to show comments.</p>
      </div>
    </div>
  
    <div class="container">

      <div class="row">
      <div class="col-sm-8 blog-main">
        







        <h1>Demo</h1>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

<hr>
<div class="comments">
    <ul class="list-group">
        @foreach($comments as $comment)
        
            <li class="list-group-item">
                <strong>{{$comment->name}}({{$comment->created_at->diffForHumans()}}): &nbsp;</strong>
                {{$comment->body}}
            </li>
    
        @endforeach
    </ul>
</div>

<hr>
<div class="card">
    <div class="card-block">
        <form method="POST" action="/comments">
            {{csrf_field()}}
            <div class="form-group">
                <textarea name="body" placeholder="Comment Here" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
    </div>
</div>






      </div>
      </div><!-- /.row -->

    </div><!-- /.container -->

  </body>
</html>
