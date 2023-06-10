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
define( 'DB_NAME', 'logipooldb' );

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
define( 'AUTH_KEY',         '/u1j5*__H2AehsD{/c,L>Y.14l-hiHhlk=Sb}<lhrOF;-W`uiqnJMqqEHf9yfk5`' );
define( 'SECURE_AUTH_KEY',  'w;0r]Zvz(;~3X_HJwV@6*b.0S~t&Lkwn7/U7>s<zsB`u-c+T|2ThEe2jo#5?0v%C' );
define( 'LOGGED_IN_KEY',    '>g]d5MOl@1NaP;=U]9Yh.sa[*CYZKklGwzKb5bP@A+V<GaUBzyt AY#X^Xz<>/8f' );
define( 'NONCE_KEY',        'L3q,<3#unJwVN (NuN 3CJ9=Ik~<S[H00tF~ mDf<}33YDs5L@7,G<$^;VYfkg/3' );
define( 'AUTH_SALT',        'O_&TT`0exQt$b??BLp?x_%Zhfcj9ckzo=kG4#jd.ngI>vc#B`Yfk$XARL;E%A*}j' );
define( 'SECURE_AUTH_SALT', 'uhtgjlo=,9nbg5J;D.@@.Gqf>-etCPq h>P6&gHmWF-[M_9`SCD2FE8dWsn@/k>W' );
define( 'LOGGED_IN_SALT',   '3pK#^(;c#44OZ/}N}C(+t?YU4~GKuzN-$%4H??ew?Y!xJB]Ahbo%cqFu/~<.Eeh0' );
define( 'NONCE_SALT',       'e&m[XsJxj<i|>_,P!IRkqjJmNJ5l={ TYf%ri,^dZl(JH!Q/gy-}wbcY,0t,>EiI' );

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
