<?php
$rss = simplexml_load_file('https://example.com/feed.xml');
echo "<h2>{$rss->channel->title}</h2>";
foreach ($rss->channel->item as $item) {
    echo "<h3>{$item->title}</h3>";
    echo "<p>{$item->description}</p>";
}
?>
