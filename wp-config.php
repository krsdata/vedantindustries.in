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
define('DB_NAME', 'vedantin_db');

/** MySQL database username */
define('DB_USER', 'vedantin_user');

/** MySQL database password */
define('DB_PASSWORD', 'Fv_PpNP2z]?z');

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
define('AUTH_KEY',         'nN0PGDTX^8[hDTF::-f#@N+}z6M],SpGLYX`c!29-1+^NGN_WINPsz>5-)W865>4');
define('SECURE_AUTH_KEY',  ' ,f8)9]xTN|KG/rN4-!>m@AEN<Ln{l,=Qe#l.e@wRulj#G|0~,SRc(n.OcVAyi:F');
define('LOGGED_IN_KEY',    'OoCbe,!w%MRM_75NSYB[Wne@}qJ{%I=kh2~=DeXU^pq2QgBjv3ng1nLmvBm?hIdw');
define('NONCE_KEY',        'vbmBNc#gqtLhJh902Q={8?&u~U*/hkNr|mKLyN{(_Prh] 4>-$rt]t9LJ,l*F:;A');
define('AUTH_SALT',        'KlT@TE_kvBBTa^?6G*Hrj0?P*(`ZYupO19et|#JwJI}Vmm|cVQKVhm=[E7S?3VWP');
define('SECURE_AUTH_SALT', 'OEl.y:yvLiW[2+-,7L,P^?[WR1s&@%pR?Za-3Z7g{~-MVnF?Lz|cUax <QrJbsys');
define('LOGGED_IN_SALT',   'J$o&&V r9>}gG|u8|0%Z{Gg[#@I^_|kthDumvybe3o9AOC5^]aJZtZ,&vkTZvk1)');
define('NONCE_SALT',       '|>|-Lbed[O7J)9*IqTZyoh@}6kQ5QoB*]`[qdK56[uL;)eC-GzOF0Z>HOX@/t-uP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vi_';

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
