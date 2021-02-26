
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/sass/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>GLOBAL RENOV - ACCUEIL</title>
</head>

<body>
    <div class="container">
        <h1 class="title">
            Etes vous bien interesse par un 
            projet de pompe a chaleur ?   
        </h1> 
           
        <header class="header">
            <div class="header__text">
                <img class="header__text__image" src="./assets/images/img1.jpeg" alt="image de 
                pompe à chaleur"> 
                <ul>
                    <li><i class="fas fa-check-circle"></i><p>Plus de 70% d’économies sur vos factures d’électricité</p></li>
                    <li><i class="fas fa-check-circle"></i><p>Profitez des primes d’états estimées à 80 % du prix d’installation</p></li>
                    <li><i class="fas fa-check-circle"></i><p> Bénéficiez d’expert RGE pour l’installation</p></li>
                    <li><i class="fas fa-check-circle"></i> <p>Aucune démarche administrative</p></li>
                    <li><i class="fas fa-check-circle"></i> <p>Adoptez une solution d’énergie propre et renouvelable</p></li>
                    <li><i class="fas fa-check-circle"></i><p> Accompagnement tout au long des procédures</p></li>
                </ul> <br> 
            </div>     

            <div class="formulaire" id="formulaire">                  
                <div class="container-form">
                    <h2 class="">Formulaire</h2>
      
                    <div class="progress-bar">
                        <div class="step"><p></p>
                            <div class="bullet"><span>1</span></div>
                            <div class="check fas fa-check"> </div>
                        </div>
                    
                        <div class="step"><p></p>
                            <div class="bullet"><span>2</span></div> 
                            <div class="check fas fa-check"></div>
                        </div>
                    
                        <div class="step"><p></p>
                            <div class="bullet"><span>3</span></div>
                            <div class="check fas fa-check"></div>
                        </div>
          
                        <div class="step"><p></p>
                            <div class="bullet"><span>4</span></div>
                            <div class="check fas fa-check"></div>
                        </div>
                    </div>

              <div class="form-outer">
              <form action="form.php" method="POST">
                  <div class="page slide-page">
                <h3>Vérifiez votre éligibilité</h3>
                      
                  <div class="field">
                      <label for="titre">Vous êtes:  
                          <select name="titre" id="">
                              <option value="propriétaire">Propriétaire</option>
                              <option value="locataire">Locataire</option>
                          </select> 
                        </label>
                  </div><br>
      
                  <div class="field btn">
                    <button class="firstNext next">Suivant</button>
                  </div>
                  </div>
         
                  <div class="page">
                  <h3>Informations sur l'habitation</h3>
                  <div class="field">
                      <label for="type">Type d'habitation
                          <select name="habitation" id="">
                              <option value="maison">Maison</option>
                              <option value="appartement">Appartement</option>
                              <option value="autre-type">Autre</option>
                          </select>
                      </label>
                  </div>
      
                  <div class="field">
                      <label for="type">Type de chauffage
                          <select name="chauffage" id="chauffage">
                              <option value="maison">Fioul</option>
                              <option value="appartement">Gaz</option>
                              <option value="autre-type">Autre</option>
                          </select>
                      </label>
                  </div> <br>
                  <div class="field btns">
                    <button class="prev-1 prev">Précédent</button>
                    <button class="next-1 next">Suivant</button>
                  </div>
                  </div>
      
                  <div class="page">
                  <h3>Informations personnelles</h3>
                  <div class="field">
                      <label for="prénom"><input type="text" placeholder="Prénom"></label> 
                       <label for="nom"><input type="text" placeholder="Nom"></label>
                  </div>
      
                  <div class="field">
                      <label for="telephone">
                          <input type="number" placeholder="telephone">
                      </label>
                  </div>
      
                  <div class="field">
                      <label for="email" class="email">
                         <input type="text" class="e" placeholder="Email">
                      </label>
                  </div>
                     
                  <div class="field btns">
                    <button class="prev-2 prev">PRECEDENT</button>
                    <button class="next-2 next">SUIVANT</button>
                  </div>
                  </div>
              
                  <div class="page">
                    <h3>Informations complémentaires</h3>
                  <div class="field">
                      <label for="region" class="region"> </label>
                          <input type="text" class="" placeholder="Région">  
                  </div>
      
                  <div class="field">
                      <label for="code_postal" class="code_postal">
                          <input type="code_postal" class="" placeholder="Code postal">
                      </label>
                  </div>
      
                  <div class="field">
                      <label for="ville" class="ville">
                          <input type="text" class="" placeholder="Ville">
                      </label>
                      </div>
      
                   <div class="field btns">
                    <button class="prev-3 prev">PRECEDENT</button>
                    <button class="submit">SOUMETTRE</button>
                  </div>
                  </div>
              </form>
              </div>
         
                </div>
            </div>
        </header>

        <div class="slider">
            <div class="slider__section">
                <h3>AIDES FINANCIÈRES 2020</h3>
                <p> Des aides allant <p class="important"> jusqu’à 10 500 € </p>
                <p>grâce à Maprimerenov’ et aux certificats 
                    d’économie d’énergies (CEE).</p>
                    <i class="fas fa-hands-helping"></i>  
           </div>
           
           <div class="slider__section">          
                <h3> ÉCONOMIES D’ÉNERGIE</h3>
                <p> Réalisez <p class="important">75% d’économies </p> <p> facture 
                    de gaz, fioul et éléctricité.</p>
                <i class="fas fa-euro-sign"></i>
            </div>

            <div class="slider__section">          
                <h3>CLASSE ÉNERGÉTIQUE A+</h3>
                <p>En installant une pompe à chaleur, votre maison
                     gagne en classe énergétique et <p class="important">prend de la valeur.</p></p>
                <i class="fas fa-bolt"></i>
            </div>
        </div>

        <div class="content">    
            <div class="content__text">        
                <h2 class="content__text__title">Étapes</h2> 
                
                <h3> Quelles sont les étapes à suivre pour remplacer sa chaudière
                    par une pompe à chaleur ? </h3>

                    <ol>
                        <li>Remplir le formulaire d’éligibilité</li>
                        <li>Vérification de l’éligibilité</li>
                        <li>Prise de rdv pour l’installation</li>
                        <li>Installation de votre pompe à chaleur</li>
                    </ol>  
                    
                    <a href="#formulaire">
                        <button class="link-btn">
                            Remplir le formulaire
                        </button>
                    </a>
            </div>

            <img src="./assets/images/img2.jpeg" alt="image de pompe à chaleur">
        </div>


        <main class="main">
            <div class="main__box">
                    <h3> Pourquoi installer ue pompe à chaleur ?</h3>
                    <p>
                        Le principe d’une pompe à chaleur est de récupérer les calories présentes
                    dans l’air extérieur ou encore dans le sol pour la transformer en air chaud 
                    qui réchauffera l’atmosphère à l’intérieur de la maison.
                    Ce système permet de <p class="important">réaliser des économies d’énergie </p> <br>
    
                    <ul>
                    <li>
                        <i class="fas fa-arrow-right"></i>
                        Vous diminuez vos factures d'énergie de 70%</li>
                    <li>
                        <i class="fas fa-arrow-right"></i>
                        Votre maison prend de la valeur à la revente ainsi qu'en classe énergétique</li>
                    <li>
                        <i class="fas fa-arrow-right"></i>
                        Vous divisez par 4 votre facture d'eau chaude sanitaire</li>
                    <li>
                        <i class="fas fa-arrow-right"></i>
                         Vous réalisez un acte écologique pour la planète</li>
                    </ul>
                </p>         
            </div>
    
            <div class="main__box">
                    <h3> Comment ça marche ?</h3>
                    <p>
                    Nous sommes là pour vous aider pour procéder à l’installation de votre pompe à chaleur. 
                    Notre équipe vous accompagne dès l’inscription sur notre site à l’installation de votre pompe à chaleur.
                    Nous vous accompagnons également dans vos démarches pour l’obtention de vos subventions.</p>
                     <br> 
                        <p>
                    Notre objectif est d’améliorer la performance énergétique des logements des ménages 
                    français et de réduire significativement leur facture d’énergie.

            </div>
    
            <div class="main__box">
                    <h3>Quelles sont les aides ?</h3>
                    <p> Le coup de pouce de CEE permet aux ménages français de <p class="important">récupérer une aide auprès des fournisseurs
                    d’énergies de 5500€.</p><p> coup de pouce du Chèque Energie permet de bénéficier d’un chèque pour 
                    la récupération et la destruction de votre chaudière actuelle.
                    </p>
                
                    <img src="./assets/images/img3.jpg">
            </div>
        </main>

        <div class="testimonies">
            <h3 class="content__testimonies__title">
                94% de nos clients
                sont satisfaits
            </h3>
            
            <div class="testimonies__boxes">
                <section>                
                    <p>Le personnel GLOBAL RENOV est de très bon conseil, le suivi du dossier a été impeccable et les délais
                    pour la réalisation des travaux sont brefs. Ma pompe à chaleur fonctionne parfaitement.
                   Très satisfaite, merci encore. <br> <p></p>
               
                    
                    <ul class="stars">
                        <li<i class="fas fa-star" style="color:#2E669A"></i></li>
                        <li<i class="fas fa-star"></i></li>
                        <li<i class="fas fa-star"></i></li>
                        <li<i class="fas fa-star"></i></li>
                        <li<i class="fas fa-star"></i></li>
                       
                    </ul>
                    <p class="comment">Muriel Ribeiro</p>
                   <p> novembre 2020</p>
                    </p>
                </section>

                <section>                
                    <p>Je recommande. Société sérieuse et à l’écoute. Intervention très propre, 
                        merci encore ma pompe à chaleur fonctionne à merveille.
                    </p>
                    <ul class="stars">
                        <li<i class="fas fa-star" style="color:#2E669A"></i></li>
                        <li<i class="fas fa-star"></i></li>
                        <li<i class="fas fa-star"></i></li>
                        <li<i class="fas fa-star"></i></li>
                        <li<i class="fas fa-star"></i></li>
                        
                    </ul>
                    <p class="comment">Michel Dumas </p> 
                 <p>19 décembre 2020  </p>                
                </section>

                <section>                
                    <p>Merci pour votre intervention. Ma pompe à chaleur réchauffe parfaitement
                         l’intérieur de ma maison. Service réactif et de qualité. Je recommande
                          les yeux fermés !
                    </p>
                    <ul class="stars">
                        <li<i class="fas fa-star" style="color:#2E669A"></i></li>
                        <li<i class="fas fa-star"></i></li>
                        <li<i class="fas fa-star"></i></li>
                        <li<i class="fas fa-star"></i></li>
                        <li<i class="fas fa-star"></i></li>                         
                    </ul>

                    <p class="comment">Dominique Freiss</p>
                    <p>2 janvier 2021</p>          
                </section>
            </div>
        </div>

        <footer class="footer">
            <p class="footer__text">
                Global Renov ©️2020  Tous droits réservés
            </p>

            <div class="footer__disclaimer">
                 <a href="mentions.php">Mentions légales</a>
            </div>
        </footer>
    
    </div>
    <script src="assets/js/script.js"></script>
</body>