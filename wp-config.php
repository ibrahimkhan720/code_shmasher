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
define( 'DB_NAME', 'code_shmasher_wp' );

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
define( 'AUTH_KEY',         'iKn Tlej7qLk$Ojdh C=t*udzi4-k={^)J!GO#VGn1 T8=icwlK&d.e:>`spzR$=' );
define( 'SECURE_AUTH_KEY',  'Mv2QC[h#>6f/ku=4&ENXZ6gk;k7`;%{wa*!O{Z~|!hkBt]/XMR(:ivlV,`S-+bGL' );
define( 'LOGGED_IN_KEY',    'Hip,RhuT~/edUP21%>K~SP~lHX`Lu>7>X1z}Z!J$U{#6tcpYRh$,i2&aRXOAvYtB' );
define( 'NONCE_KEY',        'ki8f!_d`5Lt4Iz;|^H+wu5B$F{!Pt=|a.b/Xo%x3F,;>YiGku/4|[8]%M$PV*FQq' );
define( 'AUTH_SALT',        '4tFc c[,Wk96-fO!?#xjd>0oi]Sl>I]G6][l#KJ09[gmE*8h{VB1SQ$A`~,fJK*:' );
define( 'SECURE_AUTH_SALT', 'kqvA;W/acz/$2fQ`p/|z(hiPk~P/1N6wO1B62h [Rp7I8f$:ut)?Wsg^Ur: B>Xr' );
define( 'LOGGED_IN_SALT',   'lts~_GVyf(Pt~%@c:K?{Qb`)+0qAi/`.kVy%Wv{]o3W*[NiV-w)^kB,nR.BUL&n9' );
define( 'NONCE_SALT',       '~b(pTT$3}y2Ia{IqRd-Z^{5ig^*,~KG`o)vVKo>;^yacb_>m5:)v_VWLOPNk91Dl' );

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
$table_prefix = 'code_shmasher_wp_';

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
