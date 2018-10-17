<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JSEYY7lhunTwv+He+6iDMj8ke8h41W6LG6agRMPPcwOybzjSvIbVzdnqowOyzUhbmTfcKp0tM0uh41apkGyULg==');
define('SECURE_AUTH_KEY',  'FfH7T2qQm/9LIJzxu45OkNaWzP+1xru7NlZ1FqZZZDS+o5A2znan4AJF1wLM7lgzWX/PqTmDrDiX2/MF4Q2I7g==');
define('LOGGED_IN_KEY',    '7Xg24/zSZKdzoZaRq6Xc9TcEPdDROSbPf0o3VNUx9ONTIqpmfhFa8ARZaUBjxWuRORZfJfmGYP6MBC9EGp5ehw==');
define('NONCE_KEY',        'P8b5b5nbtOiwVmPFoM/IoCp3q3hmS+mo4UZeK5F3VKC7K44uQHkqxZVwhREcwOaSCl0TxmnS7iwPWaNM1PhB4A==');
define('AUTH_SALT',        'ZtiuBLLPWbjNphJeVsci9fLL23MSYYbO1vdaHJ0voXIoqfNn9lSO3OOMNnyJw49fJUV0z4WSiJsBW7WspoUR7A==');
define('SECURE_AUTH_SALT', 'bVgpqbmAUDNoKyo2oNRjOuk76qyfNPrWfvUiBMBRwHfaVqqmWt1CN/J3rt2nscugsnUeony2LTWY57eq6vs0qw==');
define('LOGGED_IN_SALT',   'nZSfgRcfSPYBn3BkaitXygG+i8nLdGxdut1FqWaby/BcFKJAHY4cOIMGfLncZRgEYI6kAqcZtb5CrXxk0VOglA==');
define('NONCE_SALT',       'tOYoDK/ihFHcpp6tvxyz9Mg78YUmeb8GqKWFYr/12uN2wUVbWCVc7gO4xqy5+Z92IpGouOoBoDfqwOdzjEsHhg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
