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
define('DB_NAME', 'themeplay');

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
define('AUTH_KEY',         'L!?W#;h$Q^hNNs^-S3q=%^~`dLj}rF<0YJ$])Bbord8[@oUbnVBv&+vrbP.,g{ k');
define('SECURE_AUTH_KEY',  '1b}#S`?w+A=2l1xXD;^~#+x0xRhKJ^q_qyCTLC0$gz0 n`P*1aKiI|(COjYQR]UF');
define('LOGGED_IN_KEY',    'r^@mSF0=kCOz7^BCrU|?$#V6skj5t.Om]=eT,yCloo|xx&Y:VBkJdLnIP&;?9`E*');
define('NONCE_KEY',        'm@]qVKJ)MQ}q) I#dKUs2;n&PsDv=WsC!iMT]IE@YxZ&.9Zq6B&:e-^?#/lt9Ga.');
define('AUTH_SALT',        ')PsR:72W^B9G]bCElf/pX)Bz8B hhzv;]LOin#YEv)_KbAJ0hU&dexoBvUxt VHs');
define('SECURE_AUTH_SALT', 'XHj$}ay)/4Ph^;1P0O{uD:g2T5et{l[{lPPP,([MJeFa6 i!D8;r4`lgRZqUy+C|');
define('LOGGED_IN_SALT',   'UD2I#%Ue?Okhz;;:V>t 3~<7#nskMr,+Y%vh4M)73jK6Z#{ T)aKTo39%%3 B{^S');
define('NONCE_SALT',       '9D]~lxi$R1rHkaCQZD&$F7bg%H]5YGkG#vE..AW6w*nd,c!Mlmjws`s Na[-6DC]');

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
