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
                <h1>Edit PC</h1>

                <form action="<?= base_url('pcs/update/' . $pc['id']) ?>" method="post">
                
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="txtBrand" name="txtBrand" value="<?= $pc['brand'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Model</label>
                        <input type="text" class="form-control" id="txtModel" name="txtModel" value="<?= $pc['model'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Year</label>
                        <input type="text" class="form-control" id="txtYear" name="txtYear" value="<?= $pc['year'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Processor</label>
                        <input type="text" class="form-control" id="txtProcessor" name="txtProcessor" value="<?= $pc['processor'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Memory</label>
                        <input type="text" class="form-control" id="txtMemory" name="txtMemory" value="<?= $pc['memory'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Storage</label>
                        <input type="text" class="form-control" id="txtStorage" name="txtStorage" value="<?= $pc['storage'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Graphics Card</label>
                        <input type="text" class="form-control" id="txtGraphicsCard" name="txtGraphicsCard" value="<?= $pc['graphics_card'] ?>">
                    </div>

                    <button name="submit" type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                    <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1z"/>
                    </svg> Update PC Details</button>
                </form>
                <br /> <br />
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
