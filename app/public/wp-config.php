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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '`Z*,QjGhaIm{OP6s.gy`Z5g<?A;w NArZbRXNb@GFH7:%(1c6buvO@&,w_rwFIo$' );
define( 'SECURE_AUTH_KEY',   'Z|4AN/BU|H`8LB5Nc}dCh=-F5V%&M]E@KMD=UE/gX7!Eg5D!pNa_bF)oxVS=Vj.:' );
define( 'LOGGED_IN_KEY',     'B#vsT=/l,1u{8P2vmXFJ<qz%|2{<[7 6mrH@O_(Ktm29[rl!h-#HS6R<q}R*Z{N:' );
define( 'NONCE_KEY',         'Zj]G-b;86)[KG/OUFP?PR8:OV~$2%stq,#*s9T8T eg V[EfpLH{-?,zvMy8B<L:' );
define( 'AUTH_SALT',         'x?${aQ_vhmFj=tdixVd9>F-]Ov.p001)l)ssdI(ErPl4jS<026Kl|q5`h$V)*tB1' );
define( 'SECURE_AUTH_SALT',  'G_u)G3aDYB|A<_g9e{3FNOC+c9Gzf;r2Rz`q` LMxzhk7U$PVZ#,(sLSL1O{yY<d' );
define( 'LOGGED_IN_SALT',    'j.,MK_bc hQ7CED&|7W``gd~EXpG&ImSgiq`2Mj&2@;SWy!2;b>rt8SH~|$=%&7n' );
define( 'NONCE_SALT',        ',zYc5xhP$#GC9+gYAp90eiIrt?g)AEnv%y r71c~:=Qx(qvisUvy`m%eB-yY`n`>' );
define( 'WP_CACHE_KEY_SALT', '}=H^#p0&1}y|iVoax.o}8[C=9}CC,b.-xQ}i#]IG]cbhar34<s!*[cTP8kV5, Cl' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
