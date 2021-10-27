        <footer>
            Підвал сайту
            <?php wp_footer(); ?>
            <?php wp_nav_menu( [
                'theme_location'  => 'bottom',
                'menu'            => '',
                'container'       => 'div',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'bottom-nav',
                'menu_id'         => 'bottom-nav',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ] ); ?>
        </footer>

    </body>

</html>