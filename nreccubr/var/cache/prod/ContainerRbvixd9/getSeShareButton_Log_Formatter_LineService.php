<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'SeShareButton.log.formatter.line' shared service.

return $this->services['SeShareButton.log.formatter.line'] = new \Monolog\Formatter\LineFormatter('[%datetime%] %level_name% [%extra.session_id%] [%extra.user_id%] [%extra.http_method%, %extra.url%, %extra.ip%, %extra.referrer%, %extra.user_agent%]'."\n".'--------------------------------------------------------------------------------'."\n".'%message%'."\n".'--------------------------------------------------------------------------------'."\n".'');
