<!-- MASTER PAGE -->
<?= $this->extend('layout/pcmain') ?>
<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- container -->

<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-12">
                <br /> <br /><br /> <br /><br /> <br />
                <h1>Do you want to Delete this PC?</h1>

                <form action="<?= base_url() ?>/pcs/delete/<?= $pc['id'] ?>" method="post">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="txtBrand" name="txtBrand" readonly value="<?= $pc['brand'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Model</label>
                        <input type="text" class="form-control" id="txtModel" name="txtModel" readonly value="<?= $pc['model'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Year</label>
                        <input type="text" class="form-control" id="txtYear" name="txtYear" readonly value="<?= $pc['year'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Processor</label>
                        <input type="text" class="form-control" id="txtProcessor" name="txtProcessor" readonly value="<?= $pc['processor'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Memory</label>
                        <input type="text" class="form-control" id="txtMemory" name="txtMemory" readonly value="<?= $pc['memory'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Storage</label>
                        <input type="text" class="form-control" id="txtStorage" name="txtStorage" readonly value="<?= $pc['storage'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Graphics Card</label>
                        <input type="text" class="form-control" id="txtGraphicsCard" name="txtGraphicsCard" readonly value="<?= $pc['graphics_card'] ?>">
                    </div>

                    <button name="submit" type="submit" class="btn btn-primary">Yes</button>
                    <a href="<?= base_url() ?>/pcs/list" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">No</a>

                </form>
                <br /> <br />
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
