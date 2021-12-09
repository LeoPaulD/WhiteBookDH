<script>
import { Bar } from "vue-chartjs";

export default {
   props: {
      
    },

  extends: Bar,
 
  mounted() {
   
          this.renderChart(
      {
        labels: ['', '' , ''],
        datasets: 
        [
            {
                type: 'bar',
                label: 'Bar Component',
                data: [0, 20],
            },
            {
                type: 'line',
                backgroundColor: "transparent",
                label: 'Line Component',
                data: [10,10,10],
            }
          
          
          
        ]
      },
      { responsive: true, maintainAspectRatio: true }
    )
          
        


    
  }
};
</script>