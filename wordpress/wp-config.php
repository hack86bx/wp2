<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'apiwp' );

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
define( 'AUTH_KEY',         ' pn,3gXXPVuA N-PZZE;;4S,a/WE#6*c%Q{YZQDkTJp&ANO6lg2C!Fh?m5.Zn&N[' );
define( 'SECURE_AUTH_KEY',  ';dX)@@#Kf0,xA}PnBr|$Y1~7Hv_GXc ZQRb2,:}.aF3zUJ=m_Kfb0<+1:iCD:k|s' );
define( 'LOGGED_IN_KEY',    'PMd^=#n~9=bG-P^ncb-$9#J`x4bG2~ajKnvwat)0zpMxW,m`_j0+:5!>p/r]n4;1' );
define( 'NONCE_KEY',        'Q^?^m=F,A8U9vqol/oG3dtGqNo@|a9Bkz.JHiJ}3*l7+}c%@wj6U)]^XtBV3j&BC' );
define( 'AUTH_SALT',        'b5#aw~P:e$;aaI)?7$R`7D>{V!wLeT*o[&9R5~1bh,4<;uD&Rgwz/Pnn|2;V=o5;' );
define( 'SECURE_AUTH_SALT', 'Ak,uDNAz~EXum@wDJSV,_w!I0G:R7z+if>ECBOm,Zwk5(e@55KSc55yJNUC@=/GL' );
define( 'LOGGED_IN_SALT',   'C*aCzx1MQ0:BC_#!Kj<y<36:GJ8`@ka^aYFeRlc+Ew:,{~}c7JXU`ENOja,Vi)QB' );
define( 'NONCE_SALT',       'AfQ)x<6>qxWeN)O~`[y/aeY^W{s(<T]:Yg!/<-[fr,kxfdp:6I]Qh9<[OxRH,HD=' );

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
