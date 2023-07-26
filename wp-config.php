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
define( 'DB_NAME', 'mamastylist' );

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
define( 'AUTH_KEY',         'uHEBjo*hY>;89TJ=^}tv0Ia4Fkq9r]E8R<AnpIG@KZ0Gw`JA>9wq{_@WAy]S6M@F' );
define( 'SECURE_AUTH_KEY',  '0:.`fSt%x>fA2OOI,pn/]=}YF0UdG4{AO=.$IlFSbZs_xp8bF!1a}b,M+:/H){3J' );
define( 'LOGGED_IN_KEY',    'Xt.;uPpJK4tTo<,jR:Ul2iMtx{OzSW9Fi*GRmT2q*!g3MNP#nkd;S=5okchnSc[)' );
define( 'NONCE_KEY',        'ZX4)bQcD{7o?x86:]27`^Fvi^r?**|YQ1A=@y</J)t0w&,l]ikEOgX4[#<,lK,[j' );
define( 'AUTH_SALT',        'q,0v0gyO1I#$j;oQA:!#`y,|C=U*WUgb[az%7<nY$C-hw^jN&v!KPq,(Q~?wK>d2' );
define( 'SECURE_AUTH_SALT', 'd>lj?&6wFk.K&X`lNc.Nqz30+wJ+52ir[A:6ks+ihEk)CgN~=Vv/<Z!xqdCty2A1' );
define( 'LOGGED_IN_SALT',   'iGK55:s5U6r_58%QqGPMcUvy1}^sS7Z]a5R(u_pVgwv=TeV#X,h0/blNfo8,SL{M' );
define( 'NONCE_SALT',       'K8),n!:rsr!Dok_Z:c*O/ 2_t3P*~UPMI^Lt52=[>a8>e-|<*4GTAo8W.-Q2elGm' );

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
