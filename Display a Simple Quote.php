<?php
$quotes = array(
    "Don't cry because it's over, smile because it happened. - Dr. Seuss",
    "Be yourself; everyone else is already taken. - Oscar Wilde",
    "In three words I can sum up everything I've learned about life: It goes on. - Robert Frost"
);
$randomQuote = $quotes[array_rand($quotes)];
echo "<blockquote>$randomQuote</blockquote>";
?>
