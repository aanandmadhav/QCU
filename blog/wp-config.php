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
define('DB_NAME', 'website9_data1');

/** MySQL database username */
define('DB_USER', 'website9_data1');

/** MySQL database password */
define('DB_PASSWORD', 'anand@123');

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
define('AUTH_KEY',         'I/1?5ZWRki[lCxb[h8Whh:u::qWi79n9m{_ye*_#_v=Cm0R@<R+vc`g#6i>L][4H');
define('SECURE_AUTH_KEY',  'b4G???xl`vB[8@,gj2)erCbsT)7$l_U`;t9_2!6$gSDi QzHRV&VASI(=nEpUsJ{');
define('LOGGED_IN_KEY',    '=OcV -37IZI>#^tUXq02Mr;YYO~.c_*s07aahMNZ!BOd~$%^@1w$Hd*Hjq`Wz;ca');
define('NONCE_KEY',        '.pfg;mEH(7|G!](K^VE@uEQS BlM6T@rG:w>Y@^U->^cN(]-l:Gfq0V/n@MGQ%0M');
define('AUTH_SALT',        '6!c.n0z4.E j%uWhQd!4UDo^!xW]&w?{VD7*Ekk5UJw({r!IfqbQVKZ(b`qIY50e');
define('SECURE_AUTH_SALT', '8ieyG?f^53Q:{?Jh(1Q-k}xaeSZsa;btu&6`qVg!d+u&} `MzM&oTG2O,9zs+) u');
define('LOGGED_IN_SALT',   '%+%B_iy7G&|S%[A5SCpbebozTE.WwQ=sGyR9BZo$8]fcQNx;[g(:)`:{y44U0ES^');
define('NONCE_SALT',       'nK[:b30dlEIe{FJaSCAeOM_C>5>t/Zz#lHU3=-AzvV,=+UsX5Ej!|/EPVjR7V0`Q');

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
