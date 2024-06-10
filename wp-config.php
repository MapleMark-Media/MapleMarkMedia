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
define( 'DB_NAME', 'maplemark_db' );

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
define( 'AUTH_KEY',         '`KN JGvju@PP {aTbOP,!KgyKNPSrRh4g8WZ+},jFrUw~4clmWk(Bq/g|cm&&|8B' );
define( 'SECURE_AUTH_KEY',  'Wp20Qi}|pgVn ;g+otY_jn;7>q%uI;GJhh{o10D6kNwX@<_47&@0D$Ub7.xH?d =' );
define( 'LOGGED_IN_KEY',    '@DN]enRLWAr9a47BM];-*Xy9GbVmrlEEuVx72W,2/,+}(.s}y846 |f$!m2-6QC|' );
define( 'NONCE_KEY',        '{o1JlQbob{*#^aih&mRVXD$<&CDkt8i#W&H_{?`vBFcXi[Q}R J2@Cwi-=IUaVP2' );
define( 'AUTH_SALT',        '7]AY%[~wrP1?>hz:I?wvy=X+dU}Ez3gdnLW-~*o=1XRw:;rR]N.( $X4=yrT|v4[' );
define( 'SECURE_AUTH_SALT', '@BvsL4idy1)-JeLf;n_KC p0_5-o{>GjX, <c[eK)y{^5aRET|oq`NQU/h5<^23N' );
define( 'LOGGED_IN_SALT',   '/QV:A+XcTJ`4BpJ|.-a*c@fY}?C<WgVwwD;hT+@l9VDdW9v486TV]L.zn:q{qZ)`' );
define( 'NONCE_SALT',       '_Y+|YNTQ}W$0h<.sy|g~xn[hy@C>pjE(V9Ah kQVJ.}nWRC|3_Gu(3VSmW_=&Jdk' );

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
