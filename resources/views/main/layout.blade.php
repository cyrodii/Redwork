<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>RedWork - @yield('title')</title>

    <!-- ====Favicons==== -->
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link rel="icon" href="/img/favicon.png" type="image/x-icon">
    
    
    <!-- ====Google Font Stylesheet==== -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="/css/all.min.css">

    <style media="screen">
        .swal2-popup {
            font-size: 1.6rem !important;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader loading">
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="login--wrapper">
        <!-- Header Area Start -->
        <header id="header">
            <!-- Header Navbar Start -->
            <nav class="header--navbar dark navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Navbar Toggle Button Start -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Navbar Toggle Button End -->
                        <!-- Logo Start -->
                        <a href="/" class="header--logo navbar-brand">
                            <span><i class="fa fm fa-rocket"></i>Red</span>Work
                        </a>
                        <!-- Logo End -->
                    </div>
                    <!-- Header Nav Start -->
                    <div id="headerNav" class="navbar-collapse collapse">
                        <div class="header--login-btn">
                            <a href="login" class="btn--primary btn--ripple">Login</a>
                        </div>
                        
                        <ul class="nav navbar-nav navbar-right" id="top-menu">
                            <li class="active"><a href="/">Home</a></li>

                        </ul>
                    </div>
                    <!-- Header Nav End -->
                </div>
            </nav>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Area End -->      
    
        @yield('content')
        
      <!-- Back To Top Button Start -->
        {{-- <div id="backToTop">
            <a href="@top" class="btn--primary btn--ripple"><i class="fa fa-angle-up"></i></a>
        </div> --}}
        <!-- Back To Top Button Start -->
    </div>
    <!-- Wrapper End -->

    <script src="/js/all.min.js"></script>
    <script src="/js/app.js"></script>

</body>
</html>
