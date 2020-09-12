<?php

namespace APP;

define('APP', dirname(__FILE__));
define('BASE', APP . '/..');
define('CONTROLLERS', APP . '/controllers');
define('MODELS', APP . '/models');
define('VIEWS', APP . '/views');

include(APP . '/bootstrap.php');
?>