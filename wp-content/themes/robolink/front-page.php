<?php
/**
Template Name: Home
 */

$feature_id_1 = 115;
$feature_id_2 = 109;
$feature_id_3 = 113;

get_header('front'); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php query_posts( array ( 'category_name' => 'slide', 'posts_per_page' => -1 ) );
          if(have_posts()) : while(have_posts()) :
            the_post();
            the_content();
          endwhile; endif;
        ?>

        <?php wp_reset_query(); ?>
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>


      <!-- featurette 1 -->
      <div class="featurette-light-bg">
      <div class="container">
      <div class="row featurette">
        <div class="col-md-4">
          <?php echo get_the_post_thumbnail($feature_id_1, 'full', array('class' => 'img-responsive')); ?>
        </div>
        
        <div class="col-md-8">
          <h1 class="entry-title landing-feature-header"><?php echo get_the_title($feature_id_1); ?></h1>
          <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
          <p class="landing-feature-body">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div><!-- .end featurette 1 -->
      </div>
      </div>


      <!-- featurette 2 -->
      <div class="featurette-dark-bg">
      <div class="container">
      
      <div class="row featurette">
        <div class="col-md-8">
          <h1 class="entry-title landing-feature-header"><?php echo get_the_title($feature_id_2); ?></h1>
          <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
          <p class="landing-feature-body">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        
        <div class="col-md-4">
          <?php echo get_the_post_thumbnail($feature_id_2, 'full'); ?>
        </div>
      </div><!-- .end featurette 2 -->
      </div>
      </div>


      <!-- featurette 3 -->
      
      <div class="featurette-light-bg">
      <div class="container">
      <div class="row featurette">
        <div class="col-md-3">
          <?php echo get_the_post_thumbnail($feature_id_3, 'full'); ?>
        </div>

        <div class="col-md-9">
          <h1 class="entry-title landing-feature-header"><?php echo get_the_title($feature_id_3); ?></h1>
          <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
          <p class="landing-feature-body">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        
      </div><!-- .end featurette 3 -->
      </div>
      </div>


		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_sidebar(); ?>
<?php get_footer('simple'); ?>