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
define('DB_NAME', 'allan-lafrance_wordpress_0');

/** MySQL database username */
define('DB_USER', 'wordpress_f0');

/** MySQL database password */
define('DB_PASSWORD', 'AarLX$594e');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'T%QVwkisP81pxDq^sE7yCxSSzo2oiQ*cGVWZ%bN5#coAcQd4MxWDjNrkf^1V1(^s');
define('SECURE_AUTH_KEY',  'REamANq3qX2uYr#LdabqSyeef!kL3kTWrEfh8#mZ))7d5xk#gU6ZaEBPy%sk3K#o');
define('LOGGED_IN_KEY',    'H(jnWPlUsBZgSKW#etvz**Ux8y!WNX6TP@x&@mrbud^oquZfdB8ss&GoE&JzU*DN');
define('NONCE_KEY',        'BdIBj@IfW&IMxJ0RLyFnl)k3&FMPBGbraHtqU&gRt^zPSOf89ZUTktT9wFuTOam@');
define('AUTH_SALT',        'Q(EKvB!z54fkezfE@iie&8s6(@D)s&)nqX(lGs@cj5G(U8xDZ0H#jHyahntCffU9');
define('SECURE_AUTH_SALT', 'vJWsAd@SOn31b^54oHtVSEi&9d76p2o9Y#6fuMRyNYlnaPnx4hUjszOSk88JSupp');
define('LOGGED_IN_SALT',   'I0B#eD5dE!sqL@8DSyPLPokToBwFR!#rw3EhWirI2JKEdC*bWVWqNhOUwbDFvAu%');
define('NONCE_SALT',       'vP3#i3sukbwTRGNRopkSZLah(P^CHVR)fxfkAmVitAs*WTRy9bzDwK%uaZ&n0p*b');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'UQsmge_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
