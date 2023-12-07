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

    <h1>Books Collection</h1> <a class="dropdown-item" href="<?=base_url()?>books/add"> <i class="fa-solid fa-plus"></i> Add New </a>
    <hr/>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book ID</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Year</th>
      <th scope="col" colspan="2">Action</th>

    </tr>
  </thead>
  <tbody>
   
      <?php foreach($books as $key => $book) :?>
      <tr>
        <td><?= $key + 1 ?></td>
        <td><?= strip_tags($book['id']) ?></td>
        <td><?= strip_tags($book['title']) ?></td>
        <td><?= strip_tags($book['author']) ?></td>
        <td><?= strip_tags($book['year']) ?></td>

        <td><a href="<?=base_url()?>books/view/<?= $book['id'] ?>"> <i class="fa-solid fa-magnifying-glass"></i> View</a></td>
        <td><a href="<?=base_url()?>books/delete/<?= $book['id'] ?>"> <i class='fas fa-trash'></i> Delete</a></td>
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