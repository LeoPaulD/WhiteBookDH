<template>

  
    <div class="d-flex  justify-content-center   flex-wrap scrool" >
    
    
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" id="premices" style="height: 80vh;">
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            <div class="mt-5 d-flex align-items-center justify-content-center" >
                <img src="/img/illu/data.svg" alt="" srcset="" style="max-height: 350px">
            </div>

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-primary" ><b>En savoir plus sur les masters Humanités Digitales </b> </h2>
                <p>
                    Issu d’une réflexion de plusieurs mois par les chercheurs du <a href="https://mica.u-bordeaux-montaigne.fr/">MICA</a> , le projet du livre blanc des Humanités Digitales dans le monde Anglo-Saxon a permis aux étudiants du Master 2 DNHD de développer une cartographie des (méta?)compétences proposées dans les formations d'universités situées aux États-Unis, Royaume-Uni, Irlande, Canada, Inde, Nouvelle-Zélande et Australie.
                    Durant 4 mois et à l’aide d’une multitude d’outils, les étudiants ont cherché, traité et analysé les données qui leur permettent aujourd’hui de vous présenter ce tour d’horizon du projet, via diverses représentations visuelles détaillées. 
                </p>            
             </div>
    
        </div>
    </div>
    <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" style="height: 80vh">
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary"><b>HORIZON DES FORMATIONS : </b> </h2>
                <p>
                    Dans le monde Anglo-Saxon, nous avons recensé 27 formations, dont 8 aux États-Unis, 6 au Royaume-Uni, 4 au Canada, 4 en Irlande du Nord, 3 en Australie, 1 en Nouvelle-Zélande et 1 en Inde.
                    Dans notre recherche, nous nous sommes restreint au monde Anglo-Saxon afin de pouvoir ensuite comparer ce projet de Livre Blanc à son édition précédente. Nous avons aussi trié afin de n'avoir que des formations de niveau Master ou équivalent dans les différents pays.

                </p>            
            </div>

            <div class="mt-5 m-2 d-flex align-items-center justify-content-center" >
                <geo-chart class="m-4" :legend="true" :data="[['United States', 44], ['Canada', 23], ['India', 50], ['United Kingdom', 30]]"  xtitle="Nombre de master par pays" :download="true" :colors="['#db5239', '#A8510A', '#db3985', '#a7d9aa' ]"></geo-chart>
            </div>

            
    
        </div>
    </div>
    <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" style="height: 80vh">
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary"><b>DES FORMATIONS AUX APPROCHES HOMOGÈNES : </b> </h2>
                <p>
                    En analysant les noms des différentes matières proposées dans chaque université, nous pouvons voir distinctement que certains sujets d'études se démarquent, peu importe le pays ou le nom donné au Master. Ainsi, des thèmes tels que [mots qui ressortent le plus] ou [...] sont unanimements enseignés à travers le monde. 

                </p>            
            </div>

             <div class="mt-5 m-2 d-flex align-items-center justify-content-center" >
                <vue-word-cloud :words="[['romance', 19], ['horror', 3], ['fantasy', 7], ['adventure', 3]]"
          :color="([, weight]) => weight > 10 ? 'DeepPink' : weight > 5 ? 'RoyalBlue' : 'Indigo'"
          font-family="Noto Sans" /> 
            </div>

            
    
        </div>
    </div>
    <br>
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
    </div>
    <br>
    <hr class="col-8">
    <br>
    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10  d-flex align-center" style="height: 80vh">
        <div class="grid grid-cols-1 md:grid-cols-2" >
            
            <div class="mt-5 d-flex align-items-center justify-content-center" >
                <RadarChart  id="4"/>
            </div>

            <div class=" d-flex flex-column justify-content-center  col-lg-11  " >              
                <h2 class="baskerville text-secondary"><b>UNIVERSITÉS ET NOTORIÉTÉ WEB : </b> </h2>
                <p>
                    Nous avons utilisé une multitude d’outils durant la réalisation de ce projet afin d’exploiter au maximum notre base de données. Premièrement, la première version de cette base a été établie sur un Google Spreadsheet partagé entre tous les étudiants. Pour le traitement de certains aspects spécifiques, R à été utilisé, ainsi que Prepost SEO et SEO Rank, respectivement afin d’obtenir l’Alexa et le Moz Rank. Enfin, AirTable et <a href="https://hyperotlet.huma-num.fr/otletosphere/">Opensphère</a>  ont permis de créer la DHsphère. 
                    Dans notre groupe, nous avons aussi utilisé … [spécifique à chaque groupe, Illustrator, Tableau, Wordpress, etc…]

                </p>            
            </div>

            
    
        </div>
    </div>
    <br>
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
    </div>
     
        
        
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
import RadarChart from "./charts/RadarChart.vue";
import MixChart from "./charts/MixChart.vue";

export default {
  name: 'Example',
  components: {
    BubbleChart,
    RadarChart,
    MixChart
    
   
  },
  data() {
    return {
     
    };

  },
  computed: {
    
    
  },
  methods: {
    
    
  },
};
</script>
