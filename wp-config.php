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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         'IDF7f}L*dLE5K.e}E$_[=DJ`gtGXFYZSHvy]J3iZ.EJ3<I4%b67p@HY;nl|hEOK0' );
define( 'SECURE_AUTH_KEY',  '|D}-0h_f_!tSC?)Jb]^2fm8IJG1h0NJrhD|O&~4#{Bgi[B5A:VK#Z<lvV sLBCAX' );
define( 'LOGGED_IN_KEY',    'uiXCt:>_:$9r;cVe;jIjtbS fY?qX%tF?M;j;>NrA+JW/{+==LS(np.h3UBK?VXT' );
define( 'NONCE_KEY',        '@cYn5rK%0YfzV0]8$yXFx.]PaJhlDFm$-7d%kg^r_[K-`p>*xK*?z.):`rc7&SO8' );
define( 'AUTH_SALT',        'pH<6%VM&^aoXqFQf1.{jus+E+740y1)9=9<5frWOf/On^,|/(o+{Q9lJ2cm#YeN&' );
define( 'SECURE_AUTH_SALT', '&rC87X-hg]Gs-1uz)ZgGw7}2&Fd%`<_ZoGJ^?6D2;`4kwh^j-Mf8+@U.4D`?U4xG' );
define( 'LOGGED_IN_SALT',   'V,O,c1y`YYLeEvX@=(y@[2:6O9f|D}T]e*$dT-CTPq+UXcl6W6UT1d%<H;VZq[<Y' );
define( 'NONCE_SALT',       '`J;@0bPLzF%vUS*`yF8U#{%@9RkNhO.=>?hhmckjL{4Nq8F=)1W8gnW% W+Kl[TJ' );

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
