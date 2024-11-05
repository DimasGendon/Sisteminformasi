



<?php $__env->startPush('script'); ?>
    <!-- Tambahkan SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menampilkan SweetAlert sebagai toast jika ada pesan sukses
            <?php if(session('success')): ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '<?php echo e(session('success')); ?>',
                    toast: true,            // Mengaktifkan mode toast
                    position: 'top-end',   // Posisi toast (ubah sesuai kebutuhan)
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true  // Menambahkan progres bar pada toast
                });
            <?php endif; ?>
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <!-- Tombol Tambah Menu yang Mengarah ke Halaman Create Menu -->
        <a href="<?php echo e(route('menu.create')); ?>" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> <!-- Ikon Tambah -->
        </a>

        <table class="table table-striped table-bordered" style="width:100%; font-size: 16px; line-height: 1.5; background-color: #ffffff; color: #333; border-collapse: collapse;">
            <thead style="background-color: #f8f9fa;">
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
                               data-whatever style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-eye" style="font-size: 18px;"></i> <!-- Ikon Lihat -->
                            </a>
                        </td>
                        
                        <td>
                            <a href="<?php echo e(route('menu.edit', $menu->id)); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a> <!-- Ikon Edit -->
                            <form action="<?php echo e(route('menu.destroy', $menu->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')"><i class="fas fa-trash"></i></button> <!-- Ikon Hapus -->
                            </form>
                        </td>
                    </tr>
                    <?php echo $__env->make('menu.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <!-- Tombol Tambah Menu yang Mengarah ke Halaman Create Menu -->
        <a href="<?php echo e(route('menu.create')); ?>" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> <!-- Ikon Tambah -->
        </a>

        <table class="table table-striped table-bordered" style="width:100%; font-size: 16px; line-height: 1.5; background-color: #ffffff; color: #333;">
            <thead style="background-color: #f8f9fa;">
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
                               data-whatever style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-eye" style="font-size: 18px;"></i> <!-- Ikon Lihat -->
                            </a>
                        </td>
                        
                        <td>
                            <a href="<?php echo e(route('menu.edit', $menu->id)); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a> <!-- Ikon Edit -->
                            <form action="<?php echo e(route('menu.destroy', $menu->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')"><i class="fas fa-trash"></i></button> <!-- Ikon Hapus -->
                            </form>
                        </td>
                    </tr>
                    <?php echo $__env->make('menu.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\Sisteminformasi\Sisteminformasi\resources\views/menu/index.blade.php ENDPATH**/ ?>