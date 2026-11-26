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
                <span>SGD CONSTRUCTION</span>
            </div>
            <h1 class="sgd-hero-title">
                Membangun dengan Cermat,<br>
                <span class="sgd-text-gradient">Menjaga Kepercayaan</span>
            </h1>
            <p class="sgd-hero-subtitle" data-i18n-id="Jasa pembangunan dan renovasi rumah serta bangunan komersial, dengan proses yang transparan dan perhatian pada kualitas di setiap tahap." data-i18n-en="Residential and commercial construction and renovation services, delivered through transparent processes and meticulous quality at every phase.">
                Jasa pembangunan dan renovasi rumah serta bangunan komersial, dengan proses yang transparan dan perhatian pada kualitas di setiap tahap.
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
                <div class="sgd-stat-num" data-count="50">50<span>+</span></div>
                <div class="sgd-stat-label" data-i18n-id="Tahun Pengalaman Industri" data-i18n-en="Years of Industry Experience">50+ tahun pengalaman industri</div>
            </div>
            <div class="sgd-stat-item">
                <div class="sgd-stat-num" data-count="120">120<span>+</span></div>
                <div class="sgd-stat-label" data-i18n-id="Proyek Selesai & Diserahterimakan" data-i18n-en="Completed & Delivered Projects">120+ Proyek selesai dan diserahterimakan</div>
            </div>
            <div class="sgd-stat-item">
                <div class="sgd-stat-num" data-count="99">99<span>%</span></div>
                <div class="sgd-stat-label" data-i18n-id="Tingkat Kepuasan" data-i18n-en="Satisfaction Rate">99% tingkat kepuasan</div>
            </div>
            <div class="sgd-stat-item">
                <div class="sgd-stat-num" data-count="30">30<span>+</span></div>
                <div class="sgd-stat-label" data-i18n-id="Tukang dan Professional Bangunan Berpengalaman" data-i18n-en="Experienced Builders & Construction Professionals">30+ Tukang dan Professional bangunan yang berpengalaman</div>
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
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/about-company.jpg' ); ?>" alt="Tim SGD Construction di Lapangan" class="sgd-img-responsive">
                    <div class="sgd-experience-badge">
                        <span class="sgd-exp-number">50+</span>
                        <span class="sgd-exp-text" data-i18n-id="Tahun Pengalaman Industri" data-i18n-en="Years of Industry Experience">Tahun Pengalaman Industri</span>
                    </div>
                </div>
            </div>
            <div class="sgd-about-summary-text">
                <div class="sgd-section-tag" data-i18n-id="TENTANG SGD CONSTRUCTION" data-i18n-en="ABOUT SGD CONSTRUCTION">TENTANG SGD CONSTRUCTION</div>
                <h2 class="sgd-section-heading" data-i18n-id="Warisan Tiga Generasi, Dibangun dengan Kepedulian" data-i18n-en="Three-Generation Heritage, Built with Care">Warisan Tiga Generasi, Dibangun dengan Kepedulian</h2>
                <p class="sgd-lead-text" data-i18n-id="Berakar pada pengalaman tiga generasi keluarga dalam dunia konstruksi, SGD Construction memadukan keterampilan membangun dengan pengelolaan proyek yang terstruktur dan transparan. Kami melayani pembangunan dan renovasi rumah serta bangunan komersial dengan perhatian pada detail, kebutuhan pemilik, dan manfaat bangunan dalam jangka panjang." data-i18n-en="Rooted in three generations of family experience in the construction industry, SGD Construction blends building craftsmanship with structured, transparent project management. We serve residential and commercial construction and renovation with attention to detail, owners' needs, and long-term building benefits.">
                    Berakar pada pengalaman tiga generasi keluarga dalam dunia konstruksi, SGD Construction memadukan keterampilan membangun dengan pengelolaan proyek yang terstruktur dan transparan. Kami melayani pembangunan dan renovasi rumah serta bangunan komersial dengan perhatian pada detail, kebutuhan pemilik, dan manfaat bangunan dalam jangka panjang.
                </p>
                <div class="sgd-features-checklist">
                    <div class="sgd-checklist-item">
                        <div class="sgd-check-icon"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h4 data-i18n-id="Keterampilan yang Diwariskan" data-i18n-en="Inherited Craftsmanship">Keterampilan yang Diwariskan</h4>
                            <p data-i18n-id="Ketelitian dan pengalaman lapangan yang tumbuh lintas generasi." data-i18n-en="Meticulous precision and field expertise developed across generations.">Ketelitian dan pengalaman lapangan yang tumbuh lintas generasi.</p>
                        </div>
                    </div>
                    <div class="sgd-checklist-item">
                        <div class="sgd-check-icon"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h4 data-i18n-id="Pengelolaan yang Terbuka" data-i18n-en="Transparent Management">Pengelolaan yang Terbuka</h4>
                            <p data-i18n-id="Kejelasan lingkup, anggaran, dan perkembangan pekerjaan." data-i18n-en="Clarity in scope, budgeting, and project milestones.">Kejelasan lingkup, anggaran, dan perkembangan pekerjaan.</p>
                        </div>
                    </div>
                    <div class="sgd-checklist-item">
                        <div class="sgd-check-icon"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h4 data-i18n-id="Kepedulian Jangka Panjang" data-i18n-en="Long-Term Care">Kepedulian Jangka Panjang</h4>
                            <p data-i18n-id="Perhatian pada kualitas bangunan dan hubungan dengan pemilik setelah serah terima." data-i18n-en="Dedicated focus on building quality and enduring relationships with owners after handover.">Perhatian pada kualitas bangunan dan hubungan dengan pemilik setelah serah terima.</p>
                        </div>
                    </div>
                </div>
                <div class="sgd-mt-4">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="sgd-btn sgd-btn-primary">
                        <span data-i18n-id="Pelajari Profil Perusahaan Selengkapnya" data-i18n-en="Learn More About Our Company Profile">Pelajari Profil Perusahaan Selengkapnya</span>
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
            <div class="sgd-section-tag" data-i18n-id="LAYANAN KAMI" data-i18n-en="OUR SERVICES">LAYANAN KAMI</div>
            <h2 class="sgd-section-heading" data-i18n-id="Layanan Komprehensif Konstruksi & Rancang Bangun" data-i18n-en="Comprehensive Construction & Design-Build Services">Layanan Komprehensif Konstruksi & Rancang Bangun</h2>
            <p class="sgd-section-subheading" data-i18n-id="Dari tahap perencanaan awal, perizinan, hingga pelaksanaan fisik dan perawatan paska serah terima." data-i18n-en="From initial architectural planning, permits, to physical execution and post-handover maintenance.">Dari tahap perencanaan awal, perizinan, hingga pelaksanaan fisik dan perawatan paska serah terima.</p>
        </div>

        <div class="sgd-services-grid sgd-services-grid-4">
            <!-- Service 1: Rumah Tinggal -->
            <div class="sgd-service-card">
                <div class="sgd-service-thumb">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/project-1.jpg' ); ?>" alt="01 — Rumah Tinggal">
                    <span class="sgd-service-number">01</span>
                </div>
                <div class="sgd-service-body">
                    <div class="sgd-service-icon"><i class="fa-solid fa-house-chimney"></i></div>
                    <h3 data-i18n-id="01 — Rumah Tinggal" data-i18n-en="01 — Residential Living">01 — Rumah Tinggal</h3>
                    <p data-i18n-id="Pembangunan dan renovasi rumah dengan perhatian pada kebutuhan penghuni, ketelitian pengerjaan, dan kenyamanan jangka panjang." data-i18n-en="Residential construction and renovation with meticulous attention to resident needs, craft precision, and enduring comfort.">Pembangunan dan renovasi rumah dengan perhatian pada kebutuhan penghuni, ketelitian pengerjaan, dan kenyamanan jangka panjang.</p>
                    <ul class="sgd-service-specs">
                        <li data-i18n-id="Pembangunan Rumah Baru" data-i18n-en="New Home Construction"><i class="fa-solid fa-circle-check"></i> Pembangunan Rumah Baru</li>
                        <li data-i18n-id="Renovasi & Pengembangan Rumah" data-i18n-en="Home Renovation & Expansion"><i class="fa-solid fa-circle-check"></i> Renovasi & Pengembangan Rumah</li>
                        <li data-i18n-id="Peningkatan Fungsi & Kenyamanan" data-i18n-en="Functionality & Comfort Enhancement"><i class="fa-solid fa-circle-check"></i> Peningkatan Fungsi & Kenyamanan</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services/#residential' ) ); ?>" class="sgd-service-link">
                        <span data-i18n-id="Jelajahi Layanan Rumah →" data-i18n-en="Explore Residential Services →">Jelajahi Layanan Rumah &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Service 2: Bangunan Komersial -->
            <div class="sgd-service-card">
                <div class="sgd-service-thumb">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-contracting.jpg' ); ?>" alt="02 — Bangunan Komersial">
                    <span class="sgd-service-number">02</span>
                </div>
                <div class="sgd-service-body">
                    <div class="sgd-service-icon"><i class="fa-solid fa-building"></i></div>
                    <h3 data-i18n-id="02 — Bangunan Komersial" data-i18n-en="02 — Commercial Buildings">02 — Bangunan Komersial</h3>
                    <p data-i18n-id="Pembangunan dan renovasi ruang usaha dengan memperhatikan fungsi bangunan, kebutuhan operasional, dan identitas bisnis Anda." data-i18n-en="Construction and renovation of business spaces focusing on functionality, operational needs, and your unique brand identity.">Pembangunan dan renovasi ruang usaha dengan memperhatikan fungsi bangunan, kebutuhan operasional, dan identitas bisnis Anda.</p>
                    <ul class="sgd-service-specs">
                        <li data-i18n-id="Kantor & Tempat Usaha" data-i18n-en="Offices & Business Premises"><i class="fa-solid fa-circle-check"></i> Kantor & Tempat Usaha</li>
                        <li data-i18n-id="Ruko & Ruang Komersial" data-i18n-en="Shophouses & Retail Spaces"><i class="fa-solid fa-circle-check"></i> Ruko & Ruang Komersial</li>
                        <li data-i18n-id="Renovasi & Penyesuaian Fasilitas" data-i18n-en="Facility Renovation & Customization"><i class="fa-solid fa-circle-check"></i> Renovasi & Penyesuaian Fasilitas</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services/#commercial' ) ); ?>" class="sgd-service-link">
                        <span data-i18n-id="Jelajahi Layanan Komersial →" data-i18n-en="Explore Commercial Services →">Jelajahi Layanan Komersial &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Service 3: Proyek Khusus -->
            <div class="sgd-service-card">
                <div class="sgd-service-thumb">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-architecture.jpg' ); ?>" alt="03 — Proyek Khusus">
                    <span class="sgd-service-number">03</span>
                </div>
                <div class="sgd-service-body">
                    <div class="sgd-service-icon"><i class="fa-solid fa-compass-drafting"></i></div>
                    <h3 data-i18n-id="03 — Proyek Khusus" data-i18n-en="03 — Special Projects">03 — Proyek Khusus</h3>
                    <p data-i18n-id="Pelaksanaan proyek dengan kebutuhan bentuk, fungsi, atau pengerjaan khusus melalui koordinasi bersama pemilik, perancang, dan mitra spesialis." data-i18n-en="Execution of bespoke projects with custom form, functional requirements, or specialized fabrication in synergy with owners, designers, and specialist partners.">Pelaksanaan proyek dengan kebutuhan bentuk, fungsi, atau pengerjaan khusus melalui koordinasi bersama pemilik, perancang, dan mitra spesialis.</p>
                    <ul class="sgd-service-specs">
                        <li data-i18n-id="Konstruksi & Instalasi Khusus" data-i18n-en="Specialized Construction & Installations"><i class="fa-solid fa-circle-check"></i> Konstruksi & Instalasi Khusus</li>
                        <li data-i18n-id="Pengerjaan Berdasarkan Desain" data-i18n-en="Design-Driven Execution"><i class="fa-solid fa-circle-check"></i> Pengerjaan Berdasarkan Desain</li>
                        <li data-i18n-id="Koordinasi Teknis & Pelaksanaan" data-i18n-en="Technical & Field Coordination"><i class="fa-solid fa-circle-check"></i> Koordinasi Teknis & Pelaksanaan</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services/#special' ) ); ?>" class="sgd-service-link">
                        <span data-i18n-id="Diskusikan Proyek Khusus →" data-i18n-en="Discuss Special Projects →">Diskusikan Proyek Khusus &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Service 4: SGD Care -->
            <div class="sgd-service-card sgd-service-card-care">
                <div class="sgd-service-thumb">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-care.jpg' ); ?>" alt="04 — SGD Care">
                    <span class="sgd-service-number">04</span>
                    <div class="sgd-care-badge-overlay" title="SGD Care Unit">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/SGD CARE Horizontal.png' ); ?>" alt="SGD Care">
                    </div>
                </div>
                <div class="sgd-service-body">
                    <div class="sgd-care-logo-wrap">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/SGD CARE Horizontal.png' ); ?>" alt="SGD Care Logo" class="sgd-care-logo-horizontal">
                    </div>
                    <h3 data-i18n-id="04 — SGD Care" data-i18n-en="04 — SGD Care">04 — SGD Care</h3>
                    <p data-i18n-id="Perawatan berkala dan perbaikan properti untuk menjaga kondisi bangunan, kenyamanan pengguna, dan mencegah masalah berkembang." data-i18n-en="Periodic maintenance and property repairs to safeguard building condition, user comfort, and prevent issues before they escalate.">Perawatan berkala dan perbaikan properti untuk menjaga kondisi bangunan, kenyamanan pengguna, dan mencegah masalah berkembang.</p>
                    <ul class="sgd-service-specs">
                        <li data-i18n-id="Perawatan Properti Berkala" data-i18n-en="Periodic Property Maintenance"><i class="fa-solid fa-circle-check"></i> Perawatan Properti Berkala</li>
                        <li data-i18n-id="Perbaikan Bangunan & Utilitas" data-i18n-en="Building & Utility Repairs"><i class="fa-solid fa-circle-check"></i> Perbaikan Bangunan & Utilitas</li>
                        <li data-i18n-id="Perawatan & Perbaikan AC" data-i18n-en="HVAC & AC Servicing"><i class="fa-solid fa-circle-check"></i> Perawatan & Perbaikan AC</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services/#care' ) ); ?>" class="sgd-service-link">
                        <span data-i18n-id="Kenali SGD Care →" data-i18n-en="Discover SGD Care →">Kenali SGD Care &rarr;</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center sgd-mt-5">
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="sgd-btn sgd-btn-dark">
                <span data-i18n-id="Eksplorasi Semua Detail Layanan Kami" data-i18n-en="Explore All Our Services in Detail">Eksplorasi Semua Detail Layanan Kami</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- 3.5 INTERACTIVE CONSTRUCTION COST ESTIMATOR -->
