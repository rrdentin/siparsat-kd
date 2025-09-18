<style>
    .about-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
        align-items: center !important;
    }

    @media (min-width: 768px) {
        .about-grid {
            grid-template-columns: 220px 1fr !important;
        }
    }

    /* Profile image container sizing and fallback */
    .profile-avatar {
        width: 100% !important;
        height: 100% !important;
        max-width: 300px !important;
        max-height: 300px !important;
        overflow: hidden !important;
        border-radius: 16px !important;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
        display: block !important;
        transition: all 0.3s ease !important;
        background: linear-gradient(135deg, #eaaa66 0%, #a2934b 100%) !important;
        padding: 4px !important;
    }

    .profile-avatar:hover {
        transform: scale(1.02) !important;
        box-shadow: 0 15px 40px rgba(234, 144, 102, 0.4) !important;
    }

    .profile-avatar img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        object-position: center center !important;
        display: block !important;
        border-radius: 12px !important;
    }

    /* Website logo styling */
    .website-logo {
        display: flex !important;
        justify-content: center !important;
        /* margin-bottom: 3rem !important; */
        padding: 2rem !important;
        border-radius: 20px !important;
    }
    .badge {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-size: 0.875rem;
        font-weight: 600;
        text-transform: none;
        transition: all 0.2s ease;
    }

    .badge-primary {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        color: white;
    }

    .badge-info {
        background: linear-gradient(135deg, #5e0ee9, #7802c7);
        color: white;
    }

    .badge-success {
        background: linear-gradient(135deg, #10b981, #059669);
        color: white;
    }

    .badge-warning {
        background: linear-gradient(135deg, #f5130b, #d97706);
        color: white;
    }

    .badge-gray {
        background: linear-gradient(135deg, #6b7280, #4b5563);
        color: white;
    }

    .badge:hover {
        transform: scale(1.05);
    }

    /* Website logo */

    /* Website description */
    .website-description {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
        /* Ensure the paragraph is centered within its container */

    }

    .website-description h2 {
        font-size: 1.5rem;
        font-weight: 800;
        color: #1f2937;
        margin-bottom: 1.5rem;
        background: linear-gradient(135deg, #f6ac2d 0%, #e7c669 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .website-description p {
        font-size: 1rem;
        color: #6b7280;
        margin: 0 auto;
        /* Ensure the paragraph is centered within its container */
        line-height: 1.8;
    }

    /* Features grid */
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2rem;
        margin: 3rem 0;
    }

    .feature-card {
        background: linear-gradient(135deg, #f6f9fc 0%, #e9ecef 100%);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 2px solid transparent;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #eabe66, #a2884b);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        border-color: #eabe66;
    }

    .feature-card:hover::before {
        opacity: 1;
    }

    .feature-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #ea9b66 0%, #a29c4b 100%);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        color: white;
        font-size: 1.75rem;
        box-shadow: 0 8px 20px rgba(234, 199, 102, 0.3);
        transition: all 0.3s ease;
    }

    .feature-card:hover .feature-icon {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 12px 30px rgba(234, 146, 102, 0.4);
    }

    .feature-card h3 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 1rem;
    }

    .feature-card p {
        color: #6b7280;
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }

    /* Scenario section */
    .scenario-section {
        background: linear-gradient(135deg, #f6f9fc 0%, #e9ecef 100%);
        border-radius: 20px;
        padding: 2.5rem;
        margin-top: 3rem;
        border: 1px solid rgba(102, 126, 234, 0.1);
        position: relative;
        overflow: hidden;
    }

    .scenario-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 100%;
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.03) 0%, rgba(118, 75, 162, 0.03) 100%);
        pointer-events: none;
    }

    .scenario-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 2rem;
        position: relative;
        z-index: 1;
    }

    .scenario-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
    }

    .scenario-header h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1f2937;
    }

    .scenario-text {
        position: relative;
        z-index: 1;
        line-height: 1.8;
        text-align: justify;
        color: #374151;
    }

    .scenario-text p {
        margin-bottom: 1.5rem;
    }

    .scenario-text p:last-child {
        margin-bottom: 2rem;
    }

    /* Benefits section */
    .benefits-section {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e5e7eb;
        position: relative;
        z-index: 1;
    }

    .benefits-section h4 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
    }

    .benefit-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .benefit-badge {
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .benefit-badge:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
    }

    /* Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .feature-card {
        animation: fadeInUp 0.6s ease forwards;
    }

    .feature-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .feature-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .feature-card:nth-child(3) {
        animation-delay: 0.3s;
    }

    .feature-card:nth-child(4) {
        animation-delay: 0.4s;
    }

    .feature-card:nth-child(5) {
        animation-delay: 0.5s;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-container {
            padding: 1rem;
        }

        .section-content {
            padding: 2rem;
        }

        .website-description h2 {
            font-size: 2rem;
        }

        .features-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<x-filament-panels::page>
    <!-- Section 1: About Developer -->
    <x-filament::section icon="heroicon-o-identification" collapsible="true">
        <x-slot name="heading">About</x-slot>
        <x-slot name="description">Informasi lengkap yang kami miliki mengenai pembuat.</x-slot>
        <div class="fi-max-w-4xl fi-mx-auto">
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
                                <table
                                    class="fi-ta-table fi-w-full fi-table-fixed fi-divide-y fi-divide-gray-200 fi-text-start fi-dark:divide-white/5">
                                    <tbody
                                        class="fi-divide-y fi-divide-gray-200 fi-whitespace-nowrap fi-dark:divide-white/5">
                                        <!-- Nama -->
                                        <tr
                                            class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:fi-bg-gray-50 fi-dark:hover:bg-white/5">
                                            <td class="fi-ta-cell fi-p-0 fi-w-auto sm:fi-ps-3"
                                                style="width: 20%; white-space: nowrap;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="fi-flex fi-w-full fi-disabled:pointer-events-none fi-justify-start fi-text-start">
                                                        <div
                                                            class="fi-ta-text fi-grid fi-w-full fi-gap-y-1 fi-px-3 fi-py-4">
                                                            <div class="fi-flex">
                                                                <div
                                                                    class="fi-ta-text-item fi-inline-flex fi-items-center fi-gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label fi-text-sm fi-font-medium fi-leading-6 fi-text-gray-950 fi-dark:text-white">
                                                                        Nama
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fi-ta-cell fi-p-0 fi-w-auto sm:fi-pe-3" style="width: 80%;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="fi-flex fi-w-full fi-disabled:pointer-events-none fi-justify-start fi-text-start">
                                                        <div
                                                            class="fi-ta-text fi-grid fi-w-full fi-gap-y-1 fi-px-3 fi-py-4">
                                                            <div class="fi-flex">
                                                                <div
                                                                    class="fi-ta-text-item fi-inline-flex fi-items-center fi-gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label fi-text-sm fi-leading-6 fi-text-gray-500 fi-dark:text-gray-400">
                                                                        : Rr. Denti Nurramadhona
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Program Studi -->
                                        <tr
                                            class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:fi-bg-gray-50 fi-dark:hover:bg-white/5">
                                            <td class="fi-ta-cell fi-p-0 fi-w-auto sm:fi-ps-3"
                                                style="width: 1%; white-space: nowrap;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="fi-flex fi-w-full fi-disabled:pointer-events-none fi-justify-start fi-text-start">
                                                        <div
                                                            class="fi-ta-text fi-grid fi-w-full fi-gap-y-1 fi-px-3 fi-py-4">
                                                            <div class="fi-flex">
                                                                <div
                                                                    class="fi-ta-text-item fi-inline-flex fi-items-center fi-gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label fi-text-sm fi-font-medium fi-leading-6 fi-text-gray-950 fi-dark:text-white">
                                                                        Prodi
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fi-ta-cell fi-p-0 fi-w-auto sm:fi-pe-3" style="width: 99%;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="fi-flex fi-w-full fi-disabled:pointer-events-none fi-justify-start fi-text-start">
                                                        <div
                                                            class="fi-ta-text fi-grid fi-w-full fi-gap-y-1 fi-px-3 fi-py-4">
                                                            <div class="fi-flex">
                                                                <div
                                                                    class="fi-ta-text-item fi-inline-flex fi-items-center fi-gap-1.5">
                                                                    <span
                                                                        class="fi-text-sm fi-leading-6 fi-text-gray-500 fi-dark:text-gray-400 fi-mr-2">:
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
                                        <!-- NIM -->
                                        <tr
                                            class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:fi-bg-gray-50 fi-dark:hover:bg-white/5">
                                            <td class="fi-ta-cell fi-p-0 fi-w-auto sm:fi-ps-3"
                                                style="width: 1%; white-space: nowrap;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="fi-flex fi-w-full fi-disabled:pointer-events-none fi-justify-start fi-text-start">
                                                        <div
                                                            class="fi-ta-text fi-grid fi-w-full fi-gap-y-1 fi-px-3 fi-py-4">
                                                            <div class="fi-flex">
                                                                <div
                                                                    class="fi-ta-text-item fi-inline-flex fi-items-center fi-gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label fi-text-sm fi-font-medium fi-leading-6 fi-text-gray-950 fi-dark:text-white">
                                                                        NIM
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fi-ta-cell fi-p-0 fi-w-auto sm:fi-pe-3" style="width: 99%;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="fi-flex fi-w-full fi-disabled:pointer-events-none fi-justify-start fi-text-start">
                                                        <div
                                                            class="fi-ta-text fi-grid fi-w-full fi-gap-y-1 fi-px-3 fi-py-4">
                                                            <div class="fi-flex">
                                                                <div
                                                                    class="fi-ta-text-item fi-inline-flex fi-items-center fi-gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label fi-text-sm fi-leading-6 fi-text-gray-500 fi-dark:text-gray-400">
                                                                        : 2141720250
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Tanggal -->
                                        <tr
                                            class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:fi-bg-gray-50 fi-dark:hover:bg-white/5">
                                            <td class="fi-ta-cell fi-p-0 fi-w-auto sm:fi-ps-3"
                                                style="width: 1%; white-space: nowrap;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="fi-flex fi-w-full fi-disabled:pointer-events-none fi-justify-start fi-text-start">
                                                        <div
                                                            class="fi-ta-text fi-grid fi-w-full fi-gap-y-1 fi-px-3 fi-py-4">
                                                            <div class="fi-flex">
                                                                <div
                                                                    class="fi-ta-text-item fi-inline-flex fi-items-center fi-gap-1.5">
                                                                    <span
                                                                        class="fi-ta-text-item-label fi-text-sm fi-font-medium fi-leading-6 fi-text-gray-950 fi-dark:text-white">
                                                                        Tanggal
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fi-ta-cell fi-p-0 fi-w-auto sm:fi-pe-3" style="width: 99%;">
                                                <div class="fi-ta-col-wrp">
                                                    <div
                                                        class="fi-flex fi-w-full fi-disabled:pointer-events-none fi-justify-start fi-text-start">
                                                        <div
                                                            class="fi-ta-text fi-grid fi-w-full fi-gap-y-1 fi-px-3 fi-py-4">
                                                            <div class="fi-flex">
                                                                <div
                                                                    class="fi-ta-text-item fi-inline-flex fi-items-center fi-gap-1.5">
                                                                    <span
                                                                        class="fi-text-sm fi-leading-6 fi-text-gray-500 fi-dark:text-gray-400">:
                                                                    </span>
                                                                    <x-filament::badge color="info"
                                                                        icon="heroicon-m-clock">
                                                                        16 September 2025
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
                        </div> <!-- /.info-area -->
                    </div> <!-- /.about-grid -->
                </div>
            </div>
        </div>
    </x-filament::section>

    <x-filament::section icon="heroicon-o-globe-alt" collapsible="true">
        <x-slot name="heading">Sistem Arsip Surat Desa Karangduren</x-slot>
        <x-slot name="description">Informasi lengkap mengenai aplikasi Sistem Arsip Surat Desa Karangduren dan
            fitur-fitur unggulannya.</x-slot>


        <div class="section-content">
            <!-- Website Logo -->
            <div class="website-logo">
                <img src="{{ asset('assets/bg.png') }}" alt="Logo Sistem Arsip Surat Desa Karangduren">
            </div>

            <!-- Website Description -->
            <div class="website-description">
                <p>Aplikasi berbasis web yang dirancang khusus untuk membantu perangkat Desa Karangduren dalam
                    mengelola, menyimpan, dan mengarsipkan surat-surat resmi secara digital dengan efisien dan
                    terorganisir.</p>
            </div>

            <!-- Features Grid -->
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <x-heroicon-m-document-text style="width: 2rem; height:2rem" />
                    </div>
                    <h3>CRUD Arsip Surat</h3>
                    <p>Mengelola arsip surat dengan fitur Create, Read, Update, Delete dilengkapi filter dan pencarian
                        canggih untuk akses data yang cepat.</p>
                    <span class="badge badge-success"> <x-heroicon-m-check-badge
                            style="width: 1rem; height:1rem; color:#edab39" />CRUD Complete</span>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <x-heroicon-m-folder style="width: 2rem; height:2rem" />
                    </div>
                    <h3>Manajemen Kategori</h3>
                    <p>Mengelola kategori surat dengan fitur Create, Update, Delete serta filter pencarian untuk
                        organisasi data yang optimal.</p>
                    <span class="badge badge-warning"> <x-heroicon-m-cog-8-tooth
                            style="width: 1rem; height:1rem; color:#edab39" />CUD Operations</span>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><x-heroicon-m-information-circle style="width: 2rem; height:2rem" />
                    </div>
                    <h3>Halaman About</h3>
                    <p>Informasi lengkap tentang developer dan website untuk transparansi dan dokumentasi yang
                        komprehensif.</p>
                    <span class="badge badge-gray"> <x-heroicon-m-document style="width: 1rem; height:1rem; color:#edab39" />
                        Documentation</span>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <x-heroicon-m-chart-bar-square style="width: 1.5rem; height:1.5rem" />
                    </div>
                    <h3>Dashboard Analytics (Additional)</h3>
                    <p>Dashboard interaktif yang menampilkan analitik dan statistik lengkap tentang arsip surat dengan
                        visualisasi menarik.</p>
                    <span class="badge badge-info"> <x-heroicon-m-presentation-chart-line
                            style="width: 1rem; height:1rem; color:#edab39" /> Analytics</span>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <x-heroicon-m-users style="width: 2rem; height:2rem" />
                    </div>
                    <h3>Manajemen Pengguna (Additional)</h3>
                    <p>Sistem pengelolaan pengguna lengkap dengan fitur Create, Read, Update, Delete serta fitur
                        pencarian.</p>
                    <span class="badge badge-primary"><x-heroicon-m-user style="width: 1rem; height:1rem; color:#edab39" /> User
                        Management</span>
                </div>

            </div>

            <!-- Scenario Section -->
            <div class="scenario-section">
                <div class="scenario-header">
                    <div class="scenario-icon"><x-heroicon-m-star style="width: 2rem; height:2rem; color:#edab39" />
                    </div>
                    <h3>Skenario dan Latar Belakang</h3>
                </div>

                <div class="scenario-text">
                    <p>Pada suatu ketika, sebuah kelurahan yaitu desa Karangduren yang berada di kecamatan Pakisaji
                        membutuhkan sebuah aplikasi yang dapat mengarsipkan surat-surat resmi yang pernah dibuat oleh
                        petugas di kelurahan tersebut. Pak Syaiful selaku pejabat sekdes ingin agar aplikasi ini
                        nantinya bisa menyimpan dan menampilkan kembali surat-surat resmi yang dientrikan dalam bentuk
                        PDF.</p>

                    <p>Jadi setiap kali perangkat desa menerbitkan sebuah surat, maka nantinya surat tersebut akan
                        terlebih dahulu dipindai (scan) dalam format PDF. Setelah itu, petugas akan meng-upload file
                        hasil scan tersebut ke sistem. Di kemudian hari, ketika surat tersebut dibutuhkan, maka
                        perangkat desa tinggal membuka aplikasi, lalu melakukan pencarian berdasarkan judul surat
                        tersebut.</p>

                    <p>Jika surat yang dicari memang pernah disimpan di sistem, maka pengguna akan dapat mengunduh file
                        tersebut. Aplikasi ini dikembangkan untuk memenuhi kebutuhan tersebut dengan interface yang
                        user-friendly dan fitur yang lengkap untuk mendukung digitalisasi administrasi desa.</p>
                </div>

                <!-- Key Benefits -->
                <div class="benefits-section">
                    <h4><x-heroicon-m-sparkles style="width: 2rem; height:2rem; color:#a2884b;" /> Manfaat Utama</h4>
                    <div class="benefits-grid">
                        <div class="benefit-item">
                            <span class="badge badge-success benefit-badge"> <x-heroicon-m-document-check
                                    style="width: 1rem; height:1rem; color:#edab39" /> Digitalisasi Arsip</span>
                        </div>
                        <div class="benefit-item">
                            <span class="badge badge-success benefit-badge"><x-heroicon-m-magnifying-glass
                                    style="width: 1rem; height:1rem; color:#edab39" /> Pencarian Cepat</span>
                        </div>
                        <div class="benefit-item">
                            <span class="badge badge-success benefit-badge"><x-heroicon-m-shield-check
                                    style="width: 1rem; height:1rem; color:#edab39" /> Keamanan Data</span>
                        </div>
                        <div class="benefit-item">
                            <span class="badge badge-success benefit-badge"><x-heroicon-m-folder-arrow-down
                                    style="width: 1rem; height:1rem; color:#edab39" /> Download PDF</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-filament::section>
</x-filament-panels::page>
