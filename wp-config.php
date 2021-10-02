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
define( 'DB_NAME', 'rqlt0328_wp198' );

/** MySQL database username */
define( 'DB_USER', 'rqlt0328_wp198' );

/** MySQL database password */
define( 'DB_PASSWORD', '?XOU^sV@E$C*' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ocrbjblqtv5i2ifodmzofttm3moi7x8zmm309psmcbu6cxrdf7bpsqhx6uxbnwrr' );
define( 'SECURE_AUTH_KEY',  'mbgo3zwlm6iwvrjgz9hw1zayjifimbpruzmwqhtuvdwyyr8kz5i2hi9od9ykrf8z' );
define( 'LOGGED_IN_KEY',    'om4cpizsi39o6xia6zdqwkpgfhcqokci3vor0zcpvzocfiffkmtg5bauz4p5gzpe' );
define( 'NONCE_KEY',        'jweivmnkusbdjp9gyiq4ov94b1hkgkvypwjmcypszm8gliupdklfgtlpqsmkoycg' );
define( 'AUTH_SALT',        'zomkf2shl59ckyapoclzbvpd476c0caqengt8zyeszr532pkkh06qcxilymbvxow' );
define( 'SECURE_AUTH_SALT', 'dy7cavajf6zdmi9njg8xxt75c1atgqccl1jqvetvw4xiz7v0sguaxhydgyqodv0y' );
define( 'LOGGED_IN_SALT',   'unbsuz1ofmczcqnj9xriyuzuydpziqbhwd2q1vzfw8pc02cirw60l9bqeydlocwd' );
define( 'NONCE_SALT',       'gx0fxm780jehzycyh7s0nuocroewsjasoqqepj3dfom84cyfhjjcyxykm1mopqf8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpeo_';

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
