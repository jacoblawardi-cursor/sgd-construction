<?php
/**
 * Template Name: Front Page Template
 *
 * @package SGD_Construction
 */

get_header();
?>

<!-- 1. HERO SECTION -->
<section class="sgd-hero">
    <div class="sgd-hero-bg" style="background-image: url('<?php echo esc_url( SGD_THEME_URI . '/assets/images/hero-bg.jpg' ); ?>');"></div>
    <div class="sgd-hero-overlay"></div>
    <div class="sgd-container">
        <div class="sgd-hero-content">
            <div class="sgd-hero-badge">
                <i class="fa-solid fa-shield-halved"></i>
                <span>PT SUNGGIARDI PRIMA KONSTRUKSI • PROFESSIONAL CONTRACTOR</span>
            </div>
            <h1 class="sgd-hero-title">
                Membangun dengan Presisi,<br>
                <span class="sgd-text-gradient">Mewujudkan Konstruksi Masa Depan</span>
            </h1>
            <p class="sgd-hero-subtitle">
                Mitra kontraktor umum, perencanaan arsitektur, dan interior terpercaya di Indonesia. Kami menghadirkan solusi rancang bangun berkualitas tinggi dengan komitmen ketepatan waktu, efisiensi anggaran, dan standar keselamatan kerja terbaik.
            </p>
            <div class="sgd-hero-actions">
                <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin berkonsultasi mengenai rencana proyek konstruksi.') ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span data-i18n-id="Konsultasi Proyek (08116016868)" data-i18n-en="Project Consultation (WA)">Konsultasi Proyek (08116016868)</span>
                </a>
                <button type="button" class="sgd-btn sgd-btn-gold sgd-btn-lg" data-modal="profile">
                    <i class="fa-solid fa-file-pdf"></i>
                    <span data-i18n-id="Download Company Profile (PDF)" data-i18n-en="Download Company Deck (PDF)">Download Company Profile (PDF)</span>
                </button>
                <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="sgd-btn sgd-btn-outline-white sgd-btn-lg">
                    <i class="fa-solid fa-layer-group"></i>
                    <span data-i18n-id="Lihat Portofolio Proyek" data-i18n-en="View Projects Portfolio">Lihat Portofolio Proyek</span>
                </a>
            </div>
        </div>

        <!-- Floating Hero Metrics Strip -->
        <div class="sgd-hero-stats">
            <div class="sgd-stat-item">
                <div class="sgd-stat-num" data-count="15">15<span>+</span></div>
                <div class="sgd-stat-label">Tahun Pengalaman Industri</div>
            </div>
            <div class="sgd-stat-item">
                <div class="sgd-stat-num" data-count="120">120<span>+</span></div>
                <div class="sgd-stat-label">Proyek Selesai & Diserahterimakan</div>
            </div>
            <div class="sgd-stat-item">
                <div class="sgd-stat-num" data-count="99">99<span>%</span></div>
                <div class="sgd-stat-label">Tingkat Kepuasan Klien</div>
            </div>
            <div class="sgd-stat-item">
                <div class="sgd-stat-num" data-count="50">50<span>+</span></div>
                <div class="sgd-stat-label">Tenaga Ahli & Engineer Bersertifikat</div>
            </div>
        </div>
    </div>
</section>

<!-- 2. ABOUT SUMMARY SECTION -->
<section class="sgd-section sgd-section-about-summary">
    <div class="sgd-container">
        <div class="sgd-grid-2col sgd-items-center">
            <div class="sgd-about-summary-media">
                <div class="sgd-media-frame">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/about-company.jpg' ); ?>" alt="Tim Engineer SGD Construction di Lapangan" class="sgd-img-responsive">
                    <div class="sgd-experience-badge">
                        <span class="sgd-exp-number">15+</span>
                        <span class="sgd-exp-text">Years of Engineering Excellence</span>
                    </div>
                </div>
            </div>
            <div class="sgd-about-summary-text">
                <div class="sgd-section-tag">TENTANG SGD CONSTRUCTION</div>
                <h2 class="sgd-section-heading">Keahlian Teknik Terpadu untuk Hasil Bangunan Standar Tertinggi</h2>
                <p class="sgd-lead-text">
                    <strong>PT Sunggiardi Prima Konstruksi (SGD Construction)</strong> didirikan dengan satu komitmen mendasar: memberikan layanan konstruksi dan manajemen proyek yang transparan, presisi, dan dapat diandalkan oleh para pelaku bisnis maupun pemilik properti prestisius di Indonesia.
                </p>
                <div class="sgd-features-checklist">
                    <div class="sgd-checklist-item">
                        <div class="sgd-check-icon"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h4>Kualitas Material & Standar SNI Teruji</h4>
                            <p>Pemilihan material berkualitas tinggi dengan uji laboratorium berkala untuk menjamin ketahanan struktur bangunan jangka panjang.</p>
                        </div>
                    </div>
                    <div class="sgd-checklist-item">
                        <div class="sgd-check-icon"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h4>Transparansi RAB & Pengawasan Proyek Ketat</h4>
                            <p>Penyusunan Rencana Anggaran Biaya (RAB) terperinci tanpa biaya siluman, didukung laporan berkala digital mingguan.</p>
                        </div>
                    </div>
                    <div class="sgd-checklist-item">
                        <div class="sgd-check-icon"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h4>Sistem Manajemen K3 & Keselamatan Kerja</h4>
                            <p>Penerapan protokol Sistem Manajemen Keselamatan dan Kesehatan Kerja (SMK3) di setiap lini proyek.</p>
                        </div>
                    </div>
                </div>
                <div class="sgd-mt-4">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="sgd-btn sgd-btn-primary">
                        <span>Pelajari Profil Perusahaan Selengkapnya</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. CORE SERVICES SECTION -->
