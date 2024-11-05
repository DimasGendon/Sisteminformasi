 <!-- Ganti dengan layout Anda -->

<?php $__env->startPush('style'); ?>
    <style>
        .ck-editor__editable_inline {
            height: 450px;
        }
        .sidebar {
            background-color: #f8f9fa;
            padding: 20px;
            border-right: 1px solid #dee2e6;
        }
        .sidebar h2 {
            margin-bottom: 20px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 10px 0;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #007bff;
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

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('multiple.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description-textarea" class="form-control" style="display: none;"></textarea>
                <textarea type="text" name="description" id="editor" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('menu.index')); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <nav class="sidebar">
        <h2>Admin Menu</h2>
        <ul>
            <li><a href="<?php echo e(route('multiple.index')); ?>">Menu</a></li>
            
            <!-- Add more links as needed -->
        </ul>
    </nav>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project mini\Sisteminformasi\Sisteminformasi\resources\views/sidebar.blade.php ENDPATH**/ ?>