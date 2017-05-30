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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'lks[sgh=L3Q`7t`FQQyyRle5eMX449Ymg$w(Y;9Ph4w6j&KVvC?6Zb5_v!B)BN85');
define('SECURE_AUTH_KEY',  '$)/|VR6(&4Oc]da^J7EEVgx]gZ>cBKa#U&4&n g</f=w6@XL-Ev[+>%>xrIA{VZ_');
define('LOGGED_IN_KEY',    '&Nwd*[CzU3dF~^>~[Typ}GyD/utv&?RNwv?RQOq7[].tu3d2g!Hy&Z2!aEG_1:9[');
define('NONCE_KEY',        '[g<OHM?S>Z|l;[34#emz573,-Be/ATWdO?UEb,K$`wOOi#/vSbWk uM%)Q#RmUi!');
define('AUTH_SALT',        '%%RXhhF+Vd^~0W!R7?Sn)]k_DJs,5]Zas)_q0J(7U hu77uEAjG][.qM-4!fnMCQ');
define('SECURE_AUTH_SALT', '<D3$$.kCaO%biV#h]*!;>VQJ1^KV5L>GD8!5pzKv1he.Nw_B8L4!-u{ 9Vsl>Gd+');
define('LOGGED_IN_SALT',   'H>:C1mDmr85]IGT[@n_l$ uO?p6f J>>o_jibGkY4&V#Rmy!LWt<75q^t+|8C^o ');
define('NONCE_SALT',       '$3ng;9jax-g+U1)BP1nQ!#TTZz=$W?iX+Ga~pJdbjzYeb#PtzLhzK_Y!x`O)sGcl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sl_';

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
