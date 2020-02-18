<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Home Banking</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
   <?php echo $__env->yieldContent('content'); ?>

   <div class="<?php echo e($color); ?>">
       <div class="container">
           <h1 class="display-4"><?php echo e($jumboTitle); ?></h1>
           <p class="lead"><?php echo e($jumboDesc); ?></p>
       </div>
</div>

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

   <?php echo $__env->yieldContent('scripts'); ?>

   <?php echo e($num); ?>


<?php if($num >= 10): ?>
    <p>El numero es mayor o igual a 10</p>
<?php elseif($num >= 5): ?>
    <p>El numero es mayor o igual a 5</p>
<?php else: ?>
    <p>El numero es menor a 5</p>
<?php endif; ?>

<?php for($i = 0; $i <= $num; $i++): ?>
    El valor de i es <?php echo e($i); ?>, <?php echo e($num); ?>

<?php endfor; ?>

</body>
</html>
<?php /**PATH /opt/lampp/htdocs/sites/coderhouse/homebanking/resources/views/layout/app.blade.php ENDPATH**/ ?>