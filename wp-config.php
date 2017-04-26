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
define('DB_NAME', 'clean');

/** MySQL database username */
define('DB_USER', 'erosset');

/** MySQL database password */
define('DB_PASSWORD', 'cool40cat');

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
define('AUTH_KEY',         '9hWbpi_J//V7u=PP5UQy)Lmj<wK7}0|4z>1y5h ]aW%R*C;:Y&j8rL3lEa*p1&fj');
define('SECURE_AUTH_KEY',  'x W2%]2)-]nJvy!Ow_LW~!glVM!OJ:GzHs]F8@cKJ^/2:a/Za3@boG9<1d7N%LDR');
define('LOGGED_IN_KEY',    '>?um==2cMTOGD=n=icbZx`ixO]H4{dNnEY%t>HqGdSNsJ,W`fM;l;}81NQ[H,v(#');
define('NONCE_KEY',        '&*Y[K72r2RbMkl$iP0@5/ a3nQh^^XgDrv6>yJBqteA75+A<%Jq_FAn<zzP/_yjN');
define('AUTH_SALT',        '?4)Ek6s6j(pEFJPPbu50=cFE[Z geJXhE{Xlq4)`DmA@0UO9uIt,)nSoCkJwVFtZ');
define('SECURE_AUTH_SALT', 'UA&P/Jm6[0&nF* si5dIX*/d`)#mD|MS&j-!~%0!FlGV7K 0RFAqf`#_Br<AQ>Z&');
define('LOGGED_IN_SALT',   'DmF*)|Gf}odGmYc(8`Og_+V&^.qsp)[o/0MMK<V.)r?~YL*qbE`*:el8NV1V?z-g');
define('NONCE_SALT',       'mZ<4#FPAkd|q>eVuqn5+h&2*nOiG6z8o7MOnuO;WODt{.6yPk}[BDDu{,O~)R4it');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_clean';

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
