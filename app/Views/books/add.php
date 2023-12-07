<!-- MASTER PAGE -->
<?= $this->extend('layout/main') ?>
<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- container -->

        
                <h1>Book Information</h1>
                
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors(); ?>
                    </div>
                <?php endif;?>


                <form action="<?=base_url()?>books/add" method="post">

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="txtTitle" value="<?=set_value('txtTitle','');?>" name="txtTitle" placeholder="Enter title of the book">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Author</label>
                <input type="text" class="form-control" id="txtAuthor" value="<?=set_value('txtAuthor','');?>" name="txtAuthor" placeholder="Enter Author">
            
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Year</label>
                <input type="text" class="form-control" id="txtYear" value="<?=set_value('txtYear','');?>" name="txtYear" placeholder="Enter Year">
            
                </div>
                <button name="submit" type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save</button>

                </form>
   




<?= $this->endSection('content') ?>