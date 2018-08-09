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
define('DB_NAME', 'de_papel');

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
define('AUTH_KEY',         '_-ap7&mYEAfPbp?.v*~Vd#gVefX(HDE+k101Wan_|;>.0<FP;Ei6*1E;baB?u&rA');
define('SECURE_AUTH_KEY',  '+5+aQmr|;Q)Fc5@6KiU2mbUS2HEFJ.+as; *N],_*zt2o!%7FJ6HT$T j(rv)Sq7');
define('LOGGED_IN_KEY',    'cT9Mt$$>)x6%-C6xdn_hQ*i}Z>9Y}#2e(xy]u5O#?#]@6PC_3ni2e_[H!51{U%Tp');
define('NONCE_KEY',        'CCHEv,<6od% <q0.^B8:}fjfX9T=kzAgw(>h#P#s2B_j0EJ$p^sT51Q. P-+b)Mr');
define('AUTH_SALT',        'VV%8?.Ovo>Z(O_pu?%Y%=#7C%4@>1r@jJ=A[{0wX6E^$OYsgY?_E62e_dZ&DK4.9');
define('SECURE_AUTH_SALT', '6j?$3A3%|!(@*=A|>-uk:(<-:t/^1Xb3@U@BBvibnLQx(pFIdu$==Bq~`~]TZ6&j');
define('LOGGED_IN_SALT',   'T~W+Ek(5lW*o,5Gvn_z0A$F/EomEo7_J#MQP+M{JB.]I3wu^h~$qhfZ_qMHi0?3,');
define('NONCE_SALT',       '%JDHcGAl<&HIctF>#vS7u=Io*a:%EfVNe04=$I{1^&XgOwTm9wH#r%@u!ZG/{y0n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dp_';

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
