<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test Nana kodegiri</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords"
        content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('img') }}/kodegiri.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/style.css">
</head>

<style>
    .invalid-feedback {
        display: block;
        color: #f00;
        font-size: 12px;
        float: left;
    }
</style>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login p-fixed d-flex text-center bg-white">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <div class="auth-box">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <img src="{{ asset('img') }}/kodegiri.png" alt="logo.png">
                                    <h3 class="text-left txt-primary">Log In</h3>
                                </div>
                            </div>
                            <hr />
                            <form method="POST" action="{{ route('login') }}" id="loginForm">
                                @csrf
                                <div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="input-group">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="example@gmail.com"
                                            autocomplete="email" autofocus>
                                    </div>
                                </div>

                                <div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="input-group" id="show_hide_password">
                                        <input id="password" type="password" title="Please enter your password"
                                            placeholder="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="current-password">
                                        <button type="button" class="btn btn-outline-secondary" data-toggle="tooltip"
                                            data-placement="bottom">
                                            <i class="ti ti-eye" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Masuk
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <hr />
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Belum punya akun?
                                        <a href="{{ route('register')}}" class="text-primary text-underline">DAFTAR</a>
                                    </p>
                                </div>
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Jangan Lupa Bahagia :) by: Nana Sukarna</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('template') }}/assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('template') }}/assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('template') }}/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="{{ asset('template') }}/assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('template') }}/assets/js/jquery-slimscroll/jquery.slimscroll.js">
    </script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('template') }}/assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="{{ asset('template') }}/assets/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="{{ asset('template') }}/assets/js/common-pages.js"></script>

    {{-- show hide Password --}}
    <script>
        $(document).ready(function () {
        $("#show_hide_password button").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("ti ti-eye");
                $('#show_hide_password i').removeClass("bi bi-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("ti ti-eye");
                $('#show_hide_password i').addClass("ti ti-eye");
            }
        });
    });
    </script>
</body>

</html>