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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'theme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Sb+Vj183`t^*k~LX8/utRP[6].!l=ldB)$/N>#+]5Hf|pniy^K,z!rr%! 7u?Dt|');
define('SECURE_AUTH_KEY',  'zN1Cp3/e7u}U(a[6OWVTccF?4GRMW9O0qWO&u @.(nOZ~|4#7);}x[?_!VR,<2WP');
define('LOGGED_IN_KEY',    '[w.Jc)CG44:NW)9[>URH{<d[^TszpK9vse>y.Otq-f&mRD%*Zk#/G1d34N+_Gw|(');
define('NONCE_KEY',        'K?m`PL7 fB~#,rl-oG!qoc.RrR}*VoD|3X>D2)sD>42%x,!Z]LF89-$MFnr<oG?z');
define('AUTH_SALT',        'JbVR19hNO]5{oAEW-cV(!<JSy8RkYrA<^zuY6pWZ}5F;qC&*%BLn/7+Xoa1oJaLI');
define('SECURE_AUTH_SALT', '$s?<rNaIk:QvD=[il}@:Sgmy?qk4w&JPI=l&wEE:Ma2HQbH$X 5Oe]Q>5GS}Q@*8');
define('LOGGED_IN_SALT',   '#kHkv,SVh@=s&yR0;q$m2w.3Rl/l<SA_8Px?$hbiGFita;WZ5&)@Mp2`<f3& *}u');
define('NONCE_SALT',       'PM3aMnRF9+bn8}hFBUC,lC0pZ`S}L^-Z-K7,_u(CN =Y7oe@}C<pqs>VDrBo?{7~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
