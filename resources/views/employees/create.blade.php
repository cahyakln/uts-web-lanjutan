
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold text-gray-800">Tambah Pegawai</h2>
    </x-slot>

    <div class="min-h-screen bg-gray-100 py-8">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
                <div class="border-b border-gray-200 px-6 py-5">
                    <h3 class="text-lg font-semibold text-gray-800">Form Tambah Pegawai</h3>
                    <p class="mt-1 text-sm text-gray-500">Lengkapi informasi pegawai di bawah ini.</p>
                </div>

                <form action="{{ route('employees.store') }}" method="POST" class="space-y-5 p-6">
                    @csrf

                    <div>
                        <label for="name" class="mb-2 block text-sm font-semibold text-gray-700">Nama Pegawai</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required maxlength="255"
                            placeholder="Masukkan nama lengkap"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-800 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200">
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="department_id" class="mb-2 block text-sm font-semibold text-gray-700">Departemen</label>
                        <select id="department_id" name="department_id" required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-800 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200">
                            <option value="">-- Pilih Departemen --</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}" @selected(old('department_id') == $department->id)>
                                    {{ $department->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('department_id')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="position" class="mb-2 block text-sm font-semibold text-gray-700">Jabatan</label>
                        <input type="text" id="position" name="position" value="{{ old('position') }}" required maxlength="255"
                            placeholder="Contoh: Backend Developer"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-800 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200">
                        @error('position')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="salary" class="mb-2 block text-sm font-semibold text-gray-700">Gaji (Rp)</label>
                        <input type="number" id="salary" name="salary" value="{{ old('salary') }}" required min="1" step="0.01"
                            placeholder="Contoh: 8000000"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-800 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200">
                        @error('salary')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="joined_at" class="mb-2 block text-sm font-semibold text-gray-700">Tanggal Bergabung</label>
                        <input type="date" id="joined_at" name="joined_at" value="{{ old('joined_at') }}" required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-800 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200">
                        @error('joined_at')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col-reverse gap-3 border-t border-gray-100 pt-5 sm:flex-row sm:justify-end">
                        <a href="{{ route('employees.index') }}"
                            style="display:inline-flex;align-items:center;justify-content:center;padding:11px 18px;border:1px solid #d1d5db;border-radius:8px;color:#374151;text-decoration:none;font-weight:600;">
                            Batal
                        </a>
                        <button type="submit"
                            style="display:inline-flex;align-items:center;justify-content:center;padding:11px 18px;background:#1d4ed8;color:#fff;border:1px solid #1e40af;border-radius:8px;font-weight:600;cursor:pointer;">
                            Simpan Pegawai
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
