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
define( 'DB_NAME', 'db_workingspace' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'CD4Ea_c1dJG_#:]!`z%n|3[]J@>Y[sIa?r#z}s{(C|{je+:=B8c;jD_zb}>3<{{b' );
define( 'SECURE_AUTH_KEY',  'u@lf6RySr~saX|Vrl>V#8G$W7Sxig`Q$H4t.YM>Lx?Ibn+LDX!P4tc->n7K.E%}4' );
define( 'LOGGED_IN_KEY',    '/8;V2#j=_{aZZ33AsAw&=t:.|G#k>kmj9#yc^%3i_5kx/6-#=dcqxuNzq7:q#wVY' );
define( 'NONCE_KEY',        '|4?;_{y+nTb06nFQj3r@zJ*fHafhB>VN;cT!4;6FQ$yN7O6#^2Ot~PcJ%lHgUg8G' );
define( 'AUTH_SALT',        '`_%](bh|>IOlhaFu: (Ni*TqwnRu ?ipjW;SV-.n0)Rc1*fqrQY+Un$:6trxHfza' );
define( 'SECURE_AUTH_SALT', 'z[Q|x;DV0PpQxm_oMSk0 *qi|NyfHFFm5/,;< Qem&pV0`5idOcxm<]dAd`H?~Ok' );
define( 'LOGGED_IN_SALT',   '>3DL:n^JFIOIAqkq^#Od^ea*-KSaf8`qeFY| m#~tA(]dm~(O}We.oJh<Ak`^/zL' );
define( 'NONCE_SALT',       ')5%%e* uQ[n3s[iV2kBU(Vgn6}XDqcyIZ{XbC`bq:/R8*9^zEM~z MUoA+HKjm<R' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wks_';

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
