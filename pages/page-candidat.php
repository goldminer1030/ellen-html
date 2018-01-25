<?php
$post = hook('macro', '$:/view/post');
$meta = hook('get_all_meta_post', $post->getId());
?>
  <div class="header-title-container">
		<div class="entete">
			<div class="flotaison-container">
				<div class="textOver text0">
          bien choisir <br />
					<span class="subtitle">son ecurie</span>
				</div>
				<div class="background-image">
					<img src="static/images/candidat.jpg" class="cimagex" alt="header title"/>
				</div>
			</div>
		</div>
  </div>

  <?php if(isset($_GET['debug'])) { ?>
  <div class="blog-topbar-links">
    <a href="">Je m'inscris</a>
    <a href="">Espace Candidat</a>
  </div>
  <?php } ?>

  <div class="blog-page-content bg-white">
    <div class="container">
      <!-- Breadcrumb -->
      <?php echo hook('get_fil_ariane'); ?>

      <?php if(isset($_GET['debug'])) { ?>
      <div class="row smartsearch">
        <div class="col-sm-12">
          <div class="smarthome">
            <div class="smh-search">
              <div class="smh-embed">
                <div class="smh-search-textbox">
                  <form method="POST">
                    <div class="smh-input">
                      <i class="fa fa-user fa-fw ecd-red-text"></i>
                      <input type="text" class="ecd-red-text" name="" placeholder="Poste recherché" />
                    </div>
                    <div class="smh-input">
                      <i class="fa fa-map-marker fa-fw ecd-red-text"></i>
                      <input type="text" class="ecd-red-text" name="" placeholder="Régions, Département ..." />
                    </div>
                    <button>Rechercher</button>
                  </form>
                </div>
                <div class="smh-search-links">
                  <div class="smh-search-left">
                    <a href="">Nos offres par practice
                      <i class="fa fa-angle-down fa-fw"></i>
                    </a>
                  </div>
                </div>
                <div class="smh-search-practices">
                  <ul>
                    <?php
      									/* Liste des practices */
      									$listPractices = hook('get_custom_post', array('practices', 'view_all_post'));
      									foreach($listPractices as $practice) {
      										if($practice->getLevel() == 1) {
      									?>
                      <li>
                        <?php echo $practice->getNom(); ?>
                      </li>
                      <?php }} ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- ./row -->
      <?php } ?>

      <div><?php echo hook('cms_html', hook('decodeRouteImage', array($post->getContent(), 'medium'))); ?></div>

      <div class="row boxed-flex-sm<?php if(isset($_GET['debug'])) { ?> boxed-numbers<?php } ?>">
        <div class="col-md-4 boxed-flex-sm">
          <div class="boxed-content">
            <P class="boxed-number">1</P>
            <?php $content = (isset($meta['meta_x_2']) ? $meta['meta_x_2'] : ''); ?>
            <div class="boxed-wrapper bg-dark">
              <p class="boxed-title"><?php if(preg_match('#<h[0-6][^>]*>([^<]+)</h2>#i', $content, $regex)) { echo $regex[1]; } ?></p>
              <div class="boxed-description text-justify">
                <?php echo hook('cms_html', hook('decodeRouteImage', array(preg_replace('#<h[0-6][^>]*>[^<]+</h[0-6]>#i', '', $content), 'medium'))); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 boxed-flex-sm">
          <div class="boxed-content">
            <P class="boxed-number">2</P>
            <?php $content = (isset($meta['meta_x_3']) ? $meta['meta_x_3'] : ''); ?>
            <div class="boxed-wrapper bg-dark">
              <p class="boxed-title"><?php if(preg_match('#<h[0-6][^>]*>([^<]+)</h2>#i', $content, $regex)) { echo $regex[1]; } ?></p>
              <div class="boxed-description text-justify">
                <?php echo hook('cms_html', hook('decodeRouteImage', array(preg_replace('#<h[0-6][^>]*>[^<]+</h[0-6]>#i', '', $content), 'medium'))); ?>
				<p style="text-align: center;"><img alt="Tiny image map" src="<?php echo hook('path_root'); ?>static/images/tiny-map.png" /></p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 boxed-flex-sm">
          <div class="boxed-content">
            <P class="boxed-number">3</P>
            <?php $content = (isset($meta['meta_x_4']) ? $meta['meta_x_4'] : ''); ?>
            <div class="boxed-wrapper bg-dark">
              <p class="boxed-title"><?php if(preg_match('#<h[0-6][^>]*>([^<]+)</h2>#i', $content, $regex)) { echo $regex[1]; } ?></p>
              <div class="boxed-description text-justify">
                <?php echo hook('cms_html', hook('decodeRouteImage', array(preg_replace('#<h[0-6][^>]*>[^<]+</h[0-6]>#i', '', $content), 'medium'))); ?>
              </div>
            </div>
          </div>
        </div>
      </div><!-- ./row -->

      <?php if(isset($_GET['debug'])) { ?>
      <div class="row boxed-flex-sm gap-bottom-normal">
        <div class="col-md-4 boxed-flex-sm">
          <div class="boxed-content small-gap">
            <div class="boxed-wrapper bg-red">
              <p class="boxed-description text-left">Nous déterminons <strong>vos attentes</strong> à partir de <strong>votre vécu professionnel, de votre situation actuelle et de vos aspirations personnelles</strong>:</p>
              <p class="boxed-description-minor">La culture et le projet d'entreprise,</p>
              <p class="boxed-description-minor">Les conditions de travail,</p>
              <p class="boxed-description-minor">Le management et la</p>
              <p class="boxed-description text-left">communication,</p>
              <p class="boxed-description-minor">Le développement des</p>
              <p class="boxed-description-minor">compétences professionnelles,</p>
              <p class="boxed-description-minor">La rémunération,</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 boxed-flex-sm">
          <div class="boxed-content small-gap">
            <div class="boxed-wrapper bg-dark">
              <p class="boxed-top-title">Passez votre CV dans la</p>

              <div class="boxed-bg-image">
                <img src="static/images/resume-drop.jpg" class="cimagex" alt="resume drop" />
              </div>

              <img src="static/images/mark-jobx.png" class="boxed-top-mark" alt="resume drop" />

              <p class="boxed-bottom-description bg-red">L'<span>algorithme de matching</span> analyse votre CV afin de vous proposer l'offre d'emploi qui vous correspond le mieux.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 boxed-flex-sm">
          <div class="boxed-content small-gap">
            <div class="boxed-wrapper bg-red">
              <div class="abe-remun">
                <div class="abe-remun-title">Découvrez notre
                  <strong>étude de rémunérations</strong> par expertise métiers</div>
                <div class="abe-remun-content">
                  <div class="abe-input">
                    <i class="fa fa-suitcase fa-fw"></i>
                    <input type="text" name="" placeholder="Practice métiers" />
                  </div>
                  <div class="abe-input">
                    <i class="fa fa-user fa-fw"></i>
                    <input type="text" name="" placeholder="Intitulé du poste" />
                  </div>
                  <button>Rémunérations</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- ./row -->
    </div>
    <?php } ?>
  </div>