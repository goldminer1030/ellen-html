  <div class="header-title-container">
		<div class="entete">
			<div class="flotaison-container">
				<div class="textOver text0">
          executive <br />
					<span class="subtitle">Career</span>
				</div>
				<div class="background-image">
					<img src="static/images/practice.jpg" class="cimagex" alt="header title"/>
				</div>
			</div>
		</div>
  </div>

  <div class="blog-page-content bg-dark">
    <div class="container gap-top-small gap-bottom-small">

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
                    <a href="">Nos offres par practice <i class="fa fa-angle-down fa-fw"></i></a>
                  </div>
                  <div class="smh-search-right">
                    <a href="">Je m'inscris</a>
                    <a href="">Espace Candidat</a>
                    <a href="">Espace Client</a>
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
                    <li><?php echo $practice->getNom(); ?></li>
                    <?php }} ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
		  </div><!-- ./row -->

    </div>

    <div class="tab top-tab top-active" id="top-active" data-active="2">
      <ul class="boxed-flex-sm">
        <li>
          <a href="#tab-top-top-active-1">
            <span class="text-capitalize">Executive Career</span>
          </a>
        </li>
        <li>
          <a href="#tab-top-top-active-2">
            <span class="text-capitalize">Nos offres</span>
          </a>
        </li>
        <li>
          <a href="#tab-top-top-active-3">
            <span class="text-capitalize">Rémunérations</span>
          </a>
        </li>
      </ul>
    
      <div id="tab-top-top-active-1">
        <p class="practice-title gap-left-md-big">Les jobs à la une</p>
        
        <div class="row cards">
          <div class="col-xs-6 col-sm-4 col-md-2 card card-sm bg-light-gray">
            <p class="card-content">CM Chargé(e) de communication</p>
            <a class="card-link" href="">STAGE</a>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-2 card card-sm bg-white">
            <p class="card-content">Chargé(e) de communication et développement</p>
            <a class="card-link" href="">CDI</a>
          </div>
          <div class="col-xs-6 col-xs-push-6 col-sm-4 col-sm-push-0 col-md-2 card card-sm bg-light-gray">
            <p class="card-content">CM Chargé(e) de communication</p>
            <a class="card-link" href="">STAGE</a>
          </div>
          <div class="col-xs-6 col-xs-pull-6 col-sm-4 col-sm-pull-0 col-md-2 card card-sm bg-white">
            <p class="card-content">CM Chargé(e) de communication</p>
            <a class="card-link" href="">STAGE</a>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-2 card card-sm bg-light-gray">
            <p class="card-content">CM Chargé(e) de communication</p>
            <a class="card-link" href="">STAGE</a>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-2 card card-sm bg-white">
            <p class="card-content">CM Chargé(e) de communication</p>
            <a class="card-link" href="">STAGE</a>
          </div>
          
          <div class="col-xs-6 col-sm-4 col-md-2 card card-sm bg-white">
            <p class="card-content">CM Chargé(e) de communication</p>
            <a class="card-link" href="">STAGE</a>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-2 card card-sm bg-light-gray">
            <p class="card-content">CM Chargé(e) de communication</p>
            <a class="card-link" href="">STAGE</a>
          </div>
          <div class="col-xs-6 col-xs-push-6 col-sm-4 col-sm-push-0 col-md-2 card card-sm bg-white">
            <p class="card-content">CM Chargé(e) de communication</p>
            <a class="card-link" href="">STAGE</a>
          </div>
          <div class="col-xs-6 col-xs-pull-6 col-sm-4 col-sm-pull-0 col-md-2 card card-sm bg-light-gray">
            <p class="card-content">CM Chargé(e) de communication</p>
            <a class="card-link" href="">STAGE</a>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-2 card card-sm bg-white">
            <p class="card-content">CM Chargé(e) de communication</p>
            <a class="card-link" href="">STAGE</a>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-2 card card-sm bg-light-gray">
            <p class="card-content">CM Chargé(e) de communication</p>
            <a class="card-link" href="">STAGE</a>
          </div>
        </div><!-- ./row -->

        <p class="practice-title gap-top-small gap-bottom-small gap-left-md-big">Notre expertise métier</p>

        <div class="row">
          <div class="col-md-4 text-right gap-bottom-small">
            <div class="business">
              <p class="business-title gap-top-small gap-bottom-lg">Les métiers en
                <br />
                <span class="subtitle"><span class="highlight-pink">Executive</span> Career</span>
              </p>
              <div class="business-image">
                <img src="static/images/executive.jpg" class="cimagex" alt="business expertise" />
              </div>
            </div>
          </div>

          <div class="col-md-4 gap-md-big gap-bottom-small">
            <p class="ellen-executive gap-bottom-normal">Ellen Scott Executive Career - accompagne le recrutement de cadres dirigeants, membres de comité de direction dans les fonctions
            suivantes :</p>
            <ul class="executive-lists">
              <li>Board Level</li>
              <li>Direction Générale & Opérationnelle</li>
              <li>CFO & Finance</li>
              <li>CIO & IT</li>
              <li>Ressources Humaines</li>
              <li>Legal</li>
              <li>Marketing & Communication</li>
              <li>Affaires réglementaires</li>
              <li>Production, Achats & Supply Chain</li>
              <li>Ventes</li>
            </ul>
          </div>

          <div class="col-md-4 gap-left-md-big gap-bottom-small">
            <div class="boxDynMenuContainer">
              <div class="boxDynMenu">
                <div>
                  <div class="ecd-pink-bg">Nous confier un besoin en recrutement</div>
                  <div class="ecd-gray-bg">Nous confier votre carrière</div>
                </div>
                <div>
                  <div class="ecd-gray-bg">La lettre d’Ellen</div>
                  <div class="ecd-black-bg">Nous contacter</div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- ./row -->
        
      </div>
      <div id="tab-top-top-active-2">

        <div class="container">
          <!-- Breadcrumb -->
          <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Vous êtes ici</a>
            <a class="breadcrumb-item" href="#">Accueil</a>
            <a class="breadcrumb-item" href="#">Opportunities</a>
            <a class="breadcrumb-item" href="#">Finance Career</a>
            <span class="breadcrumb-item active">Offres</span>
          </nav>

          <p class="practice-title gap-left-md-big gap-bottom-normal"><span class="highlight-orchid">X</span> offres d’emploi</p>

          <div class="row">
            <div class="col-md-4 offres-filter-container gap-bottom-small">
              <p class="offres-header">Filtres</p>
              <div class="accordion">
                <h3>Ville/arrondissement</h3>
                <div>
                  <p>Nam tortor mi, vehicula nec odio non, commodo vestibulum mauris? Mauris sem erat, iaculis ac lacus vel, placerat volutpat
                    ipsum. Nullam interdum justo nisi, a fermentum nisl posuere eu. Maecenas nunc ipsum, varius in ipsum ac, viverra cursus
                    urna. Donec in ipsum eleifend nisi imperdiet ultrices vitae molestie dui.</p>
                </div>
                <h3>Secteur sous secteur</h3>
                <div>
                  <p>Nam tortor mi, vehicula nec odio non, commodo vestibulum mauris? Mauris sem erat, iaculis ac lacus vel, placerat volutpat
                    ipsum. Nullam interdum justo nisi, a fermentum nisl posuere eu. Maecenas nunc ipsum, varius in ipsum ac, viverra cursus
                    urna. Donec in ipsum eleifend nisi imperdiet ultrices vitae molestie dui.</p>
                </div>
                <h3>Niveau d’expérience</h3>
                <div>
                  <p>Nam tortor mi, vehicula nec odio non, commodo vestibulum mauris? Mauris sem erat, iaculis ac lacus vel, placerat volutpat
                    ipsum. Nullam interdum justo nisi, a fermentum nisl posuere eu. Maecenas nunc ipsum, varius in ipsum ac, viverra cursus
                    urna. Donec in ipsum eleifend nisi imperdiet ultrices vitae molestie dui.</p>
                </div>
                <h3>Salaire annule minsouhaité</h3>
                <div>
                  <p>Nam tortor mi, vehicula nec odio non, commodo vestibulum mauris? Mauris sem erat, iaculis ac lacus vel, placerat volutpat
                    ipsum. Nullam interdum justo nisi, a fermentum nisl posuere eu. Maecenas nunc ipsum, varius in ipsum ac, viverra cursus
                    urna. Donec in ipsum eleifend nisi imperdiet ultrices vitae molestie dui.</p>
                </div>
                <h3>État (active/pourvue)</h3>
                <div>
                  <p>Nam tortor mi, vehicula nec odio non, commodo vestibulum mauris? Mauris sem erat, iaculis ac lacus vel, placerat volutpat
                    ipsum. Nullam interdum justo nisi, a fermentum nisl posuere eu. Maecenas nunc ipsum, varius in ipsum ac, viverra cursus
                    urna. Donec in ipsum eleifend nisi imperdiet ultrices vitae molestie dui.</p>
                </div>
                <h3>Durée de travail</h3>
                <div>
                  <p>Nam tortor mi, vehicula nec odio non, commodo vestibulum mauris? Mauris sem erat, iaculis ac lacus vel, placerat volutpat
                    ipsum. Nullam interdum justo nisi, a fermentum nisl posuere eu. Maecenas nunc ipsum, varius in ipsum ac, viverra cursus
                    urna. Donec in ipsum eleifend nisi imperdiet ultrices vitae molestie dui.</p>
                </div>
                <h3>Possibilité d’aménagement du poste de travail</h3>
                <div>
                  <p>Nam tortor mi, vehicula nec odio non, commodo vestibulum mauris? Mauris sem erat, iaculis ac lacus vel, placerat volutpat
                    ipsum. Nullam interdum justo nisi, a fermentum nisl posuere eu. Maecenas nunc ipsum, varius in ipsum ac, viverra cursus
                    urna. Donec in ipsum eleifend nisi imperdiet ultrices vitae molestie dui.</p>
                </div>
              </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7 gap-bottom-small">
              <!-- Offer 1 -->
              <div class="clearfix offer-container">
                <div class="offer-header">
                  <span>Intitulé offre d’emploi H/F</span>
                  <a class="offer-share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                </div>
                <div class="offer-body">
                  <div class="offer-detail">
                    <span><img src="static/images/offer-location.png" alt="offer location" />Lieu</span>                    
                    <span><img src="static/images/offer-time.png" alt="offer time" />Type de contrat</span>                    
                    <span><img src="static/images/offer-salary.png" alt="offer salary" />Salaire</span>                    
                  </div>
                  <p class="offer-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet, felis vitae aliquet egestas, orci sapien tincidunt
                  nunc, non dapibus urna massa non lectus. Praesent sit amet tellus risus. Aenean at maximus dui. Vivamus ac auctor felis.
                  Etiam at nulla sed leo porttitor viverra. Suspendisse ut arcu eget urna feugiat fermentum et at tellus. Pellentesque scelerisque
                  mauris eget velit semper ultrices. Nulla gravida urna non libero aliquet varius.</p>
                  <div class="clearfix offer-footer">
                    <a class="offer-save"><i class="fa fa-heart-o" aria-hidden="true"></i>Sauvegarder</a>
                    <a class="to-consult"><img src="static/images/offer-consult.png" alt="offer consult" />Consulter</a>
                    <a class="offer-apply"><img src="static/images/offer-apply.png" alt="offer apply" />Postuler</a>
                  </div>
                </div>
              </div>

              <!-- Offer 2 -->
              <div class="clearfix offer-container">
                <div class="offer-header">
                  <span>Intitulé offre d’emploi H/F</span>
                  <a class="offer-share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                </div>
                <div class="offer-body">
                  <div class="offer-detail">
                    <span><img src="static/images/offer-location.png" alt="offer location" />Lieu</span>                    
                    <span><img src="static/images/offer-time.png" alt="offer time" />Type de contrat</span>                    
                    <span><img src="static/images/offer-salary.png" alt="offer salary" />Salaire</span>                    
                  </div>
                  <p class="offer-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet, felis vitae aliquet egestas, orci sapien tincidunt
                  nunc, non dapibus urna massa non lectus. Praesent sit amet tellus risus. Aenean at maximus dui. Vivamus ac auctor felis.
                  Etiam at nulla sed leo porttitor viverra. Suspendisse ut arcu eget urna feugiat fermentum et at tellus. Pellentesque scelerisque
                  mauris eget velit semper ultrices. Nulla gravida urna non libero aliquet varius.</p>
                  <div class="clearfix offer-footer">
                    <a class="offer-save"><i class="fa fa-heart-o" aria-hidden="true"></i>Sauvegarder</a>
                    <a class="to-consult"><img src="static/images/offer-consult.png" alt="offer consult" />Consulter</a>
                    <a class="offer-apply"><img src="static/images/offer-apply.png" alt="offer apply" />Postuler</a>
                  </div>
                </div>
              </div>

              <!-- Offer 3 -->
              <div class="clearfix offer-container">
                <div class="offer-header">
                  <span>Intitulé offre d’emploi H/F</span>
                  <a class="offer-share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                </div>
                <div class="offer-body">
                  <div class="offer-detail">
                    <span><img src="static/images/offer-location.png" alt="offer location" />Lieu</span>                    
                    <span><img src="static/images/offer-time.png" alt="offer time" />Type de contrat</span>                    
                    <span><img src="static/images/offer-salary.png" alt="offer salary" />Salaire</span>                    
                  </div>
                  <p class="offer-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet, felis vitae aliquet egestas, orci sapien tincidunt
                  nunc, non dapibus urna massa non lectus. Praesent sit amet tellus risus. Aenean at maximus dui. Vivamus ac auctor felis.
                  Etiam at nulla sed leo porttitor viverra. Suspendisse ut arcu eget urna feugiat fermentum et at tellus. Pellentesque scelerisque
                  mauris eget velit semper ultrices. Nulla gravida urna non libero aliquet varius.</p>
                  <div class="clearfix offer-footer">
                    <a class="offer-save"><i class="fa fa-heart" aria-hidden="true"></i>Sauvegarder</a>
                    <a class="to-consult"><img src="static/images/offer-consult.png" alt="offer consult" />Consulter</a>
                    <a class="offer-apply"><img src="static/images/offer-apply.png" alt="offer apply" />Postuler</a>
                  </div>
                </div>
              </div>

              <div class="text-center gap-top-normal">
                <a class="more-offers">Plus d’offres<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
              </div>
            </div>
          </div><!-- ./row -->
          
        </div>
      </div>
      <div id="tab-top-top-active-3">
        <div class="container">
          <p class="practice-title">Rémunération annuelle brute en K€</p>

          <div class="row">
            <div class="col-md-7 gap-bottom-normal">
              <p class="remuneration-details">Consultez notre étude sur les tendances du marché de l’emploi sur les rémunérations par métier. Il s’agit des tendances actuelles
              à pondérer selon la structure des entreprises, la dynamique liée à chaque secteur d’activité et la conjoncture économique.
              Les rémunérations présentées sont exprimées en milliers d’euros (k€) et correspondent au brut annuel fixe avec le cas échéant
              une annotation concernant la partie variable et les éventuels avantages en nature. Ellen Scott Career travaille en conformité
              avec les règles de déontologie de notre profession et les dispositions légales en matière de traitement des données personnelles
              des candidats, afin de prévenir tout risque de discrimination. Les différents intitulés de poste, descriptifs sont écrits
              au masculin pour faciliter la lecture du document mais ces concernent aussi bien des femmes que des hommes. Les rémunérations
              présentées sont exprimées en milliers d’euros (k€) et correspondent au brut annuel fixe (avec le cas échéant une annotation
              concernant la partie variable et les éventuels avantages en nature) pour des postes situés en région parisienne. Il faut
              tenir compte d’une variation moyenne de rémunération entre l’Île-de-France et l’ensemble des régions en France :</p>
            </div>
            <div class="col-md-5 text-center gap-bottom-normal">
              <img src="static/images/remuneration-map.png" alt="remuneration map" />
            </div>
          </div>

          <p class="remuneration-table-title">GESTION & TRAITMENT DE LINFORMATION</p>
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead class="thead-primary">
                <tr>
                  <th class="bg-pink color-white">POSTE</th>
                  <th class="bg-dark color-white text-center">0 a 2 ans</th>
                  <th class="bg-dark color-white text-center">2 a 5 ans</th>
                  <th class="bg-dark color-white text-center">5 a 15 ans</th>
                  <th class="bg-dark color-white text-center">5 a 10 ans</th>
                  <th class="bg-dark color-white text-center">10 a 15 ans</th>
                  <th class="bg-dark color-white text-center">15 ans et+</th>
                  <th class="bg-dark color-white text-center">Part variable</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Archiviste</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">10 a 15%</td>
                </tr>
                <tr>
                  <td>Documentaliste</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">10 a 15%</td>
                </tr>
                <tr>
                  <td>Archiviste Cloud</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">10 a 15%</td>
                </tr>
                <tr>
                  <td>Document Controller</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">10 a 15%</td>
                </tr>
                <tr>
                  <td>Records Manager</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">10 a 15%</td>
                </tr>
                <tr>
                  <td>Traducteur</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">18 - 22</td>
                  <td class="text-center">21 - 26</td>
                  <td class="text-center">25 - 30</td>
                  <td class="text-center">10 a 15%</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="text-right boxDynMenuContainer">
            <div class="boxDynMenu">
              <div>
                <div class="ecd-pink-bg">Nous confier un besoin en recrutement</div>
                <div class="ecd-gray-bg">Nous confier votre carrière</div>
              </div>
              <div>
                <div class="ecd-gray-bg">La lettre d’Ellen</div>
                <div class="ecd-black-bg">Nous contacter</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  