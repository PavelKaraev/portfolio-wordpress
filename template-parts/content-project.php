<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('project-single'); ?>>
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-7">
        <div id="carousel-example-generic-1" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
			  <?php 
				if(get_field('screenshot_desktop')): 
				$image = get_field('screenshot_desktop');
				$url = $image['url'];
				$alt = $image['alt'];
			  ?>
              <div class="desktop">
                <div class="display">
                  <img src="<?php echo $url; ?>" class="img-fluid" alt="<?php echo $alt; ?>">
                </div>
              </div>
			  <?php endif; ?>
            </div>
            <div class="carousel-item">
              <?php 
				if(get_field('screenshot_tablet')): 
				$image = get_field('screenshot_tablet');
				$url = $image['url'];
				$alt = $image['alt'];
			  ?>
              <div class="tablet">
                <div class="display">
                  <img src="<?php echo $url; ?>" class="img-fluid" alt="<?php echo $alt; ?>">
                </div>
              </div>
			  <?php endif; ?>
            </div>
            <div class="carousel-item">
              <?php 
				if(get_field('screenshot_mobile')): 
				$image = get_field('screenshot_mobile');
				$url = $image['url'];
				$alt = $image['alt'];
			  ?>
              <div class="mobile">
                <div class="display">
                  <img src="<?php echo $url; ?>" class="img-fluid" alt="<?php echo $alt; ?>">
                </div>
              </div>
			  <?php endif; ?>
            </div>
          </div>
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic-1" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic-1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
      <div class="col-xl-6 col-lg-5">
        <div class="content-container">
          <div class="section-title">
            <h1><?php echo get_the_title(); ?></h1>
          </div>
          <div class="project-meta">
            <div class="project-meta-block">
              <div class="project-meta-title">Клиент</div>
              <div class="project-meta-info">Nick Kireev</div>
            </div>
            <div class="project-meta-block">
              <div class="project-meta-title">Дата</div>
              <div class="project-meta-info"><?php the_time('d.m.Y'); ?></div>
            </div>
            <div class="project-meta-block">
              <div class="project-meta-title">Категория</div>
              <div class="project-meta-info">Верстка</div>
            </div>
          </div>
          <div class="project-desc">
            <?php the_content(); ?>
          </div>
          <a href="<?php echo get_field('direct_link'); ?>" class="btn btn-primary" target="_blank">Посмотреть</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if(get_previous_post() || get_next_post()) : ?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <nav class="project-navigation">
        <?php
          $prev_project = get_previous_post();
          if($prev_project) :
        ?>
        <a href="<?php echo get_permalink($prev_project->ID)?>" class="nav-item project-prev">
          <div class="nav-image">
            <?php echo get_the_post_thumbnail($prev_project->ID, 'full', array('class' => 'img-fluid'))?>
          </div>
          <div class="nav-info">
            <div class="nav-title"><?php echo $prev_project->post_title; ?></div>
            <div class="nav-meta">Предыдущий</div>
          </div>
        </a>
      <?php endif; ?>
      <?php $next_project = get_next_post();
        if($next_project) :
      ?>
      <a href="<?php get_post_permalink($next_project->ID); ?>" class="nav-item project-next">
        <div class="nav-info">
          <div class="nav-title"><?php echo $next_project->post_title; ?></div>
          <div class="nav-meta">Следующий</div>
        </div>
        <div class="nav-image">
          <?php echo get_the_post_thumbnail($next_project->ID, 'full', array('class' => 'img-fluid'))?>
        </div>
      </a>
      <?php endif; ?>
      </nav>
    </div>
  </div>
</div>
<?php endif; ?>
