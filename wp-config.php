<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'czqg' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'R&cUj!D3q!>|]=i7o2o!q(^5Wdy`S_$WtJPF`VF#$8/-43J^zSlmE4cbi2qZM8l]' );
define( 'SECURE_AUTH_KEY',  '{=L-jo`q1f|&}C#3s$eYYTDJ?uvYA/@lf2lekC-R)xrSM%sRR!R<~9pSny %z:_U' );
define( 'LOGGED_IN_KEY',    ' NN16/E3f;]ShofpukYBHjJ4L(HooBbG64[D#HIE?vBY=p+u3y4+vEMob[uPdik:' );
define( 'NONCE_KEY',        'pp:!KB%e}{SL~$Q=Bi@p_n`74p72{-WO`~^T9EM>W#_%U7uXhlHSaKG;8%++lj1k' );
define( 'AUTH_SALT',        'H&3IF$J&h+=Y|O +Et:f|S>R8$tL%wPf&Z3U<7bj?(ihD0nrv=mF4SL/ES(2w&`+' );
define( 'SECURE_AUTH_SALT', '[?UT(IZYrSkdfIv!?Ob/srnIv&s1-]B10M:($-]1K{?4@=}~9Bvw:o)gXVT UQH&' );
define( 'LOGGED_IN_SALT',   'HFKaQ;zmz*UR@>#`3rAyjv+P**novf_.ihp;w|%3P6I|M*gRc[1.F sIR>}]nn>b' );
define( 'NONCE_SALT',       'F0S} $Z!7#!_MI!5?Dpz6gi1PYD)VTml3PCqZf_+egWJ^b|Pu#c>K3?%H}0@*QqD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'czqg_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
