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


  <div class="content-area">
    <div class="header-bant"></div>
    <div class="center-content">
      <h1>2015 unutulmaz olsun istiyorsun ama neye cesaret edeceğine karar veremedin mi?</h1>
      <p>Senin için bu yılı unutulmaz kılacak birbirinden cesur kararlar hazırladık. Onlardan birini seç ve arkadaşlarınla paylaş.</p>
      <div class="select-area postcard slide-area">
        <?php
        $view_mode = 'full'; // Or 'full' for example

        $node = node_load(6);

        $view = node_view($node, $view_mode);

        print render($view);
        ?>
        <div class="nav">
          <a href="#"><span id="prev"></span></a>
          <a href="#"><span id="next"></span></a>
          <p id="caption"></p>
        </div>
      </div>
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
