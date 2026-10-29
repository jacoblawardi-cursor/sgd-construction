<?php
/**
 * SGD Construction Theme Functions & Definitions
 *
 * @package SGD_Construction
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'SGD_VERSION', '1.2.5' );
define( 'SGD_THEME_DIR', get_template_directory() );
define( 'SGD_THEME_URI', get_template_directory_uri() );

// Core Contact Constants
define( 'SGD_PHONE', '08116016868' );
define( 'SGD_PHONE_INTL', '628116016868' );
define( 'SGD_EMAIL', 'contact@sgd-corp.com' );
define( 'SGD_INSTAGRAM_URL', 'https://www.instagram.com/sgdconstruction/' );
define( 'SGD_INSTAGRAM_HANDLE', '@sgdconstruction' );
define( 'SGD_ADDRESS', 'Ruko Permata Regency Blok D, Srengseng, Kembangan, Jakarta Barat 11630' );

// Load Portfolio Custom Post Type & Meta Boxes
require_once SGD_THEME_DIR . '/inc/portfolio-cpt.php';

/**
 * Theme Setup
 */
function sgd_construction_setup() {
    // Make theme available for translation.
    load_theme_textdomain( 'sgd-construction', SGD_THEME_DIR . '/languages' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable post thumbnails.
    add_theme_support( 'post-thumbnails' );

    // HTML5 markup support.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ) );

    // Register primary navigation menu.
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'sgd-construction' ),
        'footer'  => __( 'Footer Navigation', 'sgd-construction' ),
    ) );
}
add_action( 'after_setup_theme', 'sgd_construction_setup' );

/**
 * Enqueue scripts and styles.
 */
