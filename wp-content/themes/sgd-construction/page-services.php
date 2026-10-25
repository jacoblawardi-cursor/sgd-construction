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
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                <span class="sgd-bc-sep">/</span>
                <span>Layanan</span>
            </div>
            <h1 class="sgd-page-title">Layanan Konstruksi & Rancang Bangun</h1>
            <p class="sgd-page-lead">Pendekatan menyeluruh dalam rekayasa sipil, arsitektur, interior, dan pemeliharaan properti untuk memenuhi kebutuhan komersial, industri, dan residensial.</p>
        </div>
    </div>
</section>

<!-- Services In-depth Detail Sections -->
<section class="sgd-section">
    <div class="sgd-container">

        <!-- 1. General Contracting -->
        <div class="sgd-service-detail-row" id="contracting">
            <div class="sgd-grid-2col sgd-items-center">
                <div class="sgd-service-detail-text">
                    <span class="sgd-service-index">LAYANAN 01</span>
                    <h2 class="sgd-service-title">General Contracting & Konstruksi Sipil</h2>
                    <p class="sgd-lead-text">
                        Kami mengelola seluruh siklus pelaksanaan konstruksi bangunan mulai dari pekerjaan tanah, fondasi dalam (bored pile, tiang pancang), struktur beton bertulang, struktur baja berat, hingga pekerjaan arsitektural dan finishing eksterior.
                    </p>
                    <div class="sgd-scope-box">
                        <h4>Lingkup Pekerjaan Utama:</h4>
                        <ul class="sgd-scope-list">
                            <li><i class="fa-solid fa-check"></i> <strong>Pembangunan Gedung Komersial:</strong> Perkantoran bertingkat, ruko, hotel butik, dan pusat bisnis.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Hunian Residensial Prestisius:</strong> Rumah mewah pribadi, villa tropis, dan cluster perumahan modern.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Fasilitas Industri & Pergudangan:</strong> Bangunan pabrik struktur baja, gudang logistik berbentang lebar, dan lantai heavy-duty beton (floor hardener).</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Infrastruktur & Pekerjaan Sipil:</strong> Saluran drainase beton, jalan akses paving/aspal, retaining wall, dan perkuatan lereng.</li>
                        </ul>
                    </div>
                    <div class="sgd-service-cta-btn">
                        <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin berkonsultasi mengenai proyek General Contracting / Konstruksi Sipil.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Konsultasi General Contracting
                        </a>
                    </div>
                </div>
                <div class="sgd-service-detail-media">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-contracting.jpg' ); ?>" alt="General Contracting SGD Construction" class="sgd-img-rounded">
                </div>
            </div>
        </div>

        <hr class="sgd-divider-line">

        <!-- 2. Architecture & Design Planning -->
        <div class="sgd-service-detail-row" id="architecture">
            <div class="sgd-grid-2col sgd-items-center sgd-row-reverse">
                <div class="sgd-service-detail-text">
                    <span class="sgd-service-index">LAYANAN 02</span>
                    <h2 class="sgd-service-title">Desain Arsitektur & Perencanaan Struktur</h2>
                    <p class="sgd-lead-text">
                        Desain yang baik memadukan fungsi efisien, estetika visual bernilai tinggi, dan efisiensi biaya konstruksi. Tim arsitek dan structural engineer SGD Construction merancang konsep terintegrasi dari awal.
                    </p>
                    <div class="sgd-scope-box">
                        <h4>Lingkup Pekerjaan Utama:</h4>
                        <ul class="sgd-scope-list">
                            <li><i class="fa-solid fa-check"></i> <strong>Konsep Arsitektur 2D & 3D Render:</strong> Visualisasi fotorealistik eksterior dan interior memudahkan pengambilan keputusan desain.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Kalkulasi Struktur Tahan Gempa:</strong> Pemodelan beban menggunakan software terverifikasi (ETABS/SAP2000) sesuai SNI Gempa terkini.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Detailed Engineering Design (DED):</strong> Gambar kerja teknis lengkap untuk panduan presisi tukang di lapangan.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Pengurusan Izin PBG / SLF:</strong> Bantuan penyiapan berkas teknis perizinan Persetujuan Bangunan Gedung (PBG).</li>
                        </ul>
                    </div>
                    <div class="sgd-service-cta-btn">
                        <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin berkonsultasi mengenai Desain Arsitektur & Struktur.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Konsultasi Desain & Arsitektur
                        </a>
                    </div>
                </div>
                <div class="sgd-service-detail-media">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-architecture.jpg' ); ?>" alt="Desain Arsitektur SGD Construction" class="sgd-img-rounded">
                </div>
            </div>
        </div>

        <hr class="sgd-divider-line">

        <!-- 3. Interior Fit-Out & Renovation -->
        <div class="sgd-service-detail-row" id="interior">
            <div class="sgd-grid-2col sgd-items-center">
                <div class="sgd-service-detail-text">
                    <span class="sgd-service-index">LAYANAN 03</span>
                    <h2 class="sgd-service-title">Commercial & Residential Interior Fit-Out</h2>
                    <p class="sgd-lead-text">
                        Mewujudkan atmosfer ruang kerja dan ruang tinggal yang elegan, fungsional, dan mencerminkan identitas korporat Anda. Kami menguasai pengerjaan interior cepat dengan kontrol kebisingan di gedung bertingkat.
                    </p>
                    <div class="sgd-scope-box">
                        <h4>Lingkup Pekerjaan Utama:</h4>
                        <ul class="sgd-scope-list">
                            <li><i class="fa-solid fa-check"></i> <strong>Corporate Office Fit-Out:</strong> Ruang direksi, open office workstation, meeting room akustik, dan reception lobby.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Custom Built-in Furniture:</strong> Pembuatan backdrop, kitchen set, credenza, lemari kustom dengan finishing HPL/Duco kelas satu.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Pekerjaan Plafon & Lantai:</strong> Pemasangan gypsum ceiling, acoustic ceiling tile, lantai marmer, vinyl SPC, dan karpet tile komersial.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Pencahayaan & Elektrikal Interior:</strong> Desain tata cahaya arsitektural (ambient, task, accent lighting).</li>
                        </ul>
                    </div>
                    <div class="sgd-service-cta-btn">
                        <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin berkonsultasi mengenai Interior Fit-Out & Renovasi.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Konsultasi Interior Fit-Out
                        </a>
                    </div>
                </div>
                <div class="sgd-service-detail-media">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-interior.jpg' ); ?>" alt="Interior Fit-Out SGD Construction" class="sgd-img-rounded">
                </div>
            </div>
        </div>

        <hr class="sgd-divider-line">

        <!-- 4. MEP Engineering -->
        <div class="sgd-service-detail-row" id="mep">
            <div class="sgd-grid-2col sgd-items-center sgd-row-reverse">
                <div class="sgd-service-detail-text">
                    <span class="sgd-service-index">LAYANAN 04</span>
                    <h2 class="sgd-service-title">Mechanical, Electrical & Plumbing (MEP)</h2>
                    <p class="sgd-lead-text">
                        Sistem utilitas adalah urat nadi setiap bangunan. SGD Construction menyediakan instalasi MEP berskala tinggi dengan efisiensi energi optimal dan keandalan proteksi protektif.
                    </p>
                    <div class="sgd-scope-box">
                        <h4>Lingkup Pekerjaan Utama:</h4>
                        <ul class="sgd-scope-list">
                            <li><i class="fa-solid fa-check"></i> <strong>Electrical Systems:</strong> Perakitan panel MDP/SDP, instalasi transformator, genset backup otomatis (ATS), dan instalasi penangkal petir.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>HVAC & Pengkondisian Udara:</strong> Sistem AC VRV/VRF, chilled water system, ducting distribusi udara, dan exhaust ventilation.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Fire Fighting & Protection:</strong> Instalasi pipa hydrant basah/kering, sprinkler otomatis, smoke detector, dan pompa pemadam kebakaran.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Plumbing & Sanitasi:</strong> Sistem air bersih bertekanan, pipa air kotor, Sewage Treatment Plant (STP), dan instalasi resapan air hujan.</li>
                        </ul>
                    </div>
                    <div class="sgd-service-cta-btn">
                        <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin berkonsultasi mengenai instalasi MEP & HVAC.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Konsultasi Sistem MEP
                        </a>
                    </div>
                </div>
                <div class="sgd-service-detail-media">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-mep.jpg' ); ?>" alt="Instalasi MEP SGD Construction" class="sgd-img-rounded">
                </div>
            </div>
        </div>

        <hr class="sgd-divider-line">

        <!-- 5. SGD Care Maintenance -->
        <div class="sgd-service-detail-row" id="care">
            <div class="sgd-grid-2col sgd-items-center">
                <div class="sgd-service-detail-text">
                    <div class="sgd-badge-accent mb-2">DIVISI KHUSUS SGD CARE</div>
                    <h2 class="sgd-service-title">SGD Care: Building & Property Maintenance</h2>
                    <p class="sgd-lead-text">
                        Investasi bangunan Anda layak mendapatkan perlindungan terbaik. Unit khusus <strong>SGD Care</strong> hadir menangani perawatan rutin, audit fisik bangunan berkala, dan perbaikan insidental secara profesional.
                    </p>
                    <div class="sgd-scope-box">
                        <h4>Lingkup Layanan SGD Care:</h4>
                        <ul class="sgd-scope-list">
                            <li><i class="fa-solid fa-check"></i> <strong>Kontrak Pemeliharaan Tahunan:</strong> Paket pemeliharaan preventif gedung kantor, ruko, restoran, dan hunian.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Waterproofing & Perbaikan Kebocoran:</strong> Injeksi beton, pelapisan membran bakar, dan perbaikan talang dak beton.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Audit Struktur & Kelistrikan:</strong> Pengecekan beban listrik berkala, thermography scan panel, dan perbaikan jalur kabel.</li>
                            <li><i class="fa-solid fa-check"></i> <strong>Service Tata Udara (AC):</strong> Cuci berkala, perbaikan kompresor, dan isi freon ramah lingkungan.</li>
                        </ul>
                    </div>
                    <div class="sgd-service-cta-btn">
                        <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Care, saya ingin bertanya tentang layanan maintenance & perbaikan properti.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Hubungi Tim SGD Care (08116016868)
                        </a>
                    </div>
                </div>
                <div class="sgd-service-detail-media">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/service-care.jpg' ); ?>" alt="SGD Care Property Maintenance" class="sgd-img-rounded">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FAQ Section -->
