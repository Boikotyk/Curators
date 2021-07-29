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
define( 'DB_NAME', 'curator' );

/** MySQL database username */
define( 'DB_USER', 'curators' );

/** MySQL database password */
define( 'DB_PASSWORD', 'domik010' );

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
define( 'AUTH_KEY',         '*i*y~9Y~YChyKXQ>LmMy.qMyP|WMVdUXYF;[S/ATEGIQ=K:.7_kLy@?zOH0s9AsF' );
define( 'SECURE_AUTH_KEY',  'Qxmgmj:6u5 Pv|]M /,<8MAQ<b+Nu!noWp8@1fp4.O]]&82LG L&Ebq!d>]EAMnb' );
define( 'LOGGED_IN_KEY',    '`Y[6eUDspqI5-I@3PfZLw >L(K#=@WzNI#lGpOe]CsIAk^n%YUEI-wPMW>(e15sf' );
define( 'NONCE_KEY',        '_Y0XXAbpm?:K$Re,~gy)|i9[N}oSVH&aSxjc_p)x2YcM>8B*Mq`q{h|0!^j%Z5t9' );
define( 'AUTH_SALT',        '=dg]c/wfk{!}pN5r&%u7T1()Y7L*`ERl2mzG{q=NF-sqgXf6hS=DVEm8/JDcVGxM' );
define( 'SECURE_AUTH_SALT', 'UsN{x>k!XgltxYQ#Z2;DTFY`U>HFM0mWr@gBF{,F^]UH!ta%rGf&[9kuq>.sF?@o' );
define( 'LOGGED_IN_SALT',   'dGTP*40?;=*M|0S;K0Ylp+mCl!Oz=Afa2MdAxLtl3uGa=#GgV-#*V1nEq%U)MK-P' );
define( 'NONCE_SALT',       ',9<mbT)+)x~R<A+[`xy=ib?]d=XExr.WgcJ1wMu@>>}a@7H;Q FPPxRdf.82 _LF' );

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
