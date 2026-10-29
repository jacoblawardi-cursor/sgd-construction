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
                    <span class="sgd-badge-accent">KONSULTASI GRATIS</span>
                    <h3>Rencanakan Proyek Konstruksi Anda Bersama Tim Ahli SGD</h3>
                    <p>Dari konsep desain hingga serah terima bangunan, kami siap mewujudkan visi bangunan terbaik Anda dengan standar mutu dan keselamatan tertinggi.</p>
                </div>
                <div class="sgd-footer-cta-actions">
                    <button type="button" class="sgd-btn sgd-btn-gold sgd-btn-lg" data-modal="profile">
                        <i class="fa-solid fa-file-pdf"></i> Download Company Profile
                    </button>
                    <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin menjadwalkan konsultasi proyek.') ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg">
                        <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp 08116016868
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sgd-btn sgd-btn-outline sgd-btn-lg">
                        Kirim Form Inquiry
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
                    <p class="sgd-footer-desc">
                        <strong>PT Sunggiardi Prima Konstruksi (SGD Construction)</strong> adalah penyedia jasa konstruksi, arsitektur, kontraktor umum, dan interior berstandar profesional di Indonesia. Kami mengedepankan kualitas struktural, efisiensi waktu, dan transparansi anggaran.
                    </p>
                    <div class="sgd-footer-socials">
                        <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-social-icon" aria-label="Instagram SGD Construction">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="<?php echo esc_url( sgd_get_wa_link() ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-social-icon" aria-label="WhatsApp SGD Construction">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="mailto:<?php echo esc_attr( SGD_EMAIL ); ?>" class="sgd-social-icon" aria-label="Email SGD Construction">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div class="sgd-footer-col">
                    <h4 class="sgd-footer-heading">Navigasi Utama</h4>
                    <ul class="sgd-footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa-solid fa-angle-right"></i> Beranda / Home</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><i class="fa-solid fa-angle-right"></i> Tentang Kami (About)</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><i class="fa-solid fa-angle-right"></i> Layanan Konstruksi</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>"><i class="fa-solid fa-angle-right"></i> Portofolio Proyek</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><i class="fa-solid fa-angle-right"></i> Hubungi Kami (Contact)</a></li>
                    </ul>
                </div>

                <!-- Col 3: Services -->
                <div class="sgd-footer-col">
                    <h4 class="sgd-footer-heading">Layanan Unggulan</h4>
                    <ul class="sgd-footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/services/#contracting' ) ); ?>"><i class="fa-solid fa-angle-right"></i> General Contracting & Sipil</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/#architecture' ) ); ?>"><i class="fa-solid fa-angle-right"></i> Desain Arsitektur & Struktur</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/#interior' ) ); ?>"><i class="fa-solid fa-angle-right"></i> Interior Fit-Out & Renovasi</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/#mep' ) ); ?>"><i class="fa-solid fa-angle-right"></i> Mechanical, Electrical & Plumbing</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/#care' ) ); ?>"><i class="fa-solid fa-angle-right"></i> SGD Care: Building Maintenance</a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact & Office -->
                <div class="sgd-footer-col">
                    <h4 class="sgd-footer-heading">Kontak Resmi</h4>
                    <div class="sgd-footer-contact-list">
                        <div class="sgd-contact-item">
                            <div class="sgd-contact-icon"><i class="fa-brands fa-whatsapp"></i></div>
                            <div>
                                <span class="sgd-contact-label">WhatsApp (Chat Only):</span>
                                <a href="<?php echo esc_url( sgd_get_wa_link() ); ?>" target="_blank" class="sgd-contact-value">
                                    <?php echo esc_html( SGD_PHONE ); ?>
                                </a>
                            </div>
                        </div>
                        <div class="sgd-contact-item">
                            <div class="sgd-contact-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div>
                                <span class="sgd-contact-label">Email Resmi:</span>
                                <a href="mailto:<?php echo esc_attr( SGD_EMAIL ); ?>" class="sgd-contact-value">
                                    <?php echo esc_html( SGD_EMAIL ); ?>
                                </a>
                            </div>
                        </div>
                        <div class="sgd-contact-item">
                            <div class="sgd-contact-icon"><i class="fa-brands fa-instagram"></i></div>
                            <div>
                                <span class="sgd-contact-label">Official Instagram:</span>
                                <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" class="sgd-contact-value">
                                    <?php echo esc_html( SGD_INSTAGRAM_HANDLE ); ?>
                                </a>
                            </div>
                        </div>
                        <div class="sgd-contact-item">
                            <div class="sgd-contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div>
                                <span class="sgd-contact-label">Lokasi Kantor:</span>
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
                    &copy; <?php echo date('Y'); ?> <strong>PT Sunggiardi Prima Konstruksi (SGD Construction)</strong>. All Rights Reserved.
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
                    <h3 class="sgd-modal-title sgd-h3">Unduh Company Profile PT Sunggiardi Prima Konstruksi</h3>
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

<?php wp_footer(); ?>
</body>
</html>
