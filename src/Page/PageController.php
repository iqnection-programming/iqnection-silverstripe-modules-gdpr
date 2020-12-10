<?php


namespace IQnection\GDPR\Page;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;
use SilverStripe\Control\Cookie;
use SilverStripe\SiteConfig\SiteConfig;
use IQnection\GDPR\Control\GDPRController;

class PageController extends Extension
{
	public function onAfterInit()
	{
		Requirements::css('iqnection-modules/silverstripe-gdpr:css/gdpr.css');
		Requirements::javascript('iqnection-modules/silverstripe-gdpr:javascript/gdpr.js');
	}

	public function GDPRNotice()
	{
		if (!Cookie::get(GDPRController::Config()->get('gdpr_cookie_name')))
		{
			return SiteConfig::current_site_config()->renderWith(['IQnection/GDPR/GdprNotice']);
		}
	}
}