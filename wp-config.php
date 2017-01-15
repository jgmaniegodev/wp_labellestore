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
define('DB_NAME', 'wp2017_labellestore');

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
define('AUTH_KEY',         'rGrz!f`L@A;QRk<1UB^0xhc>a?qNMc0qG3t*1(~.GTY<Qa5]t3Gw^)pe}4v@6&I)');
define('SECURE_AUTH_KEY',  '.s=HD,f}C6!>2]{)[v{T`,?(79@,QK~C-U[t0,U!i_!U~jC;SsnpzG3)s#dWA(Xe');
define('LOGGED_IN_KEY',    'BL2VuH1~!b=&>.78h[VO;t:|0I3kFzMr4<6Zoc5/h>S3`FR=T+Yc)$g$5GuD-w|h');
define('NONCE_KEY',        's]l()2]47X5IO43Lk--R&E.]a.mJo7!$|$P{,}d{{E3>w53v^tzQn+x:f 9-K@+%');
define('AUTH_SALT',        'dUACwRcXrBA3qX_*#_T6Y}r_.eZrCX9Mjl*k~GF?N^V4A-g=G^U_P7l){aaQzw!L');
define('SECURE_AUTH_SALT', '`O=Z1~%b8xaSHxvtBE>U*!}iNz=RvXy{!dJd2vn=H/2Up$TGUQ<np *lbIfXS^z2');
define('LOGGED_IN_SALT',   's8^Eo,I?Pu2SBFI-xKqUaj`a6E?o~[nS$0*a>o@NzDdpDoxy,lY5wPC+RY[dnQ`r');
define('NONCE_SALT',       'CSr}4%P/4 anp;@_.*gH=mcOF@[^82Hj<nu:z^hD u#?]S_D!j5:`=WOtB21]!6*');

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
