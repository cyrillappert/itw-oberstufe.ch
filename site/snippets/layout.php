<?php

snippet('partials/head', slots: true);

e($page_title = $slots->page_title(), $page_title);
e($main = $slots->main(), $main);

endsnippet()

?>

<div class="p-3 grid grid-rows-2 grid-cols-2 w-screen h-screen text-white bg-blue-500">

    <header>
        <?= $site->title() ?>
        <?php e($page_title = $slots->page_title(), $page_title) ?>
    </header>

    <?= snippet('partials/nav') ?>

    <?php e($main = $slots->main(), $main); ?>

</div>

<?php snippet('partials/foot') ?>