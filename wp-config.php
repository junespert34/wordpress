<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wordpress');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wordpress');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}*lWm-nv-v!F#na+UPO3Hg|/2i&e>GOH2TQk}9;-ik+WeBgg]RZUAp&;fFs-KS3!');
define('SECURE_AUTH_KEY',  '-[lPaudm $nA%]<87@s__=ztB^)#fM0Yv)E^Hbv/+jqOuAPI%I)i||VjF7;E[H,2');
define('LOGGED_IN_KEY',    'O@y)u;Cfk4uA(}0fBevz~FNj|b+_T$=D5rUb?_tQ*Vp_0cirIzeyG/<9SF[y?Zff');
define('NONCE_KEY',        '2n{uZqyg:5!cw^RY|a594}^~pW;8ire12#X%6V$c:1,nE*u8<n%3DPV&1G8|ge=4');
define('AUTH_SALT',        '-$C#nEHD(885aCW)I},(DbzOMj8XdCR4!NF7WlF7<y]$ ;?%)glyESz46W%J2B*7');
define('SECURE_AUTH_SALT', ';du61Y!G3FORW#{H#x=Xhl.Gtn:9cypS:$q]5C /@hz%;Jp7-[8GGTP[%~W%ZQz/');
define('LOGGED_IN_SALT',   'L@=XZIvT_+xQt3; |pY;Ex@<Y1VFM4^7@:hlYvL!8--/e0HtI@i+lkyW|CrM0<1F');
define('NONCE_SALT',       '#N(IK4-[IYj+,7yGO)V O-B,#G XLz6{[.F<duXZ~gCbxk,yMWCU*JV`(JM9IL27');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');