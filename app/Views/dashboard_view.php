<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Automatic Car Wash</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- TOPBAR -->
<nav class="navbar navbar-dark bg-primary px-4">
    <span class="navbar-brand fw-bold">Automatic Car Wash System</span>
    <div class="d-flex align-items-center text-white">
        <i class="bi bi-bell me-3"></i>
        <i class="bi bi-person-circle fs-4"></i>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <aside class="col-md-2 bg-white border-end vh-100 p-3">
            <ul class="nav flex-column gap-2">
                <li class="nav-item fw-bold text-primary">Dashboard</li>

                <li class="nav-item mt-3">Master Data</li>
                <li class="nav-item ms-3 text-muted">Services</li>
                <li class="nav-item ms-3 text-muted">Members</li>
                <li class="nav-item ms-3 text-muted">Staff</li>
                <li class="nav-item ms-3 text-muted">Operational</li>

                <li class="nav-item mt-3">Transaksi</li>
                <li class="nav-item">Reports</li>
            </ul>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="col-md-10 p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="mb-0">Dashboard</h3>
                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-gear"></i> Updates
                </button>
            </div>

            <!-- SUMMARY CARDS -->
            <div class="row g-3 mb-4">
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-car-front fs-4 text-primary"></i>
                            <h6 class="mt-2">Total Transactions</h6>
                            <h4>86</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-currency-dollar fs-4 text-success"></i>
                            <h6 class="mt-2">Total Revenue</h6>
                            <h4>$1,280.00</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-people fs-4 text-info"></i>
                            <h6 class="mt-2">New Members</h6>
                            <h4>21</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-exclamation-triangle fs-4 text-warning"></i>
                            <h6 class="mt-2">Low Stock Alerts</h6>
                            <h4>5</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TABLE SECTION -->
            <div class="row g-4">
                <div class="col-md-7">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white fw-bold">
                            Recent Transactions
                        </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Queue</th>
                                    <th>Member</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr><td>23/04/2024</td><td>A003</td><td>John Smith</td><td>$20</td></tr>
                                <tr><td>23/04/2024</td><td>A002</td><td>Emily Johnson</td><td>$15</td></tr>
                                <tr><td>23/04/2024</td><td>A001</td><td>Alex Brown</td><td>$25</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white fw-bold text-warning">
                            Low Stock Alerts
                        </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <tr><td>Shampoo</td><td>4 Bottles</td></tr>
                                <tr><td>Tire Cleaner</td><td>6 Bottles</td></tr>
                                <tr><td>Microfiber Towels</td><td>12 Pcs</td></tr>
                                <tr><td>Wiper Blades</td><td>8 Pcs</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

</body>
</html>
