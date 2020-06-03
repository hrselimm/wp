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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'R^5<EIz^-/kBB^=cu@Z[FDQ{QRXw!gFV6rIL/nqm135`=l,GtQ]y;N3gu7c}JxVx' );
define( 'SECURE_AUTH_KEY',  '?HGq1+^wP1j_>Fx73*1L:VV_fy-GEx,6?V(iNNuwNbBnIFM7V6d^juGjXp,b:%|$' );
define( 'LOGGED_IN_KEY',    '1AKh7$mCC_x<@b7([4!79Am-X);^Iupe9UO4cO0Gsw({YXD{4(e&@CX&{l~|RN;:' );
define( 'NONCE_KEY',        'Z7(RkxNsV*p%,NS<|&>BgNv31Qe^AuEZt_k`l5aFiH,**yT(]SkjUWq`*XkRnU)J' );
define( 'AUTH_SALT',        ';&3]}fFwR;Bbp7<.4C93738iCYkUvm*M-yf**j[(pc^2&t-`ZbJCE=}7)1Rn,>$h' );
define( 'SECURE_AUTH_SALT', 'w/@r5Pm0OrJ,2VvVE)bfR!M[cJ0W!B3`D^NwF:)#w~vjbREgPSIqm@L[%i5n>n;y' );
define( 'LOGGED_IN_SALT',   'e{.3Uh`)8_-a6s8LT/d$lE4S6KcTi-LQ+D:`0>{%H$uQ#+ylX)})T>d%tKW^&,#k' );
define( 'NONCE_SALT',       'U];JJ1$6(/PE,~pPZPRS*/y%K JoH%U!M1)[UCwL)[eQ0lacqq[P1l,hs,g/?()U' );

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
