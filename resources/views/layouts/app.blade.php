<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <!-- Includiamo gli assets con la direttiva vite -->
  @vite('resources/js/app.js')
</head>

<body>
  <main>
    @yield('content')
  </main>

</body>

</html>
