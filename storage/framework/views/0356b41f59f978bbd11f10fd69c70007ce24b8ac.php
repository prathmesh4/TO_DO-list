<?php $__env->startSection('body'); ?>
	<br>
	<?php echo $__env->make('todo.partials.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<a href="todo/create" class="btn btn-info">Add New</a>
	<div class="col-lg-4 col-lg-offset-4">
		<center><h1>Todo Lists</h1></center>
			<ul class="list-group col-lg-8">
				<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				   <li class="list-group-item">
						<a href="<?php echo e('/todo/'.$todo->id); ?>"><?php echo e($todo->title); ?></a>
					<span class="pull-right"> <?php echo e($todo->created_at->diffForHumans()); ?></span>	
			  		</li>			  	
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>

			<ul class="list-group col-lg-4">
				<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				   <li class="list-group-item">
						<a href="<?php echo e('/todo/'.$todo->id.'/edit'); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
						<form class="from-group pull-right" action="<?php echo e('/todo/'.$todo->id); ?>" 
						method="post">
						<?php echo e(csrf_field()); ?>	
						<?php echo e(method_field('DELETE')); ?>

						<button type="submit" style="border: none;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
						</form>
					</li>			  	
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
	</div>
<?php $__env->stopSection(); ?> 	
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>