<?php

use PostTypes\PostType;
// use PostTypes\Taxonomy;

$dc = new PostType('Design Catalogue');

$dc->options([
    'has_archive'   => true,
    'show_in_rest'  => true
]);










$dc->register();
