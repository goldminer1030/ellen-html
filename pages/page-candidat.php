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

  <div class="blog-topbar-links">
    <a href="">Je m'inscris</a>
    <a href="">Espace Candidat</a>
  </div>

  <div class="blog-page-content bg-white">
    <div class="container">
      <!-- Breadcrumb -->
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="#">Vous êtes ici</a>
        <a class="breadcrumb-item" href="#">Accueil</a>
        <span class="breadcrumb-item active">Candidat</span>
      </nav>

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

      <div class="row boxed-flex-sm boxed-numbers">
        <div class="col-md-4 boxed-flex-sm">
          <div class="boxed-content">
            <P class="boxed-number">1</P>
            <div class="boxed-wrapper bg-dark">
              <p class="boxed-title">Convictions d'Ellen Scott Career</p>
              <p class="boxed-description text-justify">La résultante de la <span class="highlight">performance d'un collaborateur</span> se trouve dans <strong>le plaisir et le sens que nous donnons au travail</strong>. C'est
              pour Ellen Scott Career un principe fondamental contribuant à la motivation et à l'implication des salariés. C'est pourquoi,
              <span class="highlight">nous prenons le temps de vous rencontrer et de travailler ensemble sur vos</span> réflexions et attentes profondes. Cette rencontre
              est un moment privilégié afin d'identifier ensemble <strong>les leviers qui donnent du sens à votre vie professionnelle</strong>.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 boxed-flex-sm">
          <div class="boxed-content">
            <P class="boxed-number">2</P>
            <div class="boxed-wrapper bg-dark">
              <p class="boxed-title">A chaque projet une solution spécifique</p>
              <p class="boxed-description text-justify">Que ce soit pour un projet à durée déterminée (<span class="highlight">CDD</span>) ou indeterminée (<span class="highlight">CDI</span>), nous serions ravis de vous accompagner dans la
              gestion de votre smart career partout en <span class="highlight">France</span>.</p>

              <div class="text-center">
                <img src="static/images/tiny-map.png" alt="tiny map" />
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 boxed-flex-sm">
          <div class="boxed-content">
            <P class="boxed-number">3</P>
            <div class="boxed-wrapper bg-dark">
              <p class="boxed-title">Ethique & Déontologie</p>
              <p class="boxed-description text-justify">Ellen Scott Career vous garantit toute <span class="highlight">confidentialité</span> dans votre démarche ainsi qu'une <span class="highlight">égalité de traitement et d'informations</span>
              entre les différents candidats:</p>

              <div class="dot-description">
                <p class="top-desc">Un engagement de confidentialité et de déontologie,</p>
                <p class="bottom-desc">Un respect de l'égalité des chances et de la diversité</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- ./row -->

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

              <p class="boxed-bottom-description bg-red">L'<span class="color-black">algorithme de matching</span> analyse votre CV afin de vous proposer l'offre d'emploi qui vous correspond le mieux.</p>
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
  </div>