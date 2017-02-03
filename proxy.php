<?php
$sites = [
  'webaim' => 'http://webaim.org/blog/feed/atom/',
  'copyright' => 'http://arllca.nonprofitsoapbox.com/news-from-lca?format=feed&type=rss',
  'teachers' => 'http://www.loc.gov/rss/teachers/news.xml',
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
