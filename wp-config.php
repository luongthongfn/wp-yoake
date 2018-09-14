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
define('AUTH_KEY',         'Xk[i)]Z:r$f/Mu2)L1^nXy~[esuVS}54[U#`?Ymf7:2MV4)*uw &/i)_DPt.2pym');
define('SECURE_AUTH_KEY',  'D;C=DITH]2x_{%%R0V{3uztEhhWk}0ce*=On:|iDbh{Z8ulm3[1+C #~LB#ZhF)H');
define('LOGGED_IN_KEY',    '?loGTdId!?4iVHQ7EI`x98.L_*Wd2V-d+/qu12^5)qa=?xm[1-2!`g7v[@fgD5iy');
define('NONCE_KEY',        'Pwx;m<Lt%$%(s[x=uR<<oq< TEH^Q9zvUsJd6N~`e@.ZpzHF{pc`<aF1Jt^q/$U?');
define('AUTH_SALT',        'GR;$K7@[oe:YA=(Fm4%}|%_NH4*r-(.h~{^XBnOUi8LB]cjrL_Z{Tp |>e~:N{ah');
define('SECURE_AUTH_SALT', 'Zi7KhNY:TIP(UbN6{=5)sAX8[]Wdov`ywd7sz9vL6_~C[cO{)~reLNiL#,{n )V&');
define('LOGGED_IN_SALT',   '+i46 q^%*{5C,h )KU0_{c8Rq@l%U$VR_54v0M#Xr|h.FE@r2O+X]{J,.6uUPl@y');
define('NONCE_SALT',       '{qYqv`=}/WK^BpGX#5+_oKf#QERXGj]d~sQTVlh,V=8y/S%SM&eoJ=JPB?N0E+)J');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
