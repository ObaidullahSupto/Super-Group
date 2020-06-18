<!DOCTYPE html>
<html>
   
<head>
   @include('includes/head')
</head>

<body>

   <input type="checkbox" id="nav-main--trigger" />
   <input type="checkbox" id="nav-main--search-trigger" />
   
   {{-- header --}}
   <header id="top" class="header theme--light">
      @include('includes/header')
    </header>

   <main>
      @yield('content')
   </main>

   <footer class="footer theme--light">
      @include('includes/footer')
   </footer>

   @include('includes/footer-bottom')

</body>

</html>