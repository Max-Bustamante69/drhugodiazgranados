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
define( 'DB_NAME', 'drhugodiazgranados' );

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
define( 'AUTH_KEY',         'FIs t%21j4rs^;dalYXp_st7Or0`z8t_}| Qsw246-n/WY3bKE8O5GA~lJgPO`]2' );
define( 'SECURE_AUTH_KEY',  '(O=^}WTAzk1%K-5D2!$B$sR#1)Zo36r}P.@H!9+>l1+U*i?|Y@.5#t~o3Om#n!6L' );
define( 'LOGGED_IN_KEY',    ' M{m%$sjLznG&4R$Tk#!#jQV,?jYW$>!Q<.kc:q#YmMKxOY|&PCADi2-gF]k?P_h' );
define( 'NONCE_KEY',        'B:0iCT,Rjq9/ 8bvLU/ohTWxE]w$!LQP+=y9mM6kGWQJwD+0})4Iu=v-DTJ@[N9~' );
define( 'AUTH_SALT',        'BCmQTnmpsx>OW$ZPDkZoV-Gu8l?(VNU?iP|5_Q(#$6G02aq`#*,s/cM,hnS[mV,9' );
define( 'SECURE_AUTH_SALT', '|*:Sv:Pr`LL?GFS20|[Sc;I7S1pk%8q9uo?*>Hp) [Ywm%i0nvBOX~ v*Qcb7h2C' );
define( 'LOGGED_IN_SALT',   'UcKJQsipQaveu:,!jHT| B,osX{Xym:k ^osb1%e7/HN!sEu.~=bHfXQ#:gjJgXo' );
define( 'NONCE_SALT',       's~h[aKFQw/T2K`7D<5#@wf S;?}N*^(S]}sxjDtQOh}:>KCbEetD~iNbwA/3S.wV' );

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
