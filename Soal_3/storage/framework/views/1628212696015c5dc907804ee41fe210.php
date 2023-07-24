

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Edit Menu</h2>
        <form enctype="multipart/form-data" action="<?php echo e(route('menu.update', $menu->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="name">Nama Menu:</label>
                <input type="text" name="name" class="form-control" value="<?php echo e($menu->name); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Harga:</label>
                <input type="number" name="price" class="form-control" value="<?php echo e($menu->price); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea name="description" class="form-control" required><?php echo e($menu->description); ?></textarea>
            </div>
            <div class="form-group">
                <label for="category">Kategori:</label>
                <label class="me-5 ">
                    <input type="radio" class="is_active_Y" name="category" value="makanan" <?php echo e($menu->category == 'makanan' ? 'checked' : ''); ?> /> Makanan
                </label>
                <label class="me-5">
                    <input type="radio" class="is_active_N" name="category" value="minuman" <?php echo e($menu->category == 'minuman' ? 'checked' : ''); ?> /> Minuman
                </label>
            </div>
            <div class="form-group">
                <label for="image">Gambar:</label>
                <?php if($menu->images): ?>
                    <img src="<?php echo e(asset('images/menu/' . $menu->images)); ?>" alt="Gambar Sebelumnya" style="max-width: 200px;">
                <?php else: ?>
                    <p>Tidak ada gambar sebelumnya</p>
                <?php endif; ?>
                <input type="file" name="image" class="form-control" value="<?php echo e($menu->images); ?>">
                <?php if($errors->has('image')): ?>
                    <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                <?php endif; ?>
            </div>
            
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/menu/edit.blade.php ENDPATH**/ ?>