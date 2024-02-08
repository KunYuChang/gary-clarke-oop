<?php

// autoload from same folder
$simpleAutoload = function (string $classname) {

	$classFile = "{$classname}.php";

	if (file_exists($classFile)) {
		require_once $classFile;
	}
};

spl_autoload_register($simpleAutoload);

$chart = new Chart();
print $chart->draw();
