<?php

use PostTypes\PostType;
// use PostTypes\Taxonomy;

$ws = new PostType('Workshop');

$ws->options([
    'has_archive'   => true,
    'show_in_rest'  => true
]);










$ws->register();
