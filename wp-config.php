<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dermad87_wp497' );

/** Database username */
define( 'DB_USER', 'dermad87_wp497' );

/** Database password */
define( 'DB_PASSWORD', '-9yKUpS@92' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bpancqt8fgjissh7bfeqf9sblwifuj0lkbwjrxts71ftsr830ptoq7jrpcp8vfn9' );
define( 'SECURE_AUTH_KEY',  'tu1o9ysuwfiq6oo9i7nfudezbaxzc0aq0mlhpazpinb5d0iaqmxaw7grtjdjlq41' );
define( 'LOGGED_IN_KEY',    'zbez0vx6pzi9siuxdgmaqkibncg0v7e3l4nojanxo7h64wefg6sasmcqvbf34jzd' );
define( 'NONCE_KEY',        'u6n9ha2aqmjhii17mda6p0z32nkrg2baprgsedgdqpfmkm5rculeuvpmutaai6ak' );
define( 'AUTH_SALT',        '6jdidkdxzntpc6iezbixgrtqkm9qnwizrhsanvoiw4pfiyurcuo0pbo7dyaeavlo' );
define( 'SECURE_AUTH_SALT', 'mv816gvv12fhqm0ovoujebnwqbo1k55locshxor3kpgsxnr5f4up8njhcrkhogpr' );
define( 'LOGGED_IN_SALT',   'fnklmd2oihoatdk0dv5d6djmakimco8xkyxxfu6qfvidj2xkpuwjgfwk1e7wqs7s' );
define( 'NONCE_SALT',       'uptsazyohesmsorevzlkpbrrj91jbu640cg1ixm2cebzvz2lfmbuxcfz3ac27mck' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuu_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
