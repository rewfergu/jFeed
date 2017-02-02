<?php
$sites = [
  'webaim' => 'http://webaim.org/blog/feed/atom/',
];

header('Content-type: application/xml');
$handle = fopen($sites[$_REQUEST['feed']], "r");

if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}
?>
