
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Menu Makanan</h1>
    <a href="<?php echo e(route('menus.create')); ?>">Tambah Menu</a>
    <table border="1">
        <tr>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($menu->name); ?></td>
                <td><?php echo e($menu->price); ?></td>
                <td>
                    <a href="<?php echo e(route('menus.edit', $menu->id)); ?>">Edit</a>
                    <form action="<?php echo e(route('menus.destroy', $menu->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


</body>
</html><?php /**PATH C:\xampp\htdocs\pesanan-makanan\resources\views/menus/index.blade.php ENDPATH**/ ?>