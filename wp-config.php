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
define('DB_NAME', 'personal-website');

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
define('AUTH_KEY',         'CZVC47bG4VB)wyVeRi1UK9J2Qq{]=+sq)_HdZ~h8%y-XH,g4da(i!+Sfmfwsx$;H');
define('SECURE_AUTH_KEY',  'Rm.zy]Hmjk=_iJf;MMSiynFti&[:T$n@ 3!Y9321Um%PE)k[vgw?3]f~TDgSoL.F');
define('LOGGED_IN_KEY',    '`j@LF*lL%-R^Va66=T*u/Uk6I?zDfl:)RnC>Nr1{u-Y}5 &!@aKUghof$[Y(%49a');
define('NONCE_KEY',        'CXVJ@`$E!s*t4Etk~,N:$1AO*Z[qk=1$m&KTj%/%z*fFgAj&40|:nJeA%q+-E|4s');
define('AUTH_SALT',        '3bh|Fjb3Ka{v!OcJCma#M:UTu;Q^g1SGbz.!T;p~RdYdI~#a>bN.g[&SwXM2~74<');
define('SECURE_AUTH_SALT', '{$gP4l q/:Pne(+<VB>;RBEp [K:Tzu#XSA+#%MlKhqIJ-$:yLa=m>d%tL%zgw>L');
define('LOGGED_IN_SALT',   'Abb5`xx;x)s4ptX@dVRda #1.lp]r_BC:[(hNNa2c{QYJl(``]&Y_D2oy/]8p@sv');
define('NONCE_SALT',       '&DQ#IGRj)^t|8m;h8@Ny>8{--=u%d],U7qAY7}0!tdyb{vMI@Y~/XjY@)I,u>{!D');

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
