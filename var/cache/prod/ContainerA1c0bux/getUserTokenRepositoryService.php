<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsAccounts\Repository\UserTokenRepository' shared service.

return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] = new \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->load('getConfigurationRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService'] : $this->load('getAnalyticsServiceService.php')) && false ?: '_'});
