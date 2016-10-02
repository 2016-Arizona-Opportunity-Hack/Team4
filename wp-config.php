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
define('DB_NAME', 'amandahope');

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
define('AUTH_KEY',         'd=GO%&0-A0.,y.iF@{nc=C0R5;)/KBCVqh/6ua_at~)uey#e.NAz<Y<3&6-is[{/');
define('SECURE_AUTH_KEY',  '2MaFZ^kad&n;Xj-[$6S%QAUv_PeS!20`n)gDU sUHVWY;6| };VWjbFW4/,0.uRi');
define('LOGGED_IN_KEY',    'n0q63ILby_zJJbj~Sh`bi!e3Do:ce|$OJGqZ{_k.MOSf18Wk*t<sy)w.Jdr7,wr?');
define('NONCE_KEY',        '41pk+A@tTkz^%=qpwTRH@hkEKp|#1vPfNqxLP4ov<<W;<ARpzCoMJF~kZv^*VOJ=');
define('AUTH_SALT',        'VvZsY%M|][V7l/[82TFb]0:A7V,_h+<K[w,<,z&2;J1<X~yL(4$BS{y-JocQLw?S');
define('SECURE_AUTH_SALT', 'B5|3[e$W7W~1BB[oJJ4mWS:ZS?S0Ai_<|0GuOf@fjyBrjY}_V)Yg4>~j~F>N a1D');
define('LOGGED_IN_SALT',   '1:A<H*!J6`@Ir}*`mb,NmNvQ6e1gePAz-#$=3c=/$[fp[/Cq`FjF#<~!K}$Kbwr*');
define('NONCE_SALT',       '4V$P%BX>=9$)n E=^8sSeyHo,SwKy/^NNDHpPN/v!qa7 rKp}yNtC>S .SD{,+.v');

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
