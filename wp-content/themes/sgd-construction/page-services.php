<?php
/**
 * Template Name: Services Page Template
 *
 * @package SGD_Construction
 */

get_header();
?>

<!-- Page Header -->
<section class="sgd-page-header">
    <div class="sgd-page-header-bg" style="background-image: url('<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-contracting.jpg' ); ?>');"></div>
    <div class="sgd-page-header-overlay"></div>
    <div class="sgd-container">
        <div class="sgd-page-header-content">
            <div class="sgd-breadcrumbs">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-i18n-id="Beranda" data-i18n-en="Home">Beranda</a>
                <span class="sgd-bc-sep">/</span>
                <span data-i18n-id="Layanan" data-i18n-en="Services">Layanan</span>
            </div>
            <h1 class="sgd-page-title" data-i18n-id="Layanan Konstruksi & Rancang Bangun" data-i18n-en="Construction & Design-Build Services">Layanan Konstruksi & Rancang Bangun</h1>
            <p class="sgd-page-lead" data-i18n-id="Pendekatan menyeluruh dalam rekayasa sipil, arsitektur, interior, dan pemeliharaan properti untuk memenuhi kebutuhan komersial, industri, dan residensial." data-i18n-en="A comprehensive approach in civil engineering, architecture, interior fit-out, and property maintenance to fulfill commercial, industrial, and residential requirements.">Pendekatan menyeluruh dalam rekayasa sipil, arsitektur, interior, dan pemeliharaan properti untuk memenuhi kebutuhan komersial, industri, dan residensial.</p>
        </div>
    </div>
</section>

