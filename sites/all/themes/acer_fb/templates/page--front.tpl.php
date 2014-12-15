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
    <a href="secim_ekrani" class="main_page_link">
    <div class="main_page"> </div>
   </a>

<div class="main_footer">
    <div class="footer-bant"></div>
    <ul class="footer-menu">
        <li><a href="#">Katılım Koşulları</a></li>
        <li><a href="#">Gizlilik Politikası</a></li>
        <li><a href="http://www.acer.com.tr" target="_blank">www.acer.com.tr</a></li>
        <li><a href="#">© 2014 Acer Inc.</a></li>
    </ul>
</div>

</div>