<section class="sgd-section sgd-section-services bg-slate">
    <div class="sgd-container">
        <div class="sgd-section-header text-center">
            <div class="sgd-section-tag">LAYANAN KAMI</div>
            <h2 class="sgd-section-heading">Layanan Komprehensif Konstruksi & Rancang Bangun</h2>
            <p class="sgd-section-subheading">Dari tahap perencanaan awal, perizinan, hingga pelaksanaan fisik dan perawatan paska serah terima.</p>
        </div>

        <div class="sgd-services-grid">
            <!-- Service 1 -->
            <div class="sgd-service-card">
                <div class="sgd-service-thumb">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-contracting.jpg' ); ?>" alt="General Contracting & Konstruksi Sipil">
                    <span class="sgd-service-number">01</span>
                </div>
                <div class="sgd-service-body">
                    <div class="sgd-service-icon"><i class="fa-solid fa-trowel-bricks"></i></div>
                    <h3>General Contracting & Sipil</h3>
                    <p>Pembangunan gedung komersial, gedung perkantoran, perumahan eksklusif, pergudangan, hingga infrastruktur sipil dengan pengawasan mutu ketat.</p>
                    <ul class="sgd-service-specs">
                        <li><i class="fa-solid fa-circle-check"></i> Bangunan Komersial & Kantor</li>
                        <li><i class="fa-solid fa-circle-check"></i> Hunian Residensial Mewah</li>
                        <li><i class="fa-solid fa-circle-check"></i> Pergudangan & Pabrik Industri</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services/#contracting' ) ); ?>" class="sgd-service-link">
                        Detail Layanan <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="sgd-service-card">
                <div class="sgd-service-thumb">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-architecture.jpg' ); ?>" alt="Desain Arsitektur & Struktur">
                    <span class="sgd-service-number">02</span>
                </div>
                <div class="sgd-service-body">
                    <div class="sgd-service-icon"><i class="fa-solid fa-compass-drafting"></i></div>
                    <h3>Desain Arsitektur & Struktur</h3>
                    <p>Perencanaan desain arsitektural mutakhir, pemodelan 3D visualisasi fotorealistik, perhitungan kalkulasi struktur SAP/ETABS berstandar gempa.</p>
                    <ul class="sgd-service-specs">
                        <li><i class="fa-solid fa-circle-check"></i> Konsep Arsitektur Modern</li>
                        <li><i class="fa-solid fa-circle-check"></i> Perhitungan Struktur & Fondasi</li>
                        <li><i class="fa-solid fa-circle-check"></i> Gambar Kerja & IMB/PBG</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services/#architecture' ) ); ?>" class="sgd-service-link">
                        Detail Layanan <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="sgd-service-card">
                <div class="sgd-service-thumb">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-interior.jpg' ); ?>" alt="Interior Fit-Out & Renovasi">
                    <span class="sgd-service-number">03</span>
                </div>
                <div class="sgd-service-body">
                    <div class="sgd-service-icon"><i class="fa-solid fa-couch"></i></div>
                    <h3>Interior Fit-Out & Renovasi</h3>
                    <p>Pengerjaan interior kustom untuk kantor korporat, retail, gerai komersial, dan hunian mewah. Termasuk kustom furniture dan tata pencahayaan.</p>
                    <ul class="sgd-service-specs">
                        <li><i class="fa-solid fa-circle-check"></i> Fit-Out Kantor Korporat</li>
                        <li><i class="fa-solid fa-circle-check"></i> Custom Built-in Cabinetry</li>
                        <li><i class="fa-solid fa-circle-check"></i> Renovasi & Re-layout Ruang</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services/#interior' ) ); ?>" class="sgd-service-link">
                        Detail Layanan <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="sgd-service-card">
                <div class="sgd-service-thumb">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-mep.jpg' ); ?>" alt="Mekanikal, Elektrikal & Plumbing">
                    <span class="sgd-service-number">04</span>
                </div>
                <div class="sgd-service-body">
                    <div class="sgd-service-icon"><i class="fa-solid fa-bolt-lightning"></i></div>
                    <h3>MEP & HVAC Engineering</h3>
                    <p>Instalasi mekanikal, elektrikal, tata udara (HVAC central/split duct), sistem pencegahan kebakaran (hydrant/sprinkler), dan smart building automation.</p>
                    <ul class="sgd-service-specs">
                        <li><i class="fa-solid fa-circle-check"></i> Sistem Kelistrikan & Genset</li>
                        <li><i class="fa-solid fa-circle-check"></i> Fire Protection & Hydrant</li>
                        <li><i class="fa-solid fa-circle-check"></i> Tata Udara HVAC & Chiller</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services/#mep' ) ); ?>" class="sgd-service-link">
                        Detail Layanan <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="sgd-service-card sgd-service-card-featured">
                <div class="sgd-service-thumb">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-care.jpg' ); ?>" alt="SGD Care: Building Maintenance">
                    <span class="sgd-service-number">05</span>
                    <div class="sgd-care-badge-overlay" title="SGD Care Unit">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/SGD CARE Horizontal.png' ); ?>" alt="SGD Care">
                    </div>
                </div>
                <div class="sgd-service-body">
                    <div class="sgd-care-logo-wrap">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/SGD CARE Horizontal.png' ); ?>" alt="SGD Care Logo" class="sgd-care-logo-horizontal">
                    </div>
                    <div class="sgd-badge-mini">SPECIAL UNIT</div>
                    <h3>SGD Care: Property Maintenance</h3>
                    <p>Unit khusus pemeliharaan berkala gedung, kantor, dan rumah tinggal. Menangani perbaikan sipil cepat, water leakage, kelistrikan, dan servis AC.</p>
                    <ul class="sgd-service-specs">
                        <li><i class="fa-solid fa-circle-check"></i> Perawatan Berkala & Kontrak Tahunan</li>
                        <li><i class="fa-solid fa-circle-check"></i> Deteksi & Perbaikan Kebocoran</li>
                        <li><i class="fa-solid fa-circle-check"></i> Tim Respon Cepat Maintenance</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services/#care' ) ); ?>" class="sgd-service-link">
                        Detail Layanan <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center sgd-mt-5">
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="sgd-btn sgd-btn-dark">
                <span>Eksplorasi Semua Detail Layanan Kami</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- 3.5 INTERACTIVE CONSTRUCTION COST ESTIMATOR -->
