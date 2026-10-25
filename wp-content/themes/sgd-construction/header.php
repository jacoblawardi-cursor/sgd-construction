<?php
/**
 * Header template for SGD Construction
 *
 * @package SGD_Construction
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="icon" type="image/svg+xml" href="<?php echo esc_url( SGD_THEME_URI . '/assets/images/favicon.svg' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Info Bar -->
<header class="sgd-site-header" id="sgdHeader">
    <div class="sgd-topbar">
        <div class="sgd-container">
            <div class="sgd-topbar-inner">
                <div class="sgd-topbar-left">
                    <span class="sgd-topbar-item">
                        <i class="fa-solid fa-clock"></i> Sen - Jum: 08:30 - 17:30 WIB
                    </span>
                    <a href="mailto:<?php echo esc_attr( SGD_EMAIL ); ?>" class="sgd-topbar-item sgd-link-hover">
                        <i class="fa-solid fa-envelope"></i> <?php echo esc_html( SGD_EMAIL ); ?>
                    </a>
                </div>
                <div class="sgd-topbar-right">
                    <a href="<?php echo esc_url( sgd_get_wa_link() ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-topbar-item sgd-link-hover">
                        <i class="fa-brands fa-whatsapp"></i> <?php echo esc_html( SGD_PHONE ); ?> (WA Only)
                    </a>
                    <span class="sgd-divider">|</span>
                    <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-topbar-item sgd-link-hover">
                        <i class="fa-brands fa-instagram"></i> <?php echo esc_html( SGD_INSTAGRAM_HANDLE ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="sgd-navbar" id="sgdNavbar">
        <div class="sgd-container">
            <div class="sgd-navbar-inner">
                <!-- Brand Logo -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sgd-brand">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/logo.svg' ); ?>" alt="SGD Construction Logo" class="sgd-logo-img">
                </a>

                <!-- Desktop Nav Links -->
                <div class="sgd-nav-links">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sgd-nav-link <?php echo is_front_page() ? 'active' : ''; ?>">
                        Home
                    </a>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="sgd-nav-link <?php echo is_page( 'about' ) ? 'active' : ''; ?>">
                        About
                    </a>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="sgd-nav-link <?php echo is_page( 'services' ) ? 'active' : ''; ?>">
                        Services
                    </a>
                    <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="sgd-nav-link <?php echo is_page( 'portfolio' ) ? 'active' : ''; ?>">
                        Portfolio
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sgd-nav-link <?php echo is_page( 'contact' ) ? 'active' : ''; ?>">
                        Contact
                    </a>
                </div>

                <!-- Action Area -->
                <div class="sgd-nav-action">
                    <a href="<?php echo esc_url( sgd_get_wa_link() ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-primary sgd-btn-sm">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Konsultasi Proyek</span>
                    </a>

                    <!-- Mobile Menu Hamburger -->
                    <button type="button" class="sgd-mobile-toggle" id="sgdMobileToggle" aria-label="Buka Menu Navigasi">
                        <span class="sgd-hamburger-bar"></span>
                        <span class="sgd-hamburger-bar"></span>
                        <span class="sgd-hamburger-bar"></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Drawer Menu -->
    <div class="sgd-mobile-drawer" id="sgdMobileDrawer">
        <div class="sgd-drawer-overlay" id="sgdDrawerOverlay"></div>
        <div class="sgd-drawer-panel">
            <div class="sgd-drawer-header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sgd-drawer-brand">
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/logo.svg' ); ?>" alt="SGD Construction Logo" style="height: 38px;">
                </a>
                <button type="button" class="sgd-drawer-close" id="sgdDrawerClose" aria-label="Tutup Menu">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="sgd-drawer-nav">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sgd-drawer-link <?php echo is_front_page() ? 'active' : ''; ?>">
                    <i class="fa-solid fa-house"></i> Home
                </a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="sgd-drawer-link <?php echo is_page( 'about' ) ? 'active' : ''; ?>">
                    <i class="fa-solid fa-building"></i> About
                </a>
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="sgd-drawer-link <?php echo is_page( 'services' ) ? 'active' : ''; ?>">
                    <i class="fa-solid fa-helmet-safety"></i> Services
                </a>
                <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="sgd-drawer-link <?php echo is_page( 'portfolio' ) ? 'active' : ''; ?>">
                    <i class="fa-solid fa-layer-group"></i> Portfolio
                </a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sgd-drawer-link <?php echo is_page( 'contact' ) ? 'active' : ''; ?>">
                    <i class="fa-solid fa-address-book"></i> Contact
                </a>
            </div>
            <div class="sgd-drawer-footer">
                <div class="sgd-drawer-contact">
                    <p class="sgd-drawer-contact-title">Hubungi Kami Langsung:</p>
                    <a href="<?php echo esc_url( sgd_get_wa_link() ); ?>" target="_blank" class="sgd-drawer-btn-wa">
                        <i class="fa-brands fa-whatsapp"></i> <?php echo esc_html( SGD_PHONE ); ?>
                    </a>
                    <a href="mailto:<?php echo esc_attr( SGD_EMAIL ); ?>" class="sgd-drawer-info-link">
                        <i class="fa-solid fa-envelope"></i> <?php echo esc_html( SGD_EMAIL ); ?>
                    </a>
                    <a href="<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>" target="_blank" class="sgd-drawer-info-link">
                        <i class="fa-brands fa-instagram"></i> <?php echo esc_html( SGD_INSTAGRAM_HANDLE ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="sgd-site-main">