<!-- Services In-depth Detail Sections -->
<section class="sgd-section">
    <div class="sgd-container">

        <!-- 1. Rumah Tinggal -->
        <div class="sgd-service-detail-row" id="residential">
            <div class="sgd-grid-2col sgd-items-center">
                <div class="sgd-service-detail-text">
                    <span class="sgd-service-index" data-i18n-id="LAYANAN 01" data-i18n-en="SERVICE 01">LAYANAN 01</span>
                    <h2 class="sgd-service-title" data-i18n-id="01 — Rumah Tinggal" data-i18n-en="01 — Residential Living">01 — Rumah Tinggal</h2>
                    <p class="sgd-lead-text" data-i18n-id="Pembangunan dan renovasi rumah dengan perhatian pada kebutuhan penghuni, ketelitian pengerjaan, dan kenyamanan jangka panjang." data-i18n-en="Residential construction and renovation with attention to resident needs, craftsmanship precision, and long-term living comfort.">
                        Pembangunan dan renovasi rumah dengan perhatian pada kebutuhan penghuni, ketelitian pengerjaan, dan kenyamanan jangka panjang.
                    </p>
                    <div class="sgd-scope-box">
                        <h4 data-i18n-id="Lingkup Pekerjaan Rumah Tinggal:" data-i18n-en="Residential Work Scope:">Lingkup Pekerjaan Rumah Tinggal:</h4>
                        <ul class="sgd-scope-list">
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Pembangunan Rumah Baru:&lt;/strong&gt; Pembangunan hunian tinggal baru dari pondasi hingga finishing dengan standar presisi tinggi." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;New Home Construction:&lt;/strong&gt; Building new private residences from deep foundations to high-precision luxury finishes."><i class="fa-solid fa-check"></i> <strong>Pembangunan Rumah Baru:</strong> Pembangunan hunian tinggal baru dari pondasi hingga finishing dengan standar presisi tinggi.</li>
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Renovasi &amp; Pengembangan Rumah:&lt;/strong&gt; Perluasan lantai, penambahan ruang, peremajaan fasad, dan modernisasi tata ruang." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Home Renovation &amp; Expansion:&lt;/strong&gt; Floor vertical extensions, additional rooms, facade rejuvenation, and modern spatial re-layouts."><i class="fa-solid fa-check"></i> <strong>Renovasi & Pengembangan Rumah:</strong> Perluasan lantai, penambahan ruang, peremajaan fasad, dan modernisasi tata ruang.</li>
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Peningkatan Fungsi &amp; Kenyamanan:&lt;/strong&gt; Optimalisasi sirkulasi udara, pencahayaan alami, peredaman suara, dan waterproofing menyeluruh." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Function &amp; Comfort Enhancement:&lt;/strong&gt; Optimizing natural airflow, daylighting, acoustics, and comprehensive waterproofing."><i class="fa-solid fa-check"></i> <strong>Peningkatan Fungsi & Kenyamanan:</strong> Optimalisasi sirkulasi udara, pencahayaan alami, peredaman suara, dan waterproofing menyeluruh.</li>
                        </ul>
                    </div>
                    <div class="sgd-service-cta-btn">
                        <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin berkonsultasi mengenai pembangunan / renovasi Rumah Tinggal.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> <span data-i18n-id="Konsultasi Layanan Rumah" data-i18n-en="Consult Residential Services">Konsultasi Layanan Rumah</span>
                        </a>
                    </div>
                </div>
                <div class="sgd-service-detail-media">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/project-1.jpg' ); ?>" alt="01 — Rumah Tinggal SGD Construction" class="sgd-img-rounded">
                </div>
            </div>
        </div>

        <hr class="sgd-divider-line">

        <!-- 2. Bangunan Komersial -->
        <div class="sgd-service-detail-row" id="commercial">
            <div class="sgd-grid-2col sgd-items-center sgd-row-reverse">
                <div class="sgd-service-detail-text">
                    <span class="sgd-service-index" data-i18n-id="LAYANAN 02" data-i18n-en="SERVICE 02">LAYANAN 02</span>
                    <h2 class="sgd-service-title" data-i18n-id="02 — Bangunan Komersial" data-i18n-en="02 — Commercial Buildings">02 — Bangunan Komersial</h2>
                    <p class="sgd-lead-text" data-i18n-id="Pembangunan dan renovasi ruang usaha dengan memperhatikan fungsi bangunan, kebutuhan operasional, dan identitas bisnis Anda." data-i18n-en="Construction and renovation of commercial spaces taking into account building functionality, operational efficiency, and your corporate identity.">
                        Pembangunan dan renovasi ruang usaha dengan memperhatikan fungsi bangunan, kebutuhan operasional, dan identitas bisnis Anda.
                    </p>
                    <div class="sgd-scope-box">
                        <h4 data-i18n-id="Lingkup Bangunan Komersial:" data-i18n-en="Commercial Scope of Work:">Lingkup Bangunan Komersial:</h4>
                        <ul class="sgd-scope-list">
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Kantor &amp; Tempat Usaha:&lt;/strong&gt; Gedung perkantoran bertingkat, pusat bisnis, klinik, cafe, dan restoran modern." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Offices &amp; Business Premises:&lt;/strong&gt; Multi-story office buildings, commercial hubs, modern clinics, cafes, and restaurants."><i class="fa-solid fa-check"></i> <strong>Kantor & Tempat Usaha:</strong> Gedung perkantoran bertingkat, pusat bisnis, klinik, cafe, dan restoran modern.</li>
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Ruko &amp; Ruang Komersial:&lt;/strong&gt; Pembangunan unit ruko (s.d. 4 lantai) dan deretan retail dengan durabilitas struktural teruji." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Shophouses &amp; Retail Spaces:&lt;/strong&gt; Construction of shophouses (up to 4 floors) and commercial strips with tested structural durability."><i class="fa-solid fa-check"></i> <strong>Ruko & Ruang Komersial:</strong> Pembangunan unit ruko (s.d. 4 lantai) dan deretan retail dengan durabilitas struktural teruji.</li>
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Renovasi &amp; Penyesuaian Fasilitas:&lt;/strong&gt; Re-layout ruang kerja komersial, peremajaan fasad modern, dan upgrade utilitas MEP." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Facility Renovation &amp; Reconfiguration:&lt;/strong&gt; Spatial re-layouts, modern facade retrofits, and electrical/HVAC utility upgrades."><i class="fa-solid fa-check"></i> <strong>Renovasi & Penyesuaian Fasilitas:</strong> Re-layout ruang kerja komersial, peremajaan fasad modern, dan upgrade utilitas MEP.</li>
                        </ul>
                    </div>
                    <div class="sgd-service-cta-btn">
                        <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin berkonsultasi mengenai proyek Bangunan Komersial.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> <span data-i18n-id="Konsultasi Bangunan Komersial" data-i18n-en="Consult Commercial Buildings">Konsultasi Bangunan Komersial</span>
                        </a>
                    </div>
                </div>
                <div class="sgd-service-detail-media">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-contracting.jpg' ); ?>" alt="02 — Bangunan Komersial SGD Construction" class="sgd-img-rounded">
                </div>
            </div>
        </div>

        <hr class="sgd-divider-line">

        <!-- 3. Proyek Khusus -->
        <div class="sgd-service-detail-row" id="special">
            <div class="sgd-grid-2col sgd-items-center">
                <div class="sgd-service-detail-text">
                    <span class="sgd-service-index" data-i18n-id="LAYANAN 03" data-i18n-en="SERVICE 03">LAYANAN 03</span>
                    <h2 class="sgd-service-title" data-i18n-id="03 — Proyek Khusus" data-i18n-en="03 — Special Projects">03 — Proyek Khusus</h2>
                    <p class="sgd-lead-text" data-i18n-id="Pelaksanaan proyek dengan kebutuhan bentuk, fungsi, atau pengerjaan khusus melalui koordinasi bersama pemilik, perancang, dan mitra spesialis." data-i18n-en="Execution of projects with custom architectural forms, specialized technical functions, or challenging execution via close coordination with owners, designers, and specialists.">
                        Pelaksanaan proyek dengan kebutuhan bentuk, fungsi, atau pengerjaan khusus melalui koordinasi bersama pemilik, perancang, dan mitra spesialis.
                    </p>
                    <div class="sgd-scope-box">
                        <h4 data-i18n-id="Lingkup Proyek Khusus:" data-i18n-en="Special Projects Scope:">Lingkup Proyek Khusus:</h4>
                        <ul class="sgd-scope-list">
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Konstruksi &amp; Instalasi Khusus:&lt;/strong&gt; Struktur baja bentang lebar, fasad parametrik, mezzanine berat, dan pondasi mesin industri." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Specialized Construction &amp; Installations:&lt;/strong&gt; Wide-span steel structures, parametric facades, heavy mezzanines, and industrial equipment footings."><i class="fa-solid fa-check"></i> <strong>Konstruksi & Instalasi Khusus:</strong> Struktur baja bentang lebar, fasad parametrik, mezzanine berat, dan pondasi mesin industri.</li>
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Pengerjaan Berdasarkan Desain:&lt;/strong&gt; Penerjemahan gambar arsitek visioner menjadi realitas fisik lapangan dengan kepatuhan toleransi tinggi." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Design-Driven Craftsmanship:&lt;/strong&gt; Translating visionary architectural blueprints into physical reality with tight tolerance precision."><i class="fa-solid fa-check"></i> <strong>Pengerjaan Berdasarkan Desain:</strong> Penerjemahan gambar arsitek visioner menjadi realitas fisik lapangan dengan kepatuhan toleransi tinggi.</li>
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Koordinasi Teknis &amp; Pelaksanaan:&lt;/strong&gt; Manajemen satu pintu yang mensinkronkan tim owner, konsultan struktur, MEP, dan sub-kontraktor spesialis." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Technical &amp; Site Coordination:&lt;/strong&gt; Unified project management synchronizing client teams, structural consultants, MEP, and specialist partners."><i class="fa-solid fa-check"></i> <strong>Koordinasi Teknis & Pelaksanaan:</strong> Manajemen satu pintu yang mensinkronkan tim owner, konsultan struktur, MEP, dan sub-kontraktor spesialis.</li>
                        </ul>
                    </div>
                    <div class="sgd-service-cta-btn">
                        <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin mendiskusikan Proyek Khusus.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> <span data-i18n-id="Diskusikan Proyek Khusus" data-i18n-en="Discuss Special Projects">Diskusikan Proyek Khusus</span>
                        </a>
                    </div>
                </div>
                <div class="sgd-service-detail-media">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-architecture.jpg' ); ?>" alt="03 — Proyek Khusus SGD Construction" class="sgd-img-rounded">
                </div>
            </div>
        </div>

        <hr class="sgd-divider-line">

        <!-- 4. SGD Care -->
        <div class="sgd-service-detail-row" id="care">
            <div class="sgd-grid-2col sgd-items-center sgd-row-reverse">
                <div class="sgd-service-detail-text">
                    <div class="sgd-care-detail-brand">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/SGD CARE Horizontal.png' ); ?>" alt="SGD Care Logo" class="sgd-care-detail-logo">
                    </div>
                    <div class="sgd-badge-accent mb-2" data-i18n-id="PERAWATAN & PERBAIKAN PROPERTI" data-i18n-en="PROPERTY MAINTENANCE & REPAIRS">
                        PERAWATAN &amp; PERBAIKAN PROPERTI
                    </div>
                    <h2 class="sgd-service-title" data-i18n-id="04 — SGD Care" data-i18n-en="04 — SGD Care">04 — SGD Care</h2>
                    <p class="sgd-lead-text" data-i18n-id="Perawatan berkala dan perbaikan properti untuk menjaga kondisi bangunan, kenyamanan pengguna, dan mencegah masalah berkembang." data-i18n-en="Periodic maintenance and property repair services to safeguard building condition, occupant comfort, and prevent costly deteriorations.">
                        Perawatan berkala dan perbaikan properti untuk menjaga kondisi bangunan, kenyamanan pengguna, dan mencegah masalah berkembang.
                    </p>
                    <div class="sgd-scope-box">
                        <h4 data-i18n-id="Lingkup Layanan SGD Care:" data-i18n-en="SGD Care Scope of Service:">Lingkup Layanan SGD Care:</h4>
                        <ul class="sgd-scope-list">
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Perawatan Properti Berkala:&lt;/strong&gt; Kontrak AMC bulanan/tahunan untuk inspeksi fisik preventif bangunan komersial, ruko, dan residensial." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Periodic Property Maintenance:&lt;/strong&gt; Annual AMC contracts for preventive structural inspections of commercial facilities and homes."><i class="fa-solid fa-check"></i> <strong>Perawatan Properti Berkala:</strong> Kontrak AMC bulanan/tahunan untuk inspeksi fisik preventif bangunan komersial, ruko, dan residensial.</li>
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Perbaikan Bangunan &amp; Utilitas:&lt;/strong&gt; Waterproofing kebocoran dak beton, perbaikan dinding retak, pipa plumbing, dan peremajaan panel listrik." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Building &amp; Utility Repairs:&lt;/strong&gt; Rooftop leak waterproofing, crack injections, plumbing piping repairs, and electrical panel overhauls."><i class="fa-solid fa-check"></i> <strong>Perbaikan Bangunan & Utilitas:</strong> Waterproofing kebocoran dak beton, perbaikan dinding retak, pipa plumbing, dan peremajaan panel listrik.</li>
                            <li data-i18n-html-id="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;Perawatan &amp; Perbaikan AC:&lt;/strong&gt; Pembersihan rutin, perbaikan kompresor VRV/split duct, dan peremajaan sistem tata udara." data-i18n-html-en="&lt;i class=&quot;fa-solid fa-check&quot;&gt;&lt;/i&gt; &lt;strong&gt;HVAC &amp; AC Servicing:&lt;/strong&gt; Routine chemical wash, VRV/split duct compressor repairs, and climate control maintenance."><i class="fa-solid fa-check"></i> <strong>Perawatan & Perbaikan AC:</strong> Pembersihan rutin, perbaikan kompresor VRV/split duct, dan peremajaan sistem tata udara.</li>
                        </ul>
                    </div>
                    <div class="sgd-service-cta-btn">
                        <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Care, saya ingin bertanya tentang layanan maintenance & perbaikan properti.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> <span data-i18n-id="Kenali SGD Care" data-i18n-en="Discover SGD Care">Kenali SGD Care</span>
                        </a>
                    </div>
                </div>
                <div class="sgd-service-detail-media">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-care.jpg' ); ?>" alt="04 — SGD Care Property Maintenance" class="sgd-img-rounded">
                </div>
            </div>
        </div>

        <hr class="sgd-divider-line">

        <!-- 5. SGD Standards & Material Standard -->
        <div class="sgd-service-detail-row" id="standards">
            <div class="sgd-grid-2col sgd-items-center">
                <div class="sgd-service-detail-text">
                    <span class="sgd-service-index" data-i18n-id="SGD STANDARD" data-i18n-en="SGD STANDARD">JAMINAN MUTU</span>
                    <h2 class="sgd-service-title" data-i18n-id="SGD Standard & Material Standard" data-i18n-en="SGD Standard & Material Standard">SGD Standard &amp; Material Standard</h2>
                    <p class="sgd-lead-text" data-i18n-id="Komitmen kami terhadap ketahanan bangunan diwujudkan lewat standarisasi ketat pemilihan material tier-1 dan sistem kontrak yang transparan." data-i18n-en="Our commitment to building durability is realized through strict tier-1 material selection standards and transparent contract frameworks.">
                        Komitmen kami terhadap ketahanan bangunan diwujudkan lewat standarisasi ketat pemilihan material tier-1 dan sistem kontrak yang transparan.
                    </p>
                    
                    <div class="sgd-scope-box">
                        <h4 data-i18n-id="Mitra Standar Produsen Material & Rantai Pasok Resmi SGD:" data-i18n-en="Official Material Supply Chain Standards:">Mitra Standar Produsen Material &amp; Rantai Pasok Resmi SGD:</h4>
                        <ul class="sgd-scope-list" style="grid-template-columns: 1fr;">
                            <li style="display: flex; align-items: center; gap: 10px;"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/cs-steel.svg' ); ?>" alt="CS" width="24" height="24" style="width: 24px; height: 24px; object-fit: contain; flex-shrink: 0;"> <span><strong>Besi Beton:</strong> Cakratunggal Steel (CS) atau Baja Perwira Steel</span></li>
                            <li style="display: flex; align-items: center; gap: 10px;"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/lautan-steel.svg' ); ?>" alt="Lautan Steel" width="24" height="24" style="width: 24px; height: 24px; object-fit: contain; flex-shrink: 0;"> <span><strong>Baja:</strong> Lautan Steel</span></li>
                            <li style="display: flex; align-items: center; gap: 10px;"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/indocement.svg' ); ?>" alt="Indocement" width="24" height="24" style="width: 24px; height: 24px; object-fit: contain; flex-shrink: 0;"> <span><strong>Semen:</strong> Indocement / Holcim</span></li>
                            <li style="display: flex; align-items: center; gap: 10px;"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/mortar-utama.svg' ); ?>" alt="Mortar Utama" width="24" height="24" style="width: 24px; height: 24px; object-fit: contain; flex-shrink: 0;"> <span><strong>Mortar:</strong> Mortar Utama / Drymix</span></li>
                            <li style="display: flex; align-items: center; gap: 10px;"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/astral.svg' ); ?>" alt="Astral" width="24" height="24" style="width: 24px; height: 24px; object-fit: contain; flex-shrink: 0;"> <span><strong>Alumunium:</strong> Astral</span></li>
                            <li style="display: flex; align-items: center; gap: 10px;"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/ykk-aleksindo.svg' ); ?>" alt="YKK Aleksindo" width="24" height="24" style="width: 24px; height: 24px; object-fit: contain; flex-shrink: 0;"> <span><strong>Alumunium Rakitan:</strong> YKK / Aleksindo</span></li>
                            <li style="display: flex; align-items: center; gap: 10px;"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/jayaboard.svg' ); ?>" alt="Jayaboard" width="24" height="24" style="width: 24px; height: 24px; object-fit: contain; flex-shrink: 0;"> <span><strong>Plafond:</strong> Gypsum Jayaboard atau Panel Sheet</span></li>
                            <li style="display: flex; align-items: center; gap: 10px;"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/supreme-cable.svg' ); ?>" alt="Supreme" width="24" height="24" style="width: 24px; height: 24px; object-fit: contain; flex-shrink: 0;"> <span><strong>Kabel Elektrikal:</strong> Kabel Supreme</span></li>
                            <li style="display: flex; align-items: center; gap: 10px;"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/rucika.svg' ); ?>" alt="Rucika" width="24" height="24" style="width: 24px; height: 24px; object-fit: contain; flex-shrink: 0;"> <span><strong>Pipa:</strong> Rucika / Wavin</span></li>
                            <li style="display: flex; align-items: center; gap: 10px;"><img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/paint-brands.svg' ); ?>" alt="Paint Brands" width="24" height="24" style="width: 24px; height: 24px; object-fit: contain; flex-shrink: 0;"> <span><strong>Cat:</strong> Jotun, Mowilex, Propan, Dulux</span></li>
                        </ul>
                    </div>

                    <div class="sgd-service-cta-btn">
                        <button type="button" class="sgd-btn sgd-btn-gold" data-modal="standards">
                            <i class="fa-solid fa-certificate"></i> <span data-i18n-id="Buka Detail SGD Standard" data-i18n-en="Open SGD Standard Specifications">Buka Detail SGD Standard</span>
                        </button>
                    </div>
                </div>
                <div class="sgd-service-detail-media">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-interior.jpg' ); ?>" alt="SGD Material Standard" class="sgd-img-rounded">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FAQ Section -->
