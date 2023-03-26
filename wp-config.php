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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'farid_website' );

/** Database username */
define( 'DB_USER', 'jahid' );

/** Database password */
define( 'DB_PASSWORD', 'Mdfaridhossain12$' );

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
define( 'AUTH_KEY',         '=9%yW<kg>qCqAX3q~u-~-V*tx[plxt!!@$w^KYWR_S.A.c-sO.g)$B(=l!Jznh+4' );
define( 'SECURE_AUTH_KEY',  '}PeMCaGq~dLjKm4Eo)@C@dP59>,)9`ku#,`u4 t]|ISfxY(K+d:53u~PbL1tVe8L' );
define( 'LOGGED_IN_KEY',    '#54>Zp`XOQBt$xhDe!gq#e jq,O#B.*>^:%cI15W}N->fwJalXni3dxc14[Etp6o' );
define( 'NONCE_KEY',        'iT#me:tnc4!W6Up|P^#).w40#qRMh:?%C+Di}_)KMQ-!}(@a&HU(i&L].XS@17g=' );
define( 'AUTH_SALT',        '+_x.BwXl(nI4TDHAD5LW]H?Uw:66z}LS1zGhz.VMxRy3_J{3(Cw[N>RrfBfw6Y;,' );
define( 'SECURE_AUTH_SALT', '[73T>}vsiAU}lWd14J= O:|+~[^3m7_#7=hF_b.u5ZS`NlwhxKtz0pI+Vyxrv#[a' );
define( 'LOGGED_IN_SALT',   '#2VIm$CY{t|wWP;b}l)6 SULuXuJxuPVmu{~sMG^xV#^=}NAXXY`;5z^9ruhE,)[' );
define( 'NONCE_SALT',       '2?4joOSLfU^l87Zil(B$HwgN&u1@!>MuHx50Oyj X~R4|9bYrrIUT9 pD{;Z.uXX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mh_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
