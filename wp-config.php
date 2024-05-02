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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'samrat123' );

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
define( 'AUTH_KEY',         '&HX$:4!Hco#xe? C?k`fv{),VZ@hFRFIWN1?NlL3^CbdFL>*BUO8g=5@lNsz@S<.' );
define( 'SECURE_AUTH_KEY',  '>MPWc&H{OipyZt0=rs8]pC:A*0H zeF$>,<%kL<,a-E TD#?Mcf+lLhnV9UDAmiw' );
define( 'LOGGED_IN_KEY',    'Ul@5;$:5kiI,U-u`?LJe1--UEHiH21<19I(xmvmj/=JOI>Z[UJ~L?u?P@LA1RW7/' );
define( 'NONCE_KEY',        ')9a$Vhbje!l!|TC?YA%`|1;G|QM7>A2-/pNLgQ @Z0=!|a7Jl+EkI{7#>Xvqtm)r' );
define( 'AUTH_SALT',        '$,DO{-,|]Hnr{DjxlifeT^8.M D3~@/quP9IU! 4I]B/k4H}lY7rWO3R]j 0Z.!R' );
define( 'SECURE_AUTH_SALT', 'G&zSVu9<,Ab_$v}[vzAp]nCh=Z< j3{>#|;,mz5}(W6~>+sg%jR<z47 !?9)kI*!' );
define( 'LOGGED_IN_SALT',   'U,kY9^WYL`2:}yKgxW2%TR26^TQm4Rp3pXk2Sk?S3|^BC%9{,qnbn*c3fM6qUk=y' );
define( 'NONCE_SALT',       'qk5|$t_*^WHF68A89T-5P4$&D8D{ zll,u`xsn|eWDw%-C8,xL%}X^rLEw*g,]@M' );

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
