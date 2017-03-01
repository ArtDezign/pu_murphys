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
define('DB_NAME', 'murphysfDBf90wn');

/** MySQL database username */
define('DB_USER', 'murphysfDBf90wn');

/** MySQL database password */
define('DB_PASSWORD', 'p0peVmeVKB');

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
define('AUTH_KEY',         '+eL2{.*xeXPLE6;+tqiaHA2]#*meWE7<umfbTM3{.*yqXPIA6<*yfXP7>vnjbU');
define('SECURE_AUTH_KEY',  ';xdaSK1]_~wpWOG91:#~ldWO6;#*meWSLD6;+tliaS92]#~xeWOH<*yeXPLE6;+u');
define('LOGGED_IN_KEY',    '}vgMJB>,rjfMJB>,$jfY0}|soVNJC>|@kgYFB4!zvcUQ[!~kdZG84:-wdVR80:zso');
define('NONCE_KEY',        '}oYJF0@nk!soVGC[|wdNK0:@kgR8#wdaK1:-lhO95|soZGC*liS95_tpaH1;-lhS9');
define('AUTH_SALT',        '*XE2.yiXL6]*bQE,ynXMA{^qfTE3<$YNB}^vfUJ3>yncMB,u}^rgQF3,yjYM7{$');
define('SECURE_AUTH_SALT', 'P]+maLA;*teSH6#+pMA.uiXI6<+qbPE2.xmjXMA{^qfTE3<$mbPA.yYJ7}$rcQF');
define('LOGGED_IN_SALT',   ',gN7}odNC:!sgVK4[@ocNC}@9:~pdO9[-lSG1|wlV5#+laO9;_thWH5]-paO]*ueT');
define('NONCE_SALT',       'P{yiX3>znYI7>$nYM7{$rbMscRB0!vgUF4>znYN7}oZN8:@sdRC0!wgRF0|hWG5|w');

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
