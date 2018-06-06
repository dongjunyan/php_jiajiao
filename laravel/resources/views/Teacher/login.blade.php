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
<!-- Fixed navbar -->
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
                <li><a href="/students/login">学员登陆/注册</a></li>
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
<!-- /.navbar -->


<div class="container">
    <div class="page-header">
        <h1>欢迎来到最佳家教网 <small>家教登陆/<a href="/teachers/create">注册</a></small></h1>
    </div>
    <div class="container">

        @if (session()->has('status'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ session('status') }}
            </div>
        @endif

        <section class="sign-area panel p-170">
            <div class="row row-rl-0">
                <div class="col-sm-6 col-md-7">
                    <form class="p-40 form-horizontal" method="POST" action="{{ route('login') }}">

                    {{ csrf_field() }}

                    <!-- 把回传页也提交 -->
                        <input type="hidden" name="redirect_url" value="{{ request()->input('redirect_url') ?? '/' }}">

                        <div class="form-group {{ $errors->has('account') ? ' has-error' : '' }}">
                            <label class="sr-only">用户名/邮箱</label>
                            <input type="text" class="form-control input-lg" name="account" value="{{ old('account') }}" placeholder="用户名 / 邮箱" required autofocus>
                            @if ($errors->has('account'))
                                <span class="help-block">
                                            <strong>{!! $errors->first('account') !!}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="sr-only">Password</label>
                            <input type="password" class="form-control input-lg" name="password" placeholder="密码" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <a href="{{ route('password.request') }}" class="forgot-pass-link color-green">忘记密码 ?</a>
                        </div>
                        <div class="custom-checkbox mb-20">
                            <input type="checkbox" name="remember" id="remember" checked>
                            <label class="color-mid" for="remember">保持登录状态</label>
                        </div>
                        <button type="submit" class="btn btn-block btn-lg">登  录</button>
                    </form>
                    <br/>
                    <div class="mb-20">
                        <a href="{{ url('/auth/qq') }}" class="btn btn-lg btn-block btn-social btn-twitter"><i class="fa fa-qq"></i>登录  QQ</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- /.footer -->
<footer id="footer">
    <div class="container">


        <div class="clear"></div>
        <!--CLEAR FLOATS-->
    </div>
    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="simplenav">
                            <a href="#">首页</a> |
                            <a href="#">请家教注册</a> |
                            <a href="#">家教注册</a> |
                            <a href="#">社区</a> |
                            <a href="#">联系我们</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="text-right">
                            Copyright &copy; 2018.Company php_jiajiao
                        </p>
                    </div>
                </div>

            </div>
            <!-- /row of panels -->
        </div>
    </div>
</footer>


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/modernizr-latest.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ asset('js/jquery.cslider.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>



</body>
</html>