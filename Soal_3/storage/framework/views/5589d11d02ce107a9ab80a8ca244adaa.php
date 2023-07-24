

<?php $__env->startSection('content'); ?>

<div class="container" style="margin-top: 60px">
    <h1>Tambah Ulasan</h1>

    <form action="<?php echo e(route('ulasan.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="NamaPengguna">Nama Pengguna</label>
            <input type="text" class="form-control" id="NamaPengguna" name="NamaPengguna">
        </div>
        <div class="form-group">
            <label for="IsiUlasan">Isi Ulasan</label>
            <textarea class="form-control" id="IsiUlasan" name="IsiUlasan" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/ulasan/create.blade.php ENDPATH**/ ?>