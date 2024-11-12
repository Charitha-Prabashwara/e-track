
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>View Expense</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('storage/editor.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('storage/narrow-jumbotron.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('expense.create.view')}}">Create expense<br><span class="sr-only">(current)</span></a>
            </li>

            

            <li class="nav-item">
              <a class="nav-link" href="{{route('category.view')}}">Category</a>
            </li>
            <li class="nav-item">

            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Expanse Tracker</h3>
      </div>

      <div class="jumbotron" style="padding-top: 10px; padding-right: 10px; padding-bottom: 10px; background-color: rgb(240, 247, 255);">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">AMOUNT</th>
                <th scope="col">CATEGORY</th>
              </tr>
            </thead>
            <tbody>

              @foreach($expenses as $expens)

              <tr>
                <th scope="row">{{ $expens->id}}</th>
                <td>{{ $expens->title}}</td>
                <td>{{ $expens->amount}}</td>
                <td>{{ $expens->category}}</td>
                <td><a class="nav-link" href="{{route('expense.update.view', ['id' => $expens->id])}}">update</a</td>
                <td><a class="nav-link" href="{{route('expense.delete.view', ['id' => $expens->id])}}">delete</a</td>
              </tr>
              @endforeach
            </tbody>
          </table>

      </div>





        <div class="col-lg-6">








        </div>


      <footer class="footer">
        <p>©&nbsp;SWT22022: Practical for Internet Application Development</p>
      </footer>

    </div> <!-- /container -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
