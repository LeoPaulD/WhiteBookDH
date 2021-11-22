<template>

  <div >
    
      
      <div>
        <h1 class="baskerville text-center m-2"> <b>Master in Digital Humanities</b></h1>
        <p class="noto"> The M.A. in Digital Humanities program cultivates both the practical skills and the humanistic knowledge needed to work on digital humanities-related projects in universities, libraries, museums, and non-profit cultural organizations.</p>
        <div>
    
    
  </div>
        <br>
        <line-chart  :data="[[new Date(), 5], ['2017-01-01 00:00:00 UTC', 7]]"></line-chart>
        <br>
        <column-chart :data="[['Sun', 32], ['Mon', 46], ['Tue', 28]]"></column-chart>
        <br>
        <area-chart :data="{'2017-01-01': 11, '2017-01-02': 6}"></area-chart>
        <br>
        <geo-chart :data="[['United States', 44], ['Germany', 23], ['Brazil', 22]]"></geo-chart>
        <br>
        <pie-chart :data="{'Blueberry': 44, 'Strawberry': 23}"></pie-chart>
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
