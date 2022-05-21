<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo e(asset('css/inventory_list.css')); ?>">

  <script src="https://kit.fontawesome.com/3040aa43c5.js" crossorigin="anonymous"></script>
  <title>Inventory List Page</title>
</head>

<body>

  <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <h1>Laboratory Inventory</h1>
  <a href="/item/create" class="btn btn-secondary float-right">Add</a><br /><br />


  <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="row row-cols-1 row-cols-md-3 g-4" style="margin: auto 5%;">
    <div class="col">
      <div class="card">
        <img src="https://accurate.id/wp-content/uploads/2020/11/inventory-adalah-1.jpg" class="card-img-top" alt="inventory-name">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($items->name_item); ?></h5>
          <p class="card-text"><?php echo e($items->username); ?></p>
          <a class="fa-solid fa-arrow-right arrow-icon" href="#"></a>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php /**PATH C:\Users\Asus\Documents\GitHub\laravel_RPL_Website\resources\views/inventory_list.blade.php ENDPATH**/ ?>