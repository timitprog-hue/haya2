<!-- HERO SECTION -->
<section id="services" class="hero-section py-5 py-lg-6 reveal-scroll">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-7">
                <div class="hero-kicker mb-3">
                    <span class="hero-kicker-dot"></span>
                    <span class="lang-id">Layanan Kami</span>
                    <span class="lang-en">Our Services</span>
                </div>
                <h1 class="hero-title display-5 fw-bold mb-3">
                    <span class="lang-id">
                        Layanan digital &amp; otomasi<br />
                        untuk mendukung operasi industri Anda.
                    </span>
                    <span class="lang-en">
                        Digital and automation services<br />
                        to support your industrial operations.
                    </span>
                </h1>
                <p class="hero-subtitle fs-5 mb-0">
                    <span class="lang-id">
                        Dari website company profile hingga sistem otomasi mesin pabrik,
                        kami menyediakan layanan end-to-end yang bisa disesuaikan
                        dengan proses bisnis dan infrastruktur yang sudah Anda miliki.
                    </span>
                    <span class="lang-en">
                        From company profile websites to factory machine automation systems,
                        we provide end-to-end services tailored to your business processes
                        and existing infrastructure.
                    </span>
                </p>
            </div>

            <div class="col-lg-5">
                <div class="glass-card p-4 reveal-scroll animate-delay-1">
                    <span class="badge-soft mb-3 d-inline-block">
                        <span class="lang-id">Ringkasan Layanan</span>
                        <span class="lang-en">Service Overview</span>
                    </span>
                    <p class="text-muted small mb-3">
                        <span class="lang-id">
                            Kami membantu menghubungkan kebutuhan di lantai produksi, gudang,
                            dan kantor dengan sistem digital yang terintegrasi.
                        </span>
                        <span class="lang-en">
                            We help bridge the needs of production floors, warehouses,
                            and offices with integrated digital systems.
                        </span>
                    </p>
                    <ul class="small text-muted mb-0 ps-3">
                        <li>
                            <span class="lang-id">Website &amp; aplikasi web untuk perusahaan</span>
                            <span class="lang-en">Corporate websites &amp; web applications</span>
                        </li>
                        <li>
                            <span class="lang-id">Dashboard operasional &amp; monitoring realtime</span>
                            <span class="lang-en">Operational dashboards &amp; realtime monitoring</span>
                        </li>
                        <li>
                            <span class="lang-id">Pemrograman PLC &amp; integrasi mesin industri</span>
                            <span class="lang-en">PLC programming &amp; industrial machine integration</span>
                        </li>
                        <li>
                            <span class="lang-id">IoT &amp; sistem monitoring berbasis sensor</span>
                            <span class="lang-en">IoT &amp; sensor-based monitoring systems</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mb-5">

    @php
        $services = [
            [
                'title_id'       => 'Website Company Profile',
                'title_en'       => 'Company Profile Website',
                'desc_id'        => 'Pembuatan website profesional sebagai representasi digital perusahaan Anda. Modern, cepat, dan SEO-friendly.',
                'desc_en'        => "Development of a professional website as your company's digital presence. Modern, fast, and SEO-friendly.",
                'badge_text_id'  => 'Branding',
                'badge_text_en'  => 'Branding',
                'badge_class'    => 'bg-primary-subtle border border-primary text-primary',
            ],
            [
                'title_id'       => 'Aplikasi Web & Dashboard',
                'title_en'       => 'Web Applications & Dashboards',
                'desc_id'        => 'Sistem internal seperti absensi, QC, produksi, gudang, inventori, hingga dashboard analitik real-time.',
                'desc_en'        => 'Internal systems such as attendance, QC, production, warehouse, inventory, and real-time analytic dashboards.',
                'badge_text_id'  => 'Efisiensi',
                'badge_text_en'  => 'Efficiency',
                'badge_class'    => 'bg-success-subtle border border-success text-success',
            ],
            [
                'title_id'       => 'Pemrograman Mesin Industri',
                'title_en'       => 'Industrial Machine Programming',
                'desc_id'        => 'Integrasi software dengan mesin pabrik, pengendalian motor, sensor, dan otomatisasi proses industri.',
                'desc_en'        => 'Software integration with factory machines, motor control, sensors, and industrial process automation.',
                'badge_text_id'  => 'Industri',
                'badge_text_en'  => 'Industrial',
                'badge_class'    => 'bg-warning-subtle border border-warning text-warning',
            ],
            [
                'title_id'       => 'PLC Programming & Automation',
                'title_en'       => 'PLC Programming & Automation',
                'desc_id'        => 'Konfigurasi dan pemrograman PLC (Mitsubishi, Omron, Siemens), HMI, troubleshooting, dan integrasi mesin industri.',
                'desc_en'        => 'Configuration and programming of PLCs (Mitsubishi, Omron, Siemens), HMI, troubleshooting, and industrial machine integration.',
                'badge_text_id'  => 'Automasi',
                'badge_text_en'  => 'Automation',
                'badge_class'    => 'bg-danger-subtle border border-danger text-danger',
            ],
            [
                'title_id'       => 'IoT Development',
                'title_en'       => 'IoT Development',
                'desc_id'        => 'Pengembangan sistem IoT berbasis ESP32, Arduino, Raspberry Pi untuk monitoring suhu, mesin, timer, hingga alert sistem.',
                'desc_en'        => 'Development of IoT systems using ESP32, Arduino, Raspberry Pi for temperature, machine, timer monitoring, and alert systems.',
                'badge_text_id'  => 'Industri 4.0',
                'badge_text_en'  => 'Industry 4.0',
                'badge_class'    => 'bg-secondary-subtle border border-secondary text-secondary',
            ],
        ];

        $industries = [
            [
                'name_id' => 'Pabrik manufaktur & perakitan',
                'name_en' => 'Manufacturing & assembly plants',
            ],
            [
                'name_id' => 'Industri makanan & minuman',
                'name_en' => 'Food & beverage industry',
            ],
            [
                'name_id' => 'Gudang, logistik & distribusi',
                'name_en' => 'Warehousing, logistics & distribution',
            ],
            [
                'name_id' => 'Workshop & bengkel produksi',
                'name_en' => 'Workshops & production shops',
            ],
            [
                'name_id' => 'Perusahaan jasa dengan kebutuhan otomasi',
                'name_en' => 'Service companies with automation needs',
            ],
            [
                'name_id' => 'UKM yang ingin naik kelas dengan digitalisasi',
                'name_en' => 'SMEs looking to level up through digitalization',
            ],
        ];
    @endphp

    <!-- LAYANAN UTAMA (dynamic) -->
    <section class="mb-5 reveal-scroll">
        <h2 class="h3 mb-3">
            <span class="lang-id">Layanan Utama</span>
            <span class="lang-en">Core Services</span>
        </h2>
        <p class="text-muted small mb-4">
            <span class="lang-id">
                Berikut beberapa layanan yang paling sering kami kerjakan untuk klien,
                khususnya di dunia industri, manufaktur, dan operasional.
            </span>
            <span class="lang-en">
                Here are some of the services we most frequently deliver for clients,
                especially in industrial, manufacturing, and operational environments.
            </span>
        </p>

        <div class="row g-4">
            @foreach ($services as $service)
                <div class="col-md-6 col-lg-4">
                    <div class="glass-card hover-lift h-100 p-4">
                        <h5 class="mb-2">
                            <span class="lang-id">{{ $service['title_id'] }}</span>
                            <span class="lang-en">{{ $service['title_en'] }}</span>
                        </h5>

                        <p class="text-muted small mb-3">
                            <span class="lang-id">{{ $service['desc_id'] }}</span>
                            <span class="lang-en">{{ $service['desc_en'] }}</span>
                        </p>

                        <span class="badge {{ $service['badge_class'] }}">
                            <span class="lang-id">{{ $service['badge_text_id'] }}</span>
                            <span class="lang-en">{{ $service['badge_text_en'] }}</span>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- INDUSTRI YANG DILAYANI -->
    <section class="mb-5 reveal-scroll animate-delay-1">
        <h2 class="h3 mb-3">
            <span class="lang-id">Kami Melayani Industri</span>
            <span class="lang-en">Industries We Serve</span>
        </h2>
        <p class="text-muted small mb-4">
            <span class="lang-id">
                Layanan kami dirancang untuk menjembatani kebutuhan teknis dan operasional
                di berbagai jenis industri berikut:
            </span>
            <span class="lang-en">
                Our services are designed to bridge technical and operational needs
                across the following types of industries:
            </span>
        </p>

        <div class="row g-3">
            @foreach ($industries as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="glass-card hover-lift p-3 h-100 d-flex align-items-center">
                        <span class="text-muted small">
                            <span class="lang-id">{{ $item['name_id'] }}</span>
                            <span class="lang-en">{{ $item['name_en'] }}</span>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
