<?php 
get_header(); 
while(have_posts()){
    the_post(); 
    pageBanner(array(
      'title' => "",
      'subtitle' => "",
      'photo' => ""
    ));
    
    
    ?>
    <div class="container container--narrow page-section">
   
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Event Home  </a> <span class="metabox__main">  <?php  the_title();  ?>  <?php echo get_the_category_list(','); ?> </span>
        </p>
      </div>



    <div class="generic-content"><?php  the_content();   ?></div>


  <?php 
  
  $realatedPrograms = get_field("related_program");
  if ($realatedPrograms){
echo '<hr class="section-break">';
  echo '<h2 class="headline headline--medium"> related program(s) </h2>';
  echo '<ul class="link-list min-list">';
  foreach($realatedPrograms as $program){
    ?>

    <li><a href="<?php echo get_the_permalink($program); ?> "> <?php echo get_the_title($program); ?>  </a></li>
  <?php }
  echo '</ul';
  
 }
?>
 


  

    </div>

<?php } 
 get_footer();
?>