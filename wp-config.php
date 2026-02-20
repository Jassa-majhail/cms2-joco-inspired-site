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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'i<kx:f9;05*M*V0<A8p=~X|xIMVF!<0xP.C_NfZnJ/K0y[QvDHaWjJ19aethuQf+' );
define( 'SECURE_AUTH_KEY',   '`1B Tk%AYTD(2q`uJBT^Mkg&=T:I^aBzOk|3CsMEy~i*BAD8o?y6>.u):S3aS:-8' );
define( 'LOGGED_IN_KEY',     '5P`x(v8s0]sM3UA0l+h6L(}Pi&3+, qa`.Mj+oVWzZ+Htb.jTa|@/$sg;un+Ds$U' );
define( 'NONCE_KEY',         'gFgG_$Rme{9ds6H,B~*:PZ/4:l]f,6K13vytY[So&!;o[h<-c++#?}n<.i*w<V!1' );
define( 'AUTH_SALT',         'kQeQw-7hEobHJ>`gf7EtbO3c3Lj1h n4c2UxoJRHUoryTrr64<^|67U4Cx{=oT]f' );
define( 'SECURE_AUTH_SALT',  '(3R_F-,`y=)?{O}*2L_O@vV!c:jIeDzot8yh VE-,IOxAz2PjW3^%^ILV:Q^Tz~Q' );
define( 'LOGGED_IN_SALT',    'hp85gPn@vDHXWHE3;d},L{I>Y0KJk@)Sjjiag#3S`>,k3wuK&qtq-n`Qa&;y>$A)' );
define( 'NONCE_SALT',        'rv.l-LUyw{+N:;qhf]8Bggf6^W}VzYB7LZ{!.JpkFkc;eJmoO9oDT24rrL3KK8,b' );
define( 'WP_CACHE_KEY_SALT', 'b(I.yP*<t9-,I`D}LOtRi{%C[,mZ?6w?5i8:h0x%33hYwKM-Qbmd^pm(6e^)nU[<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Disable File Edit */
define( 'DISALLOW_FILE_EDIT', true );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
