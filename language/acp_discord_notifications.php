<?php
/**
 * Discord Notifications extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Tyler Olsen, https://github.com/rootslinux
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * This file contains the language strings for the ACP settings page for this extension.
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP Extension Settings Page
	'DN_ACP_DESCRIPTION'			=> 'Ces paramètres permettent à divers événements du forum de transmettre des messages de notification à un serveur Discord.',

	'DN_MAIN_SETTINGS'				=> 'Réglages principaux',
	'DN_MASTER_ENABLE'				=> 'Activer Discord Notifications',
	'DN_WEBHOOK_URL'				=> 'Discord Webhook URL',
	'DN_WEBHOOK_DESCRIPTION'		=> 'URL Web généré par le serveur Discord. Voir: <a href="https://support.discordapp.com/hc/en-us/articles/228383668-Intro-to-Webhooks">cette article !</a> pour apprendre à créer un webhook.',
	'DN_POST_PREVIEW_LENGTH'		=> 'Post Preview Length',
	'DN_POST_PREVIEW_DESCRIPTION'	=> 'Spécifiez le nombre de caractères à afficher dans un aperçu du message (10 - 2000). Une valeur zéro désactive la prévisualisation du message',
	'DN_TEST_MESSAGE'				=> 'Message test',
	'DN_TEST_MESSAGE_TEXT'			=> 'Ceci est un test: Bonjour Discord!',
	'DN_TEST_DESCRIPTION'			=> 'Un message est envoyer au serveur Discord pour vérifier que la connexion avec phpBBB fonctionne.',
	'DN_SEND_TEST'					=> 'Envoyer un message de test',
	'DN_SEND_TEST_DESCRIPTION'		=> 'Envoie le contenu du message de test au webhook Discord. Utilisez-le pour vérifier le bon fonctionnement de votre url.',

	'DN_TYPE_SETTINGS'				=> 'Types de notifications',
	'DN_TYPE_DESCRIPTION'			=> 'Sélectionnez les types de notifications qui doivent générer des messages envoyés à Discord',
	'DN_POST_CREATE'				=> 'Nouveau sujet',
	'DN_POST_UPDATE'				=> 'Message édité',
	'DN_POST_DELETE'				=> 'Message supprimé',
	'DN_POST_LOCK'					=> 'Message vérouillé',
	'DN_POST_UNLOCK'				=> 'Message dévérouillé',
	'DN_TOPIC_CREATE'				=> 'Nouveau sujet',
	'DN_TOPIC_UPDATE'				=> 'Sujet édité',
	'DN_TOPIC_DELETE'				=> 'Sujet supprimé',
	'DN_TOPIC_LOCK'					=> 'Sujet vérouillé',
	'DN_TOPIC_UNLOCK'				=> 'Sujet dévérouillé',
	'DN_USER_CREATE'				=> 'Nouveau membre inscrit',
	'DN_USER_DELETE'				=> 'Compte utilisateur supprimé',

	'DN_FORUM_SETTINGS'				=> 'Notification Forums',
	'DN_FORUM_DESCRIPTION'			=> 'Sélectionner les forums qui doivent générer des notifications pour des événements spécifiques au forum, tels que ceux liés aux messages et aux sujets.',

	// Messages that appear after a user tries to send a test message
	'DN_TEST_SUCCESS'				=> 'Succès ! Vérifiez votre serveur Discord et vous devriez voir le message de test qui y est affiché.',
	'DN_TEST_FAILURE'				=> 'Il y a eu un problème pour envoyer un message de test. Vérifiez URL de votre Webhook et vérifiez que votre serveur répond aux exigences de cette extension !',
	'DN_TEST_BAD_MESSAGE'			=> 'Veuillez entrer au moins un caractère pour le message de test !',
	'DN_TEST_BAD_WEBHOOK'			=> 'Le texte saisi pour URL du Webhook  est incorrect. Veuillez vérifier ce paramètre et réessayer !',

	// Success/Failure messages that can be generated once the user saves
	'DN_SETTINGS_SAVED'				=> 'Les paramètres de notification Discorde ont été modifiés avec succès.',
	'DN_MASTER_WEBHOOK_REQUIRED'	=> 'Une URL Webhook Discord valide est nécessaire pour activer les notifications.',
	'DN_WEBHOOK_URL_INVALID'		=> 'URL du Webhook Discord doit être une URL complète et valide.',
	'DN_POST_PREVIEW_INVALID'		=> 'La longueur de prévisualisation doit être comprise entre 10 et 2000, ou 0 pour désactiver les prévisualisations.',
));
