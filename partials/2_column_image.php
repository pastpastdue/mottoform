<ul class="product-flex-list">

  <?php
  $two_column_square_image = get_sub_field('two_column_square_image');
  $two_column_square_image_2 = get_sub_field('two_column_square_image_2');
  $two_column_horizontal_image = get_sub_field('two_column_horizontal_image');
  $two_column_horizontal_image_2 = get_sub_field('two_column_horizontal_image_2');

  if ( get_sub_field('two_column_square_image') )
  ?>

  <li class="grid-2-col col-float-left">
      <?php // loop through the rows of data
        echo '<img src="' . $two_column_square_image['sizes']['2-col-square'] . '" alt="' . $two_column_square_image['alt'] . '" />';
      ?>
  </li>
  <li class="grid-2-col col-float-left">
      <?php // loop through the rows of data
        echo '<img src="' . $two_column_square_image_2['sizes']['2-col-square'] . '" alt="' . $two_column_square_image_2['alt'] . '" />';
      ?>
  </li>

  <?php
  if ( get_sub_field('two_column_square_image') )
  ?>

  <li class="grid-2-col col-float-left">
      <?php // loop through the rows of data
        echo '<img src="' . $two_column_horizontal_image['sizes']['2-col-horizontal'] . '" alt="' . $two_column_horizontal_image['alt'] . '" />';
      ?>
  </li>
  <li class="grid-2-col col-float-left">
      <?php // loop through the rows of data
        echo '<img src="' . $two_column_horizontal_image_2['sizes']['2-col-horizontal'] . '" alt="' . $two_column_horizontal_image_2['alt'] . '" />';
      ?>
  </li>

  <php endif; ?>
</ul>
