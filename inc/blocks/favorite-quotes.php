<?php

/**
 * Favorite Quotes, Block Template.
 *
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'favorite-quotes-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'favorite-quotes';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$quote = get_field('quote') ?: 'Add your favorite quote...';
$author = get_field('author') ?: 'Author name';
$background_color = get_field('background_color');
$text_color = get_field('text_color');


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <blockquote class="favorite-quote-blockquote">
        <span class="quote-text"><?php echo $quote; ?></span>
    </blockquote>
    <span class="quote-author">- <?php echo $author; ?></span>
    <style type="text/css">
          #<?php echo $id; ?> {
              background: <?php echo $background_color; ?>;
              color: <?php echo $text_color; ?>;
          }
      </style>
</div>
