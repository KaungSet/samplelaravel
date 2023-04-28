<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-4.5/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <style>/* Change the white to any color */
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus, 
        input:-webkit-autofill:active{
            caret-color: white;
            -webkit-box-shadow: 0 0 0 30px #236734 inset !important;
        }
  
        /*Change text in autofill textbox*/
        input:-webkit-autofill{
            -webkit-text-fill-color: white !important;
        }
  
      </style>
</head>

<body>
    <main class="container-fluid vh-100">
        <div class="row">
            <div class="col-12 col-md-5 p-0">
                @if ($errors->any())
                    {!! implode(
                        '',
                        $errors->all('<div class="alert alert-danger" role="alert">
                                                                :message
                                                              </div>'),
                    ) !!}
                @endif
                <div class="login-primary-bg vh-100 d-flex justify-content-center align-items-center">
                    <form method="POST" action="{{ route('register') }}" autocomplete="off">
                        @csrf
                        <div class="">
                            <div class="" style="margin-bottom: 100px">
                                <p class="text-header">Welcome New User</p>
                                <p class="text-sub">
                                    Welcome New User! Please enter your details.
                                </p>
                                <p class="text-sub">
                                    Already have an account? <a href="{{ route('login') }}">Sign in here</a>
                                </p>
                            </div>
                            <div class="my-3">
                                <p class="text-sub shadow-text">User Name</p>
                                <div class="p-2 input-box">
                                    <input type="text" name="name" id="username" required autofocus style="height: 37px;"/>
                                </div>
                            </div>
                            <div class="my-3">
                                <p class="text-sub shadow-text">Company Name</p>
                                <div class="p-2 input-box">
                                    <input type="text" name="company_name" id="company_name" required style="height: 37px;" />
                                </div>
                            </div>
                            <div class="my-3">
                                <p class="text-sub shadow-text">Email</p>
                                <div class="p-2 input-box">
                                    <input type="email" name="email" id="email" required style="height: 37px;"/>
                                </div>
                            </div>
                            <div class="my-3">
                                <p class="text-sub shadow-text">Password</p>
                                <div class="p-2 input-box">
                                    <input type="password" name="password" id="password" required style="height: 37px;"/>
                                </div>
                            </div>
                            <div class="my-3">
                                <p class="text-sub shadow-text">Confirm Password</p>
                                <div class="p-2 input-box">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        required style="height: 37px;"/>
                                </div>

                                <div class="checkBox mt-3 d-flex justify-content-center">
                                    <div class="">
                                        <button class="text-sub" type="submit">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="d-flex align-items-center justify-content-center vh-100 ">
                    <div class="logoBox">
                        <img src="{{ asset('img/Logo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
