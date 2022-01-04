@extends('layouts.app')
@section('title')
<title> WhiteBookDH </title>
@show
@section('content')
<div style="height: 85px;"></div>
<div class="d-flex  justify-content-center   flex-wrap scrool" >
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" >
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
                <div class=" d-flex flex-column justify-content-center  col-lg-11  " >
                    
                        <span class="text-secondary"><b>Données récoltées par les étudiants de Bordeaux Montaigne</b> </span>
                    <h1 class="baskerville text-primary"><b>Les masters Humanités Digitales dans le monde Anglo-Saxon </b> </h1>
                    <p>
                        L’analyse approfondie des curriculums proposés par les 27&nbsp;universités permet d’esquisser les contours d’un référentiel de compétences des Humanités digitales spécifiquement anglo-saxonnes. <br>Articulé autour de 7&nbsp;meta-compétences
                    </p>
                    <a href="/formations"
                        class="btn m-2 ronded-lg  d-flex justify-content-arround  shadow-sm zoom" style="width: 70%;">
                        
                        <svg class="mr-2 mt-1" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#2A3B5C' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
                        <span class="ml-2 m-1">En savoir plus sur les formations</span>
                    </a>
                    <a href="#premices"
                        class="btn m-2 ronded-lg  d-flex justify-content-arround  shadow-sm zoom" style="width: 70%;">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 4h2v5l-1-.75L9 9V4zm9 16H6V4h1v9l3-2.25L13 13V4h5v16z"/></svg>
                        <span class="ml-2 m-1">Comprendre le projet</span>
                    </a>
                    
                    
                </div>


            

            <div class=" d-flex align-items-center" style="height: 80vh">
                
                    <img src="/img/illu/illu-home.png" alt="" srcset="" style="max-width: 100%">
                
                
            </div>



        </div>
    </div>
    <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" id="premices" >
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            <div class="mt-5 d-flex align-items-center justify-content-center" style="height: 80vh" >
                <img src="/img/illu/projet.svg" alt="" srcset="" style="max-height: 350px">
            </div>

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary" ><b>Les prémices du projet </b> </h2>
                <p>
                    Issu d’une réflexion de plusieurs mois par les chercheurs du <a href="https://mica.u-bordeaux-montaigne.fr/">MICA </a>, le projet du livre blanc des Humanités Digitales dans le monde Anglo-Saxon a permis aux étudiants du Master 2  <a href="#">DNHD</a> de développer une cartographie des compétences proposées dans les formations d'universités situées aux États-Unis, Royaume-Uni, Irlande, Canada, Inde, Nouvelle-Zélande et Australie.
                    Durant 4 mois et à l’aide d’une multitude d’outils, les étudiants ont cherché, traité et analysé les données qui leur permettent aujourd’hui de vous présenter ce tour d’horizon du projet, via diverses représentations visuelles détaillées. 

                </p>            
             </div>
    
        </div>
    </div>
    <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" >
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            <div class="mt-5 d-flex align-items-center justify-content-center" style="height: 80vh">
                <img src="/img/illu/formations.svg" alt="" srcset="" style="max-height: 350px">
            </div>

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary"><b>Les formations et leur spécificités </b> </h2>
                <p>
                    Dans le monde Anglo-Saxon, nous avons recensé 27 formations du niveau Master avec 8 aux États-Unis, 6 au Royaume-Uni, 4 au Canada, 4 en Irlande du Nord, 3 en Australie, 1 en Nouvelle-Zélande et 1 en Inde. Ces formations peuvent varier en fonction de leur département de formation, des compétences enseignées que nous avons regroupées en 7 grandes catégories comme la recherche, les outils, les corpus, la culture, la data, les méthodes et l’éditorialisation.
                </p>            
            </div>

            
    
        </div>
    </div>
    <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" >
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            <div class="mt-5 d-flex align-items-center justify-content-center" style="height: 80vh">
                <img src="/img/illu/methodo.svg" alt="" srcset="" style="max-height: 350px">
            </div>

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary"><b>Méthodologie </b> </h2>
                <p>
                    Ce projet, et conséquemment sa méthodologie de travail, ont été divisés en deux étapes, une première partie avec tous les étudiants du Master et une deuxième avec un groupe plus restreint. 
                    Lors de la première partie, nous avons cherché à obtenir la base de donnée la plus pertinente possible. Nous avons retravaillé le sujet, son angle d’approche, ainsi que la base de données avec les enseignants, grâce à divers outils. Nous avons aussi établi nos premières idées pour le visuel final du site, ainsi qu’appris d’autres outils pour développer nos compétences dans plusieurs domaines tels que : webdesign, traitement de données, data visualisation, etc. La rédaction des contenus textuels s’est aussi faite avec tous les étudiants, afin que nos réalisations soient cohérentes malgré les possibles différences graphiques.
                    Ensuite, nous nous sommes séparés en groupe afin de réaliser deux sites, chacun ayant sa propre identité visuelle et ses choix d’outils spécifiques, ainsi qu’une méthodologie de travail propre à l’équipe, mais dont les contenus restent les mêmes. 

                </p>            
            </div>

            
    
        </div>
    </div>
    <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" >
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            <div class="mt-5 d-flex align-items-center justify-content-center" style="height: 80vh" >
                <img src="/img/illu/outils.svg" alt="" srcset="" style="max-height: 350px">
            </div>

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary"><b>Les outils </b> </h2>
                <p>
                    Nous avons utilisé une multitude d’outils durant la réalisation de ce projet afin d’exploiter au maximum notre base de données. La première version de cette base a été établie sur un Google Spreadsheet partagée entre tous les étudiants. Pour le traitement de certains aspects spécifiques, R à été utilisé, ainsi que Prepost SEO et SEO Rank, respectivement afin d’obtenir l’Alexa et le Moz Rank. Enfin, AirTable et <a href="https://hyperotlet.huma-num.fr/otletosphere/">Opensphère</a>  ont permis de créer la  <a href="https://dev.myllaume.fr/dhsphere/">DHsphère</a>. 
                    Dans notre groupe, nous avons aussi utilisé adobe XD pour le maquettage, adobe Illustrator pour les différents visuels, PHP Laravel pour la partie back du site web et les API, VueJs pour la partie front, ChartJS et Chartkick pour les datavisualisations.

                </p>            
            </div>

            
    
        </div>
    </div>
    <br>
    
    <br>
    
