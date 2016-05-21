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
define('DB_NAME', 'photography');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Wh-s~i$8Ou{8;.>ilEtnqYoLgA]`90.<t#,<mW@?giZYfs%&<$481H?bR,uYAQOt');
define('SECURE_AUTH_KEY',  'sb>T1U<h*aK_wiR%$unOU6/@(=khb@m9gW-lvtP2S[U|A34kK($s?Nx)VVB~;r$h');
define('LOGGED_IN_KEY',    'sclAbX*Er|FO&jin8lq3;>C(s+56wopJ,)t96JN|-?Z+>x-LP-P+=G$o}fB1:g^Y');
define('NONCE_KEY',        's`Y5}t{V+Zjn#Ir7 A:le@4g:Q*_>r.smr(Oh_stpG0:2[bdkb0pT/@#R=6{zU!-');
define('AUTH_SALT',        ':IYA[Vm|fi=jX)<>/R*tG(j9dIlyrUqEKs!c5DGfQC^A~B)q<7L]whD!hAscI.0$');
define('SECURE_AUTH_SALT', 'Eu;k&3jW^xPSL|N~>3W/~l?,Yd9As-us{$H-kf0975XF3+gwEu#`-SV&gsE]_l:}');
define('LOGGED_IN_SALT',   'd4cufMxs[|bd0m_Qer!vRr*rR`WBQ*e5^KL(8o@I|!JGwHcr2t!;AKAvOPv06X6}');
define('NONCE_SALT',       'fv/Dk)LBkWTqc/TZ<)9P_5p~/n{PE28yPk C o#|w[8WeL8_?Crr`0jN?bN=&tEp');

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
