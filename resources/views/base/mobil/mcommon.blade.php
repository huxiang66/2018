<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<link rel="shortcut icon" href="/images/1.png" type="image/x-icon" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/mobil/mcopyRight.css">
<link rel="stylesheet" type="text/css" href="css/mobil/mnav.css">
@section("link")

@show
</head>
<body>
@include("base.mobil.mnav")
@section("body")

@show
@include("base.mobil.mcopyRight")

<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
@section("js")
@show	
</body>
</html>