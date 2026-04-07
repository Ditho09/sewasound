<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tambahan penting untuk CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register - Aplikasi</title>

    <!-- Fonts & Icons -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,900" rel="stylesheet">

    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-success">

<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-7 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">

                <div class="card-body p-0">
                    <div class="row">

                        <!-- Left image -->
                        <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>

                        <!-- Register Form -->
                        <div class="col-lg-6">
                            <div class="p-5">

                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
                                </div>

                                <form method="POST" action="{{ route('register') }}" class="user">
                                    @csrf

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mt-2 mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-user"
                                               placeholder="Nama Lengkap..." required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                               placeholder="Email..." required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                               placeholder="Password..." required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password_confirmation"
                                               class="form-control form-control-user"
                                               placeholder="Konfirmasi Password..." required>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        Daftar
                                    </button>
                                </form>

                                <div class="text-center mt-3">
                                    <a class="small" href="{{ route('login') }}">Sudah punya akun? Login</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>
</html>
