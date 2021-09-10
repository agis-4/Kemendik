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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_kemendik' );

/** MySQL database username */
define( 'DB_USER', 'admin_kemendikbud' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin_kemendikbud' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'SQt*Sx`|`([#W~_{gh*3$4+t0sSANq:q/7~ {)tYl%G4Z_Wp|Eec2f7HUfGc*y{p' );
define( 'SECURE_AUTH_KEY',  '>/9y  hVtNmizJCN.{=?eo_Sqg}Ah,FR@(427l=WGQ}j>8{ZG@?$8br}V2L!pG!U' );
define( 'LOGGED_IN_KEY',    '3wzTvs3lI/OF>#|j;J`N[l<?0|5bewK8aJu8)Ya0bFd(rRDbUaUSigW26vtcyodb' );
define( 'NONCE_KEY',        'e*Z}ClJvRRb+gdt$*E3,`_u3Dfvv,?J]~hzjNNYJ6cF%n3W%7HKe6PE2hyZ4.j,1' );
define( 'AUTH_SALT',        'vdv]|Z5s7-uJ-f@~SUTtNH0b$#Tr${>XYYx|ZsJ#GX}i21.P 2|thyUgu`WnY)WL' );
define( 'SECURE_AUTH_SALT', '(mk7CVu)d!GM6qBoDuqVc)d{x1!%slTiy/|u,z`R=O0x(t.fy+O%0CNVft%*bbxl' );
define( 'LOGGED_IN_SALT',   '4@@0h8xa[D[H&7MD|Ki>u4]m]hbggQ;ovG_[UMMfpX/%=TC_]F;I(xV7F)=8mW8.' );
define( 'NONCE_SALT',       'X;hx[(-_]h=TpVz/qL#|,5T``JR;|$!{MA<W0V?4|^.f5o8yF(A7>rFsUOBTCY/C' );

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
