<?php $__env->startSection('content'); ?>


    <main class="content dashboard-wrapper">
        <div class="container dashboard-card">
            <section class="rounded bg-white py-4 px-2">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-lg-12">
                        <div class="card1">
                            <div class="card-header">
                                <h4>Data Diri</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(route('user.update', $profiles->id)); ?>" method="POST"
                                    class="form-horizontal form-material">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Lengkap</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" class="form-control form-control-line"
                                                value="<?php echo e($profiles->name); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="text" name="email" class="form-control form-control-line"
                                                value="<?php echo e($profiles->email); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label class="col-md-12">Nomor HP</label>
                                        <div class="col-md-12">
                                            <input type="text" name="telephone" class="form-control form-control-line"
                                                value="<?php echo e($profiles->telephone); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn bg-purple" id="btn-data-diri">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/user/profil.blade.php ENDPATH**/ ?>