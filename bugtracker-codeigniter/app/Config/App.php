<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    public string $baseURL = 'http://localhost:8080/';
    public string $appTimezone = 'UTC';
    public string $appBase = '';
    public bool $forceGlobalSecureRequests = false;
    public string $defaultLocale = 'en';
    public array $supportedLocales = ['en'];
    public string $defaultController = 'Tickets';
    public string $defaultMethod = 'index';
    public bool $CSRFProtect = true;
}
