<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Descrizione del mio sito">
  <title>@yield('page_title')</title>
  @include('partials.__header_scripts')
  <style>
      body{
          height: 100vh;
      }

  </style>
</head>

<body class="d-flex flex-column">
    <header>
        <ul class="list-unstyled mb-0 d-flex justify-content-center gap-3 py-5">
            <li><a href="{{route('comics.index')}}">Index</a></li>
            <li><a href="/comics/create">Create</a></li>
        </ul>
    </header>
    <main class="main flex-grow-1 overflow d-flex align-items-center justify-content-center flex-wrap">
        @yield('content')
    </main>
    <footer class="bg-primary text-white text-center py-4"> <h5 class="mb-0">Designed with &hearts; by Lorenzo Rottigni</h6></footer>
</body>

</html>
