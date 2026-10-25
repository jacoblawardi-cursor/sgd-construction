<?php
/**
 * The base configuration for WordPress
 * Configured for SGD Construction
 */

// ** Database settings - You can get this info from your web host ** //
define( 'DB_NAME', 'sgd_construction' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/** Authentication unique keys and salts. */
define( 'AUTH_KEY',         '1a85e4c0d9518a42f6e9b8f2d5a3c1e7a4f9b2d8c3e6a1f5' );
define( 'SECURE_AUTH_KEY',  '8e9a2b5d4c1f6a3e7b9c2d5a8f1e4a7b3c6e9d2f5a8b1c4e' );
define( 'LOGGED_IN_KEY',    'f4a8b2d6c1e9a3f7b5c8d2e6a9f3b1c7e4a8d2f6c9e1a5b8' );
define( 'NONCE_KEY',        '3c7e9a2f5b8d1c4e6a9f2b5d8c1e4a7b3f6a9c2d5e8b1f4a' );
define( 'AUTH_SALT',        'd5a8f1e4a7b3c6e9d2f5a8b1c4e7a9b2c5d8e1f4a7b3c6e9' );
define( 'SECURE_AUTH_SALT', '6a9f2b5d8c1e4a7b3f6a9c2d5e8b1f4a7d2e5b8c1f4a9d3e' );
define( 'LOGGED_IN_SALT',   'b1c4e7a9b2c5d8e1f4a7b3c6e9d2f5a8f6a9c2d5e8b1f4a7' );
define( 'NONCE_SALT',       'e7a4f9b2d8c3e6a1f5a85e4c0d9518a42f6e9b8f2d5a3c1e' );

/** WordPress database table prefix. */
$table_prefix = 'wp_';

/** For developers: WordPress debugging mode. */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
