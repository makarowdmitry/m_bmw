<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u0084692_wordpress_a');

/** MySQL database username */
define('DB_USER', 'u0084_wordpres_6');

/** MySQL database password */
define('DB_PASSWORD', '9R0zXsm_D8');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',       '!VTVJNa@qpUScN@DQvG(dpnj21D4gjm@imW(ByAlv&vVx4ifCzC02nvgUhf(POeT');
define('SECURE_AUTH_KEY',       'LLc4pn!C#rZuLe6*(CwrwV7PDVX&*6L!1oI#1HD5dnAKRzK3gD*W5lMD!yWkosWM');
define('LOGGED_IN_KEY',       'v6s@Tl@F1ijKyL!3xvgQ%6yNu*ytBOj7rgXy3CwgJcAkddR6nNT%sMzq*jXRc*Px');
define('NONCE_KEY',       'zeOI#DOVp!Qgc&K9aZHLzfKTyawQOzvLWzyzV#3wR8vQc*69h2GIySg9AbRVhKrN');
define('AUTH_SALT',       'hq^svED56gu1SE@mc9DZ^AYDm7QFB5I32zH#9en^P0i66CCK1LI1*aO^R9ZmJvDG');
define('SECURE_AUTH_SALT',       '6cGGNJCv!0t4O%rHZPfBjFF6wOY23jXd4m6%040LYJf&Z4^X&#6XFQcTMfAB9#cs');
define('LOGGED_IN_SALT',       '6p&eNmhPm&L2v(lN@ncbVCuF4BbCWKd@SvwoUYYvtE0iLbiDcInDG80p0P#Y&AYM');
define('NONCE_SALT',       'ZM)VgUNs9Ko2UUNC3X6bVln#@h0QMbXM3pR(I6AoB0wh%1T8AmtaAvpi&nEFy2DY');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'RMqEo4_';

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
require_once(ABSPATH . 'wp-settings.php');

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG',       'ru_RU');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
