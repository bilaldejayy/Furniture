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
define( 'DB_NAME', 'fourth' );

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
define( 'AUTH_KEY',         'K<Xm%5`#7Z%/0{q,8ACl^CsK6ZJac!Beo]~oKmI&=^!1)<:.Kl%>]6rJ{BZXIxfJ' );
define( 'SECURE_AUTH_KEY',  '?;+%}z_e}tEY.n>:vEsXtZ0m>hQa/2]XPxq)9.-z:>kcm%)o=bC&DjL6 Z!G2N,T' );
define( 'LOGGED_IN_KEY',    'a34yay|{=XMC1Jf7baq96z/`lyUlG5VCSp}~y~=_womcb,46GGfbML|tB] SE%49' );
define( 'NONCE_KEY',        '~1L#^^WW{4PC#~D]R9%NoTzxM+N~.nr_)$$Zt*]qEwnToRc*]^,[$YHkf,$gr)@#' );
define( 'AUTH_SALT',        'iVELvyJ:[TQYvFsYIGU@7dfa^=fubRoN!4mdZ|SDqnk0jA~)(]U^VB)S |V(3Xd%' );
define( 'SECURE_AUTH_SALT', '--2m_O$Dnz>dx3F&tTzq:P$ zJxO=[-N%-$&+D %_2+Y-bY|kCk|ro5k3.ATqYs!' );
define( 'LOGGED_IN_SALT',   '4X(:~xzKB{mBiP!J0-X:JmLI5~G@0TPIDsCBhlY&)ps`T8{vNn<];Q7OEkc[R+GR' );
define( 'NONCE_SALT',       ';|fh#H?ov(tK8K64TF#XAAS(xBbj]Bs7&lU_B,egQb&ZzKl+{O&}Hf*DC@fp1.9s' );

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
