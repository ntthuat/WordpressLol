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
define('DB_NAME', 'lienminh69');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '1t*c}cO~5y($:vJ&$d+$#<h#j]j,u/LNlCp;Fh10h6S2fdjGm!Pd[_>tQzbN}Xzh');
define('SECURE_AUTH_KEY',  '4m18}621ZLj&nb0Fths.L.S#qHunLLe)rvYX{aZ[b#u2lEq5%X`%DQnJ@Z8q6>sn');
define('LOGGED_IN_KEY',    'jz}rTI >4fZCq;-pPjHznS&Z#L$wr#[kwC~@-#`P-2T^6I:]i*J9KydTuX7hDvz|');
define('NONCE_KEY',        'eyLO0d2D$JEFc4silO=hXWfmaFQ;;W_p!$e{#u~a@}G`/G/I:>VU Yqj?.<v,FkK');
define('AUTH_SALT',        '0r%S8XdE&hJTcw~SW99Ir-idWgmJ4lXZc3n:fI0s] k_AfdS>/;>uV4Vj 0 MG:V');
define('SECURE_AUTH_SALT', ']Z_o:}wOk6(fkn%e8`EJ%Tr*Io]n/8 }}h_dh60$NQ5r}E}rj$t[VS?lA5V%%HwQ');
define('LOGGED_IN_SALT',   '`K7YdW}VY!Cu>&h@HBMjN`H7(P#cfe?k;]|v3BM!07^CmASHFoN%DaP5aii`x(6V');
define('NONCE_SALT',       '[]L]$*t]ozk~r{+1+sYy&Bju/z8e36bbCn,nP/n3nI syM0~]N8n`ZD4K1nhmayY');

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
