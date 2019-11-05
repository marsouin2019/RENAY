<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'marsouin' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'marsouin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mrsma' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',/d<[VEPtu#KD`msV|t*#-P Vj?n[KA4[bG%=)/$}G?Qc4`viL|`j<bgOFQmoZ!|' );
define( 'SECURE_AUTH_KEY',  'LsvDNeZMkwPxWIW];,>!R`^h7RJUm8c,5G8O_z2pq[nXFj0*&V):$?BGxS2~%9/#' );
define( 'LOGGED_IN_KEY',    'cQHd/I($s.R|<XLyc;IVP!pOBe!:%q(oaT@WfUh:s{k<]@NRPNi?s}R:/7$:713y' );
define( 'NONCE_KEY',        '}h<KBK->]A=1lz3^?#vcF*4kJEVQ%_g<<E01]v/GM.2bg+J={J1V7L@E3gOWS=8k' );
define( 'AUTH_SALT',        '.A|npz;[]Z4>=<)7%i6Z Zw8DngI^YM>(E(V^H1q_qlTAU!2 S;AmB0Xt%1!!zB;' );
define( 'SECURE_AUTH_SALT', '4Xo`%D[w.$O;mDmwybB-3uF$y0 5xB8::Q(cYd_e1V@GrI<Oh%G{u?{$TpWaJu5S' );
define( 'LOGGED_IN_SALT',   'M1pq.Fu/0C:Hg;._&t1)JNO/lV4/*%k]$g;GAm!m8Edx:(#ax&Ds@*_SA@yX/$zl' );
define( 'NONCE_SALT',       '_y ^1+!Em<Zk<BJ<(3T^,w<jE!daz=A$HaVf%s27-mt2`Fv)?|4fsZ5UQoYC%+|5' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ascg_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

