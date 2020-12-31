<!-- rendering a single post -->
<?php get_header(); ?> 
    <h2>single.php</h2>
    <section class="single-post"> 
      <article class="archive-article__container">
        <div style="max-width: 600px;"class="article__text-container">
        <?php 
          $image = get_field('image');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          if( $image ) {
              echo wp_get_attachment_image( $image, $size );
          }
        ?>
          <h3 class="article__post-title">
            <a href=""><?php the_title(); ?></a>
          </h3>
          <div class="article__meta">
            <span class="article__meta-date"><?php the_date(); ?><?php the_tags(); ?></span>
          </div>
          <div class="article__meta-intro">
          <?php the_content();?>
          </div>
          <a class="article__meta-more" href="">Read more &rarr;</a>
        </div>
      </article> 
      <?php 

        $fields = get_fields();
        
        if( $fields ): ?>
            <ul>
                <?php foreach( $fields as $name => $value ): ?>
                    <li><b><?php echo $name; ?></b> <?php echo $value; ?></li>
                <?php endforeach; ?>
            </ul>

        <?php endif; ?>
    </section>
<?php get_footer(); ?>   