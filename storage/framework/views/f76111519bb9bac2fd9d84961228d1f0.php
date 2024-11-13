

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Daftar Kehilangan KTP</h1>
        <a href="<?php echo e(route('kehilangan.create')); ?>" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Tambah
        </a>
    </div>

    <?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-1"></i>
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Nama</th>
                            <th>Nik</th>
                            <th>Alamat</th>
                            <th>Tanggal Kehilangan</th>
                            <th>Tempat Kehilangan</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->nama); ?></td>
                            <td><?php echo e($item->nik); ?></td>
                            <td><?php echo e($item->alamat); ?></td>
                            <td><?php echo e($item->tanggal_kehilangan); ?></td>
                            <td><?php echo e($item->tempat_kehilangan); ?></td>
                            <td>
                                <?php
                                    $statusClass = match($item->status_pengajuan) {
                                         'Selesai' => 'success',
                                         'Ditolak' => 'danger',
                                         'Proses' => 'secondary', // Menambahkan case 'Proses'
                                          default => 'secondary', // Menyediakan default case jika ada status lain
                                    };
                                ?>
                                <span class="badge bg-<?php echo e($statusClass); ?>"><?php echo e($item->status_pengajuan); ?></span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="<?php echo e(route('kehilangan_ktp.show', $item->id)); ?>" 
                                       class="btn btn-info btn-sm mr-2"
                                       data-bs-toggle="tooltip"
                                       title="Lihat Detail">
                                       Detail
                                    </a>
                                    <a href="<?php echo e(route('kehilangan_ktp.edit', $item->id)); ?>" 
                                       class="btn btn-warning btn-sm mr-2"
                                       data-bs-toggle="tooltip"
                                       title="Edit">
                                        Edit
                                    </a>
                                    <form action="<?php echo e(route('kehilangan_ktp.destroy', $item->id)); ?>" 
                                          method="POST" 
                                          class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" 
                                                class="btn btn-danger btn-sm mr-2"
                                                data-bs-toggle="tooltip"
                                                title="Hapus"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-11-multi-auth\resources\views/admin\kehilangan_ktp/index.blade.php ENDPATH**/ ?>