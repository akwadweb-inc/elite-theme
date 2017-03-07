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
define('DB_NAME', 'elite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'zoza');

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
define('AUTH_KEY',         '8OAz,A^F>*il)/GAaIL?p<WE5p6+XnLE+/e|!*:d&I(KKyQI44GD 1 56m:AXJLh');
define('SECURE_AUTH_KEY',  'Ov(C}9-J}ohoOyh,J~jR+/X~m.2H.3]$14L=qXH9tjqhNm$g]+FxZ-6z:X @j6*3');
define('LOGGED_IN_KEY',    '=18%b,[bjux@DpEDplF-VT/VvV/WD6s,Gsi)`Zl:?:>2IC(~w-em#LC]Spk4tJc<');
define('NONCE_KEY',        'S]sqA||#$k-EH[.o3o[_<e.viC]yFB%46h-QU#W4MY9WAhM*IO]6]p~R7_C9`qNA');
define('AUTH_SALT',        's6&>b+A$Ls+;Q#F2yBBN<e(I|KxtTg-X)%_d_C6Ql3K*lo+zIU&gu<U|6d7FCeBv');
define('SECURE_AUTH_SALT', ',S7wl=_!tR.I$Ft_?94HJi@::t4h tmy0eb|YBlB9v`koq222c(Yj9j +sEp}mh%');
define('LOGGED_IN_SALT',   '/SZ>ryR>H,@TLU>ZI14(ofQXSbY/9vge<}t6_H!ih?0(Xw%~OqnHct@ri=I,VE@M');
define('NONCE_SALT',       'WUCezTX(V$# PDg~(,=TQ*}0^QVk#SAIvDt` 65a78hy9:HI=(%l_]C:n9T*I9j8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ak_wp';

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
