<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** MySQL database username */

/** MySQL database password */

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define('FS_METHOD', 'direct');
define('AUTH_KEY',         'mY.=0->ObfESRCaG~5|;yk(+`&p#%=(OD9?WN{~B+l-Z|CHTBcvj_/~x))Rt,xVc');
define('SECURE_AUTH_KEY',  'bR-K9>UG-MW6 EnbZFB_.edNp2Mg@:vWuT%&l9Y%9W{1|L1d-N2HQ6NPCS0&*K!4');
define('LOGGED_IN_KEY',    'uD1yo3c5x$yf.3$+S~u6aO,!<lVLJ s7cwN?h@:GDI$ue1&l8jH]4y>/Md@vCBp+');
define('NONCE_KEY',        'pF3wf3f~!,*-1F4VT{;|Bl^-G0iMh}4T*mA:98t &i1~QlL7&fH`-uNG8Kb8q}zl');
define('AUTH_SALT',        'X(~`1unwAvqR+{}-_$JJ?yo5L*Qn^A7Nq6>M7!<ePx_AjRp2;+)wJ!_--t-4+3FI');
define('SECURE_AUTH_SALT', 'VvL|SOZ-~`[4:+Fp7)5f6g)?=$`Vm=m}Um{VHwLIPO-UakN=[`hdGwBc_,7,y~?O');
define('LOGGED_IN_SALT',   'T8cgs/+HdVI[oe=Ql;((&3AwcRPN4nIU`c1Y|_>)=@XZ#KQ!Gz=5Z1<ys>{hv+$r');
define('NONCE_SALT',       't_.}/lNgN+Tz8M#V1;%<S9i|J-n]!Nt]iRT9v-jo7;rS<P+{Hb+:H%Z:*x9bT_:H');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'huEEU9aNgf');
require_once(ABSPATH . 'wp-settings.php');
