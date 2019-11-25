<?php

// Don't change this code!
$wordlist = array_map(function ($word) {
    return str_replace("\n", '', $word);
}, file('../includes/wordlist.txt'));


$hash = 'de92c5528b3f1b781340b9ae4bf4b23d';
foreach ($wordlist as $word) {
    if ($hash === md5($word)) {
    echo $word;
} }
