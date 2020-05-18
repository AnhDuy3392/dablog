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
define( 'DB_NAME', 'dablog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'XxC B9]F|r(=Drv/>:Z IQN}MdR(.F6?jp^b5jqXF~Wo7{Z0Gh;o91Fi(F-g4;rX' );
define( 'SECURE_AUTH_KEY',  '==kEzq3l_ne*#0q^E)z9iF8mm=wa9uK6~lu|u_`%VebN?gjCwF>EXhP,~(6KKo)6' );
define( 'LOGGED_IN_KEY',    ';4eF==Jo-;RTbJMz.hFn;omG1W ++a&Mo:l`HoMVp_-2kipH*WO9V}0Bya4f-3dw' );
define( 'NONCE_KEY',        'C`=Srz@TJRj~}iwW.&Jw;)B.;!PPBJ_ku?[.3i5SL@84t6d7ALpyJ[q,^Z =O@$j' );
define( 'AUTH_SALT',        'k{{8aD!VE;JsS`m|$E*Qf2+!7E&=ibhPW{#QF*rybs?~9W[DFbmcQOTdBv2!!x((' );
define( 'SECURE_AUTH_SALT', '_l%b6qC^[z#s|2A}/Y>||&v2FPZp~]#{@@vUZ]jop:.,ci9=Z|/M%3AWImxvovJ ' );
define( 'LOGGED_IN_SALT',   'dKG-#Yt=.]e;G5n@T$/B!EBg]`~}sx7Ie~WASPLUDxCvSs]6IuHQvC( {IXA?og^' );
define( 'NONCE_SALT',       't}Uik` 7~9V#`wDE*_)0~P*ByW5v7HF3[%?;{dO#BQ<4~;8QR9TD?vvL<$h;9U&4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
