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
define( 'DB_NAME', 'bdcampingyoast' );

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
define( 'AUTH_KEY',         '6BvzM:h5uIjJig_[cm-hiAE OU!]^!9v6f_g-~.F!QNpJlM!fr[ln:=%uuBx&p].' );
define( 'SECURE_AUTH_KEY',  'A/!6r&`$M%0M5gG7tdTqw(x[)-;<9M~ t7Qw{Xq.1:w CqT6?4Jw:tgF^Qy2Rr3?' );
define( 'LOGGED_IN_KEY',    'cQLBJ/I)q%@8yKFEdw^e4@7Ncn6T(q~FuB1@Q7B!XA?:ZC`Q5A&zp@e8F?i;Aa8@' );
define( 'NONCE_KEY',        'M1hT9(!9s6G$y1[txE6xxQ[SrY(vt1p3-Sd;*d%3^U~vAc(Ojz0faBwDQZR@Yifp' );
define( 'AUTH_SALT',        '*nLTa.dSIImpvtgz1TBY[<?)H2;!)^N#f&UMf^KcoYh_/f3-!5 _^X1*e7s7v*ST' );
define( 'SECURE_AUTH_SALT', 'n}0}Nx(@m-|9-p%_f^C:gG4|j[VVq.yAMjM?Lt9I-ZC4tis+Y+*SS7r0vx[XAu_2' );
define( 'LOGGED_IN_SALT',   'KTqCsB9`]/[r,Fh. GQO(7^z]z-s#;LT`OR-H6DP(X,xe($VSxx4$0@y9H%NX?w1' );
define( 'NONCE_SALT',       'kHl6lzhPa^u+>Hf<01wSgyJ%<+d:BxdH>{9Dm 3IBC8:gdn8fA.=e?zGI^8,%?-n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dawiWP_';

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

define('FS_METHOD', 'direct');
