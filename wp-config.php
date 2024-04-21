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
define( 'DB_NAME', 'kamau_agency' );

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
define( 'AUTH_KEY',         'xNYnd]BJYt!1X:[#7sl Jh`n/TX]m>IL~WCX9cmQ?%r^#:H+XN=$_+YK~wT*<,/S' );
define( 'SECURE_AUTH_KEY',  '^WC.As*Oe|zh7K*vcE%ao&}ZpWbcY=lIN9C)EBR-1EnjwO-S`u_<lk*M5b#R85qH' );
define( 'LOGGED_IN_KEY',    'AN$4Q(<T]GGYT|8U#bphV75z)#CgXVS};KZYFks~U[S,2b^_@bl)#mc{~Da@@Y|a' );
define( 'NONCE_KEY',        'Fwx+[XXwEqR)xa~m_%25nsNy.p@5wwSmn1_%j%5.Qe~B`Bz8T$G$4y-wjv-9!CBb' );
define( 'AUTH_SALT',        'VnSR,Z:ds!x~1~2NBvw{/YNA[^eC?U>Q)gTy~7$|SStKNZO:>Ktx~gB93fRXVBKP' );
define( 'SECURE_AUTH_SALT', ']i/gq+>,5ek*{&HL]#_#[K4H@y|tG7YBtb};eO-DNc$E%7YNyOz&(O@2_gb9f0pY' );
define( 'LOGGED_IN_SALT',   'RM0?xtf~p5S:JZ50ZWPV;&rL*_b9+fj.m5MHUfNWiIl=ApGZp;&~MfiVYOSn7Wm5' );
define( 'NONCE_SALT',       'A%_c4csoiJakj*s<D:CS`AD[m@m7u.@]p$5&J+MnC0vxGiK+?G;oXGtDyF``dNk-' );

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
