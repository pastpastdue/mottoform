<ul class="product-flex-list">

  <?php
  $two_column_square_image = get_sub_field('two_column_square_image');
  $two_column_square_image_2 = get_sub_field('two_column_square_image_2');
  $two_column_uncropped = get_sub_field('two_column_uncropped');
  $two_column_uncropped_2 = get_sub_field('two_column_uncropped_2');

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
  ?>

  <li class="grid-2-col col-float-left">
      <?php // loop through the rows of data
        echo '<img src="' . $two_column_uncropped['sizes']['2-col-vertical'] . '" alt="' . $two_column_uncropped['alt'] . '" />';
      ?>
  </li>
  <li class="grid-2-col col-float-left">
      <?php // loop through the rows of data
        echo '<img src="' . $two_column_uncropped_2['sizes']['2-col-vertical'] . '" alt="' . $two_column_uncropped_2['alt'] . '" />';
      ?>
  </li>

  </ul>
