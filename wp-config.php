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
define('DB_NAME', 'phd3-live-testing_db');

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
define('AUTH_KEY',         'v(3Ma!fSy4us2,bYf @04Fj[krz<Wnez}e-HSOYexr*G&vePN`tUM.U}VeP~[ZJP');
define('SECURE_AUTH_KEY',  'bO/wZdgm&f1trvgsl}ssRJ]:F}@b#:/Gv?)%_2q>2c@24{}QO=|l;2S:*8?d&e=<');
define('LOGGED_IN_KEY',    'F+!vB,:nH=icq@xN*n{~R[!cNYB?F^nhvCYv@q<gX1hydRnviHq63g~>1%ucjs~:');
define('NONCE_KEY',        'e :8YK!ysz>.}@EQ8~H@=!L5&2hA!6&kK U-|?i,y#=O9D@(yS!j|L`[ElbI[T+}');
define('AUTH_SALT',        ';53p!0 NGhVIJ$?T^A4G^7V,SA)jw6)zHVq .E}J;13X*W95YoNp@CsRP~(L:#;P');
define('SECURE_AUTH_SALT', 'p`}OD2.=A>~T_`842J/ @~xBS9VK3b2P9d3:R;=NtP|b? !Gy-:s{kBkJ@NzaduC');
define('LOGGED_IN_SALT',   'c.l1?VFQSKEkYaoM9}H,<[GJ1w&Vwy-V``teJVsRFi*OSFNzN;#xm`_M{=*T`7to');
define('NONCE_SALT',       'PaR~pJI$(i0H5F/rN*J}3S ubjIWiOk4 s-PSWL:Iaj 8bw#F-A%`B61|j%T|WCE');

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
