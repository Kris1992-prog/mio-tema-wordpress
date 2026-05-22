<aside id="sidebar-sito" class="sidebar-area">
    <?php if ( is_active_sidebar( 'sidebar-principale' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-principale' ); ?>
    <?php else : ?>
        <div class="widget-box">
            <h3>Sidebar</h3>
            <p>Aggiungi dei widget dalla bacheca di WordPress per vederli qui!</p>
        </div>
    <?php endif; ?>
</aside>
