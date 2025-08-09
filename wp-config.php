<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'ckyapimdemo_wp105' );

/** Database username */
define( 'DB_USER', 'ckyapimdemo_wp105' );

/** Database password */
define( 'DB_PASSWORD', 'p37SO)K[39' );

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
define( 'AUTH_KEY',         'usegdir0olkckwcpkmyfthxabymvb6cqdfepimypnygdy9pd106ktqtvrj27sglh' );
define( 'SECURE_AUTH_KEY',  'bjkqi39garnjrzrhwppwkp9ol8kqh5kcjprd8byqq7iw019aqb6ekuyyoecpyaqj' );
define( 'LOGGED_IN_KEY',    'dbytbmxsnkfm39pfe1sdsazcgqn6dx8yphcfsdcoyt8vvlgqn3jyfx0ni1erldjs' );
define( 'NONCE_KEY',        '1k1dfwlb0rgwjjodheazjgjz50ssutfvrczq0ez2pgcpy9y5z7d85itnax6hgrhh' );
define( 'AUTH_SALT',        'nkcvctukqgudkgzr0vxonlr2nnzq2txzspankglotu3uldzzbnpnsnfruw18qqxb' );
define( 'SECURE_AUTH_SALT', 'q9tchvzhj5vh4lri04ejh4clrkhdlchqijajxpgmhegbn1uxwoxqbbauuwayic83' );
define( 'LOGGED_IN_SALT',   'jwffrfrxiwfyt4kcehxhtqzvjmrmvrqldwvicuvwdyo8tovzqx5a9m83z1zfmapb' );
define( 'NONCE_SALT',       'drqae7qlnoqvm2robykkffvve9hcumnfgeovlot75e6kclgeirjzpcfdasv8hpv4' );

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
$table_prefix = 'wp4l_';

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
