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

    <title>RMPksSPH1 | Sign-Up</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2 responsive" style="background-image: url('{{ asset('login') }}/images/bg-02.jpg'); width: 15;
        height: auto; "></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-10">
                        <h3>
                            <img src="{{ asset('login') }}/images/logoPKS.ico" class="image img-circle elevation-5"
                                style="width: 50px" alt="User Image">
                            Sign-Up
                        </h3>
                        <p class="mb-4">Selamat Datang di <strong>Rekam Medis Puskesmas Sumpiuh 1</strong></p>
                            <form method="post" action="/sign_up" class="row g-3 mb-5">
                                @csrf
                                <div class="form-group first col-12">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        placeholder="Input full name" name="nama" id="nama" value="{{ old('nama') }}"
                                        required autofocus>
                                    <div class="text-danger">
                                        @error('nama')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                        placeholder="Input your NIK number" name="nik" id="nik" value="{{ old('nik') }}"
                                        required>
                                    <div class="text-danger">
                                        @error('nik')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Input email" name="email" id="email" value="{{ old('email') }}"
                                        required>
                                    <div class="text-danger">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group last col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Input password" name="password" id="password" required>
                                    <div class="text-danger">
                                        @error('password')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group last col-md-6">
                                    <label for="password_confirmation">Konfirmasi Password</label>
                                    <input type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        placeholder="confirm password" name="password_confirmation" id="password_confirmation" required>
                                    <div class="text-danger">
                                        @error('password_confirmation')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">password not
                                            visible</span>
                                        <input type="checkbox" checked="checked" onclick="password1(),password2()" />
                                        <div class="control__indicator" false></div>
                                    </label>
                                    <span class="ml-auto"><a href="/sign_in" class="signup-image-link">I am already
                                            member</a></span>
                                </div>

                                <input type="submit" value="Register" class="btn btn-block btn-primary" name="signup"
                                    id="signup">
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
    <script>
        function password1() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script>
        function password2() {
            var x = document.getElementById("password_confirmation");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    </script>
</body>

</html>
