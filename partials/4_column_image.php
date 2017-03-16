<ul class="product-4-col-list">
  <li>
      <?php // loop through the rows of data
        $four_column_horizontal_image= get_sub_field('four_column_horizontal_image');
        echo '<img src="' . $four_column_horizontal_image['sizes']['4-col-horizontal'] . '" alt="' . $four_column_horizontal_image['alt'] . '" />';
      ?>
  </li>
</ul>
