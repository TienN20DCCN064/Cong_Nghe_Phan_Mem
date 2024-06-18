<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'fashionshopcnpm' );

/** Database username */
define( 'DB_USER', 'sa' );

/** Database password */
define( 'DB_PASSWORD', '1' );

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
define( 'AUTH_KEY',         'X<b+5oHQ*}]I}SCo3`X<E:3{AdG;5*H]UfdmQnRg/Q %v]#Ax//pQ*d.- 0=E@J3' );
define( 'SECURE_AUTH_KEY',  '.qbZy_^T=ggTzDt6n5k,KLu0.ou=9CrK._UT};sR6:NwQU^B)}]LJ{:Im%ES Qr(' );
define( 'LOGGED_IN_KEY',    'OV!e>ny<$.8X92o_pOt0},B&k=sE-xm=YfZ/L*X?Q,ncT>rJlG{Rkd,kz+vi2KI!' );
define( 'NONCE_KEY',        '~Zva-a-;[jI?zndA%Riar5LffWpDZ~VLW@+U($m;`y.xk.MToM!UpXL9u%NhN[z5' );
define( 'AUTH_SALT',        'vdV>rKZ,QWIFBj/EpILbQxtcKJ&Ajscq?T9$!hJCcb%a;1am*[J8G0,(5w<=TOes' );
define( 'SECURE_AUTH_SALT', 'QN/686JE)A_*x[DT9>kOh:iF0=dXUT^Fj`OgYr_Z@oTgI+R%0Gv;LI*ZRXv|]aw`' );
define( 'LOGGED_IN_SALT',   '$NtN&a%LTdKfV^PaHPt&3|aRO?Q&?h#&el:fo^m%!B+Em,yo`tm$lXl<hnQ93K=]' );
define( 'NONCE_SALT',       'AW&AEI:($QnOfwMhh~i$Sy%kpz+c qd!s(>DIg%q|L6qvLoBT0)$j;U#d]l!9YiR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
