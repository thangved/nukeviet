<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$lang_translator['author'] = 'Phạm Chí Quang';
$lang_translator['createdate'] = '21/6/2010, 19:30';
$lang_translator['copyright'] = '@Copyright (C) 2009-2021 VINADES.,JSC. Tous droits réservés';
$lang_translator['info'] = 'Langue française pour NukeViet 4';
$lang_translator['langtype'] = 'lang_module';

$lang_module['global_config'] = 'Configuration générale';
$lang_module['site_config'] = 'Configuration du site';
$lang_module['lang_site_config'] = 'Configuration selon langue: %s';
$lang_module['bots_config'] = 'Moteurs de recherche';
$lang_module['ip_version'] = 'Version IP';
$lang_module['site_domain'] = 'Nom du domaine principal du site';
$lang_module['sitename'] = 'Nom du site';
$lang_module['theme'] = 'Interface par défaut du PC';
$lang_module['mobile_theme'] = 'Interface par défaut pour téléphone portable';
$lang_module['themeadmin'] = 'Thème de l\'Administration';
$lang_module['default_module'] = 'Module par défaut à l\'Accueil';
$lang_module['description'] = 'Description du site';
$lang_module['rewrite'] = 'Activer rewrite';
$lang_module['rewrite_optional'] = 'Filtrer les accents sur url';
$lang_module['rewrite_op_mod'] = 'Enlever le nom du module sur url';
$lang_module['disable_content'] = 'Notification de fermeture du site';
$lang_module['submit'] = 'Enregistrer cette configuration';
$lang_module['err_writable'] = 'Erreur: impossible d\'entregister le fichier: %s merci de vérifier les permissions (chmod) de ce fichier.';
$lang_module['err_supports_rewrite'] = 'Erreur: le serveur ne supporte pas le module rewrite';
$lang_module['err_save_sysconfig'] = 'Les modifications ont été enregistrées, mais le système est pas configuré pour enregistrer le fichier. Écrivons les autorisations pour le fichier% s puis refaisons';
$lang_module['security'] = 'Configuration de la sécurité';
$lang_module['flood_blocker'] = 'Capacité contre flood';
$lang_module['is_flood_blocker'] = 'Active la capacité contre flood';
$lang_module['max_requests_60'] = 'Le nombre de requests maximum pendant 1 minutes';
$lang_module['max_requests_300'] = 'Le nombre de requests maximum pendant 5 minutes';
$lang_module['max_requests_error'] = 'Erreur: Veuillez entrer un numéro de requête supérieur à 0';
$lang_module['nv_anti_iframe'] = 'Contre IFRAME';
$lang_module['nv_anti_agent'] = 'Vérifier et bloquer les ordinateurs qui n\'ont pas d\'agent';
$lang_module['nv_allowed_html_tags'] = 'Code HTML est accepté par le système';
$lang_module['nv_debug'] = 'Mode développeur';
$lang_module['nv_debug_help'] = 'Si cette option est activée, le système affichera des erreurs pour aider les développeurs à vérifier facilement le processus de programmation. Si votre site Web fonctionne dans un environnement réel, <strong>désactivez</strong> cette option.';
$lang_module['domains_restrict'] = 'Limitez les noms de domaine aux balises HTML dangereuses (iframe, object, embed...)';
$lang_module['domains_whitelist'] = 'Nom de domaine approuvé (un domaine par ligne). S\'il est activé, limitez le nom de domaine dans la section ci-dessus, le système autorisera l\'utilisation des ressources et des liens de ces domaines';
$lang_module['captcha'] = 'Configuration de captcha';
$lang_module['captcha_num'] = 'Le nombre de caractères de l\'image-captcha';
$lang_module['captcha_size'] = 'Taille de l\'image-Captcha';
$lang_module['recaptcha_ver'] = 'La version de reCaptcha';
$lang_module['recaptcha_sitekey'] = 'Clé du site ReCaptcha';
$lang_module['recaptcha_secretkey'] = 'Clef secrète ReCaptcha';
$lang_module['recaptcha_type'] = 'Type de ReCaptcha (Version 2 uniquement)';
$lang_module['recaptcha_type_image'] = 'Images (recommandé)';
$lang_module['recaptcha_type_audio'] = 'son';
$lang_module['recaptcha_guide'] = 'Cliquez ici pour obtenir la clé des paramètres du site clé et secret.';
$lang_module['captcha_for_module'] = 'Type de captcha appliqué aux modules';
$lang_module['captcha_'] = 'Ne pas utiliser';
$lang_module['captcha_captcha'] = 'Image-Captcha';
$lang_module['captcha_recaptcha'] = 'reCaptcha';
$lang_module['captcha_type_recaptcha_note'] = 'reCaptcha sera remplacé par Image-Captcha jusqu\'à ce que vous déclariez la Clé du site et la Clef secrète de reCaptcha.';
$lang_module['select_all_as'] = 'Sélectionnez pour tous les modules';
$lang_module['captcha_area'] = 'Zones où le captcha du module Utilisateurs est appliqué';
$lang_module['captcha_area_a'] = 'Où connexion administrateur';
$lang_module['captcha_area_l'] = 'Où l\'utilisateur se connecte';
$lang_module['captcha_area_r'] = 'Où les invités s\'inscrivent';
$lang_module['captcha_area_m'] = 'Où l\'invité récupère le courrier d\'activation';
$lang_module['captcha_area_p'] = 'Où l\'invité change le mot de passe';
$lang_module['captcha_comm'] = 'Sujets auxquels le captcha est appliqué lors des commentaires';
$lang_module['captcha_comm_0'] = 'Masqué';
$lang_module['captcha_comm_1'] = 'Si vous n\'êtes pas membres';
$lang_module['captcha_comm_2'] = 'On n\'est pas le responsable des commentaires';
$lang_module['captcha_comm_3'] = 'Présente dans tous les cas';
$lang_module['captcha_comm_select'] = 'Choisissez s\'il vous plaît';

