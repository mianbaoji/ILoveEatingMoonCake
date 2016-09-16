<!DOCTYPE html>
<?php
session_start();
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

    <!--data table-->
    <link href="../js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="../js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="../js/data-tables/DT_bootstrap.css" />

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
                <li class="active"><a href="person-account.php"><i class="fa fa-book"></i> <span>个人账户</span></a></li>
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
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            个人账户
                        </header>
                        <div class="panel-body">
                            <div class="adv-table">
                                <table class="table table-bordered" id="dynamic-table">
                                    <thead>
                                    <tr>
                                        <th>活动名称</th>
                                        <th>负责人</th>
                                        <th>应收</th>
                                        <th>状态</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="activity-info.php">聚餐</a></td>
                                        <td>月饼小姐</td>
                                        <td>应收</td>
                                        <td><span class="label label-danger label-mini">未收</span></td><!--此处有两种状态:label-danger表未收;label-success表已收;下同-->
                                    </tr>
                                    <tr>
                                        <td><a href="activity-info.php">聚餐</a></td>
                                        <td>月饼小姐</td>
                                        <td>应收</td>
                                        <td><span class="label label-success label-mini">已收</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="activity-info.php">聚餐</a></td>
                                        <td>月饼小姐</td>
                                        <td>应收</td>
                                        <td><span class="label label-danger label-mini">未收</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="activity-info.php">聚餐</a></td>
                                        <td>月饼小姐</td>
                                        <td>应收</td>
                                        <td><span class="label label-danger label-mini">未收</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="activity-info.php">聚餐</a></td>
                                        <td>月饼小姐</td>
                                        <td>应收</td>
                                        <td><span class="label label-danger label-mini">未收</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="activity-info.php">聚餐</a></td>
                                        <td>月饼小姐</td>
                                        <td>应收</td>
                                        <td><span class="label label-danger label-mini">未收</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
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

<!--data table-->
<script type="text/javascript" src="../js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="../js/data-tables/DT_bootstrap.js"></script>

<!--common scripts for all pages-->
<script src="../js/scripts.js"></script>

<!--script for editable table-->
<script src="../js/info-editable.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="../js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="../js/dynamic_table_init.js"></script>

</body>
</html>