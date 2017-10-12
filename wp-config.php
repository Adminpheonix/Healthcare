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
define('DB_NAME', 'adminHealthcare');

/** MySQL database username */
define('DB_USER', 'adminHealthcare');

/** MySQL database password */
define('DB_PASSWORD', 'adminHealthcare');

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
define('AUTH_KEY',         ':H?GKEy4QPoaqrQ;>^8D.c50p+1OYlskYUL<7;a(>p~rcOfK3/<U(H!p^kLx43Fa');
define('SECURE_AUTH_KEY',  'qS-zAqnCg9r3-E,lF`u@Ctwc`)i2~Vr(@!_Rju}YK>2)0bV }0B*9DQbc10_E4d*');
define('LOGGED_IN_KEY',    '5d~N/|c#As*LfzJl/b88%|`4)b0yZVQlC4Y-f@l>ZU[#dd`@5i[1<{MIKT?V*wKG');
define('NONCE_KEY',        'L^5HQarp{S?fa~+Hn$YP!.,tCyydH{P<2z3tG{yczHn|9F+]sQsU.?i%/@~k2[f6');
define('AUTH_SALT',        '(#jOpV2Tz~`WZuc/8+OiN*dT)(VhJ1kMU-9f?l6 <Jr!qFz0DHz}h1xKu(^qF8)v');
define('SECURE_AUTH_SALT', 'c&(+WRVEeKd-C{SLPQ98pNi+42As~#qA9i>Nf=c`vs5(5y@`p54i>MMxW;T0by*(');
define('LOGGED_IN_SALT',   'XvJ_k+|M{,:(@;HhK=xP8(3lj%B:}%2^!EpKExdW% puf-|29}X&,L E{xXU@o;t');
define('NONCE_SALT',       '0{22^V}9BxJtrJ*VoGws]Co=3z[;%T`PuvE=0}P|$( I@b4EKKsY+rFQp9E.Q(+I');

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
