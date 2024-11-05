

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
        let editor;

        // Function to create CKEditor
        function createEditor() {
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    ckfinder: {
                        uploadUrl: "<?php echo e(route('store.image', ['_token' => csrf_token()])); ?>",
                    }
                })
                .then(newEditor => {
                    editor = newEditor;
                })
                .catch(error => {
                    console.log(error);
                });
        }

        // Function to toggle description field based on type selection
        function toggleDescriptionField() {
            const typeSelect = document.querySelector('#type');
            const descriptionGroup = document.querySelector('#description-group');
            const descriptionField = document.querySelector('#editor');

            if (typeSelect.value === 'Single Multi') {
                descriptionGroup.style.display = 'block'; // Show the description section
                createEditor(); // Initialize CKEditor
            } else if (typeSelect.value === 'Multiple') {
                if (editor) {
                    editor.destroy(); // Destroy CKEditor instance if it exists
                    editor = null;
                }
                descriptionGroup.style.display = 'none'; // Hide the description section
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Initially hide the entire description group
            document.querySelector('#description-group').style.display = 'none';

            // Add event listener to type select
            document.querySelector('#type').addEventListener('change', toggleDescriptionField);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('menu.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="name">Name Menu :</label>
                <input type="text" name="name" id="name" class="form-control" required>
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
                    <option value="" disabled selected>Pilih Tipe</option>
                    <option value="Single Multi">Single Multi</option>
                    <option value="Multiple">Multiple</option>
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

            <!-- Description group initially hidden, shown based on type selection -->
            <div class="form-group" id="description-group">
                <label for="description">Deskripsi :</label>
                <textarea name="description" id="editor" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('menu.index')); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\Sisteminformasi\Sisteminformasi\resources\views/menu/create.blade.php ENDPATH**/ ?>