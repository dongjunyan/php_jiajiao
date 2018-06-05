<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn is a modern and fully responsive Template by WebThemez.">
    <meta name="author" content="">
    <title>Learn</title>
    <link rel="favicon" href="{{asset('images/favicon.png')}}">
    <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/da-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <script src="http://www.clantrip.com/static/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://www.clantrip.com/static/bootstrap-font/js/bootstrap.min.js"></script>
</head>

<body>
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="/index">
                <img src="{{ asset('images/logo.png') }}" alt="Techro HTML5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li class="active"><a href="/index">首页</a></li>
                <li><a href="/teachers">家教注册</a></li>
                <li><a href="#">社区</a></li>
                @if(\Illuminate\Support\Facades\Session::has('users'))
                    <li class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            欢迎您：{{\Illuminate\Support\Facades\Session::get('users')}}
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">注销</a></li>
                        </ul>

                    </li>
                @else
                    <li class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            用户管理
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="/users/login">登录</a></li>
                            <li><a href="/users/login">注册</a></li>
                            <li><a href="#">注销</a></li>
                        </ul>
                    </li>
                @endif
                <li><a href="/contact">联系我们</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>