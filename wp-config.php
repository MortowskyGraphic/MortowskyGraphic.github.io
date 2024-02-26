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
define( 'DB_NAME', 'mortowskygraphic_db' );

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
define( 'AUTH_KEY',         'A3}e{$ig+Pp[:]&XLf7mOYd=Qt,G^*mSFQ,&t.V*Nb`d EvXAFGeMtR?}iS&n+VX' );
define( 'SECURE_AUTH_KEY',  'AahqVS=4h:CL}DIIq%<|Ne%-r[r+}q({&9BqBl9uWGf_-z(~f=Vi[0KLjb5(Y9Dm' );
define( 'LOGGED_IN_KEY',    '#|3Qf$MVABHB!=`.=C> 3HNM-=~&P9V)Kxzn8:cbM8OfPlat=lGLd^)c/XHP2vnO' );
define( 'NONCE_KEY',        'oeGe7C|L0q%: mv<CuOr}}?/2d8R-f%~&}<zVwTc33WW>l5y#VqS;}](i`|Qu}eq' );
define( 'AUTH_SALT',        ';k_$!OI(=zks5lx}v>%SKTD50B`CI7cj}5,*/&&Qc^I-T,- mZni5ZaD^Z{z3FB^' );
define( 'SECURE_AUTH_SALT', 'm%lu3pI`m~e{Ul-NP[pWQ_ds#;-bCUx.6VBV wfQMZ~ Nf$gS6j_noLqSDSrZ?t/' );
define( 'LOGGED_IN_SALT',   '0Q3b@[Fq@.q(3Pa_P!b->KVT~j[K(O-oSTeA{jr*8oVGh.2l<%~o_^cAe=U$Mo2z' );
define( 'NONCE_SALT',       '?IRy_0dNpy>Jd.ykY4f):K{xM>gW^<bc|&F_3pN2cp75(6|Q$E6$ch%hx..9j1*f' );

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
