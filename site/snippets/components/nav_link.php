<a
    class="hover:underline <?= $p->isActive() ? 'underline pointer-events-none' : '' ?>"
    href="<?= $p->url() ?>"
    hx-push-url="true"
    hx-swap="none"
    hx-get="<?= $p->hxPath() ?>"
    :class="{ 'underline pointer-events-none': active === '<?= $p->slug() ?>' }"
    @click="active = '<?= $p->slug() ?>'">

    <?= $p->title() ?>

</a>