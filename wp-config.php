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
define( 'DB_NAME', 'naveench_portfolio_db' );

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
define( 'AUTH_KEY',         ']Cr yiwOL7}3G,?,9l81 al_!RRqb8J2=pP1DM]bG&CQGga3aAw>83skA>U|L[K?' );
define( 'SECURE_AUTH_KEY',  'JZU#[s7$SwZ[O8+p1Ypw6f,zz2y #T&Jag0[HP}=adg-ZTEO[jw=Jy<l 8yHSJN<' );
define( 'LOGGED_IN_KEY',    '-|ieX:UGuH;$5:KICqc3FTQ8[6A2&ZPPs;xaKg(qQ~^3<{dU(6QqaWVqhYXE;QdJ' );
define( 'NONCE_KEY',        '9OZFx*#GHCnM,Q>UR~&0(&p*AeW}M}nhs0!H`VQ. 4`OXZ%wr8H^yUd9A{ SDicM' );
define( 'AUTH_SALT',        '!>crffrMq?=nK<@@92*Tqs:;*k_^)Sg{%kCdgfVVb$2irQ(vKM3JQag5([RlQ/t*' );
define( 'SECURE_AUTH_SALT', '`@mjoAIxLJXGgCrnwyVVa:~Tb]C0<ZQi[RBeag#-fwY#jM{D!{akGm:k}eZ3#:gl' );
define( 'LOGGED_IN_SALT',   'Yi3klr9qZ[z>NPK]Zdu!Xw&0U<gfVRwtQHg$eF{5sCf[>Iw)D+(XRn`:bvX(7[M`' );
define( 'NONCE_SALT',       'OC^ju~z(B2Bbovk[=R1AYIzznDS=;E=-RPzoH2U5kd_{TAU=>Tr+89%<Mv<`5^#:' );

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
