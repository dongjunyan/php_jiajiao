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
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('images/logo.png') }}" alt="Techro HTML5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li class="active"><a href="/index">首页</a></li>
                <li><a href="/students">请家教登记</a></li>
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

            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->

<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>联系我们</h1>
            </div>
        </div>
    </div>
</header>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="section-title">信息反馈</h3>
            <p>
                希望大家多多支持我们的网站，如果遇到bug请及时提交，我们会根据您提交bug程度做出改成并进行奖励。
            </p>

            <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
            <form name="sentMessage" id="contactForm"  novalidate>
                <div class="control-group">
                    <div class="controls">
                        <input type="text" class="form-control"
                               placeholder="Full Name" id="name" required
                               data-validation-required-message="Please enter your name" />
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="email" class="form-control" placeholder="Email"
                               id="email" required
                               data-validation-required-message="Please enter your email" />
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
		<textarea rows="10" cols="100" class="form-control"
                  placeholder="Message" id="message" required
                  data-validation-required-message="Please enter your message" minlength="5"
                  data-validation-minlength-message="Min 5 characters"
                  maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"> </div> <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary pull-right">提交</button><br />
            </form>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="section-title">工作地点</h3>
                    <div class="contact-info">
                        <h5>Address</h5>
                        <p>河北师范大学软件学院</p>

                        <h5>Email</h5>
                        <p>php_jiajiao@hotmail.com</p>

                        <h5>Phone</h5>
                        <p>+010 123 1234 1234</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="section-title">工作时间</h3>
                    <div class="contact-info">
                        <h5>Monday - Friday</h5>
                        <p>09:00 AM - 6:30 PM</p>

                        <h5>Saturday</h5>
                        <p>Closed</p>

                        <h5>Sunday</h5>
                        <p>Closed</p>
                    </div>
                </div>
            </div>
            <h3 class="section-title">取得联系</h3>
            <p>
                希望您在本网站浏览愉快。
            </p>
        </div>
    </div>
</div>
<!-- /container -->



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
                            <a href="#">会员管理</a> |
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
