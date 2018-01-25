
  <div class="page-content bg-light-gray gap-top-header">
    
    <div class="container-fluid header-smh-bar">
      <div class="row smartsearch">
        <div class="col-sm-12">
          <div class="smarthome">
            <?php if(isset($_GET['debug'])) { ?>
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
                      <li>
                        <?php echo $practice->getNom(); ?>
                      </li>
                      <?php }} ?>
                  </ul>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row text-block-lg bg-dark-red">
        <span>Votre espace de recrutement dédié :</span>
      </div><!-- ./row -->
      
      <div class="row">
        <!-- My Smart Career -->
        <div class="col-md-6 gap-right-md gap-bottom-normal">
          <div class="banner-container">
            <div class="entete">
              <div class="flotaison-container">
                <div class="textOver text0">
                   mY Smart
                  <br />
                  <span class="subtitle">CAREER</span>
                </div>
                <div class="background-image">
                  <img src="static/images/career.jpg" class="cimagex" alt="banner" />
                </div>
              </div>
            </div>
          </div>

          <div class="text-block-md left-image bg-dark-red">
            <img src="static/images/horse-badge.png" alt="horse badge" />
            <span>Avantages Candidat</span>
          </div>
          
          <div class="row boxed-flex-md">
            <div class="col-md-6 gap-right-md-tiny boxed-flex-md">
              <p class="text-center text-block-details tb-details-small bg-dark"><span class="highlight">Confidentialité</span> de la candidature : accès personnalisé par un mot de passe à votre espace candidat</p>
            </div>
            
            <div class="col-md-6 gap-left-md-tiny boxed-flex-md">
              <p class="text-center text-block-details tb-details-small bg-dark"><span class="highlight">Simplicité</span> et gratuité de mY Smart Career</p>
            </div>
          </div><!-- ./row -->

          <div class="text-block-sm left-image-wide bg-dark-red">
            <img src="static/images/icon-horse.png" alt="horse icon" />
            <span>Rapidité des échanges :</span>
          </div>

          <p class="text-block-details bg-dark">
             <span class="highlight">Signature électronique</span> de documents administratifs (acceptation de la promesse d’embauche, contrats,…)
             <br><br>
             <span class="highlight">Planification de rendez-vous</span> en direct avec les entreprises qui recrutent
             <br><br><span class="highlight">Suivi de l’avancée de votre candidature</span> dans un process de recrutement
            Réponse aux offres d’emploi en un simple clic
            <br><br><span class="highlight">Sécurité de l’archivage des documents</span>
          </p>
          
          <div class="text-block-sm left-image bg-dark-red">
            <img src="static/images/icon-drawer.png" alt="drawer icon" />
            <span>Historique des échanges et des documents</span>
          </div>

          <p class="text-block-details bg-dark text-justify">
             <span class="highlight">Historique de votre partenariat</span> avec Ellen Scott Career dans l’accompagnement de votre recherche d’emploi (tableau de bord
            avec un visu sur l’ensemble des réponses aux offres d’emploi en cours, passées, l’accès à son dossier de candidature et documents)
          </p>
          
          <div class="text-block-sm left-image bg-dark-red">
            <img src="static/images/icon-document.png" alt="document icon" />
            <span>Gestion automatisée de votre candidature</span>
          </div>

          <p class="text-center text-block-details bg-dark">
             Réalisation de votre cv avec mY Smart Career selon une version professionnelle et exportable au format PDF
          </p>
          
        </div><!-- ./row -->
        
        <!-- My Smart Talent -->
        <div class="col-md-6 gap-left-md gap-bottom-normal">
          <div class="banner-container">
            <div class="entete">
              <div class="flotaison-container">
                <div class="textOver text0">
                   mY Smart
                  <br />
                  <span class="subtitle">TALENT</span>
                </div>
                <div class="background-image">
                  <img src="static/images/talent.jpg" class="cimagex" alt="banner" />
                </div>
              </div>
            </div>
          </div>

          <div class="text-block-md left-image bg-dark-red">
            <img src="static/images/horse-badge.png" alt="horse badge" />
            <span>Avantages Client</span>
          </div>
          
          <div class="row boxed-flex-md">
            <div class="col-md-6 gap-right-md-tiny boxed-flex-md">
              <p class="text-center text-block-details tb-details-small bg-dark">
                <span class="highlight">Confidentialité</span> de votre espace recruteur : accès personnalisé par un mot de passe à votre espace employeur</p>
            </div>
          
            <div class="col-md-6 gap-left-md-tiny boxed-flex-md">
              <p class="text-center text-block-details tb-details-small bg-dark">
                <span class="highlight">Simplicité</span>, praticité et gratuité de mY Smart Talent</p>
            </div>
          </div>
          <!-- ./row -->
          
          <div class="text-block-sm left-image-wide bg-dark-red">
            <img src="static/images/icon-horse.png" alt="horse icon" />
            <span>Rapidité des échanges :</span>
          </div>
          
          <p class="text-block-details bg-dark">
            <span class="highlight">Signature électronique</span> de documents administratifs (rédaction de la promesse d’embauche à destination des candidats retenus, contrats,…)
            <br>
            <br>
            <span class="highlight">Planification de rendez-vous</span> en direct avec les candidats ayant retenus votre attention
            <br>
            <br>
            <span class="highlight">Suivi de l’avancée du process de recrutement</span> : nombre de CV reçus, approchés, contactés, approchés par Ellen Scott Career, feedback des entretiens via Ellen Scott Career,
            accès aux notes de présentation des candidats présentés par Ellen Scott Career Envoi d’un message à Ellen Scott Career dans
            le cadre d’un process de recrutement, émettre un avis, un commentaire sur une candidature, planifier des rendez-vous avec
            les candidats à rencontrer,…
            <br>
            <br>
            <span class="highlight">Sécurité de l’archivage des documents</span>
          </p>
          
          <div class="text-block-sm left-image bg-dark-red">
            <img src="static/images/icon-drawer.png" alt="drawer icon" />
            <span>Historique des échanges et des documents</span>
          </div>
          
          <p class="text-block-details bg-dark text-justify">
            <span class="highlight">Historique du partenariat</span> avec Ellen Scott Career dans l’accompagnement de votre projet de recrutement (tableau de bord avec un visu sur l’ensemble
            des recrutements réalisés et en cours ; suivi des process, accès aux dossiers des candidats, notes de présentation, contrats,
            factures, etc. en ligne
          </p>
          
          <div class="text-block-sm left-image bg-dark-red">
            <img src="static/images/icon-document.png" alt="document icon" />
            <span>Gestion automatisée et visibilité d’ensemble sur votre projet de recrutement :</span>
          </div>
          
          <div class="row boxed-flex-md">
            <div class="col-md-6 gap-right-md-tiny boxed-flex-md">
              <p class="text-center text-block-details tb-details-small bg-dark">
                <span class="highlight">Alertes mail</span> à J-10 et J-2 dans la validation de la période d’essai (CDD et CDI) et à J-5 et J-2 pour les fins de contrats
                (CDD)</p>
            </div>
          
            <div class="col-md-6 gap-left-md-tiny boxed-flex-md">
              <p class="text-center text-block-details tb-details-small bg-dark">Rédaction du poste à pouvoir avec mY Smart Talent afin d’attirer les talents correspondants le mieux au profil recherché</p>
            </div>
          </div>
        </div>
      </div><!-- ./row -->

    </div>
  </div>