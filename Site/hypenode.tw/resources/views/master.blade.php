<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <!-- BEGIN GLOBAL PLUGINS STYLES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL PLUGINS STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS STYLES-->
    <!-- END PAGE LEVEL PLUGINS STYLES-->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="css/components.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="css/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN THEME PAGE LEVEL STYLES -->
    @yield('pageCss')
    <!-- END THEME PAGE LEVEL STYLES -->

<title>HypeNode</title>

</head>
<body class="page-container-bg-solid">
<div class ="page-wrapper">
    <!--START HEADER START-->
    @include('header')
    <!--END HEADER END-->

    <!--START BODY START-->
    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <div class="container">
                            <!-- BEGIN PAGE TITLE -->
                            <div class="row page-title">
                                <h1 class="col-xs-12">
                                    <small>子標題</small>
                                </h1>
                            </div>
                            <!-- END PAGE TITLE -->
                            <!-- BEGIN PAGE TOOLBAR -->
                            <div class="page-toolbar">
                                <!-- TOOL BAR -->
                            </div>
                            <!-- END PAGE TOOLBAR -->
                        </div>
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE CONTENT BODY -->
                    <div class="page-content-inner">
                        <div class="container">
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class="page-content">
                                <div class="mt-content-body">
                                    @yield('body')
                                </div>
                            </div>
                            <!-- END PAGE CONTENT INNER -->
                        </div>
                    </div>
                    <!-- END PAGE CONTENT BODY -->
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
        </div>
    </div>
    <!--END BODY START-->

    <!--START FOOTER START-->
    @yield('footer')
    <!--END FOOTER END-->
</div>


<!--START JSON DATA START-->
<script>

</script>
<!--END JSON DATA END-->

<!-- BEGIN GLOBAL PLUGINS PLUGINS -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="js/fontawesome-all.min.js" type="text/javascript"></script>
<!-- END GLOBAL PLUGINS PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="js/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield('pageJs')
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="js/layout.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>
