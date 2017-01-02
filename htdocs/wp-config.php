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
define('DB_NAME', 'test_clusterpoint');

/** MySQL database username */
//define('DB_USER', 'web_clusterpoint');

/** MySQL database password */
//define('DB_PASSWORD', '66JXbaQPBseKfjEhlw8x');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Disable revisions **/
define('AUTOSAVE_INTERVAL', 300 ); // seconds
define('WP_POST_REVISIONS', false );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-%T[%1(3QIeF!3qTAv?s@3P!+5Nb7:L:Z(J?~KIaPl7WQB QE-~-Td>l[Kg(g(v#');
define('SECURE_AUTH_KEY',  '6c{7.TSX+JM-6F}CMelJD5(V5}k[sye|eC2OJ%-CN*Ke8s1Kx8<LA]&6^yuf@}i%');
define('LOGGED_IN_KEY',    'kA[;%5MO=~`h8u@_($cx B^P]K< WnKG&im~D[e4f7!zvVX1:|$`D`n}fQ>2bZ2@');
define('NONCE_KEY',        'nA5T[4K)Kr|S/?CO3jVDrA;9`rY+N$^&L4:>kiaBnDj[h~,=|iN`yyitOW-V<2Ao');
define('AUTH_SALT',        'BO(Y2$):{4;z?m&@yjtXu.F+?V~u4ydh+ v8!5QqgHES+-M6g|6z2~8B@|*?yG^ ');
define('SECURE_AUTH_SALT', '2N^qG-VjF$_2%k@f/fv8tb_#Mv V+U5}O?r^W|(4=5Y@C~R_q[wl5sDX5@C}-90P');
define('LOGGED_IN_SALT',   '5EQLv>>VJ;Ep,4GPB({g|0JkWCoz!pGJ+hm.!uA)dtrSS|}?cD-H9MFL!~b|9l%G');
define('NONCE_SALT',       'P;|KtaA@!=q4r^QE{ljqE_[h}qH~{25;d i TEZXG|rg8+)tG8ttU8SK)`,Cpu_!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cp_';

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
define('WP_DEBUG', true);

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 1 );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
