<?php
/**
 * SGD Construction - Portfolio Custom Post Type & Taxonomy
 *
 * @package SGD_Construction
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Custom Post Type: Portfolio & Taxonomy: portfolio_category
 */
function sgd_register_portfolio_post_type() {
    // 1. Taxonomy: portfolio_category
    $tax_labels = array(
        'name'              => __( 'Kategori Proyek', 'sgd-construction' ),
        'singular_name'     => __( 'Kategori Proyek', 'sgd-construction' ),
        'search_items'      => __( 'Cari Kategori', 'sgd-construction' ),
        'all_items'         => __( 'Semua Kategori', 'sgd-construction' ),
        'parent_item'       => __( 'Induk Kategori', 'sgd-construction' ),
        'parent_item_colon' => __( 'Induk Kategori:', 'sgd-construction' ),
        'edit_item'         => __( 'Edit Kategori', 'sgd-construction' ),
        'update_item'       => __( 'Perbarui Kategori', 'sgd-construction' ),
        'add_new_item'      => __( 'Tambah Kategori Baru', 'sgd-construction' ),
        'new_item_name'     => __( 'Nama Kategori Baru', 'sgd-construction' ),
        'menu_name'         => __( 'Kategori Proyek', 'sgd-construction' ),
    );

    $tax_args = array(
        'hierarchical'      => true,
        'labels'            => $tax_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'portfolio-category', 'with_front' => false ),
    );

    register_taxonomy( 'portfolio_category', array( 'portfolio' ), $tax_args );

    // 2. Custom Post Type: portfolio
    $cpt_labels = array(
        'name'                  => __( 'Portofolio Proyek', 'sgd-construction' ),
        'singular_name'         => __( 'Proyek Portofolio', 'sgd-construction' ),
        'menu_name'             => __( 'Portofolio Proyek', 'sgd-construction' ),
        'name_admin_bar'        => __( 'Proyek Portofolio', 'sgd-construction' ),
        'archives'              => __( 'Arsip Proyek', 'sgd-construction' ),
        'attributes'            => __( 'Atribut Proyek', 'sgd-construction' ),
        'all_items'             => __( 'Semua Proyek', 'sgd-construction' ),
        'add_new_item'          => __( 'Tambah Proyek Baru', 'sgd-construction' ),
        'add_new'               => __( 'Tambah Proyek Baru', 'sgd-construction' ),
        'new_item'              => __( 'Proyek Baru', 'sgd-construction' ),
        'edit_item'             => __( 'Edit Proyek', 'sgd-construction' ),
        'update_item'           => __( 'Perbarui Proyek', 'sgd-construction' ),
        'view_item'             => __( 'Lihat Proyek', 'sgd-construction' ),
        'view_items'            => __( 'Lihat Semua Proyek', 'sgd-construction' ),
        'search_items'          => __( 'Cari Proyek', 'sgd-construction' ),
        'not_found'             => __( 'Belum ada proyek ditemukan', 'sgd-construction' ),
        'not_found_in_trash'    => __( 'Tidak ada proyek di kotak sampah', 'sgd-construction' ),
        'featured_image'        => __( 'Foto Utama Proyek', 'sgd-construction' ),
        'set_featured_image'    => __( 'Tetapkan Foto Utama Proyek', 'sgd-construction' ),
        'remove_featured_image' => __( 'Hapus Foto Utama Proyek', 'sgd-construction' ),
        'use_featured_image'    => __( 'Gunakan Sebagai Foto Utama', 'sgd-construction' ),
    );

    $cpt_args = array(
        'label'                 => __( 'Proyek Portofolio', 'sgd-construction' ),
        'description'           => __( 'Portofolio proyek konstruksi, arsitektur, dan interior SGD Construction', 'sgd-construction' ),
        'labels'                => $cpt_labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'taxonomies'            => array( 'portfolio_category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'portfolio',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array( 'slug' => 'project', 'with_front' => false ),
    );

    register_post_type( 'portfolio', $cpt_args );
}
add_action( 'init', 'sgd_register_portfolio_post_type', 0 );

/**
 * Register Meta Box for Portfolio Custom Fields
 */
