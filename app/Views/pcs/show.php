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
                <h1>PC Details</h1>

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Brand</label>
                <input type="text" class="form-control" id="txtBrand" name="txtBrand" value="<?= $pc['brand'] ?>" readonly>
                </div>
                <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Model</label>
    <input type="text" class="form-control" id="txtModel" name="txtModel" value="<?= $pc['model'] ?>" readonly>
                </div>
                <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Year</label>
    <input type="text" class="form-control" id="txtYear" name="txtYear" value="<?= $pc['year'] ?>" readonly>
                </div>
                <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Processor</label>
    <input type="text" class="form-control" id="txtProcessor" name="txtProcessor" value="<?= $pc['processor'] ?>" readonly>
                </div>
                <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Memory</label>
    <input type="text" class="form-control" id="txtMemory" name="txtMemory" value="<?= $pc['memory'] ?>" readonly>
                </div>
                <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Storage</label>
    <input type="text" class="form-control" id="txtStorage" name="txtStorage" value="<?= $pc['storage'] ?>" readonly>
                </div>
                <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Graphics Card</label>
    <input type="text" class="form-control" id="txtGraphicsCard" name="txtGraphicsCard" value="<?= $pc['graphics_card'] ?>" readonly>
                </div>


                <a href="<?= base_url('pcs/edit/' . $pc['id']) ?>" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>Edit</a>
                <br /> <br />
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
