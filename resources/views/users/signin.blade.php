<!doctype html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    {{-- bootsrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('login') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('login') }}/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('login') }}/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('login') }}/css/style.css">

    <title>RMPksSPH1 | Sign-In</title>
</head>

<body>

    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('login') }}/images/bg-01.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </symbol>
                </svg>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-10">
                        @if (session()->has('success'))
                        <div class="alert alert-success d-flex align-items-center alert-dismissible fade show"
                            role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                <use xlink:href="#check-circle-fill" /></svg>
                            <div>
                                {{ session('success') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (session()->has('loginError'))
                        <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                            role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" /></svg>
                            <div>
                                {{ session('loginError') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <h3>
                            <img src="{{ asset('login') }}/images/logoPKS.ico" class="image img-circle elevation-5"
                                style="width: 50px" alt="User Image">
                            Sign-In
                        </h3>
                        <p class="mb-4">Selamat Datang di <strong>Rekam Medis Puskesmas Sumpiuh 1</strong>
                        </p>
                        <form method="post" action="/sign_in" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="your-email@gmail.com" name="email" id="email"
                                    value="{{ old('email') }}" required autofocus>
                                <div class="text-danger">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Your Password" name="password"
                                    id="password" required>
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <span class="ml-auto"><a href="/sign_up" class="signup-image-link">Create an
                                        account</a></span>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary" name="signin"
                                id="signin">
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="{{ asset('login') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('login') }}/js/popper.min.js"></script>
    <script src="{{ asset('login') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('login') }}/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
