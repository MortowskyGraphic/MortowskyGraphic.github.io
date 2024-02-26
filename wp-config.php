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
define( 'AUTH_KEY',         'q/C y`*}(dem.ao1Z-h.m0[0qY[F=KWA(*!<sND2iFL*g#[qBAR3=[9#-@jSAPp,' );
define( 'SECURE_AUTH_KEY',  'Yo<|p_scUCN2jlfPB+vtVJndz{G{RMKdanMhs:SXZ?l3jd;S1R=+kK0#9QxCL{E<' );
define( 'LOGGED_IN_KEY',    '>kO[1w`>2m,_SpMbU#]P#b B1k7G3,GCZ36o[{ViELx6uEO7E:k&A>#1A?4Phtm1' );
define( 'NONCE_KEY',        'Ex=RK$Pdi3As5^=Vdsb|pJa}RYH#mG<mxzmdvoIP@s)jBU4[D(>4G^fgs3`oV7@3' );
define( 'AUTH_SALT',        ' f={D-y:y]P#}2<JpDKgO PoBx}@3x~rP*v4~T~&>}[(7Y?pO%eubcEya?b?O9%[' );
define( 'SECURE_AUTH_SALT', 'cH)R]?S?n2:g5nr34]}wM.h)cR6mUoygv{MKsh~jqgS}$B1)5|LLSvkPA!k):{-#' );
define( 'LOGGED_IN_SALT',   ':h{;vn,@{;ml.3{O#?)fP0T_71tZW=AHHbFvlyJTq.3Rfw34XTSH!xogBn0<6Ix#' );
define( 'NONCE_SALT',       '+EvOyW%{PH?T[SOM2+}x%_p2u111pQPILCxN@TQrPZrs8/`1eIg#I*.&^>jCx1dG' );

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
