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
define('DB_NAME', 'murphysDB0y9wt');

/** MySQL database username */
define('DB_USER', 'murphysDB0y9wt');

/** MySQL database password */
define('DB_PASSWORD', 'mVVS0EByys');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'nkr8@7p+H_D9amm#a]*]LEPPq+1R:GoOV~lo_-~115ODWatpx]BUcYrvo!|,8B!NR');
define('SECURE_AUTH_KEY',  'okr8o4N[Rk8h-Rk0h-C[:Zy*I2MATXXqu<^,73MUIcfMy$~HP5exHa#exDt<P6Am');
define('LOGGED_IN_KEY',    '!k084NRm^..6A^IQ7fyIb>fyEv>Q7BUpt#_]D2LPPim*u+;]2LATXEmuw8S:Vo9S~');
define('NONCE_KEY',        '[0d1dhho!-~115ODWaZtwzFJYgFn!c,7o4N,8gGNwcg}2MIbfyqu<<{,7BUUXrf');
define('AUTH_SALT',        '2_DFowc>0|8C[VZ8h-V@1h-G~KdQj}n^I>}YFIcUYrn^>@084NRk+;62LTIbfLu+b');
define('SECURE_AUTH_SALT', 'F}YgGswc[}|8C[RZ8h-Rk1,7fAU$cfyy$,7BBUYrgn!@07PimT+.i{2*HbEmIb.');
define('LOGGED_IN_SALT',   'ujqquA^>Q7En#[WCGZOhll~_+;51KOhWpxt#]FYcJrzZ!4s8R!4d8R-Zd[w-GIMfb');
define('NONCE_SALT',       '^1d9h-Ox~l;5+DW2atDW*at68CoVZsko!!|8:5OKdhZsw[[:Icfyy$,7FBUY7gnU');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
