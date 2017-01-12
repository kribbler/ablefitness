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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'V4n9%PrIefOMPRilnv*nllQSdqTDN,Da)CRiJ=4+1UGc-[C<l*,d(GC7 INTnP:6');
define('SECURE_AUTH_KEY',  '_ |f?:|e[Z9}R1T!m2u5aG;/o~r}aDUI1}J7Q1+ip+_nx|ahiF%Xf c9Nm9HX-GT');
define('LOGGED_IN_KEY',    'JFVQLn|D9rG>)([nKxR+Mmy(P*Y((-I-?x29UL6Mg3J)Xq1Z||cXzK+hzv-!+g@V');
define('NONCE_KEY',        'vE *B:%:.r#t|;EXLK+CGQa!q2!S5#kY)F|&j]0-Xb/E&&sF1.dr~[7O_VFcK+|]');
define('AUTH_SALT',        '6-.|6AjjxG%WEQo7}&Aq02?l|$+L8zf+iJd/W-Gl)7p_M`:UyTl:9,C>-Q%am0:t');
define('SECURE_AUTH_SALT', 's<y[bxjR>S}/hJJuJQk-vSRWn+#tD3 Ir$s<Dd&TaGVl5NBnAY@3AS<vusDA|oU?');
define('LOGGED_IN_SALT',   't.}YM|}&-:7#lb`2N2f3Paq8ntT$qnp~r/SaOds[D8Qd*+go>KJ:B1piY!-MKY+Z');
define('NONCE_SALT',       'k@-5{>mt>~Seq]c+<jitA6*iH&qK8?^DYsSRwG>LonRL$.1RD{c:$*QRT+.6Gi{4');

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
require_once(ABSPATH . 'wp-settings.php');
