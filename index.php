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
                                <div class="col-md-6">
                                    <h2 class="title">Form - Steps</h2>
                                    <p class="sub-title">One stop solution for perfect admin dashboard!</p>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 right-side">
                                    <a class="btn bg-black toggle-code-handle" role="button">Toggle Code!</a>
                                </div>
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Form - Steps</li>
            						</ul>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 text-right">
                                    <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                                    <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                                </div>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="alert alert-info" role="alert">
                                            <strong>jQuery Steps!</strong> A powerful jQuery wizard plugin that supports accessibility and HTML5. For official documentation, <a href="http://www.jquery-steps.com" target="_blank" class=" ml-5"><i class="fa fa-hand-o-right"></i> click here <i class="fa fa-hand-o-left"></i></a>.
                                        </div>
                                        <!-- /.alert alert-info -->
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Basic Example</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <div id="example-basic">
                                                	<h3>Keyboard</h3>
                                                	<section>
                                                		<p>Try the keyboard navigation by clicking arrow left or right!</p>
                                                	</section>
                                                	<h3>Effects</h3>
                                                	<section>
                                                		<p>Wonderful transition effects.</p>
                                                	</section>
                                                	<h3>Pager</h3>
                                                	<section>
                                                		<p>The next and previous buttons help you to navigate through your content.</p>
                                                	</section>
                                                </div>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;div id="example-basic"&gt;
    &lt;h3&gt;Keyboard&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Try the keyboard navigation by clicking arrow left or right!&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Effects&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Wonderful transition effects.&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Pager&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;The next and previous buttons help you to navigate through your content.&lt;/p&gt;
    &lt;/section&gt;
&lt;/div&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {
        $("#example-basic").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true
        });
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Form Validations</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form id="example-form" action="#">
                                                    <div>
                                                        <h3>Account</h3>
                                                        <section>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-md-offset-3">
                                                                    <label for="userName">User name <sup class="danger-color">*</sup></label>
                                                                    <input id="userName" name="userName" type="text" class="form-control required" placeholder="User name...">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-md-offset-3">
                                                                    <label for="password">Password <sup class="danger-color">*</sup></label>
                                                                    <input id="password" name="password" type="password" class="form-control required" placeholder="Password...">
                                                                </div>
                                                            </div>

                                                        </section>
                                                        <h3>Profile</h3>
                                                        <section>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-md-offset-3">
                                                                    <label for="name">First name <sup class="danger-color">*</sup></label>
                                                                    <input id="name" name="name" type="text" class="form-control required" placeholder="First name...">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-md-offset-3">
                                                                    <label for="surname">Last name <sup class="danger-color">*</sup></label>
                                                                    <input id="surname" name="surname" type="text" class="form-control required" placeholder="Last name...">
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <h3>Hints</h3>
                                                        <section>
                                                            <ul>
                                                                <li>Foo</li>
                                                                <li>Bar</li>
                                                                <li>Foobar</li>
                                                            </ul>
                                                        </section>
                                                        <h3>Finish</h3>
                                                        <section>
                                                            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                                        </section>
                                                    </div>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form id="example-form" action="#"&gt;
    &lt;div&gt;
        &lt;h3&gt;Account&lt;/h3&gt;
        &lt;section&gt;
            &lt;div class="row"&gt;
                &lt;div class="form-group col-md-6 col-md-offset-3"&gt;
                    &lt;label for="userName"&gt;User name &lt;sup class="danger-color"&gt;*&lt;/sup&gt;&lt;/label&gt;
                    &lt;input id="userName" name="userName" type="text" class="form-control required" placeholder="User name..."&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="row"&gt;
                &lt;div class="form-group col-md-6 col-md-offset-3"&gt;
                    &lt;label for="password"&gt;Password &lt;sup class="danger-color"&gt;*&lt;/sup&gt;&lt;/label&gt;
                    &lt;input id="password" name="password" type="password" class="form-control required" placeholder="Password..."&gt;
                &lt;/div&gt;
            &lt;/div&gt;

        &lt;/section&gt;
        &lt;h3&gt;Profile&lt;/h3&gt;
        &lt;section&gt;
            &lt;div class="row"&gt;
                &lt;div class="form-group col-md-6 col-md-offset-3"&gt;
                    &lt;label for="name"&gt;First name &lt;sup class="danger-color"&gt;*&lt;/sup&gt;&lt;/label&gt;
                    &lt;input id="name" name="name" type="text" class="form-control required" placeholder="First name..."&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="row"&gt;
                &lt;div class="form-group col-md-6 col-md-offset-3"&gt;
                    &lt;label for="surname"&gt;Last name &lt;sup class="danger-color"&gt;*&lt;/sup&gt;&lt;/label&gt;
                    &lt;input id="surname" name="surname" type="text" class="form-control required" placeholder="Last name..."&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/section&gt;
        &lt;h3&gt;Hints&lt;/h3&gt;
        &lt;section&gt;
            &lt;ul&gt;
                &lt;li&gt;Foo&lt;/li&gt;
                &lt;li&gt;Bar&lt;/li&gt;
                &lt;li&gt;Foobar&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/section&gt;
        &lt;h3&gt;Finish&lt;/h3&gt;
        &lt;section&gt;
            &lt;input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"&gt; &lt;label for="acceptTerms"&gt;I agree with the Terms and Conditions.&lt;/label&gt;
        &lt;/section&gt;
    &lt;/div&gt;
