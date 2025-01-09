<?php snippet('layout', slots: true) ?>

<?php slot('page_title') ?>

<h2 id="page_title" hx-swap-oob="true"><?= $page->title() ?></h2>

<?php endslot() ?>

<?php slot('main') ?>

<main class="self-end bg-yellow" id="main" hx-swap-oob="true">
    <?= $page->text()->md() ?>
</main>

<div class="self-end justify-self-end w-80">
    <?php snippet('components/image', ['f' => $page->featured_image()->toFile()->crop(640)]) ?>
</div>

<?php endslot() ?>

<?php endsnippet() ?>