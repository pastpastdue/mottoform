<ul class="product-flex-list">
  <li class="grid-4-col">
    <?php

    $four_column_horizontal_image= get_sub_field('four_column_horizontal_image');
    $four_column_square_image= get_sub_field('four_column_uncropped_image');

    if( !empty($four_column_horizontal_image) ):

        echo '<img src="' . $four_column_horizontal_image['sizes']['4-col-horizontal'] . '" alt="' . $four_column_horizontal_image['alt'] . '" />';

      if($four_column_horizontal_image['caption']) : ?>
      <div class="product-image-description">
        <?php echo $four_column_horizontal_image['caption'] ?>
      </div>
      <?php endif; ?>
    <?php endif;
    if( !empty($four_column_square_image) ): ?>
      <?php // loop through the rows of data
        echo '<img src="' . $four_column_square_image['sizes']['4-col-horizontal'] . '" alt="' . $four_column_square_image['alt'] . '" />';
      ?>
      <div class="product-image-description">
      <?php if($four_column_square_image['caption']) : ?>
        <?php echo $four_column_square_image['caption'] ?>
      <?php endif; ?>
      </div>
    <?php endif; ?>
  </li>
</ul>
