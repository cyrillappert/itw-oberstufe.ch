<?php snippet('layout', slots: true) ?>
<?php slot('main') ?>

<main class="self-end " id="main" hx-swap-oob="true">

    <div class="bg-red-500">
        <?php if ($image = $page->hero_image()->toFile()): ?>
            <div class="self-end justify-self-end w-80" id="featured-image" hx-swap-oob="true">
                <?php snippet('components/image', ['f' => $image->crop(640)]) ?>
            </div>
        <?php endif ?>
        <?php snippet('components/text', ['t' => $page->headline()]) ?>
    </div>

    <div class="bg-orange-500">
        <?php snippet('components/text', ['t' => $page->interested()]) ?>
    </div>

    <div class="bg-yellow-500">
        <?= $page->school_places() ?>
        <a class="hover:underline" href="<?= $page->link_url() ?>"><?= $page->link_text() ?></a>
    </div>

</main>

<section>

    <!-- Here should be the most recent posts of the blog -->

</section>


<?php endslot() ?>
<?php endsnippet() ?>