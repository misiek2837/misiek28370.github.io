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
define( 'DB_NAME', 'wpgalazka' );

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
define( 'AUTH_KEY',         ';9I:g`Hk Hl>Z0IQ$QCHk]%r4n~(;Kgj~#net|&S!j{a$x?gKL$PM=U)}0~6.S`9' );
define( 'SECURE_AUTH_KEY',  '`]j-Yh%Ly4o5Sews!@_b~zw/_n!A*R=9A]d-O81$cq;VzPL83u*n7shA&|Y~WRig' );
define( 'LOGGED_IN_KEY',    '~X-EaYn(&:gK1)#dY6X):mPBD`e~`K<{h76!$3*;LI=5]OB&5j~uqx&orH?QQfLU' );
define( 'NONCE_KEY',        'b<<9z=|CDB_q6%kY8?O~wN)>kRH*:te 3g=e$]vEH&F*pKzE ry2;:;vrA;3L<WQ' );
define( 'AUTH_SALT',        'C)Fi%T02;y@U.fCF|!X_R-@jboevTQ:N{Nz@aM8Z>p-D49;=AzQ~qcrj[/@!sE!H' );
define( 'SECURE_AUTH_SALT', '/_/hk(]F4j)VF!eSa!:i|kw*|z>`E|Y`h;Jc^g*xR1.G9Hq >AS6kYXtstXt!oRQ' );
define( 'LOGGED_IN_SALT',   '.[/`J`dl&K9sod$]cSm-L8RLe6H+l2U=wDJm<}q.A!##=HUpx*8.~HBoac)>ASLc' );
define( 'NONCE_SALT',       '{:vxl~M^kW),*ikS~K6;iL.kxWD5c$x4/Tt>9<(zf*nW#h-]oCerh~!n(M7-RkkG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
