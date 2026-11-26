<?php
/**
 * Template Name: Portfolio Page Template
 *
 * @package SGD_Construction
 */

get_header();

$projects = sgd_get_projects();
?>

<!-- Page Header -->
<section class="sgd-page-header">
    <div class="sgd-page-header-bg" style="background-image: url('<?php echo esc_url( SGD_THEME_URI . '/assets/images/project-1.jpg' ); ?>');"></div>
    <div class="sgd-page-header-overlay"></div>
    <div class="sgd-container">
        <div class="sgd-page-header-content">
            <div class="sgd-breadcrumbs">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-i18n-id="Beranda" data-i18n-en="Home">Beranda</a>
                <span class="sgd-bc-sep">/</span>
                <span data-i18n-id="Portofolio" data-i18n-en="Portfolio">Portofolio</span>
            </div>
            <h1 class="sgd-page-title" data-i18n-id="Portofolio & Rekam Jejak Rekayasa Konstruksi" data-i18n-en="Portfolio & Engineering Track Record">Portofolio & Rekam Jejak Rekayasa Konstruksi</h1>
            <p class="sgd-page-lead" data-i18n-id="Kumpulan proyek unggulan SGD Construction di sektor komersial, gedung perkantoran, hunian prestisius, interior korporat, dan fasilitas industri berbentang lebar." data-i18n-en="Featured project collection of SGD Construction across commercial, corporate high-rises, prestigious residences, corporate interiors, and wide-span industrial facilities.">Kumpulan proyek unggulan SGD Construction di sektor komersial, gedung perkantoran, hunian prestisius, interior korporat, dan fasilitas industri berbentang lebar.</p>
            <div class="sgd-mt-3">
                <button type="button" class="sgd-btn sgd-btn-gold" data-modal="profile">
                    <i class="fa-solid fa-file-pdf"></i> <span data-i18n-id="Download Official Project Portfolio & Credentials (PDF)" data-i18n-en="Download Official Project Portfolio & Credentials (PDF)">Download Official Project Portfolio & Credentials (PDF)</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Main Showcase -->
<section class="sgd-section">
    <div class="sgd-container">

        <!-- Filter Controls -->
        <div class="sgd-portfolio-filters" id="sgdPortfolioFilters">
            <button type="button" class="sgd-filter-btn active" data-filter="all"><span data-i18n-id="Semua Proyek" data-i18n-en="All Projects">Semua Proyek</span> (<?php echo count($projects); ?>)</button>
            <?php foreach (sgd_get_portfolio_categories() as $cat) : ?>
                <button type="button" class="sgd-filter-btn" data-filter="<?php echo esc_attr($cat->slug); ?>"><?php echo esc_html($cat->name); ?></button>
            <?php endforeach; ?>
        </div>

        <!-- Portfolio Items Grid -->
        <div class="sgd-portfolio-grid" id="sgdPortfolioGrid">
            <?php foreach ($projects as $item) : 
                $thumbnail = ! empty( $item['images'][0] ) ? $item['images'][0] : SGD_THEME_URI . '/assets/images/project-1.jpg';
            ?>
                <div class="sgd-portfolio-item" data-category="<?php echo esc_attr($item['category']); ?>">
                    <div class="sgd-portfolio-card sgd-portfolio-card-clickable" data-project-id="<?php echo esc_attr($item['id']); ?>" role="button" tabindex="0" aria-label="<?php echo esc_attr($item['title']); ?>">
                        <div class="sgd-portfolio-media">
                            <img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php echo esc_attr($item['title']); ?>">
                            <span class="sgd-category-badge"><?php echo esc_html($item['category_label']); ?></span>
                        </div>
                        <div class="sgd-portfolio-info">
                            <h3><?php echo esc_html($item['title']); ?></h3>
                            <p class="sgd-project-location"><i class="fa-solid fa-location-dot"></i> <?php echo esc_html($item['location']); ?></p>
                            <p class="sgd-project-desc"><?php echo esc_html($item['desc']); ?></p>
                            <div class="sgd-project-specs">
                                <span><i class="fa-solid fa-ruler-combined"></i> <?php echo esc_html($item['area']); ?></span>
                                <span><i class="fa-solid fa-clock"></i> <?php echo esc_html($item['duration']); ?></span>
                                <span><i class="fa-solid fa-circle-check"></i> <?php echo esc_html($item['status']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Instagram Feed Callout Banner -->
        <div class="sgd-insta-portfolio-banner">
            <div class="sgd-insta-banner-left">
                <i class="fa-brands fa-instagram"></i>
                <div>
                    <h4 data-i18n-id="Dokumentasi Proyek Harian di Instagram @sgdconstruction" data-i18n-en="Daily Project Documentation on Instagram @sgdconstruction">Dokumentasi Proyek Harian di Instagram @sgdconstruction</h4>
                    <p data-i18n-id="Saksikan proses pengerjaan lapangan, uji tekan beton laboratorium, hingga berita acara serah terima (BAST) proyek melalui reels & stories resmi kami." data-i18n-en="Watch on-site construction progress, laboratory concrete testing, and project handover milestones through our official reels & stories.">Saksikan proses pengerjaan lapangan, uji tekan beton laboratorium, hingga berita acara serah terima (BAST) proyek melalui reels & stories resmi kami.</p>
                </div>
            </div>
            <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-whatsapp">
                <i class="fa-brands fa-instagram"></i> <span data-i18n-id="Kunjungi @sgdconstruction" data-i18n-en="Visit @sgdconstruction">Kunjungi @sgdconstruction</span>
            </a>
        </div>

    </div>
</section>

<!-- Portfolio CTA Banner -->
<section class="sgd-cta-section">
    <div class="sgd-container">
        <div class="sgd-cta-box">
            <div class="sgd-cta-content">
                <span class="sgd-badge-accent" data-i18n-id="MULAI PROYEK ANDA" data-i18n-en="START YOUR PROJECT">MULAI PROYEK ANDA</span>
                <h2 data-i18n-id="Ingin Mewujudkan Bangunan Impian Anda?" data-i18n-en="Want to Bring Your Dream Building to Reality?">Ingin Mewujudkan Bangunan Impian Anda?</h2>
                <p data-i18n-id="Jadwalkan konsultasi awal bersama tim estimator dan arsitek SGD Construction sekarang juga." data-i18n-en="Schedule an initial consultation with SGD Construction estimators and architects today.">Jadwalkan konsultasi awal bersama tim estimator dan arsitek SGD Construction sekarang juga.</p>
                <div class="sgd-cta-buttons">
                    <a href="<?php echo esc_url( sgd_get_wa_link('Halo SGD Construction, saya ingin berkonsultasi mengenai rencana proyek saya.') ); ?>" target="_blank" class="sgd-btn sgd-btn-whatsapp sgd-btn-lg">
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
