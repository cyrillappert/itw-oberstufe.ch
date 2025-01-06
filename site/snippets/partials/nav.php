<nav x-data="{ active: '<?= $page->slug() ?>' }" class="justify-self-end">
    <ul>
        <?php foreach ($pages->listed() as $p): ?>
            <li>
                <?= snippet('components/nav_link', ['p' => $p]) ?>
            </li>
        <?php endforeach ?>
    </ul>
</nav>