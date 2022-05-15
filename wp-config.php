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
define( 'DB_NAME', 'custom-types-and-taxonomies' );

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
define( 'AUTH_KEY',         'x*,4YM1ST*uVHZ*<4d UW+{=(wyLZ.:_F=^wZHOFw%zn<`,I_^.|ze92}WYx-]lD' );
define( 'SECURE_AUTH_KEY',  'Jc,Fxn]cl4{|cyIbVgSyde iTG$FgikFoH3^1z)FP,A<0Tt8,Iox?5w*8)`_I O ' );
define( 'LOGGED_IN_KEY',    'W*9eeX%4xS+^OHUn6-&;v:p:1?4JJ.cT_z$/:}]hX;~ZG2(pn~>85&^3BeOE=%/}' );
define( 'NONCE_KEY',        '6,M2m({/y~)B?PjJU:Mf:p&Iwl1l1qmKPcDO|b~)/~z0ba1DT_Rcr][&7fSnKgG{' );
define( 'AUTH_SALT',        'KcF+EiG,Za]pd/W2eP?MY|mc!b+-t3}(8{j-Ti,,?=V+mX4gybIh~!0_.2heYpVu' );
define( 'SECURE_AUTH_SALT', 'sh6247%pQYm0mc49.e/B<=n[Nw4Ek_9Q>|S:s#~H|I%^9?=Cm=2m;N:SVLEqmISy' );
define( 'LOGGED_IN_SALT',   'Yb KIG:xoL6=n(Iwwlp![xO^_G_;7e:}BV1zr= NJa7L32h#4%.ctW;h,B5_l=ZL' );
define( 'NONCE_SALT',       '5/X>PxyrEd$1,GC=f4?vNsfSE*`Y?:mkiu&kmbc~)cWSkHof6zk4#($K&JsklIr2' );

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
