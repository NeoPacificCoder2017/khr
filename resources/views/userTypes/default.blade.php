<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title> @yield('title')</title>
    <meta ...>
   
    <!-- CSS + Font -->
    <link href="..." type="text/css" rel="stylesheet" media="screen,projection"/>
    ...
  
    <!-- Custom CSS -->
    @yield('custom_css')    
</head>

<body>
   @yield('content')

  <footer>
   ...
  </footer>

  <!--  Scripts-->
  <script src="{{asset('js/jquery.js')}}"></script>
  ...

  @yield('scripts')   
</body>
</html>