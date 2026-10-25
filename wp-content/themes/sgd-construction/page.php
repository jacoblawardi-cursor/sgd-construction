<?php
/**
 * Default Page Template
 *
 * @package SGD_Construction
 */

get_header();
?>

<section class="sgd-page-header">
    <div class="sgd-page-header-bg" style="background-image: url('<?php echo esc_url( SGD_THEME_URI . '/assets/images/hero-bg.jpg' ); ?>');"></div>
    <div class="sgd-page-header-overlay"></div>
    <div class="sgd-container">
        <div class="sgd-page-header-content">
            <div class="sgd-breadcrumbs">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                <span class="sgd-bc-sep">/</span>
                <span><?php the_title(); ?></span>
            </div>
            <h1 class="sgd-page-title"><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<section class="sgd-section">
    <div class="sgd-container">
        <div class="sgd-page-body-content">
            <?php
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
