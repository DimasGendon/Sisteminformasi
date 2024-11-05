<?php $__env->startSection('content'); ?>
    <?php $__env->startPush('style'); ?>
        <style>
            .ck-editor__editable_inline {
                height: 450px;
            }
            .form-group {
                margin-bottom: 1.5rem;
            }
        </style>
    <?php $__env->stopPush(); ?>

    <?php $__env->startPush('script'); ?>
        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
        <script>
            let editor;

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

            function toggleDescriptionField() {
                const typeSelect = document.querySelector('#type');
                const descriptionField = document.querySelector('#editor');
                const descriptionTextarea = document.querySelector('#description-textarea');

                if (typeSelect.value === 'Multiple') {
                    if (editor) {
                        editor.destroy();
                    }
                    descriptionField.style.display = 'none';
                    descriptionTextarea.style.display = 'block';
                } else {
                    if (descriptionTextarea.style.display === 'block') {
                        descriptionTextarea.style.display = 'none';
                        createEditor();
                    }
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                createEditor();
                document.querySelector('#type').addEventListener('change', toggleDescriptionField);
            });
        </script>
    <?php $__env->stopPush(); ?>

    <div class="container mt-4">
        <h1 class="mb-4">Add Multiple Item</h1>

        <form action="<?php echo e(route('multiple.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="menus_id">Select Menu</label>
                <select name="menus_id" id="menus_id" class="form-control" required>
                    <option value="">Choose Menu</option>
                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($menu->id); ?>"><?php echo e($menu->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description-textarea" class="form-control" style="display: none;"></textarea>
                <textarea type="text" name="description" id="editor" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project mini\Sisteminformasi\Sisteminformasi\resources\views/multiple/create.blade.php ENDPATH**/ ?>