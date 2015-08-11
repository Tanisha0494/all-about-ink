<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
if($_SERVER['HTTP_HOST'] == 'localhost'){

define('DB_NAME', 'tr_allabti');

/** MySQL database username */
define('DB_USER', 'tr_allaiuser');

/** MySQL database password */
define('DB_PASSWORD', 'a3dNSt95ByttVMz3');

define('WP_DEBUG', true);
}

else{

define('DB_NAME', 'trose04_allabti');

/** MySQL database username */
define('DB_USER', 'trose04_aaiuser');

/** MySQL database password */
define('DB_PASSWORD', '{Bedv;tH7I.p');

define('WP_DEBUG', false);

}

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
define('AUTH_KEY',         '#b^UAr$o=eA-X^~b=%>s;]h-0frWuE`b085_DhKk6~@#+r+f)1zBk.+W{Or?DO!J');
define('SECURE_AUTH_KEY',  'RT5K16aH5|FvKP|1>!;Ys#1Vb&+2JoX%+[!@K$[;[f+ ;+|T@]Lv4l0inz,`t/+X');
define('LOGGED_IN_KEY',    'i|.a;4-ofK7ygpjxntJy8iI|DE[W6GMu{!!&X,Th,!|-oyoqXV|;DPK+_Hu*}X8j');
define('NONCE_KEY',        'D{>XxP!58E`A6dLr9Hz/@XayF&o%S*98,zm%ig56Y}eM|,L5D~|@0+JN7kZ]<Vrj');
define('AUTH_SALT',        'vyRQYM:o^r]$M+{arW9;NG+cOWRELJ~Kd-@<+f1e[2/p_||tL5h~jwK}dF12_LKM');
define('SECURE_AUTH_SALT', 'P1`|9j9!F(qN%Be lEQpNx{*!Qs_R#CqF)Y1E}S^~v|o3>ob0-]yV{*Q}?U=fQ_Y');
define('LOGGED_IN_SALT',   'XGUwlHgAic7+I2e*yEXLXFA9WXz|,o l=y0_Btc-E|8zC%D4<>R%#,wW-}TubMW9');
define('NONCE_SALT',       'o03B vX-j~Z@;$}qPo[{3a) 21c=0_Ep!|aNsLz&Gn@]j|l7dk*M7Tv#pZ~K+F5W');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aai_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');