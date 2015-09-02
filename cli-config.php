<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
$em = require_once 'bootstrap.php';

return ConsoleRunner::createHelperSet($em);