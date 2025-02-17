<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
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
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                               <div class="logo text-center"><img src="{{asset('admin/assets/img/logo-donasi.png')}}" alt="Klorofil Logo"></div>
                               <p class="lead">Login</p>
                           </div>
                           <form class="form-auth-small" action="{{ url('/postlogin') }}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="signin-email" placeholder="Email" value="{{ old('email') }}">
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="signin-password" placeholder="Password" value="{{ old('password') }}">
                                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                        </form>
                        <br>
                        <!-- <hr> -->
                        <a href="{{ url('/') }}" class="btn btn-arrow-left-circle">Back</a>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                        <h1 class="heading">Aplikasi Pengelolalan Data Sumbangan</h1>
                        <p>by The Gempur UGS</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>
</html>
