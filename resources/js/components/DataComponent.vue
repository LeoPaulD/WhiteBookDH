<template>

  <div >
    
      
      <div>
        <h1 class="baskerville text-center m-2"> <b>Master in Digital Humanities</b></h1>
        <p class="noto"> The M.A. in Digital Humanities program cultivates both the practical skills and the humanistic knowledge needed to work on digital humanities-related projects in universities, libraries, museums, and non-profit cultural organizations.</p>
        </div>
        
 




  <v-app>
    <auto-component/>
  </v-app>
   
  
    
  <div class="d-flex flex-wrap justify-content-between"  >
        <geo-chart class="col-lg-6" :legend="true" :data="[['United States', 44], ['Canada', 23], ['India', 50], ['United Kingdom', 30]]"  xtitle="Nombre de master par pays" :download="true" :colors="['#db5239', '#A8510A', '#db3985', '#a7d9aa' ]"></geo-chart>
        
        
        <line-chart class="col-lg-6"  :download="true" :data="[[new Date(), 5], ['2017-01-01 00:00:00 UTC', 7]]"></line-chart>
        <br>
        <column-chart class="col-lg-6" :data="[['Sun', 32], ['Mon', 46], ['Tue', 28]]"></column-chart>
        <br>
        <area-chart class="col-lg-6" :data="{'2017-01-01': 11, '2017-01-02': 6}"></area-chart>
        <br>
        
        <pie-chart class="col-lg-6" :data="{'Blueberry': 44, 'Strawberry': 23}"></pie-chart>
    </div>
    
    
         
  </div>
  
</template>

<script>




export default {
  name: 'Example',
  components: {
    
   
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
