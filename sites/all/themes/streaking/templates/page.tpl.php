<div class="container">
  <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>

  <?php if ($page['header']): print render($page['header']); endif; ?>
  <?php if ($page['highlight']): print render($page['highlight']); endif; ?>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php print $messages; ?>
  <?php print render($page['help']); ?>

  <?php if ($tabs): print render($tabs); endif; ?>

  <?php if ($action_links): ?><ul><?php print render($action_links); ?></ul><?php endif; ?>

  <?php print render($page['content']) ?>

  <?php if ($page['footer']): print render($page['footer']); endif; ?>
</div>
