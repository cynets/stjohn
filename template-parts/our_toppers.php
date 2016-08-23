<?php 
$toppers = get_field('our_toppers','79');
if( $toppers ): ?>
 <marquee behavior="scroll"  scrollamount="1" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
    <ul id="toppers">
     <?php foreach( $toppers as $k=>$data ): ?>
     <li><img src="<?php echo $data['photo']['url']; ?>"><br>
          <?php echo $data['name']; ?>
    </li>
    <?php endforeach; ?>
   </ul>
  </marquee>
<?php endif; ?>
