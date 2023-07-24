
<?php $__env->startSection('title','Register'); ?>
<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="card">
        <article class="card-body">
            <a href="<?php echo e(url('login')); ?>" class="float-right btn btn-outline-primary">Sign In</a>
            <h4 class="card-title mb-4 mt-1">Sign Up</h4>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(url('/registerPost')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirmation">Password Confirmation</label>
                    <input type="password" class="form-control" id="confirmation" name="confirmation" placeholder="Password Confirmation">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text"  class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                </div>
            </form>
        </article>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/base2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/register.blade.php ENDPATH**/ ?>