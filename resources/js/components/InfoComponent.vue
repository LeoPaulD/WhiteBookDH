<template>

  <div>
    
    <div v-for="info in infos ">


      <div> 
        
        <div class="d-flex flex-wrap justify-space-between bg-white rounded">
          <div class="col-4 d-flex justify-content-center align-items-center">
            <div>
              <img :src="'/img/logo-formations/'+info.Nom_universite+'.png'" :alt="info.Nom_universite+ ' logo'" style="max-width: 150px;">
            </div>
            
          </div>
          <div class="col-8">
            <h1 class="baskerville  m-2 " style="font-size: 24px"> <b>{{ info.Nom_formation }}</b>
          
        </h1>
        <h2 class="noto m-2" style="font-size: 18px">{{info.Nom_universite}}</h2>
        <span class="d-flex "><svg xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 0 24 24" width="24px" fill="#000000">
            <path d="M0 0h24v24H0z" fill="none" />
            <path
              d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
          </svg> &nbsp;{{ info.Ville }} </span>
          <a :href="info.Url_Université" class="d-flex " target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/></svg>
            &nbsp;Site de la formation
          </a>
          <a v-if="imprimable" OnClick="javascript:window.print()"  class="d-flex " target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/></svg>
            &nbsp;Imprimer
          </a>
          <a v-else :href="'/formations/'+info.id "  class="d-flex " target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 10l-6-6H4c-1.1 0-2 .9-2 2v12.01c0 1.1.9 1.99 2 1.99l16-.01c1.1 0 2-.89 2-1.99v-8zm-7-4.5l5.5 5.5H15V5.5z"/></svg>
            &nbsp;Voir la fiche
          </a>
          </div>
        </div>
        <br>
        <br>
       
        
          <div class="bg-white p-2 pt-3 rounded">
            <p class="noto  d-flex "><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
            height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
            <g>
              <rect fill="none" height="24" width="24" />
            </g>
            <g>
              <g>
                <rect height="7" width="3" x="4" y="10" />
                <rect height="7" width="3" x="10.5" y="10" />
                <rect height="3" width="20" x="2" y="19" />
                <rect height="7" width="3" x="17" y="10" />
                <polygon points="12,1 2,6 2,8 22,8 22,6" />
              </g>
            </g>
          </svg> {{ info.Departement }}</p>
          <p class="noto mt-2  p-2 "> {{ info.Description }}</p>
          </div>
          <br>
          
          <div class="d-flex justify-content-center flex-wrap bg-white rounded">
            <p class="noto  d-flex m-2 col-5"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M20,4H4C2.89,4,2.01,4.89,2.01,6L2,18c0,1.11,0.89,2,2,2h16c1.11,0,2-0.89,2-2V6C22,4.89,21.11,4,20,4z M11,10H8v1h3 c0.55,0,1,0.45,1,1v3c0,0.55-0.45,1-1,1h-1v0c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1v0H7c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1 h3v-1H7c-0.55,0-1-0.45-1-1V9c0-0.55,0.45-1,1-1h1v0c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v0h1c0.55,0,1,0.45,1,1v0 C12,9.55,11.55,10,11,10z M15.65,15.9L14,14.25h4l-1.65,1.65C16.16,16.09,15.84,16.09,15.65,15.9z M14,10l1.65-1.65 c0.2-0.2,0.51-0.2,0.71,0L18,10H14z"/></g></svg> &nbsp; Prix formation résident&nbsp;: {{ info.Frais_natif_dollars }} $</p>
            <p class="noto  d-flex m-2 col-5"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg> &nbsp; Classement Shangai&nbsp;: {{ info.Classement_Shangai }}</p>
            <br>
            <p class="noto  d-flex m-2 col-5"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M14 6V4h-4v2h4zM4 8v11h16V8H4zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4V4c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4z" fill-rule="evenodd"/></svg>&nbsp; Stage&nbsp;:  &nbsp;<span v-if="info.Stage == 1">Oui</span> <span v-else>Non</span></p>
            <p class="noto  d-flex m-2 col-5"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0,0h24v24H0V0z" fill="none"/><g><path d="M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H3v3c0,1.66,1.34,3,3,3h12c1.66,0,3-1.34,3-3V2 L19.5,3.5z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z"/><rect height="2" width="6" x="9" y="7"/><rect height="2" width="2" x="16" y="7"/><rect height="2" width="6" x="9" y="10"/><rect height="2" width="2" x="16" y="10"/></g></svg>&nbsp; Mémoire&nbsp;: &nbsp;<span v-if="info.Memoire == 1">Oui</span> <span v-else>Non</span></p>
          </div>
       
        <br>
        
        


        <div class=" d-flex justify-content-center bg-white rounded">
          
          <RadarChart :id="id"/>
          
        </div>
        <br>

        <!-- <MixChart  /> -->
        
        
        
        
        <!-- <br>
        <column-chart :data="[['Sun', 32], ['Mon', 46], ['Tue', 28]]"></column-chart>
        <br>
        <area-chart :data="{'2017-01-01': 11, '2017-01-02': 6}"></area-chart>
        <br>
        <geo-chart :data="[['United States', 44], ['Germany', 23], ['Brazil', 22]]"></geo-chart>
        <br>
        <vue-word-cloud :words="[['romance', 19], ['horror', 3], ['fantasy', 7], ['adventure', 3]]"
          :color="([, weight]) => weight > 10 ? 'DeepPink' : weight > 5 ? 'RoyalBlue' : 'Indigo'"
          font-family="Noto Sans" /> -->

          
      </div>
      

    </div>

  </div>

</template>

<script>


  import VueWordCloud from 'vuewordcloud';
  import Radar from 'vue-radar';
  import axios from 'axios';
  import RadarChart from "./charts/RadarChart.vue";
import MixChart from './charts/MixChart.vue';



  export default {
    name: 'App',
    props: {
      id: String,
      imprimable: Boolean,
    },
    components: {
      [VueWordCloud.name]: VueWordCloud,
      'v-radar': Radar,
      RadarChart,
        MixChart,

    },
    data() {
      return {
        infos: [],
        inforadar: [],
        
      };

    },
    
     watch: { 
      	id: function(newVal, oldVal) { // watch it
          
          axios
        .get('../api/infomaster/' + this.id)
        .then(response => (this.infos = response.data))
        }
      },
    mounted() {
      
      axios
        .get('../api/infomaster/' + this.id)
        .then(response => (this.infos = response.data))
      
      
      
        
    },
    
    computed: {
      
      
    },
    methods: {
      
        
      
    },
  };
</script>