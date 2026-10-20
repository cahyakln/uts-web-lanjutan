
<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">
                Dashboard Kepegawaian
            </h2>
            <p class="mt-1 text-sm text-gray-500">
                Sistem Informasi Kepegawaian Perusahaan
            </p>
        </div>
    </x-slot>

    <div class="min-h-screen bg-gray-100 py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Sambutan --}}
            <div class="mb-8 overflow-hidden rounded-2xl bg-gradient-to-r from-blue-800 to-blue-600 p-8 text-white shadow-lg">
                <p class="text-sm font-medium text-blue-100">
                    SISTEM INFORMASI KEPEGAWAIAN
                </p>

                <h1 class="mt-3 text-3xl font-bold">
                    Selamat Datang! 👋
                </h1>

                <p class="mt-3 max-w-2xl text-blue-100">
                    Kelola data departemen dan informasi pegawai perusahaan
                    dengan mudah melalui satu dashboard.
                </p>
            </div>

            {{-- Statistik --}}
            <div class="mb-8 grid grid-cols-1 gap-5 sm:grid-cols-2">

                <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">
                                Total Departemen
                            </p>
                            <p class="mt-3 text-3xl font-bold text-blue-700">
                                {{ $totalDepartemen }}
                            </p>
                        </div>

                        <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-blue-100 text-3xl">
                            🏢
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">
                                Total Pegawai
                            </p>
                            <p class="mt-3 text-3xl font-bold text-green-700">
                                {{ $totalPegawai }}
                            </p>
                        </div>

                        <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-green-100 text-3xl">
                            👥
                        </div>
                    </div>
                </div>

            </div>

            {{-- Menu Utama --}}
            <div class="mb-5">
                <h3 class="text-xl font-bold text-gray-800">
                    Menu Utama
                </h3>
                <p class="mt-1 text-sm text-gray-500">
                    Pilih menu untuk mengelola data sistem.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                {{-- Menu Departemen --}}
                <a href="{{ route('departments.index') }}"
                   class="group rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="flex items-center gap-4">
                        <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-blue-100 text-3xl">
                            🏢
                        </div>

                        <div>
                            <h4 class="text-lg font-bold text-gray-800">
                                Data Departemen
                            </h4>
                            <p class="mt-1 text-sm text-gray-500">
                                Kelola departemen perusahaan.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 border-t border-gray-100 pt-4">
                        <span class="font-semibold text-blue-700">
                            Buka Data Departemen →
                        </span>
                    </div>
                </a>

                {{-- Menu Pegawai --}}
                <a href="{{ route('employees.index') }}"
                   class="group rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="flex items-center gap-4">
                        <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-green-100 text-3xl">
                            👥
                        </div>

                        <div>
                            <h4 class="text-lg font-bold text-gray-800">
                                Data Pegawai
                            </h4>
                            <p class="mt-1 text-sm text-gray-500">
                                Kelola informasi pegawai.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 border-t border-gray-100 pt-4">
                        <span class="font-semibold text-green-700">
                            Buka Data Pegawai →
                        </span>
                    </div>
                </a>

            </div>

            {{-- Informasi Sistem --}}
            <div class="mt-8 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                <h3 class="text-lg font-bold text-gray-800">
                    Informasi Sistem
                </h3>

                <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div class="rounded-lg bg-gray-50 p-4">
                        <p class="text-sm text-gray-500">Framework</p>
                        <p class="mt-1 font-semibold text-gray-800">Laravel</p>
                    </div>

                    <div class="rounded-lg bg-gray-50 p-4">
                        <p class="text-sm text-gray-500">Database</p>
                        <p class="mt-1 font-semibold text-gray-800">MySQL</p>
                    </div>

                    <div class="rounded-lg bg-gray-50 p-4">
                        <p class="text-sm text-gray-500">Status Aplikasi</p>
                        <p class="mt-1 font-semibold text-green-700">
                            ● Aktif
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center text-sm text-gray-500">
                Sistem Informasi Kepegawaian
                &copy; {{ date('Y') }}
            </div>

        </div>
    </div>
</x-app-layout>
