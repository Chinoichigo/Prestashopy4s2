<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.doctrine.cache.provider' shared service.

return $this->services['mbo.doctrine.cache.provider'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['mbo.doctrine.cache.adapter']) ? $this->services['mbo.doctrine.cache.adapter'] : ($this->services['mbo.doctrine.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, ($this->targetDirs[3].'/var/cache/prod\\%/ps_mbo')))) && false ?: '_'});
