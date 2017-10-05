<?php /* Template Name: Homepage */ get_header('home')?>
<section id="carousel">
      <div class="carousel slide" id="slideshow" data-ride="carousel">
        <div class="carousel-inner">
          <div class="item active"><img src="<?php echo TMPL_DIR ?>/assets/img/slide-1.jpg" alt="slide"/>
            <div class="carousel-caption">
              <h1>STRATEGIES THAT DRIVE BUSINESS RESULTS</h1>
            </div>
          </div>
          <div class="item"><img src="<?php echo TMPL_DIR ?>/assets/img/slide-2.jpg" alt="slide"/>
            <div class="carousel-caption">
              <h1>EVERYTHING YOU NEED TO KNOW ABOUT BUSINESS</h1>
            </div>
          </div>
          <div class="item"><img src="<?php echo TMPL_DIR ?>/assets/img/slide-3.jpg" alt="slide"/>
            <div class="carousel-caption">
              <h1>A WIDE RANGE OF GLOBAL BUSINESS INFORMATION</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="row controls">
        <div class="container controls-container">
          <div class="carousel-controls col-xs-1"><a class="left carousel-control" href="#slideshow" data-slide="prev"><i class="fa fa-chevron-circle-left fa-2x"></i></a></div>
          <div class="carousel-controls col-xs-1 col-xs-push-10 push-to-right"><a class="right carousel-control" href="#slideshow" data-slide="next"><i class="fa fa-chevron-circle-right fa-2x"></i></a></div>
        </div>
      </div>
    </section>
    <section id="offerings">
      <div class="container content-container">
        <div class="col-sm-3 offer"><img src="<?php echo TMPL_DIR ?>/assets/img/offer-1.png"/>
          <h1>GLOBAL</h1>
          <h2>BUSINESS GUIDE</h2><a class="fa fa-chevron-circle-right fa-lg" href="basic-article-page.html"></a>
        </div>
        <div class="col-sm-3 offer"><img src="<?php echo TMPL_DIR ?>/assets/img/offer-2.png"/>
          <h1>FRESH</h1>
          <h2>BUSINESS IDEAS</h2><a class="fa fa-chevron-circle-right fa-lg" href="basic-article-page.html"></a>
        </div>
        <div class="col-sm-3 offer"><img src="<?php echo TMPL_DIR ?>/assets/img/offer-3.png"/>
          <h1>PRO</h1>
          <h2>SERVICES & ADVICE</h2><a class="fa fa-chevron-circle-right fa-lg" href="basic-article-page.html"></a>
        </div>
        <div class="col-sm-3 offer"><img src="<?php echo TMPL_DIR ?>/assets/img/offer-4.png"/>
          <h1>FAST</h1>
          <h2>ONLINE SUPPORT</h2><a class="fa fa-chevron-circle-right fa-lg" href="basic-article-page.html"></a>
        </div>
      </div>
    </section>
    <section id="offer-section">
      <div class="container content-container">
        <?php 
          $loop = new WP_Query(
          array( 'post_type' => 'offers',
              'posts_per_page' => 4,
              'orderby' => 'DESC'));
          if ( $loop->have_posts() ) :
          $i = 1;
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $class = ($i%2) ?  'right-image' : 'left-image';?>
            <div class="col-sm-6 item-content <?= $class ?>">
              <div class="pic">
                <div class="image">0<?php echo $i ?></div>
              </div>
              <div class="text">
                <h2><?php the_title(); ?></h2>
                <p><?php echo wp_trim_words( get_the_content(), 20, ' ...' ); ?></p><a href='<?php the_permalink();?>'>more <i class="fa fa-chevron-circle-right"></i></a>
              </div>
            </div>
          <?php
          $i++;
          endwhile;
          endif;
        wp_reset_postdata();
      ?>
      </div>
    </section>
    <section id="parallax-section">
      <div class="parallax"><img src="<?php echo TMPL_DIR ?>/assets/img/parallax-bg.jpg"/></div>
      <div class="content">
        <div class="container content-container">
          <div class="col-sm-5">
            <h1>BEST PROFESSIONAL CONSULTING AT YOUR SERVICE</h1>
          </div>
          <div class="col-sm-3">
            <h2>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO:</h2>
          </div>
          <div class="col-sm-4">
            <li><a href="#">NAM LIBERO TEMPORE CUM</a></li>
            <li><a href="#">EST ELIGENDI OPTIO CUMQUE</a></li>
            <li><a href="#">EST ELIGENDI OPTIO CUMQUE</a></li>
            <li><a href="#">PLACEAT FACERE POSSIM</a></li>
          </div>
        </div>
      </div>
    </section>
    <section id="partners">
      <div class="container">
        <div class="col-sm-3 item"><img src="<?php echo TMPL_DIR ?>/assets/img/partner-1.png"/></div>
        <div class="col-sm-3 item"><img src="<?php echo TMPL_DIR ?>/assets/img/partner-2.png"/></div>
        <div class="col-sm-3 item"><img src="<?php echo TMPL_DIR ?>/assets/img/partner-3.png"/></div>
        <div class="col-sm-3 item"><img src="<?php echo TMPL_DIR ?>/assets/img/partner-4.png"/></div>
      </div>
    </section>
    <section id="contact-form">
      <div class="container">
        <div class="col-sm-6">
          <h1>Interested in our offer?</h1>
          <h2>Fill in this form. We will call you back.</h2>
          <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae</p>
        </div>
        <div class="col-sm-6 input-form">
          <input type="text"/><a class="btn btn-normal" href="#">Submit</a>
        </div>
      </div>
    </section>
<?php get_footer(); ?>