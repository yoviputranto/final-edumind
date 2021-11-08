<?php $__env->startSection('content'); ?>
    <div class="container-scroller">
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel mx-5">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h2 class=" font-weight-medium text-black mb-2"> Tambah Artikel</h2>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                                                        <div class="d-flex align-items-center justify-content-md-end">
                                                            <div class="pr-1 mb-3 mb-xl-0">
                                                                <a href="<?php echo e(route('category-articles.create')); ?>" class="btn btn-primary mb-4">Tambah
                                                                    Kategori</a>
                                                            </div>

                                                        </div>
                                                    </div> -->
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form action="<?php echo e(route('articles.store')); ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="name">Judul</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Judul artikel" value="<?php echo e(old('title')); ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Kategori</label>
                                            <select class="form-control" name="category_id" required>
                                                <option value="">Pilih Kategori</option>
                                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($cate->id); ?>"><?php echo e($cate->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Isi</label>
                                            <textarea class="form-control" name="body" id="summernote"
                                                placeholder="Isi artikel" value="<?php echo e(old('body')); ?>" required></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="name">Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="archived">Archived</option>
                                                <option value="published">Published</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Gambar</label>
                                            <input type="file" class="form-control" name="image" id="customFile">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 200
        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\edumind\resources\views/admin/articles/create.blade.php ENDPATH**/ ?>