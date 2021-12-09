<template>

  <div>
    
    <div v-for="info in infos ">


      <div>
        <h2>{{data}} </h2>
        <h3>{{labels}}</h3>
        <h1 class="baskerville text-center m-2 d-flex justify-content-center"> <b>{{ info.titre }}</b>
          <a :href="info.url" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
              <path d="M0 0h24v24H0z" fill="none" />
              <path
                d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z" />
            </svg></a>
        </h1>
        <span class="d-flex  justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 0 24 24" width="24px" fill="#000000">
            <path d="M0 0h24v24H0z" fill="none" />
            <path
              d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
          </svg> {{ info.Ville }} </span>
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
          </svg> <b>{{ info.Departement }}</b></p>
          
        <p class="noto mt-2  p-2 bg-white rounded-sm"> {{ info.Description }}</p>


        <div class=" d-flex justify-content-center bg-white">
          
          <RadarChart :id="id"/>
          
        </div>
        <br>

        <MixChart  />
        
        
        
        
        <br>
        <column-chart :data="[['Sun', 32], ['Mon', 46], ['Tue', 28]]"></column-chart>
        <br>
        <area-chart :data="{'2017-01-01': 11, '2017-01-02': 6}"></area-chart>
        <br>
        <geo-chart :data="[['United States', 44], ['Germany', 23], ['Brazil', 22]]"></geo-chart>
        <br>
        <vue-word-cloud :words="[['romance', 19], ['horror', 3], ['fantasy', 7], ['adventure', 3]]"
          :color="([, weight]) => weight > 10 ? 'DeepPink' : weight > 5 ? 'RoyalBlue' : 'Indigo'"
          font-family="Noto Sans" />

          
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