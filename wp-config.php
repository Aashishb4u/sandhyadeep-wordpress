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
define( 'DB_NAME', 'sandhyadeep_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '01Dec@1993' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         ':(!ziwRpaPrUz<.^%qcY<zTmEZ#~xPPMea$A1s4mXC0;;5q@,USK9#N$tX5:#Ku0' );
define( 'SECURE_AUTH_KEY',  '`Jz4Fn:VF|)_5SZP9[8xS$t,mK:TzI6D<NG78kldt?X1|4iW`|P`Q;{VFZfe^Wj/' );
define( 'LOGGED_IN_KEY',    ']*)Yw5DOow=]{=BAbW.*b[>y,(!HztqnEUz~y>FRc=(dd%ndnMsH|ZoqKrtqvS &' );
define( 'NONCE_KEY',        'F*yy89).tL-pslc4T)!oX<}M@KI-SUe4TAqxvHT<}MVqKgN{u)MH%j~:JB7q/xZR' );
define( 'AUTH_SALT',        'z.fPOvOFN WtL.ZtbU-JCp9zoR7@O/hP,S9;I~di%t2<5+%iw[GRv MhT7bka3o[' );
define( 'SECURE_AUTH_SALT', '_mQH(P}`JUzp5plnqr+r1oVGlGZ.Y`Li[s7^(^{#HnS_Pi,j]RuBDSWYt]t&BPZy' );
define( 'LOGGED_IN_SALT',   '@|aY6{qc?2CM@]-HnzgD|g:Ti-iq*CG) kZuTz~PcSdaEm{q{yC=l2(J`C)OCHPK' );
define( 'NONCE_SALT',       '`ZG2L(s6S;AV@]]QG&e!Mlz)g,{?.,6%2C}!9Fx0.W!&>Y32N:H_kiX1=6f*@^aD' );

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