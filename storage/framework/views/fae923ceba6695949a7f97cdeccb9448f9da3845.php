<?php $__env->startSection('body'); ?>
	<br>
	<a href="/todo" class="btn btn-info">back</a>
	<div class="col-lg-4 col-lg-offset-4">
		<h1><?php echo e(substr(Route::currentRouteName(),5)); ?> Item</h1>
		<form class="form-horizontal" action="/todo/<?php echo $__env->yieldContent('editId'); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<?php $__env->startSection('editMethod'); ?>
			<?php echo $__env->yieldSection(); ?>
		  <fieldset>
		    <div class="form-group">
		    	<div class="col-lg-10">
		    	<input type="text" class="form-control" name="title" value="<?php echo $__env->yieldContent('editTitle'); ?>" placeholder="title">
		    		<br>
		    	</div>
		      <div class="col-lg-10">
		        <textarea class="form-control" rows="5" name="body" id="textArea" placeholder="body"><?php echo $__env->yieldContent('editBody'); ?></textarea>
		 		<br>
		        <button type="submit" class="btn btn-success">Submit</button>
		      </div>
		    </div>
		   </fieldset>
		</form>
		<?php echo $__env->make('todo.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>