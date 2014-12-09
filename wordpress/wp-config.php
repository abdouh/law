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
define('DB_NAME', 'law_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '5?|HGr|q@Ntxoojrz(w;YCRiW&|j<sZ&<2C/i}Atxm@Fn=K?(h)1#pZ_K^<s`@dt');
define('SECURE_AUTH_KEY',  'M=lOhgq|<!YL&31-W&iC3Rnldx4*2&<$AgZzk$y{0`$C8LVLCM1C6)K*CqmH? 7t');
define('LOGGED_IN_KEY',    'l^aQ[?5 -r^xATVuD=sWHR,~wL*Wt#V+|rE@8;Rg]((M[Y}yw4C:z<To+%KxADWf');
define('NONCE_KEY',        'iP!Pz`=!c-r4_zQ=Z&I-AAIu^^JMkQ_Ie(!}s+rW?Tv#=e1v$80r}7oe.zlu Nk<');
define('AUTH_SALT',        'KvYIe>R4I@{=[L&8xwh-NkUgvH%x(Adaw%IsPMIg%P_-,Q%9D!C7_B_B;n!TL|hj');
define('SECURE_AUTH_SALT', 'es0e+AgWmR382aA{O<UhZ)+$s?3xHeZ`8 Y?u|)wv7o0C`+,bD$WS+qPHgqNd[mr');
define('LOGGED_IN_SALT',   '?k#fDs<L/1ha#bGg7|l<Ch]=O)^25/C1$#%<,,,u9z=L)@PhoG#rDIc:w .;=*vu');
define('NONCE_SALT',       'X1 [-PvB14fv^e/TxF]44=b@Iuj$-HK+|BeqLtERl4SGHF]c|90/CD^S2!%)+9C+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
