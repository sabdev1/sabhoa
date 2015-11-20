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
define('DB_NAME', 'santa_hoa');

/** MySQL database username */
define('DB_USER', 'santa_hoa');

/** MySQL database password */
define('DB_PASSWORD', 'homealone');

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
define('AUTH_KEY',         ' 35HI2s-NXst2GiSR^OSEJxi&}M!h<x}]zxp%^[T<cyzv<}?x?QbXU#.H,P;<9|E');
define('SECURE_AUTH_KEY',  '.P3i!D@:&gC__]dV7fWx!FB{2~cc*=<l{r.zA1si+AXg`*t+)I^}4.Uu,7GA-B6h');
define('LOGGED_IN_KEY',    'e)3%Zq[Vp;& 4<~F^UNh*aSj-kHIpgG[{ea/91[{+xXLl%{=Z:C_2Zjq=F>wtgB{');
define('NONCE_KEY',        'Mbb<c<-sfj/X:%{wDmQnRqIH;vK(?F`.p]H~hGyhhlM}gGF9K!V>=k[u>|]XYv/&');
define('AUTH_SALT',        'sKc5+k#*FI/dj-pApIx++GheOp+Re_RdPeB(3.^q|Qs^z5xm?OX2p]M9Q-WJ{REX');
define('SECURE_AUTH_SALT', 'GD-I+8(={_+T$(,Zh+-wS2Q5cV)}l40wKt6jufp_CURi_#>Ygl3D~dWEbIdP*h=p');
define('LOGGED_IN_SALT',   ' =zbI7ppbLKTzr*O1ngf*W$UF`*BV-w/,24Uf-2ndQs3lhA9%r5zcc`^+>/1C3+O');
define('NONCE_SALT',       '3jS-s7ee-M}Q>RC5Yc1+ fW|MU/2p8O-qpK,^ruw1Jko~2!u]ldo|a`][xy<(<R&');

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
