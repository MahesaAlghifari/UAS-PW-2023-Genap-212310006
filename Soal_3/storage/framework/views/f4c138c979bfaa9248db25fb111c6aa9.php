

<?php $__env->startSection('content'); ?>
    <div class="container py-5" style="margin-top: 60px">
        <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Kembali ke Halaman Home</a>
        <div style="margin-top: 60px">
            <div class="card mb-3">
                <img src="<?php echo e(asset('images/content/' . $article->images)); ?>" class="card-img-top" alt="Article Image" style="height: 600px; width: 100%; object-fit: cover;">

                <div class="card-body">
                    <h2 class="judul"><?php echo e($article->judul); ?></h2>
                    <p class="card-text"><small class="text-muted">Tanggal Upload: <?php echo e($article->tanggal_upload); ?></small>
                    </p>
                    <p class="card-text"><?php echo e($article->isi); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/user/detailArtikel.blade.php ENDPATH**/ ?>