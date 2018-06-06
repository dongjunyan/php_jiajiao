
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="zhangmengfei">
    <link rel="icon" href="../../favicon.ico">

    <title>welcome</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/welcome.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .bg{
            background:url({{asset('images/bg3.png')}});
            width:100%;
            height:100%;
            background-size:100% 100%;
            position:absolute;
            filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='bg-login.png',sizingMethod='scale');
        }
    </style>
</head>

<body>
<div class="bg">
    <div class="site-wrapper">

        <div class="site-wrapper-inner">

            <div class="cover-container">

                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class="masthead-brand">欢迎</h3>
                        <nav>
                            <ul class="nav masthead-nav">
                                <li class="active"><a href="/index">前往首页</a></li>
                                <li><a href="/users/register">用户注册</a></li>
                                <li><a href="/contact">联系我们</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">
                    <h1 class="cover-heading">欢迎来到最佳家教网</h1>
                    <div class="inner">
                        <p class="lead">专业家教网站,能够提供语文,数学,英语,物理,化学等学科以及奥数,小提琴,钢琴,书法,计算机等全方位的家庭教育服务。为广大学员提供各学科的兼职家教老师和专职家庭教师。</p>
                        <p class="lead">
                    </div>


                        <a href="/index" class="btn btn-lg btn-default">加入我们吧</a>
                    </p>
                </div>

                <div class="mastfoot">
                    <div class="inner">

                        <p>phpjiajiao</p>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
