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
define('DB_NAME', 'mifammlyco_DB');

/** MySQL database username */
define('DB_USER', 'mifammlyco_USER');

/** MySQL database password */
define('DB_PASSWORD', 'mifampassword');

/** MySQL hostname */
define('DB_HOST', '81.218.83.105');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://dev.mifam.mly.co.il');

define('WP_SITEURL','http://dev.mifam.mly.co.il');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#so6Q6/0.mfm@^@nF|%Bj`YV3{bVZ{}NN?87R2Hh<O<X&]pjyWp~;#[(PR9<vua.');
define('SECURE_AUTH_KEY',  'X)<!6WqY;6HU@9JKo{3Ww3FaHJgKs6|; /:E-/s?|D^:>zROPSQ0:?>Ik5.>}S}7');
define('LOGGED_IN_KEY',    '[Ra3FJUvxO[Pjf-B6Z$Brs]B^-,@RIUf#gfk~jcMm%t[5.E7#qA_}qdI<Hewe7b<');
define('NONCE_KEY',        'P-pbvpEp,SFmQh$q~a,$B;Z8^i~)S~;@|lq^L?e(k^8>CW8gKi?TlYJ)6 OEjtl-');
define('AUTH_SALT',        '2|SEtg*5|Q.R:.c@6<)?3RDRb!6bTeafP.23@.|CO$Undv:`hv aI=IvRHpo6+X~');
define('SECURE_AUTH_SALT', 'X6&f/,#drAiQu=[Jt|]ib,O5).Q@(-Hrp)lurYOIF>/mG/cW0ZYR{w,ckp%ESE|6');
define('LOGGED_IN_SALT',   '7=aoKJw6?^pEQ7c+zVA?^)E778p!oO1V)psO.%2M=T^8]_bGM8JgCE^W2+fb-S, ');
define('NONCE_SALT',       ')9O):v^*=92/jN1i$bFfa`}-k7~N7/,|,GAc-Dux165FVDe_KV@045.trE8u-7.Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
