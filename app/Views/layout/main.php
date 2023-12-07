<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Books Rental Management</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Books Rental Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="<?=base_url()?>"><i class="fa-solid fa-home"></i> Home</a>
    </li>

    <?php if(session()->get('isAdminLoggedIn')): ?>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-solid fa-book"></i> Books Management
    </a>
    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?=base_url()?>"><i class="fa-solid fa-list"></i> Books List</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="<?=base_url()?>book/rent"><i class="fa-solid fa-square-plus"></i>  New Rental</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="<?=base_url()?>books/add"><i class="fa-solid fa-square-plus"></i> Add New Books</a></li>


    </ul>
    </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-users"></i> Student Management
    </a>
    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?=base_url()?>user/studentList"><i class="fa-solid fa-list"></i> Student List</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="<?=base_url()?>user/add"><i class="fa-solid fa-user-plus"></i> Add New User</a></li>


    </ul>
    </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-regular fa-user"></i> Welcome <?=session()->get('FullName') ?>
    </a>
    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?=base_url()?>user/profile"><i class="fa-solid fa-user"></i> Profile</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="<?=base_url()?>user/logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>


    </ul>
    </li>


    <?php endif;?>

    </ul>

    </div>
  </div>
  </nav>
</header>

<div class="container">
<div class="row">
<div class="col">

<?= $this->renderSection('content') ?><br />

</div>
</div>
</div>





<footer class="footer mt-auto py-3 bg-light fixed-bottom">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>

<script src="https://kit.fontawesome.com/d8dc359f26.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>