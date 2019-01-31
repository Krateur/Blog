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
define('AUTH_KEY',         '3D{{VOMZI$/f#IE)EtNrl}r2~nQk*tiHpji-pZ~)}$lVq_T,(E=/rqa&`W2f;1(Q');
define('SECURE_AUTH_KEY',  'K8?s{oc.va9YNJwDW%#D;5dW69dIO|L+oltD>1sTh=h9n/+~p73l?9yN-}0tx&[E');
define('LOGGED_IN_KEY',    '4s<}.Nf]E!;j`hE5@rw*&{??m28b=q$&Hh-$tF%EDuh3~Fas0hg,>(H0slgNBXqj');
define('NONCE_KEY',        '3:!?B[MZ9zN,KBSVTo|]v7 d7FO@wiaCk_,~B1n?_*:}j,;rJ7F_5TuAgPy -=W=');
define('AUTH_SALT',        's:gt9qYHPP_`<dh[`GigfE-PX=QnJzK4_}n7hpV}*Bwt92Hd%}$TdVacG$>_y3Hz');
define('SECURE_AUTH_SALT', 'zh.ja-c.MZl/m~|jDitQ6^K/D|,A?ESQcVuwDuI^#|>hj^!&[0i;5&n0`y -O._H');
define('LOGGED_IN_SALT',   '3g5wCt=yUal^XBU+J;qx9~Xqy`2]iz]s8#&+Gxz9DGn,f2M6<lfZShTb0Sw`Wjvz');
define('NONCE_SALT',       '[W`xy*@2Q]p;3n<*yIt)^##VjtEZVojY[P58jS~=E*ci:yT-P(|^9b%z3Y#!K`40');

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
