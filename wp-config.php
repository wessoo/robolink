<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wessoo_robolink_');

/** MySQL database username */
define('DB_USER', 'wessoo_robolink_');

/** MySQL database password */
define('DB_PASSWORD', 'eKP9PWfV');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'YF86zRLOwLV5Bg0kYpVcmqWjqbKHVdcWIOK57JZK7yxegmVU8WyXJRyXtT2eNoYz');
define('SECURE_AUTH_KEY', '6dcVxYJXneKP4mz4khhyyUyR94o0IBCgv0L7o7mxSp4fRhe6DvwVdTqNL3ia0Hpd');
define('LOGGED_IN_KEY', '8KZRjrXS5mgFECBtTflQPCeDWSzr211fEK30LwFvIDi7cnM7fsJ5BuiowXepPjhq');
define('NONCE_KEY', 'jjKwpIfWMXy3iCpAkrENS2zmmjX1zQj3uFkkQ1NbbXRPqmFV3bIQGCHdKuqD7el1');
define('AUTH_SALT', 'gkxPKpydn4LnvCM8D0MfrAiTyLzlRVFPbaFEN6azbJyl8VWyM4bYqwsJwZBzQH6x');
define('SECURE_AUTH_SALT', '4N9VaT6ZdFyN1OAXMXI9MjhB8GErnCsUubAFFmKEvNVtri34Bp6n4swH9CVwKd3L');
define('LOGGED_IN_SALT', 'eXij8PG6et2nPvj7161gv4eF7jZeMWnmLZYJCjKQIPpaGzeqSjQo9Hz8YB1UjIIj');
define('NONCE_SALT', 'Zve6Kw4tnEJ96sDXJjqrlhc4MqPrasac1oSBOeOFwReK6DAu4B2h2bkBJVnuYzo8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
