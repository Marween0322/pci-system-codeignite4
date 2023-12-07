<!-- MASTER PAGE -->
<?= $this->extend('layout/main') ?>
<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- container -->

  
        <h1>Update Book Information</h1>
        <hr />
        <?php if(isset($validation)):?>
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors(); ?>
                    </div>
                <?php endif;?>
                <form action="<?=base_url()?>books/update/<?=$books['id']?>" method="post">

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="txtTitle"  name="txtTitle" value="<?=set_value('txtTitle',$books['title']);?>">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Author</label>
                <input type="text" class="form-control" id="txtAuthor" name="txtAuthor" placeholder="Enter Author" value="<?=set_value('txtAuthor',$books['author']);?>">
            
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Year</label>
                <input type="text" class="form-control" id="txtYear" name="txtYear" placeholder="Enter Year" value="<?=set_value('txtYear',$books['year']);?>">
            
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Update Book Details</button>

                </form>


<?= $this->endSection('content') ?>