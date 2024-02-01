<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Sweet Alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<title>@yield('header-title')</title>

<body>
    {{-- Header --}}

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Crud</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/create">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Edit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container mt-3">

        <div class="mt-4 p-3 bg-secondary text-white rounded">
            <h1 style="text-align: center;">@yield('body-title')</h1>

        </div>
    </div>
    {{-- Content --}}
<br><br>
    @yield('content')









    {{-- Footer --}}
    <div style="margin-top: 35%;" class="container">

        <div class=" p-3 bg-secondary sstext-white rounded">
            <h1 style="text-align: center;color:white;"> Copyright&copy; by @yield('footer-title','Matejko Team')
                {{now()->year}}</h1>

        </div>
    </div>
</body>

</html>
