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
define( 'DB_NAME', 'html-to-wordpress-theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         ')uqJ#/3dW 0|$e$vIqU_8zo8}MMWY2E-X;mNHl1lrK3`MGsXey$f]nAp(7n?/!2`' );
define( 'SECURE_AUTH_KEY',  '>hu%/~[,Xk|Kj|C]iB4glp14Xt^0n9acvt@.tWf{Wa3o1Cp(T}DN$laE-arSx61*' );
define( 'LOGGED_IN_KEY',    '/,>MIDVfh(36ql,-t=gA#l%msU=r N^*d$WrAv<btGRSt ccD|olRuz6uuiN[VU=' );
define( 'NONCE_KEY',        'QGj_J9{+zSXyFc;a`zKag8c[O8/Z~8xQ4o>j+Otwi7AvUy@@d3S6?hK`,e S8:$J' );
define( 'AUTH_SALT',        '^mk,;F6 B^KDn>h1xjaApy_JijmAh`P1IGxPy%B-}UJX lmvRrehES.vI!iC(MT&' );
define( 'SECURE_AUTH_SALT', 'vlS+[0~|[j^jq:jD2 %WdoD-Sm3?I;idF:S/,y<Bx;tTH|f]|(z{UP-PF$qDR+_-' );
define( 'LOGGED_IN_SALT',   'j^aU{NTW7[&{n{@^hvo/7O%KvYl{cCm1&_G[CZ(z0aC[XsO+uUpfUo>t)}i66xwc' );
define( 'NONCE_SALT',       'gD=;E_W*&<9`,uKys4!M7{1p.8:yEjwgDUzN,i8>(*RyaiHCpoE<Fuz^-mXSeWWl' );

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
