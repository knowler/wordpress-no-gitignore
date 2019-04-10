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
define('DB_NAME', 'wordpress_no_gitignore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:33306');

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
define('AUTH_KEY',         'aS3eSWZI 6,D2hF.]vytiNzX@NE[[:e0q1#elnfz`6DM$!%V3&MwY`0r2^Ub#Ikb');
define('SECURE_AUTH_KEY',  'oY{9nAG)s@m!m4m6LdK!V}L^8N_e&yKXdD|0q<qC<BUDz%LVavq@!Y;u>zL|?9vt');
define('LOGGED_IN_KEY',    'zf |y##>9&/Dfp[k1V|@-MCTK]HG?zB.JyNyKE-upp4+^1-[A<zWhTuj>(^dq<i3');
define('NONCE_KEY',        ']pwY=]JZ/c+g/]S&98)QJ&g:K7ovs&$~U- }YHBPwoQ|;d9e2G7Uh$jiYk/^EAig');
define('AUTH_SALT',        '<j1Xf(ZYe3{026(qA:#31U7S@cN{7:*[_ql]!mM9+ZF|3S**1J(biay]zUq5qnkr');
define('SECURE_AUTH_SALT', 'DMc6,m&{JayjC%0o[Z,$+:o`Q<nYdbH#~_mfMh<da {(M:Qye2PY6D)gL]n$4Atf');
define('LOGGED_IN_SALT',   '52s%N{>,6[3|yLsWOP8(LNqe&HieZMeoqA~bh`?mw:uzVL%qf3?{L`?vhgY,}/K9');
define('NONCE_SALT',       '_:ma-q:X4819B1b8O%1q}]+MwZ^Vh[)Q}a*/7;USy&XR0O69WJYlvg)8j [Cb9}u');

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