<section class="sgd-section sgd-section-estimator bg-white" id="estimatorSection">
    <div class="sgd-container">
        <div class="sgd-section-header text-center">
            <div class="sgd-section-tag sgd-tag-gold">ESTIMASI ANGGARAN CEPAT & TRANSPARAN</div>
            <h2 class="sgd-section-heading">Kalkulator Estimasi Biaya Konstruksi & Rancang Bangun</h2>
            <p class="sgd-section-subheading">Dapatkan gambaran awal estimasi biaya dan durasi proyek Anda secara instan dalam 3 langkah mudah sebelum konsultasi teknis mendalam bersama tim engineer SGD.</p>
        </div>

        <div class="sgd-estimator-card">
            <div class="sgd-estimator-grid">
                <!-- Left: Interactive Controls -->
                <div class="sgd-estimator-controls">
                    <!-- Step 1: Project Type -->
                    <div class="sgd-est-step">
                        <label class="sgd-est-label">
                            <span class="sgd-est-step-num">1</span>
                            <span>Pilih Kategori / Tipe Proyek:</span>
                        </label>
                        <div class="sgd-est-types-grid" id="sgdEstTypes">
                            <button type="button" class="sgd-est-type-btn active" data-type="commercial" data-rate-std="5500000" data-rate-prem="7200000" data-rate-lux="9500000" data-speed="140" aria-pressed="true">
                                <div class="sgd-est-btn-top">
                                    <i class="fa-solid fa-building"></i>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong>Gedung / Kantor</strong>
                                <small>Komersial, Ruko & Plaza</small>
                            </button>
                            <button type="button" class="sgd-est-type-btn" data-type="residential" data-rate-std="6500000" data-rate-prem="8800000" data-rate-lux="12000000" data-speed="100" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <i class="fa-solid fa-house-chimney"></i>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong>Residensial Mewah</strong>
                                <small>Rumah Tinggal & Villa</small>
                            </button>
                            <button type="button" class="sgd-est-type-btn" data-type="interior" data-rate-std="3200000" data-rate-prem="4800000" data-rate-lux="7000000" data-speed="300" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <i class="fa-solid fa-couch"></i>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong>Interior Fit-Out</strong>
                                <small>Office, Retail & Custom</small>
                            </button>
                            <button type="button" class="sgd-est-type-btn" data-type="industrial" data-rate-std="3800000" data-rate-prem="5200000" data-rate-lux="6800000" data-speed="600" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <i class="fa-solid fa-warehouse"></i>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong>Gudang / Pabrik</strong>
                                <small>Konstruksi Baja Bentang</small>
                            </button>
                            <button type="button" class="sgd-est-type-btn" data-type="care" data-rate-std="550000" data-rate-prem="950000" data-rate-lux="1400000" data-speed="800" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <i class="fa-solid fa-wrench"></i>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong>SGD Care AMC</strong>
                                <small>Maintenance Kontrak</small>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Area Slider & Quick Presets -->
                    <div class="sgd-est-step">
                        <div class="sgd-d-flex sgd-justify-between sgd-items-center sgd-mb-2">
                            <label class="sgd-est-label sgd-mb-0" for="sgdEstAreaInput">
                                <span class="sgd-est-step-num">2</span>
                                <span>Estimasi Luas Area (GFA):</span>
                            </label>
                            <div class="sgd-est-input-controls">
                                <button type="button" class="sgd-stepper-btn" id="sgdStepMinus" aria-label="Kurangi 50 m²">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <div class="sgd-est-input-wrap">
                                    <input type="number" id="sgdEstAreaInput" class="sgd-est-num-input" value="500" min="50" max="25000" step="25">
                                    <span class="sgd-est-unit">m²</span>
                                </div>
                                <button type="button" class="sgd-stepper-btn" id="sgdStepPlus" aria-label="Tambah 50 m²">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Quick Area Presets for 1-Click Selection -->
                        <div class="sgd-est-presets-bar">
                            <span class="sgd-presets-title"><i class="fa-solid fa-hand-pointer"></i> Pilihan Cepat:</span>
                            <div class="sgd-preset-pills-row" id="sgdAreaPresets">
                                <button type="button" class="sgd-preset-pill" data-area="150">150 m²</button>
                                <button type="button" class="sgd-preset-pill" data-area="350">350 m²</button>
                                <button type="button" class="sgd-preset-pill active" data-area="500">500 m²</button>
                                <button type="button" class="sgd-preset-pill" data-area="1000">1.000 m²</button>
                                <button type="button" class="sgd-preset-pill" data-area="2500">2.500 m²</button>
                                <button type="button" class="sgd-preset-pill" data-area="5000">5.000 m²</button>
                            </div>
                        </div>

                        <input type="range" id="sgdEstAreaSlider" class="sgd-est-range-slider" value="500" min="50" max="5000" step="25" aria-label="Geser untuk mengatur luas m²">
                        <div class="sgd-range-limits">
                            <span>50 m²</span>
                            <span>1.000 m²</span>
                            <span>2.500 m²</span>
                            <span>5.000+ m²</span>
                        </div>
                    </div>

                    <!-- Step 3: Material Specification Grade -->
                    <div class="sgd-est-step">
                        <label class="sgd-est-label">
                            <span class="sgd-est-step-num">3</span>
                            <span>Tingkat Spesifikasi Material & Finishing:</span>
                        </label>
                        <div class="sgd-est-grades-grid" id="sgdEstGrades">
                            <button type="button" class="sgd-est-grade-btn" data-grade="standard" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <span class="sgd-grade-badge">Standard</span>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong>Standar Korporat SNI</strong>
                                <small>Material kokoh teruji SNI, sanitair standar, cat tahan cuaca.</small>
                            </button>
                            <button type="button" class="sgd-est-grade-btn active" data-grade="premium" aria-pressed="true">
                                <div class="sgd-est-btn-top">
                                    <span class="sgd-grade-badge sgd-badge-popular">Populer</span>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong>Premium Commercial</strong>
                                <small>Granit tile 80x80/100x100, kusen YKK, Toto sanitair, cat Jotun/Dulux.</small>
                            </button>
                            <button type="button" class="sgd-est-grade-btn" data-grade="luxury" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <span class="sgd-grade-badge sgd-badge-luxury">Luxury</span>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong>Luxury / High-End</strong>
                                <small>Slab marmer impor Italia, smart building automation, curtain wall Low-E.</small>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right: Real-time Live Calculation Results -->
                <div class="sgd-estimator-summary">
                    <div class="sgd-summary-badge">
                        <i class="fa-solid fa-calculator"></i>
                        <span>HASIL KALKULASI ESTIMASI</span>
                    </div>

                    <div class="sgd-est-cost-display">
                        <span class="sgd-cost-label">Perkiraan Rentang Anggaran:</span>
                        <div class="sgd-cost-val" id="sgdEstCostRange">Rp 3,4 Milyar - Rp 3,8 Milyar</div>
                        <div class="sgd-cost-sub" id="sgdEstRatePerM2">Rata-rata: Rp 7.200.000 / m²</div>
                    </div>

                    <div class="sgd-est-details-list">
                        <div class="sgd-est-detail-item">
                            <i class="fa-solid fa-clock"></i>
                            <div>
                                <span class="sgd-detail-title">Estimasi Durasi Kerja:</span>
                                <strong id="sgdEstDuration">5 - 7 Bulan</strong>
                            </div>
                        </div>
                        <div class="sgd-est-detail-item">
                            <i class="fa-solid fa-shield-halved"></i>
                            <div>
                                <span class="sgd-detail-title">Jaminan & Kualitas:</span>
                                <strong>Garansi Struktur + Sertifikat SMK3</strong>
                            </div>
                        </div>
                        <div class="sgd-est-detail-item">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                            <div>
                                <span class="sgd-detail-title">Sistem Kontrak:</span>
                                <strong>Fixed Cost (Bebas Biaya Tak Terduga)</strong>
                            </div>
                        </div>
                    </div>

                    <div class="sgd-est-actions">
                        <a href="#" id="sgdEstWaBtn" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg sgd-w-100">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>Kirim Rincian Estimasi ke WA Estimator</span>
                        </a>
                        <button type="button" class="sgd-btn sgd-btn-outline sgd-w-100 sgd-mt-2" data-modal="profile">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span>Download Corporate Deck & Spesifikasi</span>
                        </button>
                    </div>
                    <p class="sgd-est-disclaimer">
                        *Anggaran di atas merupakan estimasi awal berdasarkan luas dan mutu finishing. Nilai riil akan ditentukan setelah survey lapangan dan penyusunan Rencana Anggaran Biaya (RAB) definitif.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. FEATURED PORTFOLIO SECTION -->
