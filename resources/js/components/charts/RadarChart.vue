<script>
import { Radar } from "vue-chartjs";
import axios from 'axios';
export default {
   props: {
      id: String,
    },

  extends: Radar,
  data() {
      return {
        labels: [],
        data: [],
        
      };

    },
  mounted() {
    axios
        .get('../api/radar/' + this.id)
        .then(response => {
          this.resulttest = response.data.map(result => {
              return result.nb

            })
            this.resulttest2 = this.resulttest.reduce((accumulator, currentValue) => accumulator + currentValue)

          this.data = response.data.map(item => {
            return  (item.nb / this.resulttest2)*100
            
          }),
          this.labels = response.data.map(item => {
            return item.categorie_matiere
            
          }),
          this.renderChart(
      {
        labels: this.labels,
        datasets: [
          {
            label: "Les métacompétences de cette formation",
            backgroundColor: "rgba(42, 59, 92, 0.6)",
            borderColor: "rgba(42, 59, 92, 0.6)",
            pointBackgroundColor: "rgba(179,181,198,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(179,181,198,1)",
            
            data: this.data
          },
          
          
          
        ]
      },
      { responsive: true, maintainAspectRatio: true }
    )
          
        })


    
  }
};
</script>