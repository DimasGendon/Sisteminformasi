 <!-- Ganti dengan layout Anda -->

<?php $__env->startPush('style'); ?>
    <style>
        .ck-editor__editable_inline {
            height: 450px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        let editorInstance;

        function createEditor(selector) {
            ClassicEditor
                .create(document.querySelector(selector), {
                    ckfinder: {
                        uploadUrl: "<?php echo e(route('store.image', ['_token' => csrf_token()])); ?>",
                    }
                })
                .then(editor => {
                    editorInstance = editor;
                })
                .catch(error => {
                    console.log(error);
                });
        }

        document.addEventListener('DOMContentLoaded', function () {
            createEditor('#editor'); // Inisialisasi editor pada awalnya

            // Menangani perubahan pada select type
            document.getElementById('type').addEventListener('change', function () {
                const selectedValue = this.value;
                const editorElement = document.getElementById('editor');
                const descriptionContainer = document.getElementById('description-container');

                // Menghentikan editor yang ada
                if (editorInstance) {
                    editorInstance.destroy()
                        .then(() => {
                            if (selectedValue === 'multi') {
                                // Menampilkan nilai "multiple" dan menyembunyikan dropdown
                                editorElement.value = 'multiple';
                                descriptionContainer.style.display = 'none'; // Sembunyikan container deskripsi
                            } else {
                                // Kembalikan ke editor dan tampilkan dropdown
                                editorElement.value = '<?php echo e($menu->description); ?>'; // Kembalikan deskripsi asli
                                descriptionContainer.style.display = 'block'; // Tampilkan container deskripsi
                            }
                            createEditor(`#${editorElement.id}`); // Inisialisasi editor lagi
                        })
                        .catch(error => {
                            console.log(error);
                        });
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Edit Menu: <?php echo e($menu->name); ?></h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('menu.update', $menu->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> <!-- Menandakan bahwa ini adalah request PUT -->

        <div class="form-group">
            <label for="name">Name Menu :</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo e($menu->name); ?>" required>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label for="type">Tipe Menu :</label>
            <select name="type" id="type" class="form-control" required>
                <option value="" disabled>Pilih Tipe</option>
                <option value="single" <?php echo e($menu->type === 'single' ? 'selected' : ''); ?>>Single Multi</option>
                <option value="multi" <?php echo e($menu->type === 'multi' ? 'selected' : ''); ?>>Multiple</option>
            </select>
            <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group" id="description-container">
            <label for="editor">Deskripsi :</label>
            <textarea name="description" id="editor" class="form-control"><?php echo e($menu->description); ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo e(route('menu.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\Sisteminformasi\Sisteminformasi\resources\views/menu/edit.blade.php ENDPATH**/ ?>