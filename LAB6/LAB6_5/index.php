<?php
function pangram($n)
{
    $pangram = true;
    strtolower($n);
    str_replace($n, " ", "");
    echo $n;
    for ($i = 97; $i < 122; $i++) {
        if (strpos($n, chr($i)) == false) {
            $pangram = false;
            break;
        }
    }
    if ($pangram) {
        echo "jest to pangram\n";
    } else {
        echo "nie jest to pangram\n";
    }
}
    pangram("Adam Malysz");
    pangram("The quick brown fox jumps over the lazy dog");
