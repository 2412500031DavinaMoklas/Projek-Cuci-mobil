<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Automatic Car Wash System</title>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
</head>
<body class="bg-light">

<!-- TOP BAR -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">🚗 Automatic Car Wash System</span>
    </div>
</nav>

<!-- LOGIN FORM -->
<div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
    <div class="card shadow" style="width: 380px;">
        <div class="card-body text-center">

            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto mb-3"
                 style="width:80px; height:80px; font-size:32px;">
                🚿
            </div>

            <h4 class="mb-4">Login</h4>

            <form>
                <div class="input-group mb-3">
                    <span class="input-group-text">👤</span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">🔒</span>
                    <input type="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-check mb-3 text-start">
                    <input class="form-check-input" type="checkbox" checked>
                    <label class="form-check-label">Remember Me</label>
                </div>

                <button class="btn btn-primary w-100">Login</button>
            </form>

            <a href="#" class="d-block mt-3 text-decoration-none">Forgot password?</a>
        </div>
    </div>
</div>

</body>
</html>
