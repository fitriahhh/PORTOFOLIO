<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitriah — Web Developer</title>
    <!-- <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle cx=%2250%22 cy=%2250%22 r=%2240%22 fill=%22%23D9A05B%22/></svg>"> -->

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&amp;family=Space+Grotesk:wght@500;700&amp;display=swap" rel="stylesheet">

    <script>
        // Token desain: base hijau forest gelap + aksen gold
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accent: '#D9A05B', // warm gold - aksen, kontras dengan bg gelap
                        bg:     '#0F1A07', // deep forest green - background utama
                        bg2:    '#16240C', // sedikit lebih terang - untuk hover card
                        bdr:    '#26321A', // garis pembatas
                        ink:    '#F2F0E6', // off-white - teks utama
                        mute:   '#8A9078', // hijau pucat - teks sekunder
                    },
                    fontFamily: {
                        display: ['"Space Grotesk"', 'sans-serif'],
                        body:    ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; -webkit-font-smoothing: antialiased; }

        /* Watermark teks raksasa di hero - butuh CSS karena pakai text-stroke & clamp */
        .hero-bg-text {
            position: absolute; top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(120px, 20vw, 260px);
            font-weight: 700;
            letter-spacing: -.02em;
            color: transparent;
            -webkit-text-stroke: 1px #26321A;
            user-select: none;
            white-space: nowrap;
            pointer-events: none;
        }
        /* Nama hero - butuh clamp untuk ukuran responsive yang halus */
        .hero-name {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(52px, 8vw, 96px);
            font-weight: 700;
            line-height: .95;
            letter-spacing: -.03em;
        }
        /* Kursor berkedip di sebelah nama yang diketik */
        .cursor {
            display: inline-block;
            width: 3px; height: .85em;
            background: #D9A05B;
            vertical-align: middle;
            margin-left: 3px;
            animation: blink 1s step-end infinite;
        }
        @keyframes blink { 50% { opacity: 0; } }

        /* Skill and Institution Icons - Match Mute Gold on default and Accent Gold on Hover */
        .skill-icon {
            filter: invert(61%) sepia(10%) saturate(410%) hue-rotate(42deg) brightness(94%) contrast(90%);
            transition: filter 0.3s ease;
        }
        .group:hover .skill-icon {
            filter: invert(76%) sepia(35%) saturate(762%) hue-rotate(352deg) brightness(91%) contrast(88%);
        }

        @media (prefers-reduced-motion: reduce) {
            * { animation: none !important; transition: none !important; }
        }
    </style>
