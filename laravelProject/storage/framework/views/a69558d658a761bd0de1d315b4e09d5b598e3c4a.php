<?php $__env->startSection('body'); ?>
  <h1>Hello All there!</h1>
 <!-- {{$subject}} //It will show as normal code structure-->
 <h1>
 <!-- <h1><?php echo e(isset($subject)?$subject: 'Data Not Found'); ?> -->
 <?php if($subject): ?>
  <?php echo e($subject); ?>

 <?php else: ?>
   echo "Data Not Found";
 <?php endif; ?>
  
 </h1>
 
 <!-- // It will run as variable and not as script -->
 <!-- <?php echo $subject; ?> // It will run as script-->
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravelProject\resources\views/hello.blade.php ENDPATH**/ ?>