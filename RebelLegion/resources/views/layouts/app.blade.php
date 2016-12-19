<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="{{ App::getLocale() }}">
  <head>
    @include('includes.head')
  </head>

  <body>
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">

        <header>
          @include('includes.header')
        </header>

        @yield('content')

        <footer>
          @include('includes.footer')
        </footer>

      </div>
    </div>
  </body>
</html>
