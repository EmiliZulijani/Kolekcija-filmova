<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
        <title>Kolekcija filmova</title>
		<link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
		@include('inc.navbar')

      <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
          <footer id="footer" class="text-center">
            <p>Copyright 2017 &copy; Kolekcija filmova</p>
          </footer>
      </div>
    </body>
</html>
