<!-- MASTER PAGE -->
<?= $this->extend('layout/main') ?>
<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- container -->

<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <div class="col-md-12">



            
    <?php if(session()->getFlashdata('success')) :?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><?= session()->getFlashdata('success') ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif;?>

    <?php if(session()->getFlashdata('success-delete')) :?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><?= session()->getFlashdata('success-delete') ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif;?>
    <?php if(session()->getFlashdata('success-update')) :?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><?= session()->getFlashdata('success-update') ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif;?>

    <h1>Student List</h1> <a class="dropdown-item" href="<?=base_url()?>user/add"> <i class="fa-solid fa-plus"></i> Add New </a>
    <hr/>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Program</th>
      <th scope="col">Year Level</th>
      <th scope="col" colspan="2">Action</th>

    </tr>
  </thead>
  <tbody>
   
      <?php foreach($students as $key => $student) :?>
      <tr>
        <td><?= $key + 1 ?></td>
        <td><?= strip_tags($student['id']) ?></td>
        <td><?= strip_tags($student['fullName']) ?></td>
        <td><?= strip_tags($student['program']) ?></td>
        <td><?= strip_tags($student['yearLevel']) ?></td>

        <td><a href="<?=base_url()?>user/view/<?= $student['id'] ?>"> <i class="fa-solid fa-magnifying-glass"></i> View</a></td>
        <td><a href="<?=base_url()?>user/delete/<?= $student['id'] ?>"> <i class='fas fa-trash'></i> Delete</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="pagination">
        <?= $pager->only(['previous','next'])->links(); ?>
</div>





</div>
</div>
</div>
</div>
<?= $this->endSection('content') ?>