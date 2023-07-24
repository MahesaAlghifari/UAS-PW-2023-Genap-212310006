

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Daftar Artikel</h2>
        <a href="<?php echo e(route('article.create')); ?>" class="btn btn-primary mb-3">Tambah Artikel</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Upload</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($article->judul); ?></td>
                        <td><?php echo e($article->isi); ?></td>
                        <td><?php echo e($article->tanggal_upload); ?></td>
                        <td><img src="<?php echo e(asset('images/content/' . $article->images)); ?>" alt="Gambar Artikel"
                                width="100"></td>
                        <td>
                            <a href="<?php echo e(route('article.edit', $article->id)); ?>"
                                class="btn btn-sm btn-primary">Edit</a>
                            <form action="<?php echo e(route('article.destroy', $article->id)); ?>" method="POST"
                                style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('.filter-button').click(function() {
                var category = $(this).data('category');

                if (category === 'all') {
                    $('.filter-item').show();
                } else {
                    $('.filter-item').hide();
                    $('.filter-item[data-category="' + category + '"]').show();
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/admin/admin.blade.php ENDPATH**/ ?>