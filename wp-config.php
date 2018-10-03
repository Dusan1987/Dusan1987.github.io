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
define('DB_NAME', 'wp_letnja');

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
define('AUTH_KEY',         'JPMZ?0GGngcDD7bn{@~O<`uHC&BpOl|Xn]V0aae`kK^4 (X,J|mmJcv7K.;R0kqs');
define('SECURE_AUTH_KEY',  '[n0vvR4QwaPnpQK(<3Ap`*HT~dUzH^(  }`[!31_&6!x~c.?*azCcVtMN$d@60[s');
define('LOGGED_IN_KEY',    'BTdRt/t@i#8i|R;II4$z7)k2Gx/J:h(pF%LB.u@bTZ$jqpJ0bz,]5wo|aQMcV)Ol');
define('NONCE_KEY',        '$0@}{,R#_3aWxxrUC7U7V5/PDY!aci,Anf=vEKBpUXF>wjuYJQw8]ic$V1] Ekk(');
define('AUTH_SALT',        'ot#k+5wacS5gig$%B+3a!CRReb{_LZ&XoB&XPjg%W+ry;;+Q#[_%D f0NC@^Rr(Z');
define('SECURE_AUTH_SALT', ']**L]l{8qP4XmN(1iqNq~7R<)95_{>.])~;WqRU)a-*y`<<{gKyi`k07iD1-H~-w');
define('LOGGED_IN_SALT',   'lC:G1<}P3{!dGWH5!-l=2}UqhNI*87pDu,{yfew,E,$j2w 2qKROv]Px{sgOdrk+');
define('NONCE_SALT',       'ejGxdeZUO VQH2vB}6`HkZ1$1$-GTY V(B=bmY>:L@?f~rwhH$#? _WEH#0>rMIf');

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
