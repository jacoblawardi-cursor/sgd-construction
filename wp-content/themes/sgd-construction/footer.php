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
                        <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/logo.svg' ); ?>" alt="SGD Construction" class="sgd-footer-logo-img">
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

<!-- Project Details & Gallery Modal -->
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

        <!-- Modal Body -->
        <div class="sgd-modal-body">
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

<?php wp_footer(); ?>
</body>
</html>
