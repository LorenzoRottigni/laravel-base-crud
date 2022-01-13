<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Descrizione del mio sito">
  <title>@yield('page_title')</title>
  @include('partials.__header_scripts')
</head>

<body>
    <header>
        <ul class="list-unstyled mb-0 d-flex justify-content-center gap-3 py-5">
            <li><a href="/comics">Index</a></li>
            <li><a href="/">Create</a></li>
            <li><a href="/">Store</a></li>
            <li><a href="/">edit</a></li>
            <li><a href="/comics/2">show</a></li>
            <li><a href="/">update</a></li>
            <li><a href="/">destroy</a></li>
        </ul>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer>Comics footer</footer>
</body>

</html>
