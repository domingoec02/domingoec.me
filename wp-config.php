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
define( 'DB_NAME', 'domingoec_db' );

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
define( 'AUTH_KEY',         'AdUR+/8}~MD8#-J:!Lvfz+C%=aTZ(B6k!t1MmIgGrz( ;ss+@@Rf{6x }i(YA;D}' );
define( 'SECURE_AUTH_KEY',  'fH`MJYOrm#hZY2J96m,YdgCqtINh{OcE9f{Dq6rZRCf%F]YF{N<;Wbr|6}=fJG;P' );
define( 'LOGGED_IN_KEY',    'jk42(|*x^{M>J1a37uP9g~|#q``E@)#wFdbcN^)HC_:inpvNk{j=}Ll#0u_biezY' );
define( 'NONCE_KEY',        '=e:m6l(CC!;6:3:051+/iG<0x,lXNkBimBH)pr!50Y)]jz6%&L;WKmXC}p &DY#s' );
define( 'AUTH_SALT',        'rl|hV0ks$Nl~< 4#1#T.IJ(Il9t%}aEJI<:0G@ 4).c+mlr$Zzzvym7Y,l|DD]Jj' );
define( 'SECURE_AUTH_SALT', '%{y-fOlrpd[uU]bjaW~}3AUVoY*a.vU+b{h&0.f.`h23.f$j)?(E*EUQ<R,+Bk/ ' );
define( 'LOGGED_IN_SALT',   'V)Dm6vS?a^J)hP=]@f3jXaHZ?Od1[9eTd.qB0/i1=G_nC8Z/v =JJS+i^S(.2VAr' );
define( 'NONCE_SALT',       'l,QN-8,Y29MA(>eJ@{bA>q>cb{BGQm6yw-Pl*tslY$VlrWx?6?H|aWV@)zByqk**' );

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
