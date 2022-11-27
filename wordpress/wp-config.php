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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'h{xCMV=9[/)ds>OMEABjbQTv4O*&8:Htz+*7KERoyi#d+{[1[@?hzxQ?e$!a=+8X');
define('SECURE_AUTH_KEY',  '#H-sK{ME]~hB+k{x=1IU1|Agr+u{l/Zoq62:M(>aEmFGXi^*>mvC/+gu/Nj+{Ht;');
define('LOGGED_IN_KEY',    'Xav7-*hlSjs*|}yQ;58H h:+/et1Gs=B/;_)wEnXyytAG`[9wC(r`=_6TZsY<x3?');
define('NONCE_KEY',        '`xATT<n$x{6{FpSWWWVtW?Ft4|qC1%D]YXh|^$$Wb=: nCp:+4=Q+vgl,&{N{Xu^');
define('AUTH_SALT',        '[|;qug9l5]s2+4A;L!NhT.XLLy!Ma7|-d0HGCd=h*ZAc==60/H[9K@fyrhop8EC9');
define('SECURE_AUTH_SALT', 'Am4eMplQY6@6:nR,o$3=MWA<2@@<Af+9SF7uUoi~_>~Lz-8G`<^WZw1ecR|nP:_B');
define('LOGGED_IN_SALT',   'q>CtaA7y2yvrI Y!da}z.X *-2[FY6aAdqAE12[RE~7vyM1m^l-r,y)6!v^?YGmq');
define('NONCE_SALT',       'S,d3~ir6T$M|b3;,f^i_=wf#,Aa$r[Qt,5<lrOA`S;N9 4IpcE-R1ckDG_u$|.+B');

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
