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
define('DB_NAME', 'wp_db');

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
define('AUTH_KEY',         'OHK0|0Ow3vMgH!&*]_E|sE4w(|O]|+V+OClV[P)6+|pL^]74{>vooY^kOjF)dR-,');
define('SECURE_AUTH_KEY',  '9(gD-N3h(2dzW5rl0Fx7</cLnFrYCIOm.uY`{8n+~dqdS-4<[b3sUBN@kp*$4e/R');
define('LOGGED_IN_KEY',    'SGBG+*SI{cu7loK+VH.Sm}0d Vfb?sTc{96]}cbHe8eXN5;0,CkqQRl<h!ORx-;R');
define('NONCE_KEY',        'qrjHd-PGA0w}!iX=2,N0q:.Zi(|+4()m#%4gs`_1uDjmCL#E<8$(KdxyLf)lu,i6');
define('AUTH_SALT',        'T*nor~G+oTRC/z|8U$QZjPr |~pAy<`S<98#kgI|B1e67v~#U!MM0!_y=6=SzJ$8');
define('SECURE_AUTH_SALT', '4LE~ZNYZ|w|uNCrZ,Ag_j)gNdJ@5x}{G?u+s;_-gXkd1 ?YT607tW6g))KPH=_U,');
define('LOGGED_IN_SALT',   'BlTI-{#a~++8b5)tsC9lBg]7HVSb<Q4y!KQc|-r+jPQ`eClWB/Xtpz,(D?=lN+Bv');
define('NONCE_SALT',       'BG?Ew}uurIO|FgTe`JjsSH>nzSy;_s3V~hs4`g9I3UV)&g|M@TU:LWk]u&~N32P>');

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
