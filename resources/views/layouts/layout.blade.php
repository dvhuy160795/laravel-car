<!DOCTYPE HTML>
<head>
<title>App Name - @yield('title')</title>
<meta charset="utf-8">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<!-- CSS Files -->

<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('/theme/css/style.css') }}">

<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('/theme/menu/css/simple_menu.css') }}">

<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('/css/admin/admin.css') }}">
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('/lib/boostrap/css/bootstrap.css') }}">
<!-- Contact Form -->}">
<link href="{{ URL::asset('/theme/contact-form/css/style.css') }}" media="screen" rel="stylesheet" type="text/css">
<!-- JS Files -->
<script src="{{ URL::asset('/lib/jquery-1.7.1.js') }}"></script>
<script src="{{ URL::asset('/theme/js/jquery.tools.min.js') }}"></script>
<script src="{{ URL::asset('/lib/ckeditor/ckeditor.js') }}"></script>
<script src="{{ URL::asset('/lib/boostrap/js/bootstrap.js') }}"></script>

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
    <ol id="menu">
        <li class="active_menu_item"><a href="index.html" style="color:#FFF">Danh sách xe</a>
          <!-- sub menu -->
          <ol>
            <li><a href="nivo.html">Nivo Slider</a></li>
            <li><a href="ei-slider.html">EI Slider</a></li>
            <li><a href="fullscreen-gallery.html">Fullscreen Slider</a></li>
            <li><a href="image-frontpage.html">Static Image</a></li>
          </ol>
        </li>
        <!-- end sub menu -->
        <li><a href="#">Lái thử</a>
          <!-- sub menu -->
          <ol>
            <li><a href="magazine.html">Magazine</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="full-width.html">Full Width Page</a></li>
            <li><a href="columns.html">Columns</a></li>
          </ol>
        </li>
        <!-- end sub menu -->
        <li><a href="elements.html">Khuyến mãi</a></li>
    </ol> 
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
<script src="{{ URL::asset('/js/admin/admin.js') }}"></script>
<script>
    
</script>
</html>