<section class="sgd-section sgd-section-estimator bg-white" id="estimatorSection">
    <div class="sgd-container">
        <div class="sgd-section-header text-center">
            <div class="sgd-section-tag sgd-tag-gold" data-i18n-id="ESTIMASI ANGGARAN CEPAT & TRANSPARAN" data-i18n-en="FAST & TRANSPARENT BUDGET ESTIMATE">ESTIMASI ANGGARAN CEPAT & TRANSPARAN</div>
            <h2 class="sgd-section-heading" data-i18n-id="Kalkulator Estimasi Biaya Konstruksi & Rancang Bangun" data-i18n-en="Construction & Design-Build Cost Estimator">Kalkulator Estimasi Biaya Konstruksi & Rancang Bangun</h2>
            <p class="sgd-section-subheading" data-i18n-id="Dapatkan gambaran awal estimasi biaya dan durasi proyek Anda secara instan dalam 3 langkah mudah sebelum konsultasi teknis mendalam bersama tim engineer SGD." data-i18n-en="Get an instant preliminary estimate of project budget and timeline in 3 simple steps before an in-depth consultation with our engineering team.">Dapatkan gambaran awal estimasi biaya dan durasi proyek Anda secara instan dalam 3 langkah mudah sebelum konsultasi teknis mendalam bersama tim engineer SGD.</p>
        </div>

        <div class="sgd-estimator-card">
            <div class="sgd-estimator-grid">
                <!-- Left: Interactive Controls -->
                <div class="sgd-estimator-controls">
                    <!-- Step 1: Project Type -->
                    <div class="sgd-est-step">
                        <label class="sgd-est-label">
                            <span class="sgd-est-step-num">1</span>
                            <span data-i18n-id="Pilih Kategori / Tipe Proyek:" data-i18n-en="Select Project Category / Type:">Pilih Kategori / Tipe Proyek:</span>
                        </label>
                        <div class="sgd-est-types-grid" id="sgdEstTypes">
                            <button type="button" class="sgd-est-type-btn active" data-type="residential" data-rate-std="8000000" data-rate-prem="10000000" data-rate-lux="12000000" data-duration="10 - 16 Bulan" data-contract="Lumpsum Fixed Price, Cost Plus Fee, atau kombinasi" data-spec="Volume yang dimasukan adalah luas terbangun termasuk Carport" aria-pressed="true">
                                <div class="sgd-est-btn-top">
                                    <i class="fa-solid fa-house-chimney"></i>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong data-i18n-id="Premium Residensial" data-i18n-en="Premium Residential">Premium Residensial</strong>
                                <small data-i18n-id="Mulai Rp 8 Juta / m²" data-i18n-en="From IDR 8M / m²">Mulai Rp 8 Juta / m²</small>
                            </button>
                            <button type="button" class="sgd-est-type-btn" data-type="ruko" data-rate-std="5000000" data-rate-prem="6000000" data-rate-lux="7500000" data-duration="12 - 24 Bulan" data-contract="Lumpsum Fixed Price, Cost Plus Fee, Supply by Owner, Based on FIDIC" data-spec="Spesifikasi: Minimum SNI" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <i class="fa-solid fa-shop"></i>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong data-i18n-id="Ruko (s.d. 4 Lantai)" data-i18n-en="Shophouses (up to 4 floors)">Ruko (s.d. 4 Lantai)</strong>
                                <small data-i18n-id="Mulai Rp 5 Juta / m² (SNI)" data-i18n-en="From IDR 5M / m² (SNI)">Mulai Rp 5 Juta / m² (SNI)</small>
                            </button>
                            <button type="button" class="sgd-est-type-btn" data-type="commercial" data-rate-std="7000000" data-rate-prem="9000000" data-rate-lux="11000000" data-duration="12 - 24 Bulan" data-contract="Lumpsum Fixed Price, Cost Plus Fee, Supply by Owner, Based on FIDIC" data-spec="Main Contractor, Project Management, Review Struktur Tahan Gempa" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <i class="fa-solid fa-building"></i>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong data-i18n-id="Gedung Komersial" data-i18n-en="Commercial Buildings">Gedung Komersial</strong>
                                <small data-i18n-id="s.d. 8 Lantai • Tahan Gempa" data-i18n-en="Up to 8 Floors • Seismic Code">s.d. 8 Lantai • Tahan Gempa</small>
                            </button>
                            <button type="button" class="sgd-est-type-btn" data-type="industrial" data-rate-std="5000000" data-rate-prem="6200000" data-rate-lux="7800000" data-duration="6 - 12 Bulan" data-contract="Lumpsum Fixed Price, Cost Plus Fee, Supply by Owner, Based on FIDIC" data-spec="Pematangan Tanah, Main Contractor, Review Struktur Tahan Gempa" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <i class="fa-solid fa-warehouse"></i>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong data-i18n-id="Gudang & Pabrik" data-i18n-en="Warehouse & Factory">Gudang & Pabrik</strong>
                                <small data-i18n-id="Mulai Rp 5 Juta / m²" data-i18n-en="From IDR 5M / m²">Mulai Rp 5 Juta / m²</small>
                            </button>
                            <button type="button" class="sgd-est-type-btn" data-type="care" data-call-pricing="true" data-duration="Kontrak Berkala / AMC" data-contract="Maintenance Contract (Bulanan / Tahunan / On-Call)" data-spec="Plumbing, Tanki Air, Elektrikal, AC Tata Udara, Waterproofing, Perawatan" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <i class="fa-solid fa-wrench"></i>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong data-i18n-id="SGD Care / Perawatan Gedung" data-i18n-en="SGD Care / Building Maintenance">SGD CARE / Perawatan Gedung</strong>
                                <small data-i18n-id="Call for Pricing" data-i18n-en="Call for Pricing">Call for Pricing</small>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Area Slider & Quick Presets -->
                    <div class="sgd-est-step">
                        <div class="sgd-d-flex sgd-justify-between sgd-items-center sgd-mb-2">
                            <label class="sgd-est-label sgd-mb-0" for="sgdEstAreaInput">
                                <span class="sgd-est-step-num">2</span>
                                <span data-i18n-id="Estimasi Luas Area (GFA):" data-i18n-en="Estimated Gross Floor Area (GFA):">Estimasi Luas Area (GFA):</span>
                            </label>
                            <div class="sgd-est-input-controls">
                                <button type="button" class="sgd-stepper-btn" id="sgdStepMinus" aria-label="Kurangi 50 m²">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <div class="sgd-est-input-wrap">
                                    <input type="number" id="sgdEstAreaInput" class="sgd-est-num-input" value="350" min="50" max="25000" step="25">
                                    <span class="sgd-est-unit">m²</span>
                                </div>
                                <button type="button" class="sgd-stepper-btn" id="sgdStepPlus" aria-label="Tambah 50 m²">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Quick Area Presets for 1-Click Selection -->
                        <div class="sgd-est-presets-bar">
                            <span class="sgd-presets-title" data-i18n-id="Pilihan Cepat:" data-i18n-en="Quick Presets:"><i class="fa-solid fa-hand-pointer"></i> Pilihan Cepat:</span>
                            <div class="sgd-preset-pills-row" id="sgdAreaPresets">
                                <button type="button" class="sgd-preset-pill" data-area="150">150 m²</button>
                                <button type="button" class="sgd-preset-pill active" data-area="350">350 m²</button>
                                <button type="button" class="sgd-preset-pill" data-area="500">500 m²</button>
                                <button type="button" class="sgd-preset-pill" data-area="1000">1.000 m²</button>
                                <button type="button" class="sgd-preset-pill" data-area="2500">2.500 m²</button>
                                <button type="button" class="sgd-preset-pill" data-area="5000">5.000 m²</button>
                            </div>
                        </div>

                        <input type="range" id="sgdEstAreaSlider" class="sgd-est-range-slider" value="350" min="50" max="5000" step="25" aria-label="Geser untuk mengatur luas m²">
                        <div class="sgd-range-limits">
                            <span>50 m²</span>
                            <span>1.000 m²</span>
                            <span>2.500 m²</span>
                            <span>5.000+ m²</span>
                        </div>
                        <div class="sgd-est-note sgd-mt-2" style="font-size: 0.825rem; color: #64748B;">
                            <i class="fa-solid fa-circle-info" style="color: var(--sgd-primary-600, #CA8A04);"></i>
                            <span id="sgdEstVolumeHint" data-i18n-id="Volume yang dimasukan adalah luas terbangun termasuk Carport" data-i18n-en="Volume entered is gross built-up area including Carport">Volume yang dimasukan adalah luas terbangun termasuk Carport</span>
                        </div>
                    </div>

                    <!-- Step 3: Material Specification Grade -->
                    <div class="sgd-est-step" id="sgdEstGradeStep">
                        <label class="sgd-est-label">
                            <span class="sgd-est-step-num">3</span>
                            <span data-i18n-id="Tingkat Spesifikasi Material & Finishing:" data-i18n-en="Material & Finishing Specification Grade:">Tingkat Spesifikasi Material & Finishing:</span>
                        </label>
                        <div class="sgd-est-grades-grid" id="sgdEstGrades">
                            <button type="button" class="sgd-est-grade-btn" data-grade="standard" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <span class="sgd-grade-badge">Standard</span>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong data-i18n-id="Standard" data-i18n-en="Standard">1. Standard</strong>
                                <small data-i18n-id="Mulai dari Rp 8 Juta / m² (minimum SNI)" data-i18n-en="Starting from IDR 8M / m² (minimum SNI)">Mulai dari Rp 8 Juta / m²</small>
                            </button>
                            <button type="button" class="sgd-est-grade-btn active" data-grade="premium" aria-pressed="true">
                                <div class="sgd-est-btn-top">
                                    <span class="sgd-grade-badge sgd-badge-popular" data-i18n-id="Populer" data-i18n-en="Popular">Populer</span>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong data-i18n-id="Premium" data-i18n-en="Premium">2. Premium</strong>
                                <small data-i18n-id="Mulai dari Rp 10 Juta / m²" data-i18n-en="Starting from IDR 10M / m²">Mulai dari Rp 10 Juta / m²</small>
                            </button>
                            <button type="button" class="sgd-est-grade-btn" data-grade="luxury" aria-pressed="false">
                                <div class="sgd-est-btn-top">
                                    <span class="sgd-grade-badge sgd-badge-luxury">Luxury</span>
                                    <span class="sgd-est-check"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <strong data-i18n-id="Luxury" data-i18n-en="Luxury">3. Luxury</strong>
                                <small data-i18n-id="Mulai dari Rp 12 Juta / m²" data-i18n-en="Starting from IDR 12M / m²">Mulai dari Rp 12 Juta / m²</small>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right: Real-time Live Calculation Results -->
                <div class="sgd-estimator-summary">
                    <div class="sgd-summary-badge">
                        <i class="fa-solid fa-calculator"></i>
                        <span data-i18n-id="HASIL KALKULASI ESTIMASI" data-i18n-en="ESTIMATED CALCULATION RESULTS">HASIL KALKULASI ESTIMASI</span>
                    </div>

                    <div class="sgd-est-cost-display">
                        <span class="sgd-cost-label" data-i18n-id="Perkiraan Rentang Anggaran:" data-i18n-en="Estimated Budget Range:">Perkiraan Rentang Anggaran:</span>
                        <div class="sgd-cost-val" id="sgdEstCostRange">Rp 3,5 Milyar</div>
                        <div class="sgd-cost-sub" id="sgdEstRatePerM2">Rata-rata: Rp 10.000.000 / m²</div>
                    </div>

                    <div class="sgd-est-details-list">
                        <div class="sgd-est-detail-item">
                            <i class="fa-solid fa-clock"></i>
                            <div>
                                <span class="sgd-detail-title" data-i18n-id="Estimasi Durasi Kerja:" data-i18n-en="Estimated Project Timeline:">Estimasi Pembangunan:</span>
                                <strong id="sgdEstDuration">10 - 16 Bulan</strong>
                            </div>
                        </div>
                        <div class="sgd-est-detail-item">
                            <i class="fa-solid fa-shield-halved"></i>
                            <div>
                                <span class="sgd-detail-title" data-i18n-id="Jaminan & Kualitas:" data-i18n-en="Guarantee & Quality:">Jaminan Kualitas:</span>
                                <strong><a href="<?php echo esc_url( home_url( '/services/#standards' ) ); ?>" class="sgd-link-gold" id="sgdEstGuarantee" data-modal="standards" style="text-decoration: underline; font-weight: 700;">SGD Standard <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.8em;"></i></a></strong>
                            </div>
                        </div>
                        <div class="sgd-est-detail-item">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                            <div>
                                <span class="sgd-detail-title" data-i18n-id="Sistem Kontrak:" data-i18n-en="Contract Mechanism:">Sistem Kontrak:</span>
                                <strong id="sgdEstContract">Lumpsum Fixed Price, Cost Plus Fee, atau kombinasi</strong>
                            </div>
                        </div>
                        <div class="sgd-est-detail-item" id="sgdEstSpecItem">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <span class="sgd-detail-title" data-i18n-id="Keterangan Spesifikasi:" data-i18n-en="Specification Details:">Spesifikasi Proyek:</span>
                                <strong id="sgdEstSpecDetail" style="font-weight: 500; font-size: 0.9rem;">Volume yang dimasukan adalah luas terbangun termasuk Carport</strong>
                            </div>
                        </div>
                    </div>

                    <div class="sgd-est-actions">
                        <a href="#" id="sgdEstWaBtn" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg sgd-w-100">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span data-i18n-id="Kirim Rincian Estimasi ke WA Estimator" data-i18n-en="Send Estimate Details to Estimator via WA">Kirim Rincian Estimasi ke WA Estimator</span>
                        </a>
                        <button type="button" class="sgd-btn sgd-btn-outline sgd-w-100 sgd-mt-2" data-modal="profile">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span data-i18n-id="Download Corporate Deck & Spesifikasi" data-i18n-en="Download Corporate Deck & Specifications">Download Corporate Deck & Spesifikasi</span>
                        </button>
                    </div>
                    <p class="sgd-est-disclaimer" data-i18n-id="*Anggaran di atas merupakan estimasi awal berdasarkan luas dan mutu finishing. Nilai riil akan ditentukan setelah survey lapangan dan penyusunan Rencana Anggaran Biaya (RAB) definitif." data-i18n-en="*The above budget is a preliminary estimate based on area and finish quality. The exact contract value will be finalized following physical site survey and formal Bill of Quantities (BOQ) preparation.">
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
                <div class="sgd-section-tag" data-i18n-id="PORTOFOLIO TERBARU" data-i18n-en="RECENT PORTFOLIO">PORTOFOLIO TERBARU</div>
                <h2 class="sgd-section-heading" data-i18n-id="Karya & Rekam Jejak Konstruksi Kami" data-i18n-en="Our Works & Engineering Track Record">Karya & Rekam Jejak Konstruksi Kami</h2>
            </div>
            <div>
                <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="sgd-btn sgd-btn-outline">
                    <span data-i18n-id="Lihat Semua Proyek" data-i18n-en="View All Projects">Lihat Semua Proyek</span>
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
            <div class="sgd-section-tag" data-i18n-id="LEGALITAS & STANDAR KUALITAS KORPORAT" data-i18n-en="CORPORATE LEGALITIES & QUALITY STANDARDS">LEGALITAS & STANDAR KUALITAS KORPORAT</div>
            <h2 class="sgd-section-heading" data-i18n-id="Kepatuhan Regulasi Penuh & Kemitraan Rantai Pasok Teruji" data-i18n-en="Full Regulatory Compliance & Proven Supply Chain Partnerships">Kepatuhan Regulasi Penuh & Kemitraan Rantai Pasok Teruji</h2>
            <p class="sgd-section-subheading" data-i18n-id="Sebagai kontraktor terpercaya, SGD Construction mematuhi seluruh perizinan nasional dan bermitra dengan produsen material tier-1 untuk menjamin ketahanan bangunan Anda." data-i18n-en="As a trusted contractor, SGD Construction adheres to all national building regulations and partners with tier-1 material producers to guarantee exceptional durability.">Sebagai kontraktor terpercaya, SGD Construction mematuhi seluruh perizinan nasional dan bermitra dengan produsen material tier-1 untuk menjamin ketahanan bangunan Anda.</p>
        </div>

        <!-- Compliance & Badges Grid -->
        <div class="sgd-compliance-grid">
            <div class="sgd-compliance-card">
                <div class="sgd-compliance-icon"><i class="fa-solid fa-stamp"></i></div>
                <div class="sgd-compliance-body">
                    <span class="sgd-compliance-num" data-i18n-id="BADAN HUKUM RESMI" data-i18n-en="OFFICIAL CORPORATE ENTITY">BADAN HUKUM RESMI</span>
                    <h4>SGD Construction</h4>
                    <p data-i18n-id="Terdaftar resmi di Kemenkumham RI dengan NIB & Izin Usaha Jasa Konstruksi (IUJK / OSS-RBA) aktif." data-i18n-en="Officially registered at the Ministry of Law & Human Rights RI with active NIB & Construction Business License (IUJK / OSS-RBA).">Terdaftar resmi di Kemenkumham RI dengan NIB & Izin Usaha Jasa Konstruksi (IUJK / OSS-RBA) aktif.</p>
                    <span class="sgd-compliance-check"><i class="fa-solid fa-circle-check"></i> <span data-i18n-id="Terverifikasi Legal" data-i18n-en="Legally Verified">Terverifikasi Legal</span></span>
                </div>
            </div>

            <div class="sgd-compliance-card">
                <div class="sgd-compliance-icon"><i class="fa-solid fa-hard-hat"></i></div>
                <div class="sgd-compliance-body">
                    <span class="sgd-compliance-num" data-i18n-id="SMK3 & KESELAMATAN" data-i18n-en="SMK3 & WORKPLACE SAFETY">SMK3 & KESELAMATAN</span>
                    <h4 data-i18n-id="Standar K3 / SMK3 (PP 50/2012)" data-i18n-en="HSE / SMK3 Standard (PP 50/2012)">Standar K3 / SMK3 (PP 50/2012)</h4>
                    <p data-i18n-id="Protokol Sistem Manajemen K3 ketat di setiap site proyek dengan komitmen Zero Accident." data-i18n-en="Rigorous OHS Management System protocols on every construction site with a Zero Accident commitment.">Protokol Sistem Manajemen K3 ketat di setiap site proyek dengan komitmen Zero Accident.</p>
                    <span class="sgd-compliance-check"><i class="fa-solid fa-circle-check"></i> Zero Lost Time Injury</span>
                </div>
            </div>

            <div class="sgd-compliance-card">
                <div class="sgd-compliance-icon"><i class="fa-solid fa-certificate"></i></div>
                <div class="sgd-compliance-body">
                    <span class="sgd-compliance-num" data-i18n-id="STANDAR MUTU SNI" data-i18n-en="SNI QUALITY STANDARDS">STANDAR MUTU SNI</span>
                    <h4>ISO 9001:2015 Quality System</h4>
                    <p data-i18n-id="Standarisasi pengujian laboratorium mutu beton (slump & cylinder test) serta uji tarik baja berkala." data-i18n-en="Standardized laboratory concrete quality testing (slump & cylinder test) and periodic rebar tensile tests.">Standarisasi pengujian laboratorium mutu beton (slump & cylinder test) serta uji tarik baja berkala.</p>
                    <span class="sgd-compliance-check"><i class="fa-solid fa-circle-check"></i> 100% SNI Compliant</span>
                </div>
            </div>

            <div class="sgd-compliance-card">
                <div class="sgd-compliance-icon"><i class="fa-solid fa-id-card-clip"></i></div>
                <div class="sgd-compliance-body">
                    <span class="sgd-compliance-num" data-i18n-id="TENAGA AHLI LPJK" data-i18n-en="LPJK CERTIFIED ENGINEERS">TENAGA AHLI LPJK</span>
                    <h4 data-i18n-id="Engineer SKA / SKK Bersertifikat" data-i18n-en="Certified SKA / SKK Engineers">Engineer SKA / SKK Bersertifikat</h4>
                    <p data-i18n-id="Site Manager, Quality Control, dan Ahli Struktur terdaftar di asosiasi profesi resmi (HAKI, IAI, PII)." data-i18n-en="Site Managers, Quality Controllers, and Structural Engineers registered with official associations (HAKI, IAI, PII).">Site Manager, Quality Control, dan Ahli Struktur terdaftar di asosiasi profesi resmi (HAKI, IAI, PII).</p>
                    <span class="sgd-compliance-check"><i class="fa-solid fa-circle-check"></i> <span data-i18n-id="Sertifikasi Nasional" data-i18n-en="National Certification">Sertifikasi Nasional</span></span>
                </div>
            </div>
        </div>

        <!-- Safety & Quality Milestone Strip -->
        <div class="sgd-milestone-strip">
            <div class="sgd-milestone-item">
                <span class="sgd-milestone-val">350.000+</span>
                <span class="sgd-milestone-label" data-i18n-id="Jam Kerja Aman (Safe Man-Hours)" data-i18n-en="Safe Work Man-Hours (Zero Fatality)">Jam Kerja Aman (Safe Man-Hours)</span>
            </div>
            <div class="sgd-milestone-divider"></div>
            <div class="sgd-milestone-item">
                <span class="sgd-milestone-val">100%</span>
                <span class="sgd-milestone-label" data-i18n-id="Lolos Uji Tekan Laboratorium KAN" data-i18n-en="Passed KAN Laboratory Press Tests">Lolos Uji Tekan Laboratorium KAN</span>
            </div>
            <div class="sgd-milestone-divider"></div>
            <div class="sgd-milestone-item">
                <span class="sgd-milestone-val">0</span>
                <span class="sgd-milestone-label" data-i18n-id="Kasus Fatality (Zero Major Accident)" data-i18n-en="Major Accidents / Fatalities">Kasus Fatality (Zero Major Accident)</span>
            </div>
            <div class="sgd-milestone-divider"></div>
            <div class="sgd-milestone-item">
                <span class="sgd-milestone-val" data-i18n-id="5 Tahun" data-i18n-en="5 Years">5 Tahun</span>
                <span class="sgd-milestone-label" data-i18n-id="Garansi Pemeliharaan Kebocoran & Struktur" data-i18n-en="Structural & Leakage Warranty">Garansi Pemeliharaan Kebocoran & Struktur</span>
            </div>
        </div>

        <!-- Tier-1 Supply Chain & Vendor Partners -->
        <div class="sgd-partners-wrapper">
            <h4 class="sgd-partners-title" data-i18n-id="Mitra Produsen Material & Rantai Pasok Resmi SGD:" data-i18n-en="Official Supply Chain & Material Producer Partners:">Mitra Produsen Material & Rantai Pasok Resmi SGD:</h4>
            <div class="sgd-partner-pills-grid">
                <!-- 1. Besi Beton -->
                <div class="sgd-partner-pill">
                    <div class="sgd-partner-logo">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/cs-steel.svg' ); ?>" alt="Cakratunggal Steel (CS) / Perwira" width="40" height="40" loading="lazy">
                    </div>
                    <div class="sgd-partner-info">
                        <strong>Cakratunggal Steel (CS) / Perwira</strong>
                        <span data-i18n-id="Besi Beton Standar SNI" data-i18n-en="Reinforcing Steel (CS / Perwira)">Besi Beton</span>
                    </div>
                </div>

                <!-- 2. Baja -->
                <div class="sgd-partner-pill">
                    <div class="sgd-partner-logo">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/lautan-steel.svg' ); ?>" alt="Lautan Steel" width="40" height="40" loading="lazy">
                    </div>
                    <div class="sgd-partner-info">
                        <strong>Lautan Steel</strong>
                        <span data-i18n-id="Baja Profil & Konstruksi" data-i18n-en="Structural Steel">Baja</span>
                    </div>
                </div>

                <!-- 3. Semen -->
                <div class="sgd-partner-pill">
                    <div class="sgd-partner-logo">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/indocement.svg' ); ?>" alt="Indocement / Holcim" width="40" height="40" loading="lazy">
                    </div>
                    <div class="sgd-partner-info">
                        <strong>Indocement / Holcim</strong>
                        <span data-i18n-id="Semen & Ready-Mix" data-i18n-en="Cement & Ready-Mix">Semen</span>
                    </div>
                </div>

                <!-- 4. Mortar -->
                <div class="sgd-partner-pill">
                    <div class="sgd-partner-logo">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/mortar-utama.svg' ); ?>" alt="Mortar Utama / Drymix" width="40" height="40" loading="lazy">
                    </div>
                    <div class="sgd-partner-info">
                        <strong>Mortar Utama / Drymix</strong>
                        <span data-i18n-id="Semen Instan & Acian" data-i18n-en="Dry Mortar & Render">Mortar</span>
                    </div>
                </div>

                <!-- 5. Alumunium -->
                <div class="sgd-partner-pill">
                    <div class="sgd-partner-logo">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/astral.svg' ); ?>" alt="Astral Aluminium" width="40" height="40" loading="lazy">
                    </div>
                    <div class="sgd-partner-info">
                        <strong>Astral</strong>
                        <span data-i18n-id="Profil Alumunium" data-i18n-en="Aluminium Extrusions">Alumunium</span>
                    </div>
                </div>

                <!-- 6. Alumunium Rakitan -->
                <div class="sgd-partner-pill">
                    <div class="sgd-partner-logo">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/ykk-aleksindo.svg' ); ?>" alt="YKK / Aleksindo" width="40" height="40" loading="lazy">
                    </div>
                    <div class="sgd-partner-info">
                        <strong>YKK / Aleksindo</strong>
                        <span data-i18n-id="Kusen & Jendela Rakitan" data-i18n-en="Fabricated Architectural Framing">Alumunium Rakitan</span>
                    </div>
                </div>

                <!-- 7. Plafond -->
                <div class="sgd-partner-pill">
                    <div class="sgd-partner-logo">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/jayaboard.svg' ); ?>" alt="Gypsum Jayaboard / Panel Sheet" width="40" height="40" loading="lazy">
                    </div>
                    <div class="sgd-partner-info">
                        <strong>Gypsum Jayaboard / Panel Sheet</strong>
                        <span data-i18n-id="Sistem Plafond & Partisi" data-i18n-en="Ceiling & Partition Boards">Plafond</span>
                    </div>
                </div>

                <!-- 8. Kabel Elektrikal -->
                <div class="sgd-partner-pill">
                    <div class="sgd-partner-logo">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/supreme-cable.svg' ); ?>" alt="Kabel Supreme" width="40" height="40" loading="lazy">
                    </div>
                    <div class="sgd-partner-info">
                        <strong>Kabel Supreme</strong>
                        <span data-i18n-id="Kabel Kelistrikan SNI / LMK" data-i18n-en="Electrical Power Cables">Kabel Elektrikal</span>
                    </div>
                </div>

                <!-- 9. Pipa -->
                <div class="sgd-partner-pill">
                    <div class="sgd-partner-logo">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/rucika.svg' ); ?>" alt="Rucika / Wavin" width="40" height="40" loading="lazy">
                    </div>
                    <div class="sgd-partner-info">
                        <strong>Rucika / Wavin</strong>
                        <span data-i18n-id="Pipa Plumbing & Sanitasi" data-i18n-en="Plumbing & Sanitation Pipes">Pipa</span>
                    </div>
                </div>

                <!-- 10. Cat -->
                <div class="sgd-partner-pill">
                    <div class="sgd-partner-logo">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/paint-brands.svg' ); ?>" alt="Jotun / Mowilex / Propan / Dulux" width="40" height="40" loading="lazy">
                    </div>
                    <div class="sgd-partner-info">
                        <strong>Jotun / Mowilex / Propan / Dulux</strong>
                        <span data-i18n-id="Cat Arsitektur & Pelapis Dinding" data-i18n-en="Architectural Paint & Coatings">Cat</span>
                    </div>
                </div>
            </div>

            <!-- Material Standard CTA Button -->
            <div class="text-center sgd-mt-4">
                <a href="<?php echo esc_url( home_url( '/services/#standards' ) ); ?>" class="sgd-btn sgd-btn-outline-gold" data-modal="standards">
                    <i class="fa-solid fa-list-check"></i>
                    <span data-i18n-id="Lengkapnya cek SGD Material Standard" data-i18n-en="Check SGD Material Standard for Full Specs">Lengkapnya cek SGD Material Standard</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 5. WORK PROCESS / METHODOLOGY -->
