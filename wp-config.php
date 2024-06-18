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
define( 'DB_NAME', 'trm_db' );

/** Database username */
define( 'DB_USER', 'trm_db' );

/** Database password */
define( 'DB_PASSWORD', '1pU7$AkU2TA1HE49]do{[4B}}bMmo?wl' );

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
define( 'AUTH_KEY',         ')mlx%s(hT!d1;1j3p!`+<->,w=mlFwdc5SS)3s{V=6^>!f{D./%% FR=t[79_NlL' );
define( 'SECURE_AUTH_KEY',  '^L8l1x`DUcf3K l0*#y1R#_[[QeG;7/9,#yk?}%3po1GKQfJ)qZ#-NV/G!<Mr}v2' );
define( 'LOGGED_IN_KEY',    'g-/`sRe8ud]+y-p$<dE=B/;]3~()|AmY%!$c>uf9vf1Q4=,CEcR]ptz>cOXeqh#c' );
define( 'NONCE_KEY',        '1SX&Od<ECuke!wX}%R3y+^n,YgbX o8(U3$MY+S&_l2Xc80*-Avy_|NB&]J.EXFV' );
define( 'AUTH_SALT',        'L7^:a6ZYBWRc+~h9=LXA4Au#UH1Egv]>s4#4=Dvbx*k/VCziK!]lbPTp6S##-S50' );
define( 'SECURE_AUTH_SALT', 'yfDHfcWH1uom,&eJ1]4eIIsah#9bP*[N8$;!Q]q3Gvg]P,h3<c_Kr&fH|[2d`!W>' );
define( 'LOGGED_IN_SALT',   'Z,qF.s/z]#hiF/Gl<9G9<Ers=5 R8GSPG_GDPul,T7/b[:2b`R@IH<)[yi(~G?SI' );
define( 'NONCE_SALT',       '!-kvm!{9yc#A%m*uWl|UBY:I06Cj$)@Ol/q$VpsS[L[YWEG%UYm-{!Trd[YRDyw!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'trm_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
