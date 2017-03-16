<ul class="product-3-col-list">
  <li>
      <?php // loop through the rows of data
        $three_column_horizontal_image= get_sub_field('three_column_horizontal_image');
        echo '<img src="' . $three_column_horizontal_image['sizes']['3-col-horizontal'] . '" alt="' . $three_column_horizontal_image['alt'] . '" />';
      ?>
  </li>
</ul>