function sgd_construction_scripts() {
    // Google Fonts: Plus Jakarta Sans & Inter
    wp_enqueue_style(
        'sgd-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap',
        array(),
        null
    );

    // FontAwesome 6 CDN for modern icons
    wp_enqueue_style(
        'font-awesome-6',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    $css_ver = file_exists( SGD_THEME_DIR . '/assets/css/main.css' ) ? filemtime( SGD_THEME_DIR . '/assets/css/main.css' ) : SGD_VERSION;
    $js_ver  = file_exists( SGD_THEME_DIR . '/assets/js/main.js' ) ? filemtime( SGD_THEME_DIR . '/assets/js/main.js' ) : SGD_VERSION;

    // Main Theme CSS
    wp_enqueue_style(
        'sgd-main-style',
        SGD_THEME_URI . '/assets/css/main.css',
        array(),
        $css_ver
    );

    // Main Theme JS
    wp_enqueue_script(
        'sgd-main-script',
        SGD_THEME_URI . '/assets/js/main.js',
        array( 'jquery' ),
        $js_ver,
        true
    );

    // Localize script for AJAX & contact data & projects
    wp_localize_script( 'sgd-main-script', 'sgdData', array(
        'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
        'nonce'     => wp_create_nonce( 'sgd_contact_nonce' ),
        'waNumber'  => SGD_PHONE_INTL,
        'email'     => SGD_EMAIL,
        'projects'  => sgd_get_projects()
    ) );
}
add_action( 'wp_enqueue_scripts', 'sgd_construction_scripts' );

/**
 * Master Project Directory with comprehensive gallery and technical specs
 * Queries from Custom Post Type 'portfolio' first, falls back to default seed data if none found.
 */
function sgd_get_projects() {
    $img_uri = SGD_THEME_URI . '/assets/images';

    // 1. Try querying published 'portfolio' Custom Post Type items
    $cpt_posts = get_posts( array(
        'post_type'      => 'portfolio',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order date',
        'order'          => 'ASC',
    ) );

    if ( ! empty( $cpt_posts ) ) {
        $cpt_projects = array();
        foreach ( $cpt_posts as $p ) {
            $id = $p->post_name;
            $terms = get_the_terms( $p->ID, 'portfolio_category' );
            $cat_slug  = ( ! empty( $terms ) && ! is_wp_error( $terms ) ) ? $terms[0]->slug : 'commercial';
            $cat_label = ( ! empty( $terms ) && ! is_wp_error( $terms ) ) ? $terms[0]->name : 'Komersial & Gedung';

            $location   = get_post_meta( $p->ID, '_sgd_project_location', true ) ?: 'Jakarta';
            $area       = get_post_meta( $p->ID, '_sgd_project_area', true ) ?: '-';
            $duration   = get_post_meta( $p->ID, '_sgd_project_duration', true ) ?: '-';
            $year       = get_post_meta( $p->ID, '_sgd_project_year', true ) ?: date( 'Y' );
            $status     = get_post_meta( $p->ID, '_sgd_project_status', true ) ?: 'Selesai & Diserahterimakan';
            $client     = get_post_meta( $p->ID, '_sgd_project_client', true ) ?: '-';
            $scope      = get_post_meta( $p->ID, '_sgd_project_scope', true ) ?: '-';
            $challenge  = get_post_meta( $p->ID, '_sgd_project_challenge', true ) ?: '';
            $solution   = get_post_meta( $p->ID, '_sgd_project_solution', true ) ?: '';
            $result     = get_post_meta( $p->ID, '_sgd_project_result', true ) ?: '';

            // Highlights (split by line)
            $hl_raw = get_post_meta( $p->ID, '_sgd_project_highlights', true );
            $highlights = array();
            if ( ! empty( $hl_raw ) ) {
                $lines = preg_split( '/\r\n|\r|\n/', trim( $hl_raw ) );
                foreach ( $lines as $line ) {
                    $line = trim( $line );
                    if ( ! empty( $line ) ) {
                        $highlights[] = $line;
                    }
                }
            }

            // Images (Featured image + Extra gallery URLs)
            $images = array();
            if ( has_post_thumbnail( $p->ID ) ) {
                $images[] = get_the_post_thumbnail_url( $p->ID, 'full' );
            }
            $gallery_raw = get_post_meta( $p->ID, '_sgd_project_gallery', true );
            if ( ! empty( $gallery_raw ) ) {
                $glines = preg_split( '/\r\n|\r|\n/', trim( $gallery_raw ) );
                foreach ( $glines as $gurl ) {
                    $gurl = trim( $gurl );
                    if ( ! empty( $gurl ) ) {
                        $images[] = $gurl;
                    }
                }
            }
            if ( empty( $images ) ) {
                $images[] = $img_uri . '/project-1.jpg';
            }

            $cpt_projects[ $id ] = array(
                'id'             => $id,
                'post_id'        => $p->ID,
                'title'          => $p->post_title,
                'category'       => $cat_slug,
                'category_label' => $cat_label,
                'location'       => $location,
                'area'           => $area,
                'duration'       => $duration,
                'year'           => $year,
                'client'         => $client,
                'status'         => $status,
                'scope'          => $scope,
                'challenge'      => $challenge,
                'solution'       => $solution,
                'result'         => $result,
                'desc'           => ! empty( $p->post_content ) ? wp_strip_all_tags( $p->post_content ) : $p->post_excerpt,
                'highlights'     => $highlights,
                'images'         => $images,
            );
        }
        return $cpt_projects;
    }

    // 2. Default Seed Array (Fallback if no CPT items yet)
    return array(
        'graha-perkasa' => array(
            'id'             => 'graha-perkasa',
            'title'          => 'Menara Graha Perkasa',
            'category'       => 'commercial',
            'category_label' => 'Komersial & Gedung',
            'location'       => 'Jakarta Pusat',
            'area'           => '12.500 m²',
            'duration'       => '18 Bulan',
            'year'           => '2025',
            'client'         => 'PT Graha Perkasa Land',
            'status'         => 'Selesai & Diserahterimakan',
            'scope'          => 'Struktur Beton Bertulang (K-500), Fasad Curtain Wall Low-E & MEP Terintegrasi',
            'challenge'      => 'Akses lokasi di jalur protokol utama Jakarta Pusat yang padat dengan restriksi jam kerja alat berat ketat, batas lahan bersinggungan langsung dengan bangunan tetangga, serta muka air tanah tinggi.',
            'solution'       => 'Penerapan sistem secant pile perimeter cut-off wall penahan air tanah, metode top-down excavation bertahap, dan mobilisasi material malam hari dengan manajemen lalu lintas terkoordinasi.',
            'result'         => 'Selesai 100% tepat waktu sesuai milestone kurva-S, tanpa ada settlement pada gedung sekitar, dan perolehan sertifikasi Green Building efisiensi energi 28%.',
            'desc'           => 'Pembangunan gedung perkantoran komersial 18 lantai di kawasan bisnis Jakarta Pusat. Dirancang dengan struktur beton bertulang mutu tinggi tahan gempa, double-glazed curtain wall system untuk insulasi panas dan hemat energi, serta sistem proteksi kebakaran dan MEP terintegrasi standar high-rise building.',
            'highlights'     => array(
                'Pondasi Bored Pile kedalaman 36 meter dengan uji integritas PDA & PIT 100% lolos verifikasi.',
                'Fasad double-glazed low-e glass mereduksi radiasi panas matahari dan menghemat konsumsi energi AC hingga 28%.',
                'Zero-accident record sepanjang 18 bulan masa pelaksanaan dengan kepatuhan SMK3 ketat.',
                'Sistem smart building automation untuk manajemen kelistrikan dan chiller hemat energi.'
            ),
            'images'         => array(
                $img_uri . '/project-1.jpg',
                $img_uri . '/hero-bg.jpg',
                $img_uri . '/service-contracting.jpg'
            )
        ),
        'sanctuary-villa' => array(
            'id'             => 'sanctuary-villa',
            'title'          => 'The Sanctuary Villa Residence',
            'category'       => 'residential',
            'category_label' => 'Residensial Mewah',
            'location'       => 'Sentul Selatan, Bogor',
            'area'           => '850 m²',
            'duration'       => '11 Bulan',
            'year'           => '2024',
            'client'         => 'Private Family Estate',
            'status'         => 'Selesai & Diserahterimakan',
            'scope'          => 'Rancang Bangun Total (Design & Build), Kolam Renang Kantilever & Interior Marmer',
            'challenge'      => 'Kontur lereng bukit curam dengan ancaman kestabilan lereng saat curah hujan ekstrem, serta permintaan arsitektural infinity pool kantilever tanpa kolom tumpuan di bagian bawah.',
            'solution'       => 'Pemasangan retaining wall berjenjang sistem soil nailing geoteknik bersertifikat dan balok beton prategang (post-tension) kantilever menggantung sejauh 4 meter ke arah lembah.',
            'result'         => 'Struktur lereng 100% kokoh dengan faktor keamanan geoteknik FK > 1,8, mewujudkan kolam renang melayang spektakuler tanpa retak rambut struktur.',
            'desc'           => 'Hunian mewah tropis kontemporer di lereng Sentul Selatan dengan view pegunungan panoramik. Dilengkapi infinity pool kantilever menggantung tanpa tiang bawah, rekayasa retaining wall lereng bukit stabil, dan finishing marmer Statuario impor Italia.',
            'highlights'     => array(
                'Rekayasa geoteknik retaining wall bertingkat dengan sistem soil nailing untuk stabilitas lereng bukit.',
                'Infinity pool kantilever menggantung 4 meter memanfaatkan sistem balok beton prategang (post-tension).',
                'Pemasangan marmer bookmatch Statuario impor Italia pada living area dan tangga melayang (floating stairs).',
                'Integrasi sistem tata udara VRV inverter tersembunyi dan sistem smart lighting automation.'
            ),
            'images'         => array(
                $img_uri . '/project-2.jpg',
                $img_uri . '/service-architecture.jpg',
                $img_uri . '/project-6.jpg'
            )
        ),
        'astra-hub' => array(
            'id'             => 'astra-hub',
            'title'          => 'Astra Corporate Innovation Hub Suite',
            'category'       => 'interior',
            'category_label' => 'Interior Fit-Out',
            'location'       => 'TB Simatupang, Jakarta',
            'area'           => '1.400 m²',
            'duration'       => '3 Bulan',
            'year'           => '2024',
            'client'         => 'Corporate Group Holding',
            'status'         => 'Selesai & Diserahterimakan',
            'scope'          => 'Desain Interior, Fit-Out Akustik, Custom Furniture, Raised Floor Sistem & Tata Cahaya',
            'challenge'      => 'Batas waktu pengerjaan cepat hanya 90 hari kalender pada gedung perkantoran aktif dengan regulasi jam kerja hening (zero-noise) di jam operasional normal.',
            'solution'       => 'Pelaksanaan sistem double-shift malam (off-peak) dan pra-fabrikasi modular presisi di workshop SGD sehingga proses instalasi fisik di site berlangsung 45% lebih singkat.',
            'result'         => 'Serah terima (BAST) 5 hari lebih cepat dari tenggat, uji insulasi suara boardroom lolos STC 48 dB, dan zero disturbance pada penyewa lantai lain.',
            'before_after'   => array(
                'before'       => $img_uri . '/service-interior.jpg',
                'after'        => $img_uri . '/project-3.jpg',
                'before_label' => 'Kondisi Ruang Kosong Awal',
                'after_label'  => 'Hasil Fit-Out Korporat Modern'
            ),
            'desc'           => 'Transformasi interior ruang kerja korporat modern dengan partisi kaca akustik kedap suara, ceiling baffle kayu arsitektural, ruang kolaboratif terbuka, dan furniture ergonomis kustom berstandar internasional.',
            'highlights'     => array(
                'Pengerjaan fit-out cepat 90 hari kalender dengan sistem shift malam tanpa mengganggu operasional gedung.',
                'Dinding partisi kaca ganda kedap suara (STC 48 dB) untuk seluruh boardroom eksekutif.',
                'Plafon modular baffle kayu akustik bersertifikasi ramah lingkungan (Green Building).',
                'Sistem distribusi kelistrikan dan kabel data CAT6A di bawah raised floor kapasitas 120 workstation.'
            ),
            'images'         => array(
                $img_uri . '/project-3.jpg',
                $img_uri . '/service-interior.jpg',
                $img_uri . '/about-company.jpg'
            )
        ),
        'cikarang-logistics' => array(
            'id'             => 'cikarang-logistics',
            'title'          => 'Cikarang Logistics Mega Hub',
            'category'       => 'industrial',
            'category_label' => 'Industri & Gudang',
            'location'       => 'GIIC Deltamas, Cikarang',
            'area'           => '18.000 m²',
            'duration'       => '9 Bulan',
            'year'           => '2023',
            'client'         => 'Global Logistics Provider',
            'status'         => 'Selesai & Diserahterimakan',
            'scope'          => 'Konstruksi Baja WF Bentang Lebar, Lantai Hardener Heavy-Duty & Loading Dock Hidrolik',
            'challenge'      => 'Kebutuhan bentang struktur bebas kolom tengah 45 meter dengan ketahanan beban dinamis lantai 10 ton/m² untuk racking vertikal 7 level dan forklift bertonase tinggi.',
            'solution'       => 'Struktur portal baja WF bentang lebar berkekuatan tinggi dengan baut mutu tinggi A325, serta pengecoran seamless slab beton K-350 menggunakan metallic floor hardener non-shrink.',
            'result'         => 'Lantai rata berspesifikasi Superflat F-min 75, siap operasional otomatisasi pergudangan tanpa risiko penurunan lantai, diserahterimakan on-budget.',
            'desc'           => 'Pembangunan komplek pergudangan logistik modern berbentang lebar 45 meter bebas kolom tengah. Dilengkapi lantai cor beton bertulang floor hardener anti-debu dengan ketahanan beban dinamis 10 ton/m² serta 16 pintu loading dock otomatis.',
            'highlights'     => array(
                'Rangka baja bentang lebar 45 meter bebas kolom tengah untuk efisiensi manuver forklift dan racking bertingkat.',
                'Pengecoran lantai seamless flat floor dengan metallic floor hardener beban dinamis hingga 10 ton/m².',
                'Penyediaan 16 unit loading dock hidrolik otomatis dengan dock shelter kedap cuaca.',
                'Sistem kolam retensi air hujan seluas 1.500 m³ mencegah risiko genangan dan banjir kawasan.'
            ),
            'images'         => array(
                $img_uri . '/project-4.jpg',
                $img_uri . '/service-contracting.jpg',
                $img_uri . '/hero-bg.jpg'
            )
        ),
        'senopati-pavilion' => array(
            'id'             => 'senopati-pavilion',
            'title'          => 'Senopati Lifestyle Pavilion',
            'category'       => 'commercial',
            'category_label' => 'Komersial & Retail',
            'location'       => 'Senopati, Jakarta Selatan',
            'area'           => '920 m²',
            'duration'       => '7 Bulan',
            'year'           => '2024',
            'client'         => 'Hospitality & Lifestyle Group',
            'status'         => 'Selesai & Diserahterimakan',
            'scope'          => 'Struktur Baja Ekspos, Fasad Roster Kustom, Grease Trap Komersial & Lansekap',
            'challenge'      => 'Integrasi fasilitas restoran F&B berdaya listrik tinggi dan limbah minyak komersial dengan konsep arsitektur semi-outdoor terbuka bernilai estetika premium.',
            'solution'       => 'Instalasi sistem grease trap terpusat standar dinas lingkungan hidup DKI Jakarta di bawah tanah, dipadu kanopi baja ekspos anti-korosi dan fasad roster peredam radiasi matahari.',
            'result'         => 'Destinasi komersial beroperasi penuh dengan izin lingkungan lengkap (AMDAL/UKL-UPL) dan sirkulasi alami yang menyejukkan interior resto.',
            'desc'           => 'Destinasi komersial multi-tenant semi-outdoor dengan perpaduan struktur baja ekspos elegan dan fasad roster artistik. Dirancang ramah ventilasi alami dengan fasilitas restoran komprehensif berstandar DKI Jakarta.',
            'highlights'     => array(
                'Perpaduan arsitektur baja ekspos dengan fasad roster terakota yang memaksimalkan sirkulasi udara alami.',
                'Instalasi pengolahan limbah dapur terpusat (commercial grease trap) sesuai standar dinas lingkungan hidup.',
                'Pemasangan kanopi kaca laminated tempered dengan kisi kayu ulin tahan cuaca tropis.',
                'Kapasitas daya listrik 197 kVA didukung genset silent otomatis 150 kVA.'
            ),
            'images'         => array(
                $img_uri . '/project-5.jpg',
                $img_uri . '/service-architecture.jpg',
                $img_uri . '/project-1.jpg'
            )
        ),
        'pik2-waterfront' => array(
            'id'             => 'pik2-waterfront',
            'title'          => 'PIK 2 Waterfront Residence',
            'category'       => 'residential',
            'category_label' => 'Residensial Tropis',
            'location'       => 'Pantai Indah Kapuk 2',
            'area'           => '680 m²',
            'duration'       => '10 Bulan',
            'year'           => '2025',
            'client'         => 'Private Owner',
            'status'         => 'Selesai & Diserahterimakan',
            'scope'          => 'Pondasi Tiang Pancang Tahan Sulfat, Struktur Kedap Air, Rooftop Lounge & Smart Home',
            'challenge'      => 'Kondisi tanah rawa pesisir berkadar garam dan sulfat tinggi yang dapat mempercepat korosi beton dan besi tulangan.',
            'solution'       => 'Pondasi tiang pancang mini pile bersertifikasi semen tahan sulfat Type V, pelapisan epoxy rebar anti-korosi, serta waterproofing multi-lapis pada seluruh elevasi bawah tanah.',
            'result'         => 'Jaminan daya tahan struktur lebih dari 50 tahun terhadap agresi garam laut, bebas rembesan air tanah 100%.',
            'desc'           => 'Rumah tinggal 3 lantai berarsitektur modern tropis tepi danau PIK 2. Dirancang dengan fondasi tiang pancang khusus kawasan pesisir, waterproofing membrane 4 lapis, dan sistem otomasi rumah pintar terintegrasi.',
            'highlights'     => array(
                'Struktur pondasi mini pile beton K-400 dengan semen tahan sulfat khusus kawasan tepi laut.',
                'Pelapisan waterproofing membran bakar elastomeric 4 lapis pada seluruh dak atap dan balkon.',
                'Material aluminium dan fitting hardware kelas marine-grade tahan oksidasi udara pesisir.',
                'Sistem Smart Home menyeluruh untuk kontrol penerangan, pendingin udara, gorden, dan keamanan.'
            ),
            'images'         => array(
                $img_uri . '/project-6.jpg',
                $img_uri . '/service-architecture.jpg',
                $img_uri . '/project-2.jpg'
            )
        ),
        'permata-regency' => array(
            'id'             => 'permata-regency',
            'title'          => 'Permata Regency Office Plaza',
            'category'       => 'commercial',
            'category_label' => 'Komersial & Kantor',
            'location'       => 'Srengseng, Jakarta Barat',
            'area'           => '750 m²',
            'duration'       => '6 Bulan',
            'year'           => '2023',
            'client'         => 'PT Sunggiardi Corp Ecosystem',
            'status'         => 'Selesai & Diserahterimakan',
            'scope'          => 'Revitalisasi Struktur, Fasad ACP Fire-Retardant, Basement Parkir & Lift Penumpang',
            'challenge'      => 'Gedung eksisting membutuhkan penguatan struktur kolom dan balok untuk menampung lift penumpang baru serta lantai kerja tambahan tanpa membongkar rangka dasar.',
            'solution'       => 'Metode perkuatan struktur modern Carbon Fiber Reinforced Polymer (CFRP) wrapping pada 16 titik kolom utama, serta penggantian fasad lama dengan ACP tahan api berinsulasi.',
            'result'         => 'Daya dukung struktur naik 40% tanpa penambahan dimensi kolom yang memakan ruang, menghemat biaya renovasi 60% dibanding pembangunan ulang.',
            'before_after'   => array(
                'before'       => $img_uri . '/about-company.jpg',
                'after'        => $img_uri . '/project-1.jpg',
                'before_label' => 'Fasad & Rangka Bangunan Lama',
                'after_label'  => 'Hasil Revitalisasi Kantor Modern'
            ),
            'desc'           => 'Pembangunan dan modernisasi unit ruko komersial 4 lantai lengkap dengan basement parkir, sistem lift penumpang, fasad modern tahan cuaca, dan sistem proteksi kebakaran terintegrasi.',
            'highlights'     => array(
                'Perkuatan struktur kolom eksisting menggunakan metode Carbon Fiber Reinforced Polymer (CFRP).',
                'Pemasangan fasad ACP Fire-Retardant dengan aksen louvers aluminium penahan silau matahari.',
                'Pemasangan elevator penumpang 8 orang merk Fuji dengan motor gearless hemat listrik.',
                'Penyelesaian proyek on-time dalam 180 hari dengan efisiensi biaya terukur.'
            ),
            'images'         => array(
                $img_uri . '/about-company.jpg',
                $img_uri . '/project-1.jpg',
                $img_uri . '/service-care.jpg'
            )
        ),
        'bsd-villa' => array(
            'id'             => 'bsd-villa',
            'title'          => 'BSD Modern Tropical Villa',
            'category'       => 'residential',
            'category_label' => 'Residensial Mewah',
            'location'       => 'BSD City, Tangerang',
            'area'           => '520 m²',
            'duration'       => '8 Bulan',
            'year'           => '2024',
            'client'         => 'Private Residence',
            'status'         => 'Selesai & Diserahterimakan',
            'scope'          => 'Rancang Bangun Sipil, Finishing Kayu Jati Perhutani, Courtyard & Pemanas Surya',
            'desc'           => 'Villa tropis dengan void setinggi 7,5 meter, bukaan kaca tempered masif untuk sirkulasi cahaya alami, serta pengerjaan detail kayu jati oven kualitas ekspor dan taman courtyard asri.',
            'highlights'     => array(
                'Void ruang keluarga setinggi 7,5 meter memaksimalkan pencahayaan alami dan cross ventilation.',
                'Penggunaan kayu jati Perhutani kelas 1 oven dengan treatment anti-rayap untuk pintu dan kisi-kisi.',
                'Taman inner courtyard tengah rumah dengan drainase biopori dan vertical garden mandiri.',
                'Instalasi solar water heater berkapasitas 300 liter menghemat konsumsi listrik pemanas hingga 80%.'
            ),
            'images'         => array(
                $img_uri . '/service-architecture.jpg',
                $img_uri . '/project-2.jpg',
                $img_uri . '/project-6.jpg'
            )
        ),
        'scbd-suite' => array(
            'id'             => 'scbd-suite',
            'title'          => 'SCBD Fintech Executive Suite',
            'category'       => 'interior',
            'category_label' => 'Interior Fit-Out',
            'location'       => 'Sudirman CBD, Jakarta',
            'area'           => '650 m²',
            'duration'       => '2.5 Bulan',
            'year'           => '2025',
            'client'         => 'International Fintech Firm',
            'status'         => 'Selesai & Diserahterimakan',
            'scope'          => 'Fit-Out Akustik, Meeting Pods Kedap Suara, Server Room PAC & Executive Lounge',
            'desc'           => 'Fit-out kantor finansial premium dengan meeting pod terisolasi suara, server room khusus berpendingin presisi, reception marble Nero Marquina, dan executive lounge mewah berstandar global.',
            'highlights'     => array(
                'Desain interior berstandar perbankan internasional dengan akses biometrik dan server room PAC.',
                'Pemasangan 4 unit acoustic phone booth modular kedap suara hingga 35 dB untuk panggilan privat.',
                'Custom meja resepsionis dari lempengan marmer Nero Marquina dan ornamen kuningan solid brush.',
                'Penyelesaian proyek kilat dalam 75 hari dengan zero-defect handover checklist.'
            ),
            'images'         => array(
                $img_uri . '/service-interior.jpg',
                $img_uri . '/project-3.jpg',
                $img_uri . '/about-company.jpg'
            )
        )
    );
}

/**
 * Helper: Get active portfolio categories for filter buttons
 */
function sgd_get_portfolio_categories() {
    $terms = get_terms( array(
        'taxonomy'   => 'portfolio_category',
        'hide_empty' => false,
    ) );
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
        return $terms;
    }
    return array(
        (object) array( 'slug' => 'commercial',  'name' => 'Komersial & Gedung' ),
        (object) array( 'slug' => 'residential', 'name' => 'Residensial Mewah' ),
        (object) array( 'slug' => 'interior',    'name' => 'Interior Fit-Out' ),
        (object) array( 'slug' => 'industrial',  'name' => 'Industri & Gudang' ),
    );
}

