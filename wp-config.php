<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o.fH$FGpIc:byH(}L*W;QGVo/^p{R-#)El7T>SYv>qofBELf8itq}?}Fwe+#iFuo' );
define( 'SECURE_AUTH_KEY',  'V!,rS17t*PY,DND/e]3x8Nr+lSJqkK@878c;C^ziW fdLhv[{It]X{mlC;k5QTT{' );
define( 'LOGGED_IN_KEY',    '{;Fp~fYyHF1lWpV,n9c)D1bTuv#EvpeJ#Y6M<w@~__:A4Nja+lu!^F`,X?MLk*-/' );
define( 'NONCE_KEY',        't=&/sdZ?!+nGj|pxeWJ:<je{SC%7m{8?sA<S@VHygjNl/lz!a35;4V5E0pB<z8BK' );
define( 'AUTH_SALT',        'YgJ(OX.q:{oXtp?n.$NS6l72fk<=IxP#uC?)b2&Y#T5*IL$B=jrS]_v6.g63~K1B' );
define( 'SECURE_AUTH_SALT', 'U}w)29;=ZDXxyM0+;OC1bk9bB^]?SBvqhY3;fx*P].VyRdL([H!`k8E*C11eE#0S' );
define( 'LOGGED_IN_SALT',   '+VP2O%lVKKD7!/=MCff3)_YW{1}txhA<U]xxxL<z~zE%WUmvXNb_&eRXE|cOnY6v' );
define( 'NONCE_SALT',       'ybk*oVR_-`ikazE$k(3U~;MGm)cZr|9b3;4Ny^.5/}CQ%/rxKug[Q67jSd@>-6>1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
