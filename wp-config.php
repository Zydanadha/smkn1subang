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
define( 'DB_NAME', 'smkn1subang' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'aVdsGHgnnVQC0JqXzyY9tpUBP84iVZNdcUSxbxEDWsIng7ddT6agE0KkONmfvoPE' );
define( 'SECURE_AUTH_KEY',  'eJe0KhX4ElxvjA7AMwCT9FzKusOS01ldIIBQOXwoJ5yfxfdi3oPqNFRKbBI32LPr' );
define( 'LOGGED_IN_KEY',    'zmyJ9yhqhE5zsqsWM79u5T2qCVF6VnP7jiBf3EAEkB6qzRYWCO5gCD6ldMb6Pfdz' );
define( 'NONCE_KEY',        'hWX0iBJjyPiMQSCLczhwLBxnK3Se9bkHRH3R1CZmWqRsBEf3sp7OoXycb05CSofe' );
define( 'AUTH_SALT',        'ZwnAsDbcO1xZekLBB2ryrk4kT07olZPiq7usYzn4yfDtDqx8h28l0h230wX0VxhU' );
define( 'SECURE_AUTH_SALT', 'TxUagRICH9yIA6RdiUcYkjf2GH2uLwY4eSDEF8KC7MREPk26JxhwdaBGKFJ98Tge' );
define( 'LOGGED_IN_SALT',   '3h2PLFWcqvRkpCLKr6N2KeQlu60hQEa1MCsZOi2SP2AY3iCHGd9UVaKP1V81Kj4N' );
define( 'NONCE_SALT',       'wSus2EABorFYAktuvlDBkQaCjc5oWiopGJP2AVpcFicgJoZk2zegVoPQzlx5c56L' );

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