$lang_module['mail_sender_name'] = 'Nom de l\'expéditeur';
$lang_module['mail_sender_name_default'] = 'Laissant vide, le système prendra la valeur spécifiée (le cas échéant) ou le nom du site';
$lang_module['mail_sender_email'] = 'Adresse e-mail de l\'expéditeur';
$lang_module['mail_sender_email_default'] = 'Laissant vide, le système prendra à partir de la valeur spécifiée (le cas échéant), le courrier électronique du système ou le site Web en fonction de la méthode d\'envoi du courrier. Remarque: cette valeur peut ne pas fonctionner selon le serveur d\'envoi ou de réception';
$lang_module['mail_reply_name'] = 'Nom de la réponse';
$lang_module['mail_reply_name_default'] = 'Si aucun paramètre n\'est transmis au moment de l\'envoi du courrier, le système prendra cette valeur. Laissant vide, le système prendra du nom du site';
$lang_module['mail_reply_email'] = 'Courriel de réponse';
$lang_module['mail_reply_email_default'] = 'Si aucun paramètre n\'est transmis au moment de l\'envoi du courrier, le système prendra cette valeur. Laissant vide, le système prendra à partir du courrier électronique du site';
$lang_module['mail_force_sender'] = 'Expéditeur forcé. Utilisez pour forcer toutes les informations sur l\'expéditeur à être valides selon la configuration ici au lieu des informations dans chaque e-mail envoyé';
$lang_module['mail_force_reply'] = 'Réponse forcée. Utilisez pour forcer toutes les informations de réponse à être valides selon la configuration ici au lieu des informations dans chaque e-mail envoyé';
$lang_module['ftp_config'] = 'Configuration de FTP';
$lang_module['smtp_config'] = 'Configuration de la remise des e-mails';
$lang_module['server'] = 'Serveur ou Lien';
$lang_module['port'] = 'Porte';
$lang_module['username'] = 'Identifiant';
$lang_module['password'] = 'Mot de passe';
$lang_module['ftp_path'] = 'Chemin d\'accès';
$lang_module['mail_config'] = 'Méthode d\'envoie d\'e-mail';
$lang_module['type_smtp'] = 'SMTP';
$lang_module['type_linux'] = 'Linux Mail';
$lang_module['type_phpmail'] = 'PHPmail';
$lang_module['smtp_server'] = 'Infos du serveur';
$lang_module['incoming_ssl'] = 'Connexion sécurisée';
$lang_module['verify_peer_ssl'] = 'Ssl verify peer';
$lang_module['verify_peer_ssl_yes'] = 'Oui';
$lang_module['verify_peer_ssl_no'] = 'Non';
$lang_module['verify_peer_name_ssl'] = 'Ssl verify name peer';
$lang_module['outgoing'] = 'Ordinateur central SMTP) Courrier envoyé';
$lang_module['outgoing_port'] = 'Outgoing port(SMTP)';
$lang_module['smtp_username'] = 'Infos du compte';
$lang_module['smtp_login'] = 'Nom d\'utilisateur';
$lang_module['smtp_pass'] = 'Mot de passe';
$lang_module['smtp_error_openssl'] = 'Erreur: Voitre serveur ne supporte pas d\'envoyer les e mails par ssl';
$lang_module['smtp_test'] = 'Vérifiez la configuration';
$lang_module['smtp_test_subject'] = 'Test email';
$lang_module['smtp_test_message'] = 'Ceci est un courrier électronique de test pour vérifier la configuration du courrier. Supprimez-le simplement!';
$lang_module['smtp_test_success'] = 'Envoyer un email avec succès';
$lang_module['smtp_test_fail'] = 'Email échoué';
$lang_module['smtp_test_note'] = 'Remarque: Cliquez sur Enregistrer la configuration s\'il y a une modification dans le formulaire ci-dessus avant de vérifier la configuration.';
$lang_module['notify_email_error'] = 'Créer des notifications système en cas d\'échec de l\'e-mail';
$lang_module['bot_name'] = 'Moteurs de recherche';
$lang_module['bot_agent'] = 'Agent du serveur';
$lang_module['bot_ips'] = 'IP du serveur';
$lang_module['bot_allowed'] = 'Autoriser';
$lang_module['site_keywords'] = 'Mots clés pour les moteurs de recherche';
$lang_module['site_logo'] = 'Nom du fichier logo';
$lang_module['site_banner'] = 'Nom du fichier bannière';
$lang_module['site_favicon'] = 'Nom du fichier favicon';
$lang_module['site_email'] = 'E-mail du site';
$lang_module['error_set_logs'] = 'Sauvegarder l\'erreur du système';
$lang_module['error_send_email'] = 'E-mail recevant les notifications d\'erreurs';
$lang_module['lang_multi'] = 'Activer le multi-langage';
$lang_module['lang_geo'] = 'Activer la définition de langue selon pays';
$lang_module['lang_geo_config'] = 'Configuration de la fonctionnalité de définir la langue selon pays';
$lang_module['site_lang'] = 'Langue par défaut';
$lang_module['site_timezone'] = 'Fuseau horaire';
$lang_module['current_time'] = 'Heure: %s';
$lang_module['date_pattern'] = 'Format de la date';
$lang_module['time_pattern'] = 'Type d\'affichage: Heure Minute';
$lang_module['gzip_method'] = 'Activer gzip';
$lang_module['proxy_blocker'] = 'Contrôler et bloquer les ordiateurs utilisant le proxy';
$lang_module['proxy_blocker_0'] = 'Sans contrôle';
$lang_module['proxy_blocker_1'] = 'Contrôle léger';
$lang_module['proxy_blocker_2'] = 'Contrôle moyen';
$lang_module['proxy_blocker_3'] = 'Contrôle strict';
$lang_module['str_referer_blocker'] = 'Activer le contrôle des liens vers le site depuis l\'exterieur';
$lang_module['my_domains'] = 'Les domaines du site';
$lang_module['searchEngineUniqueID'] = 'ID de moteur de recherche Google<br />(forma 000329275761967753447:sr7yxqgv294 , <a href="http://nukeviet.vn/vi/faq/Su-dung-Google-Custom-Search-tren-NukeViet/" target="_blank">voir détails</a>)';
$lang_module['variables'] = 'Configuration du cookie session';
$lang_module['cookie_prefix'] = 'Préfixe de cookie';
$lang_module['session_prefix'] = 'Préfixe de session';
$lang_module['live_cookie_time'] = 'Le temps de vie du cookie';
$lang_module['live_session_time'] = 'Le temps de vie de la session';
$lang_module['live_session_time0'] = '=0 Vivre jusqu\'à ce que le navigateur soit fermé';
$lang_module['cookie_secure'] = 'cookie secure';
$lang_module['cookie_httponly'] = 'cookie http seul';
$lang_module['cookie_SameSite'] = 'cookie SameSite';
$lang_module['cookie_secure_note'] = 'Un cookie sécurisé est envoyé uniquement si la requête est faite en https:, sauf pour localhost';
$lang_module['cookie_httponly_note'] = 'Empêche JavaScript d\'accéder au, par exemple, au travers de la propriété Document.cookie';
$lang_module['cookie_SameSite_note'] = 'Contrôle si un cookie est envoyé avec les requêtes d\'origine croisée';
$lang_module['cookie_SameSite_note2'] = 'Cet attribut ne prend effet que lorsque la version php du serveur >= 7.3';
$lang_module['cookie_SameSite_Empty'] = 'Dépend du navigateur';
$lang_module['cookie_SameSite_Lax'] = 'Les cookies ne sont pas envoyés lors de sous-requêtes intersites normales (par exemple pour charger des images), mais sont envoyés lorsqu\'un utilisateur navigue vers le site d\'origine';
$lang_module['cookie_SameSite_Strict'] = 'Les cookies ne seront envoyés qu\'avec les requêtes effectuées sur le domaine de même niveau, et ne seront pas envoyées sur les requêtes vers des sites tiers';
$lang_module['cookie_SameSite_None'] = 'Les cookies seront envoyés dans tous les contextes (l\'attribut cookie Secure doit être défini)';

