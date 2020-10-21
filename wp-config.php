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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'p07U/XI}[l6Wof;%pZPY$D+6j+GhsHi{]d=D)wJfo;3*&wZsowC{k@k<>hB[Fl|m' );
define( 'SECURE_AUTH_KEY',  '@`Z<qH_evU(vdZ>YD>)=wvY&eo^8q9@cu/}FhF<c%3y=dcZ@L8;+^.hlD4D_k&a1' );
define( 'LOGGED_IN_KEY',    'V2]*JMe8xQ<r>yKK{46A~?%^>td1e]S0z<x ESh1h2C5-<Qt++Y`zqWuq~JM5>~;' );
define( 'NONCE_KEY',        'I#f(p$Ekm-1+tE>Cd|8F?z]BuH9B@i$7,dWg{Y{~l:lAMi~bo!}:%[,#=7.`J6bc' );
define( 'AUTH_SALT',        '/2qU^ wr-utFw,;S+Y ziMt#gXb@p!o9j,(A&qC(e&6@SWZE|XY>lAVI7<Dv3%2.' );
define( 'SECURE_AUTH_SALT', 'F)/}ggl}JoQ#mN9a@-A%4?Rn3HI3N!V9&ACTevLJ /*J^Qzgaalp/Yq?bHv )AX9' );
define( 'LOGGED_IN_SALT',   'Ma^+`6v~`Bz,>$c]L4Z?Q}&.vxE6HDW4He|!l|FUVG%?(1t?B;l|EckoJ$)J+M-#' );
define( 'NONCE_SALT',       '#*F71VU/{/%P8o~8FNLjv|uKYBp4Y^+|I1{|s!/5;=)9[|NQN5~FZs7B26rK}aMh' );

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
