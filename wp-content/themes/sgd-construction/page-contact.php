<?php
/**
 * Template Name: Contact Page Template
 *
 * @package SGD_Construction
 */

get_header();
?>

<!-- Page Header -->
<section class="sgd-page-header">
    <div class="sgd-page-header-bg" style="background-image: url('<?php echo esc_url( SGD_THEME_URI . '/assets/images/about-company.jpg' ); ?>');"></div>
    <div class="sgd-page-header-overlay"></div>
    <div class="sgd-container">
        <div class="sgd-page-header-content">
            <div class="sgd-breadcrumbs">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                <span class="sgd-bc-sep">/</span>
                <span>Kontak</span>
            </div>
            <h1 class="sgd-page-title">Hubungi SGD Construction</h1>
            <p class="sgd-page-lead">Diskusikan kebutuhan proyek konstruksi, desain arsitektur, dan pemeliharaan gedung Anda langsung dengan tim profesional kami.</p>
        </div>
    </div>
</section>

<!-- Contact Cards Section -->
<section class="sgd-section sgd-pb-0">
    <div class="sgd-container">
        <div class="sgd-contact-cards-grid">

            <!-- Card 1: WhatsApp -->
            <div class="sgd-contact-card sgd-contact-card-highlight">
                <div class="sgd-contact-card-icon">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div class="sgd-badge-status-online">
                    <span class="sgd-dot-online"></span> Respon Cepat
                </div>
                <h3>WhatsApp Resmi</h3>
                <p>Konsultasi langsung dengan tim estimator & marketing kami via chat WhatsApp.</p>
                <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin konsultasi rencana proyek.') ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-contact-card-link">
                    <strong><?php echo esc_html( SGD_PHONE ); ?></strong>
                    <span class="sgd-contact-sub">(WA Only)</span>
                </a>
            </div>

            <!-- Card 2: Email -->
            <div class="sgd-contact-card">
                <div class="sgd-contact-card-icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <h3>Email Resmi</h3>
                <p>Untuk pengiriman dokumen tender proyek, BoQ, gambar kerja, atau kerja sama resmi.</p>
                <a href="mailto:<?php echo esc_attr( SGD_EMAIL ); ?>" class="sgd-contact-card-link">
                    <strong><?php echo esc_html( SGD_EMAIL ); ?></strong>
                </a>
            </div>

            <!-- Card 3: Instagram -->
            <div class="sgd-contact-card">
                <div class="sgd-contact-card-icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <h3>Instagram Resmi</h3>
                <p>Ikuti dokumentasi proyek harian, video reels konstruksi lapangan, dan portofolio terbaru.</p>
                <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-contact-card-link">
                    <strong><?php echo esc_html( SGD_INSTAGRAM_HANDLE ); ?></strong>
                </a>
            </div>

            <!-- Card 4: Office -->
            <div class="sgd-contact-card">
                <div class="sgd-contact-card-icon">
                    <i class="fa-solid fa-building"></i>
                </div>
                <h3>Kantor Operasional</h3>
                <p>PT Sunggiardi Prima Konstruksi</p>
                <address class="sgd-contact-address-block">
                    <?php echo esc_html( SGD_ADDRESS ); ?>
                </address>
                <div class="sgd-contact-hours">
                    <i class="fa-solid fa-clock"></i> Sen - Jum: 08:30 - 17:30 | Sab: 08:30 - 13:00
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Form & Interactive Map Section -->
<section class="sgd-section">
    <div class="sgd-container">
        <div class="sgd-grid-2col sgd-gap-lg">

            <!-- Left: Inquiry Form -->
            <div class="sgd-form-wrapper">
                <div class="sgd-section-tag">FORM KONSULTASI PROYEK</div>
                <h2 class="sgd-section-heading">Kirim Rincian Proyek Anda</h2>
                <p class="sgd-form-intro">
                    Silakan isi formulir di bawah ini. Tim teknis SGD Construction akan meninjau spesifikasi kebutuhan Anda dan menghubungi kembali dalam waktu 1x24 jam kerja.
                </p>

                <form id="sgdContactForm" class="sgd-contact-form" method="POST">
                    <div id="sgdFormFeedback" class="sgd-form-feedback" style="display: none;"></div>

                    <div class="sgd-form-row">
                        <div class="sgd-form-group">
                            <label for="contactName">Nama Lengkap <span class="sgd-req">*</span></label>
                            <input type="text" id="contactName" name="name" class="sgd-form-input" placeholder="Contoh: Bpk. Hendra Gunawan" required>
                        </div>
                        <div class="sgd-form-group">
                            <label for="contactPhone">Nomor WhatsApp / HP <span class="sgd-req">*</span></label>
                            <input type="tel" id="contactPhone" name="phone" class="sgd-form-input" placeholder="Contoh: 08123456789" required>
                        </div>
                    </div>

                    <div class="sgd-form-row">
                        <div class="sgd-form-group">
                            <label for="contactEmail">Alamat Email <span class="sgd-req">*</span></label>
                            <input type="email" id="contactEmail" name="email" class="sgd-form-input" placeholder="hendra@perusahaan.com" required>
                        </div>
                        <div class="sgd-form-group">
                            <label for="contactService">Layanan yang Dibutuhkan</label>
                            <select id="contactService" name="service" class="sgd-form-select">
                                <option value="General Contracting & Konstruksi Sipil">General Contracting & Konstruksi Sipil</option>
                                <option value="Desain Arsitektur & Perencanaan Struktur">Desain Arsitektur & Perencanaan Struktur</option>
                                <option value="Commercial & Residential Interior Fit-Out">Commercial & Residential Interior Fit-Out</option>
                                <option value="Mekanikal, Elektrikal & Plumbing (MEP)">Mekanikal, Elektrikal & Plumbing (MEP)</option>
                                <option value="SGD Care: Building & Property Maintenance">SGD Care: Building & Property Maintenance</option>
                                <option value="Konsultasi Umum / Lainnya">Konsultasi Umum / Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="sgd-form-row">
                        <div class="sgd-form-group">
                            <label for="contactLocation">Lokasi Proyek</label>
                            <input type="text" id="contactLocation" name="location" class="sgd-form-input" placeholder="Contoh: Jakarta Barat / BSD Tangerang">
                        </div>
                        <div class="sgd-form-group">
                            <label for="contactEstimate">Estimasi Luas / Anggaran (Opsional)</label>
                            <input type="text" id="contactEstimate" name="estimate" class="sgd-form-input" placeholder="Contoh: Luas ± 500 m²">
                        </div>
                    </div>

                    <div class="sgd-form-group">
                        <label for="contactMessage">Deskripsi Kebutuhan Proyek <span class="sgd-req">*</span></label>
                        <textarea id="contactMessage" name="message" class="sgd-form-textarea" rows="4" placeholder="Ceritakan gambaran rencana bangunan, target waktu mulai, atau kebutuhan spesifik lainnya..." required></textarea>
                    </div>

                    <div class="sgd-form-actions">
                        <button type="submit" id="sgdSubmitBtn" class="sgd-btn sgd-btn-primary sgd-btn-lg">
                            <i class="fa-solid fa-paper-plane"></i>
                            <span>Kirim Formulir Inquiry</span>
                        </button>
                        <button type="button" id="sgdSendWaBtn" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>Kirim Langsung via WA</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right: Office Info & Location Embed -->
            <div class="sgd-location-wrapper">
                <div class="sgd-section-tag">KANTOR PUSAT</div>
                <h2 class="sgd-section-heading">Lokasi & Kunjungan</h2>
                <p class="sgd-lead-text">
                    Kantor operasional kami berlokasi strategis di Jakarta Barat untuk melayani proyek di area Jabodetabek dan seluruh Indonesia.
                </p>

                <!-- Office Highlight Card -->
                <div class="sgd-office-box">
                    <div class="sgd-office-row">
                        <i class="fa-solid fa-location-dot"></i>
                        <div>
                            <h4>Alamat Kantor</h4>
                            <p><strong>PT Sunggiardi Prima Konstruksi</strong><br>
                            <?php echo esc_html( SGD_ADDRESS ); ?></p>
                        </div>
                    </div>
                    <div class="sgd-office-row">
                        <i class="fa-brands fa-whatsapp"></i>
                        <div>
                            <h4>WhatsApp Fast Response</h4>
                            <p><a href="<?php echo esc_url( sgd_get_wa_link() ); ?>" target="_blank"><?php echo esc_html( SGD_PHONE ); ?> (Chat Only)</a></p>
                        </div>
                    </div>
                    <div class="sgd-office-row">
                        <i class="fa-solid fa-envelope"></i>
                        <div>
                            <h4>Surel Resmi</h4>
                            <p><a href="mailto:<?php echo esc_attr( SGD_EMAIL ); ?>"><?php echo esc_html( SGD_EMAIL ); ?></a></p>
                        </div>
                    </div>
                    <div class="sgd-office-row">
                        <i class="fa-brands fa-instagram"></i>
                        <div>
                            <h4>Instagram</h4>
                            <p><a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank"><?php echo esc_html( SGD_INSTAGRAM_HANDLE ); ?></a></p>
                        </div>
                    </div>
                </div>

                <!-- Google Maps Frame -->
                <div class="sgd-map-container">
                    <iframe 
                        src="https://maps.google.com/maps?q=Ruko+Permata+Regency+Srengseng+Kembangan+Jakarta+Barat&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                        width="100%" 
                        height="320" 
                        style="border:0; border-radius: 12px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Peta Lokasi SGD Construction PT Sunggiardi Prima Konstruksi">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
