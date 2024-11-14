<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Delete Category</title>

    <!-- Bootstrap core CSS -->
 <!-- Bootstrap core CSS -->
<link href="{{ URL::asset('storage/editor.css') }}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ URL::asset('storage/narrow-jumbotron.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonym
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="#">View expense<br><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Category</a>
            </li>
            <li class="nav-item">

            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Expanse Tracker</h3>
      </div>

      <div class="jumbotron" style="padding-top: 10px; padding-right: 10px; padding-bottom: 10px; background-color: rgb(240, 247, 255);">

        <form class="form-horizontal" method="POST" action="{{route('category.del', ['id' => $categories->id])}}">
            @csrf
          <fieldset>

          <!-- Form Name -->
          <legend>Delete expense</legend>

            <h4>Are you sure.</h4>


          <!-- Button (Double) -->
          <div class="form-group form-inline">

              <button id="button1id" name="submit" class="btn btn-success mr-3">Delete</button>
              <button id="button1id" name="button1id" class="btn btn-success mr-3">Go back</button>


          </div>

          </fieldset>
          </form>

      </div>


      <footer class="footer">
        <p>©&nbsp;SWT22022: Practical for Internet Application Development</p>
      </footer>

    </div> <!-- /container -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>