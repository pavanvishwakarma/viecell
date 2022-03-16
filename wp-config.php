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
define( 'DB_NAME', 'viecell' );

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
define( 'AUTH_KEY',         'h*?=2myv}SB.UfN2Glq>Gge^ClhnXQkE@u7Z%fV]xFfzz+-8m0t0fS_F.xH}wn/#' );
define( 'SECURE_AUTH_KEY',  'ZsS(hL_5hLu7Y;2p0kKQTB8kBE+Nx<,,_2Uil/F|mck<#J+QA^6lFzs{Z(CwV sU' );
define( 'LOGGED_IN_KEY',    '8I1w#47&:hU%,!]3{MAM,m<#d_Wy28:JP,wB^ezG=BH`%`EiU@%W!y)ZAdvZ<(nM' );
define( 'NONCE_KEY',        ')pDNTBXiKm*H,-4->/ey# ^aglw7C,@hp4k88Jb_F!mgW)m<}^Qv$#N187EUp?Dj' );
define( 'AUTH_SALT',        'cSp8MhB?S:$]<l_a*odOAjRA4b:OWL/x}:|3Y56R#WY&Rckq:M2Ucag(-5|2G*AB' );
define( 'SECURE_AUTH_SALT', '1}kY$`)17#g2dyKI#<5bV8 a6Yw>%DxZ,<cH%UZ1]2 a,Ekjv 4Q,a8m6Ed_DD~@' );
define( 'LOGGED_IN_SALT',   'L.%c<NoX9.JR6zfd1nc9=*F}F99G!XPGem7&A3(eQ8yG1t3u#K 09CK]Gij<2<sS' );
define( 'NONCE_SALT',       'U*Ep/DtO,ZxR_En|CTZN#&`~DjS_0PqE$<>w?QyD+,?DA?U/iOVY%[+6,4xFi<6*' );

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
