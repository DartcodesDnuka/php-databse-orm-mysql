<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once "bootstrap.php";

// Ensure $entityManager is set up in bootstrap.php
return ConsoleRunner::createHelperSet($entityManager);
