<?php

use PostTypes\PostType;
// use PostTypes\Taxonomy;

$ss = new PostType('Student Story');

$ss->options([
    'has_archive'   => true,
    'show_in_rest'  => true
]);










$ss->register();
