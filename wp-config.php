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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u728345844_shades_wp' );

/** Database username */
define( 'DB_USER', 'u728345844_shades_wp' );

/** Database password */
define( 'DB_PASSWORD', 'wB#XzQXuCKo8' );

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
define( 'AUTH_KEY',         '.a,?xfVz/%%thvk%s8&CppSh7%KNd*yL;e}3u]aKigm$1-SL/R1) Tq<20`@Euq(' );
define( 'SECURE_AUTH_KEY',  '54)_6RqWZlRBu%/)M*,6f*AxYC7,alGdSENl{B6-dnpgH_Z*eg6eo[o7{{*m[Yvk' );
define( 'LOGGED_IN_KEY',    'N:#=m,vh-Je0H`gVIzIAG6)>4m1=:W[v$bvHN`,8RC~xLL:9=aUu0owNNPFAJnuj' );
define( 'NONCE_KEY',        'z`LMY?j Ve+Iog?#]ed4uDc-r6:FnJ,eKrA9CHlj-m&p=7<LeFLu_Zn)&8^{$EK<' );
define( 'AUTH_SALT',        'ptyS4E 2nXXR9RiXn<$ESGHz;cQc=GZ`^RqG$nL+wDE=[IA~ op9:4`8v=b(F^jS' );
define( 'SECURE_AUTH_SALT', '<rEaL3zAg9ZPv|8>Bz!e<v,-|.k/`:>A)v{<s [3#rVau:duw)^JAhETd-_#g;TP' );
define( 'LOGGED_IN_SALT',   'Z;JOk%P6<7E>:EgMz*fu58JxA#&{]m^! FKy!x%w```H*WkN34smIOa!#p;z8 TV' );
define( 'NONCE_SALT',       'P7z=Rx`~<fL *L&>YqfOJ(<(Fi/d=W4_ato@rg?{Ua+xH(/Ma]xegpa/zsL<Z]b+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
