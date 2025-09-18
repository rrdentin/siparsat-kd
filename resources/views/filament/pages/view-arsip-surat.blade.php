<x-filament-panels::page>
    <x-filament::section icon="heroicon-o-identification" icon-color="info" icon-size="lg" collapsible="true">

        <x-slot name="heading">
            Detail Arsip Surat
        </x-slot>
        <x-slot name="description">
            Informasi lengkap mengenai arsip surat yang telah disimpan dalam sistem
        </x-slot>

        <div
            class="fi-ta-content relative divide-y divide-gray-200 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10">
            <table class="fi-ta-table w-full table-fixed divide-y divide-gray-200 text-start dark:divide-white/5">
                <tbody class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5">
                    {{-- Nomor Surat --}}
                    <tr
                        class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5">
                        <td class="fi-ta-cell p-0 w-auto sm:ps-3" style="width: 1%; white-space: nowrap;">
                            <div class="fi-ta-col-wrp">
                                <div class="flex w-full disabled:pointer-events-none justify-start text-start">
                                    <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                        <div class="flex">
                                            <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                <span
                                                    class="fi-ta-text-item-label text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                                    Nomor Surat
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="fi-ta-cell p-0 w-auto sm:pe-3" style="width: 99%;">
                            <div class="fi-ta-col-wrp">
                                <div class="flex w-full disabled:pointer-events-none justify-start text-start">
                                    <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                        <div class="flex">
                                            <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                <span
                                                    class="fi-ta-text-item-label text-sm leading-6 text-gray-500 dark:text-gray-400">
                                                    : {{ $record->nomor_surat ?? 'N/A' }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    {{-- Kategori Surat --}}
                    <tr
                        class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5">
                        <td class="fi-ta-cell p-0 w-auto sm:ps-3" style="width: 1%; white-space: nowrap;">
                            <div class="fi-ta-col-wrp">
                                <div class="flex w-full disabled:pointer-events-none justify-start text-start">
                                    <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                        <div class="flex">
                                            <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                <span
                                                    class="fi-ta-text-item-label text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                                    Kategori Surat
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="fi-ta-cell p-0 w-auto sm:pe-3" style="width: 99%;">
                            <div class="fi-ta-col-wrp">
                                <div class="flex w-full disabled:pointer-events-none justify-start text-start">
                                    <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                        <div class="flex">
                                            <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                <span class="text-sm leading-6 text-gray-500 dark:text-gray-400">:
                                                </span>
                                                <x-filament::badge
                                                    color="{{ ['primary', 'success', 'warning', 'danger', 'info', 'gray'][($record->kategoriSurat?->id ?? 0) % 6] }}"
                                                    icon="heroicon-m-tag">
                                                    {{ $record->kategoriSurat?->nama_kategori ?? 'N/A' }}
                                                </x-filament::badge>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    {{-- Judul --}}
                    <tr
                        class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5">
                        <td class="fi-ta-cell p-0 w-auto sm:ps-3" style="width: 1%; white-space: nowrap;">
                            <div class="fi-ta-col-wrp">
                                <div class="flex w-full disabled:pointer-events-none justify-start text-start">
                                    <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                        <div class="flex">
                                            <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                <span
                                                    class="fi-ta-text-item-label text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                                    Judul
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="fi-ta-cell p-0 w-auto sm:pe-3" style="width: 99%;">
                            <div class="fi-ta-col-wrp">
                                <div class="flex w-full disabled:pointer-events-none justify-start text-start">
                                    <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                        <div class="flex">
                                            <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                <span
                                                    class="fi-ta-text-item-label text-sm leading-6 text-gray-500 dark:text-gray-400">
                                                    : {{ $record->judul ?? 'N/A' }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    {{-- Waktu Unggah --}}
                    <tr
                        class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5">
                        <td class="fi-ta-cell p-0 w-auto sm:ps-3" style="width: 1%; white-space: nowrap;">
                            <div class="fi-ta-col-wrp">
                                <div class="flex w-full disabled:pointer-events-none justify-start text-start">
                                    <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                        <div class="flex">
                                            <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                <span
                                                    class="fi-ta-text-item-label text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                                    Waktu Unggah
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="fi-ta-cell p-0 w-auto sm:pe-3" style="width: 99%;">
                            <div class="fi-ta-col-wrp">
                                <div class="flex w-full disabled:pointer-events-none justify-start text-start">
                                    <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                        <div class="flex">
                                            <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                <span class="text-sm leading-6 text-gray-500 dark:text-gray-400">:
                                                </span>
                                                <x-filament::badge color="info" icon="heroicon-m-clock">
                                                    {{ $record->created_at ? $record->created_at->format('Y-m-d H:i') : 'N/A' }}
                                                </x-filament::badge>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-filament::section>

    {{-- File Preview Section --}}
    @if ($record->file_surat)
        <x-filament::section class="mt-6" icon="heroicon-o-document" icon-color="danger" icon-size="lg">
            <x-slot name="heading">
                <div class="flex items-center justify-between">
                    <span>Preview File</span>
                </div>
            </x-slot>
            <div class="text-center">
                @php
                    $extension = strtolower(pathinfo($record->file_surat, PATHINFO_EXTENSION));
                @endphp
                @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                    {{-- Image preview --}}
                    <img src="{{ route('private-file.downloadSurat', ['filename' => $record->file_surat]) }}"
                        alt="Preview" class="max-w-full h-auto rounded-lg shadow-lg mx-auto">
                @elseif($extension === 'pdf')
                    {{-- PDF embed --}}
                    <embed src="{{ route('private-file.downloadSurat', ['filename' => $record->file_surat]) }}"
                        type="application/pdf" width="100%" height="600px" class="rounded-lg shadow-lg">
                @else
                    {{-- Other file types --}}
                    <div class="py-12 text-gray-500 dark:text-gray-400">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <p>File preview tidak tersedia untuk tipe ini.</p>
                        <p class="text-sm mt-2">Klik tombol "Unduh" untuk melihat file.</p>
                    </div>
                @endif
            </div>
        </x-filament::section>
    @endif

    <div class="flex flex-wrap items-center justify-end mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">

        <x-filament::button wire:click="kembali" color="gray" size="md" icon="heroicon-o-arrow-left">
            Kembali
        </x-filament::button>

        @if ($record->file_surat)
            <x-filament::button style="margin-left: 1rem !important;" :href="route('private-file.downloadSurat', ['filename' => $record->file_surat])" target="_blank"
                color="success" size="md" icon="heroicon-o-arrow-down-tray" tag="a">
                Unduh
            </x-filament::button>
        @endif

        <x-filament::button style="margin-left: 1rem !important;" wire:click="edit" color="warning" size="md"
            icon="heroicon-o-pencil-square">
            Edit / Ganti File
        </x-filament::button>
    </div>
</x-filament-panels::page>
