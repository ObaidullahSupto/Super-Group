<!DOCTYPE html>
<html>
   
<head>
   <?php echo $__env->make('includes/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

   <input type="checkbox" id="nav-main--trigger" />
   <input type="checkbox" id="nav-main--search-trigger" />
   
   
   <header id="top" class="header theme--light">
      <?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

   <main>
      <?php echo $__env->yieldContent('content'); ?>
   </main>

   <footer class="footer theme--light">
      <?php echo $__env->make('includes/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </footer>

   <?php echo $__env->make('includes/footer-bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH /home/eclbikyu/public_html/nodejs/resources/views/layouts/app.blade.php ENDPATH**/ ?>