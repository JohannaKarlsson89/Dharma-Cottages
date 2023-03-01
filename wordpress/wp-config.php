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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dharma' );

/** Database username */
define( 'DB_USER', 'dharma' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'VqJr&CJc4#=SIqEB9F96Y(To?|05_A_&[CgGRyzz^>1oV]k+<|Y=(49)8+ChI~s3' );
define( 'SECURE_AUTH_KEY',  '>`cMALXf8M@sl3~EqA=2 ?=[RZV.| *+U QDX{k<ZOU5!%ZC||+[K=&rq(-$%.X.' );
define( 'LOGGED_IN_KEY',    'IU=~1n>n$G[4V3lN*[Yr@!/>(ej%if&wVv(3Fj^ll?r&qJcJ@Pev2{;vz9zP#MMs' );
define( 'NONCE_KEY',        '05YkPR#ztL3/7o%T$syPe6w6_4{OI/GZIu X*,t@5)7^B&~t8D78!9/-`BQvF#QL' );
define( 'AUTH_SALT',        'g3g3Re:&p0z?S_5PgXB}jqF+HE7XOq#d!.kU2xo>8r&]]l[4|LY6-?uo]+/,@6!}' );
define( 'SECURE_AUTH_SALT', '%[H<xNfnA~y$w[Zq&wgd=7PRBq^-Jkdm0:kd{iW.f{rsV+nVvPO!pp=j$KO~=kNQ' );
define( 'LOGGED_IN_SALT',   '7Tird5]x*+}PJ}Z`C<TO~}h%.!xC[8wLA)f!{$6uO`0^IoM_uXRPUN$a,x]F~Je|' );
define( 'NONCE_SALT',       '=/w8*BDVu#P7Lm[mQg~:o:_fI/^b].{s]+ja=ci,Wk/5{Sn`?m5c=i`phOGw>:qr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dh_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
