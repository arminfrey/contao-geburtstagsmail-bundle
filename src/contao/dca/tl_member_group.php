<?php

namespace Arminfrey\GeburtstagsmailBundle\contao\dca;

use Arminfrey\GeburtstagsmailBundle\Service;

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2015 Leo Feyer
 *
 * @author     Armin Frey
 * @package    GeburtstagsMailBundle
 * @license    LGPL
 */

/**
 * Delete an according BirthdayMailer configuration, if the member group is deleted.
 */
$GLOBALS['TL_DCA']['tl_member_group']['config']['ondelete_callback'][] = ['ArminfreyGeburtstagsmailBundle', 'deleteConfiguration'];

?>