<section class="sgd-section sgd-section-portfolio">
    <div class="sgd-container">
        <div class="sgd-section-header-row">
            <div>
                <div class="sgd-section-tag">PORTOFOLIO TERBARU</div>
                <h2 class="sgd-section-heading">Karya & Rekam Jejak Konstruksi Kami</h2>
            </div>
            <div>
                <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="sgd-btn sgd-btn-outline">
                    <span>Lihat Semua Proyek</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Portfolio Grid -->
        <div class="sgd-portfolio-grid">
            <?php 
            $featured_projects = array_slice(sgd_get_projects(), 0, 6);
            foreach ($featured_projects as $p) : 
            ?>
            <div class="sgd-portfolio-card sgd-portfolio-card-clickable" data-project-id="<?php echo esc_attr($p['id']); ?>" role="button" tabindex="0" aria-label="<?php echo esc_attr($p['title']); ?>">
                <div class="sgd-portfolio-media">
                    <img src="<?php echo esc_url($p['images'][0]); ?>" alt="<?php echo esc_attr($p['title']); ?>">
                    <div class="sgd-portfolio-overlay">
                        <span class="sgd-portfolio-tag"><?php echo esc_html($p['category_label']); ?></span>
                        <h3 class="sgd-portfolio-title"><?php echo esc_html($p['title']); ?></h3>
                        <p class="sgd-portfolio-meta"><i class="fa-solid fa-location-dot"></i> <?php echo esc_html($p['location']); ?> • <?php echo esc_html($p['scope']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4.5 CORPORATE TRUST, LEGALITIES & STRATEGIC PARTNERS -->
<section class="sgd-section sgd-section-compliance bg-slate">
    <div class="sgd-container">
        <div class="sgd-section-header text-center">
            <div class="sgd-section-tag">LEGALITAS & STANDAR KUALITAS KORPORAT</div>
            <h2 class="sgd-section-heading">Kepatuhan Regulasi Penuh & Kemitraan Rantai Pasok Teruji</h2>
            <p class="sgd-section-subheading">Sebagai kontraktor berbadan hukum resmi PT Sunggiardi Prima Konstruksi, kami mematuhi seluruh perizinan nasional dan bermitra dengan produsen material tier-1 untuk menjamin ketahanan bangunan Anda.</p>
        </div>

        <!-- Compliance & Badges Grid -->
        <div class="sgd-compliance-grid">
            <div class="sgd-compliance-card">
                <div class="sgd-compliance-icon"><i class="fa-solid fa-stamp"></i></div>
                <div class="sgd-compliance-body">
                    <span class="sgd-compliance-num">BADAN HUKUM RESMI</span>
                    <h4>PT Sunggiardi Prima Konstruksi</h4>
                    <p>Terdaftar resmi di Kemenkumham RI dengan NIB & Izin Usaha Jasa Konstruksi (IUJK / OSS-RBA) aktif.</p>
                    <span class="sgd-compliance-check"><i class="fa-solid fa-circle-check"></i> Terverifikasi Legal</span>
                </div>
            </div>

            <div class="sgd-compliance-card">
                <div class="sgd-compliance-icon"><i class="fa-solid fa-hard-hat"></i></div>
                <div class="sgd-compliance-body">
                    <span class="sgd-compliance-num">SMK3 & KESELAMATAN</span>
                    <h4>Standar K3 / SMK3 (PP 50/2012)</h4>
                    <p>Protokol Sistem Manajemen K3 ketat di setiap site proyek dengan komitmen Zero Accident.</p>
                    <span class="sgd-compliance-check"><i class="fa-solid fa-circle-check"></i> Zero Lost Time Injury</span>
                </div>
            </div>

            <div class="sgd-compliance-card">
                <div class="sgd-compliance-icon"><i class="fa-solid fa-certificate"></i></div>
                <div class="sgd-compliance-body">
                    <span class="sgd-compliance-num">STANDAR MUTU SNI</span>
                    <h4>ISO 9001:2015 Quality System</h4>
                    <p>Standarisasi pengujian laboratorium mutu beton (slump & cylinder test) serta uji tarik baja berkala.</p>
                    <span class="sgd-compliance-check"><i class="fa-solid fa-circle-check"></i> 100% SNI Compliant</span>
                </div>
            </div>

            <div class="sgd-compliance-card">
                <div class="sgd-compliance-icon"><i class="fa-solid fa-id-card-clip"></i></div>
                <div class="sgd-compliance-body">
                    <span class="sgd-compliance-num">TENAGA AHLI LPJK</span>
                    <h4>Engineer SKA / SKK Bersertifikat</h4>
                    <p>Site Manager, Quality Control, dan Ahli Struktur terdaftar di asosiasi profesi resmi (HAKI, IAI, PII).</p>
                    <span class="sgd-compliance-check"><i class="fa-solid fa-circle-check"></i> Sertifikasi Nasional</span>
                </div>
            </div>
        </div>

        <!-- Safety & Quality Milestone Strip -->
        <div class="sgd-milestone-strip">
            <div class="sgd-milestone-item">
                <span class="sgd-milestone-val">350.000+</span>
                <span class="sgd-milestone-label">Jam Kerja Aman (Safe Man-Hours)</span>
            </div>
            <div class="sgd-milestone-divider"></div>
            <div class="sgd-milestone-item">
                <span class="sgd-milestone-val">100%</span>
                <span class="sgd-milestone-label">Lolos Uji Tekan Laboratorium KAN</span>
            </div>
            <div class="sgd-milestone-divider"></div>
            <div class="sgd-milestone-item">
                <span class="sgd-milestone-val">0</span>
                <span class="sgd-milestone-label">Kasus Fatality (Zero Major Accident)</span>
            </div>
            <div class="sgd-milestone-divider"></div>
            <div class="sgd-milestone-item">
                <span class="sgd-milestone-val">5 Tahun</span>
                <span class="sgd-milestone-label">Garansi Pemeliharaan Kebocoran & Struktur</span>
            </div>
        </div>

        <!-- Tier-1 Supply Chain & Vendor Partners -->
        <div class="sgd-partners-wrapper">
            <h4 class="sgd-partners-title">Mitra Produsen Material & Rantai Pasok Resmi SGD:</h4>
            <div class="sgd-partner-pills-grid">
                <div class="sgd-partner-pill">
                    <i class="fa-solid fa-cubes-stacked"></i>
                    <div>
                        <strong>Krakatau Steel</strong>
                        <span>Baja Tulangan SNI</span>
                    </div>
                </div>
                <div class="sgd-partner-pill">
                    <i class="fa-solid fa-trowel"></i>
                    <div>
                        <strong>Semen Indonesia (SIG) / Holcim</strong>
                        <span>Ready-Mix & Semen Tahan Sulfat</span>
                    </div>
                </div>
                <div class="sgd-partner-pill">
                    <i class="fa-solid fa-faucet-drip"></i>
                    <div>
                        <strong>TOTO Indonesia</strong>
                        <span>Sanitair Komersial & Residensial</span>
                    </div>
                </div>
                <div class="sgd-partner-pill">
                    <i class="fa-solid fa-bolt"></i>
                    <div>
                        <strong>Schneider Electric</strong>
                        <span>Panel Kelistrikan & Proteksi MEP</span>
                    </div>
                </div>
                <div class="sgd-partner-pill">
                    <i class="fa-solid fa-paint-roller"></i>
                    <div>
                        <strong>Jotun / Dulux / Propan</strong>
                        <span>Cat Arsitektural & Waterproofing</span>
                    </div>
                </div>
                <div class="sgd-partner-pill">
                    <i class="fa-solid fa-snowflake"></i>
                    <div>
                        <strong>Daikin / Panasonic VRV</strong>
                        <span>Tata Udara HVAC Komersial</span>
                    </div>
                </div>
                <div class="sgd-partner-pill">
                    <i class="fa-solid fa-border-all"></i>
                    <div>
                        <strong>YKK AP Aluminium</strong>
                        <span>Kusen & Fasad Arsitektural</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. WORK PROCESS / METHODOLOGY -->
<section class="sgd-section sgd-section-process bg-dark text-white">
    <div class="sgd-container">
        <div class="sgd-section-header text-center">
            <div class="sgd-section-tag sgd-tag-gold">METODOLOGI KERJA KAMI</div>
            <h2 class="sgd-section-heading text-white">Tahapan Konstruksi Terstruktur & Terukur</h2>
            <p class="sgd-section-subheading text-slate-300">Kami menerapkan alur kerja yang terstandarisasi untuk menjamin kepastian jadwal dan kualitas bangunan tanpa kompromi.</p>
        </div>

        <div class="sgd-process-grid">
            <div class="sgd-process-step">
                <div class="sgd-step-number">01</div>
                <h4>Konsultasi & Feasibility Study</h4>
                <p>Diskusi komprehensif mengenai visi kebutuhan, survey lokasi fisik, evaluasi teknis tanah, dan studi kelayakan rencana bangunan.</p>
            </div>
            <div class="sgd-process-step">
                <div class="sgd-step-number">02</div>
                <h4>Desain Arsitektur & Estimasi RAB</h4>
                <p>Pengembangan gambar arsitektur 3D, kalkulasi struktur teknis, dan perumusan Rencana Anggaran Biaya (RAB) yang presisi dan transparan.</p>
            </div>
            <div class="sgd-process-step">
                <div class="sgd-step-number">03</div>
                <h4>Kontrak Legalitas & Pengadaan</h4>
                <p>Penandatanganan SPK resmi bermaterai, pengurusan perizinan (PBG/SLF), dan seleksi pengadaan material sesuai spesifikasi kesepakatan.</p>
            </div>
            <div class="sgd-process-step">
                <div class="sgd-step-number">04</div>
                <h4>Konstruksi & Quality Control</h4>
                <p>Pelaksanaan konstruksi di lapangan oleh tenaga terlatih di bawah supervisi ketat Site Manager dan Quality Control bersertifikat.</p>
            </div>
            <div class="sgd-process-step">
                <div class="sgd-step-number">05</div>
                <h4>Serah Terima & Garansi Pemeliharaan</h4>
                <p>Berita acara serah terima (BAST) setelah inspeksi final, penyerahan as-built drawing, serta masa garansi pemeliharaan struktural.</p>
            </div>
        </div>

        <!-- Digital Transparency & Construction Intelligence Strip -->
        <div class="sgd-transparency-box sgd-mt-5">
            <div class="sgd-transparency-header">
                <div class="sgd-badge-accent"><i class="fa-solid fa-satellite-dish"></i> MODERN PROJECT CONTROLS</div>
                <h3>Transparansi Penuh untuk Pemilik Proyek & Komite Korporat</h3>
                <p>Kami menghilangkan kekhawatiran klasik keterlambatan dan biaya siluman dengan ekosistem pelaporan digital modern:</p>
            </div>
            <div class="sgd-transparency-grid">
                <div class="sgd-transparency-item">
                    <i class="fa-solid fa-chart-line"></i>
                    <div>
                        <h4>Kurva-S & Laporan Digital Mingguan</h4>
                        <p>Pemantauan deviasi progress fisik vs rencana kerja secara berkala yang dikirimkan langsung ke manajemen owner.</p>
                    </div>
                </div>
                <div class="sgd-transparency-item">
                    <i class="fa-solid fa-helicopter"></i>
                    <div>
                        <h4>Dokumentasi Drone Aerial Berkala</h4>
                        <p>Inspeksi elevasi atap, struktur bentang tinggi, dan perkembangan tapak proyek dengan foto/video resolusi tinggi 4K.</p>
                    </div>
                </div>
                <div class="sgd-transparency-item">
                    <i class="fa-solid fa-vial-circle-check"></i>
                    <div>
                        <h4>Pengujian Uji Laboratorium KAN</h4>
                        <p>Uji slump on-site setiap batch cor, tes tekan silinder beton umur 7, 14, 28 hari, serta uji tarik besi tulangan.</p>
                    </div>
                </div>
                <div class="sgd-transparency-item">
                    <i class="fa-solid fa-file-contract"></i>
                    <div>
                        <h4>Garansi Harga Kontrak (Fixed-Cost)</h4>
                        <p>Perlindungan anggaran Anda dengan kontrak definitif tanpa kenaikan biaya sepihak di tengah proses pembangunan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. WHY CHOOSE SGD CONSTRUCTION -->
<section class="sgd-section sgd-section-why-us">
    <div class="sgd-container">
        <div class="sgd-grid-2col sgd-items-center">
            <div>
                <div class="sgd-section-tag">NILAI KEUNGGULAN</div>
                <h2 class="sgd-section-heading">Mengapa Mempercayakan Proyek Anda pada SGD Construction?</h2>
                <p class="sgd-lead-text">
                    Keberhasilan setiap proyek konstruksi berawal dari kepercayaan dan ketepatan eksekusi. Kami memberikan jaminan kepastian dari segala aspek.
                </p>

                <div class="sgd-value-cards">
                    <div class="sgd-value-card">
                        <div class="sgd-value-icon"><i class="fa-solid fa-file-shield"></i></div>
                        <div>
                            <h4>Legalitas Lengkap & Terpercaya</h4>
                            <p>Beroperasi di bawah badan hukum resmi PT Sunggiardi Prima Konstruksi dengan perizinan konstruksi lengkap.</p>
                        </div>
                    </div>
                    <div class="sgd-value-card">
                        <div class="sgd-value-icon"><i class="fa-solid fa-stopwatch-20"></i></div>
                        <div>
                            <h4>Ketepatan Waktu (On-Time Delivery)</h4>
                            <p>Sistem manajemen kurva-S dan time-scheduling ketat untuk memastikan tanggal serah terima tidak meleset.</p>
                        </div>
                    </div>
                    <div class="sgd-value-card">
                        <div class="sgd-value-icon"><i class="fa-solid fa-coins"></i></div>
                        <div>
                            <h4>Anggaran Pasti & Bebas Biaya Tak Terduga</h4>
                            <p>Harga kontrak fix-cost yang mengikat sehingga Anda memiliki kepastian finansial dari awal hingga akhir proyek.</p>
                        </div>
                    </div>
                    <div class="sgd-value-card">
                        <div class="sgd-value-icon sgd-value-icon-care">
                            <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/SGD CARE Horizontal.png' ); ?>" alt="SGD Care" class="sgd-care-value-icon">
                        </div>
                        <div>
                            <h4>SGD Care Dukungan Purna Jual</h4>
                            <p>Dukungan paska konstruksi melalui unit SGD Care untuk perawatan jangka panjang gedung dan properti Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Live Card Preview -->
            <div class="sgd-instagram-showcase-box">
                <div class="sgd-insta-card">
                    <div class="sgd-insta-header">
                        <div class="sgd-insta-avatar">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div>
                            <h5>@sgdconstruction</h5>
                            <span>PT Sunggiardi Prima Konstruksi</span>
                        </div>
                        <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" class="sgd-insta-follow-btn">Follow</a>
                    </div>
                    <div class="sgd-insta-grid">
                        <div class="sgd-insta-img"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/project-1.jpg' ); ?>" alt="SGD Construction Instagram"></div>
                        <div class="sgd-insta-img"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/project-2.jpg' ); ?>" alt="SGD Construction Instagram"></div>
                        <div class="sgd-insta-img"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/project-3.jpg' ); ?>" alt="SGD Construction Instagram"></div>
                        <div class="sgd-insta-img"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/project-4.jpg' ); ?>" alt="SGD Construction Instagram"></div>
                    </div>
                    <div class="sgd-insta-footer">
                        <p><i class="fa-regular fa-heart"></i> Pantau progress proyek langsung dan dokumentasi lapangan kami di Instagram.</p>
                        <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" class="sgd-link-arrow">
                            Kunjungi @sgdconstruction <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6.5 CORPORATE FAQ SECTION -->
<section class="sgd-section sgd-section-faq bg-slate">
    <div class="sgd-container">
        <div class="sgd-section-header text-center">
            <div class="sgd-section-tag">PERTANYAAN UMUM KLIEN (FAQ)</div>
            <h2 class="sgd-section-heading">Informasi Seputar Layanan & Prosedur Kontrak SGD</h2>
            <p class="sgd-section-subheading">Pertanyaan paling sering diajukan oleh pemilik properti, pengembang, dan komite pengadaan korporat.</p>
        </div>

        <div class="sgd-faq-wrapper">
            <!-- FAQ Item 1 -->
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question" aria-expanded="false">
                    <span>Apakah PT Sunggiardi Prima Konstruksi melayani pengurusan perizinan (PBG & SLF)?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p><strong>Ya, tentu.</strong> Kami menyediakan layanan terintegrasi *One-Stop Solution* mulai dari penyusunan gambar teknis kerja arsitektur, perhitungan kalkulasi struktur bersertifikat (TABG/SimBG), kajian tata lingkungan, hingga penerbitan Persetujuan Bangunan Gedung (PBG) dan Sertifikat Laik Fungsi (SLF) di dinas terkait.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question" aria-expanded="false">
                    <span>Bagaimana mekanisme termin pembayaran kontrak konstruksi di SGD?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p>Pembayaran dilakukan secara bertahap (termin) sesuai kurva-S dan progres fisik lapangan yang diverifikasi bersama (*Joint Inspection*). Skema umum dimulai dari uang muka (DP), termin berkala per kelipatan progres (misal 25%, 50%, 75%, 100%), dan penahanan retensi pemeliharaan (3%–5%) hingga masa retensi berakhir dengan aman.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question" aria-expanded="false">
                    <span>Berapa lama masa garansi pemeliharaan (retensi) yang diberikan?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p>Kami memberikan garansi pemeliharaan struktural hingga <strong>5 tahun</strong> untuk kekuatan struktur utama dan <strong>3 hingga 12 bulan</strong> untuk masa retensi pekerjaan arsitektural/finishing serta waterproofing. Segala perbaikan selama masa retensi didukung langsung oleh unit respons cepat <strong>SGD Care</strong>.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question" aria-expanded="false">
                    <span>Bagaimana SGD menjamin proyek selesai on-time tanpa biaya tambahan tak terduga?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p>Kami mengikat komitmen melalui Surat Perjanjian Kerja (SPK) resmi bermaterai dengan skema *Fixed-Lump Sum*. Setiap tahapan diawasi menggunakan kurva-S digital ketat dengan mitigasi risiko cuaca dan suplai material sejak hari pertama, sehingga tanggal serah terima dijamin tepat waktu.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question" aria-expanded="false">
                    <span>Apakah SGD melayani proyek di luar kawasan Jabodetabek?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p><strong>Ya.</strong> Meskipun basis operasional kami berada di Jakarta Barat, tim engineer SGD telah sukses menangani proyek di berbagai kawasan industri dan residensial di Jawa Barat, Banten, Jawa Tengah, Jawa Timur, hingga Bali dan Sumatera.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. DIRECT CONSULTATION CTA -->
<section class="sgd-cta-section">
    <div class="sgd-container">
        <div class="sgd-cta-box">
            <div class="sgd-cta-content">
                <span class="sgd-badge-accent">SIAP MEMULAI PROYEK ANDA?</span>
                <h2>Konsultasikan Rencana Bangunan Anda Sekarang</h2>
                <p>Dapatkan estimasi biaya awal, konsultasi teknis arsitektur & struktur langsung bersama tim engineer kami secara cepat melalui WhatsApp.</p>
                <div class="sgd-cta-buttons">
                    <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin konsultasi rencana proyek konstruksi.') ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg">
                        <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp 08116016868
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sgd-btn sgd-btn-white sgd-btn-lg">
                        <i class="fa-solid fa-envelope"></i> Kirim Form Inquiry
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
