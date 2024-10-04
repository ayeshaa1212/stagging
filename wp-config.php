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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         'x Fv5TnIUJ(#O7>~h%w2Pr4GxO2E5lm296hkT%b,6<6&UEh|~R<<gH=[AkDdxOf&' );
define( 'SECURE_AUTH_KEY',  '$Udmwts0gUQPh]n@)S`crNh5u5by?/-P<:^,89I^6z]AQ}Nur[E($HxFT?7~H]{6' );
define( 'LOGGED_IN_KEY',    'btT1MmQ`e5JjCX|~ebmi25]{zGi$@7|Z1#?miRsG;o+.}obn5a:j%0S-!cwX=x}^' );
define( 'NONCE_KEY',        'qc$l|%&D)Ee}^~Xykc&_16X%-!`a>9vU,2J@$b&Qq>~_`7!mmzCt!wyGv1T]k&aU' );
define( 'AUTH_SALT',        '11{lc((w5RYSUdT>!t2,i0<RRsM{CK4GqrP|U>?!, OLaS6x5v.k#TmAnv^(;xfh' );
define( 'SECURE_AUTH_SALT', 'T!-buN4DKRWo1MKx<x]P<yK_wKV%|wkOsQ(i.0(T*h&V8Z`q)OsY$JSd?)BRC/1)' );
define( 'LOGGED_IN_SALT',   'urQ>P21Dki/Tz3AyM>C}o9Fxs.YWcnU5YZ)E,^8}<v*vZ$duk_.UR){NgEd{)4-!' );
define( 'NONCE_SALT',       'tv=XY;7YDbh-ay$a%XNk{gF)V/oa99K91;x`;52MHoL14iP`6#]Hth)[9f`L UE,' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
