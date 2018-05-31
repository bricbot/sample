<!DOCTYPE html>
<html>
<head>
    <title>Sample App - @yield('subtitle', '')</title>
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>
    <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="col-md-offset-1 col-md-10">
          <a href=" {{ route('home') }} " id="logo">Sample App</a>
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ route('help') }}">帮助</a></li>
              <li><a href="#">登录</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="container">
      @yield('content')
    </div> 
    <div class="col-md-12">
    
    <footer class="footer">
        <small class="slogon">
          <img class="brand-icon" src="https://lccdn.phphub.org/uploads/images/201612/12/1/iq7WQc2iuW.png?imageView2/1/w/34/h/34">
          <a href="https://laravel-china.org/courses">
            刻意练习，每日精进
          </a>
        </small>
        <nav>
            <ul>
                <li><a href="{{ route('about') }}">关于</a></li>
            </ul>
        </nav>
    </footer>
    </div>
</body>
</html>