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
define( 'DB_NAME', 'brandstore' );

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
define( 'AUTH_KEY',         ' !sx}0XvLcW|3|FUwKw^sM/f9ot}l;`p)tLzh]IX/KfL3/ vuo5<T/GzWS*g$FwV' );
define( 'SECURE_AUTH_KEY',  'vb=&hb8uf$rM7l2h?uObY [i+vl$,nQM7^tzB(7VftP]<kl562$Yu`~Ffc,sO%[y' );
define( 'LOGGED_IN_KEY',    '/mPO:<TOsd!l{RDhbWGY*;=?~me(>,_i^z1>=c,1?Cd#*qiBGbz<8z5LTxN>xD^l' );
define( 'NONCE_KEY',        '0{5C7m2ibG1j:T;q%trJ.*g7^ga5^ZjW,e:wQf WFaCHtSr+IsB_]LV~{k[&G5-X' );
define( 'AUTH_SALT',        'pPSb}(1ZWpD)DNDU{`!8+l{dI _01.Xy{R=)dS^r,-+ Q2M+X?+RU;S^%O,i&y|U' );
define( 'SECURE_AUTH_SALT', 'SkEr;11aB77mgte438kwQ-2?-Fr;+:cDm=le&lPz<]^iO[P-4Sqa6,$-yyTZ5|bR' );
define( 'LOGGED_IN_SALT',   'j*8Ob&tm;,0c2rppF`+0~zC*H~ >Y5x?2rOOxz(UJ.rDgY^pJ;IBn<y+p%vKCeT@' );
define( 'NONCE_SALT',       'TRzT! L?=K?C-^Rxfa#A.w9{O2t~ZoT|iB@8P_N.$%PdIA?iGypt$V)C}g2Ara5l' );

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
