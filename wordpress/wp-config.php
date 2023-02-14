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
define( 'DB_NAME', 'cushygarden' );

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
define( 'AUTH_KEY',         '+S#zbtD7],&-nkS6,JmwuSd#>2sy|8]4z{By#QQVq`)CqUe31YeMRlvH QA.Lsr&' );
define( 'SECURE_AUTH_KEY',  'QWaL0N|!83s.J_w_)FaBuf!eL-T,AWOCH03!k`a:_dm=%8_0{oQ?W$yRG.<NQVU:' );
define( 'LOGGED_IN_KEY',    '::T>b61Zfa}D0wDfJ ?<$Lems0h yQwOmJbm}/jaHb}Cb2|q1.:B*cWgZ[0jc^g)' );
define( 'NONCE_KEY',        'd?4.LTr$m4H2jRZ+1EoiNmfl!&M72Kr>K{a:XeE^(pPv c69!?v1K3-O6$ng|!xJ' );
define( 'AUTH_SALT',        'o4gO347 WNgB[d<<X->]B5ug1)[UWMM?Nd@c-9DM4tcFjK>E!y7]sfQ#1i&H5Y/:' );
define( 'SECURE_AUTH_SALT', 'nJrvH]5BKQbk7TD(Q &.kOopW c_Ua*@ywxUgSCw4w%@hl$h~wWb7M#~i]^ XE-7' );
define( 'LOGGED_IN_SALT',   '*|X4l:K_+TB#AH{=@j0kL*ZO(@Kv[N|B,I]Tr&pS48:R_i7?.c1rKAR@ZNj5/!<@' );
define( 'NONCE_SALT',       'z14%]1#p?~,aS 8c4WQ~72_X/{.oO0+J,KDlc6]aONRMXy*9M!0$e,FlLf<6_*Qw' );

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
