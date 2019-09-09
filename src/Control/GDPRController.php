<?php

namespace IQnection\GDPR\Control;

use SilverStripe\Control\Cookie;
use SilverStripe\Control\Controller;


class GDPRController extends Controller
{
	private static $gdpr_cookie_name = 'accepts_cookies';
	private static $gdpr_cookie_lifetime = 365;
	private static $gdpr_cookie_value = 1;
	
	public function index()
	{
		Cookie::set($this->Config()->get('gdpr_cookie_name'), $this->Config()->get('gdpr_cookie_value'), $this->Config()->get('gdpr_cookie_lifetime'));
		return ($this->getRequest()->isAjax()) 
			? $this->getResponse()->addHeader('Content-type','application/json')->setBody(json_encode(['success' => true])) 
			: $this->redirectBack();
	}
}