function sgd_add_portfolio_meta_boxes() {
    add_meta_box(
        'sgd_portfolio_specs_box',
        __( 'Spesifikasi & Galeri Proyek (SGD Construction)', 'sgd-construction' ),
        'sgd_render_portfolio_meta_box',
        'portfolio',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'sgd_add_portfolio_meta_boxes' );

/**
 * Render Meta Box Fields in Admin Post Editor
 */
function sgd_render_portfolio_meta_box( $post ) {
    wp_nonce_field( 'sgd_portfolio_meta_box', 'sgd_portfolio_meta_nonce' );

    $location   = get_post_meta( $post->ID, '_sgd_project_location', true );
    $area       = get_post_meta( $post->ID, '_sgd_project_area', true );
    $duration   = get_post_meta( $post->ID, '_sgd_project_duration', true );
    $year       = get_post_meta( $post->ID, '_sgd_project_year', true );
    $status     = get_post_meta( $post->ID, '_sgd_project_status', true ) ?: 'Selesai & Diserahterimakan';
    $client     = get_post_meta( $post->ID, '_sgd_project_client', true );
    $scope      = get_post_meta( $post->ID, '_sgd_project_scope', true );
    $challenge  = get_post_meta( $post->ID, '_sgd_project_challenge', true );
    $solution   = get_post_meta( $post->ID, '_sgd_project_solution', true );
    $result     = get_post_meta( $post->ID, '_sgd_project_result', true );
    $highlights = get_post_meta( $post->ID, '_sgd_project_highlights', true );
    $gallery    = get_post_meta( $post->ID, '_sgd_project_gallery', true );
    ?>
    <style>
        .sgd-meta-table { width: 100%; border-collapse: collapse; }
        .sgd-meta-table th { text-align: left; padding: 10px 12px; width: 220px; vertical-align: top; font-weight: 600; color: #1e293b; }
        .sgd-meta-table td { padding: 10px 12px; }
        .sgd-meta-table input[type="text"], .sgd-meta-table textarea { width: 100%; max-width: 650px; }
        .sgd-meta-desc { font-size: 12px; color: #64748b; margin-top: 4px; display: block; }
    </style>
    <table class="sgd-meta-table">
        <tr>
            <th><label for="sgd_project_location">Lokasi Proyek:</label></th>
            <td>
                <input type="text" id="sgd_project_location" name="sgd_project_location" value="<?php echo esc_attr( $location ); ?>" placeholder="Contoh: Jakarta Pusat / Sentul Selatan, Bogor" class="regular-text">
                <span class="sgd-meta-desc">Kota atau wilayah pengerjaan proyek.</span>
            </td>
        </tr>
        <tr>
            <th><label for="sgd_project_area">Luas Bangunan / Area:</label></th>
            <td>
                <input type="text" id="sgd_project_area" name="sgd_project_area" value="<?php echo esc_attr( $area ); ?>" placeholder="Contoh: 12.500 m² atau 850 m²" class="regular-text">
                <span class="sgd-meta-desc">Total luas lantai (GFA) atau luas area kerja.</span>
            </td>
        </tr>
        <tr>
            <th><label for="sgd_project_duration">Durasi Pengerjaan:</label></th>
            <td>
                <input type="text" id="sgd_project_duration" name="sgd_project_duration" value="<?php echo esc_attr( $duration ); ?>" placeholder="Contoh: 18 Bulan / 9 Bulan" class="regular-text">
                <span class="sgd-meta-desc">Waktu pelaksanaan konstruksi dari mulai hingga serah terima.</span>
            </td>
        </tr>
        <tr>
            <th><label for="sgd_project_year">Tahun Selesai:</label></th>
            <td>
                <input type="text" id="sgd_project_year" name="sgd_project_year" value="<?php echo esc_attr( $year ); ?>" placeholder="Contoh: 2025" class="regular-text">
                <span class="sgd-meta-desc">Tahun penyelesaian proyek.</span>
            </td>
        </tr>
        <tr>
            <th><label for="sgd_project_status">Status Proyek:</label></th>
            <td>
                <input type="text" id="sgd_project_status" name="sgd_project_status" value="<?php echo esc_attr( $status ); ?>" placeholder="Contoh: Selesai & Diserahterimakan" class="regular-text">
                <span class="sgd-meta-desc">Status pengerjaan (misal: Selesai & Diserahterimakan, Sedang Berlangsung).</span>
            </td>
        </tr>
        <tr>
            <th><label for="sgd_project_client">Klien / Pemilik Proyek:</label></th>
            <td>
                <input type="text" id="sgd_project_client" name="sgd_project_client" value="<?php echo esc_attr( $client ); ?>" placeholder="Contoh: PT Graha Perkasa Land / Private Owner" class="regular-text">
                <span class="sgd-meta-desc">Nama perusahaan pemberi kerja atau jenis klien.</span>
            </td>
        </tr>
        <tr>
            <th><label for="sgd_project_scope">Lingkup Pekerjaan (Scope):</label></th>
            <td>
                <input type="text" id="sgd_project_scope" name="sgd_project_scope" value="<?php echo esc_attr( $scope ); ?>" placeholder="Contoh: Struktur Beton K-500, Fasad Curtain Wall Low-E, Sistem MEP" class="regular-text">
                <span class="sgd-meta-desc">Rangkuman spesifikasi teknis dan pekerjaan yang ditangani.</span>
            </td>
        </tr>
        <tr>
            <th><label for="sgd_project_challenge">Tantangan Proyek (Engineering Challenge):</label></th>
            <td>
                <textarea id="sgd_project_challenge" name="sgd_project_challenge" rows="3" class="large-text" placeholder="Kendala teknis, kondisi tanah, akses lokasi padat, atau timeline ketat yang dihadapi..."><?php echo esc_textarea( $challenge ); ?></textarea>
                <span class="sgd-meta-desc">Tantangan nyata sebelum atau saat pelaksanaan proyek.</span>
            </td>
        </tr>
        <tr>
            <th><label for="sgd_project_solution">Solusi & Rekayasa Teknik SGD:</label></th>
            <td>
                <textarea id="sgd_project_solution" name="sgd_project_solution" rows="3" class="large-text" placeholder="Metode kerja khusus, inovasi material, rekayasa nilai (value engineering), dan solusi presisi tim SGD..."><?php echo esc_textarea( $solution ); ?></textarea>
                <span class="sgd-meta-desc">Bagaimana tim engineering SGD memecahkan tantangan tersebut.</span>
            </td>
        </tr>
        <tr>
            <th><label for="sgd_project_result">Hasil & Metrik Capaian (Delivered Result):</label></th>
            <td>
                <textarea id="sgd_project_result" name="sgd_project_result" rows="2" class="large-text" placeholder="Diserahterimakan 2 minggu lebih cepat, Zero Lost Time Accident, efisiensi energi 28%..."><?php echo esc_textarea( $result ); ?></textarea>
                <span class="sgd-meta-desc">Dampak nyata dan hasil terukur yang dinikmati klien.</span>
            </td>
        </tr>
        <tr>
            <th><label for="sgd_project_highlights">Capaian & Rekayasa Teknik:</label></th>
            <td>
                <textarea id="sgd_project_highlights" name="sgd_project_highlights" rows="5" class="large-text" placeholder="Tuliskan 1 poin per baris:&#10;Pondasi Bored Pile kedalaman 36 meter dengan tes PDA lolos.&#10;Fasad hemat energi double-glazed low-e glass mereduksi radiasi panas.&#10;Zero-accident record sepanjang masa pengerjaan dengan protokol SMK3."><?php echo esc_textarea( $highlights ); ?></textarea>
                <span class="sgd-meta-desc">Poin-poin keunggulan teknik atau capaian proyek. Masukkan <strong>1 poin per baris</strong>.</span>
            </td>
        </tr>
        <tr>
            <th><label for="sgd_project_gallery">Foto Galeri Tambahan:</label></th>
            <td>
                <textarea id="sgd_project_gallery" name="sgd_project_gallery" rows="4" class="large-text" placeholder="Masukkan URL foto galeri tambahan, 1 URL per baris:&#10;http://localhost/sgd-construction/wp-content/uploads/2026/10/foto-2.jpg&#10;http://localhost/sgd-construction/wp-content/uploads/2026/10/foto-3.jpg"><?php echo esc_textarea( $gallery ); ?></textarea>
                <span class="sgd-meta-desc">URL gambar tambahan untuk galeri pop-up (di luar Featured Image). Masukkan <strong>1 URL per baris</strong>.</span>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Save Portfolio Meta Box Values
 */
function sgd_save_portfolio_meta_box( $post_id ) {
    if ( ! isset( $_POST['sgd_portfolio_meta_nonce'] ) || ! wp_verify_nonce( $_POST['sgd_portfolio_meta_nonce'], 'sgd_portfolio_meta_box' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $fields = array(
        'sgd_project_location'   => '_sgd_project_location',
        'sgd_project_area'       => '_sgd_project_area',
        'sgd_project_duration'   => '_sgd_project_duration',
        'sgd_project_year'       => '_sgd_project_year',
        'sgd_project_status'     => '_sgd_project_status',
        'sgd_project_client'     => '_sgd_project_client',
        'sgd_project_scope'      => '_sgd_project_scope',
        'sgd_project_challenge'  => '_sgd_project_challenge',
        'sgd_project_solution'   => '_sgd_project_solution',
        'sgd_project_result'     => '_sgd_project_result',
        'sgd_project_highlights' => '_sgd_project_highlights',
        'sgd_project_gallery'    => '_sgd_project_gallery',
    );

    foreach ( $fields as $input_key => $meta_key ) {
        if ( isset( $_POST[ $input_key ] ) ) {
            if ( in_array( $input_key, array( 'sgd_project_highlights', 'sgd_project_gallery', 'sgd_project_scope', 'sgd_project_challenge', 'sgd_project_solution', 'sgd_project_result' ), true ) ) {
                update_post_meta( $post_id, $meta_key, sanitize_textarea_field( $_POST[ $input_key ] ) );
            } else {
                update_post_meta( $post_id, $meta_key, sanitize_text_field( $_POST[ $input_key ] ) );
            }
        }
    }
}
add_action( 'save_post_portfolio', 'sgd_save_portfolio_meta_box' );

/**
 * Add Custom Columns to Portfolio Admin List Table
 */
function sgd_portfolio_custom_columns( $columns ) {
    $new_cols = array();
    $new_cols['cb']        = $columns['cb'];
    $new_cols['thumbnail'] = __( 'Foto', 'sgd-construction' );
    $new_cols['title']     = $columns['title'];
    $new_cols['taxonomy-portfolio_category'] = __( 'Kategori', 'sgd-construction' );
    $new_cols['location']  = __( 'Lokasi', 'sgd-construction' );
    $new_cols['area']      = __( 'Luas', 'sgd-construction' );
    $new_cols['year']      = __( 'Tahun', 'sgd-construction' );
    $new_cols['date']      = $columns['date'];
    return $new_cols;
}
add_filter( 'manage_portfolio_posts_columns', 'sgd_portfolio_custom_columns' );

function sgd_portfolio_custom_column_data( $column, $post_id ) {
    switch ( $column ) {
        case 'thumbnail':
            if ( has_post_thumbnail( $post_id ) ) {
                echo get_the_post_thumbnail( $post_id, array( 55, 45 ), array( 'style' => 'border-radius: 4px; object-fit: cover;' ) );
            } else {
                echo '<span style="color:#94a3b8; font-size:11px;">(Tidak ada foto)</span>';
            }
            break;
        case 'location':
            echo esc_html( get_post_meta( $post_id, '_sgd_project_location', true ) ?: '-' );
            break;
        case 'area':
            echo esc_html( get_post_meta( $post_id, '_sgd_project_area', true ) ?: '-' );
            break;
        case 'year':
            echo esc_html( get_post_meta( $post_id, '_sgd_project_year', true ) ?: '-' );
            break;
    }
}
add_action( 'manage_portfolio_posts_custom_column', 'sgd_portfolio_custom_column_data', 10, 2 );
