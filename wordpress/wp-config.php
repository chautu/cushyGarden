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
define( 'DB_NAME', 'alazea' );

/** Database username */
define( 'DB_USER', 'alazea' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'rmyb#VD)*e(u9N!]NL+|@rAVGSwe jO,C3DSKlIT;iv8e`@)Z,I@5A!M6qC(]rxz' );
define( 'SECURE_AUTH_KEY',  'd3hHyG^wl^MT/QUB8/2XaE/_~iU <EyAPc|,~;rf40NkcIuqIIB@d}IAAD7#]W_:' );
define( 'LOGGED_IN_KEY',    'hCKAD+cwoAT?`(`gnCH!<eN`AmO}4Xmv]);hxUjyuM{dhtk0_4G}@q%nJmZ8Rp!0' );
define( 'NONCE_KEY',        '*rg;j]L?!?{?fjZ%h2<mC[^iz)NZ&;Z`d~NpRn1E~`nEs<i#I&6EW_ s{}I:^]y8' );
define( 'AUTH_SALT',        'wuI9qj7,ohs$}.t^[8:_U~SJJ]{yp@cZ.RWln:<*L,{@n}:#%=&Lseu<A^nu/|$8' );
define( 'SECURE_AUTH_SALT', 'Pp}`W%[;5p)w?/WyFG0I^|*;zJ&Jum]M[4qcZLZF<LrBu#y=rMlskBTr[~`uX=S.' );
define( 'LOGGED_IN_SALT',   'zCCawJ*1;/Je.5NTBBy@DHhV?ZGKBxM6g`,7B50}/nFx|KtPM,s;=tN}+pUY,s4E' );
define( 'NONCE_SALT',       'S1Q]7Wr%tlB(&G$no{%mlZ=Q<5_&`Uog^cQFWG/qrXt CAs2nv!/eoaH&=i$v{Zg' );

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
