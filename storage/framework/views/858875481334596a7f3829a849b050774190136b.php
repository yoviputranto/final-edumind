<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduMind <?php $__env->startSection('title'); ?></title>
        <link rel="shortcut icon" href="<?php echo e(asset('frontend/assets/ic/Logo-Edumind.ico')); ?>" type="image/png">
        <link rel="stylesheet" href="<?php echo e(url('backend/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('backend/css/main.css')); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

        <header class="sticky-top navbar navbar-expand-lg navbar-dark bg-purple py-3">
            <div class="container-fluid">
                <a href="<?php echo e(url('user/dashboard')); ?>" class="navbar-brand ms-2">
                    <img class="img-fluid" src="<?php echo e(url('frontend/assets/ic/logo-horizontal.png')); ?>" alt="logo"
                        width="120px">
                </a>
                <button type="button" class="navbar-toggler border-0" id="bukaSidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="ms-auto navbar-nav">
                        <li class="nav-item">
                            <div class="d-flex align-items-center me-3">
                                <span
                                    class="me-3 bg-warning text-sm rounded-circle d-flex alig-items-center justify-content-center"
                                    style="padding:6px 12px"><?php echo e(Str::substr(Str::title(Auth::user()->name), 0, 1)); ?></span>
                                <div class="d-flex align-items-end flex-column">
                                    <div class="my-0 py-0 fw-bold"><?php echo e(Str::title(Auth::user()->name)); ?></div>
                                    <a href="<?php echo e(route('beranda')); ?>"
                                        class=" text-decoration-none text-white fw-normal my-0 py-0"
                                        style="font-size:small">Kembali</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <aside class="position-fixed main-sidebar bg-white" id="sidebar">
            <div class="rounded sidebar-item <?php echo e(request()->is('user/dashboard') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('user/dashboard')); ?>" class=""><i class="fa fa-home me-3"></i>Dashboard</a>
            </div>
            <div class="rounded sidebar-item <?php echo e(request()->is('user/event-diikuti') || request()->is('user/event-diupload') ? 'active' : ''); ?>"
                data-bs-toggle="collapse" data-bs-target="#eventShow">
                <a href="#" class=""><i class="fa fa-calendar me-3"></i>Event</a>
                <i class="fa fa-chevron-down float-end mt-1"></i>
            </div>
            <div id="eventShow" class="collapse navbar-collapse">
                <a href="<?php echo e(route('user.ikutevent')); ?>" class="text-purple sub-item">Diikuti</a>
                <a href="<?php echo e(route('user.uploadevent')); ?>" class="text-purple sub-item">DiUpload</a>
            </div>
            <div class="rounded sidebar-item <?php echo e(request()->is('user/profil/' . Auth::user()->id) ? 'active' : ''); ?>">
                <a href="<?php echo e(route('user.profil', Auth::user()->id)); ?>" class=""><i
                        class="fa fa-wallet me-3"></i>Profil</a>
            </div>

        </aside>

        <?php echo $__env->yieldContent('content'); ?>

        <script src="<?php echo e(url('backend/js/bootstrap.js')); ?>"></script>

        <script>
            var tombolBuka = document.getElementById('bukaSidebar')
            var sidebar = document.getElementById('sidebar')

            tombolBuka.addEventListener('click', function() {
                sidebar.classList.toggle('show')
            })
        </script>
        <script src="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>

    </body>

    </html>
<?php /**PATH D:\Yovi\Kuliah\Lomba\olivia\Final\hosting 2\resources\views/layouts/backend.blade.php ENDPATH**/ ?>