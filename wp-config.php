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
define('DB_NAME', 'zenzy_mag');

/** MySQL database username */
define('DB_USER', 'zthomson');

/** MySQL database password */
define('DB_PASSWORD', 'Smackking32!');

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
define('AUTH_KEY',         '6$a#j6/Un;;43mZ-_NTzx`(_lnfW[$(AcP%+WWD6V|#=,K0X(@kM6(.Pv7,RiL5Z');
define('SECURE_AUTH_KEY',  '<Aq!aXK>![RfCLml`s!4C=vGnJ,d*@]-}3}u>m2TYdkN&7QclfeKuPm!6[53LMfu');
define('LOGGED_IN_KEY',    'ohUz270]J6-g[Yq,zU@v/}=Mc{.w,LaIfL5| gRPNpGa+i8a:kFwTA~L(GM@]_X=');
define('NONCE_KEY',        'Zq_[RTwnrF?(*g^@wBi0z25r9-3Tdq3-OB8K=U!(h+XO:2 |I`dYB)1hHjsYJVsE');
define('AUTH_SALT',        '[Qg8MIZ8}#bN,<PB1;hrY7t--?o0JsY_HhP;vLwM!PSQ@aif]|#p#1e09&3ACN_N');
define('SECURE_AUTH_SALT', 'rRqc{gu2m;N96@p>JEQP&C.[{h?/6TWzXC2<!-n},Chc xr(]e2dSGhOlC<yY7@x');
define('LOGGED_IN_SALT',   ';XMFOqN[K2x3eQlgxyj?Hm0?McwfCWF/wtxd =avrZZ}*}-Kb`P:*cLd aR}odR#');
define('NONCE_SALT',       '`X>~jUv5}6(0BLcc/*.<M2XBYV_{P>~#p}o?mSy)5;p*(Fs?m;hy:&ecSaRGx%q_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'z_m';

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
