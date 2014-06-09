    <header>
        <?php print render($page['header']); ?>
        <?php if ($main_menu): ?>
        <nav>
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
        </nav>
        <?php endif; ?>
    </header>

    <?php print $messages; ?>

    <main>
        <div>
            <?php if ($title): ?><h1 class="title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($page['content']); ?>
        </div>
    </main>

    <aside>
        <div>
            <?php print render($page['sidebar']); ?>
        </div>
    </aside>

    <footer>
        <section>
            <?php print render($page['footer']); ?>
        </section>
    </footer>
