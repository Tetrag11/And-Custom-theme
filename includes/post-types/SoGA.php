<?php

use PostTypes\PostType;
// use PostTypes\Taxonomy;

$soga = new PostType('G & Animation Program');

$soga->options([
    'has_archive'   => true,
    'show_in_rest'  => true
]);










$soga->register();
