<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Admin Register</title>

    <link rel="stylesheet" href="{{asset('backend/assets/css/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/responsive.css')}}">
</head>

<body>
    <main class="gnrl-pg">
        <section>
            <div class="gap gray-layer opc85">
                <div class="fixed-bg2" style="background-image: url(backend/assets/images/parlx1.jpg);"></div>
                <div class="container">
                    <div class="rgstr-wrp text-center">
                        <div class="rgstr-innr">
                            <div class="rgstr-scl" style="background-image: url(backend/assets/images/upld-bg.jpg);">
                                <h5>Login With Social Site!</h5>
                                <div class="btns-list">
                                    <a href="#" title="" class="brd-rd5 btn scl-btn facebook"><i
                                            class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" title="" class="brd-rd5 btn scl-btn twitter"><i
                                            class="fa fa-twitter"></i> Twitter</a>
                                    <a href="#" title="" class="brd-rd5 btn scl-btn google"><i
                                            class="fa fa-google-plus"></i> Google Plus</a>
                                </div>
                            </div>
                            <div class="rgstr-frm">
                                <div class="wdgt-titl wdgt-titl-icn">
                                    <i class="icon ion-ios-person-outline"></i>
                                    <h4>Register to Admin</h4>
                                    <p>Fill your detail for new registration</p>
                                </div>
                                <form class="cont-frm" method="post" action="{{route('register.create')}}">
                                    @csrf
                                    <div class="row mrg10">
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <input id="name" type="text" name="name" placeholder="User Name">
                                            <i class="icon ion-android-person"></i>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <input id="email" type="email" name="email" placeholder="Email Id">
                                            <i class="icon ion-android-mail"></i>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <input id="password" type="password" name="password" placeholder="Password">
                                            <i class="icon ion-key"></i>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="Confirm Password">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <button type="submit">Signup Now</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="rgstr-alrdy">
                                    <label>Already have an account?</label>
                                    <a href="{{route('login.form')}}" title="">Login In Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <p>Copyright <a href="https://github.com/shaillydixit" title="">Shailly Dixit</a> &copy; 2022</p>

            </div>
        </footer><!-- Footer -->
    </main><!-- Main Wrapper -->

    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/custom-scripts.js')}}"></script>
</body>

</html>
