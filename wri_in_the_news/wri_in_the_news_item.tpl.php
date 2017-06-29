<article>
  <a href="<?php echo $link; ?>" class="entry-title" rel="nofollow"><?php echo $title; ?></a>
  <abbr title="<?php echo date('c', $date); ?>" class="updated"><?php echo date('M j, Y', $date); ?></abbr>
  <?php if ($source): ?>
    |
    <span class="author fn"><?php echo $source; ?></span>
  <?php endif; ?>
</article>
