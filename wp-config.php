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
define( 'DB_NAME', 'dbwordpress' );

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
define( 'AUTH_KEY',         'z(GRm]ExkM-[uN/)f]m3DW]|*Q.7]pw2I/h5iWJ|i!)pOO=2WJ[.ZUImm}ESl8SC' );
define( 'SECURE_AUTH_KEY',  'I9a100p-w!.E}a=:;c[PcYvAWqiW__buH^H_#*SOitL]}8p{?u~!a5/XD)_LR`6T' );
define( 'LOGGED_IN_KEY',    'sxyVT6wt=0jw xvvIGLTJa=I,-5X@il:3<l@;e!Y5nKi|FycH8Zzqo>c)=G+H=mF' );
define( 'NONCE_KEY',        'VGGuxyc~G>}yr&nOY4ZoC(y1qlkAmq#.6[7kQVL9{`fH37lh~CC}(/0g+,:C9hPU' );
define( 'AUTH_SALT',        'G-)Md!ou;t$dFC%a.QY?Lq]6c /qXE#5f5]6uv5A b/JW/ZK%XJ~+G&q`:_!/uK%' );
define( 'SECURE_AUTH_SALT', '=_L$9`.;.b94=8r3#BBCbx;vJh&l9fAS(&RiHl49R~Ut&).,T%6-0I]z:L,@6`5_' );
define( 'LOGGED_IN_SALT',   '*{4#I-UV6^KyD=Hj0f*4vl~$exiE}81fZ-q(;#*0+ry4PS,s+J6yU8gf*Q)G6tSZ' );
define( 'NONCE_SALT',       'TuoC(*}W,qvDU ]4rCZA}GO7vI*Ns06Y_ymlUC=J@O_hx_n3X]d[8RjbF)Ux^ST3' );

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
