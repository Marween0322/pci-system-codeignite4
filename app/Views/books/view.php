<!-- MASTER PAGE -->
<?= $this->extend('layout/main') ?>
<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- container -->

            <h1>Do you want to Delete this Book?</h1>

                <form action="<?=base_url()?>books/delete/<?=$books['id']?>" method="post">

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="txtTitle" name="txtTitle" readonly value="<?=set_value('txtTitle','');?>">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Author</label>
                <input type="text" class="form-control" id="txtAuthor" name="txtAuthor" readonly placeholder="Enter Author" value="<?=set_value('txtAuthor','');?>">
            
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Year</label>
                <input type="text" class="form-control" id="txtYear" name="txtYear" readonly placeholder="Enter Year" value="<?=set_value('txtYear','');?>">
            
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Yes</button>
                <a href="<?=base_url()?>/books/list" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">No</a>


                </form>


<?= $this->endSection('content') ?>