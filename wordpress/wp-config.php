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
define('DB_NAME', 'cv_teque');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'AC(f3/jsF,m,p}*;|J8.^X:mc3Gc1bar_5W6GYMy7>2[Q[LPAk3JyykyOGdw@:<E');
define('SECURE_AUTH_KEY',  'w2J81K_oN#*ac6$}q91tbkgU<+vZZdT}<!h1P?C-h)mXlF%g*roh@6(W(|5 po`T');
define('LOGGED_IN_KEY',    'S@~k{CLjOf>0$X@?Hs%PPg4ZnZ467B@X2?sRT=3d?>yu&sTTYL``7XqK9b!g_lYJ');
define('NONCE_KEY',        'NNV}S!Rz(9(s1ey!&j;YZW(.1T}X,#i>/ZB~JulP9Pb)T~N<KI|R[^q~Tp~!N3Z[');
define('AUTH_SALT',        '_D$ytqL+,xiKJBccc2S@~{cG_||)suH{w*Bn68hFE 2,2bL2)VM`$(<Avv2B77dd');
define('SECURE_AUTH_SALT', '`B6~w+T(6/nHzRL,w^<>N&cR#Cs5h_V|->zP*(bYHo}ze_w` ?iC*}3h~#(s2:2-');
define('LOGGED_IN_SALT',   '8{wf2,oQxPG}%pFJbUENQVK3JtVevi$lj/$;K0G[UlR-,y<Pp<:+z32Y]i;L]=nN');
define('NONCE_SALT',       '9^r}~Cw_zE}X`7c#V,4Jd6EI,tVj|cF%XgBi5<;lc;[9Hv-QQ{l]kBr0&l9Vl%&$');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ct_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');