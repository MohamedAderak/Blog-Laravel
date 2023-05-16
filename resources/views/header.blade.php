<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Blog Application</title>
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><img src="https://www.nyla.org/userfiles/NYCU/Blog_Logo.png" alt="LOGO" width="100" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-success nav-link" href="{{ route('blog.create') }}">Add Articles</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
      
      @yield('content')


      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>