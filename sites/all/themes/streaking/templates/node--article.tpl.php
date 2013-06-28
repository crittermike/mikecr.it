<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">

  <span class="submitted">Published on <?php print $date; ?></span>

  <h1 class="post-title"><?php print $title; ?></h1>

  <?php print render($content['field_subtitle']); ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_subtitle']);
    print render($content);
  ?>

</div> <!-- /node-->
