<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    @yield('css')
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
      FadhionablyLate
      </a>
    </div>
  </header>
  <div class="title">
    <div class="title__logo">Contact
    </div>
  </div>
  <main>
  @yield('content')
  
  </main>
</body>
</html>
