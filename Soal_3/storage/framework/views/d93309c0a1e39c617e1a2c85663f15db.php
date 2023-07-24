

<?php $__env->startSection('content'); ?>
    <div class="container py-5" style="margin-top: 60px">
        <h2>Add Menu</h2>
        <form enctype="multipart/form-data" action="<?php echo e(route('menu.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Nama Menu:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price">Harga:</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Kategori:</label>
                <label class="me-5">
                    <input type="radio" class="is_active_Y" name="category" value="makanan" /> Makanan
                </label>
                <label class="me-5">
                    <input type="radio" class="is_active_N" name="category" value="minuman" /> Minuman
                </label>
            </div>
            <div class="form-group">
                <label for="image">Gambar:</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/menu/create.blade.php ENDPATH**/ ?>