<section class="sgd-section bg-slate">
    <div class="sgd-container">
        <div class="sgd-section-header text-center">
            <div class="sgd-section-tag" data-i18n-id="PERTANYAAN UMUM" data-i18n-en="GENERAL FAQ">PERTANYAAN UMUM</div>
            <h2 class="sgd-section-heading" data-i18n-id="Hal yang Sering Ditanyakan (FAQ)" data-i18n-en="Frequently Asked Questions (FAQ)">Hal yang Sering Ditanyakan (FAQ)</h2>
            <p class="sgd-section-subheading" data-i18n-id="Informasi penting seputar cara kerja, kontrak, dan garansi proyek konstruksi di SGD Construction." data-i18n-en="Essential information regarding workflows, contracting terms, and project warranties at SGD Construction.">Informasi penting seputar cara kerja, kontrak, dan garansi proyek konstruksi di SGD Construction.</p>
        </div>

        <div class="sgd-faq-accordion">
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question">
                    <span data-i18n-id="Bagaimana alur awal konsultasi dan survey lokasi proyek?" data-i18n-en="What is the initial process for consultation and site survey?">Bagaimana alur awal konsultasi dan survey lokasi proyek?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p data-i18n-html-id="Anda dapat menghubungi kami melalui WhatsApp di &lt;strong&gt;08116016868&lt;/strong&gt; atau mengirim email ke &lt;strong&gt;contact@sgd-corp.com&lt;/strong&gt;. Tim kami akan menjadwalkan survey lokasi fisik untuk mengukur lahan, menganalisis kondisi tapak, dan mendiskusikan kebutuhan ruang serta perkiraan estimasi anggaran Anda." data-i18n-html-en="You can reach us via WhatsApp at &lt;strong&gt;08116016868&lt;/strong&gt; or email &lt;strong&gt;contact@sgd-corp.com&lt;/strong&gt;. Our engineering team will arrange a physical site survey to assess site conditions, analyze soil/space parameters, and formulate your preliminary budget.">Anda dapat menghubungi kami melalui WhatsApp di <strong>08116016868</strong> atau mengirim email ke <strong>contact@sgd-corp.com</strong>. Tim kami akan menjadwalkan survey lokasi fisik untuk mengukur lahan, menganalisis kondisi tapak, dan mendiskusikan kebutuhan ruang serta perkiraan estimasi anggaran Anda.</p>
                </div>
            </div>

            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question">
                    <span data-i18n-id="Apakah SGD Construction menyediakan layanan desain sekaligus bangun (Design & Build)?" data-i18n-en="Does SGD Construction provide turnkey Design & Build services?">Apakah SGD Construction menyediakan layanan desain sekaligus bangun (Design & Build)?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p data-i18n-html-id="Ya. Layanan &lt;em&gt;Design &amp; Build&lt;/em&gt; adalah salah satu keunggulan utama kami. Dengan satu pintu tanggung jawab, koordinasi antara tim perancang arsitektur dan tim pelaksana lapangan menjadi sangat mulus, menghemat waktu serta mencegah pembengkakan anggaran akibat ketidaksesuaian gambar dengan realita lapangan." data-i18n-html-en="Yes. Turnkey &lt;em&gt;Design &amp; Build&lt;/em&gt; is one of our primary strengths. Single-point accountability ensures flawless coordination between architects and site engineers, saving time and preventing budget escalations caused by design discrepancies.">Ya. Layanan <em>Design & Build</em> adalah salah satu keunggulan utama kami. Dengan satu pintu tanggung jawab, koordinasi antara tim perancang arsitektur dan tim pelaksana lapangan menjadi sangat mulus, menghemat waktu serta mencegah pembengkakan anggaran akibat ketidaksesuaian gambar dengan realita lapangan.</p>
                </div>
            </div>

            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question">
                    <span data-i18n-id="Apakah ada garansi pemeliharaan setelah proyek selesai diserahterimakan?" data-i18n-en="Is there a maintenance warranty after project handover?">Apakah ada garansi pemeliharaan setelah proyek selesai diserahterimakan?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p data-i18n-html-id="Tentu. Kami memberikan jaminan masa retensi / garansi pemeliharaan resmi yang tertuang di dalam kontrak kerja SPK. Selain itu, unit khusus &lt;strong&gt;SGD Care&lt;/strong&gt; siap memberikan dukungan jangka panjang untuk pemeliharaan rutin maupun perbaikan darurat." data-i18n-html-en="Certainly. We provide formal warranty retention periods explicitly defined in our binding SPK contract. Additionally, our dedicated &lt;strong&gt;SGD Care&lt;/strong&gt; unit is available for long-term periodic maintenance and emergency repairs.">Tentu. Kami memberikan jaminan masa retensi / garansi pemeliharaan resmi yang tertuang di dalam kontrak kerja SPK. Selain itu, unit khusus <strong>SGD Care</strong> siap memberikan dukungan jangka panjang untuk pemeliharaan rutin maupun perbaikan darurat.</p>
                </div>
            </div>

            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question">
                    <span data-i18n-id="Bagaimana skema pembayaran proyek konstruksi?" data-i18n-en="What is the payment milestone schedule for construction projects?">Bagaimana skema pembayaran proyek konstruksi?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p data-i18n-id="Skema pembayaran diatur secara adil dan transparan berdasarkan progres fisik lapangan (termin bertahap) atau sesuai milestone kesepakatan kontrak kerja. Setiap pengajuan termin selalu dilampiri laporan kurva-S progres dan dokumentasi foto lapangan resmi." data-i18n-en="Payment schedules are structured fairly and transparently based on physical site progress (milestone installments) as agreed in the contract. Each installment invoice is accompanied by S-curve progress reports and official photo documentation.">Skema pembayaran diatur secara adil dan transparan berdasarkan progres fisik lapangan (termin bertahap) atau sesuai milestone kesepakatan kontrak kerja. Setiap pengajuan termin selalu dilampiri laporan kurva-S progres dan dokumentasi foto lapangan resmi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Direct CTA Banner -->
<section class="sgd-cta-section">
    <div class="sgd-container">
        <div class="sgd-cta-box">
            <div class="sgd-cta-content">
                <span class="sgd-badge-accent" data-i18n-id="KONSULTASI GRATIS" data-i18n-en="FREE CONSULTATION">KONSULTASI GRATIS</span>
                <h2 data-i18n-id="Punya Rencana Proyek Bangunan?" data-i18n-en="Have an Upcoming Building Project?">Punya Rencana Proyek Bangunan?</h2>
                <p data-i18n-id="Tim ahli SGD Construction siap membantu Anda mulai dari analisa awal hingga perhitungan estimasi RAB yang transparan." data-i18n-en="SGD Construction's engineering team is ready to assist you from preliminary analysis to transparent BOQ budget estimation.">Tim ahli SGD Construction siap membantu Anda mulai dari analisa awal hingga perhitungan estimasi RAB yang transparan.</p>
                <div class="sgd-cta-buttons">
                    <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin konsultasi mengenai layanan konstruksi.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg">
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
