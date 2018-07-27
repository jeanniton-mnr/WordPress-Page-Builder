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
define('DB_NAME', 'rejes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Applesuzuki04');

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
define('AUTH_KEY',         'oePrEeyLxud6lPzIG6UHH6MK3W7kBBRoNys7GX3jI65s23L64IqtuHYmuKMhSvBV');
define('SECURE_AUTH_KEY',  '2m9xsu18uDhhBP1woIOoweLhb4lBReVS1WHSGKqQ0ifoWIyaQxZxX3txi5zuSO3H');
define('LOGGED_IN_KEY',    'HZz3rppfWeATtK02QECE87raUPwex8iFRCllRN77p5sueixriTxuVbp7DlVJj3uZ');
define('NONCE_KEY',        'E3LnHFU11UKWSQSfO4YNrh29mTT8Wl30C1hvYOHdAQLtBHoknNYZVTq3sLpn5kyL');
define('AUTH_SALT',        'AmVNzi96I57rXkDEaqpwwHxFSs3YU2Z2iDQW02rEQ67KjxBglj833ZODTg8o0Yk8');
define('SECURE_AUTH_SALT', 'B61ewopX1LfBmOszQxPwaIoEPn5rdcBlUO0h0YazgI1Di6hJjNT0ckzJHXuBavLR');
define('LOGGED_IN_SALT',   'WsbGt2TomE3BWYm8phRAW1OTEZvr7UrCwcLkkG88c5oh0Ik0fCi6SpphvpPOZ8Rk');
define('NONCE_SALT',       'h1Qa9JGwSbHxGSXGxTMQhTazhHylTI2UkJigYFX7rt91rPJt3csJEObDgWOvjWKw');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