<section class="sgd-section sgd-section-process bg-dark text-white">
    <div class="sgd-container">
        <div class="sgd-section-header text-center">
            <div class="sgd-section-tag sgd-tag-gold" data-i18n-id="METODOLOGI KERJA KAMI" data-i18n-en="OUR WORKING METHODOLOGY">METODOLOGI KERJA KAMI</div>
            <h2 class="sgd-section-heading text-white" data-i18n-id="Tahapan Konstruksi Terstruktur & Terukur" data-i18n-en="Structured & Measurable Construction Phases">Tahapan Konstruksi Terstruktur & Terukur</h2>
            <p class="sgd-section-subheading text-slate-300" data-i18n-id="Kami menerapkan alur kerja yang terstandarisasi untuk menjamin kepastian jadwal dan kualitas bangunan tanpa kompromi." data-i18n-en="We implement standardized workflows to guarantee schedule certainty and uncompromising construction quality.">Kami menerapkan alur kerja yang terstandarisasi untuk menjamin kepastian jadwal dan kualitas bangunan tanpa kompromi.</p>
        </div>

        <div class="sgd-process-grid">
            <div class="sgd-process-step">
                <div class="sgd-step-number">01</div>
                <h4 data-i18n-id="Konsultasi & Feasibility Study" data-i18n-en="Consultation & Feasibility Study">Konsultasi & Feasibility Study</h4>
                <p data-i18n-id="Diskusi komprehensif mengenai visi kebutuhan, survey lokasi fisik, evaluasi teknis tanah, dan studi kelayakan rencana bangunan." data-i18n-en="Comprehensive discussion on vision requirements, physical site survey, soil technical assessment, and feasibility studies.">Diskusi komprehensif mengenai visi kebutuhan, survey lokasi fisik, evaluasi teknis tanah, dan studi kelayakan rencana bangunan.</p>
            </div>
            <div class="sgd-process-step">
                <div class="sgd-step-number">02</div>
                <h4 data-i18n-id="Desain Arsitektur & Estimasi RAB" data-i18n-en="Architectural Design & BOQ Estimation">Desain Arsitektur & Estimasi RAB</h4>
                <p data-i18n-id="Pengembangan gambar arsitektur 3D, kalkulasi struktur teknis, dan perumusan Rencana Anggaran Biaya (RAB) yang presisi dan transparan." data-i18n-en="Development of 3D architectural plans, technical structural calculations, and formulation of an accurate, transparent Bill of Quantities (BOQ).">Pengembangan gambar arsitektur 3D, kalkulasi struktur teknis, dan perumusan Rencana Anggaran Biaya (RAB) yang presisi dan transparan.</p>
            </div>
            <div class="sgd-process-step">
                <div class="sgd-step-number">03</div>
                <h4 data-i18n-id="Kontrak Legalitas & Pengadaan" data-i18n-en="Legal Contracts & Procurement">Kontrak Legalitas & Pengadaan</h4>
                <p data-i18n-id="Penandatanganan SPK resmi bermaterai, pengurusan perizinan (PBG/SLF), dan seleksi pengadaan material sesuai spesifikasi kesepakatan." data-i18n-en="Execution of binding legal contracts (SPK), permit processing (PBG/SLF), and material procurement according to agreed specifications.">Penandatanganan SPK resmi bermaterai, pengurusan perizinan (PBG/SLF), dan seleksi pengadaan material sesuai spesifikasi kesepakatan.</p>
            </div>
            <div class="sgd-process-step">
                <div class="sgd-step-number">04</div>
                <h4 data-i18n-id="Konstruksi & Quality Control" data-i18n-en="Construction & Quality Control">Konstruksi & Quality Control</h4>
                <p data-i18n-id="Pelaksanaan konstruksi di lapangan oleh tenaga terlatih di bawah supervisi ketat Site Manager dan Quality Control bersertifikat." data-i18n-en="On-site execution by skilled labor supervised closely by certified Site Managers and Quality Control engineers.">Pelaksanaan konstruksi di lapangan oleh tenaga terlatih di bawah supervisi ketat Site Manager dan Quality Control bersertifikat.</p>
            </div>
            <div class="sgd-process-step">
                <div class="sgd-step-number">05</div>
                <h4 data-i18n-id="Serah Terima & Garansi Pemeliharaan" data-i18n-en="Handover & Maintenance Warranty">Serah Terima & Garansi Pemeliharaan</h4>
                <p data-i18n-id="Berita acara serah terima (BAST) setelah inspeksi final, penyerahan as-built drawing, serta masa garansi pemeliharaan struktural." data-i18n-en="Final handover report (BAST) following mutual inspection, delivery of as-built drawings, and warranty activation.">Berita acara serah terima (BAST) setelah inspeksi final, penyerahan as-built drawing, serta masa garansi pemeliharaan struktural.</p>
            </div>
        </div>

        <!-- Digital Transparency & Construction Intelligence Strip -->
        <div class="sgd-transparency-box sgd-mt-5">
            <div class="sgd-transparency-header">
                <div class="sgd-badge-accent"><i class="fa-solid fa-satellite-dish"></i> MODERN PROJECT CONTROLS</div>
                <h3 data-i18n-id="Transparansi Penuh untuk Pemilik Proyek & Komite Korporat" data-i18n-en="Full Transparency for Project Owners & Corporate Boards">Transparansi Penuh untuk Pemilik Proyek & Komite Korporat</h3>
                <p data-i18n-id="Kami menghilangkan kekhawatiran klasik keterlambatan dan biaya siluman dengan ekosistem pelaporan digital modern:" data-i18n-en="We eliminate classic risks of delays and hidden expenses through a modern digital reporting ecosystem:">Kami menghilangkan kekhawatiran klasik keterlambatan dan biaya siluman dengan ekosistem pelaporan digital modern:</p>
            </div>
            <div class="sgd-transparency-grid">
                <div class="sgd-transparency-item">
                    <i class="fa-solid fa-chart-line"></i>
                    <div>
                        <h4 data-i18n-id="Kurva-S & Laporan Digital Mingguan" data-i18n-en="S-Curve Tracking & Weekly Digital Reports">Kurva-S & Laporan Digital Mingguan</h4>
                        <p data-i18n-id="Pemantauan deviasi progress fisik vs rencana kerja secara berkala yang dikirimkan langsung ke manajemen owner." data-i18n-en="Continuous tracking of physical progress against schedule, delivered directly to the client's management.">Pemantauan deviasi progress fisik vs rencana kerja secara berkala yang dikirimkan langsung ke manajemen owner.</p>
                    </div>
                </div>
                <div class="sgd-transparency-item">
                    <i class="fa-solid fa-helicopter"></i>
                    <div>
                        <h4 data-i18n-id="Dokumentasi Drone Aerial Berkala" data-i18n-en="Periodic 4K Drone Aerial Documentation">Dokumentasi Drone Aerial Berkala</h4>
                        <p data-i18n-id="Inspeksi elevasi atap, struktur bentang tinggi, dan perkembangan tapak proyek dengan foto/video resolusi tinggi 4K." data-i18n-en="Roof elevations, high-span structures, and site progress surveyed with crystal-clear 4K aerial photography.">Inspeksi elevasi atap, struktur bentang tinggi, dan perkembangan tapak proyek dengan foto/video resolusi tinggi 4K.</p>
                    </div>
                </div>
                <div class="sgd-transparency-item">
                    <i class="fa-solid fa-vial-circle-check"></i>
                    <div>
                        <h4 data-i18n-id="Pengujian Uji Laboratorium KAN" data-i18n-en="KAN Accredited Laboratory Testing">Pengujian Uji Laboratorium KAN</h4>
                        <p data-i18n-id="Uji slump on-site setiap batch cor, tes tekan silinder beton umur 7, 14, 28 hari, serta uji tarik besi tulangan." data-i18n-en="On-site slump tests for each concrete batch, compressive tests at 7, 14, 28 days, and steel tensile testing.">Uji slump on-site setiap batch cor, tes tekan silinder beton umur 7, 14, 28 hari, serta uji tarik besi tulangan.</p>
                    </div>
                </div>
                <div class="sgd-transparency-item">
                    <i class="fa-solid fa-file-contract"></i>
                    <div>
                        <h4 data-i18n-id="Garansi Harga Kontrak (Fixed-Cost)" data-i18n-en="Fixed-Cost Contract Guarantee">Garansi Harga Kontrak (Fixed-Cost)</h4>
                        <p data-i18n-id="Perlindungan anggaran Anda dengan kontrak definitif tanpa kenaikan biaya sepihak di tengah proses pembangunan." data-i18n-en="Budget protection backed by definitive contracts with zero unilateral cost escalations during construction.">Perlindungan anggaran Anda dengan kontrak definitif tanpa kenaikan biaya sepihak di tengah proses pembangunan.</p>
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
                <div class="sgd-section-tag" data-i18n-id="NILAI KEUNGGULAN" data-i18n-en="OUR CORE ADVANTAGES">NILAI KEUNGGULAN</div>
                <h2 class="sgd-section-heading" data-i18n-id="Mengapa Mempercayakan Proyek Anda pada SGD Construction?" data-i18n-en="Why Entrust Your Construction Project to SGD?">Mengapa Mempercayakan Proyek Anda pada SGD Construction?</h2>
                <p class="sgd-lead-text" data-i18n-id="Keberhasilan setiap proyek konstruksi berawal dari kepercayaan dan ketepatan eksekusi. Kami memberikan jaminan kepastian dari segala aspek." data-i18n-en="The success of every building project stems from trust and precise execution. We deliver complete certainty across every dimension.">
                    Keberhasilan setiap proyek konstruksi berawal dari kepercayaan dan ketepatan eksekusi. Kami memberikan jaminan kepastian dari segala aspek.
                </p>

                <div class="sgd-value-cards">
                    <div class="sgd-value-card">
                        <div class="sgd-value-icon"><i class="fa-solid fa-file-shield"></i></div>
                        <div>
                            <h4 data-i18n-id="Legalitas Lengkap & Terpercaya" data-i18n-en="Comprehensive & Trusted Legalities">Legalitas Lengkap & Terpercaya</h4>
                            <p data-i18n-id="Beroperasi dengan perizinan konstruksi lengkap dan standar profesional SGD Construction." data-i18n-en="Operating with complete construction licensing and SGD Construction professional standards.">Beroperasi dengan perizinan konstruksi lengkap dan standar profesional SGD Construction.</p>
                        </div>
                    </div>
                    <div class="sgd-value-card">
                        <div class="sgd-value-icon"><i class="fa-solid fa-stopwatch-20"></i></div>
                        <div>
                            <h4 data-i18n-id="Ketepatan Waktu (On-Time Delivery)" data-i18n-en="On-Time Delivery Commitment">Ketepatan Waktu (On-Time Delivery)</h4>
                            <p data-i18n-id="Sistem manajemen kurva-S dan time-scheduling ketat untuk memastikan tanggal serah terima tidak meleset." data-i18n-en="Strict S-curve project management and disciplined scheduling ensuring handover deadlines are met.">Sistem manajemen kurva-S dan time-scheduling ketat untuk memastikan tanggal serah terima tidak meleset.</p>
                        </div>
                    </div>
                    <div class="sgd-value-card">
                        <div class="sgd-value-icon"><i class="fa-solid fa-coins"></i></div>
                        <div>
                            <h4 data-i18n-id="Anggaran Pasti & Bebas Biaya Tak Terduga" data-i18n-en="Guaranteed Budget & Zero Hidden Costs">Anggaran Pasti & Bebas Biaya Tak Terduga</h4>
                            <p data-i18n-id="Harga kontrak fix-cost yang mengikat sehingga Anda memiliki kepastian finansial dari awal hingga akhir proyek." data-i18n-en="Binding fixed-cost contract pricing providing complete financial certainty from start to finish.">Harga kontrak fix-cost yang mengikat sehingga Anda memiliki kepastian finansial dari awal hingga akhir proyek.</p>
                        </div>
                    </div>
                    <div class="sgd-value-card">
                        <div class="sgd-value-icon sgd-value-icon-care">
                            <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/SGD CARE Horizontal.png' ); ?>" alt="SGD Care" class="sgd-care-value-icon">
                        </div>
                        <div>
                            <h4 data-i18n-id="SGD Care Dukungan Purna Jual" data-i18n-en="SGD Care After-Sales Support">SGD Care Dukungan Purna Jual</h4>
                            <p data-i18n-id="Dukungan paska konstruksi melalui unit SGD Care untuk perawatan jangka panjang gedung dan properti Anda." data-i18n-en="Post-construction support through our dedicated SGD Care division for ongoing building maintenance.">Dukungan paska konstruksi melalui unit SGD Care untuk perawatan jangka panjang gedung dan properti Anda.</p>
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
                            <span>SGD Construction</span>
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
                        <p data-i18n-id="Pantau progress proyek langsung dan dokumentasi lapangan kami di Instagram." data-i18n-en="Follow live project progress and field documentation on our Instagram."><i class="fa-regular fa-heart"></i> Pantau progress proyek langsung dan dokumentasi lapangan kami di Instagram.</p>
                        <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" class="sgd-link-arrow">
                            <span data-i18n-id="Kunjungi @sgdconstruction" data-i18n-en="Visit @sgdconstruction">Kunjungi @sgdconstruction</span> <i class="fa-solid fa-arrow-up-right-from-square"></i>
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
            <div class="sgd-section-tag" data-i18n-id="PERTANYAAN UMUM KLIEN (FAQ)" data-i18n-en="FREQUENTLY ASKED QUESTIONS (FAQ)">PERTANYAAN UMUM KLIEN (FAQ)</div>
            <h2 class="sgd-section-heading" data-i18n-id="Informasi Seputar Layanan & Prosedur Kontrak SGD" data-i18n-en="Information Regarding SGD Services & Contracting Procedures">Informasi Seputar Layanan & Prosedur Kontrak SGD</h2>
            <p class="sgd-section-subheading" data-i18n-id="Pertanyaan paling sering diajukan oleh pemilik properti, pengembang, dan komite pengadaan korporat." data-i18n-en="Frequently asked questions by property owners, developers, and corporate procurement committees.">Pertanyaan paling sering diajukan oleh pemilik properti, pengembang, dan komite pengadaan korporat.</p>
        </div>

        <div class="sgd-faq-wrapper">
            <!-- FAQ Item 1 -->
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question" aria-expanded="false">
                    <span data-i18n-id="Apakah SGD Construction melayani pengurusan perizinan (PBG & SLF)?" data-i18n-en="Does SGD Construction handle building permits (PBG & SLF)?">Apakah SGD Construction melayani pengurusan perizinan (PBG & SLF)?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p data-i18n-html-id="&lt;strong&gt;Ya, tentu.&lt;/strong&gt; Kami menyediakan layanan terintegrasi *One-Stop Solution* mulai dari penyusunan gambar teknis kerja arsitektur, perhitungan kalkulasi struktur bersertifikat (TABG/SimBG), kajian tata lingkungan, hingga penerbitan Persetujuan Bangunan Gedung (PBG) dan Sertifikat Laik Fungsi (SLF) di dinas terkait." data-i18n-html-en="&lt;strong&gt;Yes, absolutely.&lt;/strong&gt; We provide an integrated One-Stop Solution ranging from architectural working drawings, certified structural calculations (TABG/SimBG), environmental assessments, through to the issuance of Building Approval (PBG) and Certificate of Acceptability (SLF) with municipal authorities."><strong>Ya, tentu.</strong> Kami menyediakan layanan terintegrasi *One-Stop Solution* mulai dari penyusunan gambar teknis kerja arsitektur, perhitungan kalkulasi struktur bersertifikat (TABG/SimBG), kajian tata lingkungan, hingga penerbitan Persetujuan Bangunan Gedung (PBG) dan Sertifikat Laik Fungsi (SLF) di dinas terkait.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question" aria-expanded="false">
                    <span data-i18n-id="Bagaimana mekanisme termin pembayaran kontrak konstruksi di SGD?" data-i18n-en="What is the construction contract payment milestone structure at SGD?">Bagaimana mekanisme termin pembayaran kontrak konstruksi di SGD?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p data-i18n-id="Pembayaran dilakukan secara bertahap (termin) sesuai kurva-S dan progres fisik lapangan yang diverifikasi bersama (*Joint Inspection*). Skema umum dimulai dari uang muka (DP), termin berkala per kelipatan progres (misal 25%, 50%, 75%, 100%), dan penahanan retensi pemeliharaan (3%–5%) hingga masa retensi berakhir dengan aman." data-i18n-en="Payments are made in milestone installments tied to physical progress verified via Joint Inspection. Typical schedules start with a down payment (DP), progress installments (e.g. 25%, 50%, 75%, 100%), and a retention holdback (3%–5%) released upon warranty expiration.">Pembayaran dilakukan secara bertahap (termin) sesuai kurva-S dan progres fisik lapangan yang diverifikasi bersama (*Joint Inspection*). Skema umum dimulai dari uang muka (DP), termin berkala per kelipatan progres (misal 25%, 50%, 75%, 100%), dan penahanan retensi pemeliharaan (3%–5%) hingga masa retensi berakhir dengan aman.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question" aria-expanded="false">
                    <span data-i18n-id="Berapa lama masa garansi pemeliharaan (retensi) yang diberikan?" data-i18n-en="How long is the structural retention and maintenance warranty period?">Berapa lama masa garansi pemeliharaan (retensi) yang diberikan?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p data-i18n-html-id="Kami memberikan garansi pemeliharaan struktural hingga &lt;strong&gt;5 tahun&lt;/strong&gt; untuk kekuatan struktur utama dan &lt;strong&gt;3 hingga 12 bulan&lt;/strong&gt; untuk masa retensi pekerjaan arsitektural/finishing serta waterproofing. Segala perbaikan selama masa retensi didukung langsung oleh unit respons cepat &lt;strong&gt;SGD Care&lt;/strong&gt;." data-i18n-html-en="We provide up to a &lt;strong&gt;5-year&lt;/strong&gt; structural warranty on core engineering elements and &lt;strong&gt;3 to 12 months&lt;/strong&gt; retention for architectural finishes and waterproofing. All warranty repairs are backed directly by our rapid-response &lt;strong&gt;SGD Care&lt;/strong&gt; unit.">Kami memberikan garansi pemeliharaan struktural hingga <strong>5 tahun</strong> untuk kekuatan struktur utama dan <strong>3 hingga 12 bulan</strong> untuk masa retensi pekerjaan arsitektural/finishing serta waterproofing. Segala perbaikan selama masa retensi didukung langsung oleh unit respons cepat <strong>SGD Care</strong>.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question" aria-expanded="false">
                    <span data-i18n-id="Bagaimana SGD menjamin proyek selesai on-time tanpa biaya tambahan tak terduga?" data-i18n-en="How does SGD guarantee on-time completion without unexpected additional costs?">Bagaimana SGD menjamin proyek selesai on-time tanpa biaya tambahan tak terduga?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p data-i18n-id="Kami mengikat komitmen melalui Surat Perjanjian Kerja (SPK) resmi bermaterai dengan skema *Fixed-Lump Sum*. Setiap tahapan diawasi menggunakan kurva-S digital ketat dengan mitigasi risiko cuaca dan suplai material sejak hari pertama, sehingga tanggal serah terima dijamin tepat waktu." data-i18n-en="We commit via formal binding contracts (SPK) using a Fixed-Lump Sum scheme. Every phase is supervised via digital S-curve scheduling with upfront weather and supply chain risk mitigation, guaranteeing on-time handover.">Kami mengikat komitmen melalui Surat Perjanjian Kerja (SPK) resmi bermaterai dengan skema *Fixed-Lump Sum*. Setiap tahapan diawasi menggunakan kurva-S digital ketat dengan mitigasi risiko cuaca dan suplai material sejak hari pertama, sehingga tanggal serah terima dijamin tepat waktu.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question" aria-expanded="false">
                    <span data-i18n-id="Apakah SGD melayani proyek di luar kawasan Jabodetabek?" data-i18n-en="Does SGD accept construction projects outside the Greater Jakarta (Jabodetabek) region?">Apakah SGD melayani proyek di luar kawasan Jabodetabek?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p data-i18n-html-id="&lt;strong&gt;Ya.&lt;/strong&gt; Meskipun basis operasional kami berada di Jakarta Barat, tim engineer SGD telah sukses menangani proyek di berbagai kawasan industri dan residensial di Jawa Barat, Banten, Jawa Tengah, Jawa Timur, hingga Bali dan Sumatera." data-i18n-html-en="&lt;strong&gt;Yes.&lt;/strong&gt; While our headquarters are in West Jakarta, our engineering team has successfully executed projects across industrial and residential zones in West Java, Banten, Central Java, East Java, Bali, and Sumatra."><strong>Ya.</strong> Meskipun basis operasional kami berada di Jakarta Barat, tim engineer SGD telah sukses menangani proyek di berbagai kawasan industri dan residensial di Jawa Barat, Banten, Jawa Tengah, Jawa Timur, hingga Bali dan Sumatera.</p>
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
                <span class="sgd-badge-accent" data-i18n-id="SIAP MEMULAI PROYEK ANDA?" data-i18n-en="READY TO START YOUR PROJECT?">SIAP MEMULAI PROYEK ANDA?</span>
                <h2 data-i18n-id="Konsultasikan Rencana Bangunan Anda Sekarang" data-i18n-en="Consult Your Building Plan With Us Today">Konsultasikan Rencana Bangunan Anda Sekarang</h2>
                <p data-i18n-id="Dapatkan estimasi biaya awal, konsultasi teknis arsitektur & struktur langsung bersama tim engineer kami secara cepat melalui WhatsApp." data-i18n-en="Get preliminary cost estimates and direct technical consultations on architecture and structure with our engineers via WhatsApp.">Dapatkan estimasi biaya awal, konsultasi teknis arsitektur & struktur langsung bersama tim engineer kami secara cepat melalui WhatsApp.</p>
                <div class="sgd-cta-buttons">
                    <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin konsultasi rencana proyek konstruksi.') ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg">
                        <i class="fa-brands fa-whatsapp"></i> <span data-i18n-id="Chat WhatsApp 08116016868" data-i18n-en="Chat WhatsApp 08116016868">Chat WhatsApp 08116016868</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sgd-btn sgd-btn-white sgd-btn-lg">
                        <i class="fa-solid fa-envelope"></i> <span data-i18n-id="Kirim Form Inquiry" data-i18n-en="Submit Inquiry Form">Kirim Form Inquiry</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
