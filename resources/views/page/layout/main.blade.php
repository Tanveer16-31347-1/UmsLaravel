<!DOCTYPE HTML>
<html>

<head>
  <title>@yield('title')</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="{{asset('style')}}/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1 style="font-size:240%;" ><a href="index.html">University <span class="logo_colour">Management </span>System</a></h1>
          <h2> Education Software</h2>
        </div>
      </div>
      <div id="menubar">
        @yield('menubar')
      </div>
    </div>
    <div id="site_content">
      @yield('site_content')
      
      
    </div>
    
  </div>
</body>
</html>
