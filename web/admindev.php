<?php

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
//require_once(dirname(__FILE__).'/sfapps/config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('admin', 'dev', true);
sfContext::createInstance($configuration)->dispatch();
