<?php snippet('layout', slots: true) ?>

<?php slot('page_title') ?>

<h2 id="page_title" hx-swap-oob="true"><?= $page->title() ?></h2>

<?php endslot() ?>

<?php slot('main') ?>

<main class="self-end bg-yellow" id="main" hx-swap-oob="true">
    <h2><?= $page->text()->md()  ?></h2>
</main>

<?php endslot() ?>

<?php endsnippet() ?>