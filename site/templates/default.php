<?php snippet('layout', slots: true) ?>
<?php slot('main') ?>

<main class="self-end " id="main" hx-swap-oob="true">
    <div class="bg-red-500">
        <?php if ($image = $page->featured_image()->toFile()): ?>
            <div class="self-end justify-self-end w-80" id="featured-image" hx-swap-oob="true">
                <?php snippet('components/image', ['f' => $image->crop(640)]) ?>
            </div>
        <?php endif ?>
        <?= $page->headline()->kt() ?>
    </div>
    <div class="bg-orange-500">
        <?= $page->text()->kt() ?>

    </div>
</main>


<?php endslot() ?>
<?php endsnippet() ?>