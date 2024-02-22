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
define( 'AUTH_KEY',          'bv@k-=g6;B gG[1CIb%ae86r49LB{;]}FhtZ8opLJ-:EWM@7.l.o^3VI*6qQ]tBn' );
define( 'SECURE_AUTH_KEY',   '7k)!#|2W:PKo??yfb7zpKDSvpwk,I*l2soWuWdF65MK_YcB7t#/_PH:/drU3X||?' );
define( 'LOGGED_IN_KEY',     'l[[]m]92pViKR[cOIXxjO@Js(Ov/?uQ;pIN)hE[3<hhJ9(SWFp|qfI^9!b->N2F3' );
define( 'NONCE_KEY',         '9lTIr9*Er(hKu,:tMbDv%Js5cylu@b=&e3,s:[&dB?K)Zspi9NL43::^IzjeGi8I' );
define( 'AUTH_SALT',         '+><:1L~K:ofDf/6p;s=j.i}Mpg/(gJ4g3d}ia2rz-e6yOtN?|$*E5%_C_.^A@D^p' );
define( 'SECURE_AUTH_SALT',  'j/hy*uGx5oxvTp*@:}D<@ub=.-p{*`YsROg3M4kqK<,_XMo*L4CWlsFG3Q10L<,S' );
define( 'LOGGED_IN_SALT',    'iNl?rKP8=W@&sa IqEyhr|f%6A!u_jag]_e_&fO,l6{VFgz_yekZ]))++1vquSH?' );
define( 'NONCE_SALT',        'I,X^f$pOE=;?zS]HD1)q^Bx}iVq~B I^utT=sZzm39SG24~cg7FOet}^Ut{`TL!I' );
define( 'WP_CACHE_KEY_SALT', 'vZX1VBr^A/}eL,{}@l^;(<Im&hf7%Ekg^,Q/0th2<A|R@3?;M!2q#IP$xjTBtn>g' );


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
