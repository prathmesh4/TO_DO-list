<?php $__env->startSection('body'); ?>
	<div class="col-lg-offset-4 col-lg-4">
		<br>
		<h1><?php echo e($item->title); ?></h1>
		<p><?php echo e($item->body); ?></p>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>