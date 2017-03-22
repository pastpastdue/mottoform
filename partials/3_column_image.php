<ul class="product-flex-list">
  <li class="grid-3-col">
    <?php

    $three_column_horizontal_image= get_sub_field('three_column_horizontal_image');
    $three_column_square_image= get_sub_field('three_column_square_image');


      if( !empty($three_column_horizontal_image) ):

        echo '<img src="' . $three_column_horizontal_image['sizes']['3-col-horizontal'] . '" alt="' . $three_column_horizontal_image['alt'] . '" />';

        if($three_column_horizontal_image['caption']) : ?>

        <div class="product-image-description">
          <?php echo $three_column_horizontal_image['caption'] ?>
        </div>
        <?php endif; ?>

      <?php endif; if( !empty($three_column_square_image) ): ?>
      <?php // loop through the rows of data
        echo '<img src="' . $three_column_square_image['sizes']['3-col-square'] . '" alt="' . $three_column_square_image['alt'] . '" />';
      ?>
      <div class="product-image-description">
      <?php if($three_column_square_image['caption']) : ?>
        <?php echo $three_column_square_image['caption'] ?>
      <?php endif; ?>
      </div>

    <?php endif; ?>
  </li>
</ul>
