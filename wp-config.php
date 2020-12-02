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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+qgN+l/r2-oQ>@d2]p*_/83Xr.IN8nTlZBOU~7#s]Z.GQeHB.g6-~$aYN;6#_M:$' );
define( 'SECURE_AUTH_KEY',  '; ,_/j%3,l7$9pt{=9mMF*(L|:g5BaR3[$|.Ew,SI06}d!2dW3-Tp92q8b&L[X9a' );
define( 'LOGGED_IN_KEY',    'J1zy3wTd^(g +@XK`1PPyOr0?q@t/,K0_^f??t7dL0fX`]ejR9)WK9 n-@:F3rE*' );
define( 'NONCE_KEY',        'NDdV1yh>7*9ytPQD.<MJmre];;U~{InV4-Mh2q0J^ohFF)Wp[wB*~4UM/Z^C.Vo-' );
define( 'AUTH_SALT',        '^Fj=@#k}Zi.T_JEXy<@G|%q_bV/L1PQpC<k=3%V=C?? hxE`kkafFL<?4VwFs~`W' );
define( 'SECURE_AUTH_SALT', 'v2OLa@j?nw;OJJb(T(r;jMRx?3zoZIb%p)(z6L/1;BDA4HUGXU(*uz9/&EpUn;kk' );
define( 'LOGGED_IN_SALT',   'lo;:n(R:DW6m>xI&DZj.[Gy*^{$p.&:u`:jQ5Fwb$f{i2jl@bp(SF@Y44@xvtszn' );
define( 'NONCE_SALT',       'xm0sw^]9i=tm1R_A224KWF6^]tdNH+wFfnxVxp3^l:<R[hf8-7p&nKAHq0g|?VLk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
