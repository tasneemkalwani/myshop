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
define( 'DB_NAME', 'myshop' );

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
define( 'AUTH_KEY',         '1SyaG2rMeSBKD7yKhH,b1]M&J4Cvay#_eZ({fh[Sgb`,c JxzO~X!@.}1u45N)-P' );
define( 'SECURE_AUTH_KEY',  ',u$Kv)2R[Ca+&{_aJ%S5`4YelG7]f;@wr-%BQ];Ps<lK=<r9q-I7^~CsG-]0&Qhh' );
define( 'LOGGED_IN_KEY',    ',/w<YP0zyX~ut/`Gtf68T.ac23:s0Yxx0XC5?v8-Y GFxp<-0RpU?|iPfp-}brKl' );
define( 'NONCE_KEY',        '3FEy[:CN>C`0uc6)~( dPoCw`a)hp]6]v]{*7s*nN p_Wr~sa^o[Dd(Y]:rFp3,=' );
define( 'AUTH_SALT',        'Zb^Q5B^?2GFC2R;{M+x7u!H IRw39QD?Fjd qP_Eek[[zsCViE*xw.[E<s!Nz#Bf' );
define( 'SECURE_AUTH_SALT', '@CU3/sDZXmkzRLi!_i:TpH.__zO@G7m7/6F,BiRYOvtRcX!X+dQM9}<m8J?pzcAN' );
define( 'LOGGED_IN_SALT',   'U]wdJ9w*ggno`GyNBVp0ZyBmXvt>B;r1Q<5QY%btBNz*myMn>;)Y:)JR-gQ%]c*b' );
define( 'NONCE_SALT',       '4LBUKwpN/DiGcJj3o &MuSK]z1<5le; 63~|]w.@4uZp-;lrK5Y[:Ab}9a{O>X+D' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
