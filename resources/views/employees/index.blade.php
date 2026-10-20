
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold text-gray-800">
            Data Pegawai
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-100 py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-5 rounded-lg border border-green-200 bg-green-50 p-4 text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-5 rounded-lg border border-red-200 bg-red-50 p-4 text-red-800">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-5 rounded-lg border border-red-200 bg-red-50 p-4 text-red-800">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="mb-6 grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <p class="text-sm text-gray-500">Total Pegawai</p>
                    <p class="mt-2 text-3xl font-bold text-blue-700">
                        {{ $employees->count() }}
                    </p>
                </div>

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <p class="text-sm text-gray-500">Total Departemen</p>
                    <p class="mt-2 text-3xl font-bold text-green-700">
                        {{ \App\Models\Department::count() }}
                    </p>
                </div>
            </div>

            <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
                <div class="flex flex-col gap-4 border-b border-gray-200 p-6 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800">
                            Daftar Pegawai
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Kelola data pegawai perusahaan.
                        </p>
                    </div>

                    <a href="{{ route('employees.create') }}"
                       style="display:inline-flex;align-items:center;justify-content:center;background:#1d4ed8;color:white;padding:11px 18px;border-radius:8px;font-weight:600;text-decoration:none;">
                        + Tambah Pegawai
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full border-collapse text-left">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="border-b px-5 py-4 text-sm text-gray-600">No.</th>
                                <th class="border-b px-5 py-4 text-sm text-gray-600">Nama Pegawai</th>
                                <th class="border-b px-5 py-4 text-sm text-gray-600">Departemen</th>
                                <th class="border-b px-5 py-4 text-sm text-gray-600">Jabatan</th>
                                <th class="border-b px-5 py-4 text-sm text-gray-600">Gaji</th>
                                <th class="border-b px-5 py-4 text-sm text-gray-600">Tanggal Bergabung</th>
                                <th class="border-b px-5 py-4 text-sm text-gray-600">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">
                            @forelse ($employees as $employee)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-5 py-4">{{ $loop->iteration }}</td>

                                    <td class="px-5 py-4 font-medium text-gray-800">
                                        {{ $employee->name }}
                                    </td>

                                    <td class="px-5 py-4">
                                        {{ $employee->department->name ?? '-' }}
                                    </td>

                                    <td class="px-5 py-4">
                                        {{ $employee->position }}
                                    </td>

                                    <td class="px-5 py-4 whitespace-nowrap">
                                        Rp {{ number_format((float) $employee->salary, 0, ',', '.') }}
                                    </td>

                                    <td class="px-5 py-4 whitespace-nowrap">
                                        {{ $employee->joined_at?->format('d-m-Y') ?? '-' }}
                                    </td>

                                    <td class="px-5 py-4">
                                        <div class="flex flex-wrap gap-2">
                                            <a href="{{ route('employees.edit', $employee) }}"
                                               style="display:inline-flex;background:#dbeafe;color:#1d4ed8;padding:7px 12px;border-radius:6px;font-weight:600;text-decoration:none;">
                                                Edit
                                            </a>

                                            <form action="{{ route('employees.destroy', $employee) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus data pegawai ini?')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        style="display:inline-flex;background:#fee2e2;color:#b91c1c;padding:7px 12px;border:0;border-radius:6px;font-weight:600;cursor:pointer;">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-5 py-8 text-center text-gray-500">
                                        Belum ada data pegawai.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="border-t bg-gray-50 px-6 py-4 text-sm text-gray-500">
                    Total {{ $employees->count() }} pegawai
                </div>
            </div>

            <div class="mt-6">
                <a href="{{ route('dashboard') }}"
                   class="font-medium text-blue-700 hover:text-blue-900">
                    &larr; Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
