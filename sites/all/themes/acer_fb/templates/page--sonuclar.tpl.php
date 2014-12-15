<div id="app_page">
    <div class="main_header">
        <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
        <?php endif; ?>
        <?php if ($main_menu): ?>
            <nav id="main-menu" role="navigation" tabindex="-1">
                <?php
                // This code snippet is hard to modify. We recommend turning off the
                // "Main menu" on your sub-theme's settings form, deleting this PHP
                // code block, and, instead, using the "Menu block" module.
                // @see https://drupal.org/project/menu_block
                print theme('links__system_main_menu', array(
                    'links' => $main_menu,
                    'attributes' => array(
                        'class' => array('links', 'inline', 'clearfix'),
                    ),
                    'heading' => array(
                        'text' => t('Main menu'),
                        'level' => 'h2',
                        'class' => array('element-invisible'),
                    ),
                )); ?>
            </nav>
        <?php endif; ?>
    </div>


    <div class="content-area basvuru">
        <div class="header-bant"></div>
        <div class="center-content">
            <h1>2015 boyunca motivasyona her ihtiyacın olduğunda,<br/> kararını burada bulabilirsin çünkü onu senin için yıl
                <br/> boyunca saklayacağız.</h1>
            <?php print render($page['content']); ?>
        </div>
    </div>
    <div class="app_footer">
        <div class="acer-footer-bant"></div>
        <ul class="footer-menu">
            <li><a href="#">Katılım Koşulları</a></li>
            <li><a href="#">Gizlilik Politikası</a></li>
            <li><a href="http://www.acer.com.tr" target="_blank">www.acer.com.tr</a></li>
            <li><a href="#">© 2014 Acer Inc.</a></li>
        </ul>
    </div>

</div>
