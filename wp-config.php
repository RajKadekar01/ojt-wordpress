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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'zZ60K}22DSjSsj2oNv= EqIf}tz lbE,=d%j^w|]A^n}{x@f&g:yIZKw47UdM[.0' );
define( 'SECURE_AUTH_KEY',  'Hk&Xzp)uRNNRlT8wR1EdY0c~$LtXHg&42{?kOP<m-[P7R@q]9bCP3X2$l]o/iI.R' );
define( 'LOGGED_IN_KEY',    '%ma)BZj~W4OS]PI;=cqz-i^N4|]g7ffk3m;!u!V=<*:`)BjkjNt- UyFQP&|;~wM' );
define( 'NONCE_KEY',        'cO-#OL}44A18}Zk*>`:&^0)(j7:OVQFbF9)z@KETgSD=0(b.b$}x)cAuj7Pg9*AT' );
define( 'AUTH_SALT',        'JU1Nd:HB>oA;EBei^t/Di,wtrO)leM;)xF2P+:w{V9|Q@1bLil]bz-r[,+2C<J?J' );
define( 'SECURE_AUTH_SALT', '_$[6c/g<Thw|[?!l<LG?s5 *MWB=M;v*tR^dwBWjJdgZ**[vlnwC-RQ6FL[yEu<Q' );
define( 'LOGGED_IN_SALT',   ',Fh~1^qyHze:/.J-ZE8Br|(%7.I/FQ`eC_q<nB}&fmkp_}H0m1x|Mm0OC&J+`|hH' );
define( 'NONCE_SALT',       'UKN%;`%H[=>u.6>=1rB]o:SF5!jl4N#GqW.ErBzz-$m/^]5fopaO+r&06LF<G.;x' );

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
