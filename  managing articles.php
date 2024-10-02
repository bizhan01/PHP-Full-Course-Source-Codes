<?php
// Display articles
foreach ($articles as $article) {
    echo "<h2>{$article['title']}</h2>";
    echo "<p>{$article['content']}</p>";
}

// Admin panel for managing articles
if ($user->isAdmin()) {
    echo "<a href='/admin/articles'>Manage Articles</a>";
}
?>
