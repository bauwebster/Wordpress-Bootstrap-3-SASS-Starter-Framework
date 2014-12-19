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
define('DB_NAME', 'wrdbootsass_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'wkz+[^UPgy{L$a)O2&3sMVsAz[ Nr[:oFz?!r:E.$ZRFc39A3d3ae8<ase$pb}6W');
define('SECURE_AUTH_KEY',  ';4|3<A?LzQmm`%}] QBX G8huoAv%]3|?-x2@cuEoLu*3PEN4a8-a)t Np_Cj+-9');
define('LOGGED_IN_KEY',    ']:5S/K?tp~V_vHK<RXwZ+~`>]P4+IPQBNDe[N+Q[5~|lc9uM74.DD6f;#T|`L[{4');
define('NONCE_KEY',        'nA7)-WJ,u,X$aNWK>BK6#AbB-4%Oy-M/AI 7,*/J?o|UbuTIWE0vU#WVja{q<E5Y');
define('AUTH_SALT',        'ZJ(+V+a:WK*p1#SH^wB3S.{1js)VzMF LK8$KUmA_U&D,v~U-igZ,rIHlmYE2Ztw');
define('SECURE_AUTH_SALT', ';B6/Osl$Y(Nh]mG1ca#3(.|s#k/w2G_MYzy|vpRzvRdo,`FNd~(K5+H294UjCCaw');
define('LOGGED_IN_SALT',   '+y~!2HCpE%/rDFl5+mH 4Z;!?_m)W  nliw=eE84&ahOWEMafjGLlTHw%[1r>B+t');
define('NONCE_SALT',       '~`#}c4| G19iA*r^eN(GDH12*jGpcgw^;_,:ta:r4JTYm)XIy^?NbNq@*|t_+[s+');

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
define('WP_DEBUG', true);

define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
