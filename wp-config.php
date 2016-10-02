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
define('DB_NAME', 'Wordpress');

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
define('AUTH_KEY',         'mA4F(rnPW>?YV%2LMc5J%4% %g3~8#c,yu}p,bhsa;!*p/]_yYjjE6&b+;|Enhv0');
define('SECURE_AUTH_KEY',  '`>y9.> w$V?+ungUCDUWTv8r4~_[{N2?#Jkgp[C1dwI`- _AAb_},l1CywikO~SQ');
define('LOGGED_IN_KEY',    '5-:[+K#jvDZ2;LH/%#E(l6eW9EI{3&>#7~.13Vk+(c&0L_1Y;_ST/VHq22QFX%6z');
define('NONCE_KEY',        '13LR$1@WAa?z]g>:zE]]Z?`h!fiTdL,(<|5|&s95#S9Dm^AwA;Od2ms){g#AOwIF');
define('AUTH_SALT',        'pGFPh4tQJ>~jAfT_5W1vLyUQD`~yn?0DPzsm_atke|;.YQPLSjHWC8H%noP(=9Y;');
define('SECURE_AUTH_SALT', 'DdQ01cIkpLtb%v}Kk$hF<D%$1Xr0`;G.mc3NLX| zYR~jF/oOU=NFb%s#_j7O9;9');
define('LOGGED_IN_SALT',   'YI(gsIZ!FI=R#NRwn9%Z`n=UH-#@&tr}#0{u=Ww>7TD.y>=Q:EN:*xQMe^OC1/:l');
define('NONCE_SALT',       'B)z~BvlX1lH `84JkO|!XOO#8LD^2J~n^(UVC1%d66M4QAV)1$rb#Sovm,q&YIwj');

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
