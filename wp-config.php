<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbpractice' );

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
define( 'AUTH_KEY',         '!YylV0VD-vJp$Tj[_/bBVvq&[(~?yh3{&X76yRtqQ[3agzBx1}%o<=}.T9F[R4$^' );
define( 'SECURE_AUTH_KEY',  'SU9u7]:hEq].3sB9Di6dL~T5_k&fF1pNHB%u(c)=@z;4V[&r8c=1v]yH+co}I::7' );
define( 'LOGGED_IN_KEY',    'V>~t&oDk>d7s]fdSi<*4q${,,HpZXLY_l7!KY_M7Q92w+Jr%V>J`VtvaT(OpsVE>' );
define( 'NONCE_KEY',        '`qlT/v}3WK|z/Bn!Gm+#N`T5o1|z%L8*|c9}qKtw*ir=yIi>B(:b=Rt>J~Wfvyi`' );
define( 'AUTH_SALT',        '`~yF_$+sM,JD~%N?) -mBvy3]fYvm L+{GF`)9}MB8kCbfUm`o[$^Cm0yo0U$]St' );
define( 'SECURE_AUTH_SALT', '&vJXRCCZO66-Vd*8164w>Iy=!uyTb@!zV6>Hq&PZ_&ao^mIGRvQc4~-6vS|~[lbO' );
define( 'LOGGED_IN_SALT',   'jCH(bbBV+A+%|35<Wqj<jMH(=A}w#7 k]g.u iej[oYN][~-ing]C*WZDj338W3v' );
define( 'NONCE_SALT',       '45nR%j)1S;/6Z1DjF/B= ;(#TyILC *?@T1sK=|.uzv kMOq[^#`fF H1}CZT9a_' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
