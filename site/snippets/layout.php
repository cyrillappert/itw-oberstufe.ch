<?php

snippet('partials/head', slots: true);

e($main = $slots->main(), $main);

endsnippet()

?>

<div class="p-3 grid grid-rows-2 grid-cols-2 w-screen h-screen">

    <header class="text-4xl">
        <?= $site->title() ?>
    </header>

    <?php snippet('partials/nav') ?>

    <?php e($main = $slots->main(), $main); ?>

</div>

<?php snippet('partials/foot') ?>