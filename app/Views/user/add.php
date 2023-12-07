<!-- MASTER PAGE -->
<?= $this->extend('layout/main') ?>
<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- container -->

        
                <h1>Student Information</h1>
                
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors(); ?>
                    </div>
                <?php endif;?>


                <form action="<?=base_url()?>user/add" method="post">

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Student ID</label>
                <input type="text" class="form-control" id="txtUserID" value="<?=set_value('txtUserID','');?>" name="txtUserID" placeholder="Enter  User ID">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="txtFullName" value="<?=set_value('txtFullName','');?>" name="txtFullName" placeholder="Enter Full Name">
            
                </div>
                
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Program</label>
                <input type="text" class="form-control" id="txtProgram" value="<?=set_value('txtProgram','');?>" name="txtProgram" placeholder="Enter Program">
            
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Year Level (1 - 12)</label>
                <input type="number" class="form-control" id="txtYLevel" value="<?=set_value('txtYLevel','');?>" name="txtYLevel" placeholder="Enter Year Level">
            
                </div>
                <button name="submit" type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save</button>

                </form>
   




<?= $this->endSection('content') ?>