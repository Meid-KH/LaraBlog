<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Styles -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <style>
      body {
        font-family: "Nunito", sans-serif;
      }
    </style>
  </head>

  <body class="bg-dark text-light">
    <div class="h1 p-4 "> <a href="/" class="text-light text-decoration-none">HOME</a> </div>
    <section class="my-5 py-5">
      <div class="container">@yield('content')</div>
    </section>
  </body>
</html>
