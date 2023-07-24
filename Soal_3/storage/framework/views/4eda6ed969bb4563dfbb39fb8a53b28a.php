

<?php $__env->startSection('content'); ?>

<div class="container py-5" style="margin-top: 60px">
    <h1>Daftar Ulasan</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Pengguna</th>
                <th>Isi Ulasan</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $ulasans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ulasan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($ulasan->NamaPengguna); ?></td>
                    <td><?php echo e($ulasan->IsiUlasan); ?></td>
                    <td>
                        <?php if($ulasan->gambar): ?>
                            <img src="<?php echo e(asset('storage/'.$ulasan->gambar)); ?>" alt="<?php echo e($ulasan->NamaPengguna); ?>" width="100">
                        <?php else: ?>
                            No Image
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(route('ulasan.edit', $ulasan->id)); ?>" class="btn btn-primary">Edit</a>
                        <form action="<?php echo e(route('ulasan.destroy', $ulasan->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a href="<?php echo e(route('ulasan.create')); ?>" class="btn btn-success">Tambah Ulasan</a>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/ulasan/index.blade.php ENDPATH**/ ?>