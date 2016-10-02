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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(Tgu8Y>7Wk$<U;0o)tuV>PnSV8kFdvDf:;@A9U!Z0Orasmn]bDj77).0E~,P_ or');
define('SECURE_AUTH_KEY',  '6]&6>4AI${&o8SwF9!45c]jS4J>r|`?4:+(=FbA}V;Z}(RkGF>AL&n[jg+gfUD)h');
define('LOGGED_IN_KEY',    'bDEvi,vdG8XE@fi~^{Mv!&W{`C-N|gm`vLydBp*N42ivaM+*zMui}_H)&x,}{e&?');
define('NONCE_KEY',        'OGJKuH-{@=BE`^2Mbc2*7E|q,:% dSzbdRYB3@r7UEA[qk,o^0?JCRDv{b_!^3#_');
define('AUTH_SALT',        'vcB0ET#%}]Yw&xuI(3aoXpnwl,?mhHyoyD*gsEYw+#nr&T$`~u`t.2CWlP^#5&B?');
define('SECURE_AUTH_SALT', '(Xq|yZB`2PpC.cafa(3-eL/)%8gjUb$|qtPr6/d| !WVq^k-X7{>?K|?y;|l*Q|=');
define('LOGGED_IN_SALT',   '}7FPj&H:1zUdgI`n],y_2W9mJ}3b8cIW[eE+c$m0Fc=Shwv_t/8#zR;Y4.o<!mBF');
define('NONCE_SALT',       'wMvr5iO)>QQK-yEI2]*TiuMo,_89P6WR34QNqSRv08:fgc!`_/h~[!8Fw~ `5k/^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
