

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Article</h2>
    <form action="<?php echo e(route('article.update', $article->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" value="<?php echo e($article->judul); ?>" required>
        </div>

        <div class="form-group">
            <label for="isi">Isi:</label>
            <textarea name="isi" class="form-control" required><?php echo e($article->isi); ?></textarea>
        </div>

        <div class="form-group">
            <label for="tanggal_upload">Tanggal Upload:</label>
            <input type="date" name="tanggal_upload" class="form-control" value="<?php echo e($article->tanggal_upload); ?>" required>
        </div>

        <div class="form-group">
            <label for="image">Gambar:</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/article/edit.blade.php ENDPATH**/ ?>