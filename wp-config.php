<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sofiegronberg_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'sofiegronberg_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'indienemma' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql81.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[me<0^!GiNgdNH0Uio!pd@h/j <pA@wkrRz;txFIBL31}F,7UeVF;*im^ZZX/raG' );
define( 'SECURE_AUTH_KEY',  'u1fRwHI=nQZ>~Ru;-^V(@g7QuHi&`9($eHoE)ZR3=G&5ae)!~,%@kG.rrgIr=vZ^' );
define( 'LOGGED_IN_KEY',    'Y.Fi3qv&C{Sp*U-~gn2M~z9@Yil.fo(^S.yRaN6P+)%aW;,eR!ZusKXeN.4B.rju' );
define( 'NONCE_KEY',        'Nj[sLmJM0wvbLGTcY6a>^1BO~mH1Ig^E>{7l!t[$69je-gMBd8o1uEoRaU0{m$=6' );
define( 'AUTH_SALT',        'r/z4tBHbchD}V]V{V$.XPwZ|.(NG}} XdN=-wNM%Uv+y5cT>L2py@9rzIueA^ba=' );
define( 'SECURE_AUTH_SALT', 'p</bYIkX{`u6HyHQ[5g6>)tE`vRz`OF64<b-an_A6[ B}NHOc>87($~%g!5mtwrN' );
define( 'LOGGED_IN_SALT',   'lSv fH)#/+up2d-2sS+qaiYU,e!+Uty2Q*[-r=KZd#P8IR_M[RAk.=oD]&)6o!Qo' );
define( 'NONCE_SALT',       '|t&(^;cgu,`$I%zw,JQ_3u*x25.1T8k}9h.X&?KnyD7-s85jGtgC}!r([DPGg5zS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_portfolio';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
