<?php
/*
Template Name: Gallery
*/
get_header();
if($_REQUEST[id])
{
	if( have_rows('flexible_content_gallery') ):
    while ( have_rows('flexible_content_gallery') ) : the_row();
        
		$flag=0;
		if( get_row_layout() == 'category_name' ):
		$data=get_sub_field('image');
		if($data[id]==$_REQUEST[id])
		{
			$flag=1;
		}
		endif;
		
		if(get_row_layout() == 'gallery'):
		$image=get_sub_field('image') ;
		
		if($_REQUEST[id]==$data[id])
		{
			foreach($image as $k=>$v)
			{		
			 ?>
	<div class="row">
  	<div class="small-4 columns">
  	<img class="thumbnail" src="<?php echo $v[url]  ?>" alt="<?php echo get_sub_field('title');?>">
    </div>
	</div>
			 <?php
			}
		}
		endif;	
			
    endwhile;
else :
    // no layouts found
endif;
}
else
{
// check if the flexible content field has rows of data
if( have_rows('flexible_content_gallery') ):

 	// loop through the rows of data
    while ( have_rows('flexible_content_gallery') ) : the_row();

		// check current row layout
        if( get_row_layout() == 'category_name' ):

			$data=get_sub_field('image')
			?>

        <div class="row">
          <div class="small-4 columns"> <img class="thumbnail" src="<?php echo $data[url]  ?>" alt="<?php echo get_sub_field('heading');?>"> <a href="http://192.168.5.22/prakash-stjohns/gallery/?id=<?php echo $data[id]  ?>"><?php echo get_sub_field('heading');?></a> </div>
        </div>
<?php
        endif;
    endwhile;

else :

    // no layouts found

endif;
}
?>
<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_footer();

