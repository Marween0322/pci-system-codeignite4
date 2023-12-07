<!-- MASTER PAGE -->
<?= $this->extend('layout/main') ?>
<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- container -->

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">LOGIN</h3>
                </div>
                <div class="card-body">
                    <?php if (session()->get('invalidAccount')) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong><?= session()->get('invalidAccount') ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url() ?>user/login" method="post">
                        <div class="mb-3">
                            <label for="txtEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Enter Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="txtPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="txtPassword" name="txtPassword" required>
                        </div>
                        <div class="card-body text-center">
                        <button type="submit" name="submit" class="btn btn-primary mx-auto">Login</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