$lang_module['is_user_forum'] = 'Confier la gestion d\'utilisateurs au forum';
$lang_module['banip'] = 'IPs interdits';
$lang_module['banip_ip'] = 'IP';
$lang_module['banip_timeban'] = 'Commencer';
$lang_module['banip_timeendban'] = 'Terminer';
$lang_module['banip_funcs'] = 'Fonctions';
$lang_module['banip_checkall'] = 'Sélectionner tout';
$lang_module['banip_uncheckall'] = 'Desélectionner tout';
$lang_module['banip_title_add'] = 'Ajouter l\'adresse IP interdite';
$lang_module['banip_title_edit'] = 'Modifier les adresses IP interdites';
$lang_module['banip_address'] = 'Adresse IP';
$lang_module['banip_begintime'] = 'Commencer';
$lang_module['banip_endtime'] = 'Terminer';
$lang_module['banip_notice'] = 'Note';
$lang_module['banip_confirm'] = 'Confirmer';
$lang_module['banip_mask_select'] = 'Sélectionnez';
$lang_module['banip_area'] = 'Zone interdite';
$lang_module['banip_nolimit'] = 'Perpétuel';
$lang_module['banip_area_select'] = 'Séletionnez la zone';
$lang_module['banip_noarea'] = 'pas encore déterminé';
$lang_module['banip_del_success'] = 'Suppression avec succès!';
$lang_module['banip_area_front'] = 'Site';
$lang_module['banip_area_admin'] = 'Administration';
$lang_module['banip_area_both'] = 'Site et Administration';
$lang_module['banip_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer cette IP de la liste des IPs interdits?';
$lang_module['banip_mask'] = 'Masque IP';
$lang_module['banip_edit'] = 'Éditer';
$lang_module['banip_delete'] = 'Supprimer';
$lang_module['banip_error_ip'] = 'Saisissez IP à interdire';
$lang_module['banip_error_area'] = 'Merci de sélectionner la zone';
$lang_module['banip_error_validip'] = 'Erreur: Adresse IP invalide';
$lang_module['banip_error_write'] = 'Erreur: Vous n\'avez pas permis le système de pouvoir écrire les fichiers,faites chmod le dossier  <strong>%s</strong> en mode 0777 ou "Change permission" pour que le système puisse écrire les fichiers, sinon créez le fichier banip.php avec un contenu comme ce qui est au dessous et le mettez dans le dossier <strong>%s</strong>';
$lang_module['nv_admin_add'] = 'Ajouter une tâche';
$lang_module['nv_admin_edit'] = 'Modifier la tâche';
$lang_module['nv_admin_del'] = 'Supprimer la tâche';
$lang_module['cron_name_empty'] = 'Vous n\'avez pas encore donné le nom de la tâche';
$lang_module['file_not_exist'] = 'Fichier inexistant';
$lang_module['func_name_invalid'] = 'Vous n\'avez pas déclaré la fonction ou le nom de fonction est invalide';
$lang_module['func_name_not_exist'] = 'Cette fonction n\'existe pas';
$lang_module['nv_admin_add_title'] = 'Pour ajouter une tâche, remplissez les champs ci-dessous';
$lang_module['nv_admin_edit_title'] = 'Pour modifier la tâche, remplissez les champs ci-dessous';
$lang_module['cron_name'] = 'Nom de la tâche';
$lang_module['file_none'] = 'Pas d\'accès';
$lang_module['run_file'] = 'Accès au fichier d\'exécution';
$lang_module['run_file_info'] = 'Fichier d\'exécution est un des fichiers dans le répertoire &ldquo;<strong>includes/cronjobs/</strong>&rdquo;';
$lang_module['run_func'] = 'Accès à la fonction';
$lang_module['run_func_info'] = 'Fonction doit être commencée par &ldquo;<strong>cron_</strong>&rdquo;';
$lang_module['params'] = 'Paramètre';
$lang_module['params_info'] = 'Séparer par la virgule';
$lang_module['interval'] = 'Répêter la tâche après';
$lang_module['interval_info'] = 'Si vous entrez &ldquo;<strong>0</strong>&rdquo;, la tâche est faite une seule fois';
$lang_module['start_time'] = 'Commencer à';
$lang_module['min'] = 'minutes';
$lang_module['hour'] = 'heures';
$lang_module['day'] = 'jours';
$lang_module['month'] = 'mois';
$lang_module['year'] = 'an';
$lang_module['is_del'] = 'Supprimer après avoir terminé';
$lang_module['isdel'] = 'Supprimer';
$lang_module['notdel'] = 'Non';
$lang_module['is_sys'] = 'Tâche créée par';
$lang_module['system'] = 'Système';
$lang_module['client'] = 'Administrateur';
$lang_module['act'] = 'Etat';
$lang_module['act0'] = 'Inactif';
$lang_module['act1'] = 'Actif';
$lang_module['last_time'] = 'Dernière exécution';
$lang_module['next_time'] = 'Prochaine exécution';
$lang_module['last_time0'] = 'Jamais exécuté';
$lang_module['last_result'] = 'Résultat de la dernière exécution';
$lang_module['last_result_empty'] = 'non déterminé';
$lang_module['last_result0'] = 'Mauvais';
$lang_module['last_result1'] = 'Terminé';
$lang_module['closed_site'] = 'Mode de maintenance';
$lang_module['closed_site_0'] = 'Mode normal';
$lang_module['closed_site_1'] = 'Fermeture du site, seulement l\'administrateur suprême peut se connecter';
$lang_module['closed_site_2'] = 'Fermeture du site - les administrateurs générales peuvent se connecter';
$lang_module['closed_site_3'] = 'Fermeture du site - les administrateur peuvent se connecter';
$lang_module['closed_site_reopening_time'] = 'Heure de réouverture prévue';
$lang_module['ssl_https'] = 'Rediriger les requêtes HTTP vers HTTPS';
$lang_module['ssl_https_module'] = 'Les modules activés avec SSL';
$lang_module['ssl_https_0'] = 'Désactivé';
$lang_module['ssl_https_1'] = 'Postulez sur l\'ensemble du site';
$lang_module['ssl_https_2'] = 'Appliquer dans la zone d\'administration';
$lang_module['note_ssl'] = 'Etes-vous certain que votre site soutien https? Sinon vous ne pouvez pas entrer dans le site après la sauvegarde.';
$lang_module['timezoneAuto'] = 'Selon l\'ordinateur du visiteur';
$lang_module['timezoneByCountry'] = 'Selon le pays du visiteur';
$lang_module['allow_switch_mobi_des'] = 'Échange possible de thème de mobile et de bureau';
$lang_module['allow_theme_type'] = 'Échange le type de thème';
$lang_module['ftp_auto_detect_root'] = 'Détection automatique';
$lang_module['ftp_error_full'] = 'Rentrer complètement les infos pour détecter automatiquement Remote path';
$lang_module['ftp_error_detect_root'] = 'Il est impossible de déterminer, merci de vérifier l\'identifiant et le mot de passe';
$lang_module['ftp_error_support'] = 'Votre hébergeur a bloqué FTP, veuillez leur contacter pour l\'activer';
$lang_module['static_url'] = 'Hosting de fichiers statiques';
$lang_module['static_url_note'] = 'Laissez-le vide ou remplissez le nom de domaine d\'hébergement qui ne fait pas partie des domaines du site ou de leurs sous-domaines. La structure de répertoires de cet hébergement doit être identique à la structure du site';
$lang_module['cdn_url'] = 'Hosting CDN pour javascript, css';
$lang_module['remote_api_access'] = 'Activer l\'API à distance';
$lang_module['remote_api_access_help'] = 'La désactivation de tous les accès API de l\'extérieur sera bloquée. Les API internes sont toujours utilisées normalement';
$lang_module['remote_api_log'] = 'Activer la journalisation d\'API à distance';

$lang_module['plugin'] = 'Configurer le plugin';
$lang_module['plugin_file'] = 'Fichier exécutable';
$lang_module['plugin_area'] = 'Hook';
$lang_module['plugin_viewarea'] = 'Voir par Hook';
$lang_module['plugin_number'] = 'Priorité';
$lang_module['plugin_func'] = 'Fonctions';
$lang_module['plugin_add'] = 'Ajouter des plugins';
$lang_module['plugin_status_ok'] = 'Compatible';
$lang_module['plugin_status_error'] = 'Pas compatible';
$lang_module['plugin_integrate'] = 'Intégré';
$lang_module['plugin_integrated'] = 'Plugins intégrés';
$lang_module['plugin_available'] = 'Autres plugins disponibles';
$lang_module['plugin_note'] = 'S\'il y a plusieurs plugins avec le même hook, voir le hook spécifique pour changer la priorité de chaque plugin';
$lang_module['plugin_type'] = 'Type';
$lang_module['plugin_type_sys'] = 'Système';
$lang_module['plugin_type_module'] = 'Module';
$lang_module['plugin_error_exists_module'] = 'Erreur: le module %s n\'existe pas';
$lang_module['plugin_error_no_hook'] = 'Ce plugin prend des données du module %s. Vous devez pré-installer le module %s ou son module virtuel';
$lang_module['plugin_error_no_receive'] = 'Ce plugin prend des données du module %s. Vous devez pré-installer le module %s ou son module virtuel';
$lang_module['plugin_error_exists'] = 'Les plugins pour ces modules existent déjà. Veuillez sélectionner un autre module';
$lang_module['plugin_choose_hook_module'] = 'Sélectionnez le module source';
$lang_module['plugin_choose_receive_module'] = 'Sélectionnez le module cible';

$lang_module['notification_config'] = 'Configuration du fonctionnement d\'annoncer';
$lang_module['notification_active'] = 'Lever les annonces en cas de nouvelles activations';
$lang_module['notification_autodel'] = 'Supprimer automatiquement après un temps';
$lang_module['notification_autodel_note'] = 'Remplir <strong>0</strong> si vous ne voulez pas supprimer automatiquement';
$lang_module['notification_day'] = 'jour';
$lang_module['is_login_blocker'] = 'Activer journal bloc fonction incorrectement plusieurs fois';
$lang_module['login_number_tracking'] = 'Mauvaises connexions piste maximale période';
$lang_module['login_time_tracking'] = 'Time Tracking';
$lang_module['login_time_ban'] = 'Forclose Connexion';
$lang_module['two_step_verification'] = 'Nécessite deux étapes journal d\'authentification';
$lang_module['two_step_verification0'] = 'Ne demandez pas';
$lang_module['two_step_verification1'] = 'Admin Area';
$lang_module['two_step_verification2'] = 'Espace extérieur du site';
$lang_module['two_step_verification3'] = 'Toutes les zones';
$lang_module['two_step_verification_note'] = 'Remarque: Cette configuration s\'applique à tous les comptes des groupes, si vous devez configurer chaque groupe individuellement, sélectionnez cette valeur en tant que <strong>%s</strong> puis modifiez le <a href="%s">groupe</a> , puis sélectionnez le champ de déclenchement d\'authentification en deux étapes requis comme vous le souhaitez';
$lang_module['site_phone'] = 'Nom du fichier Téléphone';
$lang_module['noflood_ip_add'] = 'Ajouter une adresse IP pour ignorer le contrôle d\'inondation';
$lang_module['noflood_ip_edit'] = 'Correction du contournement de l\'inondation IP';
$lang_module['noflood_ip_list'] = 'L\'IP contourne le contrôle d\'inondation';
$lang_module['cron_interval_type'] = 'Répéter le type (si disponible)';
$lang_module['cron_interval_type0'] = 'Après l\'heure de lancement dans la base de données';
$lang_module['cron_interval_type1'] = 'Après l\'heure de lancement réelle';
$lang_module['cors'] = 'Cross-Site config';
$lang_module['cors_exceptions'] = 'Le blocage ne s\'applique pas aux cas suivants';
$lang_module['cors_site_restrict'] = 'Protégez l\'espace utilisateur';
$lang_module['cors_site_restrict_help'] = 'Activez cette option pour bloquer toutes les demandes de publication externes dans la zone utilisateur';
$lang_module['cors_site_valid_domains'] = 'Requêtes POST des domaines autorisés';
$lang_module['cors_site_valid_ips'] = 'Requêtes POST provenant d\'adresses IP autorisées';
$lang_module['cors_site_allowed_variables'] = 'Requêtes POST contenant des variables autorisées';
$lang_module['cors_site_allowed_variables_note'] = '<ul class="list-unstyled"><li>- Entrez la valeur dans le format de chaîne de requête URL (par exemple, <code>key1=value1</code>, <code>key1=value1&key2=value2</code>, <code>key1=value1&key2</code>...). Saisissez une valeur par ligne.</li><li>- Seuls les noms de variables (<code>key1</code>, <code>key2</code>...) sont acceptés qui contiennent les caractères [a-zA-Z0-9] et le trait de soulignement.</li><li>- Seules les valeurs variables (<code>valeur1</code>, <code>valeur2</code>...) sont acceptées qui sont vides ou contiennent les caractères [a-zA-Z0-9], tiret , trait de soulignement, point ou @. Une valeur de variable vide sera interprétée comme n\'importe quelle valeur.</li></ul>';
$lang_module['cors_admin_restrict'] = 'Protéger la zone d\'administration';
$lang_module['cors_admin_restrict_help'] = 'Activez cette option pour bloquer toutes les demandes de publication externes dans la zone d\'administration';
$lang_module['cors_admin_valid_domains'] = 'Requêtes POST des domaines autorisés';
$lang_module['cors_admin_valid_ips'] = 'Requêtes POST provenant d\'adresses IP autorisées';
$lang_module['cors_valid_domains_help'] = 'Entrez un domaine par ligne (veuillez entrer le formulaire complet http://votredomaine.com), les demandes de publication de ces domaines sont autorisées';
$lang_module['cors_valid_ips_help'] = 'Entrez une adresse IP par ligne, la demande de publication de ces adresses IP est autorisée';
$lang_module['allow_null_origin'] = 'Autoriser POST avec une origine NULL';
$lang_module['ip_allow_null_origin'] = 'Les adresses IP sont autorisées à POST avec une origine NULL';
$lang_module['ip_allow_null_origin_help'] = 'Entrez une adresse IP par ligne, si ce champ est laissé vide, toutes les adresses IP sont autorisées';
$lang_module['admin_2step_opt'] = 'Les méthodes de vérification en deux étapes sont autorisées dans l\'administration';
$lang_module['admin_2step_default'] = 'La méthode de vérification en deux étapes par défaut dans l\'administration';
$lang_module['admin_2step_appconfig'] = 'Configurez l\'application ici';
$lang_module['cookie_notice_popup'] = 'Activer la notification contextuelle des cookies lorsqu\'un utilisateur visite un site Web pour la première fois';
$lang_module['smime_certificate'] = 'Certificat de signature d\'e-mail S/MIME';
$lang_module['smime_cn'] = 'Nom commun du certificat';
$lang_module['smime_issuer_cn'] = 'Émetteur de certificat';
$lang_module['smime_subjectAltName'] = 'Certifier';
$lang_module['smime_validFrom'] = 'Certificat valable du';
$lang_module['smime_validTo'] = 'Certificat valable jusqu\'au';
$lang_module['smime_signatureTypeSN'] = 'Type de signature';
$lang_module['smime_purposes'] = 'Finalités';
$lang_module['smime_add'] = 'Ajouter un certificat';
$lang_module['smime_download'] = 'Télécharger';
$lang_module['smime_add_button'] = 'Exécuter';
$lang_module['smime_pkcs12'] = 'Fichier de certificat (.pfx/.p12)';
$lang_module['smime_passphrase'] = 'Mot de passe pour déverrouiller le fichier de certificat';
$lang_module['smime_download_passphrase'] = 'Générer un nouveau mot de passe pour déverrouiller le fichier de certificat';
$lang_module['smime_del'] = 'Supprimer';
$lang_module['smime_del_confirm'] = 'Voulez-vous vraiment supprimer ce certificat?';
$lang_module['smime_pkcs12_ext_error'] = 'Le fichier de certificat doit avoir une extension pfx ou p12';
$lang_module['smime_pkcs12_cannot_be_read'] = 'Le certificat ne peut pas être lu';
$lang_module['smime_pkcs12_smimesign_error'] = 'Le certificat ne prend pas en charge la signature électronique S/MIME';
$lang_module['smime_pkcs12_overwrite'] = 'Le certificat est déjà sur le serveur. Voulez-vous l\'écraser avec ce nouveau fichier de certificat?';
$lang_module['smime_note'] = 'La signature numérique S/MIME sera envoyée avec le message si l\'e-mail de l\'expéditeur a un fichier de certificat stocké sur le serveur.';
$lang_module['DKIM_signature'] = 'Messagerie identifiée par clés de domaine DKIM';
$lang_module['DKIM_note'] = 'La signature DKIM sera envoyée avec le message si elle est validée et stockée sur le serveur.';
$lang_module['DKIM_verified'] = 'DKIM vérifié';
$lang_module['DKIM_unverified'] = 'DKIM non vérifié';
$lang_module['DKIM_TXT_host'] = 'Nom TXT';
$lang_module['DKIM_TXT_value'] = 'Valeur TXT';
$lang_module['dkim_verify'] = 'Vérifier';
$lang_module['dkim_reverify'] = 'Vérifier à nouveau';
$lang_module['dkim_del'] = 'Supprimer';
$lang_module['dkim_del_confirm'] = 'Voulez-vous vraiment supprimer cette signature DKIM?';
$lang_module['DKIM_verify_note'] = 'Pour vérifier votre signature numérique DKIM, accédez à la page de gestion DNS du domaine, ajoutez un enregistrement TXT avec les paramètres ci-dessus, puis cliquez sur le bouton Confirmer (Vous devrez peut-être attendre un peu).';
$lang_module['DKIM_add'] = 'Ajouter une nouvelle signature DKIM';
$lang_module['DKIM_add_button'] = 'Exécuter';
$lang_module['DKIM_domain'] = 'Domaine de messagerie';
$lang_module['DKIM_domain_error'] = 'Erreur: le domaine de messagerie est mal formé';
$lang_module['DKIM_domain_exists'] = 'Ce domaine de messagerie est déjà sur le serveur';
$lang_module['DKIM_created'] = 'La signature DKIM pour le domaine de messagerie %s a été créée. Vous devez vérifier cette signature DKIM conformément aux instructions de la page suivante.';
$lang_module['dkim_included'] = 'Inclure la signature numérique DKIM (le cas échéant) lors de l\'utilisation de la méthode';
$lang_module['smime_included'] = 'Inclure le certificat S/MIME (le cas échéant) lors de l\'utilisation de la méthode';

$lang_module['csp'] = 'Paramètre CSP';
$lang_module['csp_desc'] = 'Content-Security-Policy (CSP) est le nom d\'un en-tête de réponse HTTP que les navigateurs modernes utilisent pour améliorer la sécurité de la page Web. Le CSP vous permet de restreindre la façon dont les ressources telles que JavaScript, CSS ou à peu près tout ce que le navigateur charge.';
$lang_module['csp_details'] = 'Des détails';
$lang_module['csp_default-src'] = 'Politique par défaut, utilisée dans tous les cas sauf si elle est remplacée par une directive plus précise.';
$lang_module['csp_script-src'] = 'Politique dédiée aux scripts';
$lang_module['csp_object-src'] = 'Politique dédiée aux plugins (object, embed ou applet)';
$lang_module['csp_style-src'] = 'Politique dédiée aux styles (CSS)';
$lang_module['csp_img-src'] = 'Politique dédiée aux images (img, mais aussi url() ou image() de CSS, ou élément de lien lié à un type d\'image (ex: rel=”icon”)';
$lang_module['csp_media-src'] = 'Politique dédiée aux médias (video, audio, source ou track)';
$lang_module['csp_frame-src'] = 'Politique dédiée aux frames (iframe ou frame)';
$lang_module['csp_font-src'] = 'Politique dédiée aux polices';
$lang_module['csp_connect-src'] = 'Politique dédiée aux connexions depuis un objet XMLHttpRequest ou un WebSocket';
$lang_module['csp_form_action'] = 'Définit les sources valides qui peuvent être utilisées comme action de formulaire.';
$lang_module['csp_base_uri'] = 'Politique de sécurité limitant les valeurs possibles d\'un élément &lt;base&gt;.';
$lang_module['csp_frame_ancestors'] = 'Définit les parent valides qui peuvent intégrer une page grâce aux éléments &lt;frame&gt;, &lt;iframe&gt;, &lt;object&gt;, &lt;embed&gt;, &lt;applet&gt;.';
$lang_module['csp_manifest-src'] = 'Définit les sources valides pour les fichiers de manifeste d\'application.';
$lang_module['csp_prefetch-src'] = 'Spécifie les ressources pouvant être préchargées ou préaffichées.';
$lang_module['csp_act'] = 'Activer CSP';
$lang_module['csp_script_nonce'] = 'Activer l\'attribut nonce pour le script';
$lang_module['csp_script_nonce_note'] = 'Si cette option est activée, les gestionnaires d\'événements en ligne tels que onclick, onload... des balises HTML seront désactivés';
$lang_module['csp_source_none'] = 'None - Bloque l\'utilisation de ce type de ressource.';
$lang_module['csp_source_all'] = 'All - Autorise toutes les origines pour cette ressource.';
$lang_module['csp_source_self'] = 'Self - Correspond à l\'origine actuelle mais pas aux sous-domaines.';
$lang_module['csp_source_data'] = 'Data - Permet d\'utiliser &quot;data: URI&quot; comme source de contenu.';
$lang_module['csp_source_default-src_unsafe-inline'] = 'Unsafe Inline - Permet l\'utilisation de ressources en ligne telles que les éléments &lt;script&gt; et &lt;style&gt;.';
$lang_module['csp_source_script-src_unsafe-inline'] = 'Unsafe Inline - Permet l\'utilisation de ressources en ligne, telles que les éléments &lt;script&gt; en ligne, &quot;javascript: URLs&quot; et les gestionnaires d\'événements en ligne (par exemple: onclick, onsubmit...).';
$lang_module['csp_source_style-src_unsafe-inline'] = 'Unsafe Inline - Permet l\'utilisation de ressources en ligne telles que l\'élément &lt;style&gt; et l\'attribut de style.';
$lang_module['csp_source_unsafe-eval'] = 'Unsafe Eval - Permet l\'utilisation de eval() et de méthodes similaires pour créer du code à partir de chaînes.';
$lang_module['csp_source_hosts'] = 'Liste des hôtes sources acceptés (Entrez une valeur par ligne)';
$lang_module['csp_source_none_confirm'] = 'Si cette option est activée, les autres ressources de la directive actuelle seront désactivées. Tu es d\'accord?';
$lang_module['csp_source_hosts_note'] = 'Les expressions d\'hôte valides peuvent inclure: http://*.example.com, mail.example.com:443, https://store.example.com, *.example.com, https://example.com:*';

$lang_module['rp'] = 'Paramètre RP';
$lang_module['rp_desc'] = 'Referrer-Policy (RP) est le nom d\'un en-tête HTTP que les navigateurs modernes utilisent pour contrôler la quantité d\'informations de référent (envoyées via l\'en-tête Referer).';
$lang_module['rp_desc2'] = 'Types d\'informations sur le référent (peuvent être envoyées via l\'en-tête Referer):<ul><li>Origin: inclut le scheme (ex: http, https), host (ex: nukeviet.vn) et le port (ex: 80, 443)</li><li>Path (chemin absolu sur le serveur, ex: thumuc1/index.php)</li><li>Querystring (ex: ?name=ferret&color=purple)</li></ul>';
$lang_module['rp_details'] = 'Des détails';
$lang_module['rp_act'] = 'Activer RP';
$lang_module['rp_no_referrer'] = 'L\'en-tête Referer sera entièrement omis. Aucune information de référent n\'est envoyée avec les demandes.<br/>Le système NukeViet ne prend pas en charge cette directive!';
$lang_module['rp_no_referrer_when_downgrade'] = 'L\'origin, le path, et la querystring de l\'URL sont envoyés comme référent quand le niveau de sécurité du protocole reste le même (HTTP vers HTTP, HTTPS vers HTTPS) ou s\'améliore (HTTP vers HTTPS) mais ne sont pas envoyés quand si la destination est moins sécurisée (HTTPS vers HTTP)';
$lang_module['rp_origin'] = 'N\'envoie que l\'origin du document comme référent. Par exemple, un document à l\'adresse https://example.com/page.html enverra le référent https://example.com/.';
$lang_module['rp_origin_when_cross_origin'] = 'Envoie l\'origine, le chemin et les paramètres de requête pour les requêtes same-origin et seulement l\'origine du document dans les autres cas.';
$lang_module['rp_same_origin'] = 'Un référent sera envoyé aux page de même origine, mais des requêtes vers des adresses externes n\'enverront aucune information sur le référent.';
$lang_module['rp_strict_origin'] = 'N\'envoie que l\'origine du document comme référent quand le niveau de sécurité du protocole reste le même (HTTPS vers HTTPS) mais n\'envoie rien si la destination est moins sécurisée (HTTPS vers HTTP).';
$lang_module['rp_strict_origin_when_cross_origin'] = 'Envoie l\'origine, le chemin et les paramètres de requête pour les requêtes de même origine, n\'envoie que l\'origine quand le niveau de sécurité du protocole reste le même pour les requêtes vers des adresses externes (HTTPS vers HTTPS) et n\'envoie rien si la destination est moins sécurisée (HTTPS vers HTTP).';
$lang_module['rp_unsafe_url'] = 'Envoie l\'origine, le chemin et les paramètres de requête pour toutes les requêtes sans tenir compte du niveau de sécurité. Cette valeur divulgera des informations potentiellement confidentielles de la part des URL de ressources HTTPS vers des origines non sécurisées. Considérez les conséquences de ce paramétrage avant de vous en servir.';
$lang_module['rp_note'] = 'Si vous voulez spécifier une règle à appliquer par défaut dans les où la règle voulue n\'est pas supportée par les navigateurs, utilisez un liste de valeurs séparées par des virgules avec la règle voulue fournie en dernière position: Referrer-Policy: no-referrer-when-downgrade, strict-origin-when-cross-origin. Ici, no-referrer-when-downgrade ne sera utilisée que si strict-origin-when-cross-origin n\'est pas supportée par le navigateur.';
$lang_module['rp_directives'] = 'Referrer-Policy directives';
$lang_module['end_url_variables'] = 'Variables pouvant être insérées à la fin d\'une URL';
$lang_module['end_url_variables_note'] = 'Ce paramètre est indépendant du paramètre «Vérifier l\'URL dans la zone d\'interaction utilisateur» ci-dessus';
$lang_module['end_url_variable_name'] = 'Nom de variable';
$lang_module['end_url_variable_dataformat'] = 'Format des données';
$lang_module['end_url_variable_name_note'] = 'Acceptez uniquement: [a-zA-Z0-9] et souligner';
$lang_module['lowercase_letters'] = 'Lettres minuscules [a-z]';
$lang_module['uppercase_letters'] = 'Lettres majuscules [A-Z]';
$lang_module['number'] = 'Nombre [0-9]';
$lang_module['dash'] = 'Tiret';
$lang_module['underline'] = 'Souligner';
$lang_module['dot'] = 'Point';
$lang_module['at_sign'] = '@';
$lang_module['request_uri_check'] = 'Vérifier l\'URL dans la zone d\'interaction utilisateur';
$lang_module['request_uri_check_page'] = 'Par configuration de chaque page';
$lang_module['request_uri_check_not'] = 'Ne pas vérifier';
$lang_module['request_uri_check_path'] = 'Vérifier uniquement la partie chemin de l\'URL';
$lang_module['request_uri_check_query'] = 'Vérifier les parties chemin et requête de l\'URL';
$lang_module['request_uri_check_abs'] = 'Vérifier l\'URL avec une précision absolue';
