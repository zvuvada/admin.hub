<?php 
//include 'connect.php';
include 'header.php'; 
?>

    <body class="top-navbar-fixed">
        <div class="main-wrapper">
            <?php include 'top-nav-bar.php'; ?>
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                    <?php include 'left-side-bar.php';?>
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Dashboard</h2>
                                    <p class="sub-title">One stop solution for perfect admin dashboard!</p>
                                </div>
                                <!-- /.col-sm-6 -->
                                <div class="col-sm-6 right-side">
                                    <a class="btn bg-black toggle-code-handle tour-four" role="button">Toggle Code!</a>
                                </div>
                                <!-- /.col-sm-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-sm-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Dashboard</li>
            						</ul>
                                </div>
                                <!-- /.col-sm-6 -->
                                <div class="col-sm-6 text-right hidden-xs">
                                    <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                                    <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="#">
                                            <span class="number counter">1,411</span>
                                            <span class="name">Comments</span>
                                            <span class="bg-icon"><i class="fa fa-comments"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="#">
                                            <span class="number counter">322</span>
                                            <span class="name">Total Tickets</span>
                                            <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                   </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="#">
                                            <span class="number counter">5,551</span>
                                            <span class="name">Bank Credits</span>
                                            <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="#">
                                            <span class="number counter">16,710</span>
                                            <span class="name">Thumbs Up</span>
                                            <span class="bg-icon"><i class="fa fa-thumbs-o-up"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                        <section class="section pt-10">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel border-primary no-border border-3-top" data-panel-control>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Production Change <small>over years</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div id="production-chart" class="op-chart"></div>
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="panel border-primary no-border border-3-top" data-panel-control>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Traffic Stats <small>over years</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div id="traffic-chart" class="op-chart"></div>
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                        <section class="section pt-n">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="panel border-primary no-border border-3-top">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>User Table Details</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs border-bottom border-primary" role="tablist">
                                                    <li role="presentation" class="active"><a class="" href="#home7" aria-controls="home7" role="tab" data-toggle="tab">Approved</a></li>
                                                    <li role="presentation"><a class="" href="#profile7" aria-controls="profile7" role="tab" data-toggle="tab">Pending</a></li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content bg-white p-15">
                                                    <div role="tabpanel" class="tab-pane active" id="home7">
                                                        <table class="table table-clean">
                                                        	<tbody>
                                                        		<tr>
                                                        			<td class="line-height-60"><img src="images/letter/a.png" alt="" class="border-radius-50 img-size-50"></td>
                                                        			<td class="line-height-30"><small><b>Alepy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><span class="color-success">Approved</span></small></td>
                                                                    <td class="w-10">10.10pm</td>
                                                        		</tr>
                                                        		<tr>
                                                        			<td><img src="images/letter/profile-image-1.jpg" alt="" class="border-radius-50 img-size-50"></td>
                                                        			<td class="line-height-30"><small><b>Alepy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br><span class="color-success">Approved</span></small></td>
                                                                    <td>12.15am</td>
                                                        		</tr>
                                                        	</tbody>
                                                        </table>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="profile7">
                                                        <table class="table table-clean">
                                                        	<tbody>
                                                                <tr>
                                                                    <td><img src="images/letter/profile-image-1.jpg" alt="" class="border-radius-50 img-size-50"></td>
                                                                    <td class="line-height-30"><small><b>Alepy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum<br><span class="color-warning">Pending</span></small></td>
                                                                    <td>09:58am</td>
                                                                </tr>
                                                        		<tr>
                                                        			<td class="line-height-60"><img src="images/letter/c.png" alt="" class="border-radius-50 img-size-50"></td>
                                                        			<td class="line-height-30"><small><b>Celpy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><span class="color-warning">Pending</span></small></td>
                                                                    <td class="w-10">8:16pm</td>
                                                        		</tr>
                                                        	</tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.col-md-8 -->

                                    <div class="col-md-4">
                                        <div class="panel border-primary no-border border-3-top" data-panel-control>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Tasks <small>with priority indicator</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <p>Following is the list of all the pending tasks. Click on task to mark it done. You can toggle the status by clicking on an item.</p>

                                                <div class="row">
                                                    <div class="tasks-list col-md-12">
                                                        <div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-blue">
                                                            <label>This is medium priority task. It is indicated in primary color.</label>
                                                        </div>
                                                        <!-- /.task -->

                                                        <div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-red">
                                                            <label>This is top priority task. It is indicated in danger color.</label>
                                                        </div>
                                                        <!-- /.task -->

                                                        <div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-green">
                                                            <label>This is low priority task. It is indicated in success color. </label>
                                                        </div>
                                                        <!-- /.task -->

                                                        <div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-blue" checked="">
                                                            <label>This is medium priority task. It is indicated in primary color.</label>
                                                        </div>
                                                        <!-- /.task -->

                                                    </div>
                                                    <!-- /.tasks-list -->
                                                </div>

                                               
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->
                    </div>
                    <!-- /.main-page -->

                    <div class="right-sidebar bg-white fixed-sidebar">
                        <div class="sidebar-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Useful Sidebar <i class="fa fa-times close-icon"></i></h4>
                                        <p>Code for help is added within the main page. Check for code below the example.</p>
                                        <p>You can use this sidebar to help your end-users. You can enter any HTML in this sidebar.</p>
                                        <p>This sidebar can be a 'fixed to top' or you can unpin it to scroll with main page.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <!-- /.col-md-12 -->

                                    <div class="text-center mt-20">
                                        <button type="button" class="btn btn-success btn-labeled">Purchase Now<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                    </div>
                                    <!-- /.text-center -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- /.right-sidebar -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>
        <script src="js/bootstrap-tour/bootstrap-tour.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "3500",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["success"]("One stop solution to your website admin panel!", "Welcome to Options!");

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>