<section class="sgd-section bg-slate">
    <div class="sgd-container">
        <div class="sgd-section-header text-center">
            <div class="sgd-section-tag">PERTANYAAN UMUM</div>
            <h2 class="sgd-section-heading">Hal yang Sering Ditanyakan (FAQ)</h2>
            <p class="sgd-section-subheading">Informasi penting seputar cara kerja, kontrak, dan garansi proyek konstruksi di SGD Construction.</p>
        </div>

        <div class="sgd-faq-accordion">
            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question">
                    <span>Bagaimana alur awal konsultasi dan survey lokasi proyek?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p>Anda dapat menghubungi kami melalui WhatsApp di <strong>08116016868</strong> atau mengirim email ke <strong>contact@sgd-corp.com</strong>. Tim kami akan menjadwalkan survey lokasi fisik untuk mengukur lahan, menganalisis kondisi tapak, dan mendiskusikan kebutuhan ruang serta perkiraan estimasi anggaran Anda.</p>
                </div>
            </div>

            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question">
                    <span>Apakah SGD Construction menyediakan layanan desain sekaligus bangun (Design & Build)?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p>Ya. Layanan <em>Design & Build</em> adalah salah satu keunggulan utama kami. Dengan satu pintu tanggung jawab, koordinasi antara tim perancang arsitektur dan tim pelaksana lapangan menjadi sangat mulus, menghemat waktu serta mencegah pembengkakan anggaran akibat ketidaksesuaian gambar dengan realita lapangan.</p>
                </div>
            </div>

            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question">
                    <span>Apakah ada garansi pemeliharaan setelah proyek selesai diserahterimakan?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p>Tentu. Kami memberikan jaminan masa retensi / garansi pemeliharaan resmi yang tertuang di dalam kontrak kerja SPK. Selain itu, unit khusus <strong>SGD Care</strong> siap memberikan dukungan jangka panjang untuk pemeliharaan rutin maupun perbaikan darurat.</p>
                </div>
            </div>

            <div class="sgd-faq-item">
                <button type="button" class="sgd-faq-question">
                    <span>Bagaimana skema pembayaran proyek konstruksi?</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sgd-faq-answer">
                    <p>Skema pembayaran diatur secara adil dan transparan berdasarkan progres fisik lapangan (termin bertahap) atau sesuai milestone kesepakatan kontrak kerja. Setiap pengajuan termin selalu dilampiri laporan kurva-S progres dan dokumentasi foto lapangan resmi.</p>
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
                <span class="sgd-badge-accent">KONSULTASI GRATIS</span>
                <h2>Punya Rencana Proyek Bangunan?</h2>
                <p>Tim ahli SGD Construction siap membantu Anda mulai dari analisa awal hingga perhitungan estimasi RAB yang transparan.</p>
                <div class="sgd-cta-buttons">
                    <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin konsultasi mengenai layanan konstruksi.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg">
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
