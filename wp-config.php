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
define( 'DB_NAME', 'crxw' );

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
define( 'AUTH_KEY',         'n/JhdV$cL;hO!BDJX/kKp7j-t=zNU;d%<>q=DzDa4UUI6FpBP=1rj!V6t7_cm5M~' );
define( 'SECURE_AUTH_KEY',  'd1A]m2FL{dm5e5`_^E>R2xp55=~$O(]50Vt^JczEM:n2-nvKii^Uy}omGKnv9qhM' );
define( 'LOGGED_IN_KEY',    'cnOjOFm%6g~-(L,!!] eEs,9Wf&Ar-D50|jLr~{3ZG`Yp$)z eM/4@r|K9f_tTa2' );
define( 'NONCE_KEY',        'B8KU|^JNDO:A{!QY,svC-dGrqjK;8O;Jw{HVB&Z@(_cRe6<-L,Rz{!lq;m9+t<5 ' );
define( 'AUTH_SALT',        'z_s@fg 7xP^rcWdALsX:( Nz80}=<AcCp~%lxPo4VnuXnrY9AO/BLwp7aQJ]B7!X' );
define( 'SECURE_AUTH_SALT', ':g`:ZP6Q_t@~C+)zR1H* GZO)P`T|W8pJd<K#t/6a0[`T%?95L_Ab_5NVu$<Ib*4' );
define( 'LOGGED_IN_SALT',   'W_{1CBXk#-0z8imbC#LeROT.%`ir,uG?qT(6/f6f?7D1 d MbSMp+zrzqNSZWo)9' );
define( 'NONCE_SALT',       'eBf:Y,~TCt =/B7D.6 r|lPGE-X%VN$Q_Ex> 3gs2;Wd9yW*+pppxOC5fSk`uTK-' );

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
