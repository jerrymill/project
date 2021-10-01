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
define( 'DB_NAME', 'project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'gBj1Sl>xgzdX8D>s,jb,o|}t+,xvN?/Rt,N8)B_E4!i?s-:.{Uj6@$TxptqIUgMW' );
define( 'SECURE_AUTH_KEY',  'i&tvRG`pXe.F-tT^qB!>Faa%nU{[6@$xy+K8Pf.gaOFa)/9NgY6Q:Fw~/R1FRa2w' );
define( 'LOGGED_IN_KEY',    'qz=<cg@PHEut%1NF`!9!{4CPGJ~G=QB@e#ourN}bu`~#oDG-Q+O:uh$fg;l)n0UH' );
define( 'NONCE_KEY',        'iIvI~+4ztq9 }TE:{j f*GElkbB]121knW8E1t#[^}av.K=#sBx&7E-(zGNT*kY$' );
define( 'AUTH_SALT',        '(`$QXMTnNAYH+?j||@!Jx<-(O/4npnCjT@EAw:2w2KZn[QVjyFo&V%&zVm34_EAG' );
define( 'SECURE_AUTH_SALT', 'M)&}XS^S|myS57]|n7(Pk#GnuqJ-RH3+|:TKMmlelDKwJ6fy_TW!UQ. ud)b(:x^' );
define( 'LOGGED_IN_SALT',   '6Pv{W$R:>Ga/E*BRDmuGp)NbU4UB3c #J) L>7%4=.Po}0Y<vpd%oB)D.-MML#<V' );
define( 'NONCE_SALT',       '@AKW]/Z|{&uX!1 z08}7IKu(PINr (Qs F`L~MgX++f=q6^#8:Tp|mQ0K{r+ZdI7' );

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