&lt;/form&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {

        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex)
            {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                alert("Submitted!");
            }
        });
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Dynamic Manipulation</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form id="example-manipulation" action="#">
                                                    <div>
                                                        <h3>Account</h3>
                                                        <section>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-md-offset-3">
                                                                    <label for="userName2">User name <sup class="danger-color">*</sup></label>
                                                                    <input id="userName2" name="userName2" type="text" class="form-control required" placeholder="User name...">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-md-offset-3">
                                                                    <label for="password2">Password <sup class="danger-color">*</sup></label>
                                                                    <input id="password2" name="password" type="password" class="form-control required" placeholder="Password...">
                                                                </div>
                                                            </div>

                                                        </section>
                                                        <h3>Profile</h3>
                                                        <section>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-md-offset-3">
                                                                    <label for="name2">First name <sup class="danger-color">*</sup></label>
                                                                    <input id="name2" name="name" type="text" class="form-control required" placeholder="First name...">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-md-offset-3">
                                                                    <label for="surname2">Last name <sup class="danger-color">*</sup></label>
                                                                    <input id="surname2" name="surname" type="text" class="form-control required" placeholder="Last name...">
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <h3>Hints</h3>
                                                        <section>
                                                            <ul>
                                                                <li>Foo</li>
                                                                <li>Bar</li>
                                                                <li>Foobar</li>
                                                            </ul>
                                                        </section>
                                                        <h3>Finish</h3>
                                                        <section>
                                                            <input id="acceptTerms2" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                                        </section>
                                                    </div>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form id="example-manipulation" action="#"&gt;
    &lt;div&gt;
        &lt;h3&gt;Account&lt;/h3&gt;
        &lt;section&gt;
            &lt;div class="row"&gt;
                &lt;div class="form-group col-md-6 col-md-offset-3"&gt;
                    &lt;label for="userName"&gt;User name &lt;sup class="danger-color"&gt;*&lt;/sup&gt;&lt;/label&gt;
                    &lt;input id="userName" name="userName" type="text" class="form-control required" placeholder="User name..."&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="row"&gt;
                &lt;div class="form-group col-md-6 col-md-offset-3"&gt;
                    &lt;label for="password"&gt;Password &lt;sup class="danger-color"&gt;*&lt;/sup&gt;&lt;/label&gt;
                    &lt;input id="password" name="password" type="password" class="form-control required" placeholder="Password..."&gt;
                &lt;/div&gt;
            &lt;/div&gt;

        &lt;/section&gt;
        &lt;h3&gt;Profile&lt;/h3&gt;
        &lt;section&gt;
            &lt;div class="row"&gt;
                &lt;div class="form-group col-md-6 col-md-offset-3"&gt;
                    &lt;label for="name"&gt;First name &lt;sup class="danger-color"&gt;*&lt;/sup&gt;&lt;/label&gt;
                    &lt;input id="name" name="name" type="text" class="form-control required" placeholder="First name..."&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="row"&gt;
                &lt;div class="form-group col-md-6 col-md-offset-3"&gt;
                    &lt;label for="surname"&gt;Last name &lt;sup class="danger-color"&gt;*&lt;/sup&gt;&lt;/label&gt;
                    &lt;input id="surname" name="surname" type="text" class="form-control required" placeholder="Last name..."&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/section&gt;
        &lt;h3&gt;Hints&lt;/h3&gt;
        &lt;section&gt;
            &lt;ul&gt;
                &lt;li&gt;Foo&lt;/li&gt;
                &lt;li&gt;Bar&lt;/li&gt;
                &lt;li&gt;Foobar&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/section&gt;
        &lt;h3&gt;Finish&lt;/h3&gt;
        &lt;section&gt;
            &lt;input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"&gt; &lt;label for="acceptTerms"&gt;I agree with the Terms and Conditions.&lt;/label&gt;
        &lt;/section&gt;
    &lt;/div&gt;
