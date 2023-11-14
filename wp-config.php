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
define( 'DB_NAME', 'wp_db_midterm' );

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
define( 'AUTH_KEY',         '/8uDdqHX/c20*KLTE#RRS_Fsh<Wi?P?b,PvKDO{qbB0K2-czd)E4=X^C,;~(*0p=' );
define( 'SECURE_AUTH_KEY',  '7*vyeRr~$-,9b-TNJ~)0q#6zr]!B1K>:y/:K,(O>Nk7E@tW,W},e[&B7rO)ju6kb' );
define( 'LOGGED_IN_KEY',    '_89aOUWF7=&bzM[r:G1M5lf+.Y1h~)BP~p0 =(yZ/B7y*/</e|IR #5rPQ$ G,W;' );
define( 'NONCE_KEY',        '[?5Mh8T+y!-2~^lpzEOAM=3#@n_yNadNh;=_sBy^M)E13mxc*B~IK!,#-WeL x:2' );
define( 'AUTH_SALT',        ':U46EYMt67V(R>Xi8!(xAPM}dXyv1bf&gVR?@sHu/yD5<!2{27E RQFqt;wyG!tP' );
define( 'SECURE_AUTH_SALT', 'G/X_O2gH1!agM3M#`[ sDb,yQ-~Sv~VAmcI#PdSnZp`prw,CrSZLJL!E$*|x*o;+' );
define( 'LOGGED_IN_SALT',   'Xl~v&m(ga}5XrJ FRs4$?^!pLh:#)Z5?`*aTu~a+ZF8ex&V+1T:FU+bOg}KOSnQ~' );
define( 'NONCE_SALT',       'Cx ~@7Kjh1R~1Uf8FP]/gE.,{J`X6(y0^^}e*W6}v;J08X;q;i?K&k}aX3r7-u0v' );

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
