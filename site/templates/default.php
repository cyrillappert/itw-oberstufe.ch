<?php snippet('layout', slots: true) ?>

<?php slot('page_title') ?>

<h2 id="page_title" hx-swap-oob="true"><?= $page->title() ?></h2>

<?php endslot() ?>

<?php slot('main') ?>

<main class="self-end bg-yellow" id="main" hx-swap-oob="true">
    <?= $page->text()->md() ?>
</main>

<div class="self-end justify-self-end w-80" id="featured-image" hx-swap-oob="true">
    <?php if ($image = $page->hero_image()->toFile()): ?>
        <?php snippet('components/image', ['f' => $image->crop(640)]) ?>
    <?php endif ?>
    <h2>
        <?= $page->hero_headline() ?>
    </h2>
    <div>
        <?= $page->hero_text() ?>
    </div>
</div>

<?php endslot() ?>

<?php endsnippet() ?>