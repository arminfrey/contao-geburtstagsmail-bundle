<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2015 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2011-2015
 * @author     Cliff Parnitzky
 * @package    BirthdayMailer
 * @license    LGPL
 */
 
$GLOBALS['TL_LANG']['tl_settings']['birthdayMailer_legend']                 = "Birthdaymailer";
$GLOBALS['TL_LANG']['tl_settings']['birthdayMailerAllowDuplicates']         = array('Allow duplicates', 'If this option is selected, birthday emails are sent repeatedly to one and the same member with several configured member groups (the member receives several birthday emails).');
$GLOBALS['TL_LANG']['tl_settings']['birthdayMailerLogDebugInfo']            = array('Log additional debug information', 'If this option is selected, additional debug information will be written to system log (per e-mail to be sent an entry with all contents).');
$GLOBALS['TL_LANG']['tl_settings']['birthdayMailerDeveloperMode']           = array('Developermode', 'Enables the developer mode. Emails will be send to the developer e-mail address.');
$GLOBALS['TL_LANG']['tl_settings']['birthdayMailerDeveloperModeEmail']      = array('Developer E-mail address', 'In developer mode, all emails are forwarded to this address.');
$GLOBALS['TL_LANG']['tl_settings']['birthdayMailerDeveloperModeIgnoreDate'] = array('Ignore date of birth', 'Bypasses the check whether the members date of birth is the current day. For each active member, an email will be sent.');

?>
