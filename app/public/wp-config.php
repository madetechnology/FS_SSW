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


define('AUTH_KEY',         'GVp3G1+KbRDDnGWZ2iSFwbm5RsVcuTsqZhzW5/zpdL/OQJtVuG9kDdFWs5fiCASayjl685qRxDH82FfIx3YCvg==');
define('SECURE_AUTH_KEY',  'q5eQLbntdz1tPUgJUNieL4rQm+Zo7adU4OmrtYGGqkuupAgN+pX94gti5SFgOtIYWL7nxX5pMI5JiJQTF3zkBQ==');
define('LOGGED_IN_KEY',    'upFdwd+QH7MpVE9+3iMs2W1lravjBxmcM9t2kllqT7gamdP3yHU3DpwwH4BjJ84C/TKnDsugAljj952mgxYMeg==');
define('NONCE_KEY',        'emEljoLN1g3wVUJnXIZfMEQ8GzxaYnvx3qDvapOg3NB0TSnBFbeIIeJE2UsM9JKuq70KHWGYOjQogPTNXn9YLw==');
define('AUTH_SALT',        'xRVoEMpCzN9ua94LW/xbb/JdzSbXk8bQLoeRHy/wniFEOm9o7gn/0z9jgX9qHNp5cfnbvR+xVdFF6LgXKmR6Cw==');
define('SECURE_AUTH_SALT', '2fG2mNI1BkCG1DFtY3PGkuNgO1+I7iyx+4Xyni6bEbmW5QkkGSdNRKnUrWl2aNbo3RFLYWh7y75KHgl7esQpjg==');
define('LOGGED_IN_SALT',   'DtY75eLnObMVlbeBpwp/WKHU+ijeSAG7ozvy27GExVse3xzYiPhisE10AHV5IHe5sEsySk6U1sYN5wAOSWHSRg==');
define('NONCE_SALT',       'PBs57HAj2gDJUr4qPfj5wqCRs6UgRH7eQD/hc7pyXhoqR5KtQ81ytNIokTecgpzf9oixUNklfBRNHrOMB1ouzQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
