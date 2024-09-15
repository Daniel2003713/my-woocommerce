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
define( 'DB_NAME', 'learning-woocommerce' );

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
define( 'AUTH_KEY',         'RCc@7Ky}F%K`-/e%JztjYj?_bBW7L;u??qYC1eO6g9>+Db N@;b07G5X0/F1W3~)' );
define( 'SECURE_AUTH_KEY',  '?(aG{6nBD )C9(`gWH]iBuG(6M_.FI=h2D`9W]*7;V_1N?fCE+UP3`9FvD`E9LZ$' );
define( 'LOGGED_IN_KEY',    'Q{X%tI$=h^`X!]f,<@sUHlJfz KQ`U^K89:dK0c$t2[M+Buk]g%cB?U>Pz/.LWHQ' );
define( 'NONCE_KEY',        'RQg]f-=N8:9!:eX=MShCDbx;*+,|bJs:xAs mT|_}#z$o<jnR3fNE{BRsqL&[NO(' );
define( 'AUTH_SALT',        '=eD;14Ew[.<XOh;/E^1;]|W=TkAV%ZFf/d$XsgZZJH^Y:TY74+C[IjJ-CHl+qht|' );
define( 'SECURE_AUTH_SALT', 'y@D^?p&;U3?dw]JVa]$b%IXoa8OMA{qo8!3bq!F6 akwUBc;Vnf#v)[j<qbGcD`$' );
define( 'LOGGED_IN_SALT',   '-As0G $>8L6jo<3n(sKFD+EqU%w=Kv2z)%RS J9]fC4I}N.w,&}:t%ehtdoK/=@D' );
define( 'NONCE_SALT',       'y:z*g0Pz(RZKvlZ88CWCU?subh9f+(}b!+!_)w68/ 5Mi%(.fd0GKx#1_#Q&M9Ce' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_123';

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
