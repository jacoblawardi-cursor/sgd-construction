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
                    <span>Konsultasi Proyek (08116016868)</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="sgd-btn sgd-btn-outline-white sgd-btn-lg">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>Lihat Portofolio Proyek</span>
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
                </div>
                <div class="sgd-service-body">
                    <div class="sgd-service-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
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
                        <div class="sgd-value-icon"><i class="fa-solid fa-headset"></i></div>
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
