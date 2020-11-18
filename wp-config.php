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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}Q29&KAvN4*Ze!LMF9Nisl-FJG/f3}H}#/d/Xd`Z*5}GW#V3i}bKY4tw^(_Fp7Yw' );
define( 'SECURE_AUTH_KEY',  '#`Wy@0kqBRl{Rn_XDcMsN.lxsQf?%-3<R:f&Khbga(cMXxWMRW0[De,@MIhDzaNX' );
define( 'LOGGED_IN_KEY',    'DJ*Bq]}9.7h.Tq6GRaiQW6^!/1hb#GU&C_tpou/{Oz,H58|PFQBAhQ0VS1A<d3 %' );
define( 'NONCE_KEY',        'Xr!4TSwB`.*n6zajYV_vk|-9 zH-u*C-V`&WeZv@Xn?aMjUBA,?`%!E>n](t-GnI' );
define( 'AUTH_SALT',        'HuNk;5,C]18j{RN2C5>+nlE/s+gMD6KH~W2h2TBzavNelLr}%5/eEzECz36xt5`{' );
define( 'SECURE_AUTH_SALT', 'J!q2M4D3ok};!1<~||9P7gsJ|)YeW-J~)OKd&PocR>-siA#d1;$3DTV<ce@-Pl=4' );
define( 'LOGGED_IN_SALT',   'jh_qhhUM)=}?]OnmK|KIXwp?qn0od]JMW;|T|b5H}[dVd0HetY9[Yy8s/7F8A&/v' );
define( 'NONCE_SALT',       'szsNl&7P^`Nr@cKz#12g[-5[N|`Ije`x?2N [p54_/(jKU/co$u<Xm@s+P:M9!M!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
