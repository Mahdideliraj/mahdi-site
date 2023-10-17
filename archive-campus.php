<?php get_header(); 
        pageBanner(array(
          'title' => "our campused",
          'subtitle' => 'See our campususe in the world',
          'photo' => ''
        ));   
?>
    <div class="container container--narrow page-section">
    <?php
    while(have_posts()) {
    the_post(); 
    get_template_part('template_parts/event');   
      }
      echo paginate_links();
     ?>
<hr class="section-break">
<p>do you want see our past events? <a href="<?php echo site_url('/past-events')  ?>">click here</a></p>

</div>


<?php
        get_footer();
?>