</head>
<body class="bg-bg text-ink text-[15px] leading-[1.7]">

    <!-- ── NAVBAR ── -->
    <nav class="fixed top-0 left-0 right-0 z-50
                flex justify-between items-center
                px-12 py-[22px]
                border-b border-bdr
                bg-[rgba(15,26,7,0.92)] backdrop-blur-md">

        <a href="#hero" class="font-display font-bold text-[18px] tracking-[.04em] text-accent no-underline">
            FITRIAH
        </a>

        <ul class="flex gap-9 list-none flex-wrap justify-end">
            <li><a href="#about"      class="text-mute no-underline text-[13px] tracking-[.06em] uppercase transition-colors duration-200 hover:text-ink">Tentang</a></li>
            <li><a href="#skill"      class="text-mute no-underline text-[13px] tracking-[.06em] uppercase transition-colors duration-200 hover:text-ink">Skill</a></li>
            <li><a href="#project"    class="text-mute no-underline text-[13px] tracking-[.06em] uppercase transition-colors duration-200 hover:text-ink">Project</a></li>
            <li><a href="#pengalaman" class="text-mute no-underline text-[13px] tracking-[.06em] uppercase transition-colors duration-200 hover:text-ink">Pengalaman</a></li>
            <li><a href="#kontak"     class="text-mute no-underline text-[13px] tracking-[.06em] uppercase transition-colors duration-200 hover:text-ink">Kontak</a></li>
        </ul>
    </nav>

    <!-- ── HERO ── -->
    <section id="hero" class="relative min-h-screen flex items-end px-12 pt-24 pb-20 border-b border-bdr overflow-hidden">

        <!-- Watermark teks raksasa di belakang -->
        <div class="hero-bg-text" aria-hidden="true">FITRIAH</div>

        <div class="relative z-10 max-w-3xl">
            <div class="inline-block text-[11px] tracking-[.14em] uppercase text-accent border border-accent px-3 py-1 rounded-sm mb-7">
                Web Developer · Pasuruan, Jawa Timur
            </div>

            <h1 class="hero-name text-ink mb-6">
                Halo, saya<br>
                <span class="text-accent" id="typed-name"></span><span class="cursor"></span>
            </h1>

            <p class="text-mute text-[16px] max-w-[480px] mb-10">
                Saya membangun aplikasi web yang fungsional dan mudah digunakan — dari backend Laravel sampai tampilan antarmuka yang bersih.
            </p>

            <div class="flex gap-4 flex-wrap">
                <a href="#project" class="inline-block bg-accent text-bg font-semibold text-[13px] tracking-[.06em] uppercase px-7 py-[14px] no-underline transition-opacity duration-200 hover:opacity-80">
                    Lihat Project
                </a>
                <a href="#kontak" class="inline-block border border-bdr text-mute text-[13px] tracking-[.06em] uppercase px-7 py-[14px] no-underline transition-colors duration-200 hover:border-mute hover:text-ink">
                    Hubungi Saya
                </a>
            </div>
        </div>

        <span class="absolute right-12 bottom-20 text-[11px] tracking-[.10em] uppercase text-mute [writing-mode:vertical-rl] hidden md:block">
            Pasuruan · Indonesia
        </span>
    </section>

    <!-- ── TENTANG ── -->
    <section id="about" class="px-12 py-24 border-b border-bdr">
        <div class="flex items-baseline gap-4 mb-14">
            <span class="text-[11px] tracking-[.14em] uppercase text-accent">01</span>
            <h2 class="font-display text-[clamp(28px,4vw,42px)] font-bold tracking-tight text-ink">Tentang Saya</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-[1fr_2fr] gap-16 md:gap-20 items-start">
            <div class="flex flex-row flex-wrap md:flex-col gap-8">
                <div>
                    <div class="font-display text-[52px] font-bold text-accent leading-none">3+</div>
                    <div class="text-[13px] text-mute mt-1">Tahun pengalaman</div>
                </div>
                <div>
                    <div class="font-display text-[52px] font-bold text-accent leading-none">4+</div>
                    <div class="text-[13px] text-mute mt-1">Project selesai</div>
                </div>
                <div>
                    <div class="font-display text-[52px] font-bold text-accent leading-none">6</div>
                    <div class="text-[13px] text-mute mt-1">Teknologi dikuasai</div>
                </div>
            </div>

            <div class="text-[#C7CCB8] text-[16px] leading-[1.85]">
                <p>
                    Saya web developer dengan lebih dari tiga tahun pengalaman membangun aplikasi berbasis Laravel dan JavaScript. Saya menyukai proses di mana sebuah masalah bertransformasi menjadi solusi digital yang benar-benar bisa dipakai orang.
                </p>
                <p class="mt-5">
                    Di luar kode, saya aktif mengikuti komunitas developer dan terus memperbarui wawasan tentang praktik terbaik dalam pengembangan web. Saya percaya kode yang baik bukan hanya yang bekerja, tapi juga yang mudah dibaca dan dipelihara.
                </p>
            </div>
        </div>
    </section>

    <!-- ── SKILL ── -->
    <section id="skill" class="px-12 py-24 border-b border-bdr">
        <div class="flex items-baseline gap-4 mb-14">
            <span class="text-[11px] tracking-[.14em] uppercase text-accent">02</span>
            <h2 class="font-display text-[clamp(28px,4vw,42px)] font-bold tracking-tight text-ink">Skill</h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 max-w-5xl">
            <!-- Card 1: HTML & CSS -->
            <div class="group flex flex-col items-center justify-center p-6 bg-bg2 border border-bdr rounded-lg transition-all duration-300 hover:border-accent hover:shadow-[0_0_20px_rgba(217,160,91,0.03)]">
                <!-- Logo Container -->
                <div class="flex gap-3 mb-4">
                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/html5.svg" class="w-8 h-8 skill-icon" alt="HTML5">
                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/css3.svg" class="w-8 h-8 skill-icon" alt="CSS3">
                </div>
                <span class="font-display font-medium text-[13.5px] text-ink group-hover:text-accent transition-colors duration-300">HTML &amp; CSS</span>
            </div>

            <!-- Card 2: JavaScript -->
            <div class="group flex flex-col items-center justify-center p-6 bg-bg2 border border-bdr rounded-lg transition-all duration-300 hover:border-accent hover:shadow-[0_0_20px_rgba(217,160,91,0.03)]">
                <!-- Logo Container -->
                <div class="mb-4">
                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/javascript.svg" class="w-8 h-8 skill-icon" alt="JavaScript">
                </div>
                <span class="font-display font-medium text-[13.5px] text-ink group-hover:text-accent transition-colors duration-300">JavaScript</span>
            </div>

            <!-- Card 3: Laravel / PHP -->
            <div class="group flex flex-col items-center justify-center p-6 bg-bg2 border border-bdr rounded-lg transition-all duration-300 hover:border-accent hover:shadow-[0_0_20px_rgba(217,160,91,0.03)]">
                <!-- Logo Container -->
                <div class="flex gap-3 mb-4">
                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/php.svg" class="w-8 h-8 skill-icon" alt="PHP">
                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/laravel.svg" class="w-8 h-8 skill-icon" alt="Laravel">
                </div>
                <span class="font-display font-medium text-[13.5px] text-ink group-hover:text-accent transition-colors duration-300">Laravel / PHP</span>
            </div>

            <!-- Card 4: MySQL -->
            <div class="group flex flex-col items-center justify-center p-6 bg-bg2 border border-bdr rounded-lg transition-all duration-300 hover:border-accent hover:shadow-[0_0_20px_rgba(217,160,91,0.03)]">
                <!-- Logo Container -->
                <div class="mb-4">
                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/mysql.svg" class="w-8 h-8 skill-icon" alt="MySQL">
                </div>
                <span class="font-display font-medium text-[13.5px] text-ink group-hover:text-accent transition-colors duration-300">MySQL</span>
            </div>

            <!-- Card 5: Tailwind CSS -->
            <div class="group flex flex-col items-center justify-center p-6 bg-bg2 border border-bdr rounded-lg transition-all duration-300 hover:border-accent hover:shadow-[0_0_20px_rgba(217,160,91,0.03)]">
                <!-- Logo Container -->
                <div class="mb-4">
                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/tailwindcss.svg" class="w-8 h-8 skill-icon" alt="Tailwind CSS">
                </div>
                <span class="font-display font-medium text-[13.5px] text-ink group-hover:text-accent transition-colors duration-300">Tailwind CSS</span>
            </div>

            <!-- Card 6: Git & GitHub -->
            <div class="group flex flex-col items-center justify-center p-6 bg-bg2 border border-bdr rounded-lg transition-all duration-300 hover:border-accent hover:shadow-[0_0_20px_rgba(217,160,91,0.03)]">
                <!-- Logo Container -->
                <div class="flex gap-3 mb-4">
                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/git.svg" class="w-8 h-8 skill-icon" alt="Git">
                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/github.svg" class="w-8 h-8 skill-icon" alt="GitHub">
                </div>
                <span class="font-display font-medium text-[13.5px] text-ink group-hover:text-accent transition-colors duration-300">Git &amp; GitHub</span>
            </div>
        </div>
    </section>

    <!-- ── PROJECT ── -->
    <section id="project" class="px-12 py-24 border-b border-bdr">
        <div class="flex items-baseline gap-4 mb-14">
            <span class="text-[11px] tracking-[.14em] uppercase text-accent">03</span>
            <h2 class="font-display text-[clamp(28px,4vw,42px)] font-bold tracking-tight text-ink">Project</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1: Membership Ayam Bakar Pak D -->
            <div class="group flex flex-col bg-bg2 border border-bdr rounded-lg overflow-hidden transition-all duration-300 hover:border-accent hover:shadow-[0_0_30px_rgba(217,160,91,0.05)]">
                <!-- Image Wrapper -->
                <div class="relative aspect-[16/10] overflow-hidden bg-bg border-b border-bdr flex items-center justify-center p-4">
                    <img src="{{ asset('images/projects/membership-ayam-bakar.png') }}" 
                         alt="Membership Ayam Bakar Pak D" 
                         class="max-w-full max-h-full object-contain rounded-md transition-transform duration-500 group-hover:scale-[1.02]"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=800&q=80';">
                </div>
                <!-- Content -->
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-5">
                        <div class="flex flex-wrap gap-2">
                            <span class="text-[10px] tracking-[.12em] uppercase font-semibold text-accent border border-accent/20 bg-[rgba(217,160,91,0.03)] px-2 py-0.5 rounded-sm">Laravel</span>
                            <span class="text-[10px] tracking-[.12em] uppercase font-semibold text-accent border border-accent/20 bg-[rgba(217,160,91,0.03)] px-2 py-0.5 rounded-sm">Bootstrap</span>
                            <span class="text-[10px] tracking-[.12em] uppercase font-semibold text-accent border border-accent/20 bg-[rgba(217,160,91,0.03)] px-2 py-0.5 rounded-sm">MySQL</span>
                        </div>
                    </div>
                    <h3 class="font-display text-[22px] font-bold tracking-tight mb-3 text-ink group-hover:text-accent transition-colors duration-200">
                        Membership Ayam Bakar Pak D
                    </h3>
                    <p class="text-mute text-[13.5px] leading-[1.7] mb-6 flex-grow">
                        Aplikasi web terintegrasi untuk mengelola sistem keanggotaan pelanggan di outlet kuliner Ayam Bakar Pak D. Memudahkan admin mengelola database customer, memvalidasi nota belanja untuk pengisian poin otomatis, memproses penukaran item promo, dan melacak riwayat poin.
                    </p>
                    <div class="flex gap-4 pt-4 border-t border-bdr/50 text-[13px]">
                        <span class="text-mute flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-accent animate-pulse"></span>
                            Proyek Selesai
                        </span>
                    </div>
                </div>
            </div>

            <!-- Project 2: Company Profile Ayam Bakar Pak D -->
            <div class="group flex flex-col bg-bg2 border border-bdr rounded-lg overflow-hidden transition-all duration-300 hover:border-accent hover:shadow-[0_0_30px_rgba(217,160,91,0.05)]">
                <!-- Image Wrapper -->
                <div class="relative aspect-[16/10] overflow-hidden bg-bg border-b border-bdr flex items-center justify-center p-4">
                    <img src="{{ asset('images/projects/landing-page-ayam-bakar.png') }}" 
                         alt="Company Profile Ayam Bakar Pak D" 
                         class="max-w-full max-h-full object-contain rounded-md transition-transform duration-500 group-hover:scale-[1.02]"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80';">
                </div>
                <!-- Content -->
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-5">
                        <div class="flex flex-wrap gap-2">
                            <span class="text-[10px] tracking-[.12em] uppercase font-semibold text-accent border border-accent/20 bg-[rgba(217,160,91,0.03)] px-2 py-0.5 rounded-sm">WordPress</span>
                            <span class="text-[10px] tracking-[.12em] uppercase font-semibold text-accent border border-accent/20 bg-[rgba(217,160,91,0.03)] px-2 py-0.5 rounded-sm">CSS</span>
                            <span class="text-[10px] tracking-[.12em] uppercase font-semibold text-accent border border-accent/20 bg-[rgba(217,160,91,0.03)] px-2 py-0.5 rounded-sm">PHP</span>
                        </div>
                    </div>
                    <h3 class="font-display text-[22px] font-bold tracking-tight mb-3 text-ink group-hover:text-accent transition-colors duration-200">
                        Company Profile Ayam Bakar Pak D
                    </h3>
                    <p class="text-mute text-[13.5px] leading-[1.7] mb-6 flex-grow">
                        Pengembangan website profil perusahaan resmi untuk brand kuliner Ayam Bakar Pak D. Menampilkan katalog menu interaktif, paket nasi kotak, peta lokasi seluruh cabang, informasi kemitraan kemitraan/franchise, lowongan kerja, serta galeri testimoni pelanggan secara dinamis.
                    </p>
                    <div class="flex gap-4 pt-4 border-t border-bdr/50 text-[13px]">
                        <span class="text-mute flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-accent animate-pulse"></span>
                            Proyek Selesai
                        </span>
                    </div>
                </div>
            </div>

            <!-- Project 3: Portal Dikdasmen PNF Sidoarjo -->
            <div class="group flex flex-col bg-bg2 border border-bdr rounded-lg overflow-hidden transition-all duration-300 hover:border-accent hover:shadow-[0_0_30px_rgba(217,160,91,0.05)]">
                <!-- Image Wrapper -->
                <div class="relative aspect-[16/10] overflow-hidden bg-bg border-b border-bdr flex items-center justify-center p-4">
                    <img src="{{ asset('images/projects/dikdasmen-sidoarjo.png') }}" 
                         alt="Portal Dikdasmen PNF Sidoarjo" 
                         class="max-w-full max-h-full object-contain rounded-md transition-transform duration-500 group-hover:scale-[1.02]"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=800&q=80';">
                </div>
                <!-- Content -->
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-5">
                        <div class="flex flex-wrap gap-2">
                            <span class="text-[10px] tracking-[.12em] uppercase font-semibold text-accent border border-accent/20 bg-[rgba(217,160,91,0.03)] px-2 py-0.5 rounded-sm">HTML</span>
                            <span class="text-[10px] tracking-[.12em] uppercase font-semibold text-accent border border-accent/20 bg-[rgba(217,160,91,0.03)] px-2 py-0.5 rounded-sm">CSS</span>
                            <span class="text-[10px] tracking-[.12em] uppercase font-semibold text-accent border border-accent/20 bg-[rgba(217,160,91,0.03)] px-2 py-0.5 rounded-sm">Bootstrap</span>
                        </div>
                    </div>
                    <h3 class="font-display text-[22px] font-bold tracking-tight mb-3 text-ink group-hover:text-accent transition-colors duration-200">
                        Portal Dikdasmen PNF Sidoarjo
                    </h3>
                    <p class="text-mute text-[13.5px] leading-[1.7] mb-6 flex-grow">
                        Pengembangan website portal resmi untuk Majelis Pendidikan Dasar dan Menengah (DIKDASMEN) PNF Sidoarjo. Berfungsi sebagai pusat informasi publik mengenai profil lembaga, kegiatan sekolah Muhammadiyah, penerbitan blog berita, dan penyajian data statistik pendidikan secara interaktif.
                    </p>
                    <div class="flex gap-4 pt-4 border-t border-bdr/50 text-[13px]">
                        <span class="text-mute flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-accent animate-pulse"></span>
                            Proyek Selesai
                        </span>
                    </div>
                </div>
            </div>

            <!-- Project 4: Web Portfolio Personal -->
            <div class="group flex flex-col bg-bg2 border border-bdr rounded-lg overflow-hidden transition-all duration-300 hover:border-accent hover:shadow-[0_0_30px_rgba(217,160,91,0.05)]">
                <!-- Image Wrapper -->
                <div class="relative aspect-[16/10] overflow-hidden bg-bg border-b border-bdr flex items-center justify-center p-4">
                    <img src="{{ asset('images/projects/portfolio-personal.png') }}" 
                         alt="Web Portfolio Personal" 
                         class="max-w-full max-h-full object-contain rounded-md transition-transform duration-500 group-hover:scale-[1.02]"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=800&q=80';">
                </div>
                <!-- Content -->
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-5">
                        <div class="flex flex-wrap gap-2">
                            <span class="text-[10px] tracking-[.12em] uppercase font-semibold text-accent border border-accent/20 bg-[rgba(217,160,91,0.03)] px-2 py-0.5 rounded-sm">Laravel</span>
                            <span class="text-[10px] tracking-[.12em] uppercase font-semibold text-accent border border-accent/20 bg-[rgba(217,160,91,0.03)] px-2 py-0.5 rounded-sm">Tailwind CSS</span>
                        </div>
                    </div>
                    <h3 class="font-display text-[22px] font-bold tracking-tight mb-3 text-ink group-hover:text-accent transition-colors duration-200">
                        Web Portfolio Personal
                    </h3>
                    <p class="text-mute text-[13.5px] leading-[1.7] mb-6 flex-grow">
                        Desain dan pengembangan website portofolio pribadi (personal branding) berkinerja tinggi. Dirancang dengan estetika minimalis modern bernuansa forest green & gold, menggunakan Laravel untuk pengelolaan rute, dan Tailwind CSS untuk tampilan yang sepenuhnya responsif dan dinamis.
                    </p>
                    <div class="flex gap-4 pt-4 border-t border-bdr/50 text-[13px]">
                        <span class="text-mute flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-accent animate-pulse"></span>
                            Proyek Selesai
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── PENGALAMAN ── -->
    <section id="pengalaman" class="px-12 py-24 border-b border-bdr">
        <div class="flex items-baseline gap-4 mb-14">
            <span class="text-[11px] tracking-[.14em] uppercase text-accent">04</span>
            <h2 class="font-display text-[clamp(28px,4vw,42px)] font-bold tracking-tight text-ink">Pengalaman</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Experience Item 1 -->
            <div class="flex items-center gap-5 p-6 bg-bg2 border border-bdr rounded-lg transition-all duration-300 hover:border-accent hover:shadow-[0_0_20px_rgba(217,160,91,0.03)]">
                <div class="flex-shrink-0 w-14 h-14 rounded-md bg-bg border border-bdr flex items-center justify-center overflow-hidden p-2">
                    <img src="{{ asset('images/experience/magang.png') }}" 
                         class="max-w-full max-h-full object-contain" 
                         alt="Logo Magang"
                         onerror="this.onerror=null; this.src='https://unpkg.com/lucide-static/icons/briefcase.svg'; this.className='w-8 h-8 skill-icon';">
                </div>
                <div>
                    <span class="text-[10px] tracking-[.10em] uppercase text-accent font-semibold">November 2025 — Mei 2026</span>
                    <h3 class="font-display text-[17px] font-bold text-ink mt-1">Web Developer (Magang)</h3>
                    <p class="text-mute text-[13px] mt-0.5">PT. Marsudi Utomo (Ayam Bakar PakD)</p>
                </div>
            </div>

            <!-- Experience Item 2 -->
            <div class="flex items-center gap-5 p-6 bg-bg2 border border-bdr rounded-lg transition-all duration-300 hover:border-accent hover:shadow-[0_0_20px_rgba(217,160,91,0.03)]">
                <div class="flex-shrink-0 w-14 h-14 rounded-md bg-bg border border-bdr flex items-center justify-center overflow-hidden p-2">
                    <img src="{{ asset('images/experience/bootcamp.png') }}" 
                         class="max-w-full max-h-full object-contain" 
                         alt="Logo Bootcamp"
                         onerror="this.onerror=null; this.src='https://unpkg.com/lucide-static/icons/code.svg'; this.className='w-8 h-8 skill-icon';">
                </div>
                <div>
                    <span class="text-[10px] tracking-[.10em] uppercase text-accent font-semibold">23 juni 2026 & 26 juni 2026</span>
                    <h3 class="font-display text-[17px] font-bold text-ink mt-1">Bootcamp Full Stack</h3>
                    <p class="text-mute text-[13px] mt-0.5">Bootcamp HariSenin</p>
                </div>
            </div>

            <!-- Experience Item 3 -->
            <div class="flex items-center gap-5 p-6 bg-bg2 border border-bdr rounded-lg transition-all duration-300 hover:border-accent hover:shadow-[0_0_20px_rgba(217,160,91,0.03)]">
                <div class="flex-shrink-0 w-14 h-14 rounded-md bg-bg border border-bdr flex items-center justify-center overflow-hidden p-2">
                    <img src="{{ asset('images/experience/magang.png') }}" 
                         class="max-w-full max-h-full object-contain" 
                         alt="Logo Magang"
                         onerror="this.onerror=null; this.src='https://unpkg.com/lucide-static/icons/briefcase.svg'; this.className='w-8 h-8 skill-icon';">
                </div>
                <div>
                    <span class="text-[10px] tracking-[.10em] uppercase text-accent font-semibold">November 2025 — Mei 2026</span>
                    <h3 class="font-display text-[17px] font-bold text-ink mt-1">Web Developer (Magang)</h3>
                    <p class="text-mute text-[13px] mt-0.5">Dikdasmen Sidoarjo</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── KONTAK ── -->
    <section id="kontak" class="px-12 py-24 border-b border-bdr flex items-center justify-between gap-10 flex-wrap">
        <div>
            <h2 class="font-display text-[clamp(36px,5vw,64px)] font-bold leading-none tracking-tight text-ink mb-4">
                Yuk<br>
                <span class="text-accent">ngobrol.</span>
            </h2>
            <p class="text-mute text-[15px]">Terbuka untuk freelance, kolaborasi, atau sekadar diskusi.</p>
        </div>

        <div class="flex gap-4">
            <a href="mailto:fitriahwork00@email.com"
               title="Email Saya"
               class="flex items-center justify-center w-14 h-14 rounded-full border border-bdr transition-all duration-200 hover:border-accent hover:bg-[rgba(217,160,91,0.06)]">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/gmail.svg" alt="Gmail" width="20" height="20" style="filter: invert(1) brightness(1.6);">
            </a>
            <a href="https://github.com/fitriahhh" target="_blank" rel="noopener"
               title="GitHub Saya"
               class="flex items-center justify-center w-14 h-14 rounded-full border border-bdr transition-all duration-200 hover:border-accent hover:bg-[rgba(217,160,91,0.06)]">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/github.svg" alt="GitHub" width="20" height="20" style="filter: invert(1) brightness(1.6);">
            </a>
            <a href="https://www.linkedin.com/in/fitriah-fitriah-7524461a9" target="_blank" rel="noopener"
               title="LinkedIn Saya"
               class="flex items-center justify-center w-14 h-14 rounded-full border border-bdr transition-all duration-200 hover:border-accent hover:bg-[rgba(217,160,91,0.06)]">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v13/icons/linkedin.svg" alt="LinkedIn" width="20" height="20" style="filter: invert(1) brightness(1.6);">
            </a>
        </div>
    </section>

    <!-- ── FOOTER ── -->
    <footer class="px-12 py-10 border-t border-bdr flex flex-col md:flex-row justify-between items-center gap-6 text-[12.5px] text-mute tracking-[.03em]">
        <div class="flex flex-col md:flex-row items-center gap-2 md:gap-4 text-center md:text-left">
            <span>&copy; {{ date('Y') }} Fitriah. All rights reserved.</span>
            <span class="hidden md:inline text-bdr/55">|</span>
            <span class="flex items-center gap-1.5">
                Membangun menggunakan 
                <span class="text-accent">Laravel</span> 
                &amp; 
                <span class="text-accent">Tailwind CSS</span>
            </span>
        </div>
        <div class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-[#22c55e] animate-pulse"></span>
            <span>Tersedia untuk Pekerjaan · Pasuruan, Jawa Timur</span>
        </div>
    </footer>

    <script>
        const target = document.getElementById('typed-name');
        const name = 'FITRIAH';
        let i = 0;
        function type() {
            if (i < name.length) {
                target.textContent += name[i++];
                setTimeout(type, 120);
            }
        }
        setTimeout(type, 600);

        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('nav ul a');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(s => {
                if (window.scrollY >= s.offsetTop - 120) current = s.id;
            });
            navLinks.forEach(a => {
                a.style.color = a.getAttribute('href') === '#' + current ? '#F2F0E6' : '';
            });
        });
    </script>
</body>
</html>