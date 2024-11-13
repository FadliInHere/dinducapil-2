<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Daftar Kehilangan KTP')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <a href="<?php echo e(route('admin.kehilangan_ktp.create')); ?>" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                            Tambah Kehilangan
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2">No</th>
                                    <th class="px-4 py-2">Nama</th>
                                    <th class="px-4 py-2">NIK</th>
                                    <th class="px-4 py-2">Tempat Kehilangan</th>
                                    <th class="px-4 py-2">Tanggal Kehilangan</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td class="border px-4 py-2"><?php echo e($index + 1); ?></td>
                                        <td class="border px-4 py-2"><?php echo e($item->nama); ?></td>
                                        <td class="border px-4 py-2"><?php echo e($item->nik); ?></td>
                                        <td class="border px-4 py-2"><?php echo e($item->tempat_kehilangan); ?></td>
                                        <td class="border px-4 py-2"><?php echo e($item->tanggal_kehilangan->format('d/m/Y')); ?></td>
                                        <td class="border px-4 py-2">
                                            <span class="px-2 py-1 rounded text-white
                                                <?php echo e($item->status === 'proses' ? 'bg-yellow-500' : 
                                                   ($item->status === 'selesai' ? 'bg-green-500' : 'bg-red-500')); ?>">
                                                <?php echo e(ucfirst($item->status)); ?>

                                            </span>
                                        </td>
                                        <td class="border px-4 py-2">
                                            <a href="<?php echo e(route('admin.kehilangan_ktp.show', $item->id)); ?>" 
                                               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded text-sm">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="6" class="border px-4 py-2 text-center">Tidak ada data pengajuan</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\laravel-11-multi-auth\resources\views/admin/kehilangan_ktp/index.blade.php ENDPATH**/ ?>