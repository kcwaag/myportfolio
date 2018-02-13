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
define('DB_NAME', 'myportfolio');

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
define('AUTH_KEY',         'CCG1 <@#pZ(Kz&tA{ZCix)#/IMp96%jVz|z<H%?ijmC1EWOw&@jG3/d~LccciFiY');
define('SECURE_AUTH_KEY',  'w?=2>8[tHTO@N7LsdMPFTaLzc7(Q,:;&m`tO2K8zjNB*jo.b3#~D>eQMi&tOp0[?');
define('LOGGED_IN_KEY',    'ig}hji0Uu6WW:2X(jxu?v>RA2`u|O<LII?W62):{2t8WVoVHE<};ZIfr<cL,*r,Z');
define('NONCE_KEY',        'TVef]I&no,b1{{7SU*02RM*9uRjuP)2gMt`7pGxWy12(>6m1}_vG0CR-EXOm[?.<');
define('AUTH_SALT',        '-c_zpYK}vIs~&d~Pe+_{AnPg|$%N/QkVBQ)jbg7a3iC{/f/r#Or(n:[|(ES_{3P6');
define('SECURE_AUTH_SALT', 'JMd<KMW;4wBD:,.hrUp:JWI9z>iYqhZM{O!D*`V#J88g8D: ~Vx{,ZZ~dUSsg1EP');
define('LOGGED_IN_SALT',   '0=PY:5YKKy:VyA{E1@c[FQ10YV4fGK>NL;/{gr9OM}Md_.TuWY`5]*lb>fgg50|)');
define('NONCE_SALT',       'nPjDuEj{c7WVn;ytnvIvK@[@h;A~KWx2`dL(&;&]0 JX{)`.Mcony Cy/[OV]sak');

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
