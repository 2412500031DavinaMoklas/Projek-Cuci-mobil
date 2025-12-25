<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Automatic Car Wash System</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- TOP BAR -->
<nav class="navbar navbar-dark bg-primary px-4">
    <span class="navbar-brand fw-bold">
        <i class="bi bi-car-front-fill me-2"></i>
        Automatic Car Wash System
    </span>
</nav>

<!-- LOGIN AREA -->
<div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
    <div class="card shadow-sm" style="width: 420px;">
        <div class="card-body p-4">

            <!-- LOGO IMAGE -->
            <div class="text-center mb-3">
                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center"
                     style="width: 80px; height: 80px;">
                    <img src="<?= base_url('assets/img/logo-carwash.png') ?>"
                         alt="Logo Car Wash"
                         style="width: 80px;">
                </div>
            </div>

            <h4 class="text-center fw-bold mb-4">Login</h4>

            <!-- FORM -->
            <form>

                <!-- USERNAME -->
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-person-fill"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>

                <!-- PASSWORD -->
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                    <input type="password" class="form-control" placeholder="Password">
                </div>

                <!-- REMEMBER -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label" for="remember">
                        Remember Me
                    </label>
                </div>

                <!-- BUTTON -->
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Login
                    </button>
                </div>

                <!-- FORGOT -->
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="text-decoration-none">Forgot password?</a>
                        </div>
                        <div class="col">
                            <span>Don't have an account?</span>
                            <a href="#" class="text-decoration-none link-primary"> Sign up</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
