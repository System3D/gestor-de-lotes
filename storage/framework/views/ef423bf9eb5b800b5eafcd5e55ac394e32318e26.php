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

    <div class="wrapper row-offcanvas row-offcanvas-left">

        <!-- <aside class="right-side"> -->
        <aside class="">

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