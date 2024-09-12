<?php

/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */

// Add configuration to Backend -> Accounts
$GLOBALS['BE_MOD']['accounts']['Geburtstagsmail'] = array
(
	'tables'           => array('tl_geburtstagsmail'),
	'icon'             => '../assets/icon.png',
	'sendBirthdayMail' => array('GeburtstagsmailSender', 'sendBirthdayMailManually'), 
);

/**
 * -------------------------------------------------------------------------
 * CRON
 * -------------------------------------------------------------------------
 */

// Daily cron job to send birthday mails
$GLOBALS['TL_CRON']['daily'][] = array('GeburtstagsmailSender', 'sendBirthdayMail');

?>
