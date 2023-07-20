<?php

use PostTypes\PostType;
// use PostTypes\Taxonomy;

$socp = new PostType('C. Photograpghy Program');

$socp->options([
    'has_archive'   => true,
    'show_in_rest'  => true
]);










$socp->register();
