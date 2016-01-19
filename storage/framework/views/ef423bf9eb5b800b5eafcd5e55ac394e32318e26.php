<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Steel4Web | Garcia</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By Luciano Tonet">
    <meta name="keywords" content="Bootstrap 3, Laravel 5.1, Responsive">
    <!-- bootstrap 3.3.6 -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- font Awesome -->
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo e(asset('css/ionicons.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Morris chart -->
    <link href="<?php echo e(asset('css/morris/morris.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo e(asset('css/jvectormap/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo e(asset('css/datepicker/datepicker3.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="<?php echo e(asset('css/fullcalendar/fullcalendar.css')); ?>" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="<?php echo e(asset('css/daterangepicker/daterangepicker-bs3.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo e(asset('css/iCheck/all.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo e(asset('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!-- Bootstrap Select -->
    <link href="<?php echo e(asset('css/bootstrap-select/bootstrap-select.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- DATATABLES -->
    <?php /* <link rel="stylesheet" href="<?php echo e(asset('css/datatables/jquery.dataTables.min.css')); ?>"> */ ?>
    <!-- DATATABLES BOOTSTRAP CSS-->
    <link rel="stylesheet" href="<?php echo e(asset('css/datatables/dataTables.bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/datatables/select.dataTables.min.css')); ?>">

    <!-- Theme style -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Custom styles -->
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

</head>
<body class="skin-black">

    <header class="header">
        <a class="logo" href="http://steel4web.com.br/new_s4w/saas/admin">
            <img src="http://steel4web.com.br/new_s4w/assets/img/logo-Steel4web.png" alt="Stell4Web">
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="http://steel4web.com.br/new_s4w/saas/profile/ver"><i class="fa fa-user fa-fw"></i> Perfil do usuário</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="http://steel4web.com.br/new_s4w/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="wrapper row-offcanvas row-offcanvas-left">

        <aside class="left-side sidebar-offcanvas">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="nav in sidebar-menu" id="side-menu">
                    <li>
                        <a href="http://steel4web.com.br/new_s4w/saas/admin" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="http://steel4web.com.br/new_s4w/saas/clientes/listar"><i class="fa fa-users fa-fw"></i> Clientes</a>
                    </li>
                    <li>
                        <a href="http://steel4web.com.br/new_s4w/saas/obras/listar"><i class="fa fa-building-o fa-fw"></i> Obras</a>
                    </li>
                    <li>
                        <a href="http://steel4web.com.br/new_s4w/saas/contatos/listar"><i class="fa fa-phone fa-fw"></i> Contatos</a>
                    </li>
                    <li>
                        <a href="http://steel4web.com.br/new_s4w/saas/usuarios/listar"><i class="fa fa-user fa-fw"></i> Usuários</a>
                    </li>
                    <li>
                        <a href="http://steel4web.com.br/dev/gestor-de-lotes/public/lotes"><i class="fa fa-home fa-fw"></i> Gestor de Lotes</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-print fa-fw"></i> Relatórios</a>
                    </li>
                                    <li>
                        <a href="http://steel4web.com.br/new_s4w/saas/logs/listar"><i class="fa fa-eye fa-fw"></i> Logs</a>
                    </li>
                </ul>

            </section>
            <!-- /.sidebar -->
        </aside>

        <aside class="right-side">

            <!-- Main content -->
            <section class="content">

                <!-- System Notifications -->
                <?php if(Session::has('sys_notifications')): ?>
                <div class="alert-group">
                    <?php foreach( Session::get('sys_notifications') as $sys_notification ): ?>
                    <div class="alert alert-<?php echo isset($sys_notification['type']) ? $sys_notification['type'] : 'info'; ?>">
                        <?php if( !@$sys_notification['important'] ): ?>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php endif; ?>
                        <?php echo $sys_notification['message']; ?>

                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <!-- /System Notifications -->

                <!-- MAIN CONTENT -->
                <?php echo $__env->yieldContent('content'); ?>
                <!-- /MAIN CONTENT -->

                <?php echo $__env->make('templates.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </section><!-- /.content -->

            <div class="footer-main">
                <small>Steel4Web | Copyright &copy Garcia, <?php echo date('Y') ?></small>
            </div>

        </aside><!-- /.right-side -->

    </div><!-- ./wrapper -->


    <!-- MODAL -->
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">

            </div>
        </div>
    </div>

    <?php echo $__env->make('templates.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>