/**
 * Handle AJAX contact submissions
 */
function sgd_handle_contact_submission() {
    check_ajax_referer( 'sgd_contact_nonce', 'nonce' );

    $name    = sanitize_text_field( $_POST['name'] ?? '' );
    $email   = sanitize_email( $_POST['email'] ?? '' );
    $phone   = sanitize_text_field( $_POST['phone'] ?? '' );
    $service = sanitize_text_field( $_POST['service'] ?? 'General Consultation' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( empty( $name ) || empty( $email ) || empty( $phone ) ) {
        wp_send_json_error( array( 'message' => 'Harap lengkapi semua kolom wajib.' ) );
    }

    // Prepare WhatsApp direct link for user convenience
    $wa_text = urlencode( "Halo SGD Construction,\nSaya {$name} ({$phone})\nEmail: {$email}\nKebutuhan Proyek: {$service}\nPesan: {$message}" );
    $wa_url  = "https://wa.me/" . SGD_PHONE_INTL . "?text=" . $wa_text;

    // Email notification
    $to = SGD_EMAIL;
    $subject = "Inquiry Baru Website: {$name} - {$service}";
    $body = "Nama: {$name}\nEmail: {$email}\nWhatsApp/Telp: {$phone}\nLayanan: {$service}\n\nPesan:\n{$message}\n\n---\nDikirim dari Form Kontak sgd-corp.com";
    $headers = array('Content-Type: text/plain; charset=UTF-8', "Reply-To: {$name} <{$email}>");

    wp_mail( $to, $subject, $body, $headers );

    wp_send_json_success( array(
        'message' => 'Terima kasih! Pesan Anda telah kami terima. Tim SGD Construction akan segera menghubungi Anda.',
        'waUrl'   => $wa_url
    ) );
}
add_action( 'wp_ajax_sgd_submit_contact', 'sgd_handle_contact_submission' );
add_action( 'wp_ajax_nopriv_sgd_submit_contact', 'sgd_handle_contact_submission' );

/**
 * Handle AJAX Company Profile Download & Lead Capture
 */
function sgd_handle_profile_download() {
    check_ajax_referer( 'sgd_contact_nonce', 'nonce' );

    $name    = sanitize_text_field( $_POST['name'] ?? '' );
    $company = sanitize_text_field( $_POST['company'] ?? '-' );
    $phone   = sanitize_text_field( $_POST['phone'] ?? '' );
    $email   = sanitize_email( $_POST['email'] ?? '' );
    $project = sanitize_text_field( $_POST['project_interest'] ?? 'Corporate Deck' );

    if ( empty( $name ) || empty( $phone ) ) {
        wp_send_json_error( array( 'message' => 'Harap lengkapi Nama dan Nomor WhatsApp Anda.' ) );
    }

    // Direct WhatsApp message with lead intent
    $wa_text = urlencode( "Halo SGD Construction,\nSaya {$name} dari {$company} ({$phone})\nEmail: {$email}\nBaru saja mengunduh Company Profile SGD (Minat: {$project}). Mohon dapat dihubungi untuk konsultasi lebih lanjut." );
    $wa_url  = "https://wa.me/" . SGD_PHONE_INTL . "?text=" . $wa_text;

    // Email notification to management
    $to = SGD_EMAIL;
    $subject = "Download Company Profile Baru: {$name} - {$company}";
    $body = "Download Company Profile:\nNama: {$name}\nPerusahaan: {$company}\nWhatsApp: {$phone}\nEmail: {$email}\nMinat: {$project}\n\n---\nLead dari Website sgd-corp.com";
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    wp_mail( $to, $subject, $body, $headers );

    // Profile Document URL (Can be real PDF or dynamic digital deck)
    $profile_url = SGD_THEME_URI . '/assets/images/about-company.jpg';

    wp_send_json_success( array(
        'message'     => 'Terima kasih, ' . esc_html( $name ) . '! Dokumen Company Profile SGD Construction siap diakses.',
        'downloadUrl' => $profile_url,
        'waUrl'       => $wa_url
    ) );
}
add_action( 'wp_ajax_sgd_download_profile', 'sgd_handle_profile_download' );
add_action( 'wp_ajax_nopriv_sgd_download_profile', 'sgd_handle_profile_download' );

/**
 * Helper: Generate WhatsApp consultation link
 */
function sgd_get_wa_link( $custom_text = '' ) {
    $default_text = "Halo SGD Construction, saya ingin berkonsultasi mengenai rencana proyek konstruksi/arsitektur.";
    $text = ! empty( $custom_text ) ? $custom_text : $default_text;
    return 'https://wa.me/' . SGD_PHONE_INTL . '?text=' . urlencode( $text );
}
