<?= view('header_view_Wafa') ?>

<div class="container-fluid">
    <div class="row min-vh-100">

        <!-- SIDEBAR -->
        <div class="col-md-3 col-lg-2 p-0">
            <?= view('sidebar_view_wafa') ?>
        </div>

        <!-- MAIN CONTENT -->
        <div class="col-md-9 col-lg-10 p-4 d-flex flex-column">
            <?= $this->renderSection('content') ?>
        </div>

    </div>
</div>

<?= view('footer_view_wafa') ?>