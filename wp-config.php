<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cliqueweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '}`Y..[OM`L@7JsGCeScukBQZt;v9wk^,EU~5YtWT7/-,Fj%V90E=oN)&w[{S0o[ ');
define('SECURE_AUTH_KEY',  '/`T(x^TL(G65*mu5wphLpKSkKck#Y0`!*3&=Npra69`-yL%q/*MH=N+!I&4mjuuI');
define('LOGGED_IN_KEY',    'R6aCz(_EUM|{;j37 ZwQnHs:eS<G3=[0Tu*|kWv!M!%9<,bj9[tQyn(CEHU/]=+:');
define('NONCE_KEY',        '1n4~Ma1{G2GtwgYFo}LhMk#`p#E+2UYG{BrnBHZzJlajqU!G{;J;4t6ikdsgCXpO');
define('AUTH_SALT',        'S^:a`0fp|HF%dB]{3Kf(Ecfz:@Ggz-mv7^Wq 9t[!w5iZco$w9u}MWT8m;%ho> `');
define('SECURE_AUTH_SALT', 'MHP6{l}LH;-?dY+%Ja5<;SPf;4Cf}T#7&{q3?/Ve9FLLDfj- <BwPBBKxEfDI;Uz');
define('LOGGED_IN_SALT',   'V.O}r-8(g8E!=wuX1Bpx[/&jJD0]b,bs]xWPU`AH))K}wS4rpf@<(.d,oI-`o6xY');
define('NONCE_SALT',       'D{:rEu*|/^E;4r9mx/ik[va*HOQx Gc>L[6GgS!rdja92g-Z%e7!L.]}>s@+nFl<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', 'pt_BR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
