<?php
/*
Template Name: Front
*/
get_header(); ?>





<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<!--<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php //post_class() ?> id="post-<?php //the_ID(); ?>">
			<?php //do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php //the_content(); ?>
			</div>
			<footer>
				<?php //wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php //the_tags(); ?></p>
			</footer>
			<?php //do_action( 'foundationpress_page_before_comments' ); ?>
			<?php //comments_template(); ?>
			<?php //do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>-->
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<section class="slideshow-news-section">
<div class="row">

<!--Slide show-->
   <div class="medium-8 column slide-show" >
	<?php get_template_part( 'template-parts/home_gallery' ); ?>
   </div>
   
  <!-- News & Notices-->
   <div class="medium-4 column news-notice">
   <h4>News & Notices</h4>
<?php get_template_part( 'template-parts/news_notices' ); ?>
	

   </div>
</div>
</section>


<section class="four-box">
<div class="row small-up-1 medium-up-2 large-up-4" data-equalizer data-equalize-on="medium">
   <!--From Principal's Desk-->
   <div class="small-3 columns"  >
	 <div class="principal-box" data-equalizer-watch>
<h1><?php echo get_field('heading','11')?></h1>
	<?php echo get_field('description','11')?>
   </div>
   </div>
   
   <!-- Chairman's Messages-->
   <div class="small-3 columns"  >
	   <div class="chairman-box" data-equalizer-watch>
     
<h1><?php echo get_field('heading','29')?></h1>
<p> <img src="<?php $img= get_field('image','29'); echo $img['sizes']['thumbnail']?>" align="left" style="margin-right:12px" ><?php echo get_field('description','29')?></p>
   </div>
   </div>
   <!--Academic Calendar-->
   <div class="small-3 columns"  >
	  <div class="calendar-box" data-equalizer-watch>
<h1>Academic Calendar</h1>

<?php
global $offlive;

if($offlive==1)
	$page_id=93;
else
	$page_id=97;
		
 $recent = new WP_Query("page_id=$page_id"); while($recent->have_posts()) : $recent->the_post();?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php // $cal=get_page(93);print $cal->post_content ?>
   </div>
   </div>
   
  <!-- Our Toppers-->
   <div class="small-3 columns "  >
	  <div class="toppers-box" data-equalizer-watch>
        <h1>Our Toppers</h1>
        <?php get_template_part( 'template-parts/our_toppers' ); ?>
   </div>
   </div>
</div>
</section>






<section >
<div class="row columns">
<div class="one-box">
   <div class="birthday-box" >
<h1>Birthday's This Month</h1>
<div class="b-box" >
			
            
            <div class="small-6 small-6 columns" style="margin:0px 0px 0px 0px; padding:0px; border:0px solid #ff0000; background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/teacher-birthday.jpg) left top no-repeat; ">
            <div class="container" style="padding:0px; margin:0px 0px 0px 50px; background-color:transparent; height:170px; max-width:80px; border:0px solid #000; ">
				
                <?php echo file_get_contents("http://stjohnscoed.com/teachers_birthday.html")?>

			</div>
            </div>
            
             <div class="small-6 small-6 columns" style="margin:0px 0px 0px 0px;  padding:0px; border:0px solid #ff0000;  background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/student-birthday.jpg) right top no-repeat; " >
            <div class="container" style="background-color:transparent; border:0px solid #ff0000; float:right; margin:0px 30px 0px 40px; padding:0px; height:170px; max-width:80px; ">
				<?php echo file_get_contents("http://stjohnscoed.com/student_birthday.html")?>
				
			</div>
            </div>
			
		</div>
   </div>
   <div class="word-day-box" >
   
   <h1>Word of the Day</h1>
<div class="w-box">
   <script src="http://wordsmith.org/words/word3.js" type="text/javascript">
</script>
                 </div>
   </div>
   <div class="thought-day-box " >
<h1>Thought of the Day</h1>
<div class="t-box" >
<div id="quote">                 
<!--"<SCRIPT LANGUAGE="JavaScript" SRC="<?php //echo get_stylesheet_directory_uri(); ?>/assets/javascript/thought.js"></SCRIPT>"-->
<script type="text/javascript" src="http://www.brainyquote.com/link/quotebr.js"></script>

    
</div>
</div>
   </div>
   </div>
  </div>
</section>









<?php get_footer();
