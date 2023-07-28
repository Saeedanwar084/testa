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
define( 'DB_NAME', 'moordigitalbank' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>e5n]<QUjXjs.7Ao0>nM`[b`p9X7(TANWY.TL3P`dh-x`}=,Z9NXO)y:+g4Awag3' );
define( 'SECURE_AUTH_KEY',  'H+Fd}r+i3P m1{OIB=Wx$;>rrL#3wS8LHXV:{Ur{rrRvU5BpzQn@=3iUwS%!} ]i' );
define( 'LOGGED_IN_KEY',    'BSEf6W%nH4,$GG^pf]a<m#&x7qyn+T(_ouH_)#!8PUMaP^{QOyr{;xZ/BQ9x:8-0' );
define( 'NONCE_KEY',        '<WV+zdo.xMcUmrHR.|t6Os<[nAl!|h(9B$OXhf|kiy-b4&.s|b=9n6R=umTi7}*7' );
define( 'AUTH_SALT',        '(4/O^fucm Ooq4n9k!s|.W[Xr>akHya;#9qViDk^Qpw2Pjgt3lH ):E [oF%9kX3' );
define( 'SECURE_AUTH_SALT', '9=5_!p{(oJmU$d$C)-1WipDcNn5]@(bbSf9qS)/1cOc:l#|]bwu.kvx|wN}Suzcl' );
define( 'LOGGED_IN_SALT',   'a+hdTF:#>E:uo;ueyZ<sk>e.c=,pz3%LVz-N/ZuJ@!9]x}<MK m*MF%,%`Jx4=Vr' );
define( 'NONCE_SALT',       'i;n!@/$Xz.>S)*5:0(|M/J~Zr2QO*? 6$SrFD{s g~,- DLoMu3@(zAGs@XD3ee|' );

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
