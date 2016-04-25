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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'student');

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
define('AUTH_KEY',         'A]Dsv7U<gcs3iBz/`!_8C&7b,Ds-o!K*# IMWhDQO|}B@s|>-^uQy|1hk:B{JI:Y');
define('SECURE_AUTH_KEY',  '`ELJ$+zXU.$0(YTi9kq:#v-6)V;_aikFNGMTE=L-|4tt1l1Ag$JI58]abBA)FMle');
define('LOGGED_IN_KEY',    '*h~sii}FbtDn#;ZXnHZ@H4yiz/8bn.)*EG<^K,*!o_OH28+p-wdJp]}-yjd%&k`^');
define('NONCE_KEY',        'x:j,]Fl|)tSz]ImV^^npurS$q,^^xqmW76Jk.?N_C6U?JEhW8k]ujD~hyprT&HH{');
define('AUTH_SALT',        'CRFxP7c1} eCu^ 5vheLFiovu(hd+3f*tKXlcziBe a~7U%3RX4eny1p]nckf.mx');
define('SECURE_AUTH_SALT', 'EP!g]c-;x%G%qG35}5hV=:.^rfnQw7k|6XD0vG`R>`EF/2+G{b)[[8SBCivoD;Wf');
define('LOGGED_IN_SALT',   '(unU3k*FXY9c 6(^9?FYLO3-?5Ta(MZSI&90w>Q!AKITz*3)hS`jw/f3D9rv~9j~');
define('NONCE_SALT',       ';yY4n-:nWl|[g*vx2;5TU}q#?3isX!U2:(O- _;mjeu#24EHMAI/4/F$FuY+}AwA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpphpkursus2016_';

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
