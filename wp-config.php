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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '8;CHd~7q>HLTFhnJpPxu^]9R^VlW)AS$-y6t-WL@`G.Q>gbqcd=45-L=m+9ITm6x' );
define( 'SECURE_AUTH_KEY',  ']b7WiOcECo=(AXVBz3A@:oPQnU-2:AY6I*-EL=KR12uCPA>Hy%@fe<e0gIA,[:_Z' );
define( 'LOGGED_IN_KEY',    'W5dYC}+~bm5pRQl_Nm[!oY<F#4z+%DwojuCX}-uZRLiV%SUGequzl};g[o`um[m}' );
define( 'NONCE_KEY',        'we.2QLu?@N|^IDZv.N`1Z)k |NXuWo}I>_nY-2lO/_I]7LX-&9u|LJQ=}L,Eh@*0' );
define( 'AUTH_SALT',        'xKw+cseF,Td%5PEgnM^^ ~g bJMMjS8g5(@!j[U00R|FvV3uwES&0/l9**hS=3XH' );
define( 'SECURE_AUTH_SALT', '[#$n5j-|tzi&G;g7?N]K#J}]@Rt/AW@4@M6}}H,X/k2lyt,X{x[[0>eg.CF.SGk(' );
define( 'LOGGED_IN_SALT',   'xb6|qc87jm=0`S-:`B]D/Twa8hLOs|%Nw)8!~a$t{<M%YX[d}R!^.k|Z)tNElLEG' );
define( 'NONCE_SALT',       'R!BTlLt0uH1<}b `AR]H0DodXB2dvRkm|C<2vY4f_56+K8H:4lxgSM.NH-RTaOvh' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
