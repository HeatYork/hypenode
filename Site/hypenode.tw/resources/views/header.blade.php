<div class="page-wrapper-row">
    <div class="page-wrapper-top">
        <!-- BEGIN HEADER -->
        <div class="page-header">

            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">

                    <!-- BEGIN LOGO -->
                    <div class="page-logo" onclick="javascript:location.href='{{ \url( '' ) }}'">
                        <h2 class="font-green" >
                            HypeNode
                        </h2>
                    </div>
                    <!-- END LOGO -->

                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->

                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ui class="nav nav navbar-nav pull-right">
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-mobile">Nick</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="">
                                            <i class="icon-user"></i>資訊
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="icon-envelope-open"></i>通知
                                            <span class="badge badge-danger">3</span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="">
                                            <i class="icon-settings"></i>設定
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="icon-lock"></i>修改密碼
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only"></span>
                                <i class="icon-logout"></i>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ui>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->

                </div>
            </div>
            <!-- END HEADER TOP -->

            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">
                    <!-- BEGIN MEGA MENU -->
                    <div class="hor-menu">
                        <ul class="nav navbar-nav">

                            <li class="menu-dropdown classic-menu-dropdown">
                                <a href="{{ \url('dashboard') }}">
                                    <i class="fas fa-tachometer-alt"></i>
                                    儀表板
                                </a>
                            </li>

                            <li class="menu-dropdown classic-menu-dropdown">
                                <a href="{{ \url('dashboard') }}">
                                    <i class="fas fa-clipboard-list"></i>
                                    推播紀錄
                                </a>
                            </li>

                            <li class="menu-dropdown classic-menu-dropdown">
                                <a href='{{ \url('createNotification') }}'>
                                    <i class="fas fa-paper-plane"></i>
                                    建立推播活動
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->
    </div>
</div>