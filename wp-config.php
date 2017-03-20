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
define('DB_NAME', 'wp_master');

/** MySQL database username */
define('DB_USER', 'wp_master');

/** MySQL database password */
define('DB_PASSWORD', 'kR1SM@R13');

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
define('AUTH_KEY',         '7u$)vUHmTHb@!H0[=?HEqT~ZWfD7E|?B 3z$T.&lMA}C#`JJN;r4X9@ZV/&&BJDn');
define('SECURE_AUTH_KEY',  'UMM,tv!(|}x(B]AQU{|Kj(y>x4$A|SY?XyDC`1bAcaAIj*GenQn6IKlNio0dvl.,');
define('LOGGED_IN_KEY',    '60YD[MFGN=o`R=;SWu:bOQ4pez~.>Tbc`lb/k6X.r}mgMud4l>Ty?iOD8vv0(Ilp');
define('NONCE_KEY',        '5~-^>{lOw%zx.yUzrEIKRm%|Y+`+ s*pX_d2]y4[hT(@Ro?ga5.1_G3uv$Rxc3/k');
define('AUTH_SALT',        'ZH6;>(p##/K^wfZ0_ j?CAGr`BbP_Q$Grtmy|>:1e+Qkn0EZ7dob36/7O8<.<|.G');
define('SECURE_AUTH_SALT', 'xVyyE~kNpp$xCUY|rH+[lq$%TI{Q7qLx4aYQDI3C*`R3<_+Cuv3zMSqmh/i9w$i?');
define('LOGGED_IN_SALT',   'D26J:k@!_jw9|y+}!@THK_F@@:6.(5APmba0xzP:P8%N?6U@V+9p~mm$Wuu.JpqF');
define('NONCE_SALT',       'RDqsx%#.kuB~D<OSedt<MPtKJ8:BR:(?/AWCux|k}!5,/JHIZor1x/~(nS{)E9AP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpm_';

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
