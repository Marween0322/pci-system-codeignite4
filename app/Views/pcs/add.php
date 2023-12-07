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
                <h1>Add New PC</h1>

                <!-- Display validation errors -->
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors(); ?>
                    </div>
                <?php endif;?>

                <form action="<?= base_url('pcs/store') ?>" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="txtBrand" name="txtBrand" placeholder="Enter brand of the PC" value="<?= old('txtBrand') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Model</label>
                        <input type="text" class="form-control" id="txtModel" name="txtModel" placeholder="Enter model of the PC" value="<?= old('txtModel') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Year</label>
                        <input type="text" class="form-control" id="txtYear" name="txtYear" placeholder="Enter Year" value="<?= old('txtYear') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Processor</label>
                        <input type="text" class="form-control" id="txtProcessor" name="txtProcessor" placeholder="Enter processor details" value="<?= old('txtProcessor') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Memory</label>
                        <input type="text" class="form-control" id="txtMemory" name="txtMemory" placeholder="Enter memory details" value="<?= old('txtMemory') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Storage</label>
                        <input type="text" class="form-control" id="txtStorage" name="txtStorage" placeholder="Enter storage details" value="<?= old('txtStorage') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Graphics Card</label>
                        <input type="text" class="form-control" id="txtGraphicsCard" name="txtGraphicsCard" placeholder="Enter graphics card details" value="<?= old('txtGraphicsCard') ?>">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                    <path d="M11 2H9v3h2z"/>
                    <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                    </svg> Save PC</button>
                </form>
                <br /> <br />
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
