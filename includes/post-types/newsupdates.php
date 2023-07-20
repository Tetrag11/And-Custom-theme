<?php

use PostTypes\PostType;
// use PostTypes\Taxonomy;

$nu = new PostType('News & Update');

$nu->options([
    'has_archive'   => true,
    'show_in_rest'  => true
]);










$nu->register();
