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
        <h1>欢迎来到最佳家教网 <small>家教<a href="/teachers/login">登陆</a>/注册</small></h1>
    </div>
    <div class="well well-lg">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">您的名字：</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputEmail3" placeholder="name ">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">您的手机：</label>
                <div class="col-sm-10">
                    <input type="phone" class="form-control" id="inputPassword3" placeholder="iPhone">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">电子邮件：</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputPassword3" placeholder="email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">学历：</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputPassword3" placeholder="qualifications">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">讲授学科：</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputPassword3" placeholder="subject">
                </div>
            </div>
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="inputPassword3" class="col-sm-2 control-label">密码：</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control input-lg" placeholder="密码" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">确认密码：</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control input-lg" placeholder="确认密码" name="password_confirmation" required>
                </div>
            </div>

            {{--<div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                <label class="sr-only">验证码</label>

                <div style="position: relative;">
                    <input width="50px" id="text" maxlength="4" type="text" class="form-control input-lg" name="captcha" placeholder="验证码" required>
                    <img style="position: absolute;top: 0; right: 0; cursor: pointer;" src="{{captcha_src()}}" onclick="this.src='{{ url("captcha/default") }}?'+Math.random()" alt="验证码" id="captcha">
                </div>


                @if ($errors->has('captcha'))
                    <div class="has-error">
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('captcha') }}</strong>
                                                </span>
                    </div>
                @endif
            </div>--}}



            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 记住
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">注册</button>
                </div>
            </div>
        </form>
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