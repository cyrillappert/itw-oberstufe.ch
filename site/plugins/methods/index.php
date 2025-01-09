<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('itw/custom-methods', [
    'fieldMethods' => [
        'addClasses' => function ($field, $tagsWithClasses) {
            $from = [];
            $to = [];

            foreach ($tagsWithClasses as $tag => $class) {
                $from[] = '/<' . $tag . '>/';
                $to[] = '<' . $tag . ' class="' . $class . '">';
            }

            return preg_replace($from, $to, $field);
        }
    ]
]);
