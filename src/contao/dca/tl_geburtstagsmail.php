<?php

/**
 * Contao Open Source CMS
 * @author     Cliff Parnitzky
 * @package    Geburtstagsmail
 * @license    LGPL
 */

//namespace Arminfrey\GeburtstagsmailBundle;

use Contao\Backend;
use Contao\DataContainer;
use Contao\DC_Table;
use Contao\Image;

// \Contao\Controller::loadDataContainer('tl_geburtstagsmail'); 

/**
 * Table tl_birthdaymailer
 */
$GLOBALS['TL_DCA']['tl_geburtstagsmail'] = array
(
	
	// Config
	'config' => array
	(
		'dataContainer'           => DC_Table::class,
		'enableVersioning'        => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		),
	),

	// List
	'list' => array
	(
		'sorting' => array (
			'panelLayout'           => 'filter,limit',
			'fields'                => array('priority'),
			'flag'                  => 2,
			'mode'                  => 1,
			'disableGrouping'       => true
		),
		'label' => array
		(
			'fields'                => array('memberGroup:tl_member_group.name', 'priority'),
			//'format'                => '%s <span style="color:#b3b3b3; padding-left:3px;">[' . $GLOBALS['TL_LANG']['tl_birthdaymail']['priority'][0] . ': %s]</span>',
			'label_callback'        => array('tl_geburtstagsmail', 'addIcon') 
		),
		'global_operations' => array
		(
			'sendBirthdayMail' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['sendBirthdayMail'],
				'href'                => 'key=sendBirthdayMail',
				'attributes'          => 'onclick="Backend.getScrollOffset();" style="background: url(src//assets/sendBirthdayMail.png) no-repeat scroll left center transparent; margin-left: 15px; padding: 2px 0 3px 20px;"'
			),
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__' => array('mailUseCustomText'),
		'default'      => '{config_legend},memberGroup,priority;{email_legend},sender,senderName,mailCopy,mailBlindCopy,mailUseCustomText'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'mailUseCustomText' => 'mailTextKey'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                   => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                   => "int(10) unsigned NOT NULL default '0'"
		),
		'memberGroup' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['memberGroup'],
			'exclude'               => true,
			'inputType'             => 'select',
			'foreignKey'            => 'tl_member_group.name',
			'filter'                => true,
			'eval'                  => array('mandatory'=>true, 'unique'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
			'sql'                   => "int(10) unsigned NOT NULL default '0'"
		),
		'priority' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['priority'],
			'exclude'               => true,
			'inputType'             => 'text',
			'eval'                  => array('rgxp' => 'digit','maxlength'=>10, 'tl_class'=>'w50'),
			'sql'                   => "int(10) unsigned NOT NULL default '0'"
		),
		'sender' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['sender'],
			'exclude'               => true,
			'inputType'             => 'text',
			'eval'                  => array('mandatory'=>true, 'rgxp' => 'email','maxlength'=>128, 'tl_class'=>'w50'),
			'sql'                   => "varchar(128) NOT NULL default ''"
		),
		'senderName' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['senderName'],
			'exclude'               => true,
			'inputType'             => 'text',
			'eval'                  => array('rgxp' => 'extnd','maxlength'=>128, 'tl_class'=>'w50'),
			'sql'                   => "varchar(128) NOT NULL default ''"
		),
		'mailCopy' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['mailCopy'],
			'exclude'               => true,
			'inputType'             => 'text',
			'eval'                  => array('rgxp' => 'emails','maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                   => "varchar(255) NOT NULL default ''"
		),
		'mailBlindCopy' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['mailBlindCopy'],
			'exclude'               => true,
			'inputType'             => 'text',
			'eval'                  => array('rgxp' => 'emails','maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                   => "varchar(255) NOT NULL default ''"
		),
		'mailUseCustomText' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['mailUseCustomText'],
			'exclude'               => true,
			'inputType'             => 'checkbox',
			'eval'                  => array('tl_class'=>'w50', 'submitOnChange'=>true),
			'sql'                   => "char(1) NOT NULL default ''"
		),
		'mailTextKey' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_geburtstagsmail']['mailTextKey'],
			'exclude'               => true,
			'inputType'             => 'text',
			'eval'                  => array('mandatory'=>true, 'maxlength'=>20, 'spaceToUnderscore'=>true, 'tl_class'=>'w50'),
			'sql'                   => "varchar(20) NOT NULL default ''"
		)
	)
);


/** class geburtstagsmail extends Backend
{
	
	public function addIcon($row, $label)
	{
		 $memberGroupId = $row['memberGroup']; 
 
        // get group from database
        $memberGroup = $this->Database->prepare("SELECT * FROM tl_member_group WHERE id=?") 
                               ->execute($memberGroupId);
		
		$image = 'mgroup';

		if ($memberGroup->disable || strlen($memberGroup->start) && $memberGroup->start > time() || strlen($memberGroup->stop) && $memberGroup->stop < time())
		{
			$image .= '_';
		}

		return sprintf('<div class="list_icon" style="background-image:url(\'system/themes/%s/images/%s.gif\');">%s</div>', $this->getTheme(), $image, $label);
	}
} */


class tl_geburtstagsmail extends Backend
{
	/**
	 * Add an image to each record
	 *
	 * @param array  $row
	 * @param string $label
	 *
	 * @return string
	 */
	public function addIcon($row, $label)
	{
		$image = 'mgroup';
		$disabled = ($row['start'] !== '' && $row['start'] > time()) || ($row['stop'] !== '' && $row['stop'] <= time());
		$icon = $image;

		if ($disabled || $row['disable'])
		{
			$image .= '--disabled';
		}

		return sprintf(
			'<div class="list_icon" style="background-image:url(\'%s\')" data-icon="%s" data-icon-disabled="%s">%s</div>',
			Image::getUrl($image),
			Image::getUrl($icon),
			Image::getUrl($icon . '--disabled'),
			$label
		);
	}
}
