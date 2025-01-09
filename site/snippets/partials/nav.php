<nav x-data="{ active: '<?= $page->slug() ?>' }" class="justify-self-end">
    <ul>
        <?php foreach ($site->menu()->toPages() as $p): ?>
            <li>
                <?= snippet('components/nav_link', ['p' => $p]) ?>
            </li>
        <?php endforeach ?>
    </ul>
</nav>