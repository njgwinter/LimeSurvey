#!/usr/bin/php
<?php   
/**
 * LimeSurvey (tm)
 * Copyright (C) 2011 The LimeSurvey Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v2 or later, see LICENSE.php
 * LimeSurvey is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 *
 */
require_once(__DIR__ . '/../vendor/autoload.php'); 
class_exists('Yii');
if (!isset($argv[0])) die();
define('BASEPATH','.');
$sCurrentDir=dirname(__FILE__);
$config = require __DIR__ . '/../config/internal.php';
unset ($config['defaultController']);
unset ($config['config']);
Yii::createApplication('ConsoleApplication', $config)->run();
?>
