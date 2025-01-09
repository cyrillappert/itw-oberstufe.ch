<?php snippet('layout', slots: true) ?>

<?php slot('page_title') ?>

<h2 id="page_title" hx-swap-oob="true"><?= $page->title() ?></h2>

<?php endslot() ?>

<?php slot('main') ?>

<main class="self-end bg-yellow" id="main" hx-swap-oob="true">
    <?php if ($image = $page->featured_image()->toFile()): ?>
        <div class="self-end justify-self-end w-80" id="featured-image" hx-swap-oob="true">
            <?php snippet('components/image', ['f' => $image->crop(640)]) ?>
        </div>
    <?php endif ?>
    <h2 class="font-bold">
        <?= $page->headline() ?>
    </h2>
    <div>
        <?= $page->blurp() ?>
    </div>
</main>


<?php endslot() ?>

<?php endsnippet() ?>