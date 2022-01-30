#!/usr/bin/php

<?php

$file_path = $argv[1];

$text = file_get_contents($file_path);

preg_match_all('/(?<=\[).*?(?=\])/', $text, $matches);

foreach ($matches[0] as $_match) {
   echo $_match . "\n";
}