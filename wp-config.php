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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'asmazquiz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '67cGy[6*Uyi;FlK=^<:ZSx,$3iG|xHpJ63Tr)OJ)_O*b%:SLdM#!l*wh%/)sWrbW' );
define( 'SECURE_AUTH_KEY',  'ZpNU9W<bH%3yyC6%OD^m?jbj0KEmIgQ|f!BRY?|Cs-1<ICKtWjqos]SBceb%<U_Y' );
define( 'LOGGED_IN_KEY',    'Oek^:`(%nfDOPkd]iH*$<q#M;-}&@BVX`xY{mD6vm[!zt=vJhHQNt5g$4[|O1J9m' );
define( 'NONCE_KEY',        'brO@19eI2MM?3+8Ma `T}0AAlH8Uac9SMHATD0:x,P}WolSqGXN(@dn/Dpd1qihb' );
define( 'AUTH_SALT',        '{.{!D$Df{nh#b;_>r,UvR](r2)v-L<`FIEw3wkq<Vfq_O/z[ *P_3_HJ:qQT{t )' );
define( 'SECURE_AUTH_SALT', '1RV^rN#-.X(EK;d8)r2t}FOP<^>_<<dnA4W%h0ShaP@U/X1bi$nJi!-v-GP%oA~}' );
define( 'LOGGED_IN_SALT',   'rtQ|*cSpc&+e4TMFB9H sI($QBc[N0yeLuL4-!TA(WuszpS^Dk&)bP>7&gX9ex[5' );
define( 'NONCE_SALT',       ',*Ag`{!nK*,5/S(Aa-zy}(Lu)yDr8#Sc-@-/6g<hrZ`J<;d^B^V)8FS22A +$lKm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'anan_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
