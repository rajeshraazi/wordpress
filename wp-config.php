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
define('DB_NAME', 'mysql');

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
define('AUTH_KEY',         'W>2ig{/<CwQpJ,WHA#:AE@-%=ebff]c%5;.&V8!K ?,hN{I(X)S]3Ro).n{fx=ab');
define('SECURE_AUTH_KEY',  ';`g_(fZ#[tn.4[T?J{rt|IpuR/?qN2U(HI!Ve/Xd*G&hu:Q<Nt@R&0+H(YCD:$g_');
define('LOGGED_IN_KEY',    'd%F&=R$]FZmluT`v~,&(LJw`$C6Hhv_)zROzEz$a|$s|p+.:#XX&fB]}Z:9-1|ma');
define('NONCE_KEY',        '8lPIglXG<*KA&mdvG)nK:05=)3ws`hH%)Bkl&6WB1rvA,IM4vXb=?28c19NT|8FN');
define('AUTH_SALT',        'fucPm)7uc^*edzy3.mB,rhxYX>9U p6Ujs<9Q&ddt%zDx#KOWoKoA2Fk2]tg!<Z2');
define('SECURE_AUTH_SALT', 'u7C,_va^VZ~0M-=gLhs/2iI8Fqzv~/T]rGxm#RVF|MGgV}T!_A2Y0Ho%>ZeL,j|,');
define('LOGGED_IN_SALT',   '>Qs)l]gyQfg]w^BQW%qh[i3.7%`[p1gD KC[p~B?nR/,O:E?9lK.4#aMEyv(jd]K');
define('NONCE_SALT',       'Ee96Y/).[hW)q#VCHKO0Fv}[ZQXx^>+A/OB6r8W/YqTsNdDoCbqd1T-;EZ,eLGB9');

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
