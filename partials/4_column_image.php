<ul class="product-flex-list">
  <li class="grid-4-col">
      <?php // loop through the rows of data
        $four_column_horizontal_image= get_sub_field('four_column_horizontal_image');
        echo '<img src="' . $four_column_horizontal_image['sizes']['4-col-horizontal'] . '" alt="' . $four_column_horizontal_image['alt'] . '" />';
      ?>
      <?php if($four_column_horizontal_image['caption']) : ?>
      <div class="product-image-description">
        <?php echo $four_column_horizontal_image['caption'] ?>
      </div>
      <?php endif; ?>
  </li>
</ul>
