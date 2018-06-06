<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户信息</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">用户信息页面</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('images/news4.jpg' )}}" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <!-- List group -->
            <ul class="list-group">
                <li class="list-group-item-heading">用户名：{{ $user->email  }}</li>
                <li class="list-group-item">昵称：</li>
                <li class="list-group-item">性别：</li>
                <li class="list-group-item">爱好：</li>
                <li class="list-group-item">地址：</li>
                <li class="list-group-item">个人介绍：</li>
            </ul>
        </div>
        <button type="button" class="btn btn-primary">修改</button>

        <!-- Indicates a successful or positive action -->
        <a href="/index"><button type="button" class="btn btn-success">前往家教页面</button></a>
</body>
</html>