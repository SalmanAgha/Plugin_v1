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
define( 'DB_NAME', 'customplugin' );

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
define( 'AUTH_KEY',         'qkc.+}{LUlb-|fo!JE^]B?sxH8PP=.>[cY7{1oR)~_|LqC&be2gvZ<w9Y}j$h_;h' );
define( 'SECURE_AUTH_KEY',  't$&X`e$S&-@+mQ?aWzin5t)`672>=P:yV6?cv9TfUB+E]Rv_60]{_@=BS917ii%s' );
define( 'LOGGED_IN_KEY',    'w21H`Tn@Q-<0*Jg]ED_yn}8$nM$T71NT%XGR@be)sp<i/p$lZ)5{DrJNO]Wvne}d' );
define( 'NONCE_KEY',        'U&@?VNZ;d[jSCw$x HrkdUh[Kd_b(-i HQL&tb&$i2!pfu-#hf81xJ>MV8hSB<DY' );
define( 'AUTH_SALT',        'u60ttxb9:)tHL@,U+gl[1?< K}zrhg!Lr- o]?mn?NXKqF[H;}t?1PK-rh^rbdnd' );
define( 'SECURE_AUTH_SALT', 'lfr0ryU>vs=-.)es>o#V4#DZKYlx}0?k[<fPGGwlmi&`@;mF#C7<pcJ7iJX}R_WB' );
define( 'LOGGED_IN_SALT',   's1*D{-DxUd6mz,#&Cs#,YndNI6g8cpVVERCR/B+}|1?QdUeQX#I9))aXks~ng<iS' );
define( 'NONCE_SALT',       '7.3<[ZI_T&loDOvP2qp-UW{J!2/-EoC9,MH6iohkoO!Z!MvbRmn%QGqT{Y2f<yjx' );

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
