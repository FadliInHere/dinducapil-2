<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kehilangan KTP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <a href="{{ route('admin.kehilangan_ktp.create') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
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
                                @forelse ($data as $index => $item)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                                        <td class="border px-4 py-2">{{ $item->nama }}</td>
                                        <td class="border px-4 py-2">{{ $item->nik }}</td>
                                        <td class="border px-4 py-2">{{ $item->tempat_kehilangan }}</td>
                                        <td class="border px-4 py-2">{{ $item->tanggal_kehilangan->format('d/m/Y') }}</td>
                                        <td class="border px-4 py-2">
                                            <span class="px-2 py-1 rounded text-white
                                                {{ $item->status === 'proses' ? 'bg-yellow-500' : 
                                                   ($item->status === 'selesai' ? 'bg-green-500' : 'bg-red-500') }}">
                                                {{ ucfirst($item->status) }}
                                            </span>
                                        </td>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('admin.kehilangan_ktp.show', $item->id) }}" 
                                               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded text-sm">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="border px-4 py-2 text-center">Tidak ada data pengajuan</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>