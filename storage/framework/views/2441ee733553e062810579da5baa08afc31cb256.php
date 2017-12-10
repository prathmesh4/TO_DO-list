<?php $__env->startSection('editId',$item->id); ?>
<?php $__env->startSection('editTitle',$item->title); ?>
<?php $__env->startSection('editBody',$item->body); ?>

<?php $__env->startSection('editMethod'); ?>
	<?php echo e(method_field('PUT')); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('todo.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>