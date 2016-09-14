<!DOCTYPE html>
<?php
session_start();
$_SESSION['userid'] = 1;
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>小型社团资金流动记录系统</title>

    <!--common-->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.php"><img src="../images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.php"><img src="../images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner" style="font-family:微软雅黑">

            <!-- visible to small devices only -->

            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="../images/photos/user2.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="person-info.php">月饼小姐</a></h4>
                    </div>
                </div>

                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="person-info.php"><i class="fa fa-user"></i> <span>个人信息</span></a></li>
                    <li><a href="../login.php"><i class="fa fa-sign-out"></i> <span>注销登陆</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="person-account.php"><i class="fa fa-book"></i> <span>个人账户</span></a></li>
                <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>活动管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="activity-manage.php"> 我管理的活动</a></li>
                        <li><a href="activity-join.php"> 我参与的活动</a></li>
                        <li><a href="activity-new.php"> 申请活动</a></li>
                        <li><a href="activity-approving.php">审核中的活动</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bell"></i> <span>通知管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="message-all.php"> 查看通知</a></li>
                        <li><a href="message-new.php"> 发布通知</a></li>
                    </ul>
                </li>
            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
            <form class="searchform" action="#" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>
            <!--search end-->

            <!--notification menu start -->
            <div class="menu-right" style="font-family:微软雅黑">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">3</span><!--此处为通知数量-->
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">通知</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="message-info.php">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">通知简述  </span>
                                        <em class="small">多久之前 例 30mins ago</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="message-info.php">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">通知简述  </span>
                                        <em class="small">多久之前 例 1小时之前</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="message-info.php">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">通知简述  </span>
                                        <em class="small">多久之前</em>
                                    </a>
                                </li>
                                <li class="new"><a href="message-all.php">查看所有通知</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="../images/photos/user2.png" alt="" />
                            <?php
                            $link = mysqli_connect('localhost', 'root', '', 'odb');
                            mysqli_query($link, 'set names utf8');

//                            if (isset($_SESSION['iflogin']) && $_SESSION['iflogin']) {
                            if(1){
                                $nowuserid = $_SESSION['userid'];
//                                echo $nowuserid;
                                $sql3 = "select `username` from `user` where id = $nowuserid ";
                                $result3 = mysqli_query($link, $sql3);
                                @$row3 = mysqli_fetch_row($result3);
                                echo $row3[0];
                            }
                            ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="person-info.php"><i class="fa fa-user"></i>  个人信息</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> 注销登陆</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end -->

        <!-- page heading start -->
        <div class="page-heading" style="font-family:微软雅黑">

        </div>
        <!-- page heading end -->

        <!--body wrapper start -->
        <div class="wrapper" style="font-family:微软雅黑">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="col-md-4">
                                <div class="profile-pic text-center">
                                    <img alt=" " src="../images/photos/user2.png"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="p-info" style="padding-top:20px;">
                                    <?php
                                    $link = mysqli_connect('localhost', 'root', '', 'odb');
                                    mysqli_query($link, 'set name utf8');
                                    $nowuserid=$_SESSION['userid'];
                                    echo $nowuserid;
//                                    if(isset($_SESSION['iflogin'])&&$_SESSION['iflogin']){
                                    if (1) {
                                        $link = mysqli_connect('localhost', 'root', '', 'odb');
                                        mysqli_query($link, 'set names utf8');
                                        $sql3 = "select `username`,`tel`,`email`,`ifboss` from `user` where id=$nowuserid";
                                        $result3 = mysqli_query($link, $sql3);
                                        @$row3 = mysqli_fetch_row($result3);
                                        ?>
                                        <li>
                                            <div class="title">姓名</div>
                                            <div class="desk"><?php
                                                echo $row3[0];
                                                ?></div>
                                        </li>
                                        <li>
                                            <div class="title">手机号码</div>
                                            <div class="desk"><?php
                                                echo $row3[1];
                                                ?></div>
                                        </li>
                                        <li>
                                            <div class="title">邮箱</div>
                                            <div class="desk"><?php
                                                echo $row3[2];
                                                ?></div>
                                        </li>
                                        <li>
                                            <div class="title">权限</div>
                                            <div class="desk"><?php
                                                if ($row3[3] == 0) echo '普通用户';
                                                else echo '管理用户';
                                                ?></div>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <ul class="p-info" style="padding-top:40px;">
                                    <li>
                                        <i class="fa fa-user" style="padding-right:5px"></i>
                                        <a href="#perModal" data-toggle="modal" style="text-decoration:none">编辑资料</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-pencil" style="padding-right:5px"></i>
                                        <a href="#pswModal" data-toggle="modal" style="text-decoration:none">修改密码</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Modal Start -->
                            <!-- 此处为编辑资料弹出框 -->
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="perModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">编辑资料</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>姓名</label>
                                                <input id="name" value="月饼小姐" class="form-control"/>
                                                <!--value当中的值为修改前的用户名，请根据数据库数据修改-->
                                            </div>
                                            <div class="form-group">
                                                <label>手机号码</label>
                                                <input id="phoneNumbers" value="188****0000" class="form-control"/>
                                                <!--value当中的值为修改前的手机号码，请根据数据库数据修改-->
                                            </div>
                                            <div class="form-group">
                                                <label>邮箱</label>
                                                <input id="email" value="mooncake@bit.edu.cn" class="form-control"/>
                                                <!--value当中的值为修改前的邮箱，请根据数据库数据修改-->
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">取消</button>
                                            <button data-dismiss="modal" class="btn btn-primary" type="button">确定</button>
                                            <!--data-dismiss="modal"的功能是关闭弹出框，回到原页面，根据实现功能的需要，可去。-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--此为修改密码弹出框-->
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="pswModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">修改资料</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>请输入旧密码</label>
                                                <input type="password" id="psw" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label>请输入新密码</label>
                                                <input type="password" id="newpsw" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label>请确认新密码</label>
                                                <input type="password" id="newpsw2" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">取消</button>
                                            <button data-dismiss="modal" class="btn btn-primary" type="button">确定</button>
                                            <!--data-dismiss="modal"的功能是关闭弹出框，回到原页面，根据实现功能的需要，可去。-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- body wrapper end-->


        <!--footer section start-->
        <footer>
            2016 &copy; 小型社团资金流动记录系统 by <a href="#" target="_blank">ILoveEatingMoonCake</a>
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../js/jquery-migrate-1.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/modernizr.min.js"></script>
<script src="../js/jquery.nicescroll.js"></script>

<!--common scripts for all pages-->
<script src="../js/scripts.js"></script>

</body>
</html>