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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'uNc(xX;210M*`0`t+ A MIji2yoXRJhcL6{uA+R+O2kJLyX$S|^#we@:d!2XpUli');
define('SECURE_AUTH_KEY',  '+U*ERWmh_pb^D}rAH~x||4)?YC$`=P@0T (iT`{l-ks1[3iHM3(*==+>hG8?YE84');
define('LOGGED_IN_KEY',    'tClmbL?TQQlg7uio:`is;XDn*-NO=afCu&pBD/ZR,]<9Tv|8GByl`vu+EH(V|Am]');
define('NONCE_KEY',        '+!gPSi_|H6-7Y-+.Nk|;mHt|8K@o6-79Iv&Av75e554y:}o-`Gi{:3^H3TxRGY52');
define('AUTH_SALT',        'Ni70%^eJy[E#HKW+#|%hufyBoK&S#Jn,-s3RDu2X1n}Le}>ay:S*:+=Q++z<}L%S');
define('SECURE_AUTH_SALT', 'O-4I#*?$QihDJ4l]7-;y2L`)Hzjt*X0+cQ%13n*0PuRoT$/%gt6JR>tUZb0ak-OZ');
define('LOGGED_IN_SALT',   'TPs3BsMWO=799:(+(?o3TH+%kp7Hu5wzgD2uDlo}hCyic[$NmV}}fefVUk[ZHGBd');
define('NONCE_SALT',       '+ngL<O+P b,TvPRGbl(]=CoVOnXjo+m057.uF]W|%/T{e]7VftDtb q8FmTan?W-');

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
define('WPLANG', 'en');

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