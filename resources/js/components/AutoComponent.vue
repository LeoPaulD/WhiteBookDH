<template>
  <div
    
   
  >
  
  
    
    
    <v-form>
      <v-container>
        <v-row class="d-flex justify-content-center">
          
          <v-col cols="10">
            <v-autocomplete
              v-model="formations_id"
              :disabled="isUpdating"
              :items="formations"
              rounded
              solo
              chips
              color="blue-grey lighten-2"
              label="Comparer des formations"
              item-text="name"
              item-value="id"
              multiple
              prepend-icon="mdi-magnify"
            >
              <template v-slot:selection="data">
                <v-chip
                  v-bind="data.attrs"
                  :input-value="data.selected"
                  close
                  @click="data.select"
                  @click:close="remove(data.item)"
                >
                  <v-avatar left>
                    
                    <div v-if="data.item.group == 'Canada'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#2A3B5C' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.item.group == 'United States'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db5239' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.item.group == 'United Kingdom'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#A8510A' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.item.group == 'Ireland'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#88a845' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.item.group == 'Australia'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#927cd9' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.item.group == 'India'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db3985' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          
          <div v-if="data.item.group == 'New Zealand'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db7c2e' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
                  </v-avatar>
                  
                  {{ data.item.name }}
                </v-chip>
              </template>
              <template v-slot:item="data">
                <template v-if="typeof data.item !== 'object'">
                  <v-list-item-content v-text="data.item"></v-list-item-content>
                </template>
                <template v-else>
                  <v-list-item-avatar>
                   <div v-if="data.item.group == 'Canada'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#2A3B5C' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.item.group == 'United States'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db5239' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.item.group == 'United Kingdom'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#A8510A' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.item.group == 'Ireland'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#88a845' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.item.group == 'Australia'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#927cd9' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.item.group == 'India'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db3985' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          
          <div v-if="data.item.group == 'New Zealand'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db7c2e' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
                  </v-list-item-avatar>
                  <v-list-item-content>
                    <v-list-item-title class="baskerville"> 
                        {{data.item.name}}
                    </v-list-item-title>
                    <v-list-item-subtitle class="noto">
                      {{data.item.unniversity}}
                    </v-list-item-subtitle>
                    <v-list-item-subtitle class="d-flex">
                      <svg xmlns="http://www.w3.org/2000/svg" height="18px"
            viewBox="0 0 24 24" width="14px"  fill="#000000">
            <path d="M0 0h24v24H0z" fill="none" />
            <path
              d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
          </svg> {{data.item.group}}
                    </v-list-item-subtitle>
                  </v-list-item-content>
                </template>
              </template>
            </v-autocomplete>
          </v-col>
          
          
        </v-row>
        <div class="d-flex flex-wrap justify-content-around">
       <div v-for="fonction in formations_id"  class="col-md-5 shadow-sm m-2">
            <div class="">
              <info-component :id="fonction" ></info-component>
            </div>
        </div>
    </div>
      </v-container>
    </v-form>
    
   
  </div>
</template>
<script>
  import axios from 'axios'
  export default {
    data () {
      const srcs = {
        1: 'https://cdn.vuetifyjs.com/images/lists/1.jpg',
        2: 'https://cdn.vuetifyjs.com/images/lists/2.jpg',
        3: 'https://cdn.vuetifyjs.com/images/lists/3.jpg',
        4: 'https://cdn.vuetifyjs.com/images/lists/4.jpg',
        5: 'https://cdn.vuetifyjs.com/images/lists/5.jpg',
      }

      return {
        formations: [],
        
        formations_id: [],
        
      }
    },

    watch: {
      isUpdating (val) {
        if (val) {
          setTimeout(() => (this.isUpdating = false), 3000)
        }
      },
    },
    mounted(){
      axios
        .get('../api/masters')
        .then(response => {
          this.formations = response.data.map(result => {
              return {'id': result.id, 'name': result.Nom_formation, 'group': result.Pays, 'unniversity': result.Nom_universite}

            })
        })
    },
    methods: {
      remove (item) {
        const index = this.formations_id.indexOf(item.name)
        if (index >= 0) this.formations_id.splice(index, 1)
      },
    },
  }
</script>