<?php

/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */

// Add configuration to Backend -> Accounts
$GLOBALS['BE_MOD']['accounts']['BirthdayMailer'] = array
(
	'tables'           => array('tl_birthdaymailer'),
	'icon'             => 'bundles/BirthdayMailer/assets/icon.png',
	'sendBirthdayMail' => array('BirthdayMailSender', 'sendBirthdayMailManually'), 
);

/**
 * -------------------------------------------------------------------------
 * CRON
 * -------------------------------------------------------------------------
 */

// Daily cron job to send birthday mails
$GLOBALS['TL_CRON']['daily'][] = array('BirthdayMailSender', 'sendBirthdayMail');

?>
