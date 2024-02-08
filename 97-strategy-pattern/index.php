<?php

require_once 'vendor/autoload.php';

$content = '<p class="some-class">Some Content</p><div>divs not allowed</div>';

$contentFilter = new \App\ContentFilter(
	new \App\RemoveClassAttributesStrategy
);

$filteredContent = $contentFilter->filter($content);

print $filteredContent . PHP_EOL;
