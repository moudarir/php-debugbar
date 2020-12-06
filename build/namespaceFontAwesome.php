<?php

$path = dirname(__DIR__).DIRECTORY_SEPARATOR.'src/DebugBar/Resources/vendor/font-awesome-5/css/all.min.css';

if (!file_exists($path)):
    exit('File does\'t exists.');
endif;

$contents = file_get_contents($path);

if (strpos($contents, 'PhpDebugbarFontAwesome') !== false ) {
    exit('Already namespaced');
}

// namespace FontAwesome occurrences
$toSearch = ['Font Awesome 5 Free', 'fa-', '.fa'];
$toReplace = ['PhpDebugbarFontAwesome', 'phpdebugbar-fa-', '.phpdebugbar-fa'];
$contents = str_replace($toSearch, $toReplace, $contents);

if (file_put_contents($path, $contents)) {
    echo "Updated Font awesome all.min.css";
} else {
    echo "No content written";
}


