<?php
/**
 * Discord Notifications extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Tyler Olsen, https://github.com/rootslinux
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * This file contains the language strings for the notification messages that are transmitted to Discord.
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// These messages are used by the event/notification_event_listener class. The notifications naturally generate dynamic content,
// and this is done using formatted strings passed to sprintf(). Each notification message below has a comment indicating what each
// %s string argument should represent (typically this is a hyperlink with text describing a user, topic, post, or forum).
// Note that the order of what gets populated in the %s arguments is unfortunately fixed, meaning that this could make good
// translations into other difficult.
$lang = array_merge($lang, array(
	// Post Notifications
	'CREATE_POST'				=> '%s %s a répondu au %s dans %s situé dans le forum %s', // %s == emoji, user, post, topic, forum
	'UPDATE_POST_SELF'			=> '%s %s a modifier son %s dans le sujet %s situé dans le forum %s', // %s == emoji, user, post, topic, forum
	'UPDATE_POST_OTHER'			=> '%s %s a modifier le %s écrit par %s dans le sujet %s situé dans le forum %s', // %s == emoji, edit user, post, user, topic, forum
	'DELETE_POST'				=> '%s Un message écrit par %s a été supprimé dans le sujet %s situé dans le forum %s', // %s == emoji, user, topic, forum
	'LOCK_POST'					=> '%s Le %s écrit par %s dans le sujet intitulé %s situé dans le forum %s a été vérouillé !', // %s == emoji, post, user, topic, forum
	'UNLOCK_POST'				=> '%s Le %s écrit par %s dans le sujet intitulé %s situé dans le forum %s a été déverrouillé.', // %s == emoji, post, user, topic, forum

	// Topic Notifications
	'CREATE_TOPIC'				=> '%s %s a créer un nouveau sujet intitulé %s situé dans le forum %s', // %s == emoji, user, topic, forum
	'UPDATE_TOPIC_SELF'			=> '%s %s a modifier le titre du sujet %s situé dans le forum %s', // %s == emoji, user, topic, forum
	'UPDATE_TOPIC_OTHER'		=> '%s %s a modifier le sujet %s écrit par %s situé dans le forum %s', // %s == emoji, edit user, topic, user, forum
	'DELETE_TOPIC'				=> '%s Le sujet créer par %s intitulé \'%s\' contenant %d messages à été supprimer ! Il se situé dans le forum %s', // %s/d == emoji, user, topic title, post count, forum
	'LOCK_TOPIC'				=> '%s Le sujet %s situé dans le forum %s qui à été créé par %s a été verrouillé !', // %s == emoji, topic, forum, user
	'UNLOCK_TOPIC'				=> '%s Le sujet %s situé dans le forum %s qui à été créé par %s a été déverrouillé.', // %s == emoji, topic, forum, user

	// User Notifications
	'CREATE_USER'				=> '%s %s vient de nous rejoindre, un nouveau octet parmi nous ! ', // %s == emoji, user
	'DELETE_USER'				=> '%s Le compte du membre %s à été supprimer !', // %s == emoji, user
	'DELETE_MULTI_USER'			=> '%s Les comptes des membres %s ont étaient supprimés !', // %s == emoji, list of users

	// Additional Text
	'PREVIEW'					=> ' ',
	'REASON'					=> 'Raison: ',
	'POST'						=> 'message',
	'AND'						=> 'et',
	'CONJ'						=> ',', // short for "conjunction character"
	'OTHER'						=> 'autre',
	'OTHERS'					=> 'autres',
	'UNKNOWN_USER'				=> '{user}',
	'UNKNOWN_FORUM'				=> '{forum}',
	'UNKNOWN_TOPIC'				=> '{topic}',
));
