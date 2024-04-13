<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password123' );

/** Database hostname */
define( 'DB_HOST', '45.76.159.227' );

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
define( 'AUTH_KEY',         '$WM(F&%BLSuY8=WG^c4T/ZpVSI?($X)V!4@9X4*[D|msXIS?!O5DmQT^3.;34iU_' );
define( 'SECURE_AUTH_KEY',  'i)qE=.b$MKi4I{qoyVrSRwm#Zg,mt4NL^n@6)CFLFPo,/OOk-z/3}HBxy^F&WYes' );
define( 'LOGGED_IN_KEY',    '|N3k`sIiGF6VGW*UHbNcOyN{L>!yU0o-~fKZRgw5S<X~4xRl_Qv]1%k;3xY>YyW/' );
define( 'NONCE_KEY',        'fpi},Ih22`SjEe]=n)sDXt`M:jgEU@$tCAVr?^~l8+RQ.>T5l<SvNKgTsRJeZY%V' );
define( 'AUTH_SALT',        '84tRw175q}h[{olvs%pE?6|32S 4M:%HklA%yYG)ZKBb{PbvBRcai|,d{Z-L&(J5' );
define( 'SECURE_AUTH_SALT', 'HOxLIOx<aYAI++)H1-hcKE~)k}I]ZG2s_7+WRzV}>GJ,lml}6|}&Wl4&xLS~-XY]' );
define( 'LOGGED_IN_SALT',   'e{H6XV0:HLf6r@Lp<@6ltKl/sPrCu{9w86lno:ekoyV uDX/|bt6:XnQ?8`r8v.s' );
define( 'NONCE_SALT',       ':#I9x*:McGr/6yls{3|u?o_--vn_4X9K[r1G_Vlb+c-UwUf_Y/K7uopUz!fdDp;}' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
