<?php 
get_header(); 
while(have_posts()){
    the_post(); 
    pageBanner();
    ?>
    <div class="container container--narrow page-section">
   
    



    <div class="generic-content">
    <div class="row group">
        <div class="one-third">
        <?php the_post_thumbnail('professorPortrait'); ?>
        </div>
        <div class="teo-thirds">
         <?php the_content(); ?>       
        </div>
    </div>

    </div>


  <?php 
  
  $realatedPrograms = get_field("related_program");
  if ($realatedPrograms){
echo '<hr class="section-break">';
  echo '<h2 class="headline headline--medium"> Subjects(s) Taugth </h2>';
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