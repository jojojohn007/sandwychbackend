<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandwych</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <section>
        <div class="container">
            <div class="row vh-100 align-items-center justify-content-center">
                <div class="col-lg-5 col-md-6 col-12 py-5">
                    <h1 class="logo img-wrp mx-auto mb-4">
                        <img src="images/logo.svg" alt="">
                    </h1>
                    <form method="POST"   action="{{route('do.login')}}">
                        @csrf
                        <div class="rounded border-common shadow-common px-lg-5 p-md-4 p-3">
                            <h4 class="title-text text-center fw-600">Welcome back</h4>
                            <div class="text-center">Please enter your details.</div>
                            <div class="row g-lg-3 g-2 d-flex align-items-center justify-content-center select-type mb-xl-4 mb-3 mt-1">
                                <div class="col-4">
                                    <input type="radio" id="radioInput1" name="searchFor" checked="checked">
                                    <label class="d-flex flex-column align-items-center text-center border-common shadow-common rounded p-2 cstm-rdo" for="radioInput1">
                                        <span class="checkmark mb-2"></span>
                                        <span class="fw-500 mb-1">Hospital Admin</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <input type="radio" id="radioInput2" name="searchFor">
                                    <label class="d-flex flex-column align-items-center text-center border-common shadow-common rounded p-2 cstm-rdo" for="radioInput2">
                                        <span class="checkmark mb-2"></span>
                                        <span class="fw-500 mb-1">Case Manager</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <input type="radio" id="radioInput3" name="searchFor">
                                    <label class="d-flex flex-column align-items-center text-center border-common shadow-common rounded p-2 cstm-rdo" for="radioInput3">
                                        <span class="checkmark mb-2"></span>
                                        <span class="fw-500 mb-1">Medical Professional</span>
                                    </label>
                                </div>
                            </div>
                            @if(session('error'))
                            <div class="alert alert-danger">
                              {{ session('error') }}
                            </div>
                            @endif
                            <div class="mb-3">
                                <label for="FormControlInputEmail" class="form-label grey-text">Email</label>
                                <input type="email" class="form-control border-common shadow-common" id="FormControlInputEmail"
                                    placeholder="Enter your email" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                           
                            <div class="mb-3">
                                <label for="FormControlInputPassword" class="form-label grey-text">Password</label>
                                <input type="password" class="form-control border-common shadow-common" id="FormControlInputPassword" placeholder="Enter your password" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                                <div class="d-flex justify-content-end mt-1">
                                    <button type="button" class="btn border-0 blue-text fs-14 fw-500 text-decoration-none p-0" data-bs-toggle="modal" data-bs-target="#ForgotPassword">Forgot Password?</button>
                                </div>
                            </div>
                            <div class="mb-lg-3">
                                <a href="{{route('dashboards')}}" class="btn btn-type2 w-100 justify-content-center" type="submit">Login</a>
                            </div>
                            <!-- <div class="mb-lg-3">
                                <button type="submit" class="btn border-common rounded blue-text shadow-common w-100 justify-content-center">
                                    <span class="img-wrp me-2"><img src="images/vpn-icon.svg" alt=""></span>
                                    Sign in with VPN
                                </button>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal - Forgot Password? - Start -->
    <div class="modal fade" id="ForgotPassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ForgotPasswordLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-end p-3">
                        <button type="button" class="btn-close d-md-block d-none shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                        <!-- <button type="button" class="btn-close d-md-block d-none shadow-none" onclick="window.history.back();"></button> -->
                    </div>
                    <form method="POST"   action="{{route('do.login')}}">
                        <div class="px-lg-5 p-md-4 p-3">
                            <h4 class="title-text text-center fw-600">Forgot Password?</h4>
                            <div class="text-center mb-4">If you don't know the username or your email address is no longer valid, please Contact Us for further assistance.</div>
                            <div class="mb-4">
                                <input type="email" class="form-control border-common shadow-common" id="FormControlInputEmail"
                                    placeholder="Enter your email">
                            </div>
                            <div class="mb-lg-3">
                                <a href="/OTP-verification" class="btn btn-type2 w-100 justify-content-center">Submit</a>
                            </div>
                            <div class="mb-lg-3 d-md-none d-block">
                                <button class="btn rounded border-common blue-text btn-type1 shadow-common nowrap-text mt-2 ms-auto me-0"
                        type="button" data-bs-dismiss="modal" aria-label="Close">Back to Login</button>
                                <!-- <button class="btn rounded border-common blue-text btn-type1 shadow-common nowrap-text mt-2 ms-auto me-0"
                        type="button" onclick="window.history.back();">Back to Login</button> -->
                            </div>
                            <!-- <div class="mb-lg-3">
                                <button type="submit" class="btn border-common rounded blue-text shadow-common w-100 justify-content-center">
                                    <span class="img-wrp me-2"><img src="images/vpn-icon.svg" alt=""></span>
                                    Sign in with VPN
                                </button>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal - Forgot Password? - End -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <!-- <script class="text/javascript">
        $(document).ready(function(){
            $(".modal").modal('show');
        }) 

    </script> -->
</body>

</html>