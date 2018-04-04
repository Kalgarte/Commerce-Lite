<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php if ($main_menu): ?>
    <nav class="navigation">
      <div class="primary-menu inline">
        <?php if ($linked_logo_img): ?>
        <div class="logo">
          <?php print $linked_logo_img; ?>
        </div>
        <?php endif; ?>
        <?php print theme('links__system_main_menu', array('prefix' => '<div>', 'links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix', 'main-menu')), 'heading' => array('text' => t('Main menu'),'level' => 'h2','class' => array('element-invisible')))); ?>
      </div>
    </nav>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
</div>
