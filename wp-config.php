<?php
define( 'WP_CACHE', false ); // Added by WP Rocket


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
define( 'DB_NAME', 'u0345559_wp426' );

/** Database username */
define( 'DB_USER', 'u0345559_wp426' );

/** Database password */
define( 'DB_PASSWORD', 'p9S@iS69.O' );

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
define( 'AUTH_KEY',         'bo7mjqdkdet2ms3euohmjoj0iggzjsd0zorsoc3rnpf9odr2nm85yd38itdpnzdc' );
define( 'SECURE_AUTH_KEY',  'hfmdno0z1cu557efaszvwyjjgfbtba10qurlfszb80hvysujjybglufcgjf2ujof' );
define( 'LOGGED_IN_KEY',    'rkt7dwzlermcf0la7nny9ollur2ocpx3ytzw1wtakt2ye2vug5guh6vvwokokkph' );
define( 'NONCE_KEY',        '2tltaxqvdn4ed6th7ytcsfbvmw1zgfruqaneecxarehqhsfow3ztkex4i8zbdmpb' );
define( 'AUTH_SALT',        'oh2whi70bhfyqy1tmcv2rjivniiyszw3dyhjxpmzkcbvkdwntpkfhbqmgfwzxd9x' );
define( 'SECURE_AUTH_SALT', 'rpnsn1d0yzwlvtxdwwtvi32ubmwgpy50vnmbmpb14ruievtutwwmqo083ltkrx5s' );
define( 'LOGGED_IN_SALT',   'tqyaf3uysk7rzdh8ptrixsdfqoibo5jw4diruir9oggddfxlm4yw9hna23jqqonf' );
define( 'NONCE_SALT',       'j3wcn0kg28h0yraynwhnzthqduqeuv9xie1ordmp6r17s7tuwrqqyywzcoeciycu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphf_';

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
