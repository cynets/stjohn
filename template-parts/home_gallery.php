<?php 
$gallery = get_field('slide_show','37');
if( $gallery ): ?>
 <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <ul class="orbit-container home-slider">
    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    
     <?php foreach( $gallery as $k=>$data ): ?>
     
     <li class="is-active orbit-slide">
      <img class="orbit-image" src="<?php echo $data['image']['url']; ?>" alt="Space">
      <figcaption class="orbit-caption"> <H5><?php echo $data['heading']; ?></H5>
      <?php echo $data['description']; ?></figcaption>
    </li>
    <?php endforeach; ?>
   </ul>
 
</div>
<?php endif; ?>
