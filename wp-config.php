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
define( 'DB_NAME', 'cutvdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`MrkL|_)*I-pXxQY[Wc 0(2H3s]TGh#)HQ,BqFufTqLc!^?YZ >h^fLfvR2N*V5:' );
define( 'SECURE_AUTH_KEY',  'm;3R+yySJ#URAE|8LIi=@X7Hs;f$Qf<wO~!b[bU!(^.RDB+n=<}o[|#sgU,hT!$|' );
define( 'LOGGED_IN_KEY',    'vj3t>cLnRD])]W(ppmiC`(optIX$SjutO;+~`5X[pGO4@?Dq~!!n2|^{j[RbZ-0~' );
define( 'NONCE_KEY',        'D[ /U(XW(}2|wp*7&G-i14AF8$,p,9P3LKHs<:eHCYBZVCe#D}s:8p-G:dd{%ivA' );
define( 'AUTH_SALT',        'jr *Wtr</tq6.N<p/3xlEPD[3Dhl`E;a@%VFU}1Ow;?VW<h7h}a *PM4U8]6e$j(' );
define( 'SECURE_AUTH_SALT', '=;.yYAL(Ku,jjvD2le~,g}5PE/b]Lmy2[sS5ny~[j]A!-G9hI{OYYC;gzHTu_G9h' );
define( 'LOGGED_IN_SALT',   '}$@7DUPDpH@w5MRk#/XPjeU9V.Oy;S58T1Iszu:n6@FpwN+$F s0!^l?A9yq`&:O' );
define( 'NONCE_SALT',       'RU!3,GkF!6tLKZ.7=O/Gm%TSH3)E)BPb#mJD/|8Ef$+L0.Fq }_ A988e`z~ubl:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cutv_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
