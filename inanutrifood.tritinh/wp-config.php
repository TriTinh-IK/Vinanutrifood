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
define( 'DB_NAME', 'uufyndalhosting_inanutrifood' );

/** Database username */
define( 'DB_USER', 'uufyndalhosting_tinh' );

/** Database password */
define( 'DB_PASSWORD', 'RBf^c=kO78&o' );

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
define( 'AUTH_KEY',         '}pGKJN~RrjV(z%r+wB{T7<pzI<.3{[e~oze,oPW=(h#E|r]oI0C3HCD unZ$tu1O' );
define( 'SECURE_AUTH_KEY',  'e EKL$wU]j,>0ahp*SynBSQGtg`UI*A_fO7X%G&}/.gkgu6x&UqLG/xP~wHi6 e/' );
define( 'LOGGED_IN_KEY',    'AC^33ff lIdU2Cur)][`dDhHoN>(9*!R1^tW jT[g[9Pv`F7FD4[ngbujfk74RGA' );
define( 'NONCE_KEY',        'RAp@1xL04R!j-e{,aa}p|+e=~8.USZ/$.V,kWU$I6aT-|r-zWND>wc%Oq%PK-U=g' );
define( 'AUTH_SALT',        '.XBLzlCmAhj5mo&K{0Q?{A8az6UnMw4jhFP=7D}ZTc-^Ih;|3g;HjlaH$7Mn0e|3' );
define( 'SECURE_AUTH_SALT', 'tQ4oO%L`l{A0M]EPR,V:E+:0,NbJwK0HCs1e/n,.^<4a5kvd2$ZglFS?}5vDNFt)' );
define( 'LOGGED_IN_SALT',   'E$Xnd&?G#LCbGZ3aQ]XO.M OIY-Tvgd3*2Zl@[x<N`GxXX%9@BFV!Rg5UDI%L>sK' );
define( 'NONCE_SALT',       '2/0+>aa6v nvcmn7eV<ef1_HY0{ b`L<-~N3lW>pZk_~7Pg+P2a9_Nt0F3&-J@c(' );

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
