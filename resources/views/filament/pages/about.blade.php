<style>
    /* Layout: image left, table right on md+, stacked on small screens */
    .about-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
        align-items: center !important;
    }

    @media (min-width: 768px) {
        .about-grid {
            grid-template-columns: 220px 1fr !important;
            /* fixed image column, flexible info column */
        }
    }

    /* Profile image container sizing and fallback */
    .profile-avatar {
        width: 100% !important;
        height: auto !important;
        max-width: 400px !important;
        max-height: 400px !important;
        overflow: hidden !important;
        border-radius: 12px !important;
        /* change to 9999px for fully round */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08) !important;
        display: block !important;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        /* Transition for smooth effect */
    }

    /* Shine effect on hover */
    .profile-avatar:hover {
        transform: scale(1.01);
        /* Slightly enlarge the image on hover */
        box-shadow: 0 0 20px rgba(154, 41, 152, 1), 0 0 20px rgba(144, 81, 170, 0.6);
        /* Shining effect */
    }

    /* Profile image styling */
    .profile-avatar img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        object-position: center center !important;
        display: block !important;
    }

    /* Info area: left-align all text */
    .info-area {
        width: 100% !important;
        overflow: hidden !important;
        text-align: left !important;
        /* ensures headings and inline text are left-aligned */
    }

    /* Table styling and cell alignment */
    .info-area table {
        width: auto !important;
        border-collapse: collapse !important;
    }

    .info-area table td,
    .info-area table th {
        padding: 12px !important;
        text-align: left !important;
        /* Left align all table cells */
        vertical-align: middle !important;
        white-space: normal !important;
        word-break: break-word !important;
        font-size: 14px;
    }

    .info-area table td:first-child,
    .info-area table th:first-child {
        font-weight: 700 !important;
        /* Bold labels */
    }

    /* Background color for odd rows */
    .info-area table tr:nth-child(even) td {}

    /* Ensure the right column (values) are left aligned as requested */
    .info-area table td:last-child {
        text-align: left !important;
        font-weight: 400 !important;
        /* Regular weight for values */
    }

    /* Heading adjustments */
    .info-area h2 {
        margin-bottom: 0.75rem !important;
        text-align: left !important;
        font-weight: 700 !important;
    }

    /* Small screens: ensure avatar is centered but content still left-aligned */
    @media (max-width: 767px) {
        .profile-avatar {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    }
</style>


<x-filament-panels::page>
    <x-filament::section icon="heroicon-o-identification">
        <x-slot name="heading">About</x-slot>
<x-slot name="description">Informasi lengkap yang kami miliki mengenai pembuat.</x-slot>
        <div class="max-w-4xl mx-auto">
            <div class="fi-bg-white fi-shadow-lg fi-rounded-lg fi-overflow-hidden">
                <!-- Content -->
                <div class="fi-p-6">
                    <!-- Use our custom about-grid class to control layout -->
                    <div class="about-grid fi-items-center">
                        <!-- Profile Image (left on md+, top on small screens) -->
                        <div class="profile-avatar fi-flex fi-justify-center fi-items-center">
                            <img src="BNSP_Merah.jpg" alt="Profile Picture" class="fi-w-full fi-h-full fi-object-cover">
                        </div>

                        <!-- Information Table (right on md+, below on small screens) -->
                        <div class="info-area">
                            <h2 class="fi-text-xl fi-font-bold fi-text-gray-900 fi-dark:text-white fi-mb-4">
                                Aplikasi ini dibuat oleh:
                            </h2>

                            <div class="fi-overflow-hidden fi-rounded-lg fi-shadow-md">
                                {{-- <table class="fi-min-w-full fi-text-sm">
                  <tbody class="fi-divide-y fi-divide-gray-200 fi-dark:fi-divide-gray-700">
                    <tr>
                      <td class="fi-text-gray-700 fi-dark:text-gray-300">Nama</td>
                      <td class="fi-text-gray-900 fi-dark:text-white">Rr. Denti Nurramadhona</td>
                    </tr>
                    <tr>
                      <td class="fi-text-gray-700 fi-dark:text-gray-300">Program Studi</td>
                      <td class="fi-text-gray-900 fi-dark:text-white">
                        <x-filament::badge color="info" icon="heroicon-m-sparkles">D4-Teknik Informatika</x-filament::badge>
                      </td>
                    </tr>
                    <tr>
                      <td class="fi-text-gray-700 fi-dark:text-gray-300">NIM</td>
                      <td class="fi-text-mono fi-text-gray-900 fi-dark:text-white">2141720250</td>
                    </tr>
                    <tr>
                      <td class="fi-text-gray-700 fi-dark:text-gray-300">Tanggal</td>
                      <td class="fi-text-gray-900 fi-dark:text-white">
                        <x-filament::badge icon="heroicon-m-clock">16 September 2025</x-filament::badge>
                      </td>
                    </tr>
                  </tbody>
                </table> --}}

                                <table
                                    class="fi-ta-table w-full table-fixed divide-y divide-gray-200 text-start dark:divide-white/5">
                                    <tbody class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5">
                                        {{-- Nomor Surat --}}
                                        <tr
                                            class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5">
                                            <td class="fi-ta-cell p-0 w-auto sm:ps-3"
                                                style="width: 20%; white-space: nowrap;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                        <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                                            <div class="flex">
                                                                <div
                                                                    class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                                                        Nama
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fi-ta-cell p-0 w-auto sm:pe-3" style="width: 80%;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                        <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                                            <div class="flex">
                                                                <div
                                                                    class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label text-sm leading-6 text-gray-500 dark:text-gray-400">
                                                                        : Rr. Denti Nurramadhona
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
                                            <td class="fi-ta-cell p-0 w-auto sm:ps-3"
                                                style="width: 1%; white-space: nowrap;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                        <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                                            <div class="flex">
                                                                <div
                                                                    class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                                                        Prodi
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fi-ta-cell p-0 w-auto sm:pe-3" style="width: 99%;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                        <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                                            <div class="flex">
                                                                <div
                                                                    class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                                    <span
                                                                        class="text-sm leading-6 text-gray-500 dark:text-gray-400 mr-2">:
                                                                    </span>
                                                                    <x-filament::badge color="primary"
                                                                        icon="heroicon-m-academic-cap">
                                                                        D4-Teknik Informatika
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
                                            <td class="fi-ta-cell p-0 w-auto sm:ps-3"
                                                style="width: 1%; white-space: nowrap;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                        <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                                            <div class="flex">
                                                                <div
                                                                    class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                                                        NIM
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fi-ta-cell p-0 w-auto sm:pe-3" style="width: 99%;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                        <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                                            <div class="flex">
                                                                <div
                                                                    class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label text-sm leading-6 text-gray-500 dark:text-gray-400">
                                                                        : 2141720250
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
                                            <td class="fi-ta-cell p-0 w-auto sm:ps-3"
                                                style="width: 1%; white-space: nowrap;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                        <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                                            <div class="flex">
                                                                <div
                                                                    class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                                                        Tanggal
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fi-ta-cell p-0 w-auto sm:pe-3" style="width: 99%;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                        <div class="fi-ta-text grid w-full gap-y-1 px-3 py-4">
                                                            <div class="flex">
                                                                <div
                                                                    class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                                    <span
                                                                        class="text-sm leading-6 text-gray-500 dark:text-gray-400">:
                                                                    </span>
                                                                    <x-filament::badge color="info"
                                                                        icon="heroicon-m-clock">
                                                                        16 September 2025 </x-filament::badge>
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
                        </div> <!-- /.info-area -->
                    </div> <!-- /.about-grid -->
                </div>
            </div>
        </div>
    </x-filament::section>
</x-filament-panels::page>
