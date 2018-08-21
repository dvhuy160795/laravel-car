<!DOCTYPE HTML>
<head>
<title>App Name - @yield('title')</title>
<meta charset="utf-8">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('/theme/css/style.css') }}">
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('/theme/menu/css/simple_menu.css') }}">
<!-- Contact Form -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link href="{{ URL::asset('/theme/contact-form/css/style.css') }}" media="screen" rel="stylesheet" type="text/css">
<!-- JS Files -->
<script src="{{ URL::asset('/theme/js/jquery.tools.min.js') }}"></script>
<script>
$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});
</script>
<script>
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
</head>
<body>
<!-- Main Menu -->
@section('sidebar')
    <nav class="navbar navbar-inverse navbar-fixed-top col-md-12 bg-light" role="navigation" style="position: fixed; z-index: 10">
        <div class="container col-md-12">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light col-md-12">
                <a class="navbar-brand" href="?">
                    <img style="width: 90px;margin-top: -10px;" src="{{ URL::asset('/imgSystem/logo.png') }}">
                </a>
                <a class="navbar-brand" href="#" style="text-transform: uppercase; font-weight: bold">Cherolet Dương Bảo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link text-muted" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <div class="dropdown">
                        <a class="btn text-muted dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Sản phẩm
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width: 400px">

                                <a class="dropdown-item" href="?control=Product&action=product&id=">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img style="width: 150px;" src="">
                                        </div>
                                        <div class="col-md-3" style="padding: 15px;">
                                            <label style="text-transform: uppercase; font-weight: bold; color: red;"></label><br>
                                        </div>
                                        <div class="col-md-4" style="padding: 15px;">
                                            <label style="text-transform: uppercase; font-weight: bold; color: #9f9f9f;">Triệu</label>
                                        </div>
                                    </div>
                                </a>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted" href="#">Dịch vụ</a>
                    </li>
                  </ul>
                  <span class="navbar-text">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                  </span>
                </div>
            </nav>
        </div>
    </nav> 
@show

<div id="container">
    @yield('content')
</div>
<!-- END container -->
<div id="footer">
  <!-- First Column -->
  <div class="one-fourth">
    <h3>Useful Links</h3>
    <ul class="footer_links">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Ellem Ciet</a></li>
      <li><a href="#">Currivitas</a></li>
      <li><a href="#">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Second Column -->
  <div class="one-fourth">
    <h3>Terms</h3>
    <ul class="footer_links">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Ellem Ciet</a></li>
      <li><a href="#">Currivitas</a></li>
      <li><a href="#">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Third Column -->
  <div class="one-fourth">
    <h3>Information</h3>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet enim id dui tincidunt vestibulum rhoncus a felis.
    <div id="social_icons"> Theme by <a href="http://www.csstemplateheaven.com">CssTemplateHeaven</a><br>
      Photos © <a href="http://dieterschneider.net">Dieter Schneider</a> </div>
  </div>
  <!-- Fourth Column -->
  <div class="one-fourth last">
    <h3>Socialize</h3>
    <img src="img/icon_fb.png" alt=""> <img src="img/icon_twitter.png" alt=""> <img src="img/icon_in.png" alt=""> </div>
  <div style="clear:both"></div>
</div>
<!-- END footer -->
</body>
</html>