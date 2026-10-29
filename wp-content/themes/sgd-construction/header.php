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
    <link rel="icon" type="image/jpeg" href="<?php echo esc_url( SGD_THEME_URI . '/assets/images/favicon.jpg' ); ?>">
    
    <!-- Enterprise Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "GeneralContractor",
      "name": "PT Sunggiardi Prima Konstruksi",
      "alternateName": "SGD Construction",
      "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
      "logo": "<?php echo esc_url( SGD_THEME_URI . '/assets/images/Logo Landscape.png' ); ?>",
      "image": "<?php echo esc_url( SGD_THEME_URI . '/assets/images/hero-bg.jpg' ); ?>",
      "description": "General Contractor, Architecture, Civil Engineering, Interior Fit-Out & Property Maintenance (SGD Care) in Indonesia.",
      "telephone": "+<?php echo esc_attr( SGD_PHONE_INTL ); ?>",
      "email": "<?php echo esc_attr( SGD_EMAIL ); ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Ruko Permata Regency Blok D, Srengseng, Kembangan",
        "addressLocality": "Jakarta Barat",
        "postalCode": "11630",
        "addressCountry": "ID"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-6.2088",
        "longitude": "106.7588"
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        "opens": "08:30",
        "closes": "17:30"
      },
      "sameAs": [
        "<?php echo esc_url( SGD_INSTAGRAM_URL ); ?>"
      ],
      "priceRange": "$$$$"
    }
    </script>
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
                        <i class="fa-solid fa-clock"></i> <span data-i18n-id="Sen - Jum: 08:30 - 17:30 WIB" data-i18n-en="Mon - Fri: 08:30 - 17:30 WIB">Sen - Jum: 08:30 - 17:30 WIB</span>
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
                    <span class="sgd-divider">|</span>
                    <!-- Language Switcher -->
                    <div class="sgd-lang-switcher" id="sgdLangSwitcher" title="Ganti Bahasa / Switch Language">
                        <button type="button" class="sgd-lang-btn active" data-lang="id" aria-label="Bahasa Indonesia">ID</button>
                        <span class="sgd-lang-sep">/</span>
                        <button type="button" class="sgd-lang-btn" data-lang="en" aria-label="English">EN</button>
                    </div>
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
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/Logo Landscape.png' ); ?>" alt="SGD Construction Logo" class="sgd-logo-img">
                </a>

                <!-- Desktop Nav Links -->
                <div class="sgd-nav-links">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sgd-nav-link <?php echo is_front_page() ? 'active' : ''; ?>" data-i18n-id="Home" data-i18n-en="Home">
                        Home
                    </a>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="sgd-nav-link <?php echo is_page( 'about' ) ? 'active' : ''; ?>" data-i18n-id="About" data-i18n-en="About Us">
                        About
                    </a>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="sgd-nav-link <?php echo is_page( 'services' ) ? 'active' : ''; ?>" data-i18n-id="Services" data-i18n-en="Services">
                        Services
                    </a>
                    <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="sgd-nav-link <?php echo is_page( 'portfolio' ) ? 'active' : ''; ?>" data-i18n-id="Portfolio" data-i18n-en="Portfolio">
                        Portfolio
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sgd-nav-link <?php echo is_page( 'contact' ) ? 'active' : ''; ?>" data-i18n-id="Contact" data-i18n-en="Contact">
                        Contact
                    </a>
                </div>

                <!-- Action Area -->
                <div class="sgd-nav-action">
                    <!-- Download Company Profile Trigger -->
                    <button type="button" class="sgd-btn sgd-btn-outline-gold sgd-btn-sm" id="sgdHeaderDownloadBtn" data-modal="profile">
                        <i class="fa-solid fa-file-pdf"></i>
                        <span data-i18n-id="Company Profile" data-i18n-en="Company Deck">Company Profile</span>
                    </button>

                    <a href="<?php echo esc_url( sgd_get_wa_link() ); ?>" target="_blank" rel="noopener noreferrer" class="sgd-btn sgd-btn-primary sgd-btn-sm">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span data-i18n-id="Konsultasi Proyek" data-i18n-en="Project Inquiry">Konsultasi Proyek</span>
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
                    <img src="<?php echo esc_url( SGD_THEME_URI . '/assets/images/Logo Landscape.png' ); ?>" alt="SGD Construction Logo" class="sgd-logo-img" style="height: 38px;">
                </a>
                <button type="button" class="sgd-drawer-close" id="sgdDrawerClose" aria-label="Tutup Menu">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            
            <!-- Mobile Language Switcher -->
            <div class="sgd-drawer-lang-bar">
                <span class="sgd-drawer-lang-label"><i class="fa-solid fa-globe"></i> Language:</span>
                <div class="sgd-lang-switcher" id="sgdMobileLangSwitcher">
                    <button type="button" class="sgd-lang-btn active" data-lang="id">Bahasa ID</button>
                    <span class="sgd-lang-sep">|</span>
                    <button type="button" class="sgd-lang-btn" data-lang="en">English EN</button>
                </div>
            </div>

            <div class="sgd-drawer-nav">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sgd-drawer-link <?php echo is_front_page() ? 'active' : ''; ?>">
                    <i class="fa-solid fa-house"></i> <span data-i18n-id="Beranda" data-i18n-en="Home">Beranda</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="sgd-drawer-link <?php echo is_page( 'about' ) ? 'active' : ''; ?>">
                    <i class="fa-solid fa-building"></i> <span data-i18n-id="Tentang Kami" data-i18n-en="About Us">Tentang Kami</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="sgd-drawer-link <?php echo is_page( 'services' ) ? 'active' : ''; ?>">
                    <i class="fa-solid fa-helmet-safety"></i> <span data-i18n-id="Layanan Konstruksi" data-i18n-en="Services">Layanan Konstruksi</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="sgd-drawer-link <?php echo is_page( 'portfolio' ) ? 'active' : ''; ?>">
                    <i class="fa-solid fa-layer-group"></i> <span data-i18n-id="Portofolio Proyek" data-i18n-en="Portfolio">Portofolio Proyek</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sgd-drawer-link <?php echo is_page( 'contact' ) ? 'active' : ''; ?>">
                    <i class="fa-solid fa-address-book"></i> <span data-i18n-id="Hubungi Kami" data-i18n-en="Contact Us">Hubungi Kami</span>
                </a>
            </div>

            <div class="sgd-drawer-cta-action">
                <button type="button" class="sgd-btn sgd-btn-outline-gold sgd-w-100 sgd-mb-2" id="sgdMobileDownloadBtn" data-modal="profile">
                    <i class="fa-solid fa-file-pdf"></i> <span data-i18n-id="Download Company Profile (PDF)" data-i18n-en="Download Company Deck (PDF)">Download Company Profile (PDF)</span>
                </button>
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
