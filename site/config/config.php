<?php
return [
    'debug' => true,
    'hooks' => [
        'kirbytext:after' => function ($text) {

            // Config RTE classes

            $from = array();
            $from[0] = '/<h1>/';
            $from[1] = '/<h2>/';
            $from[2] = '/<h3>/';
            $from[3] = '/<strong>/';
            $from[4] = '/<em>/';
            $from[5] = '/<p>/';
            $from[6] = '/<code>/';
            $from[7] = '/<ul>/';
            $from[8] = '/<ol>/';
            $from[9] = '/<li>/';

            $to = array();
            $to[0] = '<h1 class="text-6xl">';
            $to[1] = '<h2 class="text-4xl">';
            $to[2] = '<h3 class="text-2xl">';
            $to[3] = '<strong class="">';
            $to[4] = '<em class="">';
            $to[5] = '<p class="">';
            $to[6] = '<code class="">';
            $to[7] = '<ul class="">';
            $to[8] = '<ol class="">';
            $to[9] = '<li class="">';

            $result = preg_replace($from, $to, $text);

            return $result;
        }
    ]
];
