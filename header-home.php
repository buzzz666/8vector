<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class();?>>
    <section id="masterhead">
      <section id="header">
        <div class="row top-row">
          <div class="container">
            <div class="col-sm-9 contacts-bar">
              <div class="col-sm-6 single-row">
                <div class="contact-item"><i class="fa fa-map-marker"> 
                    <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45.</p></i></div>
              </div>
              <div class="col-sm-6 single-row">
                <div class="contact-item"><a class="mailto" href="mailto:contact@demolink.org"><i class="fa fa-envelope-o"> 
                      <p>contact@demolink.org</p></i></a></div>
                <div class="contact-item"><i class="fa fa-phone"> 
                    <p>+1 800 559 6580</p></i></div>
              </div>
            </div>
            <div class="col-sm-3 socials-bar">
              <div class="item"><a class="fa fa-facebook fa-lg" href="#"></a></div>
              <div class="item"><a class="fa fa-google-plus fa-lg" href="#"></a></div>
              <div class="item"><a class="fa fa-rss fa-lg" href="#"></a></div>
              <div class="item"><a class="fa fa-pinterest fa-lg" href="#"></a></div>
              <div class="item"><a class="fa fa-linkedin fa-lg" href="#"></a></div>
            </div>
          </div>
        </div>
        <div class="navbar-background">
          <nav class="navbar navbar-inverse">
            <div class="container">
              <div class="col-md-4 col-sm-12 logotype">
                <div class="navbar-header">              <a class="navbar-brand" href="/"><img src= '<?php echo TMPL_DIR ?>/assets/img/logo.png' ?></a></div>
              </div>
              <div class="col-md-8 col-sm-12 navigation">
                <?php 
                  wp_nav_menu( array(
                    'menu_class'      => 'nav navbar-nav',
                    'theme_location'  => 'header_menu'
                  ));
                ?>
              </div>
            </div>
          </nav>
        </div>
      </section>
    </section>