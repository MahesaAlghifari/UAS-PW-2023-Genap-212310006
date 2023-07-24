

<?php $__env->startSection('content'); ?>
    <div class="container py-5" style="margin-top: 60px">

        <h2>Menu List</h2>
        <a href="<?php echo e(route('menu.create')); ?>" class="btn btn-primary">Add Menu</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($menu->id); ?></td>
                        <td><?php echo e($menu->name); ?></td>
                        <td><?php echo e($menu->price); ?></td>
                        <td><?php echo e($menu->description); ?></td>
                        <td><?php echo e($menu->category); ?></td>
                        <td><img style="width: 225px" src="images/menus/<?php echo e($menu->images); ?>" alt=""></td>
                        <td>
                            <form action="<?php echo e(route('menu.destroy', $menu->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this menu?')">Delete</button>
                                    <a href="<?php echo e(route('menu.edit', $menu->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                            </form>

                        </td>
      
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/menu/index.blade.php ENDPATH**/ ?>