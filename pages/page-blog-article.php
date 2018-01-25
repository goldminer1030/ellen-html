<?php
$post = hook('macro', '$:/view/post');
?>
  <div class="header-title-container">
    <div class="entete">
      <div class="flotaison-container">
        <div class="textOver text0">
          <?php $title = explode(' ', $post->getTitle()); echo implode(' ', array_slice($title, 0, count($title)-1)); ?><br/>
          <span class="subtitle"><?php echo implode(' ', array_slice($title, count($title)-1, 1)); ?></span>
        </div>
        <div class="background-image background-image-dark">
          <img src="<?php echo hook('decodeRouteImage', array($post->getThemePicture(), 'large')); ?>" class="cimagex" alt="header title"/>
        </div>
      </div>
    </div>
  </div>
  
  <?php if(isset($_GET['debug'])) { ?>
  <div class="blog-topbar-links">
    <a href="">Je m'inscris</a>
    <a href="">Espace Candidat</a>
    <a href="">Espace Client</a>
  </div>
  <?php } ?>

  <div class="blog-page-content bg-white">
    <div class="container">
      <!-- Breadcrumb -->
      <?php echo hook('get_fil_ariane'); ?>

      <!-- Intro -->
      <div class="row text-center">
        <div class="col-sm-12 col-md-2"></div>
        <div class="col-sm-12 col-md-8 blog-article-content">
          <?php echo hook('cms_html', hook('decodeRouteImage', array($post->getContent(), 'medium'))); ?>
        </div>
      </div>
      
    </div>
  </div>