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
define( 'DB_NAME', 'academia' );

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
define( 'AUTH_KEY',         '|<xci#R`jm!x<,7&Y2]H+(>]K{Xw,7Ox@lWMk7S.(-L92eSikyomfe`Svm`D!z_[' );
define( 'SECURE_AUTH_KEY',  ';gAKw[+}lurwOw6 .2bfOqHn?VzE+65{-aW;ft^K9rR=%CN2x?OA<[Ch]diz*ozg' );
define( 'LOGGED_IN_KEY',    'Y0vzM-2j248.2x=*XG:p^Mh~{?f;aH|2-$zf{pBD[joZ^ =:q;@9h[x#aaro].&v' );
define( 'NONCE_KEY',        'p?3>mv~{4%gt}cZZ2n|C,}KY*M#mBbUt(b8oQ-(TL*a=Bf6cd;o5JMM5/s/YgQ)}' );
define( 'AUTH_SALT',        'BO^S&h/_XbXs2{g~)DZ ^)s`g+6jEFLhe`s2bttgHo{yo|c)9y([CK&,zYtRDg?h' );
define( 'SECURE_AUTH_SALT', '*6v-[I0DU;:Ff4w4l?63U20l@x)bRdb6g 9f=LBB6Yr4F^Wlz<W/cvzpcD%bBq>,' );
define( 'LOGGED_IN_SALT',   'E 1u3RWy-cy/yk6z<w(:7$b6@bAU)n[)P#@e}3)m=.?vj`@+1iQ+C.pCK2PT/tJ)' );
define( 'NONCE_SALT',       'w1-bH%X25+^d3V7+CSO!Vt<*O9{$Hb-srru(L/6?E>Ezguyb 3Sqyg!;0kfjlWHi' );

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
