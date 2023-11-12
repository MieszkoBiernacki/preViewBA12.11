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
define( 'DB_NAME', 'baza12.11v2' );

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
define( 'AUTH_KEY',         '@}DC~?u01GmVw$MAy o RTENtJXy2?>cI>ok00WKi54^Z7e/}=J$GPG2a]!)moA&' );
define( 'SECURE_AUTH_KEY',  '=@))#OVe$)/QK50f1#9Z7gvjaF|?WjlMc}MN$Z4v[Gk_%|UV0FbE;xl?y`KnVdR`' );
define( 'LOGGED_IN_KEY',    'KK^arn{3#u? 2l?>VF@/TE[v7y(680-w`Gxnx%uNe$ipL``s~Ti%guF=_@uubS4e' );
define( 'NONCE_KEY',        'i+Wu8b=+?98~IACE8 (KqUc9^4H$-TDa@/U-(.f+{<tl 6#fj`*XU<a;+YPQa0w{' );
define( 'AUTH_SALT',        'K:z#[SPI|VI:f1{Aau4=BRvG[;]g21!@i72N=Qj,Cu)KLX;Xb-=kNi+]w;Q|S-ov' );
define( 'SECURE_AUTH_SALT', '}Wzx`AJ!dPulJ}q?1RH^K#U=%-A|^-((X3F?>(3t0.S*2Jp%mslE5+&dfjq()G!1' );
define( 'LOGGED_IN_SALT',   'VCL~<CiO;@UFfjLSVPp6!Ysz?q,cS$Cr NR-w!FXqG(c&.#U!r`|TJn{x_b[6y1U' );
define( 'NONCE_SALT',       'BbZ55<r}G9/IX:jj&l]8ij!]P<4v/5<M.?b^GTNLf@Tnipx;K{hR?8pP>BY>g_!M' );

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
