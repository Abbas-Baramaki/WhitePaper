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
define( 'DB_NAME', 'whitepaper' );

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
define( 'AUTH_KEY',         'dl>JyvlF%`z)iH`&#c3v!:L]A>ITm4(HthOEi$Xx^4$M>;cTT7dFX1fo}~;d6&D ' );
define( 'SECURE_AUTH_KEY',  '=~CGVt@H}0=;R{5&q36n@lK2z9@a{{3>/.Q5a.Da|BljG&Dx(dY@hReo*T!ML]1P' );
define( 'LOGGED_IN_KEY',    'p6*<Bgu8Aa_$XAv_pxxzQM25NMwYeWw`*Au1R-M.,/I1b1R|<X)$;X 6~N*p1kH@' );
define( 'NONCE_KEY',        '=RJQa|!b7dm?]nhM>1e;,QCEAmb%lvhxk(8M$SMv=g2PkLG3g>%7;1Bv{(Bt`.ez' );
define( 'AUTH_SALT',        '|iR^iX,93e(MFMfs/sabD5% ^N}>gdumYj[Eke>6q_W2(9|M9-RY;W@5).][o`PF' );
define( 'SECURE_AUTH_SALT', '0Y$;8<l}}sZUIdapbC[[hjaV,]&WT<:i4hf^<v<[gyaB^%:!->y2=ehN@ec9u:1o' );
define( 'LOGGED_IN_SALT',   '67)YBrGj-2$JK|. He*,mR~3M<)*Y(x+k-t,-Z[{f%k)/ZT-?!CLKIr*K$zbfxX6' );
define( 'NONCE_SALT',       '8fuMn${ho96(,gr<fS[|?K#/56PcRL0]B~g$InuyB3}lH&$YKFzkdeTqhLhN-q7!' );
define("JWT_AUTH_SECRET_KEY","XpW6Yz@1384");
define("JWT_AUTH_CORS_ENABLE",true);

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp';

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
// define ('Wp-De')
/* Add any custom values between this line and the "stop editing" line. */




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
