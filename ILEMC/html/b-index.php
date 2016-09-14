﻿<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords"
          content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>小型社团资金流动记录系统</title>

    <!--icheck-->
    <link href="../js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
    <link href="../js/iCheck/skins/square/square.css" rel="stylesheet">
    <link href="../js/iCheck/skins/square/red.css" rel="stylesheet">
    <link href="../js/iCheck/skins/square/blue.css" rel="stylesheet">

    <!--dashboard calendar-->
    <link href="../css/clndr.css" rel="stylesheet">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../js/morris-chart/morris.css">

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
<?php
$link = mysqli_connect('localhost', 'root', '', 'odb');
mysqli_query($link, 'set names utf8');

if (isset($_SESSION['iflogin']) && $_SESSION['iflogin']) {
    $nowuserid = $_SESSION['userid'];
    //echo $nowuserid;
    $sql3 = "select `username` from `user` where id = $nowuserid ";
    $result3 = mysqli_query($link, $sql3);
    @$row3 = mysqli_fetch_row($result3);

}
?>
<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="b-index.php"><img src="/images/logo_icon.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="b-index.php"><img src="/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner" style="font-family:微软雅黑">

            <!-- visible to small devices only -->

            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="/images/photos/user2.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">月饼小姐</a></h4>
                    </div>
                </div>

                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="b-person-info.php"><i class="fa fa-user"></i> <span>个人信息</span></a></li>
                    <li><a href="../login.php"><i class="fa fa-sign-out"></i> <span>注销登陆</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="b-person-account.php"><i class="fa fa-book"></i> <span>个人账户</span></a></li>
                <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>活动管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="b-activity-manage.php"> 我管理的活动</a></li>
                        <li><a href="b-activity-join.php"> 我参与的活动</a></li>
                        <li><a href="b-activity-new.php"> 新建活动</a></li>
                        <li><a href="b-activity-approve.php"> 审批活动</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bell"></i> <span>通知管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="b-message-all.php"> 查看通知</a></li>
                        <li><a href="b-message-new.php"> 发布通知</a></li>
                    </ul>
                </li>

                <li><a href="b-person-manage.php"><i class="fa fa-users"></i> <span>人员管理</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>账目管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="b-account-all.php"> 查看账目</a></li>
                        <li><a href="b-account-approve.php"> 审核账目</a></li>
                    </ul>
                </li>
            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content">

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start 搜索功能待定-->
            <form class="searchform" action="#" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..."/>
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
                                    <a href="b-message-info.php">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">通知简述  </span>
                                        <em class="small">多久之前 例 30mins ago</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="b-message-info.php">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">通知简述  </span>
                                        <em class="small">多久之前 例 1小时之前</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="b-message-info.php">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">通知简述  </span>
                                        <em class="small">多久之前</em>
                                    </a>
                                </li>
                                <li class="new"><a href="b-message-all.php">查看所有通知</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="../images/photos/user2.png" alt=""/> <!--用户头像...待定功能= =-->
                            <?php
                            echo $row3[0];
                            ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="b-person-info.php"><i class="fa fa-user"></i> 个人信息</a></li>
                            <li><a href="../login.php"><i class="fa fa-sign-out"></i> 注销登陆</a></li>
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
                    <!--statistics start-->
                    <div class="row state-overview">
                        <a href="b-activity-manage.php" style="text-decoration:none; color:#fff;">
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="panel purple">
                                    <div class="symbol">
                                        <i class="fa fa-flag"></i>
                                    </div>
                                    <div class="state-value">
                                        <div class="value">
                                            <?php
                                            $sql2="select count(*) from `activity` where responsibility=$nowuserid";
                                            $result2 = mysqli_query($link, $sql2);
                                            @$row2=mysqli_fetch_row($result2);
                                            if(!$row2){
                                                $row2[0]="0";
                                            }
                                            echo $row2[0];
                                            ?>
                                        </div><!--此处为我管理的数量-->
                                        <div class="title"> 我管理的活动</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="b-activity-join.php" style="text-decoration:none; color:#fff;">
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="panel red">
                                    <div class="symbol">
                                        <i class="fa fa-tags"></i>
                                    </div>
                                    <div class="state-value">
                                        <div class="value">
                                            <?php
                                            $sql2="select count(*) from `activity-participant` where userid=$nowuserid";
                                            $result2 = mysqli_query($link, $sql2);
                                            @$row2=mysqli_fetch_row($result2);
                                            if(!$row2)
                                            $row2[0]="0";
                                            echo $row2[0];
                                            ?></div><!--此处为我参与活动的数量-->
                                        <div class="title"> 我参与的活动</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="b-activity-approve.php" style="text-decoration:none; color:#fff;">
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="panel blue">
                                    <div class="symbol">
                                        <i class="fa fa-edit"></i>
                                    </div>
                                    <div class="state-value">
                                        <div class="value">
                                            <?php
                                            $sql2="select count(*) from `activity` where state=0";
                                            $result2 = mysqli_query($link, $sql2);
                                            @$row2=mysqli_fetch_row($result2);
                                            if(!$row2){
                                                $row2[0]="0";
                                            }
                                            echo $row2[0];
                                            ?></div><!--此处为待审核活动的数量-->
                                        <div class="title"> 待审核的活动</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--statistics end-->
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

<!-- 以下是js -->
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../js/jquery-migrate-1.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/modernizr.min.js"></script>
<script src="../js/jquery.nicescroll.js"></script>

<!--easy pie chart-->
<script src="../js/easypiechart/jquery.easypiechart.js"></script>
<script src="../js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="../js/sparkline/jquery.sparkline.js"></script>
<script src="../js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="../js/iCheck/jquery.icheck.js"></script>
<script src="../js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="../js/flot-chart/jquery.flot.js"></script>
<script src="../js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="../js/flot-chart/jquery.flot.resize.js"></script>


<!--Morris Chart-->
<script src="../js/morris-chart/morris.js"></script>
<script src="../js/morris-chart/raphael-min.js"></script>

<!--Calendar-->
<script src="../js/calendar/clndr.js"></script>
<script src="../js/calendar/evnt.calendar.init.js"></script>
<script src="../js/calendar/moment-2.2.1.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="../js/scripts.js"></script>

<!--Dashboard Charts-->
<script src="../js/dashboard-chart-init.js"></script>


</body>
</html>
