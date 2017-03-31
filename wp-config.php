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
define('AUTH_KEY',         'pPC/LIoOp=73t9ztRU.N|X9^v-UuTsFwUK]H1i5YzT[!iCA%;xv>m96HEPGO)gr!');
define('SECURE_AUTH_KEY',  'H2|~kQDA;#P2ivthU>Hc1P}o,F#MR2Z(cAR47h!E98`j>Cg@Xyf4XZQZ@otuclE=');
define('LOGGED_IN_KEY',    '=!7RCQz[_GpePo1k9B`:DkW!lX|ABoCt7]naP AHC2#@Y<ywZo6AZ;M|De=<lTMu');
define('NONCE_KEY',        'Y+wE*ls}bkg^9`/hQ{V}!GZb-(ZE:m}(=B~W,)gtvMrNY`[;tD*&/_T->-H<LK?|');
define('AUTH_SALT',        'G+coMZQG,ltj.ac~yo6Y_?RpwmA9^ZjGH8~%: lo#v`e~RHY3WGZPe!98p&7/n:[');
define('SECURE_AUTH_SALT', '%Az;K37%YjZI*}1HzC]-%OMrvL-,E*|;C=L),54[Ev-2.HG>d:NWC#NQJ2Mh0C]D');
define('LOGGED_IN_SALT',   'XZTRBQz[|k2k9p=.KZlD{O8K*J8-TK<>`+wqx]9]-^9L_T%4#9_zUl(68Fr>rXJK');
define('NONCE_SALT',       '9)gbQMcoaF4g;X8~j~VuRs[muhI c=SwqavCnai?3a]E$V6I<cWE[C>^Z%qc>R5G');

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
