<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ';s,_*bU2[6q<*5:~9nw{1s:HBwA kVy$U>%P,3Tjf5C}BdHZ<:~#>72J{6SdMA+J' );
define( 'SECURE_AUTH_KEY',   'KQEfTz40^-%D_@I(fOD6~x3lu<t`$[Y-b4JI%@*je+-DS]<cn9,SL=lGD,/t dq/' );
define( 'LOGGED_IN_KEY',     '2$%Tpm<}`v)&E<pw=[Uc]5],[@K~e7>^==y8i4RiXAiFTmXcd9ZN@=33YRazU;6o' );
define( 'NONCE_KEY',         'Zu~{sgXykP/l-x#nwwE1dWD]ai9}gUhN5M2-n~}/p5}|u?EJHcgbac0F-voVgDTT' );
define( 'AUTH_SALT',         'b]%MCpsW)lD Q|;Iyj@jH*{t>em41}mWHxZlQBQ1~i0sva.]C{Di:XJ$ade WGLy' );
define( 'SECURE_AUTH_SALT',  '$Kvj7WleV?snjP;__?+HZC>IV#Rh1fVj(H:g(vogf|4<EIM-}{y}*,S)XuNwF*>g' );
define( 'LOGGED_IN_SALT',    '1O[mV=vJ1%MZn2N*_|L4/:E`:ryeTQq#+w~)=bWwhn)^~b;M;4|8iVx]1`Rw<yg+' );
define( 'NONCE_SALT',        'pt.!R7 hu}uBAjV+4@_Ak;;L$>HO9`k4za2V?Jibah_kKS48yT?aLP4+IBq?nsqR' );
define( 'WP_CACHE_KEY_SALT', 'z=k9JXF35 I)iDzb&^e#AKP>qFVwG~NRyzs,_%9=6WVwOCc~}U-roiX#L,&%wZIL' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
