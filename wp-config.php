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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bridger' );

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
define( 'AUTH_KEY',         'Jx#5tyO9,L.6C]n)X),[6(bm_$m`AzfHS2<vTAe<C@7sO-Y(1)NFG,FJ2wL$ciQ+' );
define( 'SECURE_AUTH_KEY',  's**Ni$7(]au#5]Hf&eI8$SKLIBz,[h=He4cxS6fW4(tkFVTS=z,9&|*tRoe R# J' );
define( 'LOGGED_IN_KEY',    'noRJVFBflZvQU]a <B;C{ p0u}ee)M7JyrVtyH6T7JC;;1uTv`@[X9SKKy$`d_V=' );
define( 'NONCE_KEY',        'F:y^S%gfH87ErYR;zQpI:I?Uz!KNP0]=L$L;s`u&#;k!3J`R<~O&.uA8q#?boY@0' );
define( 'AUTH_SALT',        '+MMQo<nkw^t<`C{P-:;OlN&-fJGs}g[$)T!wd*qHS5}c}EhxWXG/me+ID5L>.:]C' );
define( 'SECURE_AUTH_SALT', '}+.czTsAL8?bi?i!Tz@m6u$2.Nd2]]SZGK**d}+oC0w=@{Fezuidg?lCDyhZn[*s' );
define( 'LOGGED_IN_SALT',   '{#LF52*R?UI2@10mYXU&7},cIPNJcy#r:?QO0o;Ad-xH>SVJ~?Ygt4f)UYs&c`^r' );
define( 'NONCE_SALT',       'OQk`/G-@zT}nIe[aV?N?>Y&Rwi:}Mu1H/&7DjUQN+atrLHNrxRWR.9ulQd* T2;7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
