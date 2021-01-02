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
define('DB_NAME', 'ebari');

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
define('AUTH_KEY',         '>oqKKKxX?e_r0NE@b{G@S$=Lkw(L =mIyUc^iH>789fTJ 4Peom;V,L&]p36+pHg');
define('SECURE_AUTH_KEY',  '^8rt+lx u)0sixQsU+Y|!F#B$D~3j,e:+0K[z5Hrc(L`&Z&$|!][1/W}VFPRs2BA');
define('LOGGED_IN_KEY',    'x}<J(<n=^rK%jkEz9:RwO!:Vc8wF<{^GCeF5lAf?]5c20~4= ~MIWS)4OmU1KC0^');
define('NONCE_KEY',        'hl$JwoBS.oq4mA$L)T[{^}4!$7Ai:(5#8J)YxizE34_L [^8+E<y26-IoNVTi:.V');
define('AUTH_SALT',        'X<2i}Q>77/eL+0}5Vs3a^j]MRmvrdmno,R;>m62Vm,C02J_M84Tyw2Vvz@aMQ{<F');
define('SECURE_AUTH_SALT', 'sf+Tqpu1g71/,+ZCi&R?ax7|o|}zwmj34J/TnE6_+q [sFl:h{TgId``l|A>^N|x');
define('LOGGED_IN_SALT',   'lnl~x;Y+v<=!HGoa!Q.PVASXeX{3a^fWRg/jp<Dao[,3Ib{%:ta4TLDu^)3;(Ng#');
define('NONCE_SALT',       'a|mG>mPa%_Z7> Ms:%Hz0J3@W3*p!T>+*4):1B-~q((#W+G8i8Q6j-@<2^CAtXo_');

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
