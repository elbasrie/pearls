<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/main/app.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/pages/auth.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo/favicon.svg') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo/favicon.png') ?>" type="image/png">
</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.php"><img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Silahkan masuk.</h1>

            <form action="index.html">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Ingat Saya
                    </label>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Masuk</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Belum punya akun? <a href="auth-register.html" class="font-bold">Daftar</a>.</p>
                <p><a class="font-bold" href="auth-forgot-password.html">Lupa password?</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>

</html>
