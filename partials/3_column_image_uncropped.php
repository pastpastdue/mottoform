<ul class="product-flex-list">
  <li class="grid-3-col">
      <?php // loop through the rows of data
        $three_column_square_image= get_sub_field('three_column_square_image');
        echo '<img src="' . $three_column_square_image['sizes']['3-col-square'] . '" alt="' . $three_column_square_image['alt'] . '" />';
      ?>
      <?php if($three_column_square_image['caption']) : ?>
      <div class="product-image-description">
        <?php echo $three_column_square_image['caption'] ?>
      </div>
      <?php endif; ?>
  </li>
</ul>
