<?php

/**
 * check if the request slots are still at their configured amount
 */

use GW2Spidy\NewQueue\RequestSlotManager;


require dirname(__FILE__) . '/../autoload.php';

RequestSlotManager::getInstance()->check();
