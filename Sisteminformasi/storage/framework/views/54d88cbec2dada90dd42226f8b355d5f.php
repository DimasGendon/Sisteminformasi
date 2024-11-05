<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Tombol Tambah Menu yang Mengarah ke Halaman Create Menu -->
        <a href="<?php echo e(route('menu.create')); ?>" class="btn btn-primary mb-3">
            Tambah Menu
        </a>

        <table class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Tipe</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($menu->name); ?></td>
                        <td><?php echo e($menu->type); ?></td>
                        
                        <td>
                            <a href="#" data-toggle="modal" class="btn btn-primary" data-target="#descriptionModal<?php echo e($menu->id); ?>"
                                data-whatever><i class="fas fa-eye"></i></i></a>

                        </td>
                        <td>
                            <a href="<?php echo e(route('menu.edit', $menu->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('menu.destroy', $menu->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php echo $__env->make('menu.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project mini\Sisteminformasi\Sisteminformasi\resources\views/menu/index.blade.php ENDPATH**/ ?>