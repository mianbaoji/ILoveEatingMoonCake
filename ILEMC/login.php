
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Login</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
	<link href="fonts/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="login.php" method=post>
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Sign In</h1>
            <img src="images/login-logo.png" alt=""/>
        </div>
        <div class="login-wrap">
            <input type="text" class="form-control" name="phone" placeholder="手机号" >
            <input type="password" class="form-control" name="psw" placeholder="密码">

            <?php
            if($_POST)
            {
                $phone = $_POST['phone'];
                $psw = $_POST['psw'];
                $link = mysqli_connect('localhost', 'root', '', 'odb');
                $sql = "select password,ifboss,username,id from user where tel = '$phone' ";

                /*$res = mysqli_query($link, $sql);
                $rows=$row = mysqli_fetch_row($res);*/
                if(!session_id())
                    session_start();
                if ($result = mysqli_query($link, $sql)) {
                    while ($row = mysqli_fetch_row($result)) {
                        if ($row[0] == $psw) {

                            $_SESSION['iflogin']=1;   //判断是否已经登录的依据。
                            $_SESSION['userid']=$row[3];  //记录当前登录用户id。
                            //header('location:../ILEMC/test.php');

                            if ($row[1] == 1)
                            {
                                header('location:../ILEMC/html/b-index.php');

                            }
                            else
                            {
                                header('location:../ILEMC/html/index.php');

                            }

                        } else
                            echo 'login fail!';
                    }
                }
                mysqli_free_result($result);
                mysqli_close($link);
            }
            ?>
			
            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> 记住我
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> 忘记密码 ?</a>

                </span>
            </label>

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">忘记密码 ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>请输入您的手机号以找回您的密码.</p>
                        <input type="text" placeholder="手机号码" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">取消</button>
                        <button class="btn btn-primary" type="button">确定</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
		

    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

</body>
</html>
