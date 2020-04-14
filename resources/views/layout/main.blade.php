<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('css/img/bpd.png')}}">
    <!-- MY CSS -->
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="#"><img src="{{asset('admin/assets/img/logo-donasi.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown" aria-expanded="false">
                                <i class="lnr lnr-alarm"></i>
                                @if(auth()->User()->unreadnotifications->count())
                                <span class="badge bg-danger">{{auth()->User()->unreadnotifications->count()}}</span>
                                @endif
                            </a>
                            <ul class="dropdown-menu notifications">
                            <li><a style="color: green" href="{{ route('markRead') }}">Mark all as read</a></li>
                            @foreach(auth()->User()->unreadNotifications as $notification)
                                <li style="background-color: lightgray"><a href="{{ url('/uploads') }}" class="notification-item"><span class="dot bg-primary"></span>{{$notification->data['keterangan']}}</a></li>  
                            @endforeach
                                
                            @foreach(auth()->User()->readNotifications as $notification)
                                <li><a href="{{ url('/uploads') }}" class="notification-item"><span class="dot bg-primary"></span>{{$notification->data['keterangan']}}</a></li>  
                            @endforeach
                                
                                
                                
                                <!-- <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
                                <li><a href="#" class="more">See all notifications</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="{{ url('/dashboard') }}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="{{ url('/uploads') }}" class="active"><i class="lnr lnr-book"></i> <span>Donasi Masuk</span></a></li>
                        <li><a href="{{ url('/donations') }}" class="active"><i class="lnr lnr-file-empty"></i> <span>Data Sumbangan</span></a></li>
                        <li><a href="{{ url('/logout') }}" class="active"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        @yield('content')
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; 2020 <a href="#" target="_blank">SAW</a>. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
</body>
</html>
