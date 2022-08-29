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
define( 'DB_NAME', 'downsyndrome' );

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
define( 'AUTH_KEY',         'E@x{myk=J`K&0q##Rd)5G),YGzd&]H1=j+k,^oq;=%A6&CfHXs,%cL.Ttbr*^Q%[' );
define( 'SECURE_AUTH_KEY',  '/@~no3ix[qys)WC}cu^C30UGYzL_:OjCe.A/HPLeHNnDd--yCZHA[Qi%WR]t{=c|' );
define( 'LOGGED_IN_KEY',    't$yp.8FE?A<PXUBqQ*VJGVqLS[c)m3[0f).^Co1tE)fqPm]V-f)ngq9{VOJS{ms7' );
define( 'NONCE_KEY',        'JK>DHnjO+py.F%l8+0RBQT@4m?)hENe+hS:t@aOL2NR73j0|xzaic[=5-e5d5J_E' );
define( 'AUTH_SALT',        'xe^saOgN-dF[!PJ)HQG6|D{x6ZUOe0erX(E%tH$$lC1n2UThrB!aMQ{*BIym0[2G' );
define( 'SECURE_AUTH_SALT', 'v.gzl$+wyTAj3a?bQ4igg%4U!b^91k4|1MH?IzsTd8+Dno0*[d-:dpp7>(6!+A4D' );
define( 'LOGGED_IN_SALT',   'ITkN6VH^u}.TY9OX*{q4JO`~gXM;^aJ]2A9^&ML,1]s/J.[gmk(p3L:_&jV#U09v' );
define( 'NONCE_SALT',       'ns}|8HB{LT01O 9Z/U1/uNmwH qqAR(!ELw$);AHF5!.JX4txIj-D9%v #DxzEI)' );

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
