<ul class="product-flex-list">
  <li class="grid-3-col">
      <?php // loop through the rows of data
        $three_column_horizontal_image= get_sub_field('three_column_horizontal_image');
        echo '<img src="' . $three_column_horizontal_image['sizes']['3-col-horizontal'] . '" alt="' . $three_column_horizontal_image['alt'] . '" />';
      ?>
      <?php if($three_column_horizontal_image['caption']) : ?>
      <div class="product-image-description">
        <?php echo $three_column_horizontal_image['caption'] ?>
      </div>
      <?php endif; ?>
  </li>
</ul>
