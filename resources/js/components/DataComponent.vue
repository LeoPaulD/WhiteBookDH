<template>

  
    <div class="d-flex  justify-content-center   flex-wrap scrool" >
    
    
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" id="premices" >
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            <div class="mt-5 d-flex align-items-center justify-content-center" style="height: 80vh;" >
                <img src="/img/illu/data.svg" alt="" srcset="" style="max-height: 320px">
            </div>

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-primary" ><b>En savoir plus sur les masters Humanités Digitales </b> </h2>
                <p>
                    Afin de représenter au mieux la base de données qui a servi à élaborer notre étude, nous avons utilisé diverses data visualisation grâce au librairies vue-chartikick et vue-chartjs. Vous trouverez donc ci-dessous plusieurs représentations visuelles interactives permettant une compréhension globale des formations en Humanites Digitales dans le monde Anglo-Saxon. Le système utilisé permet une pérennité des visualisations et une mise à jour automatique dès que la base de données est modifiée ou enrichie.
                </p>            
             </div>
    
        </div>
    </div>
    <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" >
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary"><b>HORIZON DES FORMATIONS : </b> </h2>
                <p>
                    Dans le monde Anglo-Saxon, nous avons recensé 27 formations, dont 8 aux États-Unis, 6 au Royaume-Uni, 4 au Canada, 4 en Irlande du Nord, 3 en Australie, 1 en Nouvelle-Zélande et 1 en Inde.
                    Dans notre recherche, nous nous sommes restreints au monde Anglo-Saxon afin de pouvoir ensuite comparer ce projet de Livre Blanc à son édition précédente. Nous avons aussi trié afin de n'avoir que des formations de niveau Master ou équivalent dans les différents pays.

                </p>   
                
            </div>
            
            <div class="mt-5  d-flex align-items-center justify-content-center" style="height: 80vh" >
                <geo-chart class="m" :legend="true" :data="worlds"  xtitle="Nombre de master par pays" :download="true"  colors="#D9B391"></geo-chart>
            </div>

            
    
        </div>
    </div>
    <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" >
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary"><b>DES FORMATIONS AUX APPROCHES HOMOGÈNES : </b> </h2>
                <p>
                    En analysant les noms des différentes matières proposées dans chaque université, nous pouvons voir distinctement que certains sujets d'études se démarquent, peu importe le pays ou le nom donné au Master. Ainsi, des thèmes tels que
                    digital, humanities, research ou information, history sont unanimements enseignés à travers le monde. 

                </p>            
            </div>

             <div class="mt-5 m-2 d-flex align-items-center justify-content-center" style="height: 80vh">
                <vue-word-cloud :words="[['digital' ,131],['humanities',92],['research',67], ['information', 44], ['history', 32], ['media', 30], ['methods', 30], ['introduction', 29], ['project', 27],['design',25], ['studies',25], ['data', 24], ['social', 21], ['public', 20],['management', 19],['theories',19],['heritage',18], ['theory',18],['analysis',15],['literature',15],['programming',15]]"
          :color="([, weight]) => weight > 10 ? 'primary' : weight > 5 ? 'RoyalBlue' : 'Indigo'"
          font-family="Noto Sans" /> 
            </div>

             <!--  digital (131); humanities (92); research (67); information (44); history (32); media (30); methods (30); introduction (29); project (27); design (25); studies (25); data (24); social (21); public (20); culture (19); management (19); theories (19); heritage (18); theory (18); analysis (15); literature (15); programming (15); seminar (15); art (13); technologies (13); writing (13); advanced (12); development (12); language (12); practices (12); science (12); study (12); thesis (12); cultural (11); practice (11)
            -->
        </div>
    </div>
    <!-- <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" style="height: 80vh">
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            <div class="mt-5 d-flex align-items-center justify-content-center" >
                <BubbleChart  />
            </div>

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary"><b>UNIVERSITÉS ET NOTORIÉTÉ WEB : </b> </h2>
                <p>
                    Nous avons utilisé une multitude d’outils durant la réalisation de ce projet afin d’exploiter au maximum notre base de données. Premièrement, la première version de cette base a été établie sur un Google Spreadsheet partagé entre tous les étudiants. Pour le traitement de certains aspects spécifiques, R à été utilisé, ainsi que Prepost SEO et SEO Rank, respectivement afin d’obtenir l’Alexa et le Moz Rank. Enfin, AirTable et <a href="https://hyperotlet.huma-num.fr/otletosphere/">Opensphère</a>  ont permis de créer la DHsphère. 
                    Dans notre groupe, nous avons aussi utilisé … [spécifique à chaque groupe, Illustrator, Tableau, Wordpress, etc…]

                </p>            
            </div>

            
    
        </div>
    </div> -->
    <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" >
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            <div class="mt-5 d-flex align-items-center justify-content-center" style="height: 80vh" >
                <AllRadarChart  />
            </div>

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary"><b>Les méta-compétences de l'ensemble du corpus de formations : </b> </h2>
                <p>
                    Les formations peuvent varier en fonction de leur département de formation, des enseignants ou du pays offrant l'enseignement. Nous avons catégorisés les différents enseignements des différentes formations en 7 grandes catégories qui sont : la recherche, les outils, les corpus, la culture, la data, les méthodes et l’éditorialisation.
                    Puis nous avons fait le total du nombre d'enseignements dans une catégorie, divisé par l'ensemble des enseignements de toutes les catégories, afin de connaitre le poid de chaque catégorie vis à vis des autres catégories sur l'ensemble du corpus de formations. 

                </p>            
            </div>

            
    
        </div>
    </div>
    <!-- <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" style="height: 80vh">
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            <div class="mt-5 d-flex align-items-center justify-content-center" >
                <MixChart  />
            </div>

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary"><b>RÉPARTITION PAR DÉPARTEMENT :</b> </h2>
                <p>
                    De la même façon qu'en Europe, les formations dans les universités Anglo-saxonne sont intégrées dans des départements, académiques, aussi appelés en France "Unités de Formation et de Recherche" (UFR). 
                    Les étudiants ont été surpris de voir que onze des vingt-sept formations faisaient partie de départements dits d'"Arts", dix formations avaient leur propre département "Digital Humanities", et seulement quatre formations font partie des départements "Information & Communication", beaucoup plus répandus en Europe. 
                </p>            
            </div>

            
    
        </div>
    </div> -->
     
        
        
        <!-- <line-chart class="col-lg-6"  :download="true" :data="[[new Date(), 5], ['2017-01-01 00:00:00 UTC', 7]]"></line-chart>
        <br>
        <column-chart class="col-lg-6" :data="[['Sun', 32], ['Mon', 46], ['Tue', 28]]"></column-chart>
        <br>
        <area-chart class="col-lg-6" :data="{'2017-01-01': 11, '2017-01-02': 6}"></area-chart>
        <br> -->
</div>
      
     
  
</template>

<script>



import BubbleChart from "./charts/BubbleChart.vue";
import AllRadarChart from "./charts/AllRadarChart.vue";
import MixChart from "./charts/MixChart.vue";

export default {
  name: 'Example',
  components: {
    BubbleChart,
    AllRadarChart,
    MixChart
    
   
  },
  data() {
    return {
      worlds: []
    };

  },
  mounted(){
       axios
        .get('../api/worldformations')
        .then(response => {
          this.worlds = response.data.map(result => {
              return [[result.Pays],[result.nb]]

            })
        })
        
  },
  computed: {
    
    
  },

  
  methods: {
    
    
  },
};
</script>
