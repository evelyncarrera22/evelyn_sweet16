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
define('DB_NAME', 'evelyn_sweet16');

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
define('AUTH_KEY',         'i4Ll*%D!?kavrRXY% Q2}$+i:([(?aM|o}wVyVm_3TxocRQ/6JKG6,M(3D350BO6');
define('SECURE_AUTH_KEY',  'ZsQd/s}r@[b|._rM,]3fijq=opap]zar8{>IlR=n}K#/C)5OMyuk:ZYY@2t|:#K@');
define('LOGGED_IN_KEY',    'K)JNN/DrM-O6(_PX?7YQe#1utp-}8.+9;-b5wt:5a2V>P{%f:ZVCO&-I^N<S6]lE');
define('NONCE_KEY',        'D$8[_Q+Cuqjg@jw~q.gA5w9S5|mk=h q{0$JE|JO}n7<*keDS``s<.M]hA}:(4=j');
define('AUTH_SALT',        'I@d6>No7d{P+Q_d20<a|?/6VcV_7jXcP_PL|z3MZ[Z}C:!UjBz0Q3O?)W_JDagfu');
define('SECURE_AUTH_SALT', 'M?pZXX7EAqdOJ{oP,hx]<Rnr,Em:#D%iVed2j?9V<d&@C8+yH2mwbK(%L}Fw~dbI');
define('LOGGED_IN_SALT',   '1Y:3ZXq4&}5u<FbZrjpeBoW/cp.0 ajM<5.Ou2jrNcEKfP`)I0usY2L#HB[@~cn]');
define('NONCE_SALT',       'k7*~+E6Z;L-I:` /K1!V[!s[K7i6yQ(/Lj$X<IhE|!*[k0/W7y>1%+P:atS7$k k');

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
