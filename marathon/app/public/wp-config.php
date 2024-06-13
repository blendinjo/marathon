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
define( 'AUTH_KEY',          '}d9HkRS9%ZkTKxMmrJK1#/cEP4CX{2%V[Y6KNBrP;S-r(JES^=W6=s@s Cu>P}s$' );
define( 'SECURE_AUTH_KEY',   'Gt7-$1ZY2`!QA bvDBKlRlQ`st)WfOk-X5WiBQr0@+7c,0#6Myw.4Q9MKJ~Hu6e,' );
define( 'LOGGED_IN_KEY',     'N9QNr):{[AJ|qJ*xC|!`sQ*lVGcEE*XP]>;FC}75WRD.u&:Li7F[b#}g4Sktdg5m' );
define( 'NONCE_KEY',         'F2Ko1yCm>s_fNN yjaUf{,Ck8@ezMU*|!B<w.>+:d V&^^=2jHz,6Y5xi{Isq;A%' );
define( 'AUTH_SALT',         '+Jb&?;{bV;pAQm@rGs`d8Ta~LPJZpziykdul*`S~ZI{lja7?o~3[`BeHqixF4zA7' );
define( 'SECURE_AUTH_SALT',  'B?:x/h5w,otz*2>oOD=W2~eSlwn!QT|J{2H11aK3RYrd]h/Tn:uUdrfEc>b13X!h' );
define( 'LOGGED_IN_SALT',    ',norPFKnhKCV?FUG>YP6v<M3)gAA{1nUZn|qif.nol``cS]+#NuS,l_ER;vUje2R' );
define( 'NONCE_SALT',        '.wP0;-G4pXRkwr:bk`n#+#49a!kpp!lTmjY j >Y$,(k/]]2LS5}%oWh RA`+(@ ' );
define( 'WP_CACHE_KEY_SALT', '`LLb[d;4f&D&.Dk*Q=8QY7C@GB-o7X[/X:8Y%HT5k<N/J&G*&Q/ `TO<?KfPMGoU' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
