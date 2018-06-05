
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Learn is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="zhangmengfei">
	<title>Learn</title>
	<link rel="favicon" href="{{ asset('images/favicon.png') }}">
	<link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/da-slider.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<script src="http://www.clantrip.com/static/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://www.clantrip.com/static/bootstrap-font/js/bootstrap.min.js"></script>
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<!--<script src="{{ asset('js/html5shiv.js') }}"></script>-->
	{{--<script src="{{ asset('js/respond.min.js') }}"></script>--}}
	<style>
		h4
		{
			color:red;
			text-align:left;
		}
		.jslcbody {
		height: 114px;
		border-left: 1px solid #E1E1E1;
		border-bottom: 1px solid #E1E1E1;
		border-right: 1px solid #E1E1E1;
		width: 1001px;
		}
		.jslccenter {
		width: 968px;
		margin: 0 auto;
		height: auto;
		}
		.jslcsearch {
		width: 63px;
		height: 63px;
		float: left;
		margin-top: 25px;
		margin-left: 122px;
		}
		.jslctelbody {
		width: 104px;
		height: 63px;
		float: left;
		margin-top: 35px;
		color: #6C6B6B;
		font-size: 14px;
		line-height: 22px;
		margin-left: 24px;
		}
		.lined {
		background: url({{ asset('images/lined.jpg')}}) no-repeat;
		width: 1001px;
		height: 1px;
		margin-top: 5px;
		}
		.jslcjiantou {
		width: 15px;
		height: 25px;
		margin-top: 20px;
		margin-left: 58px;
		float: left;
		}
		.jslcsysj {
		width: 63px;
		height: 63px;
		float: left;
		margin-top: 25px;
		margin-left: 56px;
		}
		.jslcsyjg {
		width: 63px;
		height: 63px;
		float: left;
		margin-top: 25px;
		margin-left: 56px;
		}
		
		.card-area .card-active {
        -webkit-transform: scale(1) !important;
        -moz-transform: scale(1) !important;;
        -o-transform: scale(1) !important;;
        -ms-transform: scale(1) !important;;
        z-index: 10 !important;
		}
		.our-service{
			background-color: #ffffff;
		}
		.card-box{
			padding-top: 20px;
			padding-bottom: 60px;
		}
		.card-area {
			padding: 0;
			margin: 0;
			-webkit-margin-before: 0px;
			-webkit-margin-after: 0px;
			-webkit-margin-start: 0px;
			-webkit-margin-end: 0px;
			-webkit-padding-start: 0px;
		}
		.card-area .card-item{
			float:left;
			position:relative;
			list-style:none;
			width: 25%;
			background-color: #fafafa;
			border:1px solid #c1c1c1;

			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-o-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;

		}
		.card-area .card-item .card-title{
			padding-top: 20px;
			padding-bottom: 20px;
			border-bottom: 1px solid #c1c1c1;
		}
		.card-area .card-item .card-title h4{
			font-weight: bold;
			color: #0ba1e4;
		}
		.card-area .card-item .card-title h4,.card-area .card-item .card-title p{
			margin: 0;
			line-height: 2em;
		}
		.card-area .card-item .card-content{
			padding-top: 20px;
			padding-bottom: 30px;
		}
		.card-area .card-item .card-content p{
			line-height: 3em;
		}
		.card-area .card-item .card-content a{
			padding-left: 20px;
			padding-right: 20px;
		}
		.card-area .card-active {
			background-color: #0ba1e4;
			border:1px solid #0ba1e4;
			box-shadow: 0 0 20px 0 rgba(45,183,245,.5);
			color: #fff;
			-webkit-transform: scale(1.1);
			-moz-transform: scale(1.1);
			-o-transform: scale(1.1);
			-ms-transform: scale(1.1);
			z-index: 11;
		}
		.card-area .card-active .card-title{
			border-color: #ffffff;
		}
		.card-area .card-active .card-title h4{
			color: #fff;
		}
	</style>
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
					<li><a href="/teachers/login">家教登陆/注册</a></li>
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

	<!-- Header -->
	<div id="carousel-example-generic" class="carousel slide my-slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<a target="_blank" href="#">
					<img src="{{ asset('images/bg3.png') }}" alt="家教1">
				</a>
			</div>
			<div class="item">
				<a target="_blank" href="#">
					<img src="{{ asset('images/bg2.png') }}" alt="家教2">
				</a>
			</div>
		</div>
	</div>

	<!-- /Header -->

	   <section class="container">
		<div class="heading">
			<!-- Heading -->
			<h2>教育现状分析</h2>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="{{ asset('images/spotlight.jpg') }}" alt="" class="img-responsive">
			</div>
			<div class="col-md-8">
			    <h4>教育资源分布</h4>
				<p>当今社会，高等教育资源严重向名校倾斜，不足5%的211、985名校掌握超70%的高校科研经费。名校之间教育资源差别也显著，国内部分企业招聘也明确规定仅限211、985学生。</p>
				<h4>辅导班选择迷茫</h4>
				<p>孩子上名校无疑是最重要的出路，但家长和孩子盲目的选择辅导班不仅浪费了时间、金钱，更重要的是白白给孩子增加压力，挫伤学习积极性。</p>
				<blockquote class="blockquote-1">
					<p>失败是什么？没有什么，只是更走近成功一步；成功是什么？就是走过了所有通向失败的路，只剩下一条路，那就是成功的路。</p>
					<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
				</blockquote>
			</div>
		</div>
	</section>
	
	
      <section class="container">
	  	<div class="heading">
			<!-- Heading -->
			<h2>免费请家教流程</h2>
		</div>
		<div class="lined"></div>
		<div class="jslcbody">
			<div class="jslccenter">
				<div class="jslcsearch"><img src="{{ asset('images/liucheng1.png') }}" alt="liucheng1.png"></div>
				<div class="jslctelbody" style="width:89px">
				    <p>搜索适合教员</p>
					<p>免费在线预约</p>
				</div>
				<div class=jslcjiantou><img src="{{ asset('images/liucheng4.png') }}" alt="liucheng4.png"></div>
				<div class="jslcsysj"><img src="{{ asset('images/liucheng2.png') }}" alt="liucheng2.png"></div>
				<div class="jslctelbody" style="width:79px">
				    <p>双方接洽</p>
					<p>安排试讲</p>
				</div>
				<div class=jslcjiantou><img src="{{ asset('images/liucheng4.png') }}" alt="liucheng4.png"></div>
				<div class="jslcsyjg"><img src="{{ asset('images/liucheng3.png') }}" alt="liucheng3.png"></div>
				<div class="jslctelbody" style="width:79px">
				    <p>反馈结果</p>
					<p>永久免费</p>
				</div>
			</div>
		</div>
      </section>
      <section class="news-box">
        <div class="container">
            <h2><span>优秀教师展示</span></h2>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><time datetime="2016-01-01">25 Nov, 2016</time><img src="{{ asset('images/news1.jpg') }}" alt=""></figure>
                            <div class="caption maxheight2"><div class="box_inner">
                               Lorem ipsum dolor sit amet conse ctetu eiusmod.
                            </div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><time datetime="2016-01-01">25 Nov, 2016</time><img src="{{ asset('images/news2.jpg') }}" alt=""></figure>
                            <div class="caption maxheight2"><div class="box_inner">
                                Lorem ipsumulum aenean noummy endrerit mauris.
                            </div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><time datetime="2016-01-01">25 Nov, 2016</time><img src="{{ asset('images/news3.jpg') }}" alt=""></figure>
                            <div class="caption maxheight2"><div class="box_inner">
                                Pariatur excepteur sint occaummy endrerit mauris.
                            </div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
								<figure><time datetime="2016-01-01">25 Nov, 2016</time><img src="{{ asset('images/news4.jpg') }}" alt=""></figure>
                            <div class="caption maxheight2"><div class="box_inner">
                                Magnis dis parturient montes ascetur ridiculus mus.
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<div class="index-row our-service">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 main-title">
                <h2 class="h1">我们的服务</h2>
            </div>
            <div class="col-sm-12 text-center card-box">
                <ul class="card-area">
                    <li class="card-item card-active">
                        <div class="card-title">
                            <h3>关于我们</h3>

                        </div>
                        <div class="card-content">
                            <p>公司介绍详情</p>
							<p>  __  </p>
                            <p>选择优势明显</p>
							<p>  __  </p>
                            <p>完美预约流程</p>

                            <a href="http://www.clantrip.com/index.php?m=content&c=index&a=lists&catid=13" class="btn btn-outline-inverse">查看详情</a>

                        </div>
                    </li>
                    <li class="card-item">
                        <div class="card-title">
                            <h3>学生专区</h3>

                        </div>
                        <div class="card-content">
                            <p>水平免费测试</p>
							<p>  __  </p>
                            <p>电子资料学习</p>
							<p>  __  </p>
                            <p>优秀学生展示</p>

                            <a href="/index.php?m=content&c=index&a=show&catid=9&id=2" class="btn btn-outline-blue">查看详情</a>
                        </div>
                    </li>
                    <li class="card-item card-active">
                        <div class="card-title">
                            <h3>名师服务</h3>

                        </div>
                        <div class="card-content">
                            <p>名师风采展示</p>

                            <p>  __  </p>

                            <p>名师课程咨询</p>

                            <p>  __  </p>

                            <p>家长问题咨询</p>
                            <a href="/index.php?m=content&c=index&a=show&catid=9&id=3" class="btn btn-outline-blue">查看详情</a>
                        </div>
                    </li>
                    <li class="card-item">
                        <div class="card-title">
                            <h3>班型课程</h3>

                        </div>
                        <div class="card-content">
                            <p>优秀课程展示</p>

                            <p>  __  </p>

                            <p>优秀班型展示</p>

                            <p>  __  </p>

                            <p>试听课程预约</p>
                            <a href="/index.php?m=content&c=index&a=show&catid=9&id=4" class="btn btn-outline-blue">查看详情</a>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="col-sm-12 text-center">
                <a href="http://www.clantrip.com/index.php?m=content&c=index&a=lists&catid=9" class="btn btn-outline-blue btn-lg">查看更多服务</a>
            </div>
        </div>
    </div>
</div>

    <footer id="footer">		
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
								<a href="/contact">联系我们</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div align="center" margin="auto">
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
