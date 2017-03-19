<ul class="product-flex-list">

  <?php
  $two_column_square_image = get_sub_field('two_column_square_image');
  $two_column_square_image_2 = get_sub_field('two_column_square_image_2');
  $two_column_uncropped = get_sub_field('two_column_uncropped');
  $two_column_uncropped_2 = get_sub_field('two_column_uncropped_2');

  ?>

<?php if( !empty($two_column_square_image) ): ?>
  <li class="grid-2-col col-float-left">
      <?php // loop through the rows of data
        echo '<img src="' . $two_column_square_image['sizes']['2-col-square'] . '" alt="' . $two_column_square_image['alt'] . '" />';
      ?>
      <?php if($two_column_square_image['caption']) : ?>
      <div class="product-image-description">
        <?php echo $two_column_square_image['caption'] ?>
      </div>
      <?php endif; ?>
  </li>
<?php endif; if( !empty($two_column_square_image_2) ): ?>
  <li class="grid-2-col col-float-left">
      <?php // loop through the rows of data
        echo '<img src="' . $two_column_square_image_2['sizes']['2-col-square'] . '" alt="' . $two_column_square_image_2['alt'] . '" />';
      ?>
      <?php if($two_column_square_image_2['caption']) : ?>
      <div class="product-image-description">
        <?php echo $two_column_square_image_2['caption'] ?>
      </div>
      <?php endif; ?>
  </li>

<?php endif; if( !empty($two_column_uncropped) ): ?>

  <li class="grid-2-col col-float-left">
    <div class="product-image">
      <?php // loop through the rows of data
        echo '<img src="' . $two_column_uncropped['sizes']['2-col-vertical'] . '" alt="' . $two_column_uncropped['alt'] . '" />';
      ?>
    </div>
    <?php if($two_column_uncropped['caption']) : ?>
    <div class="product-image-description">
      <?php echo $two_column_uncropped['caption'] ?>
    </div>
    <?php endif; ?>
  </li>

<?php endif; if( !empty($two_column_uncropped_2) ): ?>

  <li class="grid-2-col col-float-left">
      <?php // loop through the rows of data
        echo '<img src="' . $two_column_uncropped_2['sizes']['2-col-vertical'] . '" alt="' . $two_column_uncropped_2['alt'] . '" />';
      ?>
      <?php if($two_column_uncropped_2['caption']) : ?>
      <div class="product-image-description">
        <?php echo $two_column_uncropped_2['caption'] ?>
      </div>
      <?php endif; ?>
  </li>

<?php endif; ?>

  </ul>
