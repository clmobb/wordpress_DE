<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es auf der {@link http://codex.wordpress.org/Editing_wp-config.php
 * wp-config.php editieren} Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt, wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'wordpress_DE');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'root');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase. 
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         '4z+jDQ$%[$Em|)aq*TE+X>:FS:@!,1;I=;AWm=lCCSq<vj]Z6%GW-~;TJG#r&g.n');
define('SECURE_AUTH_KEY',  'Z9e2~2 c6J|1y.d>{aw=*1/t|Tt67XP4T/`-ll^lo|yMT7q^wmpm?IfqI<iX)`S6');
define('LOGGED_IN_KEY',    's~ez})$N|HrgObJ6cWu6T_|@dQczO4bLt| t^/^T#S;E#Sx2P:7?-QI]A-fPN@ ,');
define('NONCE_KEY',        'F_Vr;FIj)9S89ZOf)4r?DK;^ K^- LpULt]-tX-:i3H(2;(E+E|O&rwc|2~Oxa3#');
define('AUTH_SALT',        'z}V0-3%7A_:oC[ RzmY1{B)-)P!F:*/qib)&pY6M6q<7B5D, Y:v^_(P*.Lk`sdV');
define('SECURE_AUTH_SALT', 'CBurux(GpCOr*qhMBrV#,&w=PD]!&(x44=?w4y..7rWcq[{Q;rge*EdXvPmV{sn(');
define('LOGGED_IN_SALT',   '+fY7Dxk6Bz/>h#-U7sN9l+W<1CH~}KUHFg(A{|*8uWrohHZZl-j@e#8e-ULkY(sk');
define('NONCE_SALT',       'Igl9(5|QYhbv)AWCiMu1vmKe2Ts5+(*m:J|<Hg,VagGCo%7HhdWiU)QgJ#PNz{js');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Sprachdatei
 *
 * Hier kannst du einstellen, welche Sprachdatei benutzt werden soll. Die entsprechende
 * Sprachdatei muss im Ordner wp-content/languages vorhanden sein, beispielsweise de_DE.mo
 * Wenn du nichts einträgst, wird Englisch genommen.
 */
define('WPLANG', 'de_DE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');