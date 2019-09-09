Adds GDPR notice to your site.

## Install

```
composer require iqnection-modules/silverstripe-gdpr
```

## Setup

- Add your message to your site Settings
- Add {$GDPRNotice} to the bottom of your template, before the closing </body> tag

## Configurations

```
IQnection\GDPR\Control\GDPRController:
  gdpr_cookie_name: 'accepts_cookies'
  gdpr_cookie_lifetime: 365
  gdpr_cookie_value: 1
```