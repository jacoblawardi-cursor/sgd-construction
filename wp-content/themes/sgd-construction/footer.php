<?php
/**
 * Footer template for SGD Construction
 *
 * @package SGD_Construction
 */
?>
</main><!-- /.sgd-site-main -->

<footer class="sgd-site-footer">
    <!-- Top Footer Banner / Quick CTA -->
    <div class="sgd-footer-cta-band">
        <div class="sgd-container">
            <div class="sgd-footer-cta-inner">
                <div class="sgd-footer-cta-text">
                    <span class="sgd-badge-accent" data-i18n-id="KONSULTASI GRATIS" data-i18n-en="FREE CONSULTATION">KONSULTASI GRATIS</span>
                    <h3 data-i18n-id="Rencanakan Proyek Konstruksi Anda Bersama Tim Ahli SGD" data-i18n-en="Plan Your Construction Project with SGD Engineering Experts">Rencanakan Proyek Konstruksi Anda Bersama Tim Ahli SGD</h3>
                    <p data-i18n-id="Dari konsep desain hingga serah terima bangunan, kami siap mewujudkan visi bangunan terbaik Anda dengan standar mutu dan keselamatan tertinggi." data-i18n-en="From design concept to building handover, we are ready to realize your finest building vision with the highest quality and safety standards.">Dari konsep desain hingga serah terima bangunan, kami siap mewujudkan visi bangunan terbaik Anda dengan standar mutu dan keselamatan tertinggi.</p>
                </div>
                <div class="sgd-footer-cta-actions">
                    <button type="button" class="sgd-btn sgd-btn-gold sgd-btn-lg" data-modal="profile">
                        <i class="fa-solid fa-file-pdf"></i> <span data-i18n-id="Download Company Profile" data-i18n-en="Download Company Deck">Download Company Profile</span>
                    </button>
                    <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin menjadwalkan konsultasi proyek.') ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg">
                        <i class="fa-brands fa-whatsapp"></i> <span data-i18n-id="Chat WhatsApp 08116016868" data-i18n-en="Chat WhatsApp 08116016868">Chat WhatsApp 08116016868</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sgd-btn sgd-btn-outline sgd-btn-lg">
                        <span data-i18n-id="Kirim Form Inquiry" data-i18n-en="Submit Inquiry Form">Kirim Form Inquiry</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Footer Grid -->
    <div class="sgd-footer-main">
        <div class="sgd-container">
            <div class="sgd-footer-grid">
                <!-- Col 1: Brand Info -->
                <div class="sgd-footer-col sgd-footer-col-about">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sgd-footer-logo">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/Logo Landscape.png' ); ?>" alt="SGD Construction" class="sgd-footer-logo-img">
                    </a>
                    <p class="sgd-footer-desc" data-i18n-id="Jasa pembangunan dan renovasi rumah serta bangunan komersial, dengan proses yang transparan dan perhatian pada kualitas di setiap tahap." data-i18n-en="Residential and commercial construction and renovation services, with transparent processes and attention to quality at every stage.">
                        <strong>SGD Construction</strong> — Jasa pembangunan dan renovasi rumah serta bangunan komersial, dengan proses yang transparan dan perhatian pada kualitas di setiap tahap.
                    </p>
                    <div class="sgd-footer-socials">
                        <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-social-icon" aria-label="Instagram SGD Construction">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="<?php echo esc_url( sgd_get_wa_link() ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-social-icon" aria-label="WhatsApp SGD Construction">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="mailto:<?php echo esc_attr( SGD_EMAIL ); ?>" class="sgd-social-icon sgd-email-trigger" data-email="<?php echo esc_attr( SGD_EMAIL ); ?>" role="button" aria-label="Email SGD Construction">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div class="sgd-footer-col">
                    <h4 class="sgd-footer-heading" data-i18n-id="Navigasi Utama" data-i18n-en="Main Navigation">Navigasi Utama</h4>
                    <ul class="sgd-footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa-solid fa-angle-right"></i> <span data-i18n-id="Beranda / Home" data-i18n-en="Home">Beranda / Home</span></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><i class="fa-solid fa-angle-right"></i> <span data-i18n-id="Tentang Kami (About)" data-i18n-en="About Us">Tentang Kami (About)</span></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><i class="fa-solid fa-angle-right"></i> <span data-i18n-id="Layanan Konstruksi" data-i18n-en="Construction Services">Layanan Konstruksi</span></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>"><i class="fa-solid fa-angle-right"></i> <span data-i18n-id="Portofolio Proyek" data-i18n-en="Project Portfolio">Portofolio Proyek</span></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><i class="fa-solid fa-angle-right"></i> <span data-i18n-id="Hubungi Kami (Contact)" data-i18n-en="Contact Us">Hubungi Kami (Contact)</span></a></li>
                    </ul>
                </div>

                <!-- Col 3: Services -->
                <div class="sgd-footer-col">
                    <h4 class="sgd-footer-heading" data-i18n-id="Layanan Kami" data-i18n-en="Our Services">Layanan Kami</h4>
                    <ul class="sgd-footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/services/#residential' ) ); ?>"><i class="fa-solid fa-angle-right"></i> <span data-i18n-id="01 — Rumah Tinggal" data-i18n-en="01 — Residential Living">01 — Rumah Tinggal</span></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/#commercial' ) ); ?>"><i class="fa-solid fa-angle-right"></i> <span data-i18n-id="02 — Bangunan Komersial" data-i18n-en="02 — Commercial Buildings">02 — Bangunan Komersial</span></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/#special' ) ); ?>"><i class="fa-solid fa-angle-right"></i> <span data-i18n-id="03 — Proyek Khusus" data-i18n-en="03 — Special Projects">03 — Proyek Khusus</span></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/#care' ) ); ?>"><i class="fa-solid fa-angle-right"></i> <span data-i18n-id="04 — SGD Care" data-i18n-en="04 — SGD Care">04 — SGD Care</span></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/#standards' ) ); ?>"><i class="fa-solid fa-angle-right"></i> <span data-i18n-id="SGD Material Standard" data-i18n-en="SGD Material Standard">SGD Material Standard</span></a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact & Office -->
                <div class="sgd-footer-col">
                    <h4 class="sgd-footer-heading" data-i18n-id="Kontak Resmi" data-i18n-en="Official Contact">Kontak Resmi</h4>
                    <div class="sgd-footer-contact-list">
                        <div class="sgd-contact-item">
                            <div class="sgd-contact-icon"><i class="fa-brands fa-whatsapp"></i></div>
                            <div>
                                <span class="sgd-contact-label" data-i18n-id="WhatsApp (Chat Only):" data-i18n-en="WhatsApp (Chat Only):">WhatsApp (Chat Only):</span>
                                <a href="<?php echo esc_url( sgd_get_wa_link() ); ?>" target="_blank" class="sgd-contact-value">
                                    <?php echo esc_html( SGD_PHONE ); ?>
                                </a>
                            </div>
                        </div>
                        <div class="sgd-contact-item">
                            <div class="sgd-contact-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div>
                                <span class="sgd-contact-label" data-i18n-id="Email Resmi:" data-i18n-en="Official Email:">Email Resmi:</span>
                                <a href="mailto:<?php echo esc_attr( SGD_EMAIL ); ?>" class="sgd-contact-value sgd-email-trigger" data-email="<?php echo esc_attr( SGD_EMAIL ); ?>" role="button">
                                    <?php echo esc_html( SGD_EMAIL ); ?>
                                </a>
                            </div>
                        </div>
                        <div class="sgd-contact-item">
                            <div class="sgd-contact-icon"><i class="fa-brands fa-instagram"></i></div>
                            <div>
                                <span class="sgd-contact-label" data-i18n-id="Official Instagram:" data-i18n-en="Official Instagram:">Official Instagram:</span>
                                <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" class="sgd-contact-value">
                                    <?php echo esc_html( SGD_INSTAGRAM_HANDLE ); ?>
                                </a>
                            </div>
                        </div>
                        <div class="sgd-contact-item">
                            <div class="sgd-contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div>
                                <span class="sgd-contact-label" data-i18n-id="Lokasi Kantor:" data-i18n-en="Office Location:">Lokasi Kantor:</span>
                                <span class="sgd-contact-value sgd-contact-address">
                                    <?php echo esc_html( SGD_ADDRESS ); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Copyright Bar -->
    <div class="sgd-footer-bottom">
        <div class="sgd-container">
            <div class="sgd-footer-bottom-inner">
                <p class="sgd-copyright">
                    &copy; <?php echo date('Y'); ?> <strong>SGD Construction</strong>. All Rights Reserved.
                </p>
                <div class="sgd-footer-bottom-tags">
                    <span class="sgd-tag-pill">SMK3 Certified Standards</span>
                    <span class="sgd-tag-pill">LPJK Registered</span>
                    <span class="sgd-tag-pill">Sunggiardi Corp Ecosystem</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Theme Switcher Quick Toggle Widget -->
<aside class="sgd-floating-theme" id="sgdFloatingTheme">
    <button type="button" class="sgd-floating-theme-btn" id="sgdFloatingThemeBtn" aria-label="Ganti Tema (WoW / Genshin Impact)" title="Klik untuk ganti tema (World of Warcraft / Genshin Impact)">
        <span class="sgd-floating-theme-icon" id="sgdFloatingThemeIcon">⚔️</span>
        <div class="sgd-floating-theme-info">
            <span class="sgd-floating-theme-tiny">THEME</span>
            <span class="sgd-floating-theme-name" id="sgdFloatingThemeName">WoW</span>
        </div>
        <span class="sgd-floating-theme-pill" id="sgdFloatingThemePill">Switch</span>
    </button>
</aside>

<!-- Floating WhatsApp Action Button -->
<aside class="sgd-floating-wa" id="sgdFloatingWa">
    <a href="<?php echo esc_url( sgd_get_wa_link('Halo tim SGD Construction, saya ingin berkonsultasi mengenai proyek saya.') ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-floating-wa-btn" aria-label="Chat WhatsApp SGD Construction">
        <span class="sgd-wa-pulse"></span>
        <i class="fa-brands fa-whatsapp"></i>
        <span class="sgd-wa-tooltip">
            <strong>Chat Tim SGD</strong>
            <span>08116016868 (WA Only)</span>
        </span>
    </a>
</aside>

<!-- Back to top button -->
<button type="button" class="sgd-back-to-top" id="sgdBackToTop" aria-label="Kembali ke atas">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- Enhanced Case Study & Project Details Modal -->
<div class="sgd-project-modal" id="sgdProjectModal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="sgd-modal-backdrop" id="sgdModalBackdrop"></div>
    <div class="sgd-modal-dialog">
        <!-- Modal Header -->
        <div class="sgd-modal-header">
            <div>
                <span class="sgd-category-badge" id="sgdModalCategory">Komersial</span>
                <h2 class="sgd-modal-title" id="sgdModalTitle">Nama Proyek</h2>
                <p class="sgd-modal-location" id="sgdModalLocation"><i class="fa-solid fa-location-dot"></i> Lokasi</p>
            </div>
            <button type="button" class="sgd-modal-close" id="sgdModalClose" aria-label="Tutup Detail Proyek">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <!-- Case Study Nav Tabs -->
        <div class="sgd-modal-tabs">
            <button type="button" class="sgd-modal-tab-btn active" data-tab="overview">
                <i class="fa-solid fa-circle-info"></i> Ringkasan & Spesifikasi
            </button>
            <button type="button" class="sgd-modal-tab-btn" data-tab="casestudy">
                <i class="fa-solid fa-shield-halved"></i> Tantangan & Rekayasa Teknik
            </button>
            <button type="button" class="sgd-modal-tab-btn" data-tab="beforeafter" id="sgdModalTabBeforeAfter" style="display:none;">
                <i class="fa-solid fa-sliders"></i> Sebelum vs Sesudah
            </button>
        </div>

        <!-- Modal Body -->
        <div class="sgd-modal-body">
            <!-- TAB 1: OVERVIEW -->
            <div class="sgd-tab-pane active" id="sgdPaneOverview">
                <!-- Gallery Section -->
                <div class="sgd-modal-gallery">
                    <div class="sgd-modal-active-img-wrap">
                        <img id="sgdModalActiveImg" src="" alt="Detail Proyek SGD Construction">
                        <span class="sgd-gallery-counter" id="sgdGalleryCounter">Foto 1 dari 3</span>
                    </div>
                    <div class="sgd-modal-thumbnails" id="sgdModalThumbnails">
                        <!-- Dynamic thumbs inserted by JS -->
                    </div>
                </div>

                <!-- Project Specs Strip -->
                <div class="sgd-modal-specs-grid">
                    <div class="sgd-modal-spec-card">
                        <i class="fa-solid fa-ruler-combined"></i>
                        <div>
                            <span class="sgd-spec-label">Luas Bangunan</span>
                            <strong id="sgdModalArea">-</strong>
                        </div>
                    </div>
                    <div class="sgd-modal-spec-card">
                        <i class="fa-solid fa-clock"></i>
                        <div>
                            <span class="sgd-spec-label">Durasi Kerja</span>
                            <strong id="sgdModalDuration">-</strong>
                        </div>
                    </div>
                    <div class="sgd-modal-spec-card">
                        <i class="fa-solid fa-calendar-check"></i>
                        <div>
                            <span class="sgd-spec-label">Tahun Selesai</span>
                            <strong id="sgdModalYear">-</strong>
                        </div>
                    </div>
                    <div class="sgd-modal-spec-card">
                        <i class="fa-solid fa-circle-check"></i>
                        <div>
                            <span class="sgd-spec-label">Status Serah Terima</span>
                            <strong id="sgdModalStatus">-</strong>
                        </div>
                    </div>
                </div>

                <!-- Detailed Narrative -->
                <div class="sgd-modal-content-section">
                    <div class="sgd-modal-meta-row">
                        <div class="sgd-meta-item">
                            <span class="sgd-meta-title">Klien / Pemilik Proyek:</span>
                            <span class="sgd-meta-val" id="sgdModalClient">-</span>
                        </div>
                        <div class="sgd-meta-item">
                            <span class="sgd-meta-title">Lingkup Pekerjaan:</span>
                            <span class="sgd-meta-val" id="sgdModalScope">-</span>
                        </div>
                    </div>

                    <div class="sgd-modal-desc-block">
                        <h4>Ringkasan Eksekusi Proyek</h4>
                        <p id="sgdModalDesc">-</p>
                    </div>

                    <div class="sgd-modal-highlights-block">
                        <h4>Capaian & Rekayasa Teknik Utama:</h4>
                        <ul class="sgd-modal-highlights-list" id="sgdModalHighlights">
                            <!-- Dynamic list items -->
                        </ul>
                    </div>
                </div>
            </div>

            <!-- TAB 2: CASE STUDY (CHALLENGE - SOLUTION - RESULT) -->
            <div class="sgd-tab-pane" id="sgdPaneCaseStudy">
                <div class="sgd-case-study-flow">
                    <!-- Challenge Card -->
                    <div class="sgd-csr-card sgd-csr-challenge">
                        <div class="sgd-csr-badge"><i class="fa-solid fa-triangle-exclamation"></i> TANTANGAN PROYEK (ENGINEERING CHALLENGE)</div>
                        <h4>Kendala Lokasi, Struktur & Regulasi Waktu</h4>
                        <p id="sgdModalChallenge">-</p>
                    </div>

                    <!-- Solution Card -->
                    <div class="sgd-csr-card sgd-csr-solution">
                        <div class="sgd-csr-badge"><i class="fa-solid fa-screwdriver-wrench"></i> REKAYASA TEKNIK & METODE KERJA SGD</div>
                        <h4>Inovasi Material, Manajemen Shift & Rekayasa Nilai</h4>
                        <p id="sgdModalSolution">-</p>
                    </div>

                    <!-- Result Card -->
                    <div class="sgd-csr-card sgd-csr-result">
                        <div class="sgd-csr-badge"><i class="fa-solid fa-trophy"></i> HASIL & METRIK CAPAIAN (DELIVERED OUTCOME)</div>
                        <h4>Ketepatan Waktu, Efisiensi Biaya & Kepatuhan Mutu SNI/K3</h4>
                        <p id="sgdModalResult">-</p>
                    </div>
                </div>
            </div>

            <!-- TAB 3: BEFORE & AFTER INTERACTIVE SLIDER -->
            <div class="sgd-tab-pane" id="sgdPaneBeforeAfter">
                <div class="sgd-ba-container">
                    <p class="sgd-ba-instruction"><i class="fa-solid fa-arrows-left-right"></i> Geser divider ke kiri atau ke kanan untuk membandingkan transformasi proyek:</p>
                    <div class="sgd-ba-slider" id="sgdBaSlider">
                        <img id="sgdBaAfterImg" src="" alt="Sesudah Transformasi SGD" class="sgd-ba-img-after">
                        <div class="sgd-ba-before-wrap" id="sgdBaBeforeWrap">
                            <img id="sgdBaBeforeImg" src="" alt="Sebelum Transformasi SGD" class="sgd-ba-img-before">
                            <span class="sgd-ba-tag sgd-ba-tag-before" id="sgdBaBeforeLabel">SEBELUM</span>
                        </div>
                        <span class="sgd-ba-tag sgd-ba-tag-after" id="sgdBaAfterLabel">SESUDAH</span>
                        <div class="sgd-ba-handle" id="sgdBaHandle">
                            <span class="sgd-ba-handle-line"></span>
                            <span class="sgd-ba-handle-circle"><i class="fa-solid fa-arrows-left-right"></i></span>
                            <span class="sgd-ba-handle-line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="sgd-modal-footer">
            <a href="#" id="sgdModalWaBtn" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg">
                <i class="fa-brands fa-whatsapp"></i>
                <span>Konsultasikan Proyek Serupa via WA</span>
            </a>
            <button type="button" class="sgd-btn sgd-btn-outline" id="sgdModalCloseBtn">
                Tutup
            </button>
        </div>
    </div>
</div>

<!-- Corporate Profile Download Lead Capture Modal -->
<div class="sgd-profile-modal" id="sgdProfileModal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="sgd-modal-backdrop" id="sgdProfileModalBackdrop"></div>
    <div class="sgd-modal-dialog sgd-profile-modal-dialog">
        <div class="sgd-modal-header sgd-border-0">
            <div class="sgd-d-flex sgd-items-center sgd-gap-3">
                <div class="sgd-profile-modal-icon">
                    <i class="fa-solid fa-file-pdf"></i>
                </div>
                <div>
                    <span class="sgd-category-badge">OFFICIAL CORPORATE DOCUMENT</span>
                    <h3 class="sgd-modal-title sgd-h3">Unduh Company Profile SGD Construction</h3>
                </div>
            </div>
            <button type="button" class="sgd-modal-close" id="sgdProfileModalClose" aria-label="Tutup">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="sgd-modal-body">
            <p class="sgd-modal-sublead">
                Dapatkan dokumen presentasi resmi kami yang mencakup: Portofolio proyek komersial & residensial, legalitas badan usaha, sertifikasi SMK3, metodologi konstruksi kurva-S, dan data kapabilitas rekayasa teknik SGD.
            </p>

            <form id="sgdProfileDownloadForm" class="sgd-profile-form">
                <div class="sgd-form-row sgd-2col">
                    <div class="sgd-form-group">
                        <label for="profName">Nama Lengkap <span class="sgd-required">*</span></label>
                        <input type="text" id="profName" name="name" class="sgd-input" placeholder="Contoh: Ir. Budi Santoso" required>
                    </div>
                    <div class="sgd-form-group">
                        <label for="profCompany">Perusahaan / Instansi <span class="sgd-required">*</span></label>
                        <input type="text" id="profCompany" name="company" class="sgd-input" placeholder="Contoh: PT Graha Mahakarya" required>
                    </div>
                </div>

                <div class="sgd-form-row sgd-2col">
                    <div class="sgd-form-group">
                        <label for="profPhone">Nomor WhatsApp Aktif <span class="sgd-required">*</span></label>
                        <input type="tel" id="profPhone" name="phone" class="sgd-input" placeholder="Contoh: 081234567890" required>
                    </div>
                    <div class="sgd-form-group">
                        <label for="profEmail">Email Kantor / Pribadi</label>
                        <input type="email" id="profEmail" name="email" class="sgd-input" placeholder="Contoh: budi@perusahaan.com">
                    </div>
                </div>

                <div class="sgd-form-group">
                    <label for="profInterest">Kebutuhan / Ketertarikan Proyek</label>
                    <select id="profInterest" name="project_interest" class="sgd-input">
                        <option value="Bangunan Komersial & Kantor">Pembangunan Gedung Komersial & Kantor</option>
                        <option value="Residensial Mewah / Villa">Pembangunan Rumah Mewah / Villa</option>
                        <option value="Interior Fit-Out Kantor">Interior Fit-Out & Renovasi Korporat</option>
                        <option value="Gudang & Fasilitas Industri">Gudang / Fasilitas Industri Bentang Lebar</option>
                        <option value="SGD Care Property Maintenance">SGD Care: Kontrak Pemeliharaan Gedung (AMC)</option>
                        <option value="Kemitraan Vendor / Subkon">Kemitraan Vendor / Subkontraktor</option>
                    </select>
                </div>

                <div id="sgdProfileFeedback" class="sgd-form-feedback" style="display:none;"></div>

                <div class="sgd-profile-form-actions">
                    <button type="submit" class="sgd-btn sgd-btn-gold sgd-btn-lg sgd-w-100" id="sgdProfileSubmitBtn">
                        <i class="fa-solid fa-download"></i> Unduh Company Profile Resmi (PDF)
                    </button>
                    <p class="sgd-form-privacy-note">
                        <i class="fa-solid fa-lock"></i> Informasi Anda terjamin kerahasiaannya dan hanya digunakan untuk keperluan pengiriman materi korporat SGD.
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Email Options Modal (Solves mailto ERR_UNKNOWN_URL_SCHEME on Chrome/Mac) -->
<div class="sgd-profile-modal sgd-email-modal" id="sgdEmailModal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="sgd-modal-backdrop" id="sgdEmailModalBackdrop"></div>
    <div class="sgd-modal-dialog sgd-profile-modal-dialog sgd-email-modal-dialog">
        <div class="sgd-modal-header sgd-border-0">
            <div class="sgd-d-flex sgd-items-center sgd-gap-3">
                <div class="sgd-email-modal-icon">
                    <i class="fa-solid fa-envelope-open-text"></i>
                </div>
                <div>
                    <span class="sgd-category-badge">HUBUNGI KAMI VIA EMAIL</span>
                    <h3 class="sgd-modal-title sgd-h3"><?php echo esc_html( SGD_EMAIL ); ?></h3>
                </div>
            </div>
            <button type="button" class="sgd-modal-close" id="sgdEmailModalClose" aria-label="Tutup Dialog Email">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="sgd-modal-body">
            <p class="sgd-modal-sublead">
                Pilih opsi pengiriman email yang paling sesuai dengan perangkat dan aplikasi Anda:
            </p>

            <div class="sgd-email-options-grid">
                <!-- Option 1: Gmail Web (Best for Chrome & Mac) -->
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo urlencode( SGD_EMAIL ); ?>&su=Inquiry%20Proyek%20Konstruksi%20-%20SGD" target="_blank" rel="noopener noreferrer" class="sgd-email-option-card sgd-email-opt-gmail">
                    <div class="sgd-email-opt-icon">
                        <i class="fa-brands fa-google"></i>
                    </div>
                    <div class="sgd-email-opt-info">
                        <strong>Buka di Gmail (Web Browser)</strong>
                        <span>Langsung terbuka di Chrome / Browser tanpa perlu aplikasi Mail</span>
                    </div>
                    <i class="fa-solid fa-arrow-up-right-from-square sgd-email-opt-arrow"></i>
                </a>

                <!-- Option 2: Copy to Clipboard -->
                <button type="button" class="sgd-email-option-card sgd-email-opt-copy" id="sgdCopyEmailBtn" data-email="<?php echo esc_attr( SGD_EMAIL ); ?>">
                    <div class="sgd-email-opt-icon">
                        <i class="fa-regular fa-copy" id="sgdCopyIcon"></i>
                    </div>
                    <div class="sgd-email-opt-info">
                        <strong id="sgdCopyText">Salin Alamat Email</strong>
                        <span id="sgdCopySubtext">Klik untuk menyalin <code><?php echo esc_html( SGD_EMAIL ); ?></code> ke clipboard</span>
                    </div>
                    <span class="sgd-copy-badge" id="sgdCopyBadge"><i class="fa-solid fa-check"></i> Tersalin!</span>
                </button>

                <!-- Option 3: Native Mail Client (mailto:) -->
                <a href="mailto:<?php echo esc_attr( SGD_EMAIL ); ?>" class="sgd-email-option-card sgd-email-opt-native">
                    <div class="sgd-email-opt-icon">
                        <i class="fa-solid fa-desktop"></i>
                    </div>
                    <div class="sgd-email-opt-info">
                        <strong>Aplikasi Email Default (Mail / Outlook)</strong>
                        <span>Buka via Apple Mail, Microsoft Outlook, atau Thunderbird jika terpasang</span>
                    </div>
                    <i class="fa-solid fa-arrow-right sgd-email-opt-arrow"></i>
                </a>

                <!-- Option 4: Website Contact Form -->
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sgd-email-option-card sgd-email-opt-form">
                    <div class="sgd-email-opt-icon">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <div class="sgd-email-opt-info">
                        <strong>Kirim Formulir Inquiry Online</strong>
                        <span>Kirim detail proyek, luas tanah, dan spesifikasi bangunan langsung di web</span>
                    </div>
                    <i class="fa-solid fa-arrow-right sgd-email-opt-arrow"></i>
                </a>
            </div>
        </div>

        <div class="sgd-modal-footer">
            <span class="sgd-email-response-time"><i class="fa-solid fa-bolt text-gold"></i> Estimasi respon email tim engineer SGD: &lt; 2 jam kerja</span>
            <button type="button" class="sgd-btn sgd-btn-outline" id="sgdEmailModalCloseBtn">
                Tutup
            </button>
        </div>
    </div>
</div>

<!-- SGD Standards & Material Standard Modal -->
<div class="sgd-profile-modal" id="sgdStandardsModal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="sgd-modal-backdrop" id="sgdStandardsModalBackdrop"></div>
    <div class="sgd-modal-dialog sgd-profile-modal-dialog" style="max-width: 780px;">
        <div class="sgd-modal-header sgd-border-0">
            <div class="sgd-d-flex sgd-items-center sgd-gap-3">
                <div class="sgd-profile-modal-icon" style="background: rgba(202, 138, 4, 0.15); color: #CA8A04;">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div>
                    <span class="sgd-category-badge" data-i18n-id="SGD QUALITY ASSURANCE" data-i18n-en="SGD QUALITY ASSURANCE">SGD QUALITY ASSURANCE</span>
                    <h3 class="sgd-modal-title sgd-h3" data-i18n-id="SGD Standard & Material Standard" data-i18n-en="SGD Standard & Material Standard">SGD Standard &amp; Material Standard</h3>
                </div>
            </div>
            <button type="button" class="sgd-modal-close" id="sgdStandardsModalClose" aria-label="Tutup">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="sgd-modal-body" style="padding-top: 10px;">
            <p class="sgd-modal-sublead" data-i18n-id="Standar ketat SGD Construction dalam pemilihan rantai pasok material, metodologi pengerjaan, dan jaminan mutu konstruksi." data-i18n-en="Strict SGD Construction standards for supply chain material selection, execution methodology, and quality assurance.">
                Standar ketat SGD Construction dalam pemilihan rantai pasok material, metodologi pengerjaan, dan jaminan mutu konstruksi di setiap proyek.
            </p>

            <div class="sgd-standards-content">
                <h4 style="margin: 20px 0 12px; font-size: 1.1rem; color: var(--sgd-slate-900, #0F172A); display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-truck-ramp-box" style="color: #CA8A04;"></i>
                    <span data-i18n-id="Mitra Standar Produsen Material & Rantai Pasok Resmi SGD:" data-i18n-en="Official Supply Chain & Material Producer Partners:">Mitra Standar Produsen Material &amp; Rantai Pasok Resmi SGD:</span>
                </h4>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 12px; margin-bottom: 24px;">
                    <div style="padding: 10px 14px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; display: flex; align-items: center; gap: 12px;">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/cs-steel.svg' ); ?>" alt="CS Steel" width="36" height="36" style="width: 36px; height: 36px; object-fit: contain; flex-shrink: 0;">
                        <div>
                            <strong style="color: #0F172A; display: block; font-size: 0.9rem;">1. Besi Beton</strong>
                            <span style="color: #475569; font-size: 0.85rem;">Cakratunggal Steel (CS) atau Baja Perwira Steel</span>
                        </div>
                    </div>
                    <div style="padding: 10px 14px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; display: flex; align-items: center; gap: 12px;">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/lautan-steel.svg' ); ?>" alt="Lautan Steel" width="36" height="36" style="width: 36px; height: 36px; object-fit: contain; flex-shrink: 0;">
                        <div>
                            <strong style="color: #0F172A; display: block; font-size: 0.9rem;">2. Baja</strong>
                            <span style="color: #475569; font-size: 0.85rem;">Lautan Steel</span>
                        </div>
                    </div>
                    <div style="padding: 10px 14px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; display: flex; align-items: center; gap: 12px;">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/indocement.svg' ); ?>" alt="Indocement" width="36" height="36" style="width: 36px; height: 36px; object-fit: contain; flex-shrink: 0;">
                        <div>
                            <strong style="color: #0F172A; display: block; font-size: 0.9rem;">3. Semen</strong>
                            <span style="color: #475569; font-size: 0.85rem;">Indocement / Holcim</span>
                        </div>
                    </div>
                    <div style="padding: 10px 14px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; display: flex; align-items: center; gap: 12px;">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/mortar-utama.svg' ); ?>" alt="Mortar Utama" width="36" height="36" style="width: 36px; height: 36px; object-fit: contain; flex-shrink: 0;">
                        <div>
                            <strong style="color: #0F172A; display: block; font-size: 0.9rem;">4. Mortar</strong>
                            <span style="color: #475569; font-size: 0.85rem;">Mortar Utama / Drymix</span>
                        </div>
                    </div>
                    <div style="padding: 10px 14px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; display: flex; align-items: center; gap: 12px;">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/astral.svg' ); ?>" alt="Astral" width="36" height="36" style="width: 36px; height: 36px; object-fit: contain; flex-shrink: 0;">
                        <div>
                            <strong style="color: #0F172A; display: block; font-size: 0.9rem;">5. Alumunium</strong>
                            <span style="color: #475569; font-size: 0.85rem;">Astral</span>
                        </div>
                    </div>
                    <div style="padding: 10px 14px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; display: flex; align-items: center; gap: 12px;">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/ykk-aleksindo.svg' ); ?>" alt="YKK Aleksindo" width="36" height="36" style="width: 36px; height: 36px; object-fit: contain; flex-shrink: 0;">
                        <div>
                            <strong style="color: #0F172A; display: block; font-size: 0.9rem;">6. Alumunium Rakitan</strong>
                            <span style="color: #475569; font-size: 0.85rem;">YKK / Aleksindo</span>
                        </div>
                    </div>
                    <div style="padding: 10px 14px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; display: flex; align-items: center; gap: 12px;">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/jayaboard.svg' ); ?>" alt="Jayaboard" width="36" height="36" style="width: 36px; height: 36px; object-fit: contain; flex-shrink: 0;">
                        <div>
                            <strong style="color: #0F172A; display: block; font-size: 0.9rem;">7. Plafond</strong>
                            <span style="color: #475569; font-size: 0.85rem;">Gypsum Jayaboard atau Panel Sheet</span>
                        </div>
                    </div>
                    <div style="padding: 10px 14px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; display: flex; align-items: center; gap: 12px;">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/supreme-cable.svg' ); ?>" alt="Supreme Cable" width="36" height="36" style="width: 36px; height: 36px; object-fit: contain; flex-shrink: 0;">
                        <div>
                            <strong style="color: #0F172A; display: block; font-size: 0.9rem;">8. Kabel Elektrikal</strong>
                            <span style="color: #475569; font-size: 0.85rem;">Kabel Supreme</span>
                        </div>
                    </div>
                    <div style="padding: 10px 14px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; display: flex; align-items: center; gap: 12px;">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/rucika.svg' ); ?>" alt="Rucika" width="36" height="36" style="width: 36px; height: 36px; object-fit: contain; flex-shrink: 0;">
                        <div>
                            <strong style="color: #0F172A; display: block; font-size: 0.9rem;">9. Pipa</strong>
                            <span style="color: #475569; font-size: 0.85rem;">Rucika / Wavin</span>
                        </div>
                    </div>
                    <div style="padding: 10px 14px; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; display: flex; align-items: center; gap: 12px;">
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/brands/paint-brands.svg' ); ?>" alt="Cat Brands" width="36" height="36" style="width: 36px; height: 36px; object-fit: contain; flex-shrink: 0;">
                        <div>
                            <strong style="color: #0F172A; display: block; font-size: 0.9rem;">10. Cat</strong>
                            <span style="color: #475569; font-size: 0.85rem;">Jotun, Mowilex, Propan, Dulux</span>
                        </div>
                    </div>
                </div>

                <h4 style="margin: 20px 0 12px; font-size: 1.1rem; color: var(--sgd-slate-900, #0F172A); display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-shield-halved" style="color: #CA8A04;"></i>
                    <span data-i18n-id="SGD Quality Standard & Sistem Kontrak" data-i18n-en="SGD Quality Standard & Contract System">SGD Quality Standard &amp; Sistem Kontrak</span>
                </h4>
                <div style="background: #FFFBEB; border: 1px solid #FDE68A; padding: 14px; border-radius: 8px; margin-bottom: 16px;">
                    <ul style="margin: 0; padding-left: 20px; color: #92400E; font-size: 0.88rem; line-height: 1.6;">
                        <li><strong>Standar Material SNI & Internasional:</strong> Seluruh komponen struktur dan utilitas telah melalui verifikasi laboratorium resmi.</li>
                        <li><strong>Fleksibilitas Sistem Kontrak:</strong> Lumpsum Fixed Price, Cost Plus Fee, Supply by Owner, atau kombinasi berbasis FIDIC.</li>
                        <li><strong>Jaminan Purna Jual & Perawatan:</strong> Didukung penuh oleh unit <strong>SGD Care</strong> untuk perawatan berkala paska serah terima (BAST).</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="sgd-modal-footer">
            <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin konsultasi detail spesifikasi material dan SGD Standard.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp">
                <i class="fa-brands fa-whatsapp"></i> <span>Konsultasi Spesifikasi via WA</span>
            </a>
            <button type="button" class="sgd-btn sgd-btn-outline" id="sgdStandardsModalCloseBtn">
                Tutup
            </button>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
