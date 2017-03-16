<ul class="product-2-col-list">
  <li>
      <?php // loop through the rows of data
        $two_column_square_image = get_sub_field('two_column_square_image');
        echo '<img src="' . $two_column_square_image['sizes']['2-col-square'] . '" alt="' . $two_column_square_image['alt'] . '" />';
      ?>
  </li>
  <li>
      <?php // loop through the rows of data
        $two_column_square_image_2 = get_sub_field('two_column_square_image_2');
        echo '<img src="' . $two_column_square_image_2['sizes']['2-col-square'] . '" alt="' . $two_column_square_image_2['alt'] . '" />';
      ?>
  </li>

</ul>
