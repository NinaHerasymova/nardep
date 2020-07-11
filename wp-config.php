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
define('DB_NAME', 'wordpress');

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
define(
    'AUTH_KEY',
    '9zNH2m,g0gNQvePa@M6rnwrqW5jvMc2:x,DK^l&3Rrrya`T8Sfq%M$/TtcZ`]95g'
);
define(
    'SECURE_AUTH_KEY',
    'N0#V(d:P=9aComK;xkUL`uf0O;s8rFvdb_{hVx(.xQB{i4Gk1S25:BD+ +fvrxk+'
);
define(
    'LOGGED_IN_KEY',
    ':4F~-r/{d8T;Q.O+PpvB[luIIFy&]_Deyhb3-s#|C,Piuv.-kf%lyN$(FjRTa ~`'
);
define(
    'NONCE_KEY',
    'z(5BKOKWUXTnD4QIr:(iS!=g5pTq}}f(~# O(L50wJ<cB QT:/Hh1i?TIQdDlu(+'
);
define(
    'AUTH_SALT',
    'n+~xUVZa N<TZwqlq*aWx+WtGJ]gveZ*&Y]!9)HG[-} HO/]ed>>=|vs_d}8Og`n'
);
define(
    'SECURE_AUTH_SALT',
    't[sAhO&p .a@XY->XeT!U2D9CI&1gsCe(qQn=VaqR@ggjw#JoOnY`]7}r=ZRD9ms'
);
define(
    'LOGGED_IN_SALT',
    '1TB>yKjbW2!&Z5,FMvfRG^cg==vDap:Atv_p:7isEXjGCdLbTKkmeYoMAsC`+IoA'
);
define(
    'NONCE_SALT',
    'iI|KA;yVblZsrWT[-mwCmZt<;dPH?FXkc!f[6;}B;?MC:_|z`US0//xElKg,mV1_'
);

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
