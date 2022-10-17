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
define('DB_NAME', 'gazprom');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!@7a4VKE&ogjW2bXbA84XM9w0^7KU)Nd14bJqG62j@8kQX9Yd%5nzjY!3!M2OiEG');
define('SECURE_AUTH_KEY',  'tTD6C0*yfgwB@)(#&osYNA6E0XWziS21vIhFX%fyDB4BMN9p2Q#2SbXcm%rfb9NW');
define('LOGGED_IN_KEY',    'FzAttxPb8Xmj)tBejHGW2TPO@4xuk0*z#iqssNeJa)JmP6yY^lUh6s0TUjxJw2w&');
define('NONCE_KEY',        '&vVaUCaz^5)Xv#8lMxiI2EDs3KhZJ8LOEkzrsB#r2obVxzNsMFHfQ09v13*znBGz');
define('AUTH_SALT',        '%9KMc9s8dX6KTidX14o9EX#Au)YgDWPDX2euDP6QA#gUFSQBSrpyK!a8AQA@FRsJ');
define('SECURE_AUTH_SALT', '6tuv0%w1bMjff9D#U%geGOV6H^TmVFDkRMqIR4W37h4yK1zGI3Qtfm&9I0JnYg9K');
define('LOGGED_IN_SALT',   'CfjcbQ%KWekV8&tAfK*E&VMeS^!whhZgS)GdZPqJ*rUh9BbVRzw#DT5StzqWB8nB');
define('NONCE_SALT',       'C#SxeyPuVqt9p8Mkde0pCG0S3s%^yGuuCoo)Wg2An5^TayoL@XuMHv20q7#B3*al');

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
