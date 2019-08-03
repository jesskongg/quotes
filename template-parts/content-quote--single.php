<?php
/**
 * Single quote
 *
 * @package quotes
 */

?>

<blockquote id="quote-active" <?php post_class('quote'); ?>>

  <p><?php the_content(); ?><p>
  <footer class="quote__footer">
    — <?php the_title(); ?>
    <?php
      $quoteMeta = get_post_meta(get_the_ID()); 
      $quoteSource = $quoteMeta['_qod_quote_source'][0];
      $quoteSourceUrl = $quoteMeta['_qod_quote_source_url'][0]; 

      if ($quoteSource & $quoteSourceUrl) :
    ?>

      , <cite class="quote__cite">
        <a href="<?= esc_url($quoteSourceUrl); ?>" target="_blank" rel="noopener noreferrer">
          <?= $quoteSource; ?>
        </a>
      </cite>

    <?php elseif ($quoteSource) : ?>

      , <cite class="quote__cite">
        <?= $quoteSource; ?>
      </cite>

    <?php endif; ?>

  </footer>

</blockquote>
