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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\4SBottom\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', '4SBottom' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_POST_REVISIONS', false );

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
define( 'AUTH_KEY',         'zr;Tl;5~Ie8YWBb]dSs}X7X#|zPuPi)Kr~N]2*;pFdomaX}0<c0!F+}FLt=hE>N@' );
define( 'SECURE_AUTH_KEY',  '3)h5B5LSNh>,xIhjV0=Y#TQatrEm8)W=^DWYJK0!&]>+39vd!p+EqbD2}DZA?UD;' );
define( 'LOGGED_IN_KEY',    'ZQFV1=tQV6*`Jez_FaA->F;-SYyc^vs7*_E:$MC;l@kSm8..;&giNzimh@iNDM2p' );
define( 'NONCE_KEY',        '8yVP-L>Hz$B!j@WixRfuf@PZeycJPwE/u6v_bq=1lNE*~lJ$9X8Si 8m:t|qdq,R' );
define( 'AUTH_SALT',        'IO*`kKnJnif:9<JgM_6v}E9CQ!YL`= oxo/&.eF@D2*gOPoehaWS}}2+e)v??)Kj' );
define( 'SECURE_AUTH_SALT', 'I`i[PW_)rQ#+sN2 utiAhGh~6xl5iX[Vvx1%8@:3C!UgP}.fxf1JK~#trK8iE7Pw' );
define( 'LOGGED_IN_SALT',   '}*aU!.~b$0}t9>_wd3!t|h4~xpqyqZBpCLFc$ {OSQG+(?50Q){w&-GS3;;AP;>A' );
define( 'NONCE_SALT',       ']#s&hRHR7C>OvBFnd-ix8&@n?l?]u(S#9Uxy_i06Z $:+b0,:W|.Vd*fQim[ y3S' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
