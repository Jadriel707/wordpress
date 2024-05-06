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
define( 'AUTH_KEY',          '0CkweqV$Ov58zI}_fCfx<Nv>:m4kmB1gujIET<,8|%2}`UrW /)LQ!/D6mA<0=$c' );
define( 'SECURE_AUTH_KEY',   '7jMEF-;?1&qY/6PUhPPsg}.^3x!)Y)d,&pG]cB5:zY4j&p>2:l6IYH~mlFpzU52k' );
define( 'LOGGED_IN_KEY',     'VRx4t9-M6dBnQTO:@6Nl/l66SrkLRvo;%/4&8<9k)6~*X:qi(X>-C97Ol&J-4 L*' );
define( 'NONCE_KEY',         '9^<)+Jyc1KuFty$#4nIF4lk]I4qu|MigkEVo~Z!Id6],Z?2*W@JE8i,!e`*t^A@i' );
define( 'AUTH_SALT',         'p_v-||gOBAY 9r^hRHt7U|Qe*iO0Cs@,|j/^+E_(W:YHCCKD`rdi5G9F)eg4xI1h' );
define( 'SECURE_AUTH_SALT',  ' a8/gO-I}b7OXA_Vy#OsOG<g LJ6sOo1kxXbSv_~mJnIc6Szgn70D+=*-l%/TqtN' );
define( 'LOGGED_IN_SALT',    'S;D]0uhsnI>{U2}/FDy!w%rAF@n,>Xu_ckN*!;?0LVFES~}{Hml@}]}A^6(<ud*I' );
define( 'NONCE_SALT',        'dhLn&Omh1a>p^1Q`XZ]?x+@K AwegtX<*[EMSDi28MhVvtqQ6a=a#TuD#0p@ZR&l' );
define( 'WP_CACHE_KEY_SALT', '^/1&*.ygKs7vNBa)Yz9]2To(CQkf&8c!>V(qJofpGELTQ|0vgH)2bQY7*u}>snFn' );


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
