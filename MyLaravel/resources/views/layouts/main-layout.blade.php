
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">

  </head>
  <body>
    @include('layouts.partials.header');
    @yield('section');
  </body>
</html>
