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
define( 'DB_NAME', 'mortowskygraphic.github.io_db' );

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
define( 'AUTH_KEY',         ',3;R@(rD`#yr?%SzL)KB2C)1bBw/D8swHv^F9m!(MoErEQ[D?)8,[*{7YK;/n,./' );
define( 'SECURE_AUTH_KEY',  'fQr{qm(&6WYU9Uwm-~KMA$p-J$qcm$]QT8)149]-m?yV_@6Jru<r( ,VV67GWA.U' );
define( 'LOGGED_IN_KEY',    '*PX}8lVXXrDb?slW>K)9G+su7B1tE}3x?xw1b?x5Pk*5|sM#p.>a:lwDozBktoMg' );
define( 'NONCE_KEY',        'r8YTB`&%@m%vq?E7jLoeq<$$cuZBNFI8|u2*i>/$dYwC%yAg?B=kCrBVB(^pi(A)' );
define( 'AUTH_SALT',        'zfB:(0:,Q>?ipUux@NT:r?0dm:qGP#M<SVI!tD|X9RO7Sd}TSKD5*?/Q;Wb)%c~c' );
define( 'SECURE_AUTH_SALT', '+ZY3cQO?WqIuy`jFCF `A,c*4* ]7NOxtG/&@mt_wmx$IIn07!)+5I &*k2T@UJw' );
define( 'LOGGED_IN_SALT',   '$|u+Bv]KRp^L#6O0[DuiQ?saX4uk,d.)r|:q$.f&L$;/HR,9z{&JMO9E~w)js|WN' );
define( 'NONCE_SALT',       'BDog)JF9@<xnbc;<uZ4!gL[gB{JK+IbO{z%SL<P5/Aeua=qc0K)&du)E[[X_-O].' );

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
