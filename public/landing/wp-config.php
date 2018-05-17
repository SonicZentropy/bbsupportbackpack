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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress955417');

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
define('AUTH_KEY',         '8(7w<* 90pE{~=SW)2sd$%QZxlem0,A>G_;D3TL5qaG+i1Mrrlwl`0,Maf6SnuPW');
define('SECURE_AUTH_KEY',  '5na-wkj=+%4Dnt6|<H2cRb+;*4<%`!<L40UJ@76AcTx33*~ETUPMxz{%u^wRD32q');
define('LOGGED_IN_KEY',    'dmcBF`.on*I5$eDzycrrAJ6DK@B-^1{{! SEbm]lhE!VvN47cL/@+?kkN1zR>{9[');
define('NONCE_KEY',        '2NQWWh`?!S^g~|!e{kW41dHL]wl0PdEuy?7^E6^g_Us9fBzu5[`z]lu~;PDjY/KL');
define('AUTH_SALT',        'VxDx X|lG/]jyT]RbB@XhV3d;98=t(@T0smjI(JbZUN_Q=ZoR9ld!8`.KL7_=nl+');
define('SECURE_AUTH_SALT', 'tt9c[zQgA<v7B^NLN1|gZAm@X&p:mnw6h3-!%0PYDf4G>YGZWh:tISX/v{ez4oxm');
define('LOGGED_IN_SALT',   'zK:o5Ibo&w[x8d. u7Hb4O591Ru_>_eS6Fv%r[tL/27*[8Jx/%G=sOWz?%k1p1r*');
define('NONCE_SALT',       'C.xPW9R@_/lGf3Zx+HLYpf1(X=M$>W~6X@!&ja1.=2~]cXMc7,]-,Y<m05RQ{)~s');

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
define('FS_METHOD', 'direct');

define('WP_MEMORY_LIMIT', '64MB');
