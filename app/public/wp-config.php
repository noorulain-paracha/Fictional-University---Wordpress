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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'n+WVF4CUDncw2WWLel09yCzLsVAYx6kZjF6FYkiY2fot/UkKYTHsYGxttPxV23c/Ay1X0dkvQ6IT8NyNHcdkwA==');
define('SECURE_AUTH_KEY',  'fwOz/Rgx2vtD6xPn3bOq05L+ZHOFQf0q5LiZyeO6KIrKu7f0IeasruRAg99weHLdrr7KiejC7VQoDkST674PNQ==');
define('LOGGED_IN_KEY',    'wvBd9r/PWz1lvOME/xrVMfM1kuih2mjmZt68CVFDHW3ujt55QJdEiC7KOrlVdKKo7VCnlR6IH4LhXWIfBalS9w==');
define('NONCE_KEY',        'vxvkk3nbYmX1iqkNeKwLYhWCivhZTO1CJ9RzwI0H0b1Eo/vT8kLs7oBnKjy8dOiyhoQFFbMv3XI3XS/T6d0iRQ==');
define('AUTH_SALT',        'gKx4ykbNFcGA+fNissueAuHmvdHAsgl66yN6/0DLWz2RlufH3cRwZvANOHPya9IBRJsG2sYEVWCOigiEiPndIQ==');
define('SECURE_AUTH_SALT', 'kgUuJPOewgNJm+n+bnJBSipSw8op0SzC2BU69/BBc1zkkuOoJn7BTnXUEb0brFEpyMgUbauI37BxhuqTrm8ESA==');
define('LOGGED_IN_SALT',   'KSsgmng2hA6GD+xf7Rz5d/Fc5x4Od5CHIzdsD48rbIEvhmDZuFtqjv2EcCEHr4RMTx2yhdlK5QN3R4wGmADRzw==');
define('NONCE_SALT',       'd18JhzTleo+YCja6ek/Y1f5CaHAQpzzoo9izAOlbEJSvxMPFxXoYuG85mZjeDDYv7v+0HAxtySMQDt4kx9NmQQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
