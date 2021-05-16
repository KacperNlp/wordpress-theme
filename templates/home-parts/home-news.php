<section class="section section--news">
  <h2 class="content__header section__header--news-section">NEWS/EVENTS</h2>
  <?php 
    $paged = (get_query_var('pages')) ? absint(get_query_var('paged')) : 1;
    $args = array(
      'post-per-page' => 6,
      'paged' => $pages,
    );

    $the_query = new WP_Query($args);

    //checks if it's any news
    if($the_query->have_posts()):?>
      <div class="newses">
        <?php 
        //loop for display news
          while($the_query->have_posts()):
            $the_query->the_post()?>
              <div class="news">
                <?php if(has_post_thumbnail()) :?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ;?>">
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri() . '-child/img/homePage/Datenschutz-300x300.jpg'; ?>" alt="<?php the_title() ;?>">
                <?php endif;?>
                <h3 class="news__title"><?php the_title() ;?></h3>
                <p class="news__sneak-peek"><?php the_excerpt() ;?></p>
                <a href="<?php the_permalink() ;?>" class="news__link">> mehr erfahren</a>
              </div>
          <?php endwhile ;?>
      </div>
      <?php
      //if there is not post
    else:?>
        <p>No post found...</p>
      <?php
    endif;?>
</section>