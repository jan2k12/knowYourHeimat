<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define( 'DB_NAME', 'kyh' );

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define( 'DB_USER', 'kyh' );

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define( 'DB_PASSWORD', 'kyh2020' );

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define( 'DB_HOST', 'localhost' );

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '[-Ml.2TWq;mq4R8p)]bU?X!m>riJx[;F&dn7V;[)rNd!W4xT&5++-EUd*pF5&IQ{' );
define( 'SECURE_AUTH_KEY', '1l$~1XDJ]sA>#X,gEk3.@~Hs9l~^0v:YN]?Oy!e[z+T%?gJ|#E&Yn6akS`1ko@at' );
define( 'LOGGED_IN_KEY', ':EIByd>]Iai#!!/${=D7%Wv?x`9/l1&krk,@e#s36Iz+CDxf8DxmrRz,dA-nA(Eo' );
define( 'NONCE_KEY', '59qG!g/`3Rv+j^s;o!bDE$%8*bS/v#CSX5ZTR6l<HifK2Q`+elX~^C!HVNFRv:&F' );
define( 'AUTH_SALT', 'l):8hT^Xhk}])}Rku@EzqC0A.`)AMEJ{GPQS(::6O#Ci6tl2J8$PAn|&UL==i|(K' );
define( 'SECURE_AUTH_SALT', 'f0dQ9$dYWet=~J4@JB_lPF(inc[k/wmu&_88]6-JSE5deR4K3C.G;lKG>AO3uOLI' );
define( 'LOGGED_IN_SALT', '-ooTu:;5L4nP[DI!JEAUeUL0@mlZJ])GJ%Ljq|GSh6]7:kUx/xURUqcMR72D{my ' );
define( 'NONCE_SALT', 'sp3^wYM0`I{8^dNWAlJ.Kg2}gw(wK^VR: ht/%>DT}H$_OK.A9&jbyx8&fpx&M]z' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once( ABSPATH . 'wp-settings.php' );
define( 'FS_METHOD', 'direct' );