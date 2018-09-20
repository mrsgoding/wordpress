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
define('AUTH_KEY',         '42?7]i?T162.L>V1#Zl~t<V=AK?L9I*Cdz$Y<~ukWntYxB# z<8|f}rQ8T_1c|Pm');
define('SECURE_AUTH_KEY',  'c2AXbwA1D]x(`Hxexdod dn7qL9F=.VaA7cgrq6+)^cN~BbV4zaar(r(~e/x4OCF');
define('LOGGED_IN_KEY',    'eT<>6v]lWoREgC3f.8S0M2;<}26)@+ KvT{IQp.69ARkh4]e!J__+)c:;_[u]EFE');
define('NONCE_KEY',        '0WDD0Jimr-!#7AV)PE]31Rs+cqIc^]t9GB@.|TpUn3#hNrhz@Qrp5>hhTzTW-:BY');
define('AUTH_SALT',        'KNAdz|qF$BHMT$]i=wrF|qf(.uZ88&TAwQL47Ov37Oy~N.XHrwUxQHMHq$q{2>%Y');
define('SECURE_AUTH_SALT', 'N[o,R1r( -0#xa4&^xWiJUP]ps*~NM!e@v$iRVFj.|~r`s/GumO5`%#,hG<wo$I|');
define('LOGGED_IN_SALT',   ':6<6+F|meW[N/RKFnBZLfYZH.r%frQ?fuBObJ=bvZjNPq`_ZONK2I g$u68 u}TT');
define('NONCE_SALT',       'xRh$a,ST7T/F/Tu<]$pjW+KhC1JnKXe*?X&je^[,Le$>keNXMd^3>B1KQj`rea.f');

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
