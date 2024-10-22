<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SZPVsBSxU!z?sb{RnAswlMCg1zd$O6BuLsnJ*NC6KUW8`L^K[:Itm`,,-v9%2bI@' );
define( 'SECURE_AUTH_KEY',  'YP}3NU)oD-DNv`=,d!$l&7~~G[4a06cxewy[O-@_<D[eZ2YrO B!];>McP ;|KXc' );
define( 'LOGGED_IN_KEY',    ':Mx[m}JY]wf9dfF_9cE5oa$tkU+1bMd)w)DoE)t=wT<?=:[I59vdV7X@ZR&C@PmM' );
define( 'NONCE_KEY',        'f{1.?-uPnwx+0jcZswu~{UaWY^CWT<6RQi,sm;nG`K}z)JuJ9hIJj:]#Mj~r20*D' );
define( 'AUTH_SALT',        '4=tTEHW}POIZu,$,I9HM?6, `R;lru3_*=N254rQnmS=SK$%_Ldn2k6|JFhsrzJF' );
define( 'SECURE_AUTH_SALT', 'c;$#ZlyC67qivXe!aROp:Z!,,C`q@]gaOwcPBdu(jILoB5Yd.sML*BUc8&& 5}/w' );
define( 'LOGGED_IN_SALT',   '[pe@0Ov5VJMda_#nBzZ2ry#{U<mH srOgUW W$_I>=b`UN_l{6 Ij-;]KDB,.:hM' );
define( 'NONCE_SALT',       '0H4#X|Hf2^l6[:kdPOw78dd_QJVF,Y@FD+GcJ8.5a6qBc1m;)CG9*fPMq-amfLZ[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
