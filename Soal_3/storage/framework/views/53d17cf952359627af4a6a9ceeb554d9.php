

<?php $__env->startSection('content'); ?>
    <div class="container py-5" style="margin-top: 60px">
        <h2>Article List</h2>
        <a href="<?php echo e(route('article.create')); ?>" class="btn btn-primary mb-3">Add Article</a>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Upload Date</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($article->title); ?></td>
                        <td><?php echo e($article->content); ?></td>
                        <td><?php echo e($article->publish); ?></td>
                        <td><img style="width: 225px" src="images/articles/<?php echo e($article->images); ?>" alt=""></td>
                        <td>
                            <a href="<?php echo e(route('article.edit', $article->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                            <form action="<?php echo e(route('article.destroy', $article->id)); ?>" method="POST" style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this article?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/article/index.blade.php ENDPATH**/ ?>