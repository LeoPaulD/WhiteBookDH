<template>

  <div>
    
    <div v-for="info in infos ">


      <div> 
        
        <div class="d-flex flex-wrap justify-space-between">
          <div class="col-4 d-flex justify-content-center align-items-center">
            <div>
              <img src="https://via.placeholder.com/120" alt="">
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
          </svg> {{ info.Ville }} </span>
          </div>
        </div>
        <br>
        <br>
       
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
          <br>
          
          <div class="d-flex justify-content-center flex-wrap">
            <p class="noto  d-flex m-2 col-5"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M20,4H4C2.89,4,2.01,4.89,2.01,6L2,18c0,1.11,0.89,2,2,2h16c1.11,0,2-0.89,2-2V6C22,4.89,21.11,4,20,4z M11,10H8v1h3 c0.55,0,1,0.45,1,1v3c0,0.55-0.45,1-1,1h-1v0c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1v0H7c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1 h3v-1H7c-0.55,0-1-0.45-1-1V9c0-0.55,0.45-1,1-1h1v0c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v0h1c0.55,0,1,0.45,1,1v0 C12,9.55,11.55,10,11,10z M15.65,15.9L14,14.25h4l-1.65,1.65C16.16,16.09,15.84,16.09,15.65,15.9z M14,10l1.65-1.65 c0.2-0.2,0.51-0.2,0.71,0L18,10H14z"/></g></svg> &nbsp; Prix formation résident&nbsp;: {{ info.Frais_natif_dollars }}</p>
            <p class="noto  d-flex m-2 col-5"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg> &nbsp; Classement Shangai&nbsp;: {{ info.Classement_Shangai }}</p>
            <br>
            <p class="noto  d-flex m-2 col-5"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M14 6V4h-4v2h4zM4 8v11h16V8H4zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4V4c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4z" fill-rule="evenodd"/></svg>&nbsp; Stage&nbsp;: Oui</p>
            <p class="noto  d-flex m-2 col-5"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0,0h24v24H0V0z" fill="none"/><g><path d="M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H3v3c0,1.66,1.34,3,3,3h12c1.66,0,3-1.34,3-3V2 L19.5,3.5z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z"/><rect height="2" width="6" x="9" y="7"/><rect height="2" width="2" x="16" y="7"/><rect height="2" width="6" x="9" y="10"/><rect height="2" width="2" x="16" y="10"/></g></svg>&nbsp; Mémoire&nbsp;: oui</p>
          </div>
       
        <br>
        <br>
        


        <div class=" d-flex justify-content-center bg-white">
          
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
          console.log('Prop changed: ', newVal, ' | was: ', oldVal)
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