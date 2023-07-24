

<?php $__env->startSection('content'); ?>
    <div class="container py-5" style="margin-top: 60px">
        <h2>Add Article</h2>
        <form action="<?php echo e(route('article.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Isi:</label>
                <textarea name="content" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="publish">Tanggal Upload:</label>
                <input type="date" name="publish" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Gambar:</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/article/create.blade.php ENDPATH**/ ?>