<!-- Footer -->
<footer class="text-center text-lg-start col-12 text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://github.com/LeoPaulD/WhiteBookDH/tree/main/public/data/db" class="me-4 text-reset">
            <i class="fas fa-database"></i>
      </a>
      <a href="/data/carnet/whitebook.pdf" class="me-4 text-reset">
        <i class="fas fa-file-invoice"></i>
      </a>
      <a href="mailto:dnhd2020-2022@googlegroups.com" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.linkedin.com/in/l%C3%A9o-paul-dubourg/" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://github.com/LeoPaulD/WhiteBookDH" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <a class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" href="https://www.u-bordeaux-montaigne.fr/fr/formations/offre-de-formation-2022-2026/master-XB/information-communication-et-mediation-des-sciences-SCINFO.9/master-communication-et-editorialisation-digitale-KQQRPEB6.html">
            <img src="img/logo/DNHD.jpeg" alt="" style="height: 60px">
        </a>
        <!-- Grid column -->

        <!-- Grid column -->
        <a class="col-md-2 col-lg-4 col-xl-2 mx-auto mb-4" href="https://www.u-bordeaux-montaigne.fr/fr/index.html">
            <img src="img/logo/ubm.png" alt="" style="height: 60px">
        </a>
        <!-- Grid column -->

        <!-- Grid column -->
        <a class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4" href="https://mica.u-bordeaux-montaigne.fr/">
            <img src="img/logo/mica.png" alt="" style="height: 60px">
        </a>
        <!-- Grid column -->

        
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  
  <div class="text-center  ">
    © 2022 :
    <a class="text-reset fw-bold" href="https://www.u-bordeaux-montaigne.fr/fr/index.html">Université Bordeaux-Montaigne</a>
  </div>
  
</footer>
<!-- Footer -->
</div>

@endsection