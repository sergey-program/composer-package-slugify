<?php

require '../vendor/autoload.php';

$s = new \Cocur\Slugify\Slugify();

echo $s->slugify('привет это ёжик');

