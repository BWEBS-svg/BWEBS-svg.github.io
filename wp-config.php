<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'cruicks6_wp89');

/** MySQL database username */
define('DB_USER', 'cruicks6_wp89');

/** MySQL database password */
define('DB_PASSWORD', 'p!Y530q!9S');

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
define('AUTH_KEY',         'gmm5ux7f1eqd65lafprqfbccwkmhypguoigmnb59upd0qq5awalxekts59xzwthy');
define('SECURE_AUTH_KEY',  'ah43dzhudlu9p3wntsb3oolboactsnf1svdch06jcsumik28yq9rfsgajd9ogx7b');
define('LOGGED_IN_KEY',    'tpbieldxpcdnbvp9x74tgsel6x4sj1f9nndfkrq4enit0ozerqfmawavwmqfcflc');
define('NONCE_KEY',        'o4cchmiuvvteta9haesukpqc8i5qtgeaqnb6vrncmhoycrdlzqalknlqjt44ziag');
define('AUTH_SALT',        'zpjupzgdwj4nyzx1fv2ircl4z02ywenc5sa9st2hcquohjdp2i3cnwguzoqyy40h');
define('SECURE_AUTH_SALT', '3ro2thudiyjidnmyrkwwkm5uccwklum0vc4be9v8awhs5qk3b1hpzjffupjalmgx');
define('LOGGED_IN_SALT',   '5a6unyyjy66uik1sfeq9ejcw5oyiwrk1goruwuqqfxylfxi5oeaylfblq70yscvf');
define('NONCE_SALT',       '6objjrmat3droema7ffrqwlp41a9vwqjnnavtp0wd2x4t4mskyryfww6ptbi41tz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpgn_';

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
