<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Query</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.2);">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b><i>PANJUL SQUAD</i></b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('query1') ? 'active' : '' }}" aria-current="page" href="{{ url('query1') }}">Query 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('query2') ? 'active' : '' }}" aria-current="page" href="{{ url('query2') }}">Query 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('query3') ? 'active' : '' }}" aria-current="page" href="{{ url('query3') }}">Query 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('query4') ? 'active' : '' }}" aria-current="page" href="{{ url('query4') }}">Query 4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('query5') ? 'active' : '' }}" aria-current="page" href="{{ url('query5') }}">Query 5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('query6') ? 'active' : '' }}" aria-current="page" href="{{ url('query6') }}">Query 6</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('query7') ? 'active' : '' }}" aria-current="page" href="{{ url('query7') }}">Query 7</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('query8') ? 'active' : '' }}" aria-current="page" href="{{ url('query8') }}">Query 8</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('query9') ? 'active' : '' }}" aria-current="page" href="{{ url('query9') }}">Query 9</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

@yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#example').DataTable();
      });
    </script>
  </body>
</html>
