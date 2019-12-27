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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wpblya' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '-/e2Po!,xM]Inr1G3P5&xyx>sA0*jRE/5i$?|pC%l}Sv1TZ030BRLcP`R8c?eVxs' );
define( 'SECURE_AUTH_KEY',  '{Kia2OG9C G:wSMS:Aa{3`ERJ=d}dbP= UC8Y=/}q.>ARp|&b/^M9lwhikVqLe76' );
define( 'LOGGED_IN_KEY',    'tiw?)q3{9@+bN&HBuF20.A30P;R@nSX@v<5-gp}Y/-|bVc}iC+UanErMvGg,Z)3L' );
define( 'NONCE_KEY',        '`wOa}d*hUZUS,2u$y_EVs_,S2HW.:Y2-;KM@!Wh9hm551=2_~pDT@6;U{+M4n:c?' );
define( 'AUTH_SALT',        '=f5 G+brWia=yzvTy0A++ =Z&{H`m-W 58=lJ^vY1Gb4}zcRmVkt:~DyQ9ayM*!?' );
define( 'SECURE_AUTH_SALT', '|B*9/oCUJ[#}DmQZ--=MK!;}5;EW/hPOpQICX%^wt{kw~CEL CP};+n`H3OsRPKB' );
define( 'LOGGED_IN_SALT',   'Ni=vSC]T6rI*TIxw&u 2.Yw*2%l[`fk6O~h6=tq&``}g&1V;F[Pk.uAm4yh:A_y ' );
define( 'NONCE_SALT',       'P(HE<1#ZQs]$dZ>v;.q3h|$w>1LwTW7 0@YewF 6>U/6#+DU1vr!/rV.Rr`aS{kj' );

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
