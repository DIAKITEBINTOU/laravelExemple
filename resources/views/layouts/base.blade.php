<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>@yield('title')</title>
   <link rel="stylesheet" href="{{ URL::asset('css/base.css')}}">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/description">Description</a></li>
        <li><a href="/insert">Ajoute un livre</a></li>
        
        <!--<li><a href="/insert">Creation d'un canard</a></li>-->
      </ul>
    </na>
  </header>
  <main>
  @yield('main')
  </main>
</body>
</html>