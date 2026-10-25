<?php
/**
 * Fallback Index Template
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
            <h1 class="sgd-page-title"><?php bloginfo( 'name' ); ?></h1>
            <p class="sgd-page-lead"><?php bloginfo( 'description' ); ?></p>
        </div>
    </div>
</section>

<section class="sgd-section">
    <div class="sgd-container">
        <div class="sgd-page-body-content">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article class="sgd-post-card">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div><?php the_excerpt(); ?></div>
                    </article>
                    <?php
                endwhile;
            else :
                echo '<p>Tidak ada konten yang ditemukan.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
