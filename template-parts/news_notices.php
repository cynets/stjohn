<?php 
$news = get_field('news_notices','17');
if( $news ): ?>
<marquee behavior="scroll" height="250"  scrollamount="1" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
<div id="news-notice" class="col-md-12">
  <ul>
    <?php foreach( $news as $data ): ?>
    <li  style=" margin: 4px 0px 0px 0px;  width: 100%;">
      <div  style="border-bottom:1px dotted #999;">
        <div class="pull-left tag-default">
          <h4><?php echo $data['date']; ?></h4>
        </div>
      </div>
      <div>
        <span class="heading-news"><?php echo $data['heading']; ?>
        
		<?php
        if( $data['image'])
		{
		?>
        <br>
        <img src="<?php echo $data['image']['sizes']['thumbnail']; ?>" align="left" style="margin-right:12px; width:90px" >
		<?php }?>
		<?php echo $data['description']; ?></span>
       
         </div>
    </li>
    <?php endforeach; ?>
  </ul>
</div>
</marquee>
<?php endif; ?>
