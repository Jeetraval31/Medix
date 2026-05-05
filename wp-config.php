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
define( 'DB_NAME', 'medix' );

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
define( 'AUTH_KEY',         'beAU$H^MuW b@`p?b6/l`r]`O8K&Hl>+$:/Q<N+;A;vR^x}d>W!/W#`DR_R$-H$U' );
define( 'SECURE_AUTH_KEY',  ';=3YPfx;(jt20c05(.}=HM2JqXq{L`4q})_p=j%P>%6*W&u-|JkvEYkX8PGrYflA' );
define( 'LOGGED_IN_KEY',    '&vB/=T ;u`%Ky@GzpB.(g]4{icHfC<iAu8mHL/qHVc#_-a4NjZG)s!,;Q#sl)W;f' );
define( 'NONCE_KEY',        'Cr q|h1F5$GILz<TE[~0kG+8$q8hEkSUt|>xUu#o!c O-D!S3>+4NMu8{z8a`U3j' );
define( 'AUTH_SALT',        'tp Z]YR1Ca{4 (z,XWnRqwWXo9^M}{f_P,2 (lh @cXDUZcq]#MJGDkUiI(V;G0n' );
define( 'SECURE_AUTH_SALT', '0H/5QEBK)/JTMs}Fw-Vha=cXV6PTn*$C**Th6lsqzuqd@I!NmZN[:LJ =bn)#5.y' );
define( 'LOGGED_IN_SALT',   '  u*}5iO9X83sMtKV*ZF3atJCs$;-X[HkDFsIhcJd@&V%z,0{zE&@IPeiu~9q9XM' );
define( 'NONCE_SALT',       '|^na[DZm G<=&RxU&s=vHi^r]:MDLi.`CaZR]T*Uc|^Y6Zd@cY~faqAYpf ?(UQS' );

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
