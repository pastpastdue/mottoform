  <ul class="product-flex-list">
    <?php
      $one_column_image = get_sub_field('one_column_image');
      $one_column_image_2 = get_sub_field('one_column_image_2');
      $one_column_image_3 = get_sub_field('one_column_image_3');
      $one_column_image_4 = get_sub_field('one_column_image_4');

    ?>
  <?php if($one_column_image) : ?>
    <li class="grid-1-col col-float-left">
        <?php // loop through the rows of data
					echo '<img src="' . $one_column_image['sizes']['1-col'] . '" alt="' . $one_column_image['alt'] . '" />';
        ?>
        <div class="product-image-description">
        <?php if($one_column_image['caption']) : ?>
          <?php echo $one_column_image['caption'] ?>
        <?php endif; ?>&nbsp;
        </div>
    </li>
  <?php endif; if($one_column_image_2) : ?>
    <li class="grid-1-col col-float-left">
        <?php // loop through the rows of data
          echo '<img src="' . $one_column_image_2['sizes']['1-col'] . '" alt="' . $one_column_image_2['alt'] . '" />';
        ?>
        <div class="product-image-description">
        <?php if($one_column_image_2['caption']) : ?>
          <?php echo $one_column_image_2['caption'] ?>
        <?php endif; ?>&nbsp;
        </div>
    </li>
  <?php endif; if($one_column_image_3) : ?>
    <li class="grid-1-col col-float-left">
        <?php // loop through the rows of data
          echo '<img src="' . $one_column_image_3['sizes']['1-col'] . '" alt="' . $one_column_image_3['alt'] . '" />';
        ?>
        <div class="product-image-description">
        <?php if($one_column_image_3['caption']) : ?>
          <?php echo $one_column_image_3['caption'] ?>
        <?php endif; ?>&nbsp;
        </div>
    </li>
  <?php endif; if($one_column_image_4) : ?>
    <li class="grid-1-col col-float-left">
        <?php // loop through the rows of data
          echo '<img src="' . $one_column_image_4['sizes']['1-col'] . '" alt="' . $one_column_image_4['alt'] . '" />';
        ?>
        <div class="product-image-description">
        <?php if($one_column_image_4['caption']) : ?>
          <?php echo $one_column_image_4['caption'] ?>
        <?php endif; ?>&nbsp;
        </div>
    </li>
  <?php endif; ?>
  </ul>
