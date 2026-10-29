<?php
/**
 * Archive Template for Portfolio CPT
 *
 * This file will be used when accessing http://localhost/sgd-construction/portfolio/
 * It mirrors the layout of the custom page template (page-portfolio.php) but works
 * for the CPT archive query.
 */

get_header();

// Retrieve portfolio items using the helper (ensures featured images are included).
$projects = sgd_get_projects();
?>
<script type="text/javascript">
    var sgdProjects = <?php echo json_encode($projects); ?>;
</script>

<!-- Page Header -->
<section class="sgd-page-header">
    <div class="sgd-page-header-bg" style="background-image: url('<?php echo esc_url( SGD_THEME_URI . '/assets/images/project-1.jpg' ); ?>');"></div>
    <div class="sgd-page-header-overlay"></div>
    <div class="sgd-container">
        <div class="sgd-page-header-content">
            <div class="sgd-breadcrumbs">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                <span class="sgd-bc-sep">/</span>
                <span>Portofolio</span>
            </div>
            <h1 class="sgd-page-title">Portofolio &amp; Rekam Jejak Proyek</h1>
            <p class="sgd-page-lead">Kumpulan proyek unggulan PT Sunggiardi Prima Konstruksi di berbagai sektor komersial, hunian prestisius, interior korporat, dan pergudangan modern. Klik setiap proyek untuk melihat detail teknis &amp; galeri foto.</p>
        </div>
    </div>
</section>

<!-- Portfolio Main Showcase -->
<section class="sgd-section">
    <div class="sgd-container">
        <!-- Filter Controls -->
        <div class="sgd-portfolio-filters" id="sgdPortfolioFilters">
            <button type="button" class="sgd-filter-btn active" data-filter="all">Semua Proyek (<?php echo count($projects); ?>)</button>
            <?php foreach (sgd_get_portfolio_categories() as $cat) : ?>
                <button type="button" class="sgd-filter-btn" data-filter="<?php echo esc_attr($cat->slug); ?>"><?php echo esc_html($cat->name); ?></button>
            <?php endforeach; ?>
        </div>

        <!-- Portfolio Items Grid -->
        <div class="sgd-portfolio-grid" id="sgdPortfolioGrid">
            <?php foreach ($projects as $item) : ?>
                <div class="sgd-portfolio-item" data-category="<?php echo esc_attr($item['category']); ?>">
                    <div class="sgd-portfolio-card sgd-portfolio-card-clickable" data-project-id="<?php echo esc_attr($item['id']); ?>" role="button" tabindex="0" aria-label="<?php echo esc_attr($item['title']); ?>">
                        <div class="sgd-portfolio-media">
                            <img src="<?php echo esc_url( get_the_post_thumbnail_url($item['post_id'], 'medium') ?: get_template_directory_uri() . '/assets/images/placeholder.jpg' ); ?>" alt="<?php echo esc_attr($item['title']); ?>">
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
                    <h4>Dokumentasi Proyek Harian di Instagram @sgdconstruction</h4>
                    <p>Saksikan proses pengerjaan lapangan, uji tekan beton, hingga serah terima proyek secara langsung melalui reels &amp; stories resmi kami.</p>
                </div>
            </div>
            <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-whatsapp">
                <i class="fa-brands fa-instagram"></i> Kunjungi @sgdconstruction
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