&lt;/form&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {
        var form2 = $("#example-manipulation");
        form2.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            enableAllSteps: true,
            enablePagination: false,
            onFinished: function (event, currentIndex)
            {
                alert("Submitted!");
            }
        });
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Tabs Example</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <div id="example-tabs">
                                                    <h3>Keyboard</h3>
                                                    <section>
                                                        <p>What is needed to transform it to a tabs component? Not much. Just override some properties and done.</p>
                                                        <pre class="prettyprint linenums">
$("#wizard").steps({
    // Disables the finish button (required if pagination is enabled)
    enableFinishButton: false,
    // Disables the next and previous buttons (optional)
    enablePagination: false,
    // Enables all steps from the begining
    enableAllSteps: true,
    // Removes the number from the title
    titleTemplate: "#title#"
});
                                                </pre>
                                                    </section>
                                                    <h3>Other demos</h3>
                                                    <section>
                                                        <p>Scroll down or up to see the other demos.</p>
                                                    </section>
                                                    <h3>Documentation</h3>
                                                    <section>
                                                        <p>For more information <a href="https://github.com/rstaib/jquery-steps/wiki">check out the documentation</a>!</p>
                                                    </section>
                                                    <h3>Purchase</h3>
                                                    <section>
                                                        <p>You can purchase 'Options - Admin Template' from Themeforest!</p>
                                                    </section>
                                                </div>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;div id="example-tabs"&gt;
    &lt;h3&gt;Keyboard&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;What is needed to transform it to a tabs component? Not much. Just override some properties and done.&lt;/p&gt;
        &lt;pre class="prettyprint linenums"&gt;
$("#wizard").steps({
// Disables the finish button (required if pagination is enabled)
enableFinishButton: false,
// Disables the next and previous buttons (optional)
enablePagination: false,
// Enables all steps from the begining
enableAllSteps: true,
// Removes the number from the title
titleTemplate: "#title#"
});
&lt;/pre&gt;
    &lt;/section&gt;
    &lt;h3&gt;Other demos&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;Scroll down or up to see the other demos.&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Documentation&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;For more information &lt;a href="https://github.com/rstaib/jquery-steps/wiki"&gt;check out the documentation&lt;/a&gt;!&lt;/p&gt;
    &lt;/section&gt;
    &lt;h3&gt;Purchase&lt;/h3&gt;
    &lt;section&gt;
        &lt;p&gt;You can purchase 'Options - Admin Template' from Themeforest!&lt;/p&gt;
    &lt;/section&gt;
&lt;/div&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {

        $("#example-tabs").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            enableFinishButton: false,
            enablePagination: false,
            enableAllSteps: true,
            titleTemplate: "#title#",
            cssClass: "tabcontrol"
        });
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
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

                    </div>
                    <!-- /.main-page -->

                    

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
        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/jquery-validate/jquery.validate.min.js"></script>
        <script src="js/jquery-steps/jquery.steps.min.js"></script>

    <script>
            $(function($) {
                $("#example-basic").steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    autoFocus: true
                });

                var form = $("#example-form");
                form.validate({
                    errorPlacement: function errorPlacement(error, element) { element.before(error); },
                    rules: {
                        confirm: {
                            equalTo: "#password"
                        }
                    }
                });
                form.children("div").steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    onStepChanging: function (event, currentIndex, newIndex)
                    {
                        form.validate().settings.ignore = ":disabled,:hidden";
                        return form.valid();
                    },
                    onFinishing: function (event, currentIndex)
                    {
                        form.validate().settings.ignore = ":disabled";
                        return form.valid();
                    },
                    onFinished: function (event, currentIndex)
                    {
                        alert("Submitted!");
                    }
                });

                var form2 = $("#example-manipulation");
                form2.children("div").steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "fade",
                    enableAllSteps: true,
                    enablePagination: false,
                    onFinished: function (event, currentIndex)
                    {
                        alert("Submitted!");
                    }
                });

                $("#example-tabs").steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    enableFinishButton: false,
                    enablePagination: false,
                    enableAllSteps: true,
                    titleTemplate: "#title#",
                    cssClass: "tabcontrol"
                });

                $("#example-vertical").steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    stepsOrientation: "vertical"
                });
            });
        </script>


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
                    "timeOut": "30000",
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


