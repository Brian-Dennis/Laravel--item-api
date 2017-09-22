<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Acme Web</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    
    <div class="container">
    @if(Request::is('/'))
      @include('inc.showcase')
    @endif
      <div class="row">
        {{--  Main Page 8-col-div Content  --}}
        <div class="col-md-8 col-lg-8">

          {{--  Including Errors  --}}
          @include('inc.messages')

          {{--  Main Page Content  --}}
          @yield('content')
        </div>

        {{--  Sidebar Content 4-col-div  --}}
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>
    {{--  footer  --}}
    <footer id="footer" class="text-center">
      <p>Copyright 2017 &copy; Acme Web</p>
    </footer>
  </body>
</html>