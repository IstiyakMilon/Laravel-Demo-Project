<!--Email Validation-->

<?php if($errors->any()): ?>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<form action="<?php echo e(route('contactstore')); ?>" method="post">
<!--Cross Site Reqiest forgery Checking-->
<?php echo e(@csrf_field()); ?>

<label for="email">Email: </label>
<input type="text" name="email">
<input type="submit" value="Submit">
</form><?php /**PATH C:\wamp64\www\laravelProject\resources\views/contact.blade.php ENDPATH**/ ?>