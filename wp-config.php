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
define( 'DB_NAME', 'nakedart.cloud' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'iX=H=?fTmbYN8T>*>Q>3X#!XJVA1L2wxAvMAI8m:@C<_wXqhcEsZrYNE`2DE8--T' );
define( 'SECURE_AUTH_KEY',  '/OIK=u=(<[l8OZJ=|upQ[SSL~`^2WsiXEZWZIzrf,`9@eAd%$3vXS($&|<f.De;/' );
define( 'LOGGED_IN_KEY',    '@JE)@R/nL.D:o-Gu(/S<t3Fl+8Vz4-}/Rvpgw`*#t9gcG2$76+I4OYuocgJ<M>Lw' );
define( 'NONCE_KEY',        '2qUhlX;RBA7N{iTVM$z/ ^E uAbFCayH9q:a0:IoN32j,F[4tvG_6-99t<|WeJ)u' );
define( 'AUTH_SALT',        'YD9G?4,d(m55,{D[df&/g>:T.J8L7}`L?StOG)]0q{@HMsD+uV?H5[oi>f+OCd!v' );
define( 'SECURE_AUTH_SALT', 'd6K]S)|GF|cEetb|KH?[?Iet2z:N> Tu$Irpma;hJKSii@w`u9YsT<Czf5zX]SHa' );
define( 'LOGGED_IN_SALT',   '|P~WmRS^w)b3=E+oLR^zAue5Nul<uKG`q20O>5+YIaMAWq!o)~zRsAAK*@nXk|3;' );
define( 'NONCE_SALT',       '$~luwh[s+G4C]42n[eKfX 9HrCgYlj9[a@@Qcm&4:.1&AcvG8jZs5j9f^7&b&-FH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_nakedart_cloud_';

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
