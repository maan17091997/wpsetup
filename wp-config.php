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
define( 'DB_NAME', 'samplewordpress_db' );

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
define( 'AUTH_KEY',         'm2$AhqK=+5sZtT29I>|?QCu+4qGMz^yv;M!!4*8n3Q(fCFXTt!!q4[KbQ7P;v6PS' );
define( 'SECURE_AUTH_KEY',  'v@~j5[(D&LiG[;L0>@Kf]SNCXf`@fbX*5tEb4oJj[]V[ccw[~4Zcr@r06>CWZK_7' );
define( 'LOGGED_IN_KEY',    '|dZGpbJhhcc#?t_|0LAwxt-Z5:[mE.J]4MsZhMXjn*]3).nm$s3P&sBx3wpiWxP_' );
define( 'NONCE_KEY',        'trSrJoy$!8CLubK,Z|?VC8$!-4#h@[|U &t@&CY.WAm)h1:(H|,HOIGbdOB j:2`' );
define( 'AUTH_SALT',        '36u#X=xQ`PYPh4UaZt[Lc*=&gOT8ve3=psaW@,v_p_r@W,S?.+oJts*<PP*wHbav' );
define( 'SECURE_AUTH_SALT', ']~)N9xe#I*u6j #iSY D[s`K$G7}^rj%*{MXAO]^V;/,>B|%lB(O+k#=l-ij#~]Q' );
define( 'LOGGED_IN_SALT',   '>8`@?Re)y|rH}4S3=fmpj8fK4|:S-H9)!e!RP1lgV>;tI`U)R5CH:<2FKj{;YQ@}' );
define( 'NONCE_SALT',       'XAK$.Ka9Shr`U%X!Rf2x@Hiu}/J8qIfnkzHIVs=${fXv%?9F3L8hRd-rNr}~|fLR' );

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
