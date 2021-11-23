<template>

  <div>

    <div v-for="info in infos ">


      <div>
        <h1 class="baskerville text-center m-2"> <b>{{ info.Nom_formation }}</b></h1>
        <p class="noto m-2"> {{info.Description}}</p>
        <p class="noto m-2"> {{ info.Departement }}</p>
        <div>


        </div>
        <br>
        <pie-chart :data="{'Outils': info.Outils, 'Recherche': info.Recherche, 'Corpus': info.Corpus, 'Culture': info.Culture, 'Service': info.Service, 'Data': info.Data, 'Methodes': info.Methodes}"></pie-chart>
        <br>
        <column-chart :data="[['Sun', 32], ['Mon', 46], ['Tue', 28]]"></column-chart>
        <br>
        <area-chart :data="{'2017-01-01': 11, '2017-01-02': 6}"></area-chart>
        <br>
        <geo-chart :data="[['United States', 44], ['Germany', 23], ['Brazil', 22]]"></geo-chart>
        <br>
        
      </div>

    </div>

  </div>

</template>

<script>
  export default {
    name: 'Example',
    props: {
      id: String,
    },
    components: {


    },
    data() {
      return {
        infos: [],
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