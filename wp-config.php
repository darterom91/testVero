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
define( 'DB_NAME', 'testVero' );

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
define( 'AUTH_KEY',         'Ycrn!k8[(x)W%Y_rP+!h_/4/tLj j&6bbty|l7JU+c<DA~>m.mZ4H&N?!it@e$LE' );
define( 'SECURE_AUTH_KEY',  'nvoR@xI4}ff-p`NgbB`4U{oQBgnAs`SnrTJEq$OGiA+>BYTSbbB[qeg&9?-tM!MJ' );
define( 'LOGGED_IN_KEY',    'l1J6r3.[,8-Ke[[U+6%+7=J*qRFvxHC. P6P*?.Ml7Kx;7YIwgM-!VDQ/yCDhK&A' );
define( 'NONCE_KEY',        'Ocr[u<G/17p{gKHC&NwAOcR~cS~Qn1>ly6 pJV(ODlEfqCVyH#{o?$2;iCiAT8$ ' );
define( 'AUTH_SALT',        ';6nj1<zYEt|6+:/I%G:[ZT`}db*JZF:|@flpgO?!dGvi%o5Gq TWlni,b0lk]Wdw' );
define( 'SECURE_AUTH_SALT', 'Sq4~cL5iQwr7%{Dh.K@%A;[,.(u8T+|O&Mv}H;ah/g]iZUMhUEh+aC<3dLIhq>$;' );
define( 'LOGGED_IN_SALT',   '!HzqtDXg89g,tZWZx,AXYjgli=SY?|/S$Xn4y]-sS>c4*@y-}R>PU2@_rl-dN7as' );
define( 'NONCE_SALT',       'cwu(XhJe;RB@lf!N_H_%gkb0)4&Q.ohzhJ=QtK7;5qh+b^=,3=R/uX5x(%|J0A &' );

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
