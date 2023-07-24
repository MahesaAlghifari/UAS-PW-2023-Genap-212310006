

<?php $__env->startSection('content'); ?>
    <div class="container py-5" style="margin-top: 60px">
        <h2>Daftar Review</h2>
        <a href="<?php echo e(route('reviews.create')); ?>" class="btn btn-primary mb-3">Tambah Review</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Review</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($review->name); ?></td>
                        <td><?php echo e($review->email); ?></td>
                        <td><?php echo e($review->review); ?></td>
                        <td>
                            <a href="<?php echo e(route('reviews.edit', $review->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <form action="<?php echo e(route('reviews.destroy', $review->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus review ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/reviews/index.blade.php ENDPATH**/ ?>