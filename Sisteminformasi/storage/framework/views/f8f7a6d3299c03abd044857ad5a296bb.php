<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>YOUR A MODELS</h1>
        <a href="<?php echo e(route('multiple.create')); ?>" class="btn btn-primary mb-3">Tambah</a>

        <script>
            $(document).ready(function() {
                // Initialize TinyMCE for each textarea when the modal opens
                $('.modal').on('shown.bs.modal', function() {
                    var modalId = $(this).attr('id');
                    tinyMCE.init({
                        selector: `#description-${modalId.split('-')[1]}`, // Adjust the selector based on modal ID
                        menubar: false,
                        plugins: 'lists link image',
                        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image',
                        setup: function(editor) {
                            editor.on('init', function() {
                                editor.setContent($(this).val());
                            });
                        }
                    });
                });

                // Clean up TinyMCE instance when modal is closed
                $('.modal').on('hidden.bs.modal', function() {
                    var modalId = $(this).attr('id');
                    tinyMCE.get(`description-${modalId.split('-')[1]}`).remove();
                });
            });
        </script>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data->multiples; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiple): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($multiple->id); ?></td>
                        <td>
                            <a href="#" data-toggle="modal" class="btn btn-primary" data-target="#descriptionModal<?php echo e($multiple->id); ?>"
                                data-whatever><i class="fas fa-eye"></i></i></a>

                        </td>
                        <td>
                            <a href="<?php echo e(route('multiple.edit', $multiple)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('multiple.destroy', $multiple)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project mini\Sisteminformasi\Sisteminformasi\resources\views/multiple/index.blade.php ENDPATH**/ ?>