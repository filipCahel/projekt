<?php namespace Config;

class IonAuth extends \IonAuth\Config\IonAuth
{
   
    public $siteTitle = 'Example.com';
    public $adminEmail = 'admin@example.com';
    public $emailTemplates = 'App\\Views\\auth\\email\\';
}