<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Aplikasi</title>

    <!-- Fonts & Icons -->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,900" rel="stylesheet">

    <!-- SB Admin 2 CSS -->
    <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-7 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">

                <div class="card-body p-0">
                    <div class="row">

                        <!-- Gambar sisi kiri -->
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>

                        <!-- Form Login -->
                        <div class="col-lg-6">
                            <div class="p-5">

                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>

                                <form method="POST" action="{{ route('login') }}" class="user">
                                    @csrf

                                    @if (session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                               placeholder="Email..." required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                               placeholder="Password..." required>
                                    </div>

                                    <button class="btn btn-primary btn-user btn-block">Login</button>
                                </form>

                                <div class="text-center mt-3">
                                    <a class="small" href="{{ route('register') }}">Belum punya akun? Daftar</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/assets/js/sb-admin-2.min.js"></script>

</body>
</html>
