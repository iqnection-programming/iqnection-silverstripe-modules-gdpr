<?php


namespace IQnection\GDPR\SiteConfig;

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms;

class SiteConfig extends DataExtension
{
	private static $db = [
		'EnableGDPR' => 'Boolean',
		'GDPRNotice' => 'HTMLText',
	];
	
	public function updateCMSFields(Forms\FieldList $fields)
	{
		$fields->addFieldToTab('Root.GDPR', Forms\CheckboxField::create('EnableGDPR','Enable GDPR Notice') );
		$fields->addFieldToTab('Root.GDPR', Forms\HTMLEditor\HTMLEditorField::create('GDPRNotice','Notice Content') );
	}
}
