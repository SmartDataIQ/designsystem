<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('vendor/smartdataiq/designsystem/assets/img/favicon.ico') }}"/>
    <link href="{{ asset('vendor/designsystem/assets/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/designsystem/assets/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('vendor/designsystem/assets/js/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('vendor/designsystem/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/designsystem/assets/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/designsystem/assets/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('vendor/designsystem/assets/plugins/src/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/designsystem/assets/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/designsystem/assets/core/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/designsystem/assets/core/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/designsystem/assets/core/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/designsystem/assets/core/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->    

    @yield('header')

</head>
<body class="layout-boxed enable-secondaryNav" layout="full-width">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
        <header class="header navbar navbar-expand-sm expand-header">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
            
            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index.html">
                        <div class="navbar-logo">
                            <img src="/vendor/designsystem/assets/core/img/logo2.svg" alt="logo">
                        </div>
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="/" class="nav-link"> {{DesignSystem::getAppName()}} </a>
                </li>
            </ul>

            @include('designsystem::layouts.top-searchbar')
            @include('designsystem::layouts.user-navbar')
            
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="./index.html">
                                <img src="/vendor/designsystem/assets/core/img/logo.svg" class="navbar-logo" alt="logo">
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="/" class="nav-link"> {{DesignSystem::getAppName()}} </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                        </div>
                    </div>
                </div>
                <div class="shadow-bottom"></div>
               @include('designsystem::layouts.navbar')
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!--  BEGIN BREADCRUMBS  -->
                    
                    <div class="secondary-nav">
                        <div class="breadcrumbs-container" data-page-heading="Analytics">
                            <header class="header navbar navbar-expand-sm">
                                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                </a>
                                <div class="d-flex breadcrumb-content">
                                    <div class="page-header">

                                        <div class="page-title"><h3>{!! DesignSystem::getPageTitle() !!}</h3></div>

                                        <nav class="breadcrumb-style-onee" aria-label="breadcrumb">
                                            {!! DesignSystem::getBreadcrumb() !!}
                                        </nav>

                                    </div>
                                </div>
                                {!! DesignSystem::getActionDropdown() !!}
                                
                            </header>
                        </div>
                    </div>
                    <!--  END BREADCRUMBS  -->                   
                    <div class="row layout-top-spacing">
                        <div class="col-xl-12">
                            @yield('content')                                      
                        </div>
                    </div>

                </div>

            </div>
            <!--  BEGIN FOOTER  -->
            @include('designsystem::layouts.footer')
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('vendor/designsystem/assets/plugins/src/global/vendors.min.js') }}"></script>
    <script src="{{ asset('vendor/designsystem/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/designsystem/assets/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendor/designsystem/assets/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('vendor/designsystem/assets/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ asset('vendor/designsystem/assets/js/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('vendor/designsystem/assets/plugins/src/table/datatable/datatables.js') }}"></script>    
    <!-- <script src="{{ asset('vendor/designsystem/assets/plugins/src/apex/apexcharts.min.js') }}"></script> -->
    <!-- <script src="{{ asset('vendor/designsystem/assets/core/js/dashboard/dash_1.js') }}"></script> -->
    <!-- END PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    @yield('scripts')
</body>
</html>