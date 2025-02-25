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
define( 'DB_NAME', 'livemarshalltempe' );

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
define( 'AUTH_KEY',         '1+~][fUMJ*5VKy}i||M;nv=6+:~$t-Dbo=h|q]sf7xj/@##+lUj$43)iTs>[h(82' );
define( 'SECURE_AUTH_KEY',  'B e{jtI/[N1l/(LHxZ^pLZ=C_rwVp?kp&=ATV|U.4@EEmY4Low7` ff)>GAm?L{H' );
define( 'LOGGED_IN_KEY',    'kKm%NG4AptLg8^r skL=3ppPlIC{ojyXs_tKTDoJ|P3d3$v9^O$rd@W@E8yi@(3-' );
define( 'NONCE_KEY',        'e1#&)YCx&uSGU`7;neAO[d(*,!M;RMhi5&g6`bo&x6qxR?hr 4f&U,&%Kr!ty9/v' );
define( 'AUTH_SALT',        '0<:h9AtP==wl|,/4}-X?u<26[+S suC(/lJT`];6+Js)gK|&9;G}. !1(IWGd?N[' );
define( 'SECURE_AUTH_SALT', 'q>-&j|1M5ORu-ePk1oi>5Sg% pGuxg^sFzC1{:`?![%oKq)N. *]xXk+,Xn04mlu' );
define( 'LOGGED_IN_SALT',   'Xj}0qpm.`hN(o 7mXWBPHH9falT`1bwH]0-Y)p(j$cG]XO{>`!!J|P_=*;:6N]X^' );
define( 'NONCE_SALT',       'Lf$EE~NZt7RzAimKF%~3m^J-2r*MRrv0oDOk.Y~PQ.#QS-<a:=NG`m`bM0Wk_;qW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_lmst1';

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
