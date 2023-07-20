<?php

use PostTypes\PostType;
// use PostTypes\Taxonomy;

$sofd = new PostType('Fashion Design Program');

$sofd->options([
    'has_archive'   => true,
    'show_in_rest'  => true
]);










$sofd->register();
