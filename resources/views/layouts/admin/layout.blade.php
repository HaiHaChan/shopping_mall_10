<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dashboard">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    {{ Html::style('css/admin/bootstrap.css') }}
    {{ Html::style('css/admin/style.css') }}
    {{ Html::style('assets/Hoang_library/font-awesome/css/font-awesome.css') }}

</head>
<body>
    <section id="container" >
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="{{ trans('settings.layout.admin.original_title') }}"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo"><b>{{ trans('settings.title.adminpage') }}</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-theme">4</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">{{ trans('settings.layout.admin.notification_task') }}</p>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-theme">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">{{ trans('settings.layout.admin.messages') }}</p>
                        </li>
                        <li>
                            <a href="#">{{ trans('settings.layout.admin.mess_status') }}</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="#">{{ trans('settings.title.logout') }}</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <p class="text-center"><a href="#"><img src="{{ asset('images/admin/ui-sam.jpg') }}" class="img-circle" width="60"></a></p>
                <h5 class="text-center">{{ trans('settings.layout.admin.webcome') }}</h5>
                <li class="sub-menu">
                    <a href="#" >
                        <i class="fa fa-desktop"></i>
                        <span>{{ trans('settings.layout.admin.categories') }}</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">{{ trans('settings.layout.admin.btn_view') }}</a></li>
                        <li><a href="#">{{ trans('settings.layout.admin.btn_add') }}</a></li>
                        <li><a href="#">{{ trans('settings.layout.admin.btn_edit') }}</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#" >
                        <i class="fa fa-cogs"></i>
                        <span>{{ trans('settings.layout.admin.suppliers') }}</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">{{ trans('settings.layout.admin.btn_view') }}</a></li>
                        <li><a href="#">{{ trans('settings.layout.admin.btn_add') }}</a></li>
                        <li><a href="#">{{ trans('settings.layout.admin.btn_edit') }}</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#" >
                        <i class="fa fa-book">{{ trans('settings.layout.admin.products') }}</i>
                        <span></span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">{{ trans('settings.layout.admin.btn_view') }}</a></li>
                        <li><a href="#">{{ trans('settings.layout.admin.btn_add') }}</a></li>
                        <li><a href="#">{{ trans('settings.layout.admin.btn_edit') }}</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#;" >
                        <i class="fa fa-tasks"></i>
                        <span>{{ trans('settings.layout.admin.revenue') }}</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="#" >
                        <i class="fa fa-th"></i>
                        <span>{{ trans('settings.layout.admin.discount') }}</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">{{ trans('settings.layout.admin.btn_view') }}</a></li>
                        <li><a href="#">{{ trans('settings.layout.admin.btn_add') }}</a></li>
                        <li><a href="#">{{ trans('settings.layout.admin.btn_edit') }}</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12 main-chart">
                    @yield('content')
                </div><!-- /col-lg-9 END SECTION MIDDLE -->
            </div>
            <!--/row -->
        </section>
    </section>
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
          {{ trans('settings.layout.admin.footer') }}
          <a href="#" class="go-top">
              <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
  <!--footer end-->
</section>
    
    {{ Html::script('js/admin/common-scripts.js') }}
    {{ Html::script('js/app.js') }}

</body>
</html>
