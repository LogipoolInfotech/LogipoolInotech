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
define( 'AUTH_KEY',         '_Q}0>%{_TSFiqlHQ^3E3oilODMyXEJdCE,Dy^4sUdIsZMfpoR7Nv&%]xsd(.w}/A' );
define( 'SECURE_AUTH_KEY',  'Toqd(!UIs?z6Gcj>a%OFQLMQ)H,h(76sS=L2c7cCXX@!XqWQGYdqM.Ig$t0Bz)u7' );
define( 'LOGGED_IN_KEY',    '~gRR #}Y`~zB5TrK(B`KwQ]+p(d6b-2??#CW0?~C/}YT]t5h 7WE+}tu0!2Lpj4y' );
define( 'NONCE_KEY',        '=##Z`h;^@3(B8yGP/ju5&T}V9G{NtI_8=QjVK {@[eih(&%whJ&z:]20..a@hC]h' );
define( 'AUTH_SALT',        '$s+~X&YzSD=n8}Dfro/&xa-,[[qz:8:(M)BmI]~ev=y{7Inbx}bDRWZ]B;;Tn(]l' );
define( 'SECURE_AUTH_SALT', 'gc=KRNM-^Y=^G<L9I7ygSbg_NVdqD1&<id7>8G9Zau`LJw#>}_tZ2V;)(Ao>6cMj' );
define( 'LOGGED_IN_SALT',   'D9o%_zL$qEObHydZ9f_IQ<9L&}-{FijqC!<Ju59Inh+:4hA}](7z3o!(2l`$2H<:' );
define( 'NONCE_SALT',       'CHif9;]Die,lHt[IT usXV5@!*dHr;+dwah^GgH45$v4_kM~0<]i&ZODXhAvyBo8' );

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
