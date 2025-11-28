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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         'nEklUS-_=k#B0`muIn%)0V2iM>.n8k5VvWsU?fh#=P} @K+2XYC&C-.wd&f1QUu:' );
define( 'SECURE_AUTH_KEY',  'EZ/R=c`1_&D]^#dWdYnrDFGyfUax}+[Lc-~s4poR5NPu8VQ(coI?MWUNk(h.bNe ' );
define( 'LOGGED_IN_KEY',    ':72U`Ls{7t1wcO0`U`;yX3&-),NZc-~@9W}VM+$l|^]Jkj*iJ]X{&gX|3[NABtFq' );
define( 'NONCE_KEY',        'v@k;UpC)]U sp] G[dPbhzzmB&j1%jZS]5LMp@J(>pTD-[/cPH!MsmC7n:[Tu^xN' );
define( 'AUTH_SALT',        'Dwao{*0mW_=q[=ltt8qL{K3o:ik+]1e~#Hb32YH_Q!SW.q4Npw<XH}E59mOvtM{d' );
define( 'SECURE_AUTH_SALT', '8zshY7ly7}OZ[4Jvf^H7!Qm/ku&>)NR@_o{;P>*QN^9_ro6QH7ofQF^V8#!zUUK9' );
define( 'LOGGED_IN_SALT',   '1NP;?NI89~tp Vadw<s`Z!GJQ)TK1<B+SZ1Kgafb>8qK!VxB~b5<[kx+~_!:1dyz' );
define( 'NONCE_SALT',       'e/xLAvl#qqJK}$g-q#D63|z>jP$Nu%~gioeBcXN#rzjnM/&A@?I1Puf9jwDgNTE)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
