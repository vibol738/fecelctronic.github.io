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
define( 'DB_NAME', 'vibolwordpress' );

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
define( 'AUTH_KEY',         'TDyc,N%(~Bd%(_TBw8XwSy!,Q=T(sjaV!OTI@vx-b[Ff}U05PY:E)nP0MQJ/@]`]' );
define( 'SECURE_AUTH_KEY',  'Ro3=xlPMjh,mdhBvT]~6DdfE2s~$]H5SoovL>kz>tvJN#(_hS|ladB_XwJK*be2P' );
define( 'LOGGED_IN_KEY',    'W}&iQ4Y!b=p5K$1`}<XqdbMC`>1/OV/5iVak/7Rn A-47M=s^_V5l0nVVDS]L^Q|' );
define( 'NONCE_KEY',        '0=P4+<QN>y&i/FN: -HyE37Ej,Hl[EFef)LGo,G~BD5fKI*&vw^4h@];<tvX*w[V' );
define( 'AUTH_SALT',        '#!%6F)vJ;_Q-MUX~[C0 h!}?al!c$!9+ag6UAXwdu-Osm>6=?Ioh>E,9FetKaI}u' );
define( 'SECURE_AUTH_SALT', '$l>[az$C5k+ GB89mM7n^#udYP#WNd0V8mn<4+^.@=DgbYoK}MMns,2Mv1*)cs |' );
define( 'LOGGED_IN_SALT',   ')%EWm)zSOgxF~FRg{?19lAg!+=,kCrPvmKX](Bwa;#c=&mIxqYd$fD8L7MGX[i$J' );
define( 'NONCE_SALT',       '9]I>V4Y2|lI~h},t-u|c]IYKY.fU&ona9J?[&ZMP!SWLD<!+X/yVJ%.TbF62Ot`*' );

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
