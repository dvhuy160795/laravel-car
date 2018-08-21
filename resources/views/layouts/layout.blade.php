<!DOCTYPE HTML>
<head>
<title>App Name - @yield('title')</title>
<meta charset="utf-8">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-success" style="height: 60px"></div>
    </div>
</div>
@show

<div id="container-fluid">
    <div class="row">
        @yield('content')
    </div>
    
</div>
<!-- END container -->
<div id="footer">
  
</div>
<!-- END footer -->
</body>
<script src="{{ URL::asset('/js/admin/admin.js') }}"></script>
<script>
    
</script>
</html>