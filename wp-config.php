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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '=~Lf[GHJy0;f+D.a:[CC.J&2~)~) +8$(eLMg1?kXnlp!,&Cl,=~?jLU^7_3~pPW' );
define( 'SECURE_AUTH_KEY',  ')azl=$FjMAsNwRgX<D,=PRDr%fVN#4HvCESUEqC:+6@:zt<GX[Q5RQqe.CK>v^e[' );
define( 'LOGGED_IN_KEY',    'CE$*5 wl=2}-f/c/(Oe(Se[7(j{<6=` G-Dc*j>RONvFx1O8iE 9|{+{Lkg}.@L4' );
define( 'NONCE_KEY',        'VdWh+Z:<F&^rfB,C_5|.rJ5(O_=m?i^c2G9vfWv;~.PPa!<[VtA0ruE?i+,Mwejh' );
define( 'AUTH_SALT',        'kj4PN9.oH#q$9m63QkLr:,Csj;M1Q#I`B Z6p2C3[BC<da7E`l.@@R1Z6zZG2Wb%' );
define( 'SECURE_AUTH_SALT', '92g~n-f-k=M#Xeq@6Q?R9*M&pCX~)iYC,^692;vL(yanwoqkr+HNlX;Sf=8PwBDp' );
define( 'LOGGED_IN_SALT',   '|%4F$Y.Y@7R_ax:?ZGlFS08[)STStfRF*P+%^LMamP##[,*}0nFfcQAZ_:/MS24n' );
define( 'NONCE_SALT',       '@d*2h,F]#yxsJ^@PD?8=QA0qO8d_p-[ }IQ?>X#;Q8yB7fyHVTY;$ccwdNhG7S3u' );

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
