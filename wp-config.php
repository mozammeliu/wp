<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'u>3[}JuGO%vZpBw*a-:VU$67Yt[D-!Yj+,G!LzJ4}y[1sb cO{r79)x _+Nt[E||');
define('SECURE_AUTH_KEY',  'gg9G)XApUnQQ6SDB~=~(SNuxE}|J|F})jDEvW0D{]p|aTrR7-~^-PoU5kP~|.g&3');
define('LOGGED_IN_KEY',    'J#:-L`%$F[z,&QUZxASmsDwK{81Ca7Q}1Kj Rhyu9j~k.$zyOZbu25B!G@e2;dKH');
define('NONCE_KEY',        'g4CH&ixOdPDF3<];^;Gz4)j|$%|}gNC?-=1O$T+KXkmR_sMcSX$,Id%5]jH;S<z{');
define('AUTH_SALT',        '*d;hO94`0h*-i/zrM00nKp88XC+P4L2c>VXB+O9l%qq#OC~>aHtEQ-T?uE^|`va*');
define('SECURE_AUTH_SALT', '!@M.4g}~SD>R=)PK7d#K?XX~;!h2O$L?sPc0d_e:~V_vbZ=PgjNbk;wW+O^dgq|S');
define('LOGGED_IN_SALT',   'j!+~J#x{TT`vLLMT{#kt}@:6d?%=%J!PYUEDj( {K%:SR!5VY|t6a0H](Zcy[28L');
define('NONCE_SALT',       'qEp,W4_BCU/dZJecE3]%jVQ9:Q(PD^rnL4RyK`hSIs=U6, Cv3t7%srQGj%?l-V~');

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
