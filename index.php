<?php get_header(); ?>
<!-- Index file -->
    <div class="slider">
      <a class="slider-prev" href="#"><i class="icon-chevron-sign-left"></i></a>
      <a class="slider-next" href="#"><i class="icon-chevron-sign-right"></i></a>
      <div class="slide">
        <img class="slide-image" src="<?php echo get_template_directory_uri(); ?>/images/mobile-devices.png">
        <div class="slide-content">
          <h3 class="slider-title">Business Services<br><span>for the Twenty-First Century</span></h3>
          <a class="slider-button" href="#">LEARN MORE <i class="icon-double-angle-right"></i><br>
            <span>Find out how we can help your business</span>
          </a>
        </div><!-- end of "slide-content" -->
      </div><!-- end of "slide" -->
    </div><!-- end of "slider" -->

    <!-- Dispaly of youtube videos -->
    <div class="row">
      <div class="container">
      <div class="main-content">
        <div class="movies-list-wrap mlw-topview mt20">

          <div class="tab-content">
            <div id="movie-featured" class="movies-list movies-list-full tab-pane in fade active">

            <?php for($i=0; $i<=5; $i++){ ?>
              <div data-movie-id="15783" class="ml-item">
                <a href="#"
                   data-url="http://123movies.to/ajax/movie_load_info/15783" class="ml-mask jt" title="Kingsglaive: Final Fantasy XV">
                  <span class="mli-quality"><?php echo $i;?></span>
                  <img data-original="http://img.123movies.to/2016/08/29/poster/269bcc0479fe7860064dd945dc6d25c2-kingsglaive-final-fantasy-xv-1472495867.jpg" class="lazy thumb mli-thumb"
                     alt="Movie Title">
                  <span class="mli-info"><h2>Kingsglaive: Final Fantasy XV</h2></span>
                </a>
              </div>
            <?php } ?>

            </div> <!-- End of movie-featured -->
          </div> <!-- End of Tab Content -->
        </div>
      </div>
    </div>
    </div><!-- end of "row" -->

    <h3 class="clear meet-the-team">Meet the Team</h3>
    <div class="row">
      <div class="column-one-fourth">
        <div class="image-container">
          <img src="http://placehold.it/220x160" width="220" height="160">
          <div class="image-caption">
            <strong>Janice Thomson</strong><br>
            Lead Programmer
          </div>
        </div><!-- end of "image-container" -->
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div><!-- end of "column-one-fourth" -->

      <div class="column-one-fourth">
        <div class="image-container">
          <img src="http://placehold.it/220x160" width="220" height="160">
          <div class="image-caption">
            <strong>Mike Milton</strong><br>
            Founder/President
          </div>
        </div><!-- end of "image-container" -->
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div><!-- end of "column-one-fourth" -->

      <div class="column-one-fourth">
        <div class="image-container">
          <img src="http://placehold.it/220x160" width="220" height="160">
          <div class="image-caption">
            <strong>Gary Johnson</strong><br>
            Interactive Producer
          </div>
        </div><!-- end of "image-container" -->
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div><!-- end of "column-one-fourth" -->

      <div class="column-one-fourth">
        <div class="image-container">
          <img src="http://placehold.it/220x160" width="220" height="160">
          <div class="image-caption">
            <strong>Gordon Sparrow</strong><br>
            Designer
          </div>
        </div><!-- end of "image-container" -->
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div><!-- end of "column-one-fourth" -->

    </div><!-- end of "row" -->

    </div><!-- end of ".container" -->

    <?php get_footer(); ?>
  </body>